<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A mention of a user, a supergroup, or a channel by their username
 */
class TextEntityTypeMention extends TextEntityType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'textEntityTypeMention',
        ];
    }
}
