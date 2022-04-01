<?php
/**
*
* Copyright © Magento. All rights reserved.
* See COPYING.txt for license details.
*/
namespace Hummingbird\Module\Plugin\Magento\Theme\Block\Html;


use Magento\Framework\View\Element\Template;

/**
* Class AfterFooterPlugin
*/
class AfterHeaderPlugin
{
/**
* @param \Magento\Theme\Block\Html\Header $subject
* @param $result
* @return string
*/
public function afterGetWelcome(\Magento\Theme\Block\Html\Header $subject, $result)
{
return 'Custom Message';
}
}
