<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Converts a themeParameters object to corresponding JSON-serialized string. Can be called synchronously @theme Theme parameters to convert to JSON
 */
class GetThemeParametersJsonString extends Text implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('theme')]
        private ThemeParameters|null $theme = null,
    ) {
    }

    public function getTheme(): ThemeParameters|null
    {
        return $this->theme;
    }

    public function setTheme(ThemeParameters|null $theme): self
    {
        $this->theme = $theme;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getThemeParametersJsonString',
            'theme' => $this->getTheme(),
        ];
    }
}
