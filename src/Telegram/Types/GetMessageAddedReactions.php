<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns reactions added for a message, along with their sender
 */
class GetMessageAddedReactions extends AddedReactions implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat to which the message belongs */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the message. Use message.interaction_info.reactions.can_get_added_reactions to check whether added reactions can be received for the message */
        #[SerializedName('message_id')]
        private int $messageId,
        /** Type of the reactions to return; pass null to return all added reactions; reactionTypePaid isn't supported */
        #[SerializedName('reaction_type')]
        private ReactionType|null $reactionType = null,
        /** Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results */
        #[SerializedName('offset')]
        private string $offset,
        /** The maximum number of reactions to be returned; must be positive and can't be greater than 100 */
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    /**
     * Get Identifier of the chat to which the message belongs
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat to which the message belongs
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the message. Use message.interaction_info.reactions.can_get_added_reactions to check whether added reactions can be received for the message
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the message. Use message.interaction_info.reactions.can_get_added_reactions to check whether added reactions can be received for the message
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get Type of the reactions to return; pass null to return all added reactions; reactionTypePaid isn't supported
     */
    public function getReactionType(): ReactionType|null
    {
        return $this->reactionType;
    }

    /**
     * Set Type of the reactions to return; pass null to return all added reactions; reactionTypePaid isn't supported
     */
    public function setReactionType(ReactionType|null $reactionType): self
    {
        $this->reactionType = $reactionType;

        return $this;
    }

    /**
     * Get Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results
     */
    public function getOffset(): string
    {
        return $this->offset;
    }

    /**
     * Set Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results
     */
    public function setOffset(string $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * Get The maximum number of reactions to be returned; must be positive and can't be greater than 100
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of reactions to be returned; must be positive and can't be greater than 100
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getMessageAddedReactions',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'reaction_type' => $this->getReactionType(),
            'offset' => $this->getOffset(),
            'limit' => $this->getLimit(),
        ];
    }
}
