<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes settings for a business account start page.
 */
class BusinessStartPage implements \JsonSerializable
{
    public function __construct(
        /** Title text of the start page */
        #[SerializedName('title')]
        private string $title,
        /** Message text of the start page */
        #[SerializedName('message')]
        private string $message,
        /** Greeting sticker of the start page; may be null if none */
        #[SerializedName('sticker')]
        private Sticker|null $sticker = null,
    ) {
    }

    /**
     * Get Title text of the start page.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Title text of the start page.
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get Message text of the start page.
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * Set Message text of the start page.
     */
    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get Greeting sticker of the start page; may be null if none.
     */
    public function getSticker(): Sticker|null
    {
        return $this->sticker;
    }

    /**
     * Set Greeting sticker of the start page; may be null if none.
     */
    public function setSticker(Sticker|null $sticker): self
    {
        $this->sticker = $sticker;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'businessStartPage',
            'title' => $this->getTitle(),
            'message' => $this->getMessage(),
            'sticker' => $this->getSticker(),
        ];
    }
}
