<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A button that sends the user's location when pressed; available only in private chats.
 */
class KeyboardButtonTypeRequestLocation extends KeyboardButtonType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'keyboardButtonTypeRequestLocation',
        ];
    }
}
