<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to a video chat
 */
class LinkPreviewTypeVideoChat extends LinkPreviewType implements \JsonSerializable
{
    public function __construct(
        /** Photo of the chat with the video chat; may be null if none */
        #[SerializedName('photo')]
        private ChatPhoto|null $photo = null,
        /** True, if the video chat is expected to be a live stream in a channel or a broadcast group */
        #[SerializedName('is_live_stream')]
        private bool $isLiveStream,
    ) {
    }

    /**
     * Get Photo of the chat with the video chat; may be null if none
     */
    public function getPhoto(): ChatPhoto|null
    {
        return $this->photo;
    }

    /**
     * Set Photo of the chat with the video chat; may be null if none
     */
    public function setPhoto(ChatPhoto|null $photo): self
    {
        $this->photo = $photo;

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
            '@type' => 'linkPreviewTypeVideoChat',
            'photo' => $this->getPhoto(),
            'is_live_stream' => $this->getIsLiveStream(),
        ];
    }
}
