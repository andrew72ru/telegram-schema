<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a chat or user profile photo.
 */
class ChatPhoto implements \JsonSerializable
{
    public function __construct(
        /** Unique photo identifier */
        #[SerializedName('id')]
        private int $id,
        /** Point in time (Unix timestamp) when the photo has been added */
        #[SerializedName('added_date')]
        private int $addedDate,
        /** Photo minithumbnail; may be null */
        #[SerializedName('minithumbnail')]
        private Minithumbnail|null $minithumbnail = null,
        /** Available variants of the photo in JPEG format, in different size */
        #[SerializedName('sizes')]
        private array|null $sizes = null,
        /** A big (up to 1280x1280) animated variant of the photo in MPEG4 format; may be null */
        #[SerializedName('animation')]
        private AnimatedChatPhoto|null $animation = null,
        /** A small (160x160) animated variant of the photo in MPEG4 format; may be null even if the big animation is available */
        #[SerializedName('small_animation')]
        private AnimatedChatPhoto|null $smallAnimation = null,
        /** Sticker-based version of the chat photo; may be null */
        #[SerializedName('sticker')]
        private ChatPhotoSticker|null $sticker = null,
    ) {
    }

    /**
     * Get Unique photo identifier.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Unique photo identifier.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the photo has been added.
     */
    public function getAddedDate(): int
    {
        return $this->addedDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the photo has been added.
     */
    public function setAddedDate(int $addedDate): self
    {
        $this->addedDate = $addedDate;

        return $this;
    }

    /**
     * Get Photo minithumbnail; may be null.
     */
    public function getMinithumbnail(): Minithumbnail|null
    {
        return $this->minithumbnail;
    }

    /**
     * Set Photo minithumbnail; may be null.
     */
    public function setMinithumbnail(Minithumbnail|null $minithumbnail): self
    {
        $this->minithumbnail = $minithumbnail;

        return $this;
    }

    /**
     * Get Available variants of the photo in JPEG format, in different size.
     */
    public function getSizes(): array|null
    {
        return $this->sizes;
    }

    /**
     * Set Available variants of the photo in JPEG format, in different size.
     */
    public function setSizes(array|null $sizes): self
    {
        $this->sizes = $sizes;

        return $this;
    }

    /**
     * Get A big (up to 1280x1280) animated variant of the photo in MPEG4 format; may be null.
     */
    public function getAnimation(): AnimatedChatPhoto|null
    {
        return $this->animation;
    }

    /**
     * Set A big (up to 1280x1280) animated variant of the photo in MPEG4 format; may be null.
     */
    public function setAnimation(AnimatedChatPhoto|null $animation): self
    {
        $this->animation = $animation;

        return $this;
    }

    /**
     * Get A small (160x160) animated variant of the photo in MPEG4 format; may be null even if the big animation is available.
     */
    public function getSmallAnimation(): AnimatedChatPhoto|null
    {
        return $this->smallAnimation;
    }

    /**
     * Set A small (160x160) animated variant of the photo in MPEG4 format; may be null even if the big animation is available.
     */
    public function setSmallAnimation(AnimatedChatPhoto|null $smallAnimation): self
    {
        $this->smallAnimation = $smallAnimation;

        return $this;
    }

    /**
     * Get Sticker-based version of the chat photo; may be null.
     */
    public function getSticker(): ChatPhotoSticker|null
    {
        return $this->sticker;
    }

    /**
     * Set Sticker-based version of the chat photo; may be null.
     */
    public function setSticker(ChatPhotoSticker|null $sticker): self
    {
        $this->sticker = $sticker;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatPhoto',
            'id' => $this->getId(),
            'added_date' => $this->getAddedDate(),
            'minithumbnail' => $this->getMinithumbnail(),
            'sizes' => $this->getSizes(),
            'animation' => $this->getAnimation(),
            'small_animation' => $this->getSmallAnimation(),
            'sticker' => $this->getSticker(),
        ];
    }
}
