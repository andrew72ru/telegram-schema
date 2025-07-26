<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to a video chat. Call searchPublicChat with the given chat username, and then joinVideoChat with the given invite hash to process the link
 */
class InternalLinkTypeVideoChat extends InternalLinkType implements \JsonSerializable
{
    public function __construct(
        /** Username of the chat with the video chat */
        #[SerializedName('chat_username')]
        private string $chatUsername,
        /** If non-empty, invite hash to be used to join the video chat without being muted by administrators */
        #[SerializedName('invite_hash')]
        private string $inviteHash,
        /** True, if the video chat is expected to be a live stream in a channel or a broadcast group */
        #[SerializedName('is_live_stream')]
        private bool $isLiveStream,
    ) {
    }

    /**
     * Get Username of the chat with the video chat
     */
    public function getChatUsername(): string
    {
        return $this->chatUsername;
    }

    /**
     * Set Username of the chat with the video chat
     */
    public function setChatUsername(string $chatUsername): self
    {
        $this->chatUsername = $chatUsername;

        return $this;
    }

    /**
     * Get If non-empty, invite hash to be used to join the video chat without being muted by administrators
     */
    public function getInviteHash(): string
    {
        return $this->inviteHash;
    }

    /**
     * Set If non-empty, invite hash to be used to join the video chat without being muted by administrators
     */
    public function setInviteHash(string $inviteHash): self
    {
        $this->inviteHash = $inviteHash;

        return $this;
    }

    /**
     * Get True, if the video chat is expected to be a live stream in a channel or a broadcast group
     */
    public function getIsLiveStream(): bool
    {
        return $this->isLiveStream;
    }

    /**
     * Set True, if the video chat is expected to be a live stream in a channel or a broadcast group
     */
    public function setIsLiveStream(bool $isLiveStream): self
    {
        $this->isLiveStream = $isLiveStream;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypeVideoChat',
            'chat_username' => $this->getChatUsername(),
            'invite_hash' => $this->getInviteHash(),
            'is_live_stream' => $this->getIsLiveStream(),
        ];
    }
}
