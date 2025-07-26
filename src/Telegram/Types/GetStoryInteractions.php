<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns interactions with a story. The method can be called only for stories posted on behalf of the current user
 */
class GetStoryInteractions extends StoryInteractions implements \JsonSerializable
{
    public function __construct(
        /** Story identifier */
        #[SerializedName('story_id')]
        private int $storyId,
        /** Query to search for in names, usernames and titles; may be empty to get all relevant interactions */
        #[SerializedName('query')]
        private string $query,
        /** Pass true to get only interactions by contacts; pass false to get all relevant interactions */
        #[SerializedName('only_contacts')]
        private bool $onlyContacts,
        /** Pass true to get forwards and reposts first, then reactions, then other views; pass false to get interactions sorted just by interaction date */
        #[SerializedName('prefer_forwards')]
        private bool $preferForwards,
        /** Pass true to get interactions with reaction first; pass false to get interactions sorted just by interaction date. Ignored if prefer_forwards == true */
        #[SerializedName('prefer_with_reaction')]
        private bool $preferWithReaction,
        /** Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results */
        #[SerializedName('offset')]
        private string $offset,
        /** The maximum number of story interactions to return */
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    /**
     * Get Story identifier
     */
    public function getStoryId(): int
    {
        return $this->storyId;
    }

    /**
     * Set Story identifier
     */
    public function setStoryId(int $storyId): self
    {
        $this->storyId = $storyId;

        return $this;
    }

    /**
     * Get Query to search for in names, usernames and titles; may be empty to get all relevant interactions
     */
    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * Set Query to search for in names, usernames and titles; may be empty to get all relevant interactions
     */
    public function setQuery(string $query): self
    {
        $this->query = $query;

        return $this;
    }

    /**
     * Get Pass true to get only interactions by contacts; pass false to get all relevant interactions
     */
    public function getOnlyContacts(): bool
    {
        return $this->onlyContacts;
    }

    /**
     * Set Pass true to get only interactions by contacts; pass false to get all relevant interactions
     */
    public function setOnlyContacts(bool $onlyContacts): self
    {
        $this->onlyContacts = $onlyContacts;

        return $this;
    }

    /**
     * Get Pass true to get forwards and reposts first, then reactions, then other views; pass false to get interactions sorted just by interaction date
     */
    public function getPreferForwards(): bool
    {
        return $this->preferForwards;
    }

    /**
     * Set Pass true to get forwards and reposts first, then reactions, then other views; pass false to get interactions sorted just by interaction date
     */
    public function setPreferForwards(bool $preferForwards): self
    {
        $this->preferForwards = $preferForwards;

        return $this;
    }

    /**
     * Get Pass true to get interactions with reaction first; pass false to get interactions sorted just by interaction date. Ignored if prefer_forwards == true
     */
    public function getPreferWithReaction(): bool
    {
        return $this->preferWithReaction;
    }

    /**
     * Set Pass true to get interactions with reaction first; pass false to get interactions sorted just by interaction date. Ignored if prefer_forwards == true
     */
    public function setPreferWithReaction(bool $preferWithReaction): self
    {
        $this->preferWithReaction = $preferWithReaction;

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
     * Get The maximum number of story interactions to return
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of story interactions to return
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getStoryInteractions',
            'story_id' => $this->getStoryId(),
            'query' => $this->getQuery(),
            'only_contacts' => $this->getOnlyContacts(),
            'prefer_forwards' => $this->getPreferForwards(),
            'prefer_with_reaction' => $this->getPreferWithReaction(),
            'offset' => $this->getOffset(),
            'limit' => $this->getLimit(),
        ];
    }
}
