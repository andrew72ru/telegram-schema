<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * User changed its reactions on a message with public reactions; for bots only
 */
class UpdateMessageReaction extends Update implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Message identifier */
        #[SerializedName('message_id')]
        private int $messageId,
        /** Identifier of the user or chat that changed reactions */
        #[SerializedName('actor_id')]
        private MessageSender|null $actorId = null,
        /** Point in time (Unix timestamp) when the reactions were changed */
        #[SerializedName('date')]
        private int $date,
        /** Old list of chosen reactions */
        #[SerializedName('old_reaction_types')]
        private array|null $oldReactionTypes = null,
        /** New list of chosen reactions */
        #[SerializedName('new_reaction_types')]
        private array|null $newReactionTypes = null,
    ) {
    }

    /**
     * Get Chat identifier
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Message identifier
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Message identifier
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get Identifier of the user or chat that changed reactions
     */
    public function getActorId(): MessageSender|null
    {
        return $this->actorId;
    }

    /**
     * Set Identifier of the user or chat that changed reactions
     */
    public function setActorId(MessageSender|null $actorId): self
    {
        $this->actorId = $actorId;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the reactions were changed
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * Set Point in time (Unix timestamp) when the reactions were changed
     */
    public function setDate(int $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get Old list of chosen reactions
     */
    public function getOldReactionTypes(): array|null
    {
        return $this->oldReactionTypes;
    }

    /**
     * Set Old list of chosen reactions
     */
    public function setOldReactionTypes(array|null $oldReactionTypes): self
    {
        $this->oldReactionTypes = $oldReactionTypes;

        return $this;
    }

    /**
     * Get New list of chosen reactions
     */
    public function getNewReactionTypes(): array|null
    {
        return $this->newReactionTypes;
    }

    /**
     * Set New list of chosen reactions
     */
    public function setNewReactionTypes(array|null $newReactionTypes): self
    {
        $this->newReactionTypes = $newReactionTypes;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateMessageReaction',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'actor_id' => $this->getActorId(),
            'date' => $this->getDate(),
            'old_reaction_types' => $this->getOldReactionTypes(),
            'new_reaction_types' => $this->getNewReactionTypes(),
        ];
    }
}
