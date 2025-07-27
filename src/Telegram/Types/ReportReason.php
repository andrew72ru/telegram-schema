<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for ReportReason types.
 */
abstract class ReportReason implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
