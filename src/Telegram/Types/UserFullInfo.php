<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains full information about a user.
 */
class UserFullInfo implements \JsonSerializable
{
    public function __construct(
        /** User profile photo set by the current user for the contact; may be null. If null and user.profile_photo is null, then the photo is empty; otherwise, it is unknown. */
        #[SerializedName('personal_photo')]
        private ChatPhoto|null $personalPhoto = null,
        /** User profile photo; may be null. If null and user.profile_photo is null, then the photo is empty; otherwise, it is unknown. */
        #[SerializedName('photo')]
        private ChatPhoto|null $photo = null,
        /** User profile photo visible if the main photo is hidden by privacy settings; may be null. If null and user.profile_photo is null, then the photo is empty; otherwise, it is unknown. */
        #[SerializedName('public_photo')]
        private ChatPhoto|null $publicPhoto = null,
        /** Block list to which the user is added; may be null if none */
        #[SerializedName('block_list')]
        private BlockList|null $blockList = null,
        /** True, if the user can be called */
        #[SerializedName('can_be_called')]
        private bool $canBeCalled,
        /** True, if a video call can be created with the user */
        #[SerializedName('supports_video_calls')]
        private bool $supportsVideoCalls,
        /** True, if the user can't be called due to their privacy settings */
        #[SerializedName('has_private_calls')]
        private bool $hasPrivateCalls,
        /** True, if the user can't be linked in forwarded messages due to their privacy settings */
        #[SerializedName('has_private_forwards')]
        private bool $hasPrivateForwards,
        /** True, if voice and video notes can't be sent or forwarded to the user */
        #[SerializedName('has_restricted_voice_and_video_note_messages')]
        private bool $hasRestrictedVoiceAndVideoNoteMessages,
        /** True, if the user has posted to profile stories */
        #[SerializedName('has_posted_to_profile_stories')]
        private bool $hasPostedToProfileStories,
        /** True, if the user always enabled sponsored messages; known only for the current user */
        #[SerializedName('has_sponsored_messages_enabled')]
        private bool $hasSponsoredMessagesEnabled,
        /** True, if the current user needs to explicitly allow to share their phone number with the user when the method addContact is used */
        #[SerializedName('need_phone_number_privacy_exception')]
        private bool $needPhoneNumberPrivacyException,
        /** True, if the user set chat background for both chat users and it wasn't reverted yet */
        #[SerializedName('set_chat_background')]
        private bool $setChatBackground,
        /** A short user bio; may be null for bots */
        #[SerializedName('bio')]
        private FormattedText|null $bio = null,
        /** Birthdate of the user; may be null if unknown */
        #[SerializedName('birthdate')]
        private Birthdate|null $birthdate = null,
        /** Identifier of the personal chat of the user; 0 if none */
        #[SerializedName('personal_chat_id')]
        private int $personalChatId,
        /** Number of saved to profile gifts for other users or the total number of received gifts for the current user */
        #[SerializedName('gift_count')]
        private int $giftCount,
        /** Number of group chats where both the other user and the current user are a member; 0 for the current user */
        #[SerializedName('group_in_common_count')]
        private int $groupInCommonCount,
        /** Number of Telegram Stars that must be paid by the user for each sent message to the current user */
        #[SerializedName('incoming_paid_message_star_count')]
        private int $incomingPaidMessageStarCount,
        /** Number of Telegram Stars that must be paid by the current user for each sent message to the user */
        #[SerializedName('outgoing_paid_message_star_count')]
        private int $outgoingPaidMessageStarCount,
        /** Settings for gift receiving for the user */
        #[SerializedName('gift_settings')]
        private GiftSettings|null $giftSettings = null,
        /** Information about verification status of the user provided by a bot; may be null if none or unknown */
        #[SerializedName('bot_verification')]
        private BotVerification|null $botVerification = null,
        /** Information about business settings for Telegram Business accounts; may be null if none */
        #[SerializedName('business_info')]
        private BusinessInfo|null $businessInfo = null,
        /** For bots, information about the bot; may be null if the user isn't a bot */
        #[SerializedName('bot_info')]
        private BotInfo|null $botInfo = null,
    ) {
    }

    /**
     * Get User profile photo set by the current user for the contact; may be null. If null and user.profile_photo is null, then the photo is empty; otherwise, it is unknown..
     */
    public function getPersonalPhoto(): ChatPhoto|null
    {
        return $this->personalPhoto;
    }

    /**
     * Set User profile photo set by the current user for the contact; may be null. If null and user.profile_photo is null, then the photo is empty; otherwise, it is unknown..
     */
    public function setPersonalPhoto(ChatPhoto|null $personalPhoto): self
    {
        $this->personalPhoto = $personalPhoto;

        return $this;
    }

    /**
     * Get User profile photo; may be null. If null and user.profile_photo is null, then the photo is empty; otherwise, it is unknown..
     */
    public function getPhoto(): ChatPhoto|null
    {
        return $this->photo;
    }

    /**
     * Set User profile photo; may be null. If null and user.profile_photo is null, then the photo is empty; otherwise, it is unknown..
     */
    public function setPhoto(ChatPhoto|null $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get User profile photo visible if the main photo is hidden by privacy settings; may be null. If null and user.profile_photo is null, then the photo is empty; otherwise, it is unknown..
     */
    public function getPublicPhoto(): ChatPhoto|null
    {
        return $this->publicPhoto;
    }

    /**
     * Set User profile photo visible if the main photo is hidden by privacy settings; may be null. If null and user.profile_photo is null, then the photo is empty; otherwise, it is unknown..
     */
    public function setPublicPhoto(ChatPhoto|null $publicPhoto): self
    {
        $this->publicPhoto = $publicPhoto;

        return $this;
    }

    /**
     * Get Block list to which the user is added; may be null if none.
     */
    public function getBlockList(): BlockList|null
    {
        return $this->blockList;
    }

    /**
     * Set Block list to which the user is added; may be null if none.
     */
    public function setBlockList(BlockList|null $blockList): self
    {
        $this->blockList = $blockList;

        return $this;
    }

    /**
     * Get True, if the user can be called.
     */
    public function getCanBeCalled(): bool
    {
        return $this->canBeCalled;
    }

    /**
     * Set True, if the user can be called.
     */
    public function setCanBeCalled(bool $canBeCalled): self
    {
        $this->canBeCalled = $canBeCalled;

        return $this;
    }

    /**
     * Get True, if a video call can be created with the user.
     */
    public function getSupportsVideoCalls(): bool
    {
        return $this->supportsVideoCalls;
    }

    /**
     * Set True, if a video call can be created with the user.
     */
    public function setSupportsVideoCalls(bool $supportsVideoCalls): self
    {
        $this->supportsVideoCalls = $supportsVideoCalls;

        return $this;
    }

    /**
     * Get True, if the user can't be called due to their privacy settings.
     */
    public function getHasPrivateCalls(): bool
    {
        return $this->hasPrivateCalls;
    }

    /**
     * Set True, if the user can't be called due to their privacy settings.
     */
    public function setHasPrivateCalls(bool $hasPrivateCalls): self
    {
        $this->hasPrivateCalls = $hasPrivateCalls;

        return $this;
    }

    /**
     * Get True, if the user can't be linked in forwarded messages due to their privacy settings.
     */
    public function getHasPrivateForwards(): bool
    {
        return $this->hasPrivateForwards;
    }

    /**
     * Set True, if the user can't be linked in forwarded messages due to their privacy settings.
     */
    public function setHasPrivateForwards(bool $hasPrivateForwards): self
    {
        $this->hasPrivateForwards = $hasPrivateForwards;

        return $this;
    }

    /**
     * Get True, if voice and video notes can't be sent or forwarded to the user.
     */
    public function getHasRestrictedVoiceAndVideoNoteMessages(): bool
    {
        return $this->hasRestrictedVoiceAndVideoNoteMessages;
    }

    /**
     * Set True, if voice and video notes can't be sent or forwarded to the user.
     */
    public function setHasRestrictedVoiceAndVideoNoteMessages(bool $hasRestrictedVoiceAndVideoNoteMessages): self
    {
        $this->hasRestrictedVoiceAndVideoNoteMessages = $hasRestrictedVoiceAndVideoNoteMessages;

        return $this;
    }

    /**
     * Get True, if the user has posted to profile stories.
     */
    public function getHasPostedToProfileStories(): bool
    {
        return $this->hasPostedToProfileStories;
    }

    /**
     * Set True, if the user has posted to profile stories.
     */
    public function setHasPostedToProfileStories(bool $hasPostedToProfileStories): self
    {
        $this->hasPostedToProfileStories = $hasPostedToProfileStories;

        return $this;
    }

    /**
     * Get True, if the user always enabled sponsored messages; known only for the current user.
     */
    public function getHasSponsoredMessagesEnabled(): bool
    {
        return $this->hasSponsoredMessagesEnabled;
    }

    /**
     * Set True, if the user always enabled sponsored messages; known only for the current user.
     */
    public function setHasSponsoredMessagesEnabled(bool $hasSponsoredMessagesEnabled): self
    {
        $this->hasSponsoredMessagesEnabled = $hasSponsoredMessagesEnabled;

        return $this;
    }

    /**
     * Get True, if the current user needs to explicitly allow to share their phone number with the user when the method addContact is used.
     */
    public function getNeedPhoneNumberPrivacyException(): bool
    {
        return $this->needPhoneNumberPrivacyException;
    }

    /**
     * Set True, if the current user needs to explicitly allow to share their phone number with the user when the method addContact is used.
     */
    public function setNeedPhoneNumberPrivacyException(bool $needPhoneNumberPrivacyException): self
    {
        $this->needPhoneNumberPrivacyException = $needPhoneNumberPrivacyException;

        return $this;
    }

    /**
     * Get True, if the user set chat background for both chat users and it wasn't reverted yet.
     */
    public function getSetChatBackground(): bool
    {
        return $this->setChatBackground;
    }

    /**
     * Set True, if the user set chat background for both chat users and it wasn't reverted yet.
     */
    public function setSetChatBackground(bool $setChatBackground): self
    {
        $this->setChatBackground = $setChatBackground;

        return $this;
    }

    /**
     * Get A short user bio; may be null for bots.
     */
    public function getBio(): FormattedText|null
    {
        return $this->bio;
    }

    /**
     * Set A short user bio; may be null for bots.
     */
    public function setBio(FormattedText|null $bio): self
    {
        $this->bio = $bio;

        return $this;
    }

    /**
     * Get Birthdate of the user; may be null if unknown.
     */
    public function getBirthdate(): Birthdate|null
    {
        return $this->birthdate;
    }

    /**
     * Set Birthdate of the user; may be null if unknown.
     */
    public function setBirthdate(Birthdate|null $birthdate): self
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get Identifier of the personal chat of the user; 0 if none.
     */
    public function getPersonalChatId(): int
    {
        return $this->personalChatId;
    }

    /**
     * Set Identifier of the personal chat of the user; 0 if none.
     */
    public function setPersonalChatId(int $personalChatId): self
    {
        $this->personalChatId = $personalChatId;

        return $this;
    }

    /**
     * Get Number of saved to profile gifts for other users or the total number of received gifts for the current user.
     */
    public function getGiftCount(): int
    {
        return $this->giftCount;
    }

    /**
     * Set Number of saved to profile gifts for other users or the total number of received gifts for the current user.
     */
    public function setGiftCount(int $giftCount): self
    {
        $this->giftCount = $giftCount;

        return $this;
    }

    /**
     * Get Number of group chats where both the other user and the current user are a member; 0 for the current user.
     */
    public function getGroupInCommonCount(): int
    {
        return $this->groupInCommonCount;
    }

    /**
     * Set Number of group chats where both the other user and the current user are a member; 0 for the current user.
     */
    public function setGroupInCommonCount(int $groupInCommonCount): self
    {
        $this->groupInCommonCount = $groupInCommonCount;

        return $this;
    }

    /**
     * Get Number of Telegram Stars that must be paid by the user for each sent message to the current user.
     */
    public function getIncomingPaidMessageStarCount(): int
    {
        return $this->incomingPaidMessageStarCount;
    }

    /**
     * Set Number of Telegram Stars that must be paid by the user for each sent message to the current user.
     */
    public function setIncomingPaidMessageStarCount(int $incomingPaidMessageStarCount): self
    {
        $this->incomingPaidMessageStarCount = $incomingPaidMessageStarCount;

        return $this;
    }

    /**
     * Get Number of Telegram Stars that must be paid by the current user for each sent message to the user.
     */
    public function getOutgoingPaidMessageStarCount(): int
    {
        return $this->outgoingPaidMessageStarCount;
    }

    /**
     * Set Number of Telegram Stars that must be paid by the current user for each sent message to the user.
     */
    public function setOutgoingPaidMessageStarCount(int $outgoingPaidMessageStarCount): self
    {
        $this->outgoingPaidMessageStarCount = $outgoingPaidMessageStarCount;

        return $this;
    }

    /**
     * Get Settings for gift receiving for the user.
     */
    public function getGiftSettings(): GiftSettings|null
    {
        return $this->giftSettings;
    }

    /**
     * Set Settings for gift receiving for the user.
     */
    public function setGiftSettings(GiftSettings|null $giftSettings): self
    {
        $this->giftSettings = $giftSettings;

        return $this;
    }

    /**
     * Get Information about verification status of the user provided by a bot; may be null if none or unknown.
     */
    public function getBotVerification(): BotVerification|null
    {
        return $this->botVerification;
    }

    /**
     * Set Information about verification status of the user provided by a bot; may be null if none or unknown.
     */
    public function setBotVerification(BotVerification|null $botVerification): self
    {
        $this->botVerification = $botVerification;

        return $this;
    }

    /**
     * Get Information about business settings for Telegram Business accounts; may be null if none.
     */
    public function getBusinessInfo(): BusinessInfo|null
    {
        return $this->businessInfo;
    }

    /**
     * Set Information about business settings for Telegram Business accounts; may be null if none.
     */
    public function setBusinessInfo(BusinessInfo|null $businessInfo): self
    {
        $this->businessInfo = $businessInfo;

        return $this;
    }

    /**
     * Get For bots, information about the bot; may be null if the user isn't a bot.
     */
    public function getBotInfo(): BotInfo|null
    {
        return $this->botInfo;
    }

    /**
     * Set For bots, information about the bot; may be null if the user isn't a bot.
     */
    public function setBotInfo(BotInfo|null $botInfo): self
    {
        $this->botInfo = $botInfo;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'userFullInfo',
            'personal_photo' => $this->getPersonalPhoto(),
            'photo' => $this->getPhoto(),
            'public_photo' => $this->getPublicPhoto(),
            'block_list' => $this->getBlockList(),
            'can_be_called' => $this->getCanBeCalled(),
            'supports_video_calls' => $this->getSupportsVideoCalls(),
            'has_private_calls' => $this->getHasPrivateCalls(),
            'has_private_forwards' => $this->getHasPrivateForwards(),
            'has_restricted_voice_and_video_note_messages' => $this->getHasRestrictedVoiceAndVideoNoteMessages(),
            'has_posted_to_profile_stories' => $this->getHasPostedToProfileStories(),
            'has_sponsored_messages_enabled' => $this->getHasSponsoredMessagesEnabled(),
            'need_phone_number_privacy_exception' => $this->getNeedPhoneNumberPrivacyException(),
            'set_chat_background' => $this->getSetChatBackground(),
            'bio' => $this->getBio(),
            'birthdate' => $this->getBirthdate(),
            'personal_chat_id' => $this->getPersonalChatId(),
            'gift_count' => $this->getGiftCount(),
            'group_in_common_count' => $this->getGroupInCommonCount(),
            'incoming_paid_message_star_count' => $this->getIncomingPaidMessageStarCount(),
            'outgoing_paid_message_star_count' => $this->getOutgoingPaidMessageStarCount(),
            'gift_settings' => $this->getGiftSettings(),
            'bot_verification' => $this->getBotVerification(),
            'business_info' => $this->getBusinessInfo(),
            'bot_info' => $this->getBotInfo(),
        ];
    }
}
