<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A new incoming callback query; for bots only
 */
class UpdateNewCallbackQuery extends Update implements \JsonSerializable
{
    public function __construct(
        /** Unique query identifier */
        #[SerializedName('id')]
        private int $id,
        /** Identifier of the user who sent the query */
        #[SerializedName('sender_user_id')]
        private int $senderUserId,
        /** Identifier of the chat where the query was sent */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the message from which the query originated */
        #[SerializedName('message_id')]
        private int $messageId,
        /** Identifier that uniquely corresponds to the chat to which the message was sent */
        #[SerializedName('chat_instance')]
        private int $chatInstance,
        /** Query payload */
        #[SerializedName('payload')]
        private CallbackQueryPayload|null $payload = null,
    ) {
    }

    /**
     * Get Unique query identifier
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Unique query identifier
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Identifier of the user who sent the query
     */
    public function getSenderUserId(): int
    {
        return $this->senderUserId;
    }

    /**
     * Set Identifier of the user who sent the query
     */
    public function setSenderUserId(int $senderUserId): self
    {
        $this->senderUserId = $senderUserId;

        return $this;
    }

    /**
     * Get Identifier of the chat where the query was sent
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat where the query was sent
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the message from which the query originated
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the message from which the query originated
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get Identifier that uniquely corresponds to the chat to which the message was sent
     */
    public function getChatInstance(): int
    {
        return $this->chatInstance;
    }

    /**
     * Set Identifier that uniquely corresponds to the chat to which the message was sent
     */
    public function setChatInstance(int $chatInstance): self
    {
        $this->chatInstance = $chatInstance;

        return $this;
    }

    /**
     * Get Query payload
     */
    public function getPayload(): CallbackQueryPayload|null
    {
        return $this->payload;
    }

    /**
     * Set Query payload
     */
    public function setPayload(CallbackQueryPayload|null $payload): self
    {
        $this->payload = $payload;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateNewCallbackQuery',
            'id' => $this->getId(),
            'sender_user_id' => $this->getSenderUserId(),
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'chat_instance' => $this->getChatInstance(),
            'payload' => $this->getPayload(),
        ];
    }
}
