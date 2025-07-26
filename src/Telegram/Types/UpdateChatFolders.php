<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The list of chat folders or a chat folder has changed
 */
class UpdateChatFolders extends Update implements \JsonSerializable
{
    public function __construct(
        /** The new list of chat folders */
        #[SerializedName('chat_folders')]
        private array|null $chatFolders = null,
        /** Position of the main chat list among chat folders, 0-based */
        #[SerializedName('main_chat_list_position')]
        private int $mainChatListPosition,
        /** True, if folder tags are enabled */
        #[SerializedName('are_tags_enabled')]
        private bool $areTagsEnabled,
    ) {
    }

    /**
     * Get The new list of chat folders
     */
    public function getChatFolders(): array|null
    {
        return $this->chatFolders;
    }

    /**
     * Set The new list of chat folders
     */
    public function setChatFolders(array|null $chatFolders): self
    {
        $this->chatFolders = $chatFolders;

        return $this;
    }

    /**
     * Get Position of the main chat list among chat folders, 0-based
     */
    public function getMainChatListPosition(): int
    {
        return $this->mainChatListPosition;
    }

    /**
     * Set Position of the main chat list among chat folders, 0-based
     */
    public function setMainChatListPosition(int $mainChatListPosition): self
    {
        $this->mainChatListPosition = $mainChatListPosition;

        return $this;
    }

    /**
     * Get True, if folder tags are enabled
     */
    public function getAreTagsEnabled(): bool
    {
        return $this->areTagsEnabled;
    }

    /**
     * Set True, if folder tags are enabled
     */
    public function setAreTagsEnabled(bool $areTagsEnabled): self
    {
        $this->areTagsEnabled = $areTagsEnabled;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateChatFolders',
            'chat_folders' => $this->getChatFolders(),
            'main_chat_list_position' => $this->getMainChatListPosition(),
            'are_tags_enabled' => $this->getAreTagsEnabled(),
        ];
    }
}
