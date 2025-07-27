<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the location of a chat. Available only for some location-based supergroups, use supergroupFullInfo.can_set_location to check whether the method is allowed to use @chat_id Chat identifier @location New location for the chat; must be valid and not null.
 */
class SetChatLocation extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('location')]
        private ChatLocation|null $location = null,
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

    public function getLocation(): ChatLocation|null
    {
        return $this->location;
    }

    public function setLocation(ChatLocation|null $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setChatLocation',
            'chat_id' => $this->getChatId(),
            'location' => $this->getLocation(),
        ];
    }
}
