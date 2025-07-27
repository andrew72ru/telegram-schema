<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for StoryPrivacySettings types.
 */
abstract class StoryPrivacySettings implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
