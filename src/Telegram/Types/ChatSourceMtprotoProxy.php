<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The chat is sponsored by the user's MTProxy server
 */
class ChatSourceMtprotoProxy extends ChatSource implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatSourceMtprotoProxy',
        ];
    }
}
