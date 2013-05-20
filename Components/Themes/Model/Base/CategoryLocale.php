<?php

namespace Components\News\Model\Base;

abstract class CategoryLocale extends \Framework\CMS\ORM\Record
{
    const TABLE_NAME = 'com_news_categories_locale';

    const MODEL_NAME = 'Components\News\Model\CategoryLocale';

    public function __construct()
    {
        parent::__construct(self::TABLE_NAME, self::MODEL_NAME);
    }

    protected function initFields()
    {
        $this->hasColumn('id', 'PU:int(10)');
        $this->hasColumn('lang_id', 'PU:int(10)');
        $this->hasColumn('title', 'varchar(255)');
        $this->hasColumn('alias', 'varchar(255)');
        $this->hasColumn('description', 'mediumtext');
        $this->hasColumn('completed', 'tinyint(4)|0');
    }
}
