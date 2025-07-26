<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The chat is a private or secret chat with a mutual contact and the user's phone number can be shared with the other user using the method sharePhoneNumber
 */
class ChatActionBarSharePhoneNumber extends ChatActionBar implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatActionBarSharePhoneNumber',
        ];
    }
}
