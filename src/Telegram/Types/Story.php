<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a story
 */
class Story implements \JsonSerializable
{
    public function __construct(
        /** Unique story identifier among stories posted by the given chat */
        #[SerializedName('id')]
        private int $id,
        /** Identifier of the chat that posted the story */
        #[SerializedName('poster_chat_id')]
        private int $posterChatId,
        /** Identifier of the user or chat that posted the story; may be null if the story is posted on behalf of the poster_chat_id */
        #[SerializedName('poster_id')]
        private MessageSender|null $posterId = null,
        /** Point in time (Unix timestamp) when the story was published */
        #[SerializedName('date')]
        private int $date,
        /** True, if the story is being posted by the current user */
        #[SerializedName('is_being_posted')]
        private bool $isBeingPosted,
        /** True, if the story is being edited by the current user */
        #[SerializedName('is_being_edited')]
        private bool $isBeingEdited,
        /** True, if the story was edited */
        #[SerializedName('is_edited')]
        private bool $isEdited,
        /** True, if the story is saved in the profile of the chat that posted it and will be available there after expiration */
        #[SerializedName('is_posted_to_chat_page')]
        private bool $isPostedToChatPage,
        /** True, if the story is visible only for the current user */
        #[SerializedName('is_visible_only_for_self')]
        private bool $isVisibleOnlyForSelf,
        /** True, if the story can be deleted */
        #[SerializedName('can_be_deleted')]
        private bool $canBeDeleted,
        /** True, if the story can be edited */
        #[SerializedName('can_be_edited')]
        private bool $canBeEdited,
        /** True, if the story can be forwarded as a message. Otherwise, screenshots and saving of the story content must be also forbidden */
        #[SerializedName('can_be_forwarded')]
        private bool $canBeForwarded,
        /** True, if the story can be replied in the chat with the user that posted the story */
        #[SerializedName('can_be_replied')]
        private bool $canBeReplied,
        /** True, if the story's is_posted_to_chat_page value can be changed */
        #[SerializedName('can_toggle_is_posted_to_chat_page')]
        private bool $canToggleIsPostedToChatPage,
        /** True, if the story statistics are available through getStoryStatistics */
        #[SerializedName('can_get_statistics')]
        private bool $canGetStatistics,
        /** True, if interactions with the story can be received through getStoryInteractions */
        #[SerializedName('can_get_interactions')]
        private bool $canGetInteractions,
        /** True, if users viewed the story can't be received, because the story has expired more than getOption("story_viewers_expiration_delay") seconds ago */
        #[SerializedName('has_expired_viewers')]
        private bool $hasExpiredViewers,
        /** Information about the original story; may be null if the story wasn't reposted */
        #[SerializedName('repost_info')]
        private StoryRepostInfo|null $repostInfo = null,
        /** Information about interactions with the story; may be null if the story isn't owned or there were no interactions */
        #[SerializedName('interaction_info')]
        private StoryInteractionInfo|null $interactionInfo = null,
        /** Type of the chosen reaction; may be null if none */
        #[SerializedName('chosen_reaction_type')]
        private ReactionType|null $chosenReactionType = null,
        /** Privacy rules affecting story visibility; may be approximate for non-owned stories */
        #[SerializedName('privacy_settings')]
        private StoryPrivacySettings|null $privacySettings = null,
        /** Content of the story */
        #[SerializedName('content')]
        private StoryContent|null $content = null,
        /** Clickable areas to be shown on the story content */
        #[SerializedName('areas')]
        private array|null $areas = null,
        /** Caption of the story */
        #[SerializedName('caption')]
        private FormattedText|null $caption = null,
    ) {
    }

    /**
     * Get Unique story identifier among stories posted by the given chat
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Unique story identifier among stories posted by the given chat
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Identifier of the chat that posted the story
     */
    public function getPosterChatId(): int
    {
        return $this->posterChatId;
    }

    /**
     * Set Identifier of the chat that posted the story
     */
    public function setPosterChatId(int $posterChatId): self
    {
        $this->posterChatId = $posterChatId;

        return $this;
    }

    /**
     * Get Identifier of the user or chat that posted the story; may be null if the story is posted on behalf of the poster_chat_id
     */
    public function getPosterId(): MessageSender|null
    {
        return $this->posterId;
    }

    /**
     * Set Identifier of the user or chat that posted the story; may be null if the story is posted on behalf of the poster_chat_id
     */
    public function setPosterId(MessageSender|null $posterId): self
    {
        $this->posterId = $posterId;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the story was published
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * Set Point in time (Unix timestamp) when the story was published
     */
    public function setDate(int $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get True, if the story is being posted by the current user
     */
    public function getIsBeingPosted(): bool
    {
        return $this->isBeingPosted;
    }

    /**
     * Set True, if the story is being posted by the current user
     */
    public function setIsBeingPosted(bool $isBeingPosted): self
    {
        $this->isBeingPosted = $isBeingPosted;

        return $this;
    }

    /**
     * Get True, if the story is being edited by the current user
     */
    public function getIsBeingEdited(): bool
    {
        return $this->isBeingEdited;
    }

    /**
     * Set True, if the story is being edited by the current user
     */
    public function setIsBeingEdited(bool $isBeingEdited): self
    {
        $this->isBeingEdited = $isBeingEdited;

        return $this;
    }

    /**
     * Get True, if the story was edited
     */
    public function getIsEdited(): bool
    {
        return $this->isEdited;
    }

    /**
     * Set True, if the story was edited
     */
    public function setIsEdited(bool $isEdited): self
    {
        $this->isEdited = $isEdited;

        return $this;
    }

    /**
     * Get True, if the story is saved in the profile of the chat that posted it and will be available there after expiration
     */
    public function getIsPostedToChatPage(): bool
    {
        return $this->isPostedToChatPage;
    }

    /**
     * Set True, if the story is saved in the profile of the chat that posted it and will be available there after expiration
     */
    public function setIsPostedToChatPage(bool $isPostedToChatPage): self
    {
        $this->isPostedToChatPage = $isPostedToChatPage;

        return $this;
    }

    /**
     * Get True, if the story is visible only for the current user
     */
    public function getIsVisibleOnlyForSelf(): bool
    {
        return $this->isVisibleOnlyForSelf;
    }

    /**
     * Set True, if the story is visible only for the current user
     */
    public function setIsVisibleOnlyForSelf(bool $isVisibleOnlyForSelf): self
    {
        $this->isVisibleOnlyForSelf = $isVisibleOnlyForSelf;

        return $this;
    }

    /**
     * Get True, if the story can be deleted
     */
    public function getCanBeDeleted(): bool
    {
        return $this->canBeDeleted;
    }

    /**
     * Set True, if the story can be deleted
     */
    public function setCanBeDeleted(bool $canBeDeleted): self
    {
        $this->canBeDeleted = $canBeDeleted;

        return $this;
    }

    /**
     * Get True, if the story can be edited
     */
    public function getCanBeEdited(): bool
    {
        return $this->canBeEdited;
    }

    /**
     * Set True, if the story can be edited
     */
    public function setCanBeEdited(bool $canBeEdited): self
    {
        $this->canBeEdited = $canBeEdited;

        return $this;
    }

    /**
     * Get True, if the story can be forwarded as a message. Otherwise, screenshots and saving of the story content must be also forbidden
     */
    public function getCanBeForwarded(): bool
    {
        return $this->canBeForwarded;
    }

    /**
     * Set True, if the story can be forwarded as a message. Otherwise, screenshots and saving of the story content must be also forbidden
     */
    public function setCanBeForwarded(bool $canBeForwarded): self
    {
        $this->canBeForwarded = $canBeForwarded;

        return $this;
    }

    /**
     * Get True, if the story can be replied in the chat with the user that posted the story
     */
    public function getCanBeReplied(): bool
    {
        return $this->canBeReplied;
    }

    /**
     * Set True, if the story can be replied in the chat with the user that posted the story
     */
    public function setCanBeReplied(bool $canBeReplied): self
    {
        $this->canBeReplied = $canBeReplied;

        return $this;
    }

    /**
     * Get True, if the story's is_posted_to_chat_page value can be changed
     */
    public function getCanToggleIsPostedToChatPage(): bool
    {
        return $this->canToggleIsPostedToChatPage;
    }

    /**
     * Set True, if the story's is_posted_to_chat_page value can be changed
     */
    public function setCanToggleIsPostedToChatPage(bool $canToggleIsPostedToChatPage): self
    {
        $this->canToggleIsPostedToChatPage = $canToggleIsPostedToChatPage;

        return $this;
    }

    /**
     * Get True, if the story statistics are available through getStoryStatistics
     */
    public function getCanGetStatistics(): bool
    {
        return $this->canGetStatistics;
    }

    /**
     * Set True, if the story statistics are available through getStoryStatistics
     */
    public function setCanGetStatistics(bool $canGetStatistics): self
    {
        $this->canGetStatistics = $canGetStatistics;

        return $this;
    }

    /**
     * Get True, if interactions with the story can be received through getStoryInteractions
     */
    public function getCanGetInteractions(): bool
    {
        return $this->canGetInteractions;
    }

    /**
     * Set True, if interactions with the story can be received through getStoryInteractions
     */
    public function setCanGetInteractions(bool $canGetInteractions): self
    {
        $this->canGetInteractions = $canGetInteractions;

        return $this;
    }

    /**
     * Get True, if users viewed the story can't be received, because the story has expired more than getOption("story_viewers_expiration_delay") seconds ago
     */
    public function getHasExpiredViewers(): bool
    {
        return $this->hasExpiredViewers;
    }

    /**
     * Set True, if users viewed the story can't be received, because the story has expired more than getOption("story_viewers_expiration_delay") seconds ago
     */
    public function setHasExpiredViewers(bool $hasExpiredViewers): self
    {
        $this->hasExpiredViewers = $hasExpiredViewers;

        return $this;
    }

    /**
     * Get Information about the original story; may be null if the story wasn't reposted
     */
    public function getRepostInfo(): StoryRepostInfo|null
    {
        return $this->repostInfo;
    }

    /**
     * Set Information about the original story; may be null if the story wasn't reposted
     */
    public function setRepostInfo(StoryRepostInfo|null $repostInfo): self
    {
        $this->repostInfo = $repostInfo;

        return $this;
    }

    /**
     * Get Information about interactions with the story; may be null if the story isn't owned or there were no interactions
     */
    public function getInteractionInfo(): StoryInteractionInfo|null
    {
        return $this->interactionInfo;
    }

    /**
     * Set Information about interactions with the story; may be null if the story isn't owned or there were no interactions
     */
    public function setInteractionInfo(StoryInteractionInfo|null $interactionInfo): self
    {
        $this->interactionInfo = $interactionInfo;

        return $this;
    }

    /**
     * Get Type of the chosen reaction; may be null if none
     */
    public function getChosenReactionType(): ReactionType|null
    {
        return $this->chosenReactionType;
    }

    /**
     * Set Type of the chosen reaction; may be null if none
     */
    public function setChosenReactionType(ReactionType|null $chosenReactionType): self
    {
        $this->chosenReactionType = $chosenReactionType;

        return $this;
    }

    /**
     * Get Privacy rules affecting story visibility; may be approximate for non-owned stories
     */
    public function getPrivacySettings(): StoryPrivacySettings|null
    {
        return $this->privacySettings;
    }

    /**
     * Set Privacy rules affecting story visibility; may be approximate for non-owned stories
     */
    public function setPrivacySettings(StoryPrivacySettings|null $privacySettings): self
    {
        $this->privacySettings = $privacySettings;

        return $this;
    }

    /**
     * Get Content of the story
     */
    public function getContent(): StoryContent|null
    {
        return $this->content;
    }

    /**
     * Set Content of the story
     */
    public function setContent(StoryContent|null $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get Clickable areas to be shown on the story content
     */
    public function getAreas(): array|null
    {
        return $this->areas;
    }

    /**
     * Set Clickable areas to be shown on the story content
     */
    public function setAreas(array|null $areas): self
    {
        $this->areas = $areas;

        return $this;
    }

    /**
     * Get Caption of the story
     */
    public function getCaption(): FormattedText|null
    {
        return $this->caption;
    }

    /**
     * Set Caption of the story
     */
    public function setCaption(FormattedText|null $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'story',
            'id' => $this->getId(),
            'poster_chat_id' => $this->getPosterChatId(),
            'poster_id' => $this->getPosterId(),
            'date' => $this->getDate(),
            'is_being_posted' => $this->getIsBeingPosted(),
            'is_being_edited' => $this->getIsBeingEdited(),
            'is_edited' => $this->getIsEdited(),
            'is_posted_to_chat_page' => $this->getIsPostedToChatPage(),
            'is_visible_only_for_self' => $this->getIsVisibleOnlyForSelf(),
            'can_be_deleted' => $this->getCanBeDeleted(),
            'can_be_edited' => $this->getCanBeEdited(),
            'can_be_forwarded' => $this->getCanBeForwarded(),
            'can_be_replied' => $this->getCanBeReplied(),
            'can_toggle_is_posted_to_chat_page' => $this->getCanToggleIsPostedToChatPage(),
            'can_get_statistics' => $this->getCanGetStatistics(),
            'can_get_interactions' => $this->getCanGetInteractions(),
            'has_expired_viewers' => $this->getHasExpiredViewers(),
            'repost_info' => $this->getRepostInfo(),
            'interaction_info' => $this->getInteractionInfo(),
            'chosen_reaction_type' => $this->getChosenReactionType(),
            'privacy_settings' => $this->getPrivacySettings(),
            'content' => $this->getContent(),
            'areas' => $this->getAreas(),
            'caption' => $this->getCaption(),
        ];
    }
}
