<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The default background has changed @for_dark_theme True, if default background for dark theme has changed @background The new default background; may be null.
 */
class UpdateDefaultBackground extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('for_dark_theme')]
        private bool $forDarkTheme,
        #[SerializedName('background')]
        private Background|null $background = null,
    ) {
    }

    public function getForDarkTheme(): bool
    {
        return $this->forDarkTheme;
    }

    public function setForDarkTheme(bool $forDarkTheme): self
    {
        $this->forDarkTheme = $forDarkTheme;

        return $this;
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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateDefaultBackground',
            'for_dark_theme' => $this->getForDarkTheme(),
            'background' => $this->getBackground(),
        ];
    }
}
