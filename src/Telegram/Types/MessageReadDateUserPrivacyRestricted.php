<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The read date is unknown due to privacy settings of the other user
 */
class MessageReadDateUserPrivacyRestricted extends MessageReadDate implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageReadDateUserPrivacyRestricted',
        ];
    }
}
