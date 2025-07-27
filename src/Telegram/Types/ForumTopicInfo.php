<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains basic information about a forum topic.
 */
class ForumTopicInfo implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the forum chat to which the topic belongs */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Forum topic identifier of the topic */
        #[SerializedName('forum_topic_id')]
        private int $forumTopicId,
        /** Message thread identifier of the topic */
        #[SerializedName('message_thread_id')]
        private int $messageThreadId,
        /** Name of the topic */
        #[SerializedName('name')]
        private string $name,
        /** Icon of the topic */
        #[SerializedName('icon')]
        private ForumTopicIcon|null $icon = null,
        /** Point in time (Unix timestamp) when the topic was created */
        #[SerializedName('creation_date')]
        private int $creationDate,
        /** Identifier of the creator of the topic */
        #[SerializedName('creator_id')]
        private MessageSender|null $creatorId = null,
        /** True, if the topic is the General topic list */
        #[SerializedName('is_general')]
        private bool $isGeneral,
        /** True, if the topic was created by the current user */
        #[SerializedName('is_outgoing')]
        private bool $isOutgoing,
        /** True, if the topic is closed */
        #[SerializedName('is_closed')]
        private bool $isClosed,
        /** True, if the topic is hidden above the topic list and closed; for General topic only */
        #[SerializedName('is_hidden')]
        private bool $isHidden,
    ) {
    }

    /**
     * Get Identifier of the forum chat to which the topic belongs.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the forum chat to which the topic belongs.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Forum topic identifier of the topic.
     */
    public function getForumTopicId(): int
    {
        return $this->forumTopicId;
    }

    /**
     * Set Forum topic identifier of the topic.
     */
    public function setForumTopicId(int $forumTopicId): self
    {
        $this->forumTopicId = $forumTopicId;

        return $this;
    }

    /**
     * Get Message thread identifier of the topic.
     */
    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    /**
     * Set Message thread identifier of the topic.
     */
    public function setMessageThreadId(int $messageThreadId): self
    {
        $this->messageThreadId = $messageThreadId;

        return $this;
    }

    /**
     * Get Name of the topic.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set Name of the topic.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get Icon of the topic.
     */
    public function getIcon(): ForumTopicIcon|null
    {
        return $this->icon;
    }

    /**
     * Set Icon of the topic.
     */
    public function setIcon(ForumTopicIcon|null $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the topic was created.
     */
    public function getCreationDate(): int
    {
        return $this->creationDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the topic was created.
     */
    public function setCreationDate(int $creationDate): self
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get Identifier of the creator of the topic.
     */
    public function getCreatorId(): MessageSender|null
    {
        return $this->creatorId;
    }

    /**
     * Set Identifier of the creator of the topic.
     */
    public function setCreatorId(MessageSender|null $creatorId): self
    {
        $this->creatorId = $creatorId;

        return $this;
    }

    /**
     * Get True, if the topic is the General topic list.
     */
    public function getIsGeneral(): bool
    {
        return $this->isGeneral;
    }

    /**
     * Set True, if the topic is the General topic list.
     */
    public function setIsGeneral(bool $isGeneral): self
    {
        $this->isGeneral = $isGeneral;

        return $this;
    }

    /**
     * Get True, if the topic was created by the current user.
     */
    public function getIsOutgoing(): bool
    {
        return $this->isOutgoing;
    }

    /**
     * Set True, if the topic was created by the current user.
     */
    public function setIsOutgoing(bool $isOutgoing): self
    {
        $this->isOutgoing = $isOutgoing;

        return $this;
    }

    /**
     * Get True, if the topic is closed.
     */
    public function getIsClosed(): bool
    {
        return $this->isClosed;
    }

    /**
     * Set True, if the topic is closed.
     */
    public function setIsClosed(bool $isClosed): self
    {
        $this->isClosed = $isClosed;

        return $this;
    }

    /**
     * Get True, if the topic is hidden above the topic list and closed; for General topic only.
     */
    public function getIsHidden(): bool
    {
        return $this->isHidden;
    }

    /**
     * Set True, if the topic is hidden above the topic list and closed; for General topic only.
     */
    public function setIsHidden(bool $isHidden): self
    {
        $this->isHidden = $isHidden;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'forumTopicInfo',
            'chat_id' => $this->getChatId(),
            'forum_topic_id' => $this->getForumTopicId(),
            'message_thread_id' => $this->getMessageThreadId(),
            'name' => $this->getName(),
            'icon' => $this->getIcon(),
            'creation_date' => $this->getCreationDate(),
            'creator_id' => $this->getCreatorId(),
            'is_general' => $this->getIsGeneral(),
            'is_outgoing' => $this->getIsOutgoing(),
            'is_closed' => $this->getIsClosed(),
            'is_hidden' => $this->getIsHidden(),
        ];
    }
}
