<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a background set for a specific chat @background The background @dark_theme_dimming Dimming of the background in dark themes, as a percentage; 0-100. Applied only to Wallpaper and Fill types of background.
 */
class ChatBackground implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('background')]
        private Background|null $background = null,
        #[SerializedName('dark_theme_dimming')]
        private int $darkThemeDimming,
    ) {
    }

    public function getBackground(): Background|null
    {
        return $this->background;
    }

    public function setBackground(Background|null $background): self
    {
        $this->background = $background;

        return $this;
    }

    public function getDarkThemeDimming(): int
    {
        return $this->darkThemeDimming;
    }

    public function setDarkThemeDimming(int $darkThemeDimming): self
    {
        $this->darkThemeDimming = $darkThemeDimming;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatBackground',
            'background' => $this->getBackground(),
            'dark_theme_dimming' => $this->getDarkThemeDimming(),
        ];
    }
}
