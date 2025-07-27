<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a ready to send inline message. Use sendInlineQueryResultMessage to send the message.
 */
class PreparedInlineMessage implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the inline query to pass to sendInlineQueryResultMessage */
        #[SerializedName('inline_query_id')]
        private int $inlineQueryId,
        /** Resulted inline message of the query */
        #[SerializedName('result')]
        private InlineQueryResult|null $result = null,
        /** Types of the chats to which the message can be sent */
        #[SerializedName('chat_types')]
        private TargetChatTypes|null $chatTypes = null,
    ) {
    }

    /**
     * Get Unique identifier of the inline query to pass to sendInlineQueryResultMessage.
     */
    public function getInlineQueryId(): int
    {
        return $this->inlineQueryId;
    }

    /**
     * Set Unique identifier of the inline query to pass to sendInlineQueryResultMessage.
     */
    public function setInlineQueryId(int $inlineQueryId): self
    {
        $this->inlineQueryId = $inlineQueryId;

        return $this;
    }

    /**
     * Get Resulted inline message of the query.
     */
    public function getResult(): InlineQueryResult|null
    {
        return $this->result;
    }

    /**
     * Set Resulted inline message of the query.
     */
    public function setResult(InlineQueryResult|null $result): self
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get Types of the chats to which the message can be sent.
     */
    public function getChatTypes(): TargetChatTypes|null
    {
        return $this->chatTypes;
    }

    /**
     * Set Types of the chats to which the message can be sent.
     */
    public function setChatTypes(TargetChatTypes|null $chatTypes): self
    {
        $this->chatTypes = $chatTypes;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'preparedInlineMessage',
            'inline_query_id' => $this->getInlineQueryId(),
            'result' => $this->getResult(),
            'chat_types' => $this->getChatTypes(),
        ];
    }
}
