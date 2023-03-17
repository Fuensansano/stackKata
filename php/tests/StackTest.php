<?php declare(strict_types=1);

namespace KataTests;

use Kata\Stack;
use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    /** @test */
    public function given_an_empty_stack_is_empty_should_be_true(): void
    {
        $stack = new Stack();

        $result = $stack->isEmpty();

        self::assertEquals(true, $result);
    }

    /** @test */
    public function given_a_non_empty_stack_is_empty_should_be_false(): void
    {
        $stack = new Stack([1]);

        $result = $stack->isEmpty();

        self::assertEquals(false, $result);
    }

    /** @test */
    public function given_an_empty_stack_then_should_have_zero_size(): void
    {
        $stack = new Stack();

        $result = $stack->size();

        self::assertEquals(0, $result);
    }

    /** @test */
    public function given_a_two_elements_stack_then_should_have_size_two(): void
    {
        $stack = new Stack([1,2]);

        $result = $stack->size();

        self::assertEquals(2, $result);
    }

    /** @test */
    public function given_a_single_element_stack_then_peek_should_return_that_element(): void
    {
        $stack = new Stack([24]);

        $result = $stack->peek();

        self::assertEquals(24, $result);
    }

    /** @test */
    public function given_a_two_element_stack_then_peek_should_return_last_element(): void
    {
        $stack = new Stack([24, 48]);

        $result = $stack->peek();

        self::assertEquals(48, $result);
    }

    /** @test */
    public function given_an_empty_stack_then_push_should_increase_the_size(): void
    {
        $stack = new Stack();

        $stack->push(1);

        self::assertEquals(1, $stack->size());
    }
}
