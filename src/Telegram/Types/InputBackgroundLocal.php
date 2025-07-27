<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A background from a local file.
 */
class InputBackgroundLocal extends InputBackground implements \JsonSerializable
{
    public function __construct(
        /** Background file to use. Only inputFileLocal and inputFileGenerated are supported. The file must be in JPEG format for wallpapers and in PNG format for patterns */
        #[SerializedName('background')]
        private InputFile|null $background = null,
    ) {
    }

    /**
     * Get Background file to use. Only inputFileLocal and inputFileGenerated are supported. The file must be in JPEG format for wallpapers and in PNG format for patterns.
     */
    public function getBackground(): InputFile|null
    {
        return $this->background;
    }

    /**
     * Set Background file to use. Only inputFileLocal and inputFileGenerated are supported. The file must be in JPEG format for wallpapers and in PNG format for patterns.
     */
    public function setBackground(InputFile|null $background): self
    {
        $this->background = $background;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputBackgroundLocal',
            'background' => $this->getBackground(),
        ];
    }
}
