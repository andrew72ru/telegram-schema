<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A user changed the answer to a poll; for bots only
 */
class UpdatePollAnswer extends Update implements \JsonSerializable
{
    public function __construct(
        /** Unique poll identifier */
        #[SerializedName('poll_id')]
        private int $pollId,
        /** Identifier of the message sender that changed the answer to the poll */
        #[SerializedName('voter_id')]
        private MessageSender|null $voterId = null,
        /** 0-based identifiers of answer options, chosen by the user */
        #[SerializedName('option_ids')]
        private array|null $optionIds = null,
    ) {
    }

    /**
     * Get Unique poll identifier
     */
    public function getPollId(): int
    {
        return $this->pollId;
    }

    /**
     * Set Unique poll identifier
     */
    public function setPollId(int $pollId): self
    {
        $this->pollId = $pollId;

        return $this;
    }

    /**
     * Get Identifier of the message sender that changed the answer to the poll
     */
    public function getVoterId(): MessageSender|null
    {
        return $this->voterId;
    }

    /**
     * Set Identifier of the message sender that changed the answer to the poll
     */
    public function setVoterId(MessageSender|null $voterId): self
    {
        $this->voterId = $voterId;

        return $this;
    }

    /**
     * Get 0-based identifiers of answer options, chosen by the user
     */
    public function getOptionIds(): array|null
    {
        return $this->optionIds;
    }

    /**
     * Set 0-based identifiers of answer options, chosen by the user
     */
    public function setOptionIds(array|null $optionIds): self
    {
        $this->optionIds = $optionIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updatePollAnswer',
            'poll_id' => $this->getPollId(),
            'voter_id' => $this->getVoterId(),
            'option_ids' => $this->getOptionIds(),
        ];
    }
}
