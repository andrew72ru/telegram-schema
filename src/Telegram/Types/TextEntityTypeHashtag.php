<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A hashtag text, beginning with "#" and optionally containing a chat username at the end
 */
class TextEntityTypeHashtag extends TextEntityType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'textEntityTypeHashtag',
        ];
    }
}
