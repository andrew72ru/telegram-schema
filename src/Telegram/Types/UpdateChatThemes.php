<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The list of available chat themes has changed @chat_themes The new list of chat themes.
 */
class UpdateChatThemes extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_themes')]
        private array|null $chatThemes = null,
    ) {
    }

    public function getChatThemes(): array|null
    {
        return $this->chatThemes;
    }

    public function setChatThemes(array|null $chatThemes): self
    {
        $this->chatThemes = $chatThemes;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateChatThemes',
            'chat_themes' => $this->getChatThemes(),
        ];
    }
}
