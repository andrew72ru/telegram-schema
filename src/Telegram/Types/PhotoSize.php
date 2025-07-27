<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes an image in JPEG format.
 */
class PhotoSize implements \JsonSerializable
{
    public function __construct(
        /** Image type (see https://core.telegram.org/constructor/photoSize) */
        #[SerializedName('type')]
        private string $type,
        /** Information about the image file */
        #[SerializedName('photo')]
        private File|null $photo = null,
        /** Image width */
        #[SerializedName('width')]
        private int $width,
        /** Image height */
        #[SerializedName('height')]
        private int $height,
        /** Sizes of progressive JPEG file prefixes, which can be used to preliminarily show the image; in bytes */
        #[SerializedName('progressive_sizes')]
        private array|null $progressiveSizes = null,
    ) {
    }

    /**
     * Get Image type (see https://core.telegram.org/constructor/photoSize).
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Set Image type (see https://core.telegram.org/constructor/photoSize).
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get Information about the image file.
     */
    public function getPhoto(): File|null
    {
        return $this->photo;
    }

    /**
     * Set Information about the image file.
     */
    public function setPhoto(File|null $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get Image width.
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * Set Image width.
     */
    public function setWidth(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get Image height.
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * Set Image height.
     */
    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get Sizes of progressive JPEG file prefixes, which can be used to preliminarily show the image; in bytes.
     */
    public function getProgressiveSizes(): array|null
    {
        return $this->progressiveSizes;
    }

    /**
     * Set Sizes of progressive JPEG file prefixes, which can be used to preliminarily show the image; in bytes.
     */
    public function setProgressiveSizes(array|null $progressiveSizes): self
    {
        $this->progressiveSizes = $progressiveSizes;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'photoSize',
            'type' => $this->getType(),
            'photo' => $this->getPhoto(),
            'width' => $this->getWidth(),
            'height' => $this->getHeight(),
            'progressive_sizes' => $this->getProgressiveSizes(),
        ];
    }
}
