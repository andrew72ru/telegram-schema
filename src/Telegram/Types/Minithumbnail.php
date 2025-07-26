<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Thumbnail image of a very poor quality and low resolution @width Thumbnail width, usually doesn't exceed 40 @height Thumbnail height, usually doesn't exceed 40 @data The thumbnail in JPEG format
 */
class Minithumbnail implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('width')]
        private int $width,
        #[SerializedName('height')]
        private int $height,
        #[SerializedName('data')]
        private string $data,
    ) {
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function setWidth(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function setData(string $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'minithumbnail',
            'width' => $this->getWidth(),
            'height' => $this->getHeight(),
            'data' => $this->getData(),
        ];
    }
}
