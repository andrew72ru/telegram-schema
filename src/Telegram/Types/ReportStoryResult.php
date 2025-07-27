<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for ReportStoryResult types.
 */
abstract class ReportStoryResult implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
