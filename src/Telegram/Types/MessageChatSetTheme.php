<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A theme in the chat has been changed @theme_name If non-empty, name of a new theme, set for the chat. Otherwise, chat theme was reset to the default one.
 */
class MessageChatSetTheme extends MessageContent implements \JsonSerializable
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
            '@type' => 'messageChatSetTheme',
            'theme_name' => $this->getThemeName(),
        ];
    }
}
