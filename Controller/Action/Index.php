<?php
namespace Hummingbird\Module\Controller\Action;
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
$block = $this->_pageFactory->create()->getLayout()->createBlock('Hummingbird\Module\Block\Message');
$block->setTemplate('template.phtml');
$result = $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_RAW);
$result->setContents($block->toHtml());
}
}