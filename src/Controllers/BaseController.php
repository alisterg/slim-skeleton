<?php

namespace TestingStuff\Controllers;

use Interop\Container\ContainerInterface;

abstract class BaseController
{
    protected $container;
    protected $view;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->view = $container->get('renderer');
    }
}
