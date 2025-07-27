<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains settings for automatic moving of chats to and from the Archive chat lists.
 */
class ArchiveChatListSettings implements \JsonSerializable
{
    public function __construct(
        /** True, if new chats from non-contacts will be automatically archived and muted. Can be set to true only if the option "can_archive_and_mute_new_chats_from_unknown_users" is true */
        #[SerializedName('archive_and_mute_new_chats_from_unknown_users')]
        private bool $archiveAndMuteNewChatsFromUnknownUsers,
        /** True, if unmuted chats will be kept in the Archive chat list when they get a new message */
        #[SerializedName('keep_unmuted_chats_archived')]
        private bool $keepUnmutedChatsArchived,
        /** True, if unmuted chats, that are always included or pinned in a folder, will be kept in the Archive chat list when they get a new message. Ignored if keep_unmuted_chats_archived == true */
        #[SerializedName('keep_chats_from_folders_archived')]
        private bool $keepChatsFromFoldersArchived,
    ) {
    }

    /**
     * Get True, if new chats from non-contacts will be automatically archived and muted. Can be set to true only if the option "can_archive_and_mute_new_chats_from_unknown_users" is true.
     */
    public function getArchiveAndMuteNewChatsFromUnknownUsers(): bool
    {
        return $this->archiveAndMuteNewChatsFromUnknownUsers;
    }

    /**
     * Set True, if new chats from non-contacts will be automatically archived and muted. Can be set to true only if the option "can_archive_and_mute_new_chats_from_unknown_users" is true.
     */
    public function setArchiveAndMuteNewChatsFromUnknownUsers(bool $archiveAndMuteNewChatsFromUnknownUsers): self
    {
        $this->archiveAndMuteNewChatsFromUnknownUsers = $archiveAndMuteNewChatsFromUnknownUsers;

        return $this;
    }

    /**
     * Get True, if unmuted chats will be kept in the Archive chat list when they get a new message.
     */
    public function getKeepUnmutedChatsArchived(): bool
    {
        return $this->keepUnmutedChatsArchived;
    }

    /**
     * Set True, if unmuted chats will be kept in the Archive chat list when they get a new message.
     */
    public function setKeepUnmutedChatsArchived(bool $keepUnmutedChatsArchived): self
    {
        $this->keepUnmutedChatsArchived = $keepUnmutedChatsArchived;

        return $this;
    }

    /**
     * Get True, if unmuted chats, that are always included or pinned in a folder, will be kept in the Archive chat list when they get a new message. Ignored if keep_unmuted_chats_archived == true.
     */
    public function getKeepChatsFromFoldersArchived(): bool
    {
        return $this->keepChatsFromFoldersArchived;
    }

    /**
     * Set True, if unmuted chats, that are always included or pinned in a folder, will be kept in the Archive chat list when they get a new message. Ignored if keep_unmuted_chats_archived == true.
     */
    public function setKeepChatsFromFoldersArchived(bool $keepChatsFromFoldersArchived): self
    {
        $this->keepChatsFromFoldersArchived = $keepChatsFromFoldersArchived;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'archiveChatListSettings',
            'archive_and_mute_new_chats_from_unknown_users' => $this->getArchiveAndMuteNewChatsFromUnknownUsers(),
            'keep_unmuted_chats_archived' => $this->getKeepUnmutedChatsArchived(),
            'keep_chats_from_folders_archived' => $this->getKeepChatsFromFoldersArchived(),
        ];
    }
}
