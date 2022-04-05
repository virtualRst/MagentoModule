<?php
/**
 *
 * Copyright © Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Hummingbird\Module\Controller;

/**
 * Class Router
 */
class Router implements \Magento\Framework\App\RouterInterface
{
/**
 * @var \Magento\Framework\App\ActionFactory
 */
    protected $actionPath;
/**
 * Router constructor.
 * @param \Magento\Framework\App\ActionFactory $actionFactory
 */
    public function __construct(\Magento\Framework\App\ActionFactory $actionFactory)
    {
        $this->actionPath = $actionFactory;
    }
/**
 * @param \Magento\Framework\App\RequestInterface $request
 * @return \Magento\Framework\App\ActionInterface|null
 */
    public function match(\Magento\Framework\App\RequestInterface $request)
    {
        $testCategory = 'id/13';
        $info = $request->getPathInfo();
        if (preg_match_all("%(?=([A-Z][a-z]+))%", $info, $m)) {
            $request->setPathInfo(sprintf("/%s/%s/%s/%s", strtolower($m[1][0]), strtolower($m[1][1]), strtolower($m[1][2]),$testCategory));
            return $this->actionPath->create('Magento\Framework\App\Action\Forward',
                ['request' => $request]);
        }
        return null;
    }
}
