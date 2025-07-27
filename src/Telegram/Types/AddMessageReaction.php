<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Adds a reaction or a tag to a message. Use getMessageAvailableReactions to receive the list of available reactions for the message.
 */
class AddMessageReaction extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat to which the message belongs */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the message */
        #[SerializedName('message_id')]
        private int $messageId,
        /** Type of the reaction to add. Use addPendingPaidMessageReaction instead to add the paid reaction */
        #[SerializedName('reaction_type')]
        private ReactionType|null $reactionType = null,
        /** Pass true if the reaction is added with a big animation */
        #[SerializedName('is_big')]
        private bool $isBig,
        /** Pass true if the reaction needs to be added to recent reactions; tags are never added to the list of recent reactions */
        #[SerializedName('update_recent_reactions')]
        private bool $updateRecentReactions,
    ) {
    }

    /**
     * Get Identifier of the chat to which the message belongs.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat to which the message belongs.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the message.
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the message.
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get Type of the reaction to add. Use addPendingPaidMessageReaction instead to add the paid reaction.
     */
    public function getReactionType(): ReactionType|null
    {
        return $this->reactionType;
    }

    /**
     * Set Type of the reaction to add. Use addPendingPaidMessageReaction instead to add the paid reaction.
     */
    public function setReactionType(ReactionType|null $reactionType): self
    {
        $this->reactionType = $reactionType;

        return $this;
    }

    /**
     * Get Pass true if the reaction is added with a big animation.
     */
    public function getIsBig(): bool
    {
        return $this->isBig;
    }

    /**
     * Set Pass true if the reaction is added with a big animation.
     */
    public function setIsBig(bool $isBig): self
    {
        $this->isBig = $isBig;

        return $this;
    }

    /**
     * Get Pass true if the reaction needs to be added to recent reactions; tags are never added to the list of recent reactions.
     */
    public function getUpdateRecentReactions(): bool
    {
        return $this->updateRecentReactions;
    }

    /**
     * Set Pass true if the reaction needs to be added to recent reactions; tags are never added to the list of recent reactions.
     */
    public function setUpdateRecentReactions(bool $updateRecentReactions): self
    {
        $this->updateRecentReactions = $updateRecentReactions;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'addMessageReaction',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'reaction_type' => $this->getReactionType(),
            'is_big' => $this->getIsBig(),
            'update_recent_reactions' => $this->getUpdateRecentReactions(),
        ];
    }
}
