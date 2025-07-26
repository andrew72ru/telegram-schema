<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A button that sends the user's phone number when pressed; available only in private chats
 */
class KeyboardButtonTypeRequestPhoneNumber extends KeyboardButtonType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'keyboardButtonTypeRequestPhoneNumber',
        ];
    }
}
