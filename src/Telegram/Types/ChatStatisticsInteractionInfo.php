<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains statistics about interactions with a message sent in the chat or a story posted on behalf of the chat
 */
class ChatStatisticsInteractionInfo implements \JsonSerializable
{
    public function __construct(
        /** Type of the object */
        #[SerializedName('object_type')]
        private ChatStatisticsObjectType|null $objectType = null,
        /** Number of times the object was viewed */
        #[SerializedName('view_count')]
        private int $viewCount,
        /** Number of times the object was forwarded */
        #[SerializedName('forward_count')]
        private int $forwardCount,
        /** Number of times reactions were added to the object */
        #[SerializedName('reaction_count')]
        private int $reactionCount,
    ) {
    }

    /**
     * Get Type of the object
     */
    public function getObjectType(): ChatStatisticsObjectType|null
    {
        return $this->objectType;
    }

    /**
     * Set Type of the object
     */
    public function setObjectType(ChatStatisticsObjectType|null $objectType): self
    {
        $this->objectType = $objectType;

        return $this;
    }

    /**
     * Get Number of times the object was viewed
     */
    public function getViewCount(): int
    {
        return $this->viewCount;
    }

    /**
     * Set Number of times the object was viewed
     */
    public function setViewCount(int $viewCount): self
    {
        $this->viewCount = $viewCount;

        return $this;
    }

    /**
     * Get Number of times the object was forwarded
     */
    public function getForwardCount(): int
    {
        return $this->forwardCount;
    }

    /**
     * Set Number of times the object was forwarded
     */
    public function setForwardCount(int $forwardCount): self
    {
        $this->forwardCount = $forwardCount;

        return $this;
    }

    /**
     * Get Number of times reactions were added to the object
     */
    public function getReactionCount(): int
    {
        return $this->reactionCount;
    }

    /**
     * Set Number of times reactions were added to the object
     */
    public function setReactionCount(int $reactionCount): self
    {
        $this->reactionCount = $reactionCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatStatisticsInteractionInfo',
            'object_type' => $this->getObjectType(),
            'view_count' => $this->getViewCount(),
            'forward_count' => $this->getForwardCount(),
            'reaction_count' => $this->getReactionCount(),
        ];
    }
}
