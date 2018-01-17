<?php
namespace Ling;

use PHPUnit\Framework\TestCase;
use function Ling\startsWith;


class utilTest extends TestCase {

    public function testStartsWidth () {
        self::assertTrue(startsWith('helloWorld', 'hello'));
        self::assertFalse(startsWith('worldHello', 'hello'));
    }

    public function testEndsWidth () {
        self::assertTrue(endsWith('helloWorld', 'World'));
        self::assertFalse(endsWith('worldHello', 'world'));
    }

}