<?php declare(strict_types=1);

namespace KataTests;

use Kata\Stack;
use PHPUnit\Framework\TestCase;

class MyClassTest extends TestCase
{
    /** @test */
    public function given_an_empty_stack_is_empty_should_be_true(): void
    {
        $stack = new Stack();

        $result = $stack->isEmpty();

        self::assertEquals(true, $result);
    }
}
