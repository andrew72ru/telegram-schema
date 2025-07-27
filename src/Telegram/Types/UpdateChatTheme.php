<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The chat theme was changed @chat_id Chat identifier @theme_name The new name of the chat theme; may be empty if theme was reset to default.
 */
class UpdateChatTheme extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('theme_name')]
        private string $themeName,
    ) {
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
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
            '@type' => 'updateChatTheme',
            'chat_id' => $this->getChatId(),
            'theme_name' => $this->getThemeName(),
        ];
    }
}
