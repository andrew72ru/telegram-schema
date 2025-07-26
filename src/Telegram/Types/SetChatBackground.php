<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sets the background in a specific chat. Supported only in private and secret chats with non-deleted users, and in chats with sufficient boost level and can_change_info administrator right
 */
class SetChatBackground extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** The input background to use; pass null to create a new filled or chat theme background */
        #[SerializedName('background')]
        private InputBackground|null $background = null,
        /** Background type; pass null to use default background type for the chosen background; backgroundTypeChatTheme isn't supported for private and secret chats. */
        #[SerializedName('type')]
        private BackgroundType|null $type = null,
        /** Dimming of the background in dark themes, as a percentage; 0-100. Applied only to Wallpaper and Fill types of background */
        #[SerializedName('dark_theme_dimming')]
        private int $darkThemeDimming,
        /** Pass true to set background only for self; pass false to set background for all chat users. Always false for backgrounds set in boosted chats. Background can be set for both users only by Telegram Premium users and if set background isn't of the type inputBackgroundPrevious */
        #[SerializedName('only_for_self')]
        private bool $onlyForSelf,
    ) {
    }

    /**
     * Get Chat identifier
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get The input background to use; pass null to create a new filled or chat theme background
     */
    public function getBackground(): InputBackground|null
    {
        return $this->background;
    }

    /**
     * Set The input background to use; pass null to create a new filled or chat theme background
     */
    public function setBackground(InputBackground|null $background): self
    {
        $this->background = $background;

        return $this;
    }

    /**
     * Get Background type; pass null to use default background type for the chosen background; backgroundTypeChatTheme isn't supported for private and secret chats.
     */
    public function getType(): BackgroundType|null
    {
        return $this->type;
    }

    /**
     * Set Background type; pass null to use default background type for the chosen background; backgroundTypeChatTheme isn't supported for private and secret chats.
     */
    public function setType(BackgroundType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get Dimming of the background in dark themes, as a percentage; 0-100. Applied only to Wallpaper and Fill types of background
     */
    public function getDarkThemeDimming(): int
    {
        return $this->darkThemeDimming;
    }

    /**
     * Set Dimming of the background in dark themes, as a percentage; 0-100. Applied only to Wallpaper and Fill types of background
     */
    public function setDarkThemeDimming(int $darkThemeDimming): self
    {
        $this->darkThemeDimming = $darkThemeDimming;

        return $this;
    }

    /**
     * Get Pass true to set background only for self; pass false to set background for all chat users. Always false for backgrounds set in boosted chats. Background can be set for both users only by Telegram Premium users and if set background isn't of the type inputBackgroundPrevious
     */
    public function getOnlyForSelf(): bool
    {
        return $this->onlyForSelf;
    }

    /**
     * Set Pass true to set background only for self; pass false to set background for all chat users. Always false for backgrounds set in boosted chats. Background can be set for both users only by Telegram Premium users and if set background isn't of the type inputBackgroundPrevious
     */
    public function setOnlyForSelf(bool $onlyForSelf): self
    {
        $this->onlyForSelf = $onlyForSelf;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setChatBackground',
            'chat_id' => $this->getChatId(),
            'background' => $this->getBackground(),
            'type' => $this->getType(),
            'dark_theme_dimming' => $this->getDarkThemeDimming(),
            'only_for_self' => $this->getOnlyForSelf(),
        ];
    }
}
