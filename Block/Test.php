<?php
/**
*
* Copyright © Magento. All rights reserved.
* See COPYING.txt for license details.
*/
namespace Hummingbird\Module\Block;
/**
* Class Test
* @package Unit3\HelloWorldBlock\Block
*/
class Test extends \Magento\Framework\View\Element\AbstractBlock
{
/**
* @return string
*/
protected function _toHtml()
{
return "<b>Hello world from the block!</b>";
}
protected function _afterToHtml($html){
return $html."<b> I am after!</b>";
}
}