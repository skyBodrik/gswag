<?php

namespace SkyBodrik\Gswag;

class GswagService
{
    public function __construct(private $config)
    {

    }

    public function getConfig()
    {
        return $this->config;
    }
}