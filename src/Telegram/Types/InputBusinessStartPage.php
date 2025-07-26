<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes settings for a business account start page to set
 */
class InputBusinessStartPage implements \JsonSerializable
{
    public function __construct(
        /** Title text of the start page; 0-getOption("business_start_page_title_length_max") characters */
        #[SerializedName('title')]
        private string $title,
        /** Message text of the start page; 0-getOption("business_start_page_message_length_max") characters */
        #[SerializedName('message')]
        private string $message,
        /** Greeting sticker of the start page; pass null if none. The sticker must belong to a sticker set and must not be a custom emoji */
        #[SerializedName('sticker')]
        private InputFile|null $sticker = null,
    ) {
    }

    /**
     * Get Title text of the start page; 0-getOption("business_start_page_title_length_max") characters
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Title text of the start page; 0-getOption("business_start_page_title_length_max") characters
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get Message text of the start page; 0-getOption("business_start_page_message_length_max") characters
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * Set Message text of the start page; 0-getOption("business_start_page_message_length_max") characters
     */
    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get Greeting sticker of the start page; pass null if none. The sticker must belong to a sticker set and must not be a custom emoji
     */
    public function getSticker(): InputFile|null
    {
        return $this->sticker;
    }

    /**
     * Set Greeting sticker of the start page; pass null if none. The sticker must belong to a sticker set and must not be a custom emoji
     */
    public function setSticker(InputFile|null $sticker): self
    {
        $this->sticker = $sticker;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputBusinessStartPage',
            'title' => $this->getTitle(),
            'message' => $this->getMessage(),
            'sticker' => $this->getSticker(),
        ];
    }
}
