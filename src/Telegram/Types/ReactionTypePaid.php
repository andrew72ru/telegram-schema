<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The paid reaction in a channel chat
 */
class ReactionTypePaid extends ReactionType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reactionTypePaid',
        ];
    }
}
