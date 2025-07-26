<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes an animated or custom representation of an emoji
 */
class AnimatedEmoji implements \JsonSerializable
{
    public function __construct(
        /** Sticker for the emoji; may be null if yet unknown for a custom emoji. If the sticker is a custom emoji, then it can have arbitrary format */
        #[SerializedName('sticker')]
        private Sticker|null $sticker = null,
        /** Expected width of the sticker, which can be used if the sticker is null */
        #[SerializedName('sticker_width')]
        private int $stickerWidth,
        /** Expected height of the sticker, which can be used if the sticker is null */
        #[SerializedName('sticker_height')]
        private int $stickerHeight,
        /** Emoji modifier fitzpatrick type; 0-6; 0 if none */
        #[SerializedName('fitzpatrick_type')]
        private int $fitzpatrickType,
        /** File containing the sound to be played when the sticker is clicked; may be null. The sound is encoded with the Opus codec, and stored inside an OGG container */
        #[SerializedName('sound')]
        private File|null $sound = null,
    ) {
    }

    /**
     * Get Sticker for the emoji; may be null if yet unknown for a custom emoji. If the sticker is a custom emoji, then it can have arbitrary format
     */
    public function getSticker(): Sticker|null
    {
        return $this->sticker;
    }

    /**
     * Set Sticker for the emoji; may be null if yet unknown for a custom emoji. If the sticker is a custom emoji, then it can have arbitrary format
     */
    public function setSticker(Sticker|null $sticker): self
    {
        $this->sticker = $sticker;

        return $this;
    }

    /**
     * Get Expected width of the sticker, which can be used if the sticker is null
     */
    public function getStickerWidth(): int
    {
        return $this->stickerWidth;
    }

    /**
     * Set Expected width of the sticker, which can be used if the sticker is null
     */
    public function setStickerWidth(int $stickerWidth): self
    {
        $this->stickerWidth = $stickerWidth;

        return $this;
    }

    /**
     * Get Expected height of the sticker, which can be used if the sticker is null
     */
    public function getStickerHeight(): int
    {
        return $this->stickerHeight;
    }

    /**
     * Set Expected height of the sticker, which can be used if the sticker is null
     */
    public function setStickerHeight(int $stickerHeight): self
    {
        $this->stickerHeight = $stickerHeight;

        return $this;
    }

    /**
     * Get Emoji modifier fitzpatrick type; 0-6; 0 if none
     */
    public function getFitzpatrickType(): int
    {
        return $this->fitzpatrickType;
    }

    /**
     * Set Emoji modifier fitzpatrick type; 0-6; 0 if none
     */
    public function setFitzpatrickType(int $fitzpatrickType): self
    {
        $this->fitzpatrickType = $fitzpatrickType;

        return $this;
    }

    /**
     * Get File containing the sound to be played when the sticker is clicked; may be null. The sound is encoded with the Opus codec, and stored inside an OGG container
     */
    public function getSound(): File|null
    {
        return $this->sound;
    }

    /**
     * Set File containing the sound to be played when the sticker is clicked; may be null. The sound is encoded with the Opus codec, and stored inside an OGG container
     */
    public function setSound(File|null $sound): self
    {
        $this->sound = $sound;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'animatedEmoji',
            'sticker' => $this->getSticker(),
            'sticker_width' => $this->getStickerWidth(),
            'sticker_height' => $this->getStickerHeight(),
            'fitzpatrick_type' => $this->getFitzpatrickType(),
            'sound' => $this->getSound(),
        ];
    }
}
