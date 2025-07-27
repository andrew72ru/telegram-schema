<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for CallProblem types.
 */
abstract class CallProblem implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
