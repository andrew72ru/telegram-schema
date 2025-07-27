<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for InviteGroupCallParticipantResult types.
 */
abstract class InviteGroupCallParticipantResult implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
