<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a list of emoji categories @categories List of categories
 */
class EmojiCategories implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('categories')]
        private array|null $categories = null,
    ) {
    }

    public function getCategories(): array|null
    {
        return $this->categories;
    }

    public function setCategories(array|null $categories): self
    {
        $this->categories = $categories;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'emojiCategories',
            'categories' => $this->getCategories(),
        ];
    }
}
