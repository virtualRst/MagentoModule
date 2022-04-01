<?php
namespace Hummingbird\Module\Plugin;
/**
*
* Copyright © Magento. All rights reserved.
* See COPYING.txt for license details.
*/
/**
* Class AfterPricePlugin
*/

class AfterPricePlugin
{
/**
* @param \Magento\Catalog\Model\Product $subject
* @param $result
* @return mixed
*/
public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
{
    $price=$subject->getPrice();
    if($price<60){
        return $result.' SALE';
    }
    return $result;
}
}