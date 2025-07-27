<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about supported accent color for user profile photo background.
 */
class ProfileAccentColor implements \JsonSerializable
{
    public function __construct(
        /** Profile accent color identifier */
        #[SerializedName('id')]
        private int $id,
        /** Accent colors expected to be used in light themes */
        #[SerializedName('light_theme_colors')]
        private ProfileAccentColors|null $lightThemeColors = null,
        /** Accent colors expected to be used in dark themes */
        #[SerializedName('dark_theme_colors')]
        private ProfileAccentColors|null $darkThemeColors = null,
        /** The minimum chat boost level required to use the color in a supergroup chat */
        #[SerializedName('min_supergroup_chat_boost_level')]
        private int $minSupergroupChatBoostLevel,
        /** The minimum chat boost level required to use the color in a channel chat */
        #[SerializedName('min_channel_chat_boost_level')]
        private int $minChannelChatBoostLevel,
    ) {
    }

    /**
     * Get Profile accent color identifier.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Profile accent color identifier.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Accent colors expected to be used in light themes.
     */
    public function getLightThemeColors(): ProfileAccentColors|null
    {
        return $this->lightThemeColors;
    }

    /**
     * Set Accent colors expected to be used in light themes.
     */
    public function setLightThemeColors(ProfileAccentColors|null $lightThemeColors): self
    {
        $this->lightThemeColors = $lightThemeColors;

        return $this;
    }

    /**
     * Get Accent colors expected to be used in dark themes.
     */
    public function getDarkThemeColors(): ProfileAccentColors|null
    {
        return $this->darkThemeColors;
    }

    /**
     * Set Accent colors expected to be used in dark themes.
     */
    public function setDarkThemeColors(ProfileAccentColors|null $darkThemeColors): self
    {
        $this->darkThemeColors = $darkThemeColors;

        return $this;
    }

    /**
     * Get The minimum chat boost level required to use the color in a supergroup chat.
     */
    public function getMinSupergroupChatBoostLevel(): int
    {
        return $this->minSupergroupChatBoostLevel;
    }

    /**
     * Set The minimum chat boost level required to use the color in a supergroup chat.
     */
    public function setMinSupergroupChatBoostLevel(int $minSupergroupChatBoostLevel): self
    {
        $this->minSupergroupChatBoostLevel = $minSupergroupChatBoostLevel;

        return $this;
    }

    /**
     * Get The minimum chat boost level required to use the color in a channel chat.
     */
    public function getMinChannelChatBoostLevel(): int
    {
        return $this->minChannelChatBoostLevel;
    }

    /**
     * Set The minimum chat boost level required to use the color in a channel chat.
     */
    public function setMinChannelChatBoostLevel(int $minChannelChatBoostLevel): self
    {
        $this->minChannelChatBoostLevel = $minChannelChatBoostLevel;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'profileAccentColor',
            'id' => $this->getId(),
            'light_theme_colors' => $this->getLightThemeColors(),
            'dark_theme_colors' => $this->getDarkThemeColors(),
            'min_supergroup_chat_boost_level' => $this->getMinSupergroupChatBoostLevel(),
            'min_channel_chat_boost_level' => $this->getMinChannelChatBoostLevel(),
        ];
    }
}
