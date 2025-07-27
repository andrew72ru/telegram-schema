<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A chat theme was edited @theme_name If non-empty, name of a new theme, set for the chat. Otherwise, the chat theme was reset to the default one.
 */
class PushMessageContentChatSetTheme extends PushMessageContent implements \JsonSerializable
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
            '@type' => 'pushMessageContentChatSetTheme',
            'theme_name' => $this->getThemeName(),
        ];
    }
}
