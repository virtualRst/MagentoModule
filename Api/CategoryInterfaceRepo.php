<?php
 namespace HummingBird\Module\Api;
 
 interface CategoryInterfaceRepo extends \Magento\Framework\Api\CustomAttributesDataInterface
 {
     const KEY_PARENT_ID = 'parent_id';
     const KEY_NAME = 'name';
     const KEY_IS_ACTIVE = 'is_active';
     const KEY_POSITION = 'position';
     const KEY_LEVEL = 'level';
     const KEY_UPDATED_AT = 'updated_at';
     const KEY_CREATED_AT = 'created_at';
     const KEY_PATH = 'path';
     const KEY_AVAILABLE_SORT_BY = 'available_sort_by';
     const KEY_INCLUDE_IN_MENU = 'include_in_menu';
     const KEY_PRODUCT_COUNT = 'product_count';
     const KEY_CHILDREN_DATA = 'children_data';
 
     const ATTRIBUTES = [
         'id',
         self::KEY_PARENT_ID,
         self::KEY_NAME,
         self::KEY_IS_ACTIVE,
         self::KEY_POSITION,
         self::KEY_LEVEL,
         self::KEY_UPDATED_AT,
         self::KEY_CREATED_AT,
         self::KEY_AVAILABLE_SORT_BY,
         self::KEY_INCLUDE_IN_MENU,
         self::KEY_CHILDREN_DATA,
     ];
     public function getId();
 
     public function setId($id);
 
     public function getParentId();
 
     public function setParentId($parentId);
 
     public function getName();
 
     public function setName($name);
 
     public function getIsActive();
 
     public function setIsActive($isActive);
 
     public function getPosition();
 
     public function setPosition($position);
 
     public function getLevel();
 
     public function setLevel($level);
 
     public function getChildren();
 
     public function getCreatedAt();
 
     public function setCreatedAt($createdAt);
 
     public function getUpdatedAt();
 
     public function setUpdatedAt($updatedAt);
 
     public function getPath();
 
     public function setPath($path);
 
     public function getAvailableSortBy();
 
     public function setAvailableSortBy($availableSortBy);
 
     public function getIncludeInMenu();
 
     public function setIncludeInMenu($includeInMenu);
 
     public function getExtensionAttributes();
 
     public function setExtensionAttributes(\Magento\Catalog\Api\Data\CategoryExtensionInterface $extensionAttributes);
 }