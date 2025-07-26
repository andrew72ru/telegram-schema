<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for LanguagePackStringValue types
 */
abstract class LanguagePackStringValue implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
