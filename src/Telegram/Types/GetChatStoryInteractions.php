<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns interactions with a story posted in a chat. Can be used only if story is posted on behalf of a chat and the user is an administrator in the chat.
 */
class GetChatStoryInteractions extends StoryInteractions implements \JsonSerializable
{
    public function __construct(
        /** The identifier of the poster of the story */
        #[SerializedName('story_poster_chat_id')]
        private int $storyPosterChatId,
        /** Story identifier */
        #[SerializedName('story_id')]
        private int $storyId,
        /** Pass the default heart reaction or a suggested reaction type to receive only interactions with the specified reaction type; pass null to receive all interactions; reactionTypePaid isn't supported */
        #[SerializedName('reaction_type')]
        private ReactionType|null $reactionType = null,
        /** Pass true to get forwards and reposts first, then reactions, then other views; pass false to get interactions sorted just by interaction date */
        #[SerializedName('prefer_forwards')]
        private bool $preferForwards,
        /** Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results */
        #[SerializedName('offset')]
        private string $offset,
        /** The maximum number of story interactions to return */
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    /**
     * Get The identifier of the poster of the story.
     */
    public function getStoryPosterChatId(): int
    {
        return $this->storyPosterChatId;
    }

    /**
     * Set The identifier of the poster of the story.
     */
    public function setStoryPosterChatId(int $storyPosterChatId): self
    {
        $this->storyPosterChatId = $storyPosterChatId;

        return $this;
    }

    /**
     * Get Story identifier.
     */
    public function getStoryId(): int
    {
        return $this->storyId;
    }

    /**
     * Set Story identifier.
     */
    public function setStoryId(int $storyId): self
    {
        $this->storyId = $storyId;

        return $this;
    }

    /**
     * Get Pass the default heart reaction or a suggested reaction type to receive only interactions with the specified reaction type; pass null to receive all interactions; reactionTypePaid isn't supported.
     */
    public function getReactionType(): ReactionType|null
    {
        return $this->reactionType;
    }

    /**
     * Set Pass the default heart reaction or a suggested reaction type to receive only interactions with the specified reaction type; pass null to receive all interactions; reactionTypePaid isn't supported.
     */
    public function setReactionType(ReactionType|null $reactionType): self
    {
        $this->reactionType = $reactionType;

        return $this;
    }

    /**
     * Get Pass true to get forwards and reposts first, then reactions, then other views; pass false to get interactions sorted just by interaction date.
     */
    public function getPreferForwards(): bool
    {
        return $this->preferForwards;
    }

    /**
     * Set Pass true to get forwards and reposts first, then reactions, then other views; pass false to get interactions sorted just by interaction date.
     */
    public function setPreferForwards(bool $preferForwards): self
    {
        $this->preferForwards = $preferForwards;

        return $this;
    }

    /**
     * Get Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
     */
    public function getOffset(): string
    {
        return $this->offset;
    }

    /**
     * Set Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
     */
    public function setOffset(string $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * Get The maximum number of story interactions to return.
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of story interactions to return.
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getChatStoryInteractions',
            'story_poster_chat_id' => $this->getStoryPosterChatId(),
            'story_id' => $this->getStoryId(),
            'reaction_type' => $this->getReactionType(),
            'prefer_forwards' => $this->getPreferForwards(),
            'offset' => $this->getOffset(),
            'limit' => $this->getLimit(),
        ];
    }
}
