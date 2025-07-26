<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to a background. Link preview title and description are available only for filled backgrounds
 */
class LinkPreviewTypeBackground extends LinkPreviewType implements \JsonSerializable
{
    public function __construct(
        /** Document with the background; may be null for filled backgrounds */
        #[SerializedName('document')]
        private Document|null $document = null,
        /** Type of the background; may be null if unknown */
        #[SerializedName('background_type')]
        private BackgroundType|null $backgroundType = null,
    ) {
    }

    /**
     * Get Document with the background; may be null for filled backgrounds
     */
    public function getDocument(): Document|null
    {
        return $this->document;
    }

    /**
     * Set Document with the background; may be null for filled backgrounds
     */
    public function setDocument(Document|null $document): self
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get Type of the background; may be null if unknown
     */
    public function getBackgroundType(): BackgroundType|null
    {
        return $this->backgroundType;
    }

    /**
     * Set Type of the background; may be null if unknown
     */
    public function setBackgroundType(BackgroundType|null $backgroundType): self
    {
        $this->backgroundType = $backgroundType;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'linkPreviewTypeBackground',
            'document' => $this->getDocument(),
            'background_type' => $this->getBackgroundType(),
        ];
    }
}
