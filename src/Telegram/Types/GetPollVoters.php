<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns message senders voted for the specified option in a non-anonymous polls. For optimal performance, the number of returned users is chosen by TDLib.
 */
class GetPollVoters extends MessageSenders implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat to which the poll belongs */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the message containing the poll */
        #[SerializedName('message_id')]
        private int $messageId,
        /** 0-based identifier of the answer option */
        #[SerializedName('option_id')]
        private int $optionId,
        /** Number of voters to skip in the result; must be non-negative */
        #[SerializedName('offset')]
        private int $offset,
        /** The maximum number of voters to be returned; must be positive and can't be greater than 50. For optimal performance, the number of returned voters is chosen by TDLib and can be smaller than the specified limit, even if the end of the voter list has not been reached */
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    /**
     * Get Identifier of the chat to which the poll belongs.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat to which the poll belongs.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the message containing the poll.
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the message containing the poll.
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get 0-based identifier of the answer option.
     */
    public function getOptionId(): int
    {
        return $this->optionId;
    }

    /**
     * Set 0-based identifier of the answer option.
     */
    public function setOptionId(int $optionId): self
    {
        $this->optionId = $optionId;

        return $this;
    }

    /**
     * Get Number of voters to skip in the result; must be non-negative.
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * Set Number of voters to skip in the result; must be non-negative.
     */
    public function setOffset(int $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * Get The maximum number of voters to be returned; must be positive and can't be greater than 50. For optimal performance, the number of returned voters is chosen by TDLib and can be smaller than the specified limit, even if the end of the voter list has not been reached.
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of voters to be returned; must be positive and can't be greater than 50. For optimal performance, the number of returned voters is chosen by TDLib and can be smaller than the specified limit, even if the end of the voter list has not been reached.
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getPollVoters',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'option_id' => $this->getOptionId(),
            'offset' => $this->getOffset(),
            'limit' => $this->getLimit(),
        ];
    }
}
