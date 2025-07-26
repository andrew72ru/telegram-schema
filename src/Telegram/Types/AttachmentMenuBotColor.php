<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a color to highlight a bot added to attachment menu @light_color Color in the RGB format for light themes @dark_color Color in the RGB format for dark themes
 */
class AttachmentMenuBotColor implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('light_color')]
        private int $lightColor,
        #[SerializedName('dark_color')]
        private int $darkColor,
    ) {
    }

    public function getLightColor(): int
    {
        return $this->lightColor;
    }

    public function setLightColor(int $lightColor): self
    {
        $this->lightColor = $lightColor;

        return $this;
    }

    public function getDarkColor(): int
    {
        return $this->darkColor;
    }

    public function setDarkColor(int $darkColor): self
    {
        $this->darkColor = $darkColor;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'attachmentMenuBotColor',
            'light_color' => $this->getLightColor(),
            'dark_color' => $this->getDarkColor(),
        ];
    }
}
