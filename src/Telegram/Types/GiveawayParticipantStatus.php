<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for GiveawayParticipantStatus types
 */
abstract class GiveawayParticipantStatus implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
