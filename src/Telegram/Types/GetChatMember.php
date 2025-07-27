<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about a single member of a chat @chat_id Chat identifier @member_id Member identifier.
 */
class GetChatMember extends ChatMember implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('member_id')]
        private MessageSender|null $memberId = null,
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

    public function getMemberId(): MessageSender|null
    {
        return $this->memberId;
    }

    public function setMemberId(MessageSender|null $memberId): self
    {
        $this->memberId = $memberId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getChatMember',
            'chat_id' => $this->getChatId(),
            'member_id' => $this->getMemberId(),
        ];
    }
}
