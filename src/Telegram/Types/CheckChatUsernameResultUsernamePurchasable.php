<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The username can be purchased at https://fragment.com. Information about the username can be received using getCollectibleItemInfo
 */
class CheckChatUsernameResultUsernamePurchasable extends CheckChatUsernameResult implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'checkChatUsernameResultUsernamePurchasable',
        ];
    }
}
