<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a chat invite link
 */
class ChatInviteLinkInfo implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier of the invite link; 0 if the user has no access to the chat before joining */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** If non-zero, the amount of time for which read access to the chat will remain available, in seconds */
        #[SerializedName('accessible_for')]
        private int $accessibleFor,
        /** Type of the chat */
        #[SerializedName('type')]
        private InviteLinkChatType|null $type = null,
        /** Title of the chat */
        #[SerializedName('title')]
        private string $title,
        /** Chat photo; may be null */
        #[SerializedName('photo')]
        private ChatPhotoInfo|null $photo = null,
        /** Identifier of the accent color for chat title and background of chat photo */
        #[SerializedName('accent_color_id')]
        private int $accentColorId,
        /** Contains information about a chat invite link */
        #[SerializedName('description')]
        private string $description,
        /** Number of members in the chat */
        #[SerializedName('member_count')]
        private int $memberCount,
        /** User identifiers of some chat members that may be known to the current user */
        #[SerializedName('member_user_ids')]
        private array|null $memberUserIds = null,
        /** Information about subscription plan that must be paid by the user to use the link; may be null if the link doesn't require subscription */
        #[SerializedName('subscription_info')]
        private ChatInviteLinkSubscriptionInfo|null $subscriptionInfo = null,
        /** True, if the link only creates join request */
        #[SerializedName('creates_join_request')]
        private bool $createsJoinRequest,
        /** True, if the chat is a public supergroup or channel, i.e. it has a username or it is a location-based supergroup */
        #[SerializedName('is_public')]
        private bool $isPublic,
        /** Information about verification status of the chat; may be null if none */
        #[SerializedName('verification_status')]
        private VerificationStatus|null $verificationStatus = null,
    ) {
    }

    /**
     * Get Chat identifier of the invite link; 0 if the user has no access to the chat before joining
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier of the invite link; 0 if the user has no access to the chat before joining
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get If non-zero, the amount of time for which read access to the chat will remain available, in seconds
     */
    public function getAccessibleFor(): int
    {
        return $this->accessibleFor;
    }

    /**
     * Set If non-zero, the amount of time for which read access to the chat will remain available, in seconds
     */
    public function setAccessibleFor(int $accessibleFor): self
    {
        $this->accessibleFor = $accessibleFor;

        return $this;
    }

    /**
     * Get Type of the chat
     */
    public function getType(): InviteLinkChatType|null
    {
        return $this->type;
    }

    /**
     * Set Type of the chat
     */
    public function setType(InviteLinkChatType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get Title of the chat
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Title of the chat
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
     * Get Identifier of the accent color for chat title and background of chat photo
     */
    public function getAccentColorId(): int
    {
        return $this->accentColorId;
    }

    /**
     * Set Identifier of the accent color for chat title and background of chat photo
     */
    public function setAccentColorId(int $accentColorId): self
    {
        $this->accentColorId = $accentColorId;

        return $this;
    }

    /**
     * Get Contains information about a chat invite link
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set Contains information about a chat invite link
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get Number of members in the chat
     */
    public function getMemberCount(): int
    {
        return $this->memberCount;
    }

    /**
     * Set Number of members in the chat
     */
    public function setMemberCount(int $memberCount): self
    {
        $this->memberCount = $memberCount;

        return $this;
    }

    /**
     * Get User identifiers of some chat members that may be known to the current user
     */
    public function getMemberUserIds(): array|null
    {
        return $this->memberUserIds;
    }

    /**
     * Set User identifiers of some chat members that may be known to the current user
     */
    public function setMemberUserIds(array|null $memberUserIds): self
    {
        $this->memberUserIds = $memberUserIds;

        return $this;
    }

    /**
     * Get Information about subscription plan that must be paid by the user to use the link; may be null if the link doesn't require subscription
     */
    public function getSubscriptionInfo(): ChatInviteLinkSubscriptionInfo|null
    {
        return $this->subscriptionInfo;
    }

    /**
     * Set Information about subscription plan that must be paid by the user to use the link; may be null if the link doesn't require subscription
     */
    public function setSubscriptionInfo(ChatInviteLinkSubscriptionInfo|null $subscriptionInfo): self
    {
        $this->subscriptionInfo = $subscriptionInfo;

        return $this;
    }

    /**
     * Get True, if the link only creates join request
     */
    public function getCreatesJoinRequest(): bool
    {
        return $this->createsJoinRequest;
    }

    /**
     * Set True, if the link only creates join request
     */
    public function setCreatesJoinRequest(bool $createsJoinRequest): self
    {
        $this->createsJoinRequest = $createsJoinRequest;

        return $this;
    }

    /**
     * Get True, if the chat is a public supergroup or channel, i.e. it has a username or it is a location-based supergroup
     */
    public function getIsPublic(): bool
    {
        return $this->isPublic;
    }

    /**
     * Set True, if the chat is a public supergroup or channel, i.e. it has a username or it is a location-based supergroup
     */
    public function setIsPublic(bool $isPublic): self
    {
        $this->isPublic = $isPublic;

        return $this;
    }

    /**
     * Get Information about verification status of the chat; may be null if none
     */
    public function getVerificationStatus(): VerificationStatus|null
    {
        return $this->verificationStatus;
    }

    /**
     * Set Information about verification status of the chat; may be null if none
     */
    public function setVerificationStatus(VerificationStatus|null $verificationStatus): self
    {
        $this->verificationStatus = $verificationStatus;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatInviteLinkInfo',
            'chat_id' => $this->getChatId(),
            'accessible_for' => $this->getAccessibleFor(),
            'type' => $this->getType(),
            'title' => $this->getTitle(),
            'photo' => $this->getPhoto(),
            'accent_color_id' => $this->getAccentColorId(),
            'description' => $this->getDescription(),
            'member_count' => $this->getMemberCount(),
            'member_user_ids' => $this->getMemberUserIds(),
            'subscription_info' => $this->getSubscriptionInfo(),
            'creates_join_request' => $this->getCreatesJoinRequest(),
            'is_public' => $this->getIsPublic(),
            'verification_status' => $this->getVerificationStatus(),
        ];
    }
}
