<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message failed to send. Be aware that some messages being sent can be irrecoverably deleted, in which case updateDeleteMessages will be received instead of this update.
 */
class UpdateMessageSendFailed extends Update implements \JsonSerializable
{
    public function __construct(
        /** The failed to send message */
        #[SerializedName('message')]
        private Message|null $message = null,
        /** The previous temporary message identifier */
        #[SerializedName('old_message_id')]
        private int $oldMessageId,
        /** The cause of the message sending failure */
        #[SerializedName('error')]
        private Error|null $error = null,
    ) {
    }

    /**
     * Get The failed to send message.
     */
    public function getMessage(): Message|null
    {
        return $this->message;
    }

    /**
     * Set The failed to send message.
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

    /**
     * Get The cause of the message sending failure.
     */
    public function getError(): Error|null
    {
        return $this->error;
    }

    /**
     * Set The cause of the message sending failure.
     */
    public function setError(Error|null $error): self
    {
        $this->error = $error;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateMessageSendFailed',
            'message' => $this->getMessage(),
            'old_message_id' => $this->getOldMessageId(),
            'error' => $this->getError(),
        ];
    }
}
