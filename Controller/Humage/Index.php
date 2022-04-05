<?php
namespace Hummingbird\Module\Controller\Humage;

class Index extends \Magento\Backend\App\Action{
    protected $hummageTest;
	protected $resultPageFactory;
    public function __construct(
        \Hummingbird\Module\Humage\Test $hummageTest,
        \Magento\Backend\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $resultPageFactory
    ){
        $this->hummageTest=$hummageTest;
        $this->resultPageFactory->$resultPageFactory;

    }
    public function execute(){
        echo $this->hummageTest->displayParams();
    }
}