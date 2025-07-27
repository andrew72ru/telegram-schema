<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The affiliate is a channel chat where the current user has can_post_messages administrator right @chat_id Identifier of the channel chat.
 */
class AffiliateTypeChannel extends AffiliateType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
    ) {
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'affiliateTypeChannel',
            'chat_id' => $this->getChatId(),
        ];
    }
}
