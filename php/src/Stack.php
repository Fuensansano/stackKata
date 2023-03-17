<?php declare(strict_types=1);

namespace Kata;

class Stack
{
    public function __construct(private array $elements = [])
    {

    }

    public function isEmpty(): bool
    {
        return empty($this->elements);
    }

    public function size(): int
    {
        return count($this->elements);
    }
}
