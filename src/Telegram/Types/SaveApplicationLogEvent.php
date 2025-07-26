<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Saves application log event on the server. Can be called before authorization @type Event type @chat_id Optional chat identifier, associated with the event @data The log event data
 */
class SaveApplicationLogEvent extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('type')]
        private string $type,
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('data')]
        private JsonValue|null $data = null,
    ) {
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
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

    public function getData(): JsonValue|null
    {
        return $this->data;
    }

    public function setData(JsonValue|null $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'saveApplicationLogEvent',
            'type' => $this->getType(),
            'chat_id' => $this->getChatId(),
            'data' => $this->getData(),
        ];
    }
}
