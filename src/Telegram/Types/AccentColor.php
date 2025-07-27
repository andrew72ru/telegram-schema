<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about supported accent color for user/chat name, background of empty chat photo, replies to messages and link previews.
 */
class AccentColor implements \JsonSerializable
{
    public function __construct(
        /** Accent color identifier */
        #[SerializedName('id')]
        private int $id,
        /** Identifier of a built-in color to use in places, where only one color is needed; 0-6 */
        #[SerializedName('built_in_accent_color_id')]
        private int $builtInAccentColorId,
        /** The list of 1-3 colors in RGB format, describing the accent color, as expected to be shown in light themes */
        #[SerializedName('light_theme_colors')]
        private array|null $lightThemeColors = null,
        /** The list of 1-3 colors in RGB format, describing the accent color, as expected to be shown in dark themes */
        #[SerializedName('dark_theme_colors')]
        private array|null $darkThemeColors = null,
        /** The minimum chat boost level required to use the color in a channel chat */
        #[SerializedName('min_channel_chat_boost_level')]
        private int $minChannelChatBoostLevel,
    ) {
    }

    /**
     * Get Accent color identifier.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Accent color identifier.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Identifier of a built-in color to use in places, where only one color is needed; 0-6.
     */
    public function getBuiltInAccentColorId(): int
    {
        return $this->builtInAccentColorId;
    }

    /**
     * Set Identifier of a built-in color to use in places, where only one color is needed; 0-6.
     */
    public function setBuiltInAccentColorId(int $builtInAccentColorId): self
    {
        $this->builtInAccentColorId = $builtInAccentColorId;

        return $this;
    }

    /**
     * Get The list of 1-3 colors in RGB format, describing the accent color, as expected to be shown in light themes.
     */
    public function getLightThemeColors(): array|null
    {
        return $this->lightThemeColors;
    }

    /**
     * Set The list of 1-3 colors in RGB format, describing the accent color, as expected to be shown in light themes.
     */
    public function setLightThemeColors(array|null $lightThemeColors): self
    {
        $this->lightThemeColors = $lightThemeColors;

        return $this;
    }

    /**
     * Get The list of 1-3 colors in RGB format, describing the accent color, as expected to be shown in dark themes.
     */
    public function getDarkThemeColors(): array|null
    {
        return $this->darkThemeColors;
    }

    /**
     * Set The list of 1-3 colors in RGB format, describing the accent color, as expected to be shown in dark themes.
     */
    public function setDarkThemeColors(array|null $darkThemeColors): self
    {
        $this->darkThemeColors = $darkThemeColors;

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
            '@type' => 'accentColor',
            'id' => $this->getId(),
            'built_in_accent_color_id' => $this->getBuiltInAccentColorId(),
            'light_theme_colors' => $this->getLightThemeColors(),
            'dark_theme_colors' => $this->getDarkThemeColors(),
            'min_channel_chat_boost_level' => $this->getMinChannelChatBoostLevel(),
        ];
    }
}
