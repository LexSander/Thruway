<?php

namespace Thruway\Module;


use React\EventLoop\LoopInterface;
use Thruway\Peer\Client;
use Thruway\Peer\RouterInterface;

/**
 * Class Module
 * @package Thruway\Module
 */
class Module implements ModuleInterface
{
    /**
     * @var RouterInterface
     */
    protected $router;

    /**
     * @var LoopInterface
     */
    protected $loop;

    /**
     * @param RouterInterface $router
     * @param LoopInterface $loop
     */
    public function initModule(RouterInterface $router, LoopInterface $loop)
    {
        $this->router = $router;
        $this->loop = $loop;
    }

    public function getLoop() {
        return $this->loop;
    }
}