<?php

declare(strict_types=1);

namespace Admin;

class Kernel
{
    private const VERSION = '1.0.0';

    public static function create(): self
    {
        return new self();
    }

    public function getVersion(): string
    {
        return self::VERSION;
    }
}