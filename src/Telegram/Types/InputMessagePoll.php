<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message with a poll. Polls can't be sent to secret chats and channel direct messages chats. Polls can be sent to a private chat only if the chat is a chat with a bot or the Saved Messages chat.
 */
class InputMessagePoll extends InputMessageContent implements \JsonSerializable
{
    public function __construct(
        /** Poll question; 1-255 characters (up to 300 characters for bots). Only custom emoji entities are allowed to be added and only by Premium users */
        #[SerializedName('question')]
        private FormattedText|null $question = null,
        /** List of poll answer options, 2-getOption("poll_answer_count_max") strings 1-100 characters each. Only custom emoji entities are allowed to be added and only by Premium users */
        #[SerializedName('options')]
        private array|null $options = null,
        /** True, if the poll voters are anonymous. Non-anonymous polls can't be sent or forwarded to channels */
        #[SerializedName('is_anonymous')]
        private bool $isAnonymous,
        /** Type of the poll */
        #[SerializedName('type')]
        private PollType|null $type = null,
        /** Amount of time the poll will be active after creation, in seconds; for bots only */
        #[SerializedName('open_period')]
        private int $openPeriod,
        /** Point in time (Unix timestamp) when the poll will automatically be closed; for bots only */
        #[SerializedName('close_date')]
        private int $closeDate,
        /** True, if the poll needs to be sent already closed; for bots only */
        #[SerializedName('is_closed')]
        private bool $isClosed,
    ) {
    }

    /**
     * Get Poll question; 1-255 characters (up to 300 characters for bots). Only custom emoji entities are allowed to be added and only by Premium users.
     */
    public function getQuestion(): FormattedText|null
    {
        return $this->question;
    }

    /**
     * Set Poll question; 1-255 characters (up to 300 characters for bots). Only custom emoji entities are allowed to be added and only by Premium users.
     */
    public function setQuestion(FormattedText|null $question): self
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get List of poll answer options, 2-getOption("poll_answer_count_max") strings 1-100 characters each. Only custom emoji entities are allowed to be added and only by Premium users.
     */
    public function getOptions(): array|null
    {
        return $this->options;
    }

    /**
     * Set List of poll answer options, 2-getOption("poll_answer_count_max") strings 1-100 characters each. Only custom emoji entities are allowed to be added and only by Premium users.
     */
    public function setOptions(array|null $options): self
    {
        $this->options = $options;

        return $this;
    }

    /**
     * Get True, if the poll voters are anonymous. Non-anonymous polls can't be sent or forwarded to channels.
     */
    public function getIsAnonymous(): bool
    {
        return $this->isAnonymous;
    }

    /**
     * Set True, if the poll voters are anonymous. Non-anonymous polls can't be sent or forwarded to channels.
     */
    public function setIsAnonymous(bool $isAnonymous): self
    {
        $this->isAnonymous = $isAnonymous;

        return $this;
    }

    /**
     * Get Type of the poll.
     */
    public function getType(): PollType|null
    {
        return $this->type;
    }

    /**
     * Set Type of the poll.
     */
    public function setType(PollType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get Amount of time the poll will be active after creation, in seconds; for bots only.
     */
    public function getOpenPeriod(): int
    {
        return $this->openPeriod;
    }

    /**
     * Set Amount of time the poll will be active after creation, in seconds; for bots only.
     */
    public function setOpenPeriod(int $openPeriod): self
    {
        $this->openPeriod = $openPeriod;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the poll will automatically be closed; for bots only.
     */
    public function getCloseDate(): int
    {
        return $this->closeDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the poll will automatically be closed; for bots only.
     */
    public function setCloseDate(int $closeDate): self
    {
        $this->closeDate = $closeDate;

        return $this;
    }

    /**
     * Get True, if the poll needs to be sent already closed; for bots only.
     */
    public function getIsClosed(): bool
    {
        return $this->isClosed;
    }

    /**
     * Set True, if the poll needs to be sent already closed; for bots only.
     */
    public function setIsClosed(bool $isClosed): self
    {
        $this->isClosed = $isClosed;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputMessagePoll',
            'question' => $this->getQuestion(),
            'options' => $this->getOptions(),
            'is_anonymous' => $this->getIsAnonymous(),
            'type' => $this->getType(),
            'open_period' => $this->getOpenPeriod(),
            'close_date' => $this->getCloseDate(),
            'is_closed' => $this->getIsClosed(),
        ];
    }
}
