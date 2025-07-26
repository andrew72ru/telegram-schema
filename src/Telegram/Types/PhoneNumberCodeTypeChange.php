<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Checks ownership of a new phone number to change the user's authentication phone number; for official Android and iOS applications only
 */
class PhoneNumberCodeTypeChange extends PhoneNumberCodeType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'phoneNumberCodeTypeChange',
        ];
    }
}
