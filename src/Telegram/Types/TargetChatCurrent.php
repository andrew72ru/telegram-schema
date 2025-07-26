<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The currently opened chat and forum topic must be kept
 */
class TargetChatCurrent extends TargetChat implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'targetChatCurrent',
        ];
    }
}
