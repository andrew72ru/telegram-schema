<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A new message was added to a business account; for bots only @connection_id Unique identifier of the business connection @message The new message.
 */
class UpdateNewBusinessMessage extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('connection_id')]
        private string $connectionId,
        #[SerializedName('message')]
        private BusinessMessage|null $message = null,
    ) {
    }

    public function getConnectionId(): string
    {
        return $this->connectionId;
    }

    public function setConnectionId(string $connectionId): self
    {
        $this->connectionId = $connectionId;

        return $this;
    }

    public function getMessage(): BusinessMessage|null
    {
        return $this->message;
    }

    public function setMessage(BusinessMessage|null $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateNewBusinessMessage',
            'connection_id' => $this->getConnectionId(),
            'message' => $this->getMessage(),
        ];
    }
}
