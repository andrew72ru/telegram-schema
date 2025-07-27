<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a message.
 */
class Message implements \JsonSerializable
{
    public function __construct(
        /** Message identifier; unique for the chat to which the message belongs */
        #[SerializedName('id')]
        private int $id,
        /** Identifier of the sender of the message */
        #[SerializedName('sender_id')]
        private MessageSender|null $senderId = null,
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** The sending state of the message; may be null if the message isn't being sent and didn't fail to be sent */
        #[SerializedName('sending_state')]
        private MessageSendingState|null $sendingState = null,
        /** The scheduling state of the message; may be null if the message isn't scheduled */
        #[SerializedName('scheduling_state')]
        private MessageSchedulingState|null $schedulingState = null,
        /** True, if the message is outgoing */
        #[SerializedName('is_outgoing')]
        private bool $isOutgoing,
        /** True, if the message is pinned */
        #[SerializedName('is_pinned')]
        private bool $isPinned,
        /** True, if the message was sent because of a scheduled action by the message sender, for example, as away, or greeting service message */
        #[SerializedName('is_from_offline')]
        private bool $isFromOffline,
        /** True, if content of the message can be saved locally */
        #[SerializedName('can_be_saved')]
        private bool $canBeSaved,
        /** True, if media timestamp entities refers to a media in this message as opposed to a media in the replied message */
        #[SerializedName('has_timestamped_media')]
        private bool $hasTimestampedMedia,
        /** True, if the message is a channel post. All messages to channels are channel posts, all other messages are not channel posts */
        #[SerializedName('is_channel_post')]
        private bool $isChannelPost,
        /** True, if the message contains an unread mention for the current user */
        #[SerializedName('contains_unread_mention')]
        private bool $containsUnreadMention,
        /** Point in time (Unix timestamp) when the message was sent; 0 for scheduled messages */
        #[SerializedName('date')]
        private int $date,
        /** Point in time (Unix timestamp) when the message was last edited; 0 for scheduled messages */
        #[SerializedName('edit_date')]
        private int $editDate,
        /** Information about the initial message sender; may be null if none or unknown */
        #[SerializedName('forward_info')]
        private MessageForwardInfo|null $forwardInfo = null,
        /** Information about the initial message for messages created with importMessages; may be null if the message isn't imported */
        #[SerializedName('import_info')]
        private MessageImportInfo|null $importInfo = null,
        /** Information about interactions with the message; may be null if none */
        #[SerializedName('interaction_info')]
        private MessageInteractionInfo|null $interactionInfo = null,
        /** Information about unread reactions added to the message */
        #[SerializedName('unread_reactions')]
        private array|null $unreadReactions = null,
        /** Information about fact-check added to the message; may be null if none */
        #[SerializedName('fact_check')]
        private FactCheck|null $factCheck = null,
        /** Information about the message or the story this message is replying to; may be null if none */
        #[SerializedName('reply_to')]
        private MessageReplyTo|null $replyTo = null,
        /** If non-zero, the identifier of the message thread the message belongs to; unique within the chat to which the message belongs */
        #[SerializedName('message_thread_id')]
        private int $messageThreadId,
        /** Identifier of the topic within the chat to which the message belongs; may be null if none */
        #[SerializedName('topic_id')]
        private MessageTopic|null $topicId = null,
        /** The message's self-destruct type; may be null if none */
        #[SerializedName('self_destruct_type')]
        private MessageSelfDestructType|null $selfDestructType = null,
        /** Time left before the message self-destruct timer expires, in seconds; 0 if self-destruction isn't scheduled yet */
        #[SerializedName('self_destruct_in')]
        private float $selfDestructIn,
        /** Time left before the message will be automatically deleted by message_auto_delete_time setting of the chat, in seconds; 0 if never */
        #[SerializedName('auto_delete_in')]
        private float $autoDeleteIn,
        /** If non-zero, the user identifier of the inline bot through which this message was sent */
        #[SerializedName('via_bot_user_id')]
        private int $viaBotUserId,
        /** If non-zero, the user identifier of the business bot that sent this message */
        #[SerializedName('sender_business_bot_user_id')]
        private int $senderBusinessBotUserId,
        /** Number of times the sender of the message boosted the supergroup at the time the message was sent; 0 if none or unknown. For messages sent by the current user, supergroupFullInfo.my_boost_count must be used instead */
        #[SerializedName('sender_boost_count')]
        private int $senderBoostCount,
        /** The number of Telegram Stars the sender paid to send the message */
        #[SerializedName('paid_message_star_count')]
        private int $paidMessageStarCount,
        /** For channel posts and anonymous group messages, optional author signature */
        #[SerializedName('author_signature')]
        private string $authorSignature,
        /** Unique identifier of an album this message belongs to; 0 if none. Only audios, documents, photos and videos can be grouped together in albums */
        #[SerializedName('media_album_id')]
        private int $mediaAlbumId,
        /** Unique identifier of the effect added to the message; 0 if none */
        #[SerializedName('effect_id')]
        private int $effectId,
        /** True, if media content of the message must be hidden with 18+ spoiler */
        #[SerializedName('has_sensitive_content')]
        private bool $hasSensitiveContent,
        /** If non-empty, contains a human-readable description of the reason why access to this message must be restricted */
        #[SerializedName('restriction_reason')]
        private string $restrictionReason,
        /** Content of the message */
        #[SerializedName('content')]
        private MessageContent|null $content = null,
        /** Reply markup for the message; may be null if none */
        #[SerializedName('reply_markup')]
        private ReplyMarkup|null $replyMarkup = null,
    ) {
    }

    /**
     * Get Message identifier; unique for the chat to which the message belongs.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Message identifier; unique for the chat to which the message belongs.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Identifier of the sender of the message.
     */
    public function getSenderId(): MessageSender|null
    {
        return $this->senderId;
    }

    /**
     * Set Identifier of the sender of the message.
     */
    public function setSenderId(MessageSender|null $senderId): self
    {
        $this->senderId = $senderId;

        return $this;
    }

    /**
     * Get Chat identifier.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get The sending state of the message; may be null if the message isn't being sent and didn't fail to be sent.
     */
    public function getSendingState(): MessageSendingState|null
    {
        return $this->sendingState;
    }

    /**
     * Set The sending state of the message; may be null if the message isn't being sent and didn't fail to be sent.
     */
    public function setSendingState(MessageSendingState|null $sendingState): self
    {
        $this->sendingState = $sendingState;

        return $this;
    }

    /**
     * Get The scheduling state of the message; may be null if the message isn't scheduled.
     */
    public function getSchedulingState(): MessageSchedulingState|null
    {
        return $this->schedulingState;
    }

    /**
     * Set The scheduling state of the message; may be null if the message isn't scheduled.
     */
    public function setSchedulingState(MessageSchedulingState|null $schedulingState): self
    {
        $this->schedulingState = $schedulingState;

        return $this;
    }

    /**
     * Get True, if the message is outgoing.
     */
    public function getIsOutgoing(): bool
    {
        return $this->isOutgoing;
    }

    /**
     * Set True, if the message is outgoing.
     */
    public function setIsOutgoing(bool $isOutgoing): self
    {
        $this->isOutgoing = $isOutgoing;

        return $this;
    }

    /**
     * Get True, if the message is pinned.
     */
    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    /**
     * Set True, if the message is pinned.
     */
    public function setIsPinned(bool $isPinned): self
    {
        $this->isPinned = $isPinned;

        return $this;
    }

    /**
     * Get True, if the message was sent because of a scheduled action by the message sender, for example, as away, or greeting service message.
     */
    public function getIsFromOffline(): bool
    {
        return $this->isFromOffline;
    }

    /**
     * Set True, if the message was sent because of a scheduled action by the message sender, for example, as away, or greeting service message.
     */
    public function setIsFromOffline(bool $isFromOffline): self
    {
        $this->isFromOffline = $isFromOffline;

        return $this;
    }

    /**
     * Get True, if content of the message can be saved locally.
     */
    public function getCanBeSaved(): bool
    {
        return $this->canBeSaved;
    }

    /**
     * Set True, if content of the message can be saved locally.
     */
    public function setCanBeSaved(bool $canBeSaved): self
    {
        $this->canBeSaved = $canBeSaved;

        return $this;
    }

    /**
     * Get True, if media timestamp entities refers to a media in this message as opposed to a media in the replied message.
     */
    public function getHasTimestampedMedia(): bool
    {
        return $this->hasTimestampedMedia;
    }

    /**
     * Set True, if media timestamp entities refers to a media in this message as opposed to a media in the replied message.
     */
    public function setHasTimestampedMedia(bool $hasTimestampedMedia): self
    {
        $this->hasTimestampedMedia = $hasTimestampedMedia;

        return $this;
    }

    /**
     * Get True, if the message is a channel post. All messages to channels are channel posts, all other messages are not channel posts.
     */
    public function getIsChannelPost(): bool
    {
        return $this->isChannelPost;
    }

    /**
     * Set True, if the message is a channel post. All messages to channels are channel posts, all other messages are not channel posts.
     */
    public function setIsChannelPost(bool $isChannelPost): self
    {
        $this->isChannelPost = $isChannelPost;

        return $this;
    }

    /**
     * Get True, if the message contains an unread mention for the current user.
     */
    public function getContainsUnreadMention(): bool
    {
        return $this->containsUnreadMention;
    }

    /**
     * Set True, if the message contains an unread mention for the current user.
     */
    public function setContainsUnreadMention(bool $containsUnreadMention): self
    {
        $this->containsUnreadMention = $containsUnreadMention;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the message was sent; 0 for scheduled messages.
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * Set Point in time (Unix timestamp) when the message was sent; 0 for scheduled messages.
     */
    public function setDate(int $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the message was last edited; 0 for scheduled messages.
     */
    public function getEditDate(): int
    {
        return $this->editDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the message was last edited; 0 for scheduled messages.
     */
    public function setEditDate(int $editDate): self
    {
        $this->editDate = $editDate;

        return $this;
    }

    /**
     * Get Information about the initial message sender; may be null if none or unknown.
     */
    public function getForwardInfo(): MessageForwardInfo|null
    {
        return $this->forwardInfo;
    }

    /**
     * Set Information about the initial message sender; may be null if none or unknown.
     */
    public function setForwardInfo(MessageForwardInfo|null $forwardInfo): self
    {
        $this->forwardInfo = $forwardInfo;

        return $this;
    }

    /**
     * Get Information about the initial message for messages created with importMessages; may be null if the message isn't imported.
     */
    public function getImportInfo(): MessageImportInfo|null
    {
        return $this->importInfo;
    }

    /**
     * Set Information about the initial message for messages created with importMessages; may be null if the message isn't imported.
     */
    public function setImportInfo(MessageImportInfo|null $importInfo): self
    {
        $this->importInfo = $importInfo;

        return $this;
    }

    /**
     * Get Information about interactions with the message; may be null if none.
     */
    public function getInteractionInfo(): MessageInteractionInfo|null
    {
        return $this->interactionInfo;
    }

    /**
     * Set Information about interactions with the message; may be null if none.
     */
    public function setInteractionInfo(MessageInteractionInfo|null $interactionInfo): self
    {
        $this->interactionInfo = $interactionInfo;

        return $this;
    }

    /**
     * Get Information about unread reactions added to the message.
     */
    public function getUnreadReactions(): array|null
    {
        return $this->unreadReactions;
    }

    /**
     * Set Information about unread reactions added to the message.
     */
    public function setUnreadReactions(array|null $unreadReactions): self
    {
        $this->unreadReactions = $unreadReactions;

        return $this;
    }

    /**
     * Get Information about fact-check added to the message; may be null if none.
     */
    public function getFactCheck(): FactCheck|null
    {
        return $this->factCheck;
    }

    /**
     * Set Information about fact-check added to the message; may be null if none.
     */
    public function setFactCheck(FactCheck|null $factCheck): self
    {
        $this->factCheck = $factCheck;

        return $this;
    }

    /**
     * Get Information about the message or the story this message is replying to; may be null if none.
     */
    public function getReplyTo(): MessageReplyTo|null
    {
        return $this->replyTo;
    }

    /**
     * Set Information about the message or the story this message is replying to; may be null if none.
     */
    public function setReplyTo(MessageReplyTo|null $replyTo): self
    {
        $this->replyTo = $replyTo;

        return $this;
    }

    /**
     * Get If non-zero, the identifier of the message thread the message belongs to; unique within the chat to which the message belongs.
     */
    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    /**
     * Set If non-zero, the identifier of the message thread the message belongs to; unique within the chat to which the message belongs.
     */
    public function setMessageThreadId(int $messageThreadId): self
    {
        $this->messageThreadId = $messageThreadId;

        return $this;
    }

    /**
     * Get Identifier of the topic within the chat to which the message belongs; may be null if none.
     */
    public function getTopicId(): MessageTopic|null
    {
        return $this->topicId;
    }

    /**
     * Set Identifier of the topic within the chat to which the message belongs; may be null if none.
     */
    public function setTopicId(MessageTopic|null $topicId): self
    {
        $this->topicId = $topicId;

        return $this;
    }

    /**
     * Get The message's self-destruct type; may be null if none.
     */
    public function getSelfDestructType(): MessageSelfDestructType|null
    {
        return $this->selfDestructType;
    }

    /**
     * Set The message's self-destruct type; may be null if none.
     */
    public function setSelfDestructType(MessageSelfDestructType|null $selfDestructType): self
    {
        $this->selfDestructType = $selfDestructType;

        return $this;
    }

    /**
     * Get Time left before the message self-destruct timer expires, in seconds; 0 if self-destruction isn't scheduled yet.
     */
    public function getSelfDestructIn(): float
    {
        return $this->selfDestructIn;
    }

    /**
     * Set Time left before the message self-destruct timer expires, in seconds; 0 if self-destruction isn't scheduled yet.
     */
    public function setSelfDestructIn(float $selfDestructIn): self
    {
        $this->selfDestructIn = $selfDestructIn;

        return $this;
    }

    /**
     * Get Time left before the message will be automatically deleted by message_auto_delete_time setting of the chat, in seconds; 0 if never.
     */
    public function getAutoDeleteIn(): float
    {
        return $this->autoDeleteIn;
    }

    /**
     * Set Time left before the message will be automatically deleted by message_auto_delete_time setting of the chat, in seconds; 0 if never.
     */
    public function setAutoDeleteIn(float $autoDeleteIn): self
    {
        $this->autoDeleteIn = $autoDeleteIn;

        return $this;
    }

    /**
     * Get If non-zero, the user identifier of the inline bot through which this message was sent.
     */
    public function getViaBotUserId(): int
    {
        return $this->viaBotUserId;
    }

    /**
     * Set If non-zero, the user identifier of the inline bot through which this message was sent.
     */
    public function setViaBotUserId(int $viaBotUserId): self
    {
        $this->viaBotUserId = $viaBotUserId;

        return $this;
    }

    /**
     * Get If non-zero, the user identifier of the business bot that sent this message.
     */
    public function getSenderBusinessBotUserId(): int
    {
        return $this->senderBusinessBotUserId;
    }

    /**
     * Set If non-zero, the user identifier of the business bot that sent this message.
     */
    public function setSenderBusinessBotUserId(int $senderBusinessBotUserId): self
    {
        $this->senderBusinessBotUserId = $senderBusinessBotUserId;

        return $this;
    }

    /**
     * Get Number of times the sender of the message boosted the supergroup at the time the message was sent; 0 if none or unknown. For messages sent by the current user, supergroupFullInfo.my_boost_count must be used instead.
     */
    public function getSenderBoostCount(): int
    {
        return $this->senderBoostCount;
    }

    /**
     * Set Number of times the sender of the message boosted the supergroup at the time the message was sent; 0 if none or unknown. For messages sent by the current user, supergroupFullInfo.my_boost_count must be used instead.
     */
    public function setSenderBoostCount(int $senderBoostCount): self
    {
        $this->senderBoostCount = $senderBoostCount;

        return $this;
    }

    /**
     * Get The number of Telegram Stars the sender paid to send the message.
     */
    public function getPaidMessageStarCount(): int
    {
        return $this->paidMessageStarCount;
    }

    /**
     * Set The number of Telegram Stars the sender paid to send the message.
     */
    public function setPaidMessageStarCount(int $paidMessageStarCount): self
    {
        $this->paidMessageStarCount = $paidMessageStarCount;

        return $this;
    }

    /**
     * Get For channel posts and anonymous group messages, optional author signature.
     */
    public function getAuthorSignature(): string
    {
        return $this->authorSignature;
    }

    /**
     * Set For channel posts and anonymous group messages, optional author signature.
     */
    public function setAuthorSignature(string $authorSignature): self
    {
        $this->authorSignature = $authorSignature;

        return $this;
    }

    /**
     * Get Unique identifier of an album this message belongs to; 0 if none. Only audios, documents, photos and videos can be grouped together in albums.
     */
    public function getMediaAlbumId(): int
    {
        return $this->mediaAlbumId;
    }

    /**
     * Set Unique identifier of an album this message belongs to; 0 if none. Only audios, documents, photos and videos can be grouped together in albums.
     */
    public function setMediaAlbumId(int $mediaAlbumId): self
    {
        $this->mediaAlbumId = $mediaAlbumId;

        return $this;
    }

    /**
     * Get Unique identifier of the effect added to the message; 0 if none.
     */
    public function getEffectId(): int
    {
        return $this->effectId;
    }

    /**
     * Set Unique identifier of the effect added to the message; 0 if none.
     */
    public function setEffectId(int $effectId): self
    {
        $this->effectId = $effectId;

        return $this;
    }

    /**
     * Get True, if media content of the message must be hidden with 18+ spoiler.
     */
    public function getHasSensitiveContent(): bool
    {
        return $this->hasSensitiveContent;
    }

    /**
     * Set True, if media content of the message must be hidden with 18+ spoiler.
     */
    public function setHasSensitiveContent(bool $hasSensitiveContent): self
    {
        $this->hasSensitiveContent = $hasSensitiveContent;

        return $this;
    }

    /**
     * Get If non-empty, contains a human-readable description of the reason why access to this message must be restricted.
     */
    public function getRestrictionReason(): string
    {
        return $this->restrictionReason;
    }

    /**
     * Set If non-empty, contains a human-readable description of the reason why access to this message must be restricted.
     */
    public function setRestrictionReason(string $restrictionReason): self
    {
        $this->restrictionReason = $restrictionReason;

        return $this;
    }

    /**
     * Get Content of the message.
     */
    public function getContent(): MessageContent|null
    {
        return $this->content;
    }

    /**
     * Set Content of the message.
     */
    public function setContent(MessageContent|null $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get Reply markup for the message; may be null if none.
     */
    public function getReplyMarkup(): ReplyMarkup|null
    {
        return $this->replyMarkup;
    }

    /**
     * Set Reply markup for the message; may be null if none.
     */
    public function setReplyMarkup(ReplyMarkup|null $replyMarkup): self
    {
        $this->replyMarkup = $replyMarkup;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'message',
            'id' => $this->getId(),
            'sender_id' => $this->getSenderId(),
            'chat_id' => $this->getChatId(),
            'sending_state' => $this->getSendingState(),
            'scheduling_state' => $this->getSchedulingState(),
            'is_outgoing' => $this->getIsOutgoing(),
            'is_pinned' => $this->getIsPinned(),
            'is_from_offline' => $this->getIsFromOffline(),
            'can_be_saved' => $this->getCanBeSaved(),
            'has_timestamped_media' => $this->getHasTimestampedMedia(),
            'is_channel_post' => $this->getIsChannelPost(),
            'contains_unread_mention' => $this->getContainsUnreadMention(),
            'date' => $this->getDate(),
            'edit_date' => $this->getEditDate(),
            'forward_info' => $this->getForwardInfo(),
            'import_info' => $this->getImportInfo(),
            'interaction_info' => $this->getInteractionInfo(),
            'unread_reactions' => $this->getUnreadReactions(),
            'fact_check' => $this->getFactCheck(),
            'reply_to' => $this->getReplyTo(),
            'message_thread_id' => $this->getMessageThreadId(),
            'topic_id' => $this->getTopicId(),
            'self_destruct_type' => $this->getSelfDestructType(),
            'self_destruct_in' => $this->getSelfDestructIn(),
            'auto_delete_in' => $this->getAutoDeleteIn(),
            'via_bot_user_id' => $this->getViaBotUserId(),
            'sender_business_bot_user_id' => $this->getSenderBusinessBotUserId(),
            'sender_boost_count' => $this->getSenderBoostCount(),
            'paid_message_star_count' => $this->getPaidMessageStarCount(),
            'author_signature' => $this->getAuthorSignature(),
            'media_album_id' => $this->getMediaAlbumId(),
            'effect_id' => $this->getEffectId(),
            'has_sensitive_content' => $this->getHasSensitiveContent(),
            'restriction_reason' => $this->getRestrictionReason(),
            'content' => $this->getContent(),
            'reply_markup' => $this->getReplyMarkup(),
        ];
    }
}
