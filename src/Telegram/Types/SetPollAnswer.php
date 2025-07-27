<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the user answer to a poll. A poll in quiz mode can be answered only once.
 */
class SetPollAnswer extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat to which the poll belongs */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the message containing the poll */
        #[SerializedName('message_id')]
        private int $messageId,
        /** 0-based identifiers of answer options, chosen by the user. User can choose more than 1 answer option only is the poll allows multiple answers */
        #[SerializedName('option_ids')]
        private array|null $optionIds = null,
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
     * Get 0-based identifiers of answer options, chosen by the user. User can choose more than 1 answer option only is the poll allows multiple answers.
     */
    public function getOptionIds(): array|null
    {
        return $this->optionIds;
    }

    /**
     * Set 0-based identifiers of answer options, chosen by the user. User can choose more than 1 answer option only is the poll allows multiple answers.
     */
    public function setOptionIds(array|null $optionIds): self
    {
        $this->optionIds = $optionIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setPollAnswer',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'option_ids' => $this->getOptionIds(),
        ];
    }
}
