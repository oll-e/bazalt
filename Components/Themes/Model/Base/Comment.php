<?php
namespace Components\News\Model\Base;

abstract class Comment extends \Framework\CMS\ORM\Record
{
    const TABLE_NAME = 'com_news_comments';

    const MODEL_NAME = 'Components\News\Model\Comment';

    public function __construct()
    {
        parent::__construct(self::TABLE_NAME, self::MODEL_NAME);
    }

    protected function initFields()
    {
        $this->hasColumn('id', 'PUA:int(10)');
        $this->hasColumn('news_id', 'U:int(10)');
        $this->hasColumn('body', 'text');
        $this->hasColumn('created_at', 'datetime');

        // Ідентифікація користувача
        $this->hasColumn('user_name', 'N:varchar(100)');
        $this->hasColumn('browser_id', 'U:int(10)');
        $this->hasColumn('ip', 'U:int(10)');
        $this->hasColumn('user_id', 'U:int(10)');

        $this->hasColumn('is_deleted', 'U:tinyint(1)|0');
        $this->hasColumn('is_moderated', 'U:tinyint(1)|0');

        // NestedSet
        $this->hasColumn('lft', 'U:int(10)');
        $this->hasColumn('rgt', 'U:int(10)');
        $this->hasColumn('depth', 'U:int(10)');
    }

    public function initRelations()
    {
        $this->hasRelation('Elements', new \ORM_Relation_NestedSet('\Components\News\Model\Comment', 'news_id'));
        $this->hasRelation('User', new \ORM_Relation_One2One('\Framework\CMS\Model\User', 'user_id',  'id'));
        $this->hasRelation('Article', new \ORM_Relation_One2One('\Components\News\Model\Article', 'news_id',  'id'));
    }

    public function initPlugins()
    {
        $this->hasPlugin('ORM_Plugin_Timestampable', array(
                'created' => 'created_at',
                'updated' => 'updated_at'
            ));
    }
    
}