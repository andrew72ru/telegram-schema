<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for ReportChatResult types.
 */
abstract class ReportChatResult implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
