<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A button to buy something. This button must be in the first column and row of the keyboard and can be attached only to a message with content of the type messageInvoice
 */
class InlineKeyboardButtonTypeBuy extends InlineKeyboardButtonType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inlineKeyboardButtonTypeBuy',
        ];
    }
}
