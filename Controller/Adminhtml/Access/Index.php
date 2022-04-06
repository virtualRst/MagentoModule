<?php
namespace Hummingbird\Module\Controller\Adminhtml\Access;

class Index extends \Magento\Backend\App\Action
{
    public function execute()
    {
        $result = $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_RAW);
        $result->setContents('Hello World!');
        return $result;
    }
    protected function _isAllowed()
    {
        $secret = $this->getRequest()->getParam('access');
        return isset($secret) && (int) $secret == 1;
    }
    public function _processUrlKeys()
    {
        return true;
    }
}
