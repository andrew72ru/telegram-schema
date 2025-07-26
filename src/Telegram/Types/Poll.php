<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a poll
 */
class Poll implements \JsonSerializable
{
    public function __construct(
        /** Unique poll identifier */
        #[SerializedName('id')]
        private int $id,
        /** Poll question; 1-300 characters. Only custom emoji entities are allowed */
        #[SerializedName('question')]
        private FormattedText|null $question = null,
        /** List of poll answer options */
        #[SerializedName('options')]
        private array|null $options = null,
        /** Total number of voters, participating in the poll */
        #[SerializedName('total_voter_count')]
        private int $totalVoterCount,
        /** Identifiers of recent voters, if the poll is non-anonymous */
        #[SerializedName('recent_voter_ids')]
        private array|null $recentVoterIds = null,
        /** True, if the poll is anonymous */
        #[SerializedName('is_anonymous')]
        private bool $isAnonymous,
        /** Type of the poll */
        #[SerializedName('type')]
        private PollType|null $type = null,
        /** Amount of time the poll will be active after creation, in seconds */
        #[SerializedName('open_period')]
        private int $openPeriod,
        /** Point in time (Unix timestamp) when the poll will automatically be closed */
        #[SerializedName('close_date')]
        private int $closeDate,
        /** True, if the poll is closed */
        #[SerializedName('is_closed')]
        private bool $isClosed,
    ) {
    }

    /**
     * Get Unique poll identifier
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Unique poll identifier
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Poll question; 1-300 characters. Only custom emoji entities are allowed
     */
    public function getQuestion(): FormattedText|null
    {
        return $this->question;
    }

    /**
     * Set Poll question; 1-300 characters. Only custom emoji entities are allowed
     */
    public function setQuestion(FormattedText|null $question): self
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get List of poll answer options
     */
    public function getOptions(): array|null
    {
        return $this->options;
    }

    /**
     * Set List of poll answer options
     */
    public function setOptions(array|null $options): self
    {
        $this->options = $options;

        return $this;
    }

    /**
     * Get Total number of voters, participating in the poll
     */
    public function getTotalVoterCount(): int
    {
        return $this->totalVoterCount;
    }

    /**
     * Set Total number of voters, participating in the poll
     */
    public function setTotalVoterCount(int $totalVoterCount): self
    {
        $this->totalVoterCount = $totalVoterCount;

        return $this;
    }

    /**
     * Get Identifiers of recent voters, if the poll is non-anonymous
     */
    public function getRecentVoterIds(): array|null
    {
        return $this->recentVoterIds;
    }

    /**
     * Set Identifiers of recent voters, if the poll is non-anonymous
     */
    public function setRecentVoterIds(array|null $recentVoterIds): self
    {
        $this->recentVoterIds = $recentVoterIds;

        return $this;
    }

    /**
     * Get True, if the poll is anonymous
     */
    public function getIsAnonymous(): bool
    {
        return $this->isAnonymous;
    }

    /**
     * Set True, if the poll is anonymous
     */
    public function setIsAnonymous(bool $isAnonymous): self
    {
        $this->isAnonymous = $isAnonymous;

        return $this;
    }

    /**
     * Get Type of the poll
     */
    public function getType(): PollType|null
    {
        return $this->type;
    }

    /**
     * Set Type of the poll
     */
    public function setType(PollType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get Amount of time the poll will be active after creation, in seconds
     */
    public function getOpenPeriod(): int
    {
        return $this->openPeriod;
    }

    /**
     * Set Amount of time the poll will be active after creation, in seconds
     */
    public function setOpenPeriod(int $openPeriod): self
    {
        $this->openPeriod = $openPeriod;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the poll will automatically be closed
     */
    public function getCloseDate(): int
    {
        return $this->closeDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the poll will automatically be closed
     */
    public function setCloseDate(int $closeDate): self
    {
        $this->closeDate = $closeDate;

        return $this;
    }

    /**
     * Get True, if the poll is closed
     */
    public function getIsClosed(): bool
    {
        return $this->isClosed;
    }

    /**
     * Set True, if the poll is closed
     */
    public function setIsClosed(bool $isClosed): self
    {
        $this->isClosed = $isClosed;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'poll',
            'id' => $this->getId(),
            'question' => $this->getQuestion(),
            'options' => $this->getOptions(),
            'total_voter_count' => $this->getTotalVoterCount(),
            'recent_voter_ids' => $this->getRecentVoterIds(),
            'is_anonymous' => $this->getIsAnonymous(),
            'type' => $this->getType(),
            'open_period' => $this->getOpenPeriod(),
            'close_date' => $this->getCloseDate(),
            'is_closed' => $this->getIsClosed(),
        ];
    }
}
