<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The media is hidden until the invoice is paid
 */
class PaidMediaPreview extends PaidMedia implements \JsonSerializable
{
    public function __construct(
        /** Media width; 0 if unknown */
        #[SerializedName('width')]
        private int $width,
        /** Media height; 0 if unknown */
        #[SerializedName('height')]
        private int $height,
        /** Media duration, in seconds; 0 if unknown */
        #[SerializedName('duration')]
        private int $duration,
        /** Media minithumbnail; may be null */
        #[SerializedName('minithumbnail')]
        private Minithumbnail|null $minithumbnail = null,
    ) {
    }

    /**
     * Get Media width; 0 if unknown
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * Set Media width; 0 if unknown
     */
    public function setWidth(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get Media height; 0 if unknown
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * Set Media height; 0 if unknown
     */
    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get Media duration, in seconds; 0 if unknown
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * Set Media duration, in seconds; 0 if unknown
     */
    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get Media minithumbnail; may be null
     */
    public function getMinithumbnail(): Minithumbnail|null
    {
        return $this->minithumbnail;
    }

    /**
     * Set Media minithumbnail; may be null
     */
    public function setMinithumbnail(Minithumbnail|null $minithumbnail): self
    {
        $this->minithumbnail = $minithumbnail;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'paidMediaPreview',
            'width' => $this->getWidth(),
            'height' => $this->getHeight(),
            'duration' => $this->getDuration(),
            'minithumbnail' => $this->getMinithumbnail(),
        ];
    }
}
