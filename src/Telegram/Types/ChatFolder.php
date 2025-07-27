<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a folder for user chats.
 */
class ChatFolder implements \JsonSerializable
{
    public function __construct(
        /** The name of the folder */
        #[SerializedName('name')]
        private ChatFolderName|null $name = null,
        /** The chosen icon for the chat folder; may be null. If null, use getChatFolderDefaultIconName to get default icon name for the folder */
        #[SerializedName('icon')]
        private ChatFolderIcon|null $icon = null,
        /** The identifier of the chosen color for the chat folder icon; from -1 to 6. If -1, then color is disabled. Can't be changed if folder tags are disabled or the current user doesn't have Telegram Premium subscription */
        #[SerializedName('color_id')]
        private int $colorId,
        /** True, if at least one link has been created for the folder */
        #[SerializedName('is_shareable')]
        private bool $isShareable,
        /** The chat identifiers of pinned chats in the folder. There can be up to getOption("chat_folder_chosen_chat_count_max") pinned and always included non-secret chats and the same number of secret chats, but the limit can be increased with Telegram Premium */
        #[SerializedName('pinned_chat_ids')]
        private array|null $pinnedChatIds = null,
        /** The chat identifiers of always included chats in the folder. There can be up to getOption("chat_folder_chosen_chat_count_max") pinned and always included non-secret chats and the same number of secret chats, but the limit can be increased with Telegram Premium */
        #[SerializedName('included_chat_ids')]
        private array|null $includedChatIds = null,
        /** The chat identifiers of always excluded chats in the folder. There can be up to getOption("chat_folder_chosen_chat_count_max") always excluded non-secret chats and the same number of secret chats, but the limit can be increased with Telegram Premium */
        #[SerializedName('excluded_chat_ids')]
        private array|null $excludedChatIds = null,
        /** True, if muted chats need to be excluded */
        #[SerializedName('exclude_muted')]
        private bool $excludeMuted,
        /** True, if read chats need to be excluded */
        #[SerializedName('exclude_read')]
        private bool $excludeRead,
        /** True, if archived chats need to be excluded */
        #[SerializedName('exclude_archived')]
        private bool $excludeArchived,
        /** True, if contacts need to be included */
        #[SerializedName('include_contacts')]
        private bool $includeContacts,
        /** True, if non-contact users need to be included */
        #[SerializedName('include_non_contacts')]
        private bool $includeNonContacts,
        /** True, if bots need to be included */
        #[SerializedName('include_bots')]
        private bool $includeBots,
        /** True, if basic groups and supergroups need to be included */
        #[SerializedName('include_groups')]
        private bool $includeGroups,
        /** True, if channels need to be included */
        #[SerializedName('include_channels')]
        private bool $includeChannels,
    ) {
    }

    /**
     * Get The name of the folder.
     */
    public function getName(): ChatFolderName|null
    {
        return $this->name;
    }

    /**
     * Set The name of the folder.
     */
    public function setName(ChatFolderName|null $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get The chosen icon for the chat folder; may be null. If null, use getChatFolderDefaultIconName to get default icon name for the folder.
     */
    public function getIcon(): ChatFolderIcon|null
    {
        return $this->icon;
    }

    /**
     * Set The chosen icon for the chat folder; may be null. If null, use getChatFolderDefaultIconName to get default icon name for the folder.
     */
    public function setIcon(ChatFolderIcon|null $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get The identifier of the chosen color for the chat folder icon; from -1 to 6. If -1, then color is disabled. Can't be changed if folder tags are disabled or the current user doesn't have Telegram Premium subscription.
     */
    public function getColorId(): int
    {
        return $this->colorId;
    }

    /**
     * Set The identifier of the chosen color for the chat folder icon; from -1 to 6. If -1, then color is disabled. Can't be changed if folder tags are disabled or the current user doesn't have Telegram Premium subscription.
     */
    public function setColorId(int $colorId): self
    {
        $this->colorId = $colorId;

        return $this;
    }

    /**
     * Get True, if at least one link has been created for the folder.
     */
    public function getIsShareable(): bool
    {
        return $this->isShareable;
    }

    /**
     * Set True, if at least one link has been created for the folder.
     */
    public function setIsShareable(bool $isShareable): self
    {
        $this->isShareable = $isShareable;

        return $this;
    }

    /**
     * Get The chat identifiers of pinned chats in the folder. There can be up to getOption("chat_folder_chosen_chat_count_max") pinned and always included non-secret chats and the same number of secret chats, but the limit can be increased with Telegram Premium.
     */
    public function getPinnedChatIds(): array|null
    {
        return $this->pinnedChatIds;
    }

    /**
     * Set The chat identifiers of pinned chats in the folder. There can be up to getOption("chat_folder_chosen_chat_count_max") pinned and always included non-secret chats and the same number of secret chats, but the limit can be increased with Telegram Premium.
     */
    public function setPinnedChatIds(array|null $pinnedChatIds): self
    {
        $this->pinnedChatIds = $pinnedChatIds;

        return $this;
    }

    /**
     * Get The chat identifiers of always included chats in the folder. There can be up to getOption("chat_folder_chosen_chat_count_max") pinned and always included non-secret chats and the same number of secret chats, but the limit can be increased with Telegram Premium.
     */
    public function getIncludedChatIds(): array|null
    {
        return $this->includedChatIds;
    }

    /**
     * Set The chat identifiers of always included chats in the folder. There can be up to getOption("chat_folder_chosen_chat_count_max") pinned and always included non-secret chats and the same number of secret chats, but the limit can be increased with Telegram Premium.
     */
    public function setIncludedChatIds(array|null $includedChatIds): self
    {
        $this->includedChatIds = $includedChatIds;

        return $this;
    }

    /**
     * Get The chat identifiers of always excluded chats in the folder. There can be up to getOption("chat_folder_chosen_chat_count_max") always excluded non-secret chats and the same number of secret chats, but the limit can be increased with Telegram Premium.
     */
    public function getExcludedChatIds(): array|null
    {
        return $this->excludedChatIds;
    }

    /**
     * Set The chat identifiers of always excluded chats in the folder. There can be up to getOption("chat_folder_chosen_chat_count_max") always excluded non-secret chats and the same number of secret chats, but the limit can be increased with Telegram Premium.
     */
    public function setExcludedChatIds(array|null $excludedChatIds): self
    {
        $this->excludedChatIds = $excludedChatIds;

        return $this;
    }

    /**
     * Get True, if muted chats need to be excluded.
     */
    public function getExcludeMuted(): bool
    {
        return $this->excludeMuted;
    }

    /**
     * Set True, if muted chats need to be excluded.
     */
    public function setExcludeMuted(bool $excludeMuted): self
    {
        $this->excludeMuted = $excludeMuted;

        return $this;
    }

    /**
     * Get True, if read chats need to be excluded.
     */
    public function getExcludeRead(): bool
    {
        return $this->excludeRead;
    }

    /**
     * Set True, if read chats need to be excluded.
     */
    public function setExcludeRead(bool $excludeRead): self
    {
        $this->excludeRead = $excludeRead;

        return $this;
    }

    /**
     * Get True, if archived chats need to be excluded.
     */
    public function getExcludeArchived(): bool
    {
        return $this->excludeArchived;
    }

    /**
     * Set True, if archived chats need to be excluded.
     */
    public function setExcludeArchived(bool $excludeArchived): self
    {
        $this->excludeArchived = $excludeArchived;

        return $this;
    }

    /**
     * Get True, if contacts need to be included.
     */
    public function getIncludeContacts(): bool
    {
        return $this->includeContacts;
    }

    /**
     * Set True, if contacts need to be included.
     */
    public function setIncludeContacts(bool $includeContacts): self
    {
        $this->includeContacts = $includeContacts;

        return $this;
    }

    /**
     * Get True, if non-contact users need to be included.
     */
    public function getIncludeNonContacts(): bool
    {
        return $this->includeNonContacts;
    }

    /**
     * Set True, if non-contact users need to be included.
     */
    public function setIncludeNonContacts(bool $includeNonContacts): self
    {
        $this->includeNonContacts = $includeNonContacts;

        return $this;
    }

    /**
     * Get True, if bots need to be included.
     */
    public function getIncludeBots(): bool
    {
        return $this->includeBots;
    }

    /**
     * Set True, if bots need to be included.
     */
    public function setIncludeBots(bool $includeBots): self
    {
        $this->includeBots = $includeBots;

        return $this;
    }

    /**
     * Get True, if basic groups and supergroups need to be included.
     */
    public function getIncludeGroups(): bool
    {
        return $this->includeGroups;
    }

    /**
     * Set True, if basic groups and supergroups need to be included.
     */
    public function setIncludeGroups(bool $includeGroups): self
    {
        $this->includeGroups = $includeGroups;

        return $this;
    }

    /**
     * Get True, if channels need to be included.
     */
    public function getIncludeChannels(): bool
    {
        return $this->includeChannels;
    }

    /**
     * Set True, if channels need to be included.
     */
    public function setIncludeChannels(bool $includeChannels): self
    {
        $this->includeChannels = $includeChannels;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatFolder',
            'name' => $this->getName(),
            'icon' => $this->getIcon(),
            'color_id' => $this->getColorId(),
            'is_shareable' => $this->getIsShareable(),
            'pinned_chat_ids' => $this->getPinnedChatIds(),
            'included_chat_ids' => $this->getIncludedChatIds(),
            'excluded_chat_ids' => $this->getExcludedChatIds(),
            'exclude_muted' => $this->getExcludeMuted(),
            'exclude_read' => $this->getExcludeRead(),
            'exclude_archived' => $this->getExcludeArchived(),
            'include_contacts' => $this->getIncludeContacts(),
            'include_non_contacts' => $this->getIncludeNonContacts(),
            'include_bots' => $this->getIncludeBots(),
            'include_groups' => $this->getIncludeGroups(),
            'include_channels' => $this->getIncludeChannels(),
        ];
    }
}
