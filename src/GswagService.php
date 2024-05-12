<?php

namespace SkyBodrik\Gswag;

class GswagService
{
    public function __construct(private readonly $config)
    {

    }

    public function getConfig()
    {
        return $this->config;
    }
}