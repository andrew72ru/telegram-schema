<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns a suggested name for a new sticker set with a given title @title Sticker set title; 1-64 characters.
 */
class GetSuggestedStickerSetName extends Text implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('title')]
        private string $title,
    ) {
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getSuggestedStickerSetName',
            'title' => $this->getTitle(),
        ];
    }
}
