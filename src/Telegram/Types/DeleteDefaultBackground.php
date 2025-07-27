<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Deletes default background for chats @for_dark_theme Pass true if the background is deleted for a dark theme.
 */
class DeleteDefaultBackground extends Ok implements \JsonSerializable
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
            '@type' => 'deleteDefaultBackground',
            'for_dark_theme' => $this->getForDarkTheme(),
        ];
    }
}
