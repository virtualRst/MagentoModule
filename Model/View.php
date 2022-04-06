<?php

namespace Hummingbird\Module\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
use \Hummingbird\Module\Api\Data\EmployeeInterface;

class View extends AbstractModel implements EmployeeInterface, IdentityInterface
{
    const CACHE_TAG = 'employee_table';

    protected function _construct()
    {
        $this->_init(\Hummingbird\Module\Model\ResourceModel\View::class);
    }


    public function getFirstName()
    {
        return $this->getData(self::FIRST_NAME);
    }

    public function getLastName()
    {
        return $this->getData(self::LAST_NAME);
    }

    public function getEmail()
    {
        return $this->getData(self::EMAIL);
    }

    public function getId()
    {
        return $this->getData(self::EMPLOYEE_ID);
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function setFirstName($title)
    {
        return $this->setData(self::FIRST_NAME, $title);
    }

    public function setLastName($content)
    {
        return $this->setData(self::LASTNAME, $content);
    }

    public function setEmailId($createdAt)
    {
        return $this->setData(self::EMAIL_ID, $createdAt);
    }

    public function setId($id)
    {
        return $this->setData(self::EMPLOYEE_ID, $id);
    }
}