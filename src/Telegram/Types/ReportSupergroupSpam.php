<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Reports messages in a supergroup as spam; requires administrator rights in the supergroup.
 */
class ReportSupergroupSpam extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Supergroup identifier */
        #[SerializedName('supergroup_id')]
        private int $supergroupId,
        /** Identifiers of messages to report. Use messageProperties.can_report_supergroup_spam to check whether the message can be reported */
        #[SerializedName('message_ids')]
        private array|null $messageIds = null,
    ) {
    }

    /**
     * Get Supergroup identifier.
     */
    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    /**
     * Set Supergroup identifier.
     */
    public function setSupergroupId(int $supergroupId): self
    {
        $this->supergroupId = $supergroupId;

        return $this;
    }

    /**
     * Get Identifiers of messages to report. Use messageProperties.can_report_supergroup_spam to check whether the message can be reported.
     */
    public function getMessageIds(): array|null
    {
        return $this->messageIds;
    }

    /**
     * Set Identifiers of messages to report. Use messageProperties.can_report_supergroup_spam to check whether the message can be reported.
     */
    public function setMessageIds(array|null $messageIds): self
    {
        $this->messageIds = $messageIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reportSupergroupSpam',
            'supergroup_id' => $this->getSupergroupId(),
            'message_ids' => $this->getMessageIds(),
        ];
    }
}
