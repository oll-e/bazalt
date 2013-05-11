<?php

namespace Components\Shop\Model\Base;

abstract class Product extends \Framework\CMS\ORM\Record
{
    const TABLE_NAME = 'com_shop_products';

    const MODEL_NAME = 'Components\Shop\Model\Product';

    public function __construct()
    {
        parent::__construct(self::TABLE_NAME, self::MODEL_NAME);
    }

    protected function initFields()
    {
        $this->hasColumn('id', 'PUA:int(10)');
        $this->hasColumn('shop_id', 'UN:int(10)');
        $this->hasColumn('type_id', 'U:int(10)');
        $this->hasColumn('brand_id', 'U:int(10)');
        $this->hasColumn('count_img', 'U:int(10)');
        $this->hasColumn('user_id', 'U:int(10)'); 
        $this->hasColumn('code', 'varchar(255)');
        $this->hasColumn('price', 'float');
        $this->hasColumn('count', 'U:int(10)|0');
        $this->hasColumn('hit', 'U:tinyint(1)|0');
        $this->hasColumn('is_latest', 'U:tinyint(1)|0');
        $this->hasColumn('is_discount', 'U:tinyint(1)|0');
        //$this->hasColumn('is_auction', 'U:tinyint(1)|0');
        $this->hasColumn('can_order', 'U:tinyint(1)|0');
        $this->hasColumn('in_stock', 'U:tinyint(1)|0');
        $this->hasColumn('is_published', 'U:tinyint(1)|0');
        // $this->hasColumn('price', 'U:double(10,4)|0');
    }

    public function initRelations()
    {
        $this->hasRelation('Brand', new \ORM_Relation_One2One('Components\Shop\Model\Brand', 'brand_id',  'id'));
        $this->hasRelation('ProductType', new \ORM_Relation_One2One('Components\Shop\Model\ProductType', 'type_id',  'id'));
        $this->hasRelation('User', new \ORM_Relation_One2One('Framework\CMS\Model\User', 'user_id',  'id'));
        $this->hasRelation('Variants', new \ORM_Relation_One2Many('Components\Shop\Model\ProductsVariants', 'id', 'product_id'));
        $this->hasRelation('Images', new \ORM_Relation_One2Many('Components\Shop\Model\ProductImage', 'id', 'product_id'));

        $this->hasRelation('Categories', new \ORM_Relation_Many2Many('Components\Shop\Model\Category', 'product_id', 'Components\Shop\Model\ProductsCategories', 'category_id'));
        $this->hasRelation('PublicCategories', new \ORM_Relation_Many2Many('Components\Shop\Model\Category', 'product_id', 'Components\Shop\Model\ProductsCategories', 'category_id', array('is_publish' => 1)));

        $this->hasRelation('Fields', new \ORM_Relation_Many2Many('Components\Shop\Model\Field', 'product_id', 'Components\Shop\Model\ProductsFields', 'field_id'));
    }
    
    public function initPlugins()
    {
        $this->hasPlugin('Framework\CMS\ORM\Localizable', ['title', 'description']);
        $this->hasPlugin('Framework\System\ORM\Plugin\Timestampable', ['created' => 'created_at', 'updated' => 'updated_at']);
    }

}