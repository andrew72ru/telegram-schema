<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The main data channel for audio and video data
 */
class GroupCallDataChannelMain extends GroupCallDataChannel implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'groupCallDataChannelMain',
        ];
    }
}
