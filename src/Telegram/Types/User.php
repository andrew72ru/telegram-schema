<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a user.
 */
class User implements \JsonSerializable
{
    public function __construct(
        /** User identifier */
        #[SerializedName('id')]
        private int $id,
        /** First name of the user */
        #[SerializedName('first_name')]
        private string $firstName,
        /** Last name of the user */
        #[SerializedName('last_name')]
        private string $lastName,
        /** Usernames of the user; may be null */
        #[SerializedName('usernames')]
        private Usernames|null $usernames = null,
        /** Phone number of the user */
        #[SerializedName('phone_number')]
        private string $phoneNumber,
        /** Current online status of the user */
        #[SerializedName('status')]
        private UserStatus|null $status = null,
        /** Profile photo of the user; may be null */
        #[SerializedName('profile_photo')]
        private ProfilePhoto|null $profilePhoto = null,
        /** Identifier of the accent color for name, and backgrounds of profile photo, reply header, and link preview */
        #[SerializedName('accent_color_id')]
        private int $accentColorId,
        /** Identifier of a custom emoji to be shown on the reply header and link preview background; 0 if none */
        #[SerializedName('background_custom_emoji_id')]
        private int $backgroundCustomEmojiId,
        /** Identifier of the accent color for the user's profile; -1 if none */
        #[SerializedName('profile_accent_color_id')]
        private int $profileAccentColorId,
        /** Identifier of a custom emoji to be shown on the background of the user's profile; 0 if none */
        #[SerializedName('profile_background_custom_emoji_id')]
        private int $profileBackgroundCustomEmojiId,
        /** Emoji status to be shown instead of the default Telegram Premium badge; may be null */
        #[SerializedName('emoji_status')]
        private EmojiStatus|null $emojiStatus = null,
        /** The user is a contact of the current user */
        #[SerializedName('is_contact')]
        private bool $isContact,
        /** The user is a contact of the current user and the current user is a contact of the user */
        #[SerializedName('is_mutual_contact')]
        private bool $isMutualContact,
        /** The user is a close friend of the current user; implies that the user is a contact */
        #[SerializedName('is_close_friend')]
        private bool $isCloseFriend,
        /** Information about verification status of the user; may be null if none */
        #[SerializedName('verification_status')]
        private VerificationStatus|null $verificationStatus = null,
        /** True, if the user is a Telegram Premium user */
        #[SerializedName('is_premium')]
        private bool $isPremium,
        /** True, if the user is Telegram support account */
        #[SerializedName('is_support')]
        private bool $isSupport,
        /** If non-empty, it contains a human-readable description of the reason why access to this user must be restricted */
        #[SerializedName('restriction_reason')]
        private string $restrictionReason,
        /** True, if the user has non-expired stories available to the current user */
        #[SerializedName('has_active_stories')]
        private bool $hasActiveStories,
        /** True, if the user has unread non-expired stories available to the current user */
        #[SerializedName('has_unread_active_stories')]
        private bool $hasUnreadActiveStories,
        /** True, if the user may restrict new chats with non-contacts. Use canSendMessageToUser to check whether the current user can message the user or try to create a chat with them */
        #[SerializedName('restricts_new_chats')]
        private bool $restrictsNewChats,
        /** Number of Telegram Stars that must be paid by general user for each sent message to the user. If positive and userFullInfo is unknown, use canSendMessageToUser to check whether the current user must pay */
        #[SerializedName('paid_message_star_count')]
        private int $paidMessageStarCount,
        /** If false, the user is inaccessible, and the only information known about the user is inside this class. Identifier of the user can't be passed to any method */
        #[SerializedName('have_access')]
        private bool $haveAccess,
        /** Type of the user */
        #[SerializedName('type')]
        private UserType|null $type = null,
        /** IETF language tag of the user's language; only available to bots */
        #[SerializedName('language_code')]
        private string $languageCode,
        /** True, if the user added the current bot to attachment menu; only available to bots */
        #[SerializedName('added_to_attachment_menu')]
        private bool $addedToAttachmentMenu,
    ) {
    }

    /**
     * Get User identifier.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set User identifier.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get First name of the user.
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * Set First name of the user.
     */
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get Last name of the user.
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * Set Last name of the user.
     */
    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get Usernames of the user; may be null.
     */
    public function getUsernames(): Usernames|null
    {
        return $this->usernames;
    }

    /**
     * Set Usernames of the user; may be null.
     */
    public function setUsernames(Usernames|null $usernames): self
    {
        $this->usernames = $usernames;

        return $this;
    }

    /**
     * Get Phone number of the user.
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * Set Phone number of the user.
     */
    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get Current online status of the user.
     */
    public function getStatus(): UserStatus|null
    {
        return $this->status;
    }

    /**
     * Set Current online status of the user.
     */
    public function setStatus(UserStatus|null $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get Profile photo of the user; may be null.
     */
    public function getProfilePhoto(): ProfilePhoto|null
    {
        return $this->profilePhoto;
    }

    /**
     * Set Profile photo of the user; may be null.
     */
    public function setProfilePhoto(ProfilePhoto|null $profilePhoto): self
    {
        $this->profilePhoto = $profilePhoto;

        return $this;
    }

    /**
     * Get Identifier of the accent color for name, and backgrounds of profile photo, reply header, and link preview.
     */
    public function getAccentColorId(): int
    {
        return $this->accentColorId;
    }

    /**
     * Set Identifier of the accent color for name, and backgrounds of profile photo, reply header, and link preview.
     */
    public function setAccentColorId(int $accentColorId): self
    {
        $this->accentColorId = $accentColorId;

        return $this;
    }

    /**
     * Get Identifier of a custom emoji to be shown on the reply header and link preview background; 0 if none.
     */
    public function getBackgroundCustomEmojiId(): int
    {
        return $this->backgroundCustomEmojiId;
    }

    /**
     * Set Identifier of a custom emoji to be shown on the reply header and link preview background; 0 if none.
     */
    public function setBackgroundCustomEmojiId(int $backgroundCustomEmojiId): self
    {
        $this->backgroundCustomEmojiId = $backgroundCustomEmojiId;

        return $this;
    }

    /**
     * Get Identifier of the accent color for the user's profile; -1 if none.
     */
    public function getProfileAccentColorId(): int
    {
        return $this->profileAccentColorId;
    }

    /**
     * Set Identifier of the accent color for the user's profile; -1 if none.
     */
    public function setProfileAccentColorId(int $profileAccentColorId): self
    {
        $this->profileAccentColorId = $profileAccentColorId;

        return $this;
    }

    /**
     * Get Identifier of a custom emoji to be shown on the background of the user's profile; 0 if none.
     */
    public function getProfileBackgroundCustomEmojiId(): int
    {
        return $this->profileBackgroundCustomEmojiId;
    }

    /**
     * Set Identifier of a custom emoji to be shown on the background of the user's profile; 0 if none.
     */
    public function setProfileBackgroundCustomEmojiId(int $profileBackgroundCustomEmojiId): self
    {
        $this->profileBackgroundCustomEmojiId = $profileBackgroundCustomEmojiId;

        return $this;
    }

    /**
     * Get Emoji status to be shown instead of the default Telegram Premium badge; may be null.
     */
    public function getEmojiStatus(): EmojiStatus|null
    {
        return $this->emojiStatus;
    }

    /**
     * Set Emoji status to be shown instead of the default Telegram Premium badge; may be null.
     */
    public function setEmojiStatus(EmojiStatus|null $emojiStatus): self
    {
        $this->emojiStatus = $emojiStatus;

        return $this;
    }

    /**
     * Get The user is a contact of the current user.
     */
    public function getIsContact(): bool
    {
        return $this->isContact;
    }

    /**
     * Set The user is a contact of the current user.
     */
    public function setIsContact(bool $isContact): self
    {
        $this->isContact = $isContact;

        return $this;
    }

    /**
     * Get The user is a contact of the current user and the current user is a contact of the user.
     */
    public function getIsMutualContact(): bool
    {
        return $this->isMutualContact;
    }

    /**
     * Set The user is a contact of the current user and the current user is a contact of the user.
     */
    public function setIsMutualContact(bool $isMutualContact): self
    {
        $this->isMutualContact = $isMutualContact;

        return $this;
    }

    /**
     * Get The user is a close friend of the current user; implies that the user is a contact.
     */
    public function getIsCloseFriend(): bool
    {
        return $this->isCloseFriend;
    }

    /**
     * Set The user is a close friend of the current user; implies that the user is a contact.
     */
    public function setIsCloseFriend(bool $isCloseFriend): self
    {
        $this->isCloseFriend = $isCloseFriend;

        return $this;
    }

    /**
     * Get Information about verification status of the user; may be null if none.
     */
    public function getVerificationStatus(): VerificationStatus|null
    {
        return $this->verificationStatus;
    }

    /**
     * Set Information about verification status of the user; may be null if none.
     */
    public function setVerificationStatus(VerificationStatus|null $verificationStatus): self
    {
        $this->verificationStatus = $verificationStatus;

        return $this;
    }

    /**
     * Get True, if the user is a Telegram Premium user.
     */
    public function getIsPremium(): bool
    {
        return $this->isPremium;
    }

    /**
     * Set True, if the user is a Telegram Premium user.
     */
    public function setIsPremium(bool $isPremium): self
    {
        $this->isPremium = $isPremium;

        return $this;
    }

    /**
     * Get True, if the user is Telegram support account.
     */
    public function getIsSupport(): bool
    {
        return $this->isSupport;
    }

    /**
     * Set True, if the user is Telegram support account.
     */
    public function setIsSupport(bool $isSupport): self
    {
        $this->isSupport = $isSupport;

        return $this;
    }

    /**
     * Get If non-empty, it contains a human-readable description of the reason why access to this user must be restricted.
     */
    public function getRestrictionReason(): string
    {
        return $this->restrictionReason;
    }

    /**
     * Set If non-empty, it contains a human-readable description of the reason why access to this user must be restricted.
     */
    public function setRestrictionReason(string $restrictionReason): self
    {
        $this->restrictionReason = $restrictionReason;

        return $this;
    }

    /**
     * Get True, if the user has non-expired stories available to the current user.
     */
    public function getHasActiveStories(): bool
    {
        return $this->hasActiveStories;
    }

    /**
     * Set True, if the user has non-expired stories available to the current user.
     */
    public function setHasActiveStories(bool $hasActiveStories): self
    {
        $this->hasActiveStories = $hasActiveStories;

        return $this;
    }

    /**
     * Get True, if the user has unread non-expired stories available to the current user.
     */
    public function getHasUnreadActiveStories(): bool
    {
        return $this->hasUnreadActiveStories;
    }

    /**
     * Set True, if the user has unread non-expired stories available to the current user.
     */
    public function setHasUnreadActiveStories(bool $hasUnreadActiveStories): self
    {
        $this->hasUnreadActiveStories = $hasUnreadActiveStories;

        return $this;
    }

    /**
     * Get True, if the user may restrict new chats with non-contacts. Use canSendMessageToUser to check whether the current user can message the user or try to create a chat with them.
     */
    public function getRestrictsNewChats(): bool
    {
        return $this->restrictsNewChats;
    }

    /**
     * Set True, if the user may restrict new chats with non-contacts. Use canSendMessageToUser to check whether the current user can message the user or try to create a chat with them.
     */
    public function setRestrictsNewChats(bool $restrictsNewChats): self
    {
        $this->restrictsNewChats = $restrictsNewChats;

        return $this;
    }

    /**
     * Get Number of Telegram Stars that must be paid by general user for each sent message to the user. If positive and userFullInfo is unknown, use canSendMessageToUser to check whether the current user must pay.
     */
    public function getPaidMessageStarCount(): int
    {
        return $this->paidMessageStarCount;
    }

    /**
     * Set Number of Telegram Stars that must be paid by general user for each sent message to the user. If positive and userFullInfo is unknown, use canSendMessageToUser to check whether the current user must pay.
     */
    public function setPaidMessageStarCount(int $paidMessageStarCount): self
    {
        $this->paidMessageStarCount = $paidMessageStarCount;

        return $this;
    }

    /**
     * Get If false, the user is inaccessible, and the only information known about the user is inside this class. Identifier of the user can't be passed to any method.
     */
    public function getHaveAccess(): bool
    {
        return $this->haveAccess;
    }

    /**
     * Set If false, the user is inaccessible, and the only information known about the user is inside this class. Identifier of the user can't be passed to any method.
     */
    public function setHaveAccess(bool $haveAccess): self
    {
        $this->haveAccess = $haveAccess;

        return $this;
    }

    /**
     * Get Type of the user.
     */
    public function getType(): UserType|null
    {
        return $this->type;
    }

    /**
     * Set Type of the user.
     */
    public function setType(UserType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get IETF language tag of the user's language; only available to bots.
     */
    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }

    /**
     * Set IETF language tag of the user's language; only available to bots.
     */
    public function setLanguageCode(string $languageCode): self
    {
        $this->languageCode = $languageCode;

        return $this;
    }

    /**
     * Get True, if the user added the current bot to attachment menu; only available to bots.
     */
    public function getAddedToAttachmentMenu(): bool
    {
        return $this->addedToAttachmentMenu;
    }

    /**
     * Set True, if the user added the current bot to attachment menu; only available to bots.
     */
    public function setAddedToAttachmentMenu(bool $addedToAttachmentMenu): self
    {
        $this->addedToAttachmentMenu = $addedToAttachmentMenu;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'user',
            'id' => $this->getId(),
            'first_name' => $this->getFirstName(),
            'last_name' => $this->getLastName(),
            'usernames' => $this->getUsernames(),
            'phone_number' => $this->getPhoneNumber(),
            'status' => $this->getStatus(),
            'profile_photo' => $this->getProfilePhoto(),
            'accent_color_id' => $this->getAccentColorId(),
            'background_custom_emoji_id' => $this->getBackgroundCustomEmojiId(),
            'profile_accent_color_id' => $this->getProfileAccentColorId(),
            'profile_background_custom_emoji_id' => $this->getProfileBackgroundCustomEmojiId(),
            'emoji_status' => $this->getEmojiStatus(),
            'is_contact' => $this->getIsContact(),
            'is_mutual_contact' => $this->getIsMutualContact(),
            'is_close_friend' => $this->getIsCloseFriend(),
            'verification_status' => $this->getVerificationStatus(),
            'is_premium' => $this->getIsPremium(),
            'is_support' => $this->getIsSupport(),
            'restriction_reason' => $this->getRestrictionReason(),
            'has_active_stories' => $this->getHasActiveStories(),
            'has_unread_active_stories' => $this->getHasUnreadActiveStories(),
            'restricts_new_chats' => $this->getRestrictsNewChats(),
            'paid_message_star_count' => $this->getPaidMessageStarCount(),
            'have_access' => $this->getHaveAccess(),
            'type' => $this->getType(),
            'language_code' => $this->getLanguageCode(),
            'added_to_attachment_menu' => $this->getAddedToAttachmentMenu(),
        ];
    }
}
