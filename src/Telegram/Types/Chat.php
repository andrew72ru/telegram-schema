<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A chat. (Can be a private chat, basic group, supergroup, or secret chat)
 */
class Chat implements \JsonSerializable
{
    public function __construct(
        /** Chat unique identifier */
        #[SerializedName('id')]
        private int $id,
        /** Type of the chat */
        #[SerializedName('type')]
        private ChatType|null $type = null,
        /** Chat title */
        #[SerializedName('title')]
        private string $title,
        /** Chat photo; may be null */
        #[SerializedName('photo')]
        private ChatPhotoInfo|null $photo = null,
        /** Identifier of the accent color for message sender name, and backgrounds of chat photo, reply header, and link preview */
        #[SerializedName('accent_color_id')]
        private int $accentColorId,
        /** Identifier of a custom emoji to be shown on the reply header and link preview background for messages sent by the chat; 0 if none */
        #[SerializedName('background_custom_emoji_id')]
        private int $backgroundCustomEmojiId,
        /** Identifier of the profile accent color for the chat's profile; -1 if none */
        #[SerializedName('profile_accent_color_id')]
        private int $profileAccentColorId,
        /** Identifier of a custom emoji to be shown on the background of the chat's profile; 0 if none */
        #[SerializedName('profile_background_custom_emoji_id')]
        private int $profileBackgroundCustomEmojiId,
        /** Actions that non-administrator chat members are allowed to take in the chat */
        #[SerializedName('permissions')]
        private ChatPermissions|null $permissions = null,
        /** Last message in the chat; may be null if none or unknown */
        #[SerializedName('last_message')]
        private Message|null $lastMessage = null,
        /** Positions of the chat in chat lists */
        #[SerializedName('positions')]
        private array|null $positions = null,
        /** Chat lists to which the chat belongs. A chat can have a non-zero position in a chat list even if it doesn't belong to the chat list and have no position in a chat list even if it belongs to the chat list */
        #[SerializedName('chat_lists')]
        private array|null $chatLists = null,
        /** Identifier of a user or chat that is selected to send messages in the chat; may be null if the user can't change message sender */
        #[SerializedName('message_sender_id')]
        private MessageSender|null $messageSenderId = null,
        /** Block list to which the chat is added; may be null if none */
        #[SerializedName('block_list')]
        private BlockList|null $blockList = null,
        /** True, if chat content can't be saved locally, forwarded, or copied */
        #[SerializedName('has_protected_content')]
        private bool $hasProtectedContent,
        /** True, if translation of all messages in the chat must be suggested to the user */
        #[SerializedName('is_translatable')]
        private bool $isTranslatable,
        /** True, if the chat is marked as unread */
        #[SerializedName('is_marked_as_unread')]
        private bool $isMarkedAsUnread,
        /** True, if the chat is a forum supergroup that must be shown in the "View as topics" mode, or Saved Messages chat that must be shown in the "View as chats" */
        #[SerializedName('view_as_topics')]
        private bool $viewAsTopics,
        /** True, if the chat has scheduled messages */
        #[SerializedName('has_scheduled_messages')]
        private bool $hasScheduledMessages,
        /** True, if the chat messages can be deleted only for the current user while other users will continue to see the messages */
        #[SerializedName('can_be_deleted_only_for_self')]
        private bool $canBeDeletedOnlyForSelf,
        /** True, if the chat messages can be deleted for all users */
        #[SerializedName('can_be_deleted_for_all_users')]
        private bool $canBeDeletedForAllUsers,
        /** True, if the chat can be reported to Telegram moderators through reportChat or reportChatPhoto */
        #[SerializedName('can_be_reported')]
        private bool $canBeReported,
        /** Default value of the disable_notification parameter, used when a message is sent to the chat */
        #[SerializedName('default_disable_notification')]
        private bool $defaultDisableNotification,
        /** Number of unread messages in the chat */
        #[SerializedName('unread_count')]
        private int $unreadCount,
        /** Identifier of the last read incoming message */
        #[SerializedName('last_read_inbox_message_id')]
        private int $lastReadInboxMessageId,
        /** Identifier of the last read outgoing message */
        #[SerializedName('last_read_outbox_message_id')]
        private int $lastReadOutboxMessageId,
        /** Number of unread messages with a mention/reply in the chat */
        #[SerializedName('unread_mention_count')]
        private int $unreadMentionCount,
        /** Number of messages with unread reactions in the chat */
        #[SerializedName('unread_reaction_count')]
        private int $unreadReactionCount,
        /** Notification settings for the chat */
        #[SerializedName('notification_settings')]
        private ChatNotificationSettings|null $notificationSettings = null,
        /** Types of reaction, available in the chat */
        #[SerializedName('available_reactions')]
        private ChatAvailableReactions|null $availableReactions = null,
        /** Current message auto-delete or self-destruct timer setting for the chat, in seconds; 0 if disabled. Self-destruct timer in secret chats starts after the message or its content is viewed. Auto-delete timer in other chats starts from the send date */
        #[SerializedName('message_auto_delete_time')]
        private int $messageAutoDeleteTime,
        /** Emoji status to be shown along with chat title; may be null */
        #[SerializedName('emoji_status')]
        private EmojiStatus|null $emojiStatus = null,
        /** Background set for the chat; may be null if none */
        #[SerializedName('background')]
        private ChatBackground|null $background = null,
        /** If non-empty, name of a theme, set for the chat */
        #[SerializedName('theme_name')]
        private string $themeName,
        /** Information about actions which must be possible to do through the chat action bar; may be null if none */
        #[SerializedName('action_bar')]
        private ChatActionBar|null $actionBar = null,
        /** Information about bar for managing a business bot in the chat; may be null if none */
        #[SerializedName('business_bot_manage_bar')]
        private BusinessBotManageBar|null $businessBotManageBar = null,
        /** Information about video chat of the chat */
        #[SerializedName('video_chat')]
        private VideoChat|null $videoChat = null,
        /** Information about pending join requests; may be null if none */
        #[SerializedName('pending_join_requests')]
        private ChatJoinRequestsInfo|null $pendingJoinRequests = null,
        /** Identifier of the message from which reply markup needs to be used; 0 if there is no default custom reply markup in the chat */
        #[SerializedName('reply_markup_message_id')]
        private int $replyMarkupMessageId,
        /** A draft of a message in the chat; may be null if none */
        #[SerializedName('draft_message')]
        private DraftMessage|null $draftMessage = null,
        /** Application-specific data associated with the chat. (For example, the chat scroll position or local chat notification settings can be stored here.) Persistent if the message database is used */
        #[SerializedName('client_data')]
        private string $clientData,
    ) {
    }

    /**
     * Get Chat unique identifier
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Chat unique identifier
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Type of the chat
     */
    public function getType(): ChatType|null
    {
        return $this->type;
    }

    /**
     * Set Type of the chat
     */
    public function setType(ChatType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get Chat title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Chat title
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get Chat photo; may be null
     */
    public function getPhoto(): ChatPhotoInfo|null
    {
        return $this->photo;
    }

    /**
     * Set Chat photo; may be null
     */
    public function setPhoto(ChatPhotoInfo|null $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get Identifier of the accent color for message sender name, and backgrounds of chat photo, reply header, and link preview
     */
    public function getAccentColorId(): int
    {
        return $this->accentColorId;
    }

    /**
     * Set Identifier of the accent color for message sender name, and backgrounds of chat photo, reply header, and link preview
     */
    public function setAccentColorId(int $accentColorId): self
    {
        $this->accentColorId = $accentColorId;

        return $this;
    }

    /**
     * Get Identifier of a custom emoji to be shown on the reply header and link preview background for messages sent by the chat; 0 if none
     */
    public function getBackgroundCustomEmojiId(): int
    {
        return $this->backgroundCustomEmojiId;
    }

    /**
     * Set Identifier of a custom emoji to be shown on the reply header and link preview background for messages sent by the chat; 0 if none
     */
    public function setBackgroundCustomEmojiId(int $backgroundCustomEmojiId): self
    {
        $this->backgroundCustomEmojiId = $backgroundCustomEmojiId;

        return $this;
    }

    /**
     * Get Identifier of the profile accent color for the chat's profile; -1 if none
     */
    public function getProfileAccentColorId(): int
    {
        return $this->profileAccentColorId;
    }

    /**
     * Set Identifier of the profile accent color for the chat's profile; -1 if none
     */
    public function setProfileAccentColorId(int $profileAccentColorId): self
    {
        $this->profileAccentColorId = $profileAccentColorId;

        return $this;
    }

    /**
     * Get Identifier of a custom emoji to be shown on the background of the chat's profile; 0 if none
     */
    public function getProfileBackgroundCustomEmojiId(): int
    {
        return $this->profileBackgroundCustomEmojiId;
    }

    /**
     * Set Identifier of a custom emoji to be shown on the background of the chat's profile; 0 if none
     */
    public function setProfileBackgroundCustomEmojiId(int $profileBackgroundCustomEmojiId): self
    {
        $this->profileBackgroundCustomEmojiId = $profileBackgroundCustomEmojiId;

        return $this;
    }

    /**
     * Get Actions that non-administrator chat members are allowed to take in the chat
     */
    public function getPermissions(): ChatPermissions|null
    {
        return $this->permissions;
    }

    /**
     * Set Actions that non-administrator chat members are allowed to take in the chat
     */
    public function setPermissions(ChatPermissions|null $permissions): self
    {
        $this->permissions = $permissions;

        return $this;
    }

    /**
     * Get Last message in the chat; may be null if none or unknown
     */
    public function getLastMessage(): Message|null
    {
        return $this->lastMessage;
    }

    /**
     * Set Last message in the chat; may be null if none or unknown
     */
    public function setLastMessage(Message|null $lastMessage): self
    {
        $this->lastMessage = $lastMessage;

        return $this;
    }

    /**
     * Get Positions of the chat in chat lists
     */
    public function getPositions(): array|null
    {
        return $this->positions;
    }

    /**
     * Set Positions of the chat in chat lists
     */
    public function setPositions(array|null $positions): self
    {
        $this->positions = $positions;

        return $this;
    }

    /**
     * Get Chat lists to which the chat belongs. A chat can have a non-zero position in a chat list even if it doesn't belong to the chat list and have no position in a chat list even if it belongs to the chat list
     */
    public function getChatLists(): array|null
    {
        return $this->chatLists;
    }

    /**
     * Set Chat lists to which the chat belongs. A chat can have a non-zero position in a chat list even if it doesn't belong to the chat list and have no position in a chat list even if it belongs to the chat list
     */
    public function setChatLists(array|null $chatLists): self
    {
        $this->chatLists = $chatLists;

        return $this;
    }

    /**
     * Get Identifier of a user or chat that is selected to send messages in the chat; may be null if the user can't change message sender
     */
    public function getMessageSenderId(): MessageSender|null
    {
        return $this->messageSenderId;
    }

    /**
     * Set Identifier of a user or chat that is selected to send messages in the chat; may be null if the user can't change message sender
     */
    public function setMessageSenderId(MessageSender|null $messageSenderId): self
    {
        $this->messageSenderId = $messageSenderId;

        return $this;
    }

    /**
     * Get Block list to which the chat is added; may be null if none
     */
    public function getBlockList(): BlockList|null
    {
        return $this->blockList;
    }

    /**
     * Set Block list to which the chat is added; may be null if none
     */
    public function setBlockList(BlockList|null $blockList): self
    {
        $this->blockList = $blockList;

        return $this;
    }

    /**
     * Get True, if chat content can't be saved locally, forwarded, or copied
     */
    public function getHasProtectedContent(): bool
    {
        return $this->hasProtectedContent;
    }

    /**
     * Set True, if chat content can't be saved locally, forwarded, or copied
     */
    public function setHasProtectedContent(bool $hasProtectedContent): self
    {
        $this->hasProtectedContent = $hasProtectedContent;

        return $this;
    }

    /**
     * Get True, if translation of all messages in the chat must be suggested to the user
     */
    public function getIsTranslatable(): bool
    {
        return $this->isTranslatable;
    }

    /**
     * Set True, if translation of all messages in the chat must be suggested to the user
     */
    public function setIsTranslatable(bool $isTranslatable): self
    {
        $this->isTranslatable = $isTranslatable;

        return $this;
    }

    /**
     * Get True, if the chat is marked as unread
     */
    public function getIsMarkedAsUnread(): bool
    {
        return $this->isMarkedAsUnread;
    }

    /**
     * Set True, if the chat is marked as unread
     */
    public function setIsMarkedAsUnread(bool $isMarkedAsUnread): self
    {
        $this->isMarkedAsUnread = $isMarkedAsUnread;

        return $this;
    }

    /**
     * Get True, if the chat is a forum supergroup that must be shown in the "View as topics" mode, or Saved Messages chat that must be shown in the "View as chats"
     */
    public function getViewAsTopics(): bool
    {
        return $this->viewAsTopics;
    }

    /**
     * Set True, if the chat is a forum supergroup that must be shown in the "View as topics" mode, or Saved Messages chat that must be shown in the "View as chats"
     */
    public function setViewAsTopics(bool $viewAsTopics): self
    {
        $this->viewAsTopics = $viewAsTopics;

        return $this;
    }

    /**
     * Get True, if the chat has scheduled messages
     */
    public function getHasScheduledMessages(): bool
    {
        return $this->hasScheduledMessages;
    }

    /**
     * Set True, if the chat has scheduled messages
     */
    public function setHasScheduledMessages(bool $hasScheduledMessages): self
    {
        $this->hasScheduledMessages = $hasScheduledMessages;

        return $this;
    }

    /**
     * Get True, if the chat messages can be deleted only for the current user while other users will continue to see the messages
     */
    public function getCanBeDeletedOnlyForSelf(): bool
    {
        return $this->canBeDeletedOnlyForSelf;
    }

    /**
     * Set True, if the chat messages can be deleted only for the current user while other users will continue to see the messages
     */
    public function setCanBeDeletedOnlyForSelf(bool $canBeDeletedOnlyForSelf): self
    {
        $this->canBeDeletedOnlyForSelf = $canBeDeletedOnlyForSelf;

        return $this;
    }

    /**
     * Get True, if the chat messages can be deleted for all users
     */
    public function getCanBeDeletedForAllUsers(): bool
    {
        return $this->canBeDeletedForAllUsers;
    }

    /**
     * Set True, if the chat messages can be deleted for all users
     */
    public function setCanBeDeletedForAllUsers(bool $canBeDeletedForAllUsers): self
    {
        $this->canBeDeletedForAllUsers = $canBeDeletedForAllUsers;

        return $this;
    }

    /**
     * Get True, if the chat can be reported to Telegram moderators through reportChat or reportChatPhoto
     */
    public function getCanBeReported(): bool
    {
        return $this->canBeReported;
    }

    /**
     * Set True, if the chat can be reported to Telegram moderators through reportChat or reportChatPhoto
     */
    public function setCanBeReported(bool $canBeReported): self
    {
        $this->canBeReported = $canBeReported;

        return $this;
    }

    /**
     * Get Default value of the disable_notification parameter, used when a message is sent to the chat
     */
    public function getDefaultDisableNotification(): bool
    {
        return $this->defaultDisableNotification;
    }

    /**
     * Set Default value of the disable_notification parameter, used when a message is sent to the chat
     */
    public function setDefaultDisableNotification(bool $defaultDisableNotification): self
    {
        $this->defaultDisableNotification = $defaultDisableNotification;

        return $this;
    }

    /**
     * Get Number of unread messages in the chat
     */
    public function getUnreadCount(): int
    {
        return $this->unreadCount;
    }

    /**
     * Set Number of unread messages in the chat
     */
    public function setUnreadCount(int $unreadCount): self
    {
        $this->unreadCount = $unreadCount;

        return $this;
    }

    /**
     * Get Identifier of the last read incoming message
     */
    public function getLastReadInboxMessageId(): int
    {
        return $this->lastReadInboxMessageId;
    }

    /**
     * Set Identifier of the last read incoming message
     */
    public function setLastReadInboxMessageId(int $lastReadInboxMessageId): self
    {
        $this->lastReadInboxMessageId = $lastReadInboxMessageId;

        return $this;
    }

    /**
     * Get Identifier of the last read outgoing message
     */
    public function getLastReadOutboxMessageId(): int
    {
        return $this->lastReadOutboxMessageId;
    }

    /**
     * Set Identifier of the last read outgoing message
     */
    public function setLastReadOutboxMessageId(int $lastReadOutboxMessageId): self
    {
        $this->lastReadOutboxMessageId = $lastReadOutboxMessageId;

        return $this;
    }

    /**
     * Get Number of unread messages with a mention/reply in the chat
     */
    public function getUnreadMentionCount(): int
    {
        return $this->unreadMentionCount;
    }

    /**
     * Set Number of unread messages with a mention/reply in the chat
     */
    public function setUnreadMentionCount(int $unreadMentionCount): self
    {
        $this->unreadMentionCount = $unreadMentionCount;

        return $this;
    }

    /**
     * Get Number of messages with unread reactions in the chat
     */
    public function getUnreadReactionCount(): int
    {
        return $this->unreadReactionCount;
    }

    /**
     * Set Number of messages with unread reactions in the chat
     */
    public function setUnreadReactionCount(int $unreadReactionCount): self
    {
        $this->unreadReactionCount = $unreadReactionCount;

        return $this;
    }

    /**
     * Get Notification settings for the chat
     */
    public function getNotificationSettings(): ChatNotificationSettings|null
    {
        return $this->notificationSettings;
    }

    /**
     * Set Notification settings for the chat
     */
    public function setNotificationSettings(ChatNotificationSettings|null $notificationSettings): self
    {
        $this->notificationSettings = $notificationSettings;

        return $this;
    }

    /**
     * Get Types of reaction, available in the chat
     */
    public function getAvailableReactions(): ChatAvailableReactions|null
    {
        return $this->availableReactions;
    }

    /**
     * Set Types of reaction, available in the chat
     */
    public function setAvailableReactions(ChatAvailableReactions|null $availableReactions): self
    {
        $this->availableReactions = $availableReactions;

        return $this;
    }

    /**
     * Get Current message auto-delete or self-destruct timer setting for the chat, in seconds; 0 if disabled. Self-destruct timer in secret chats starts after the message or its content is viewed. Auto-delete timer in other chats starts from the send date
     */
    public function getMessageAutoDeleteTime(): int
    {
        return $this->messageAutoDeleteTime;
    }

    /**
     * Set Current message auto-delete or self-destruct timer setting for the chat, in seconds; 0 if disabled. Self-destruct timer in secret chats starts after the message or its content is viewed. Auto-delete timer in other chats starts from the send date
     */
    public function setMessageAutoDeleteTime(int $messageAutoDeleteTime): self
    {
        $this->messageAutoDeleteTime = $messageAutoDeleteTime;

        return $this;
    }

    /**
     * Get Emoji status to be shown along with chat title; may be null
     */
    public function getEmojiStatus(): EmojiStatus|null
    {
        return $this->emojiStatus;
    }

    /**
     * Set Emoji status to be shown along with chat title; may be null
     */
    public function setEmojiStatus(EmojiStatus|null $emojiStatus): self
    {
        $this->emojiStatus = $emojiStatus;

        return $this;
    }

    /**
     * Get Background set for the chat; may be null if none
     */
    public function getBackground(): ChatBackground|null
    {
        return $this->background;
    }

    /**
     * Set Background set for the chat; may be null if none
     */
    public function setBackground(ChatBackground|null $background): self
    {
        $this->background = $background;

        return $this;
    }

    /**
     * Get If non-empty, name of a theme, set for the chat
     */
    public function getThemeName(): string
    {
        return $this->themeName;
    }

    /**
     * Set If non-empty, name of a theme, set for the chat
     */
    public function setThemeName(string $themeName): self
    {
        $this->themeName = $themeName;

        return $this;
    }

    /**
     * Get Information about actions which must be possible to do through the chat action bar; may be null if none
     */
    public function getActionBar(): ChatActionBar|null
    {
        return $this->actionBar;
    }

    /**
     * Set Information about actions which must be possible to do through the chat action bar; may be null if none
     */
    public function setActionBar(ChatActionBar|null $actionBar): self
    {
        $this->actionBar = $actionBar;

        return $this;
    }

    /**
     * Get Information about bar for managing a business bot in the chat; may be null if none
     */
    public function getBusinessBotManageBar(): BusinessBotManageBar|null
    {
        return $this->businessBotManageBar;
    }

    /**
     * Set Information about bar for managing a business bot in the chat; may be null if none
     */
    public function setBusinessBotManageBar(BusinessBotManageBar|null $businessBotManageBar): self
    {
        $this->businessBotManageBar = $businessBotManageBar;

        return $this;
    }

    /**
     * Get Information about video chat of the chat
     */
    public function getVideoChat(): VideoChat|null
    {
        return $this->videoChat;
    }

    /**
     * Set Information about video chat of the chat
     */
    public function setVideoChat(VideoChat|null $videoChat): self
    {
        $this->videoChat = $videoChat;

        return $this;
    }

    /**
     * Get Information about pending join requests; may be null if none
     */
    public function getPendingJoinRequests(): ChatJoinRequestsInfo|null
    {
        return $this->pendingJoinRequests;
    }

    /**
     * Set Information about pending join requests; may be null if none
     */
    public function setPendingJoinRequests(ChatJoinRequestsInfo|null $pendingJoinRequests): self
    {
        $this->pendingJoinRequests = $pendingJoinRequests;

        return $this;
    }

    /**
     * Get Identifier of the message from which reply markup needs to be used; 0 if there is no default custom reply markup in the chat
     */
    public function getReplyMarkupMessageId(): int
    {
        return $this->replyMarkupMessageId;
    }

    /**
     * Set Identifier of the message from which reply markup needs to be used; 0 if there is no default custom reply markup in the chat
     */
    public function setReplyMarkupMessageId(int $replyMarkupMessageId): self
    {
        $this->replyMarkupMessageId = $replyMarkupMessageId;

        return $this;
    }

    /**
     * Get A draft of a message in the chat; may be null if none
     */
    public function getDraftMessage(): DraftMessage|null
    {
        return $this->draftMessage;
    }

    /**
     * Set A draft of a message in the chat; may be null if none
     */
    public function setDraftMessage(DraftMessage|null $draftMessage): self
    {
        $this->draftMessage = $draftMessage;

        return $this;
    }

    /**
     * Get Application-specific data associated with the chat. (For example, the chat scroll position or local chat notification settings can be stored here.) Persistent if the message database is used
     */
    public function getClientData(): string
    {
        return $this->clientData;
    }

    /**
     * Set Application-specific data associated with the chat. (For example, the chat scroll position or local chat notification settings can be stored here.) Persistent if the message database is used
     */
    public function setClientData(string $clientData): self
    {
        $this->clientData = $clientData;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chat',
            'id' => $this->getId(),
            'type' => $this->getType(),
            'title' => $this->getTitle(),
            'photo' => $this->getPhoto(),
            'accent_color_id' => $this->getAccentColorId(),
            'background_custom_emoji_id' => $this->getBackgroundCustomEmojiId(),
            'profile_accent_color_id' => $this->getProfileAccentColorId(),
            'profile_background_custom_emoji_id' => $this->getProfileBackgroundCustomEmojiId(),
            'permissions' => $this->getPermissions(),
            'last_message' => $this->getLastMessage(),
            'positions' => $this->getPositions(),
            'chat_lists' => $this->getChatLists(),
            'message_sender_id' => $this->getMessageSenderId(),
            'block_list' => $this->getBlockList(),
            'has_protected_content' => $this->getHasProtectedContent(),
            'is_translatable' => $this->getIsTranslatable(),
            'is_marked_as_unread' => $this->getIsMarkedAsUnread(),
            'view_as_topics' => $this->getViewAsTopics(),
            'has_scheduled_messages' => $this->getHasScheduledMessages(),
            'can_be_deleted_only_for_self' => $this->getCanBeDeletedOnlyForSelf(),
            'can_be_deleted_for_all_users' => $this->getCanBeDeletedForAllUsers(),
            'can_be_reported' => $this->getCanBeReported(),
            'default_disable_notification' => $this->getDefaultDisableNotification(),
            'unread_count' => $this->getUnreadCount(),
            'last_read_inbox_message_id' => $this->getLastReadInboxMessageId(),
            'last_read_outbox_message_id' => $this->getLastReadOutboxMessageId(),
            'unread_mention_count' => $this->getUnreadMentionCount(),
            'unread_reaction_count' => $this->getUnreadReactionCount(),
            'notification_settings' => $this->getNotificationSettings(),
            'available_reactions' => $this->getAvailableReactions(),
            'message_auto_delete_time' => $this->getMessageAutoDeleteTime(),
            'emoji_status' => $this->getEmojiStatus(),
            'background' => $this->getBackground(),
            'theme_name' => $this->getThemeName(),
            'action_bar' => $this->getActionBar(),
            'business_bot_manage_bar' => $this->getBusinessBotManageBar(),
            'video_chat' => $this->getVideoChat(),
            'pending_join_requests' => $this->getPendingJoinRequests(),
            'reply_markup_message_id' => $this->getReplyMarkupMessageId(),
            'draft_message' => $this->getDraftMessage(),
            'client_data' => $this->getClientData(),
        ];
    }
}
