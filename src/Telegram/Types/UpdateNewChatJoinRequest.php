<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A user sent a join request to a chat; for bots only.
 */
class UpdateNewChatJoinRequest extends Update implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Join request */
        #[SerializedName('request')]
        private ChatJoinRequest|null $request = null,
        /** Chat identifier of the private chat with the user */
        #[SerializedName('user_chat_id')]
        private int $userChatId,
        /** The invite link, which was used to send join request; may be null */
        #[SerializedName('invite_link')]
        private ChatInviteLink|null $inviteLink = null,
    ) {
    }

    /**
     * Get Chat identifier.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Join request.
     */
    public function getRequest(): ChatJoinRequest|null
    {
        return $this->request;
    }

    /**
     * Set Join request.
     */
    public function setRequest(ChatJoinRequest|null $request): self
    {
        $this->request = $request;

        return $this;
    }

    /**
     * Get Chat identifier of the private chat with the user.
     */
    public function getUserChatId(): int
    {
        return $this->userChatId;
    }

    /**
     * Set Chat identifier of the private chat with the user.
     */
    public function setUserChatId(int $userChatId): self
    {
        $this->userChatId = $userChatId;

        return $this;
    }

    /**
     * Get The invite link, which was used to send join request; may be null.
     */
    public function getInviteLink(): ChatInviteLink|null
    {
        return $this->inviteLink;
    }

    /**
     * Set The invite link, which was used to send join request; may be null.
     */
    public function setInviteLink(ChatInviteLink|null $inviteLink): self
    {
        $this->inviteLink = $inviteLink;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateNewChatJoinRequest',
            'chat_id' => $this->getChatId(),
            'request' => $this->getRequest(),
            'user_chat_id' => $this->getUserChatId(),
            'invite_link' => $this->getInviteLink(),
        ];
    }
}
