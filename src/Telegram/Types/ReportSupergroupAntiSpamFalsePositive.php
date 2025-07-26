<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Reports a false deletion of a message by aggressive anti-spam checks; requires administrator rights in the supergroup. Can be called only for messages from chatEventMessageDeleted with can_report_anti_spam_false_positive == true
 */
class ReportSupergroupAntiSpamFalsePositive extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Supergroup identifier */
        #[SerializedName('supergroup_id')]
        private int $supergroupId,
        /** Identifier of the erroneously deleted message from chatEventMessageDeleted */
        #[SerializedName('message_id')]
        private int $messageId,
    ) {
    }

    /**
     * Get Supergroup identifier
     */
    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    /**
     * Set Supergroup identifier
     */
    public function setSupergroupId(int $supergroupId): self
    {
        $this->supergroupId = $supergroupId;

        return $this;
    }

    /**
     * Get Identifier of the erroneously deleted message from chatEventMessageDeleted
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the erroneously deleted message from chatEventMessageDeleted
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reportSupergroupAntiSpamFalsePositive',
            'supergroup_id' => $this->getSupergroupId(),
            'message_id' => $this->getMessageId(),
        ];
    }
}
