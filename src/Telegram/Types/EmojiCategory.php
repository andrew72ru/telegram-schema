<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes an emoji category
 */
class EmojiCategory implements \JsonSerializable
{
    public function __construct(
        /** Name of the category */
        #[SerializedName('name')]
        private string $name,
        /** Custom emoji sticker, which represents icon of the category */
        #[SerializedName('icon')]
        private Sticker|null $icon = null,
        /** Source of stickers for the emoji category */
        #[SerializedName('source')]
        private EmojiCategorySource|null $source = null,
        /** True, if the category must be shown first when choosing a sticker for the start page */
        #[SerializedName('is_greeting')]
        private bool $isGreeting,
    ) {
    }

    /**
     * Get Name of the category
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set Name of the category
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get Custom emoji sticker, which represents icon of the category
     */
    public function getIcon(): Sticker|null
    {
        return $this->icon;
    }

    /**
     * Set Custom emoji sticker, which represents icon of the category
     */
    public function setIcon(Sticker|null $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get Source of stickers for the emoji category
     */
    public function getSource(): EmojiCategorySource|null
    {
        return $this->source;
    }

    /**
     * Set Source of stickers for the emoji category
     */
    public function setSource(EmojiCategorySource|null $source): self
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get True, if the category must be shown first when choosing a sticker for the start page
     */
    public function getIsGreeting(): bool
    {
        return $this->isGreeting;
    }

    /**
     * Set True, if the category must be shown first when choosing a sticker for the start page
     */
    public function setIsGreeting(bool $isGreeting): self
    {
        $this->isGreeting = $isGreeting;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'emojiCategory',
            'name' => $this->getName(),
            'icon' => $this->getIcon(),
            'source' => $this->getSource(),
            'is_greeting' => $this->getIsGreeting(),
        ];
    }
}
