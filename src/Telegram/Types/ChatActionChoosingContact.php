<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user is picking a contact to send
 */
class ChatActionChoosingContact extends ChatAction implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatActionChoosingContact',
        ];
    }
}
