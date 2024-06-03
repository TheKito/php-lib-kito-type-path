<?php

declare(strict_types=1);

namespace Kito\Type\Path;

use PHPUnit\Framework\TestCase;

class PathTest extends TestCase
{
    public function testPathClassConstructor(): void
    {
        $object = new Path();
        $this->assertInstanceOf(Path::class, $object);
    }
}