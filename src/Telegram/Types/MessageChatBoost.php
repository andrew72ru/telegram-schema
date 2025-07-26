<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The chat was boosted by the sender of the message @boost_count Number of times the chat was boosted
 */
class MessageChatBoost extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('boost_count')]
        private int $boostCount,
    ) {
    }

    public function getBoostCount(): int
    {
        return $this->boostCount;
    }

    public function setBoostCount(int $boostCount): self
    {
        $this->boostCount = $boostCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageChatBoost',
            'boost_count' => $this->getBoostCount(),
        ];
    }
}
