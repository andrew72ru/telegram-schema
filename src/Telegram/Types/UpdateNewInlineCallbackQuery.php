<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A new incoming callback query from a message sent via a bot; for bots only.
 */
class UpdateNewInlineCallbackQuery extends Update implements \JsonSerializable
{
    public function __construct(
        /** Unique query identifier */
        #[SerializedName('id')]
        private int $id,
        /** Identifier of the user who sent the query */
        #[SerializedName('sender_user_id')]
        private int $senderUserId,
        /** Identifier of the inline message from which the query originated */
        #[SerializedName('inline_message_id')]
        private string $inlineMessageId,
        /** An identifier uniquely corresponding to the chat a message was sent to */
        #[SerializedName('chat_instance')]
        private int $chatInstance,
        /** Query payload */
        #[SerializedName('payload')]
        private CallbackQueryPayload|null $payload = null,
    ) {
    }

    /**
     * Get Unique query identifier.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Unique query identifier.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Identifier of the user who sent the query.
     */
    public function getSenderUserId(): int
    {
        return $this->senderUserId;
    }

    /**
     * Set Identifier of the user who sent the query.
     */
    public function setSenderUserId(int $senderUserId): self
    {
        $this->senderUserId = $senderUserId;

        return $this;
    }

    /**
     * Get Identifier of the inline message from which the query originated.
     */
    public function getInlineMessageId(): string
    {
        return $this->inlineMessageId;
    }

    /**
     * Set Identifier of the inline message from which the query originated.
     */
    public function setInlineMessageId(string $inlineMessageId): self
    {
        $this->inlineMessageId = $inlineMessageId;

        return $this;
    }

    /**
     * Get An identifier uniquely corresponding to the chat a message was sent to.
     */
    public function getChatInstance(): int
    {
        return $this->chatInstance;
    }

    /**
     * Set An identifier uniquely corresponding to the chat a message was sent to.
     */
    public function setChatInstance(int $chatInstance): self
    {
        $this->chatInstance = $chatInstance;

        return $this;
    }

    /**
     * Get Query payload.
     */
    public function getPayload(): CallbackQueryPayload|null
    {
        return $this->payload;
    }

    /**
     * Set Query payload.
     */
    public function setPayload(CallbackQueryPayload|null $payload): self
    {
        $this->payload = $payload;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateNewInlineCallbackQuery',
            'id' => $this->getId(),
            'sender_user_id' => $this->getSenderUserId(),
            'inline_message_id' => $this->getInlineMessageId(),
            'chat_instance' => $this->getChatInstance(),
            'payload' => $this->getPayload(),
        ];
    }
}
