<?php
namespace Hummingbird\Module\Controller\Employee;
class Index extends \Magento\Framework\App\Action\Action
{
protected $_pageFactory;
public function __construct(
\Magento\Framework\App\Action\Context $context,
\Magento\Framework\View\Result\PageFactory $pageFactory
) {
$this->_pageFactory = $pageFactory;
parent::__construct($context);
}
/**
* @return \Magento\Framework\Controller\ResultInterface
*/
public function execute()
{
    $result=$this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_PAGE);
    return $result;
}
}