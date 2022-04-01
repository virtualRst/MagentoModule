<?php
/**
*
* Copyright © 2019 Magento. All rights reserved.
* See COPYING.txt for license details.
*/
namespace Hummingbird\Module\Plugin\Magento\Theme\Block\Html;
use \Magento\Theme\Block\Html\Breadcrumbs as MagentoBreadCrumbs;

/**
* Class BeforeBreadcrumbsPlugin
*/
class BeforeBreadcrumbsPlugin
{
/**
* @param \Magento\Theme\Block\Html\Breadcrumbs $subject
* @param $crumbName
* @param $crumbInfo
* @return array
*/
public function beforeAddCrumb(MagentoBreadCrumbs $subject, $crumbName, $crumbInfo)
{
    $crumbInfo['label'] = 'Hummingbird-'.$crumbInfo['label'];
return [$crumbName, $crumbInfo];
}
}