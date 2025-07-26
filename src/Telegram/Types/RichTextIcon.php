<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A small image inside the text
 */
class RichTextIcon extends RichText implements \JsonSerializable
{
    public function __construct(
        /** The image represented as a document. The image can be in GIF, JPEG or PNG format */
        #[SerializedName('document')]
        private Document|null $document = null,
        /** Width of a bounding box in which the image must be shown; 0 if unknown */
        #[SerializedName('width')]
        private int $width,
        /** Height of a bounding box in which the image must be shown; 0 if unknown */
        #[SerializedName('height')]
        private int $height,
    ) {
    }

    /**
     * Get The image represented as a document. The image can be in GIF, JPEG or PNG format
     */
    public function getDocument(): Document|null
    {
        return $this->document;
    }

    /**
     * Set The image represented as a document. The image can be in GIF, JPEG or PNG format
     */
    public function setDocument(Document|null $document): self
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get Width of a bounding box in which the image must be shown; 0 if unknown
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * Set Width of a bounding box in which the image must be shown; 0 if unknown
     */
    public function setWidth(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get Height of a bounding box in which the image must be shown; 0 if unknown
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * Set Height of a bounding box in which the image must be shown; 0 if unknown
     */
    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'richTextIcon',
            'document' => $this->getDocument(),
            'width' => $this->getWidth(),
            'height' => $this->getHeight(),
        ];
    }
}
