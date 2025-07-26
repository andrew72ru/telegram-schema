<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains full information about a supergroup or channel
 */
class SupergroupFullInfo implements \JsonSerializable
{
    public function __construct(
        /** Chat photo; may be null if empty or unknown. If non-null, then it is the same photo as in chat.photo */
        #[SerializedName('photo')]
        private ChatPhoto|null $photo = null,
        /** Contains full information about a supergroup or channel */
        #[SerializedName('description')]
        private string $description,
        /** Number of members in the supergroup or channel; 0 if unknown */
        #[SerializedName('member_count')]
        private int $memberCount,
        /** Number of privileged users in the supergroup or channel; 0 if unknown */
        #[SerializedName('administrator_count')]
        private int $administratorCount,
        /** Number of restricted users in the supergroup; 0 if unknown */
        #[SerializedName('restricted_count')]
        private int $restrictedCount,
        /** Number of users banned from chat; 0 if unknown */
        #[SerializedName('banned_count')]
        private int $bannedCount,
        /** Chat identifier of a discussion group for the channel, or a channel, for which the supergroup is the designated discussion group; 0 if none or unknown */
        #[SerializedName('linked_chat_id')]
        private int $linkedChatId,
        /** Chat identifier of a direct messages group for the channel, or a channel, for which the supergroup is the designated direct messages group; 0 if none */
        #[SerializedName('direct_messages_chat_id')]
        private int $directMessagesChatId,
        /** Delay between consecutive sent messages for non-administrator supergroup members, in seconds */
        #[SerializedName('slow_mode_delay')]
        private int $slowModeDelay,
        /** Time left before next message can be sent in the supergroup, in seconds. An updateSupergroupFullInfo update is not triggered when value of this field changes, but both new and old values are non-zero */
        #[SerializedName('slow_mode_delay_expires_in')]
        private float $slowModeDelayExpiresIn,
        /** True, if paid messages can be enabled in the supergroup chat; for supergroup only */
        #[SerializedName('can_enable_paid_messages')]
        private bool $canEnablePaidMessages,
        /** True, if paid reaction can be enabled in the channel chat; for channels only */
        #[SerializedName('can_enable_paid_reaction')]
        private bool $canEnablePaidReaction,
        /** True, if members of the chat can be retrieved via getSupergroupMembers or searchChatMembers */
        #[SerializedName('can_get_members')]
        private bool $canGetMembers,
        /** True, if non-administrators can receive only administrators and bots using getSupergroupMembers or searchChatMembers */
        #[SerializedName('has_hidden_members')]
        private bool $hasHiddenMembers,
        /** True, if non-administrators and non-bots can be hidden in responses to getSupergroupMembers and searchChatMembers for non-administrators */
        #[SerializedName('can_hide_members')]
        private bool $canHideMembers,
        /** True, if the supergroup sticker set can be changed */
        #[SerializedName('can_set_sticker_set')]
        private bool $canSetStickerSet,
        /** True, if the supergroup location can be changed */
        #[SerializedName('can_set_location')]
        private bool $canSetLocation,
        /** True, if the supergroup or channel statistics are available */
        #[SerializedName('can_get_statistics')]
        private bool $canGetStatistics,
        /** True, if the supergroup or channel revenue statistics are available */
        #[SerializedName('can_get_revenue_statistics')]
        private bool $canGetRevenueStatistics,
        /** True, if the supergroup or channel Telegram Star revenue statistics are available */
        #[SerializedName('can_get_star_revenue_statistics')]
        private bool $canGetStarRevenueStatistics,
        /** True, if the user can send a gift to the supergroup or channel using sendGift or transferGift */
        #[SerializedName('can_send_gift')]
        private bool $canSendGift,
        /** True, if aggressive anti-spam checks can be enabled or disabled in the supergroup */
        #[SerializedName('can_toggle_aggressive_anti_spam')]
        private bool $canToggleAggressiveAntiSpam,
        /** True, if new chat members will have access to old messages. In public, discussion, of forum groups and all channels, old messages are always available, */
        #[SerializedName('is_all_history_available')]
        private bool $isAllHistoryAvailable,
        /** True, if the chat can have sponsored messages. The value of this field is only available to the owner of the chat */
        #[SerializedName('can_have_sponsored_messages')]
        private bool $canHaveSponsoredMessages,
        /** True, if aggressive anti-spam checks are enabled in the supergroup. The value of this field is only available to chat administrators */
        #[SerializedName('has_aggressive_anti_spam_enabled')]
        private bool $hasAggressiveAntiSpamEnabled,
        /** True, if paid media can be sent and forwarded to the channel chat; for channels only */
        #[SerializedName('has_paid_media_allowed')]
        private bool $hasPaidMediaAllowed,
        /** True, if the supergroup or channel has pinned stories */
        #[SerializedName('has_pinned_stories')]
        private bool $hasPinnedStories,
        /** Number of saved to profile gifts for channels without can_post_messages administrator right, otherwise, the total number of received gifts */
        #[SerializedName('gift_count')]
        private int $giftCount,
        /** Number of times the current user boosted the supergroup or channel */
        #[SerializedName('my_boost_count')]
        private int $myBoostCount,
        /** Number of times the supergroup must be boosted by a user to ignore slow mode and chat permission restrictions; 0 if unspecified */
        #[SerializedName('unrestrict_boost_count')]
        private int $unrestrictBoostCount,
        /** Number of Telegram Stars that must be paid by the current user for each sent message to the supergroup */
        #[SerializedName('outgoing_paid_message_star_count')]
        private int $outgoingPaidMessageStarCount,
        /** Identifier of the supergroup sticker set that must be shown before user sticker sets; 0 if none */
        #[SerializedName('sticker_set_id')]
        private int $stickerSetId,
        /** Identifier of the custom emoji sticker set that can be used in the supergroup without Telegram Premium subscription; 0 if none */
        #[SerializedName('custom_emoji_sticker_set_id')]
        private int $customEmojiStickerSetId,
        /** Location to which the supergroup is connected; may be null if none */
        #[SerializedName('location')]
        private ChatLocation|null $location = null,
        /** Primary invite link for the chat; may be null. For chat administrators with can_invite_users right only */
        #[SerializedName('invite_link')]
        private ChatInviteLink|null $inviteLink = null,
        /** List of commands of bots in the group */
        #[SerializedName('bot_commands')]
        private array|null $botCommands = null,
        /** Information about verification status of the supergroup or the channel provided by a bot; may be null if none or unknown */
        #[SerializedName('bot_verification')]
        private BotVerification|null $botVerification = null,
        /** Identifier of the basic group from which supergroup was upgraded; 0 if none */
        #[SerializedName('upgraded_from_basic_group_id')]
        private int $upgradedFromBasicGroupId,
        /** Identifier of the last message in the basic group from which supergroup was upgraded; 0 if none */
        #[SerializedName('upgraded_from_max_message_id')]
        private int $upgradedFromMaxMessageId,
    ) {
    }

    /**
     * Get Chat photo; may be null if empty or unknown. If non-null, then it is the same photo as in chat.photo
     */
    public function getPhoto(): ChatPhoto|null
    {
        return $this->photo;
    }

    /**
     * Set Chat photo; may be null if empty or unknown. If non-null, then it is the same photo as in chat.photo
     */
    public function setPhoto(ChatPhoto|null $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get Contains full information about a supergroup or channel
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set Contains full information about a supergroup or channel
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get Number of members in the supergroup or channel; 0 if unknown
     */
    public function getMemberCount(): int
    {
        return $this->memberCount;
    }

    /**
     * Set Number of members in the supergroup or channel; 0 if unknown
     */
    public function setMemberCount(int $memberCount): self
    {
        $this->memberCount = $memberCount;

        return $this;
    }

    /**
     * Get Number of privileged users in the supergroup or channel; 0 if unknown
     */
    public function getAdministratorCount(): int
    {
        return $this->administratorCount;
    }

    /**
     * Set Number of privileged users in the supergroup or channel; 0 if unknown
     */
    public function setAdministratorCount(int $administratorCount): self
    {
        $this->administratorCount = $administratorCount;

        return $this;
    }

    /**
     * Get Number of restricted users in the supergroup; 0 if unknown
     */
    public function getRestrictedCount(): int
    {
        return $this->restrictedCount;
    }

    /**
     * Set Number of restricted users in the supergroup; 0 if unknown
     */
    public function setRestrictedCount(int $restrictedCount): self
    {
        $this->restrictedCount = $restrictedCount;

        return $this;
    }

    /**
     * Get Number of users banned from chat; 0 if unknown
     */
    public function getBannedCount(): int
    {
        return $this->bannedCount;
    }

    /**
     * Set Number of users banned from chat; 0 if unknown
     */
    public function setBannedCount(int $bannedCount): self
    {
        $this->bannedCount = $bannedCount;

        return $this;
    }

    /**
     * Get Chat identifier of a discussion group for the channel, or a channel, for which the supergroup is the designated discussion group; 0 if none or unknown
     */
    public function getLinkedChatId(): int
    {
        return $this->linkedChatId;
    }

    /**
     * Set Chat identifier of a discussion group for the channel, or a channel, for which the supergroup is the designated discussion group; 0 if none or unknown
     */
    public function setLinkedChatId(int $linkedChatId): self
    {
        $this->linkedChatId = $linkedChatId;

        return $this;
    }

    /**
     * Get Chat identifier of a direct messages group for the channel, or a channel, for which the supergroup is the designated direct messages group; 0 if none
     */
    public function getDirectMessagesChatId(): int
    {
        return $this->directMessagesChatId;
    }

    /**
     * Set Chat identifier of a direct messages group for the channel, or a channel, for which the supergroup is the designated direct messages group; 0 if none
     */
    public function setDirectMessagesChatId(int $directMessagesChatId): self
    {
        $this->directMessagesChatId = $directMessagesChatId;

        return $this;
    }

    /**
     * Get Delay between consecutive sent messages for non-administrator supergroup members, in seconds
     */
    public function getSlowModeDelay(): int
    {
        return $this->slowModeDelay;
    }

    /**
     * Set Delay between consecutive sent messages for non-administrator supergroup members, in seconds
     */
    public function setSlowModeDelay(int $slowModeDelay): self
    {
        $this->slowModeDelay = $slowModeDelay;

        return $this;
    }

    /**
     * Get Time left before next message can be sent in the supergroup, in seconds. An updateSupergroupFullInfo update is not triggered when value of this field changes, but both new and old values are non-zero
     */
    public function getSlowModeDelayExpiresIn(): float
    {
        return $this->slowModeDelayExpiresIn;
    }

    /**
     * Set Time left before next message can be sent in the supergroup, in seconds. An updateSupergroupFullInfo update is not triggered when value of this field changes, but both new and old values are non-zero
     */
    public function setSlowModeDelayExpiresIn(float $slowModeDelayExpiresIn): self
    {
        $this->slowModeDelayExpiresIn = $slowModeDelayExpiresIn;

        return $this;
    }

    /**
     * Get True, if paid messages can be enabled in the supergroup chat; for supergroup only
     */
    public function getCanEnablePaidMessages(): bool
    {
        return $this->canEnablePaidMessages;
    }

    /**
     * Set True, if paid messages can be enabled in the supergroup chat; for supergroup only
     */
    public function setCanEnablePaidMessages(bool $canEnablePaidMessages): self
    {
        $this->canEnablePaidMessages = $canEnablePaidMessages;

        return $this;
    }

    /**
     * Get True, if paid reaction can be enabled in the channel chat; for channels only
     */
    public function getCanEnablePaidReaction(): bool
    {
        return $this->canEnablePaidReaction;
    }

    /**
     * Set True, if paid reaction can be enabled in the channel chat; for channels only
     */
    public function setCanEnablePaidReaction(bool $canEnablePaidReaction): self
    {
        $this->canEnablePaidReaction = $canEnablePaidReaction;

        return $this;
    }

    /**
     * Get True, if members of the chat can be retrieved via getSupergroupMembers or searchChatMembers
     */
    public function getCanGetMembers(): bool
    {
        return $this->canGetMembers;
    }

    /**
     * Set True, if members of the chat can be retrieved via getSupergroupMembers or searchChatMembers
     */
    public function setCanGetMembers(bool $canGetMembers): self
    {
        $this->canGetMembers = $canGetMembers;

        return $this;
    }

    /**
     * Get True, if non-administrators can receive only administrators and bots using getSupergroupMembers or searchChatMembers
     */
    public function getHasHiddenMembers(): bool
    {
        return $this->hasHiddenMembers;
    }

    /**
     * Set True, if non-administrators can receive only administrators and bots using getSupergroupMembers or searchChatMembers
     */
    public function setHasHiddenMembers(bool $hasHiddenMembers): self
    {
        $this->hasHiddenMembers = $hasHiddenMembers;

        return $this;
    }

    /**
     * Get True, if non-administrators and non-bots can be hidden in responses to getSupergroupMembers and searchChatMembers for non-administrators
     */
    public function getCanHideMembers(): bool
    {
        return $this->canHideMembers;
    }

    /**
     * Set True, if non-administrators and non-bots can be hidden in responses to getSupergroupMembers and searchChatMembers for non-administrators
     */
    public function setCanHideMembers(bool $canHideMembers): self
    {
        $this->canHideMembers = $canHideMembers;

        return $this;
    }

    /**
     * Get True, if the supergroup sticker set can be changed
     */
    public function getCanSetStickerSet(): bool
    {
        return $this->canSetStickerSet;
    }

    /**
     * Set True, if the supergroup sticker set can be changed
     */
    public function setCanSetStickerSet(bool $canSetStickerSet): self
    {
        $this->canSetStickerSet = $canSetStickerSet;

        return $this;
    }

    /**
     * Get True, if the supergroup location can be changed
     */
    public function getCanSetLocation(): bool
    {
        return $this->canSetLocation;
    }

    /**
     * Set True, if the supergroup location can be changed
     */
    public function setCanSetLocation(bool $canSetLocation): self
    {
        $this->canSetLocation = $canSetLocation;

        return $this;
    }

    /**
     * Get True, if the supergroup or channel statistics are available
     */
    public function getCanGetStatistics(): bool
    {
        return $this->canGetStatistics;
    }

    /**
     * Set True, if the supergroup or channel statistics are available
     */
    public function setCanGetStatistics(bool $canGetStatistics): self
    {
        $this->canGetStatistics = $canGetStatistics;

        return $this;
    }

    /**
     * Get True, if the supergroup or channel revenue statistics are available
     */
    public function getCanGetRevenueStatistics(): bool
    {
        return $this->canGetRevenueStatistics;
    }

    /**
     * Set True, if the supergroup or channel revenue statistics are available
     */
    public function setCanGetRevenueStatistics(bool $canGetRevenueStatistics): self
    {
        $this->canGetRevenueStatistics = $canGetRevenueStatistics;

        return $this;
    }

    /**
     * Get True, if the supergroup or channel Telegram Star revenue statistics are available
     */
    public function getCanGetStarRevenueStatistics(): bool
    {
        return $this->canGetStarRevenueStatistics;
    }

    /**
     * Set True, if the supergroup or channel Telegram Star revenue statistics are available
     */
    public function setCanGetStarRevenueStatistics(bool $canGetStarRevenueStatistics): self
    {
        $this->canGetStarRevenueStatistics = $canGetStarRevenueStatistics;

        return $this;
    }

    /**
     * Get True, if the user can send a gift to the supergroup or channel using sendGift or transferGift
     */
    public function getCanSendGift(): bool
    {
        return $this->canSendGift;
    }

    /**
     * Set True, if the user can send a gift to the supergroup or channel using sendGift or transferGift
     */
    public function setCanSendGift(bool $canSendGift): self
    {
        $this->canSendGift = $canSendGift;

        return $this;
    }

    /**
     * Get True, if aggressive anti-spam checks can be enabled or disabled in the supergroup
     */
    public function getCanToggleAggressiveAntiSpam(): bool
    {
        return $this->canToggleAggressiveAntiSpam;
    }

    /**
     * Set True, if aggressive anti-spam checks can be enabled or disabled in the supergroup
     */
    public function setCanToggleAggressiveAntiSpam(bool $canToggleAggressiveAntiSpam): self
    {
        $this->canToggleAggressiveAntiSpam = $canToggleAggressiveAntiSpam;

        return $this;
    }

    /**
     * Get True, if new chat members will have access to old messages. In public, discussion, of forum groups and all channels, old messages are always available,
     */
    public function getIsAllHistoryAvailable(): bool
    {
        return $this->isAllHistoryAvailable;
    }

    /**
     * Set True, if new chat members will have access to old messages. In public, discussion, of forum groups and all channels, old messages are always available,
     */
    public function setIsAllHistoryAvailable(bool $isAllHistoryAvailable): self
    {
        $this->isAllHistoryAvailable = $isAllHistoryAvailable;

        return $this;
    }

    /**
     * Get True, if the chat can have sponsored messages. The value of this field is only available to the owner of the chat
     */
    public function getCanHaveSponsoredMessages(): bool
    {
        return $this->canHaveSponsoredMessages;
    }

    /**
     * Set True, if the chat can have sponsored messages. The value of this field is only available to the owner of the chat
     */
    public function setCanHaveSponsoredMessages(bool $canHaveSponsoredMessages): self
    {
        $this->canHaveSponsoredMessages = $canHaveSponsoredMessages;

        return $this;
    }

    /**
     * Get True, if aggressive anti-spam checks are enabled in the supergroup. The value of this field is only available to chat administrators
     */
    public function getHasAggressiveAntiSpamEnabled(): bool
    {
        return $this->hasAggressiveAntiSpamEnabled;
    }

    /**
     * Set True, if aggressive anti-spam checks are enabled in the supergroup. The value of this field is only available to chat administrators
     */
    public function setHasAggressiveAntiSpamEnabled(bool $hasAggressiveAntiSpamEnabled): self
    {
        $this->hasAggressiveAntiSpamEnabled = $hasAggressiveAntiSpamEnabled;

        return $this;
    }

    /**
     * Get True, if paid media can be sent and forwarded to the channel chat; for channels only
     */
    public function getHasPaidMediaAllowed(): bool
    {
        return $this->hasPaidMediaAllowed;
    }

    /**
     * Set True, if paid media can be sent and forwarded to the channel chat; for channels only
     */
    public function setHasPaidMediaAllowed(bool $hasPaidMediaAllowed): self
    {
        $this->hasPaidMediaAllowed = $hasPaidMediaAllowed;

        return $this;
    }

    /**
     * Get True, if the supergroup or channel has pinned stories
     */
    public function getHasPinnedStories(): bool
    {
        return $this->hasPinnedStories;
    }

    /**
     * Set True, if the supergroup or channel has pinned stories
     */
    public function setHasPinnedStories(bool $hasPinnedStories): self
    {
        $this->hasPinnedStories = $hasPinnedStories;

        return $this;
    }

    /**
     * Get Number of saved to profile gifts for channels without can_post_messages administrator right, otherwise, the total number of received gifts
     */
    public function getGiftCount(): int
    {
        return $this->giftCount;
    }

    /**
     * Set Number of saved to profile gifts for channels without can_post_messages administrator right, otherwise, the total number of received gifts
     */
    public function setGiftCount(int $giftCount): self
    {
        $this->giftCount = $giftCount;

        return $this;
    }

    /**
     * Get Number of times the current user boosted the supergroup or channel
     */
    public function getMyBoostCount(): int
    {
        return $this->myBoostCount;
    }

    /**
     * Set Number of times the current user boosted the supergroup or channel
     */
    public function setMyBoostCount(int $myBoostCount): self
    {
        $this->myBoostCount = $myBoostCount;

        return $this;
    }

    /**
     * Get Number of times the supergroup must be boosted by a user to ignore slow mode and chat permission restrictions; 0 if unspecified
     */
    public function getUnrestrictBoostCount(): int
    {
        return $this->unrestrictBoostCount;
    }

    /**
     * Set Number of times the supergroup must be boosted by a user to ignore slow mode and chat permission restrictions; 0 if unspecified
     */
    public function setUnrestrictBoostCount(int $unrestrictBoostCount): self
    {
        $this->unrestrictBoostCount = $unrestrictBoostCount;

        return $this;
    }

    /**
     * Get Number of Telegram Stars that must be paid by the current user for each sent message to the supergroup
     */
    public function getOutgoingPaidMessageStarCount(): int
    {
        return $this->outgoingPaidMessageStarCount;
    }

    /**
     * Set Number of Telegram Stars that must be paid by the current user for each sent message to the supergroup
     */
    public function setOutgoingPaidMessageStarCount(int $outgoingPaidMessageStarCount): self
    {
        $this->outgoingPaidMessageStarCount = $outgoingPaidMessageStarCount;

        return $this;
    }

    /**
     * Get Identifier of the supergroup sticker set that must be shown before user sticker sets; 0 if none
     */
    public function getStickerSetId(): int
    {
        return $this->stickerSetId;
    }

    /**
     * Set Identifier of the supergroup sticker set that must be shown before user sticker sets; 0 if none
     */
    public function setStickerSetId(int $stickerSetId): self
    {
        $this->stickerSetId = $stickerSetId;

        return $this;
    }

    /**
     * Get Identifier of the custom emoji sticker set that can be used in the supergroup without Telegram Premium subscription; 0 if none
     */
    public function getCustomEmojiStickerSetId(): int
    {
        return $this->customEmojiStickerSetId;
    }

    /**
     * Set Identifier of the custom emoji sticker set that can be used in the supergroup without Telegram Premium subscription; 0 if none
     */
    public function setCustomEmojiStickerSetId(int $customEmojiStickerSetId): self
    {
        $this->customEmojiStickerSetId = $customEmojiStickerSetId;

        return $this;
    }

    /**
     * Get Location to which the supergroup is connected; may be null if none
     */
    public function getLocation(): ChatLocation|null
    {
        return $this->location;
    }

    /**
     * Set Location to which the supergroup is connected; may be null if none
     */
    public function setLocation(ChatLocation|null $location): self
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get Primary invite link for the chat; may be null. For chat administrators with can_invite_users right only
     */
    public function getInviteLink(): ChatInviteLink|null
    {
        return $this->inviteLink;
    }

    /**
     * Set Primary invite link for the chat; may be null. For chat administrators with can_invite_users right only
     */
    public function setInviteLink(ChatInviteLink|null $inviteLink): self
    {
        $this->inviteLink = $inviteLink;

        return $this;
    }

    /**
     * Get List of commands of bots in the group
     */
    public function getBotCommands(): array|null
    {
        return $this->botCommands;
    }

    /**
     * Set List of commands of bots in the group
     */
    public function setBotCommands(array|null $botCommands): self
    {
        $this->botCommands = $botCommands;

        return $this;
    }

    /**
     * Get Information about verification status of the supergroup or the channel provided by a bot; may be null if none or unknown
     */
    public function getBotVerification(): BotVerification|null
    {
        return $this->botVerification;
    }

    /**
     * Set Information about verification status of the supergroup or the channel provided by a bot; may be null if none or unknown
     */
    public function setBotVerification(BotVerification|null $botVerification): self
    {
        $this->botVerification = $botVerification;

        return $this;
    }

    /**
     * Get Identifier of the basic group from which supergroup was upgraded; 0 if none
     */
    public function getUpgradedFromBasicGroupId(): int
    {
        return $this->upgradedFromBasicGroupId;
    }

    /**
     * Set Identifier of the basic group from which supergroup was upgraded; 0 if none
     */
    public function setUpgradedFromBasicGroupId(int $upgradedFromBasicGroupId): self
    {
        $this->upgradedFromBasicGroupId = $upgradedFromBasicGroupId;

        return $this;
    }

    /**
     * Get Identifier of the last message in the basic group from which supergroup was upgraded; 0 if none
     */
    public function getUpgradedFromMaxMessageId(): int
    {
        return $this->upgradedFromMaxMessageId;
    }

    /**
     * Set Identifier of the last message in the basic group from which supergroup was upgraded; 0 if none
     */
    public function setUpgradedFromMaxMessageId(int $upgradedFromMaxMessageId): self
    {
        $this->upgradedFromMaxMessageId = $upgradedFromMaxMessageId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'supergroupFullInfo',
            'photo' => $this->getPhoto(),
            'description' => $this->getDescription(),
            'member_count' => $this->getMemberCount(),
            'administrator_count' => $this->getAdministratorCount(),
            'restricted_count' => $this->getRestrictedCount(),
            'banned_count' => $this->getBannedCount(),
            'linked_chat_id' => $this->getLinkedChatId(),
            'direct_messages_chat_id' => $this->getDirectMessagesChatId(),
            'slow_mode_delay' => $this->getSlowModeDelay(),
            'slow_mode_delay_expires_in' => $this->getSlowModeDelayExpiresIn(),
            'can_enable_paid_messages' => $this->getCanEnablePaidMessages(),
            'can_enable_paid_reaction' => $this->getCanEnablePaidReaction(),
            'can_get_members' => $this->getCanGetMembers(),
            'has_hidden_members' => $this->getHasHiddenMembers(),
            'can_hide_members' => $this->getCanHideMembers(),
            'can_set_sticker_set' => $this->getCanSetStickerSet(),
            'can_set_location' => $this->getCanSetLocation(),
            'can_get_statistics' => $this->getCanGetStatistics(),
            'can_get_revenue_statistics' => $this->getCanGetRevenueStatistics(),
            'can_get_star_revenue_statistics' => $this->getCanGetStarRevenueStatistics(),
            'can_send_gift' => $this->getCanSendGift(),
            'can_toggle_aggressive_anti_spam' => $this->getCanToggleAggressiveAntiSpam(),
            'is_all_history_available' => $this->getIsAllHistoryAvailable(),
            'can_have_sponsored_messages' => $this->getCanHaveSponsoredMessages(),
            'has_aggressive_anti_spam_enabled' => $this->getHasAggressiveAntiSpamEnabled(),
            'has_paid_media_allowed' => $this->getHasPaidMediaAllowed(),
            'has_pinned_stories' => $this->getHasPinnedStories(),
            'gift_count' => $this->getGiftCount(),
            'my_boost_count' => $this->getMyBoostCount(),
            'unrestrict_boost_count' => $this->getUnrestrictBoostCount(),
            'outgoing_paid_message_star_count' => $this->getOutgoingPaidMessageStarCount(),
            'sticker_set_id' => $this->getStickerSetId(),
            'custom_emoji_sticker_set_id' => $this->getCustomEmojiStickerSetId(),
            'location' => $this->getLocation(),
            'invite_link' => $this->getInviteLink(),
            'bot_commands' => $this->getBotCommands(),
            'bot_verification' => $this->getBotVerification(),
            'upgraded_from_basic_group_id' => $this->getUpgradedFromBasicGroupId(),
            'upgraded_from_max_message_id' => $this->getUpgradedFromMaxMessageId(),
        ];
    }
}
