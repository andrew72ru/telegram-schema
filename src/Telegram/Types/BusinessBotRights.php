<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes rights of a business bot
 */
class BusinessBotRights implements \JsonSerializable
{
    public function __construct(
        /** True, if the bot can send and edit messages in the private chats that had incoming messages in the last 24 hours */
        #[SerializedName('can_reply')]
        private bool $canReply,
        /** True, if the bot can mark incoming private messages as read */
        #[SerializedName('can_read_messages')]
        private bool $canReadMessages,
        /** True, if the bot can delete sent messages */
        #[SerializedName('can_delete_sent_messages')]
        private bool $canDeleteSentMessages,
        /** True, if the bot can delete any message */
        #[SerializedName('can_delete_all_messages')]
        private bool $canDeleteAllMessages,
        /** True, if the bot can edit name of the business account */
        #[SerializedName('can_edit_name')]
        private bool $canEditName,
        /** True, if the bot can edit bio of the business account */
        #[SerializedName('can_edit_bio')]
        private bool $canEditBio,
        /** True, if the bot can edit profile photo of the business account */
        #[SerializedName('can_edit_profile_photo')]
        private bool $canEditProfilePhoto,
        /** True, if the bot can edit username of the business account */
        #[SerializedName('can_edit_username')]
        private bool $canEditUsername,
        /** True, if the bot can view gifts and amount of Telegram Stars owned by the business account */
        #[SerializedName('can_view_gifts_and_stars')]
        private bool $canViewGiftsAndStars,
        /** True, if the bot can sell regular gifts received by the business account */
        #[SerializedName('can_sell_gifts')]
        private bool $canSellGifts,
        /** True, if the bot can change gift receiving settings of the business account */
        #[SerializedName('can_change_gift_settings')]
        private bool $canChangeGiftSettings,
        /** True, if the bot can transfer and upgrade gifts received by the business account */
        #[SerializedName('can_transfer_and_upgrade_gifts')]
        private bool $canTransferAndUpgradeGifts,
        /** True, if the bot can transfer Telegram Stars received by the business account to account of the bot, or use them to upgrade and transfer gifts */
        #[SerializedName('can_transfer_stars')]
        private bool $canTransferStars,
        /** True, if the bot can post, edit and delete stories */
        #[SerializedName('can_manage_stories')]
        private bool $canManageStories,
    ) {
    }

    /**
     * Get True, if the bot can send and edit messages in the private chats that had incoming messages in the last 24 hours
     */
    public function getCanReply(): bool
    {
        return $this->canReply;
    }

    /**
     * Set True, if the bot can send and edit messages in the private chats that had incoming messages in the last 24 hours
     */
    public function setCanReply(bool $canReply): self
    {
        $this->canReply = $canReply;

        return $this;
    }

    /**
     * Get True, if the bot can mark incoming private messages as read
     */
    public function getCanReadMessages(): bool
    {
        return $this->canReadMessages;
    }

    /**
     * Set True, if the bot can mark incoming private messages as read
     */
    public function setCanReadMessages(bool $canReadMessages): self
    {
        $this->canReadMessages = $canReadMessages;

        return $this;
    }

    /**
     * Get True, if the bot can delete sent messages
     */
    public function getCanDeleteSentMessages(): bool
    {
        return $this->canDeleteSentMessages;
    }

    /**
     * Set True, if the bot can delete sent messages
     */
    public function setCanDeleteSentMessages(bool $canDeleteSentMessages): self
    {
        $this->canDeleteSentMessages = $canDeleteSentMessages;

        return $this;
    }

    /**
     * Get True, if the bot can delete any message
     */
    public function getCanDeleteAllMessages(): bool
    {
        return $this->canDeleteAllMessages;
    }

    /**
     * Set True, if the bot can delete any message
     */
    public function setCanDeleteAllMessages(bool $canDeleteAllMessages): self
    {
        $this->canDeleteAllMessages = $canDeleteAllMessages;

        return $this;
    }

    /**
     * Get True, if the bot can edit name of the business account
     */
    public function getCanEditName(): bool
    {
        return $this->canEditName;
    }

    /**
     * Set True, if the bot can edit name of the business account
     */
    public function setCanEditName(bool $canEditName): self
    {
        $this->canEditName = $canEditName;

        return $this;
    }

    /**
     * Get True, if the bot can edit bio of the business account
     */
    public function getCanEditBio(): bool
    {
        return $this->canEditBio;
    }

    /**
     * Set True, if the bot can edit bio of the business account
     */
    public function setCanEditBio(bool $canEditBio): self
    {
        $this->canEditBio = $canEditBio;

        return $this;
    }

    /**
     * Get True, if the bot can edit profile photo of the business account
     */
    public function getCanEditProfilePhoto(): bool
    {
        return $this->canEditProfilePhoto;
    }

    /**
     * Set True, if the bot can edit profile photo of the business account
     */
    public function setCanEditProfilePhoto(bool $canEditProfilePhoto): self
    {
        $this->canEditProfilePhoto = $canEditProfilePhoto;

        return $this;
    }

    /**
     * Get True, if the bot can edit username of the business account
     */
    public function getCanEditUsername(): bool
    {
        return $this->canEditUsername;
    }

    /**
     * Set True, if the bot can edit username of the business account
     */
    public function setCanEditUsername(bool $canEditUsername): self
    {
        $this->canEditUsername = $canEditUsername;

        return $this;
    }

    /**
     * Get True, if the bot can view gifts and amount of Telegram Stars owned by the business account
     */
    public function getCanViewGiftsAndStars(): bool
    {
        return $this->canViewGiftsAndStars;
    }

    /**
     * Set True, if the bot can view gifts and amount of Telegram Stars owned by the business account
     */
    public function setCanViewGiftsAndStars(bool $canViewGiftsAndStars): self
    {
        $this->canViewGiftsAndStars = $canViewGiftsAndStars;

        return $this;
    }

    /**
     * Get True, if the bot can sell regular gifts received by the business account
     */
    public function getCanSellGifts(): bool
    {
        return $this->canSellGifts;
    }

    /**
     * Set True, if the bot can sell regular gifts received by the business account
     */
    public function setCanSellGifts(bool $canSellGifts): self
    {
        $this->canSellGifts = $canSellGifts;

        return $this;
    }

    /**
     * Get True, if the bot can change gift receiving settings of the business account
     */
    public function getCanChangeGiftSettings(): bool
    {
        return $this->canChangeGiftSettings;
    }

    /**
     * Set True, if the bot can change gift receiving settings of the business account
     */
    public function setCanChangeGiftSettings(bool $canChangeGiftSettings): self
    {
        $this->canChangeGiftSettings = $canChangeGiftSettings;

        return $this;
    }

    /**
     * Get True, if the bot can transfer and upgrade gifts received by the business account
     */
    public function getCanTransferAndUpgradeGifts(): bool
    {
        return $this->canTransferAndUpgradeGifts;
    }

    /**
     * Set True, if the bot can transfer and upgrade gifts received by the business account
     */
    public function setCanTransferAndUpgradeGifts(bool $canTransferAndUpgradeGifts): self
    {
        $this->canTransferAndUpgradeGifts = $canTransferAndUpgradeGifts;

        return $this;
    }

    /**
     * Get True, if the bot can transfer Telegram Stars received by the business account to account of the bot, or use them to upgrade and transfer gifts
     */
    public function getCanTransferStars(): bool
    {
        return $this->canTransferStars;
    }

    /**
     * Set True, if the bot can transfer Telegram Stars received by the business account to account of the bot, or use them to upgrade and transfer gifts
     */
    public function setCanTransferStars(bool $canTransferStars): self
    {
        $this->canTransferStars = $canTransferStars;

        return $this;
    }

    /**
     * Get True, if the bot can post, edit and delete stories
     */
    public function getCanManageStories(): bool
    {
        return $this->canManageStories;
    }

    /**
     * Set True, if the bot can post, edit and delete stories
     */
    public function setCanManageStories(bool $canManageStories): self
    {
        $this->canManageStories = $canManageStories;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'businessBotRights',
            'can_reply' => $this->getCanReply(),
            'can_read_messages' => $this->getCanReadMessages(),
            'can_delete_sent_messages' => $this->getCanDeleteSentMessages(),
            'can_delete_all_messages' => $this->getCanDeleteAllMessages(),
            'can_edit_name' => $this->getCanEditName(),
            'can_edit_bio' => $this->getCanEditBio(),
            'can_edit_profile_photo' => $this->getCanEditProfilePhoto(),
            'can_edit_username' => $this->getCanEditUsername(),
            'can_view_gifts_and_stars' => $this->getCanViewGiftsAndStars(),
            'can_sell_gifts' => $this->getCanSellGifts(),
            'can_change_gift_settings' => $this->getCanChangeGiftSettings(),
            'can_transfer_and_upgrade_gifts' => $this->getCanTransferAndUpgradeGifts(),
            'can_transfer_stars' => $this->getCanTransferStars(),
            'can_manage_stories' => $this->getCanManageStories(),
        ];
    }
}
