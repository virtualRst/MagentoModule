<?php
namespace Hummingbird\Module\Controller\Hello;

class Index extends \Magento\Framework\App\Action\Action
{
    //for hello world
    // protected $_pageFactory;
    // public function __construct(
    //     \Magento\Framework\App\Action\Context $context,
    //     \Magento\Framework\View\Result\PageFactory $pageFactory
    // ) {
    //     $this->_pageFactory = $pageFactory;
    //     return parent::__construct($context);
    // }
    // public function execute()
    // {
    //     $result = $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_RAW);
    //     $result->setContents('Hello World');
    //     return $result;
    // }
    public function execute()
    {
        $this->_redirect('catalog/product/view/id/16');
    }
    public function _processUrlKeys()
    {
        return true;
    }
}
