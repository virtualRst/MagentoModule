<?php

namespace Hummingbird\Module\Helper;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    const IS_ENABLED = 'module_test/general/enable';
    const TEXT = 'module_test/text/custom_text';

    protected $scopeConfig;

    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        parent::__construct($context);

    }

    public function isEnabled()
    {
        $isEnabled = $this->scopeConfig->getValue(self::IS_ENABLED,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );

        return $isEnabled;
    }

    public function getDisplayText()
    {
        $displayText = $this->scopeConfig->getValue(self::TEXT,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
        return $displayText;
    }
}