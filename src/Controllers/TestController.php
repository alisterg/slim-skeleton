<?php

class TestController
{
    protected $container;

    public function __construct(\Interop\Container\ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function test($request, $response, $args)
    {
        // your code
        // to access items in the container... $this->container->get('');
        return $response;
    }
}
