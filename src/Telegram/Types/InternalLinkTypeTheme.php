<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to a cloud theme. TDLib has no theme support yet @theme_name Name of the theme.
 */
class InternalLinkTypeTheme extends InternalLinkType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('theme_name')]
        private string $themeName,
    ) {
    }

    public function getThemeName(): string
    {
        return $this->themeName;
    }

    public function setThemeName(string $themeName): self
    {
        $this->themeName = $themeName;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypeTheme',
            'theme_name' => $this->getThemeName(),
        ];
    }
}
