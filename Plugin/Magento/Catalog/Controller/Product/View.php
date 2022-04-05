<?php
namespace Hummingbird\Module\Plugin\Magento\Catalog\Controller\Product;
class View extends \Magento\Framework\App\Action\Action
{
public function execute()
{
return $this->resultFactory->create('raw')->setContents(' echo plugin ');
}
public function afterExecute(\Magento\Catalog\Controller\Product\View $controller,
$result)
{
    return $result;
    //remove comment during evaluation. put commnet on reuturn $reuslt.
    // return $this->resultFactory->create('raw')->setContents(' echo plugin ');
}
}