<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Deletes messages on behalf of a business account; for bots only.
 */
class DeleteBusinessMessages extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of business connection through which the messages were received */
        #[SerializedName('business_connection_id')]
        private string $businessConnectionId,
        /** Identifier of the messages */
        #[SerializedName('message_ids')]
        private array|null $messageIds = null,
    ) {
    }

    /**
     * Get Unique identifier of business connection through which the messages were received.
     */
    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
    }

    /**
     * Set Unique identifier of business connection through which the messages were received.
     */
    public function setBusinessConnectionId(string $businessConnectionId): self
    {
        $this->businessConnectionId = $businessConnectionId;

        return $this;
    }

    /**
     * Get Identifier of the messages.
     */
    public function getMessageIds(): array|null
    {
        return $this->messageIds;
    }

    /**
     * Set Identifier of the messages.
     */
    public function setMessageIds(array|null $messageIds): self
    {
        $this->messageIds = $messageIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'deleteBusinessMessages',
            'business_connection_id' => $this->getBusinessConnectionId(),
            'message_ids' => $this->getMessageIds(),
        ];
    }
}
