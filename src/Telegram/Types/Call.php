<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a call
 */
class Call implements \JsonSerializable
{
    public function __construct(
        /** Call identifier, not persistent */
        #[SerializedName('id')]
        private int $id,
        /** User identifier of the other call participant */
        #[SerializedName('user_id')]
        private int $userId,
        /** True, if the call is outgoing */
        #[SerializedName('is_outgoing')]
        private bool $isOutgoing,
        /** True, if the call is a video call */
        #[SerializedName('is_video')]
        private bool $isVideo,
        /** Call state */
        #[SerializedName('state')]
        private CallState|null $state = null,
    ) {
    }

    /**
     * Get Call identifier, not persistent
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Call identifier, not persistent
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get User identifier of the other call participant
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set User identifier of the other call participant
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get True, if the call is outgoing
     */
    public function getIsOutgoing(): bool
    {
        return $this->isOutgoing;
    }

    /**
     * Set True, if the call is outgoing
     */
    public function setIsOutgoing(bool $isOutgoing): self
    {
        $this->isOutgoing = $isOutgoing;

        return $this;
    }

    /**
     * Get True, if the call is a video call
     */
    public function getIsVideo(): bool
    {
        return $this->isVideo;
    }

    /**
     * Set True, if the call is a video call
     */
    public function setIsVideo(bool $isVideo): self
    {
        $this->isVideo = $isVideo;

        return $this;
    }

    /**
     * Get Call state
     */
    public function getState(): CallState|null
    {
        return $this->state;
    }

    /**
     * Set Call state
     */
    public function setState(CallState|null $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'call',
            'id' => $this->getId(),
            'user_id' => $this->getUserId(),
            'is_outgoing' => $this->getIsOutgoing(),
            'is_video' => $this->getIsVideo(),
            'state' => $this->getState(),
        ];
    }
}
