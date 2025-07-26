<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A background from a chat theme; can be used only as a chat background in channels @theme_name Name of the chat theme
 */
class BackgroundTypeChatTheme extends BackgroundType implements \JsonSerializable
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
            '@type' => 'backgroundTypeChatTheme',
            'theme_name' => $this->getThemeName(),
        ];
    }
}
