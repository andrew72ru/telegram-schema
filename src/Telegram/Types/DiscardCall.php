<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Discards a call
 */
class DiscardCall extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Call identifier */
        #[SerializedName('call_id')]
        private int $callId,
        /** Pass true if the user was disconnected */
        #[SerializedName('is_disconnected')]
        private bool $isDisconnected,
        /** If the call was upgraded to a group call, pass invite link to the group call */
        #[SerializedName('invite_link')]
        private string $inviteLink,
        /** The call duration, in seconds */
        #[SerializedName('duration')]
        private int $duration,
        /** Pass true if the call was a video call */
        #[SerializedName('is_video')]
        private bool $isVideo,
        /** Identifier of the connection used during the call */
        #[SerializedName('connection_id')]
        private int $connectionId,
    ) {
    }

    /**
     * Get Call identifier
     */
    public function getCallId(): int
    {
        return $this->callId;
    }

    /**
     * Set Call identifier
     */
    public function setCallId(int $callId): self
    {
        $this->callId = $callId;

        return $this;
    }

    /**
     * Get Pass true if the user was disconnected
     */
    public function getIsDisconnected(): bool
    {
        return $this->isDisconnected;
    }

    /**
     * Set Pass true if the user was disconnected
     */
    public function setIsDisconnected(bool $isDisconnected): self
    {
        $this->isDisconnected = $isDisconnected;

        return $this;
    }

    /**
     * Get If the call was upgraded to a group call, pass invite link to the group call
     */
    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    /**
     * Set If the call was upgraded to a group call, pass invite link to the group call
     */
    public function setInviteLink(string $inviteLink): self
    {
        $this->inviteLink = $inviteLink;

        return $this;
    }

    /**
     * Get The call duration, in seconds
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * Set The call duration, in seconds
     */
    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get Pass true if the call was a video call
     */
    public function getIsVideo(): bool
    {
        return $this->isVideo;
    }

    /**
     * Set Pass true if the call was a video call
     */
    public function setIsVideo(bool $isVideo): self
    {
        $this->isVideo = $isVideo;

        return $this;
    }

    /**
     * Get Identifier of the connection used during the call
     */
    public function getConnectionId(): int
    {
        return $this->connectionId;
    }

    /**
     * Set Identifier of the connection used during the call
     */
    public function setConnectionId(int $connectionId): self
    {
        $this->connectionId = $connectionId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'discardCall',
            'call_id' => $this->getCallId(),
            'is_disconnected' => $this->getIsDisconnected(),
            'invite_link' => $this->getInviteLink(),
            'duration' => $this->getDuration(),
            'is_video' => $this->getIsVideo(),
            'connection_id' => $this->getConnectionId(),
        ];
    }
}
