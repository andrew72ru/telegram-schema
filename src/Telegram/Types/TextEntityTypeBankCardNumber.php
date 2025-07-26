<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A bank card number. The getBankCardInfo method can be used to get information about the bank card
 */
class TextEntityTypeBankCardNumber extends TextEntityType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'textEntityTypeBankCardNumber',
        ];
    }
}
