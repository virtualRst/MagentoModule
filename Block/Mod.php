<?php
namespace Hummingbird\Module\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Hummingbird\Module\Helper\Data;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Mod extends Template
{
    public function __construct(
        Context $context, Data $helper,
        ScopeConfigInterface $scopeConfig,
        array $data = []
    )
    {
        $this->helper = $helper;
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context, $data);
    }

    public function isEnabled()
    {
        return $this->helper->isEnabled();
    }

    public function getDisplayText()
    {
        return $this->helper->getDisplayText();
    }
}