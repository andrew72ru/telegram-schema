<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message has been successfully sent.
 */
class UpdateMessageSendSucceeded extends Update implements \JsonSerializable
{
    public function __construct(
        /** The sent message. Almost any field of the new message can be different from the corresponding field of the original message. */
        #[SerializedName('message')]
        private Message|null $message = null,
        /** The previous temporary message identifier */
        #[SerializedName('old_message_id')]
        private int $oldMessageId,
    ) {
    }

    /**
     * Get The sent message. Almost any field of the new message can be different from the corresponding field of the original message..
     */
    public function getMessage(): Message|null
    {
        return $this->message;
    }

    /**
     * Set The sent message. Almost any field of the new message can be different from the corresponding field of the original message..
     */
    public function setMessage(Message|null $message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get The previous temporary message identifier.
     */
    public function getOldMessageId(): int
    {
        return $this->oldMessageId;
    }

    /**
     * Set The previous temporary message identifier.
     */
    public function setOldMessageId(int $oldMessageId): self
    {
        $this->oldMessageId = $oldMessageId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateMessageSendSucceeded',
            'message' => $this->getMessage(),
            'old_message_id' => $this->getOldMessageId(),
        ];
    }
}
