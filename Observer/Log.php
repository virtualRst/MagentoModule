<?php
/**
*
* Copyright © Magento. All rights reserved.
* See COPYING.txt for license details.
*/
namespace Hummingbird\Module\Observer;
/**
* Class Log
*/
class Log implements \Magento\Framework\Event\ObserverInterface
{
/**
* @var \Psr\Log\LoggerInterface
*/
private $_logger;
/**
* @var \Magento\Framework\App\RequestInterface
*/
private $_request;
/**
* Log constructor.
* @param \Psr\Log\LoggerInterface $logger
* @param \Magento\Framework\App\RequestInterface $request
*/
public function __construct(
\Psr\Log\LoggerInterface $logger,
\Magento\Framework\App\RequestInterface $request)
{
$this->_logger = $logger;
$this->_request = $request;
}
/**
* @param \Magento\Framework\Event\Observer $observer
*/
public function execute(\Magento\Framework\Event\Observer $observer)
{
    $product = $observer->getProduct();
    $originalName = $product->getName();
    $modifiedName = $originalName . ' - Modified by Magento 2 Events and Observers';
    $product->setName($modifiedName);
    $this->_logger->info($modifiedName);
}
}