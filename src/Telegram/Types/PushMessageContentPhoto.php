<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A photo message.
 */
class PushMessageContentPhoto extends PushMessageContent implements \JsonSerializable
{
    public function __construct(
        /** Message content; may be null */
        #[SerializedName('photo')]
        private Photo|null $photo = null,
        /** Photo caption */
        #[SerializedName('caption')]
        private string $caption,
        /** True, if the photo is secret */
        #[SerializedName('is_secret')]
        private bool $isSecret,
        /** True, if the message is a pinned message with the specified content */
        #[SerializedName('is_pinned')]
        private bool $isPinned,
    ) {
    }

    /**
     * Get Message content; may be null.
     */
    public function getPhoto(): Photo|null
    {
        return $this->photo;
    }

    /**
     * Set Message content; may be null.
     */
    public function setPhoto(Photo|null $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get Photo caption.
     */
    public function getCaption(): string
    {
        return $this->caption;
    }

    /**
     * Set Photo caption.
     */
    public function setCaption(string $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Get True, if the photo is secret.
     */
    public function getIsSecret(): bool
    {
        return $this->isSecret;
    }

    /**
     * Set True, if the photo is secret.
     */
    public function setIsSecret(bool $isSecret): self
    {
        $this->isSecret = $isSecret;

        return $this;
    }

    /**
     * Get True, if the message is a pinned message with the specified content.
     */
    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    /**
     * Set True, if the message is a pinned message with the specified content.
     */
    public function setIsPinned(bool $isPinned): self
    {
        $this->isPinned = $isPinned;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pushMessageContentPhoto',
            'photo' => $this->getPhoto(),
            'caption' => $this->getCaption(),
            'is_secret' => $this->getIsSecret(),
            'is_pinned' => $this->getIsPinned(),
        ];
    }
}
