<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Blocks an original sender of a message in the Replies chat
 */
class BlockMessageSenderFromReplies extends Ok implements \JsonSerializable
{
    public function __construct(
        /** The identifier of an incoming message in the Replies chat */
        #[SerializedName('message_id')]
        private int $messageId,
        /** Pass true to delete the message */
        #[SerializedName('delete_message')]
        private bool $deleteMessage,
        /** Pass true to delete all messages from the same sender */
        #[SerializedName('delete_all_messages')]
        private bool $deleteAllMessages,
        /** Pass true to report the sender to the Telegram moderators */
        #[SerializedName('report_spam')]
        private bool $reportSpam,
    ) {
    }

    /**
     * Get The identifier of an incoming message in the Replies chat
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set The identifier of an incoming message in the Replies chat
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get Pass true to delete the message
     */
    public function getDeleteMessage(): bool
    {
        return $this->deleteMessage;
    }

    /**
     * Set Pass true to delete the message
     */
    public function setDeleteMessage(bool $deleteMessage): self
    {
        $this->deleteMessage = $deleteMessage;

        return $this;
    }

    /**
     * Get Pass true to delete all messages from the same sender
     */
    public function getDeleteAllMessages(): bool
    {
        return $this->deleteAllMessages;
    }

    /**
     * Set Pass true to delete all messages from the same sender
     */
    public function setDeleteAllMessages(bool $deleteAllMessages): self
    {
        $this->deleteAllMessages = $deleteAllMessages;

        return $this;
    }

    /**
     * Get Pass true to report the sender to the Telegram moderators
     */
    public function getReportSpam(): bool
    {
        return $this->reportSpam;
    }

    /**
     * Set Pass true to report the sender to the Telegram moderators
     */
    public function setReportSpam(bool $reportSpam): self
    {
        $this->reportSpam = $reportSpam;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'blockMessageSenderFromReplies',
            'message_id' => $this->getMessageId(),
            'delete_message' => $this->getDeleteMessage(),
            'delete_all_messages' => $this->getDeleteAllMessages(),
            'report_spam' => $this->getReportSpam(),
        ];
    }
}
