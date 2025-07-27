<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for SupergroupMembersFilter types.
 */
abstract class SupergroupMembersFilter implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
