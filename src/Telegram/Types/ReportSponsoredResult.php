<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for ReportSponsoredResult types
 */
abstract class ReportSponsoredResult implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
