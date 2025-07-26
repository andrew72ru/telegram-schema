<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes one answer option of a poll
 */
class PollOption implements \JsonSerializable
{
    public function __construct(
        /** Option text; 1-100 characters. Only custom emoji entities are allowed */
        #[SerializedName('text')]
        private FormattedText|null $text = null,
        /** Number of voters for this option, available only for closed or voted polls */
        #[SerializedName('voter_count')]
        private int $voterCount,
        /** The percentage of votes for this option; 0-100 */
        #[SerializedName('vote_percentage')]
        private int $votePercentage,
        /** True, if the option was chosen by the user */
        #[SerializedName('is_chosen')]
        private bool $isChosen,
        /** True, if the option is being chosen by a pending setPollAnswer request */
        #[SerializedName('is_being_chosen')]
        private bool $isBeingChosen,
    ) {
    }

    /**
     * Get Option text; 1-100 characters. Only custom emoji entities are allowed
     */
    public function getText(): FormattedText|null
    {
        return $this->text;
    }

    /**
     * Set Option text; 1-100 characters. Only custom emoji entities are allowed
     */
    public function setText(FormattedText|null $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get Number of voters for this option, available only for closed or voted polls
     */
    public function getVoterCount(): int
    {
        return $this->voterCount;
    }

    /**
     * Set Number of voters for this option, available only for closed or voted polls
     */
    public function setVoterCount(int $voterCount): self
    {
        $this->voterCount = $voterCount;

        return $this;
    }

    /**
     * Get The percentage of votes for this option; 0-100
     */
    public function getVotePercentage(): int
    {
        return $this->votePercentage;
    }

    /**
     * Set The percentage of votes for this option; 0-100
     */
    public function setVotePercentage(int $votePercentage): self
    {
        $this->votePercentage = $votePercentage;

        return $this;
    }

    /**
     * Get True, if the option was chosen by the user
     */
    public function getIsChosen(): bool
    {
        return $this->isChosen;
    }

    /**
     * Set True, if the option was chosen by the user
     */
    public function setIsChosen(bool $isChosen): self
    {
        $this->isChosen = $isChosen;

        return $this;
    }

    /**
     * Get True, if the option is being chosen by a pending setPollAnswer request
     */
    public function getIsBeingChosen(): bool
    {
        return $this->isBeingChosen;
    }

    /**
     * Set True, if the option is being chosen by a pending setPollAnswer request
     */
    public function setIsBeingChosen(bool $isBeingChosen): self
    {
        $this->isBeingChosen = $isBeingChosen;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pollOption',
            'text' => $this->getText(),
            'voter_count' => $this->getVoterCount(),
            'vote_percentage' => $this->getVotePercentage(),
            'is_chosen' => $this->getIsChosen(),
            'is_being_chosen' => $this->getIsBeingChosen(),
        ];
    }
}
