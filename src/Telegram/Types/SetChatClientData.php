<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes application-specific data associated with a chat @chat_id Chat identifier @client_data New value of client_data.
 */
class SetChatClientData extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('client_data')]
        private string $clientData,
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

    public function getClientData(): string
    {
        return $this->clientData;
    }

    public function setClientData(string $clientData): self
    {
        $this->clientData = $clientData;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setChatClientData',
            'chat_id' => $this->getChatId(),
            'client_data' => $this->getClientData(),
        ];
    }
}
