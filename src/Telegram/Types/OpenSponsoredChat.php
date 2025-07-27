<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Informs TDLib that the user opened a sponsored chat @sponsored_chat_unique_id Unique identifier of the sponsored chat.
 */
class OpenSponsoredChat extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('sponsored_chat_unique_id')]
        private int $sponsoredChatUniqueId,
    ) {
    }

    public function getSponsoredChatUniqueId(): int
    {
        return $this->sponsoredChatUniqueId;
    }

    public function setSponsoredChatUniqueId(int $sponsoredChatUniqueId): self
    {
        $this->sponsoredChatUniqueId = $sponsoredChatUniqueId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'openSponsoredChat',
            'sponsored_chat_unique_id' => $this->getSponsoredChatUniqueId(),
        ];
    }
}
