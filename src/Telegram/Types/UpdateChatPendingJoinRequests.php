<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The chat pending join requests were changed @chat_id Chat identifier @pending_join_requests The new data about pending join requests; may be null.
 */
class UpdateChatPendingJoinRequests extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('pending_join_requests')]
        private ChatJoinRequestsInfo|null $pendingJoinRequests = null,
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

    public function getPendingJoinRequests(): ChatJoinRequestsInfo|null
    {
        return $this->pendingJoinRequests;
    }

    public function setPendingJoinRequests(ChatJoinRequestsInfo|null $pendingJoinRequests): self
    {
        $this->pendingJoinRequests = $pendingJoinRequests;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateChatPendingJoinRequests',
            'chat_id' => $this->getChatId(),
            'pending_join_requests' => $this->getPendingJoinRequests(),
        ];
    }
}
