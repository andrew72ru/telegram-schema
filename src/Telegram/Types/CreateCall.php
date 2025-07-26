<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Creates a new call
 */
class CreateCall extends CallId implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the user to be called */
        #[SerializedName('user_id')]
        private int $userId,
        /** The call protocols supported by the application */
        #[SerializedName('protocol')]
        private CallProtocol|null $protocol = null,
        /** Pass true to create a video call */
        #[SerializedName('is_video')]
        private bool $isVideo,
    ) {
    }

    /**
     * Get Identifier of the user to be called
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set Identifier of the user to be called
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get The call protocols supported by the application
     */
    public function getProtocol(): CallProtocol|null
    {
        return $this->protocol;
    }

    /**
     * Set The call protocols supported by the application
     */
    public function setProtocol(CallProtocol|null $protocol): self
    {
        $this->protocol = $protocol;

        return $this;
    }

    /**
     * Get Pass true to create a video call
     */
    public function getIsVideo(): bool
    {
        return $this->isVideo;
    }

    /**
     * Set Pass true to create a video call
     */
    public function setIsVideo(bool $isVideo): self
    {
        $this->isVideo = $isVideo;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'createCall',
            'user_id' => $this->getUserId(),
            'protocol' => $this->getProtocol(),
            'is_video' => $this->getIsVideo(),
        ];
    }
}
