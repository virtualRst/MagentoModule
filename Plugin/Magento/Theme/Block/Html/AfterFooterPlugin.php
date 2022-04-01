<?php
/**
*
* Copyright © Magento. All rights reserved.
* See COPYING.txt for license details.
*/
namespace Hummingbird\Module\Plugin\Magento\Theme\Block\Html;
use \Magento\Theme\Block\Html\Welcome as Welcome;

/**
* Class AfterFooterPlugin
*/
class AfterFooterPlugin
{
/**
* @param \Magento\Theme\Block\Html\Footer $subject
* @param $result
* @return string
*/
public function afterGetCopyright(\Magento\Theme\Block\Html\Footer $subject, $result)
{
return 'Customized copyright!';
}
public function afterGetWelcome(Welcome $subject, $result)
{
return 'Customized welcome!';
}
}
