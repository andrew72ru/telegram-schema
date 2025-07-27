<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns backgrounds installed by the user @for_dark_theme Pass true to order returned backgrounds for a dark theme.
 */
class GetInstalledBackgrounds extends Backgrounds implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('for_dark_theme')]
        private bool $forDarkTheme,
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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getInstalledBackgrounds',
            'for_dark_theme' => $this->getForDarkTheme(),
        ];
    }
}
