<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes actions that a user is allowed to take in a chat
 */
class ChatPermissions implements \JsonSerializable
{
    public function __construct(
        /** True, if the user can send text messages, contacts, giveaways, giveaway winners, invoices, locations, and venues */
        #[SerializedName('can_send_basic_messages')]
        private bool $canSendBasicMessages,
        /** True, if the user can send music files */
        #[SerializedName('can_send_audios')]
        private bool $canSendAudios,
        /** True, if the user can send documents */
        #[SerializedName('can_send_documents')]
        private bool $canSendDocuments,
        /** True, if the user can send photos */
        #[SerializedName('can_send_photos')]
        private bool $canSendPhotos,
        /** True, if the user can send videos */
        #[SerializedName('can_send_videos')]
        private bool $canSendVideos,
        /** True, if the user can send video notes */
        #[SerializedName('can_send_video_notes')]
        private bool $canSendVideoNotes,
        /** True, if the user can send voice notes */
        #[SerializedName('can_send_voice_notes')]
        private bool $canSendVoiceNotes,
        /** True, if the user can send polls and checklists */
        #[SerializedName('can_send_polls')]
        private bool $canSendPolls,
        /** True, if the user can send animations, games, stickers, and dice and use inline bots */
        #[SerializedName('can_send_other_messages')]
        private bool $canSendOtherMessages,
        /** True, if the user may add a link preview to their messages */
        #[SerializedName('can_add_link_previews')]
        private bool $canAddLinkPreviews,
        /** True, if the user can change the chat title, photo, and other settings */
        #[SerializedName('can_change_info')]
        private bool $canChangeInfo,
        /** True, if the user can invite new users to the chat */
        #[SerializedName('can_invite_users')]
        private bool $canInviteUsers,
        /** True, if the user can pin messages */
        #[SerializedName('can_pin_messages')]
        private bool $canPinMessages,
        /** True, if the user can create topics */
        #[SerializedName('can_create_topics')]
        private bool $canCreateTopics,
    ) {
    }

    /**
     * Get True, if the user can send text messages, contacts, giveaways, giveaway winners, invoices, locations, and venues
     */
    public function getCanSendBasicMessages(): bool
    {
        return $this->canSendBasicMessages;
    }

    /**
     * Set True, if the user can send text messages, contacts, giveaways, giveaway winners, invoices, locations, and venues
     */
    public function setCanSendBasicMessages(bool $canSendBasicMessages): self
    {
        $this->canSendBasicMessages = $canSendBasicMessages;

        return $this;
    }

    /**
     * Get True, if the user can send music files
     */
    public function getCanSendAudios(): bool
    {
        return $this->canSendAudios;
    }

    /**
     * Set True, if the user can send music files
     */
    public function setCanSendAudios(bool $canSendAudios): self
    {
        $this->canSendAudios = $canSendAudios;

        return $this;
    }

    /**
     * Get True, if the user can send documents
     */
    public function getCanSendDocuments(): bool
    {
        return $this->canSendDocuments;
    }

    /**
     * Set True, if the user can send documents
     */
    public function setCanSendDocuments(bool $canSendDocuments): self
    {
        $this->canSendDocuments = $canSendDocuments;

        return $this;
    }

    /**
     * Get True, if the user can send photos
     */
    public function getCanSendPhotos(): bool
    {
        return $this->canSendPhotos;
    }

    /**
     * Set True, if the user can send photos
     */
    public function setCanSendPhotos(bool $canSendPhotos): self
    {
        $this->canSendPhotos = $canSendPhotos;

        return $this;
    }

    /**
     * Get True, if the user can send videos
     */
    public function getCanSendVideos(): bool
    {
        return $this->canSendVideos;
    }

    /**
     * Set True, if the user can send videos
     */
    public function setCanSendVideos(bool $canSendVideos): self
    {
        $this->canSendVideos = $canSendVideos;

        return $this;
    }

    /**
     * Get True, if the user can send video notes
     */
    public function getCanSendVideoNotes(): bool
    {
        return $this->canSendVideoNotes;
    }

    /**
     * Set True, if the user can send video notes
     */
    public function setCanSendVideoNotes(bool $canSendVideoNotes): self
    {
        $this->canSendVideoNotes = $canSendVideoNotes;

        return $this;
    }

    /**
     * Get True, if the user can send voice notes
     */
    public function getCanSendVoiceNotes(): bool
    {
        return $this->canSendVoiceNotes;
    }

    /**
     * Set True, if the user can send voice notes
     */
    public function setCanSendVoiceNotes(bool $canSendVoiceNotes): self
    {
        $this->canSendVoiceNotes = $canSendVoiceNotes;

        return $this;
    }

    /**
     * Get True, if the user can send polls and checklists
     */
    public function getCanSendPolls(): bool
    {
        return $this->canSendPolls;
    }

    /**
     * Set True, if the user can send polls and checklists
     */
    public function setCanSendPolls(bool $canSendPolls): self
    {
        $this->canSendPolls = $canSendPolls;

        return $this;
    }

    /**
     * Get True, if the user can send animations, games, stickers, and dice and use inline bots
     */
    public function getCanSendOtherMessages(): bool
    {
        return $this->canSendOtherMessages;
    }

    /**
     * Set True, if the user can send animations, games, stickers, and dice and use inline bots
     */
    public function setCanSendOtherMessages(bool $canSendOtherMessages): self
    {
        $this->canSendOtherMessages = $canSendOtherMessages;

        return $this;
    }

    /**
     * Get True, if the user may add a link preview to their messages
     */
    public function getCanAddLinkPreviews(): bool
    {
        return $this->canAddLinkPreviews;
    }

    /**
     * Set True, if the user may add a link preview to their messages
     */
    public function setCanAddLinkPreviews(bool $canAddLinkPreviews): self
    {
        $this->canAddLinkPreviews = $canAddLinkPreviews;

        return $this;
    }

    /**
     * Get True, if the user can change the chat title, photo, and other settings
     */
    public function getCanChangeInfo(): bool
    {
        return $this->canChangeInfo;
    }

    /**
     * Set True, if the user can change the chat title, photo, and other settings
     */
    public function setCanChangeInfo(bool $canChangeInfo): self
    {
        $this->canChangeInfo = $canChangeInfo;

        return $this;
    }

    /**
     * Get True, if the user can invite new users to the chat
     */
    public function getCanInviteUsers(): bool
    {
        return $this->canInviteUsers;
    }

    /**
     * Set True, if the user can invite new users to the chat
     */
    public function setCanInviteUsers(bool $canInviteUsers): self
    {
        $this->canInviteUsers = $canInviteUsers;

        return $this;
    }

    /**
     * Get True, if the user can pin messages
     */
    public function getCanPinMessages(): bool
    {
        return $this->canPinMessages;
    }

    /**
     * Set True, if the user can pin messages
     */
    public function setCanPinMessages(bool $canPinMessages): self
    {
        $this->canPinMessages = $canPinMessages;

        return $this;
    }

    /**
     * Get True, if the user can create topics
     */
    public function getCanCreateTopics(): bool
    {
        return $this->canCreateTopics;
    }

    /**
     * Set True, if the user can create topics
     */
    public function setCanCreateTopics(bool $canCreateTopics): self
    {
        $this->canCreateTopics = $canCreateTopics;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatPermissions',
            'can_send_basic_messages' => $this->getCanSendBasicMessages(),
            'can_send_audios' => $this->getCanSendAudios(),
            'can_send_documents' => $this->getCanSendDocuments(),
            'can_send_photos' => $this->getCanSendPhotos(),
            'can_send_videos' => $this->getCanSendVideos(),
            'can_send_video_notes' => $this->getCanSendVideoNotes(),
            'can_send_voice_notes' => $this->getCanSendVoiceNotes(),
            'can_send_polls' => $this->getCanSendPolls(),
            'can_send_other_messages' => $this->getCanSendOtherMessages(),
            'can_add_link_previews' => $this->getCanAddLinkPreviews(),
            'can_change_info' => $this->getCanChangeInfo(),
            'can_invite_users' => $this->getCanInviteUsers(),
            'can_pin_messages' => $this->getCanPinMessages(),
            'can_create_topics' => $this->getCanCreateTopics(),
        ];
    }
}
