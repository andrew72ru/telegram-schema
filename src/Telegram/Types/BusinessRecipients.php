<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes private chats chosen for automatic interaction with a business.
 */
class BusinessRecipients implements \JsonSerializable
{
    public function __construct(
        /** Identifiers of selected private chats */
        #[SerializedName('chat_ids')]
        private array|null $chatIds = null,
        /** Identifiers of private chats that are always excluded; for businessConnectedBot only */
        #[SerializedName('excluded_chat_ids')]
        private array|null $excludedChatIds = null,
        /** True, if all existing private chats are selected */
        #[SerializedName('select_existing_chats')]
        private bool $selectExistingChats,
        /** True, if all new private chats are selected */
        #[SerializedName('select_new_chats')]
        private bool $selectNewChats,
        /** True, if all private chats with contacts are selected */
        #[SerializedName('select_contacts')]
        private bool $selectContacts,
        /** True, if all private chats with non-contacts are selected */
        #[SerializedName('select_non_contacts')]
        private bool $selectNonContacts,
        /** If true, then all private chats except the selected are chosen. Otherwise, only the selected chats are chosen */
        #[SerializedName('exclude_selected')]
        private bool $excludeSelected,
    ) {
    }

    /**
     * Get Identifiers of selected private chats.
     */
    public function getChatIds(): array|null
    {
        return $this->chatIds;
    }

    /**
     * Set Identifiers of selected private chats.
     */
    public function setChatIds(array|null $chatIds): self
    {
        $this->chatIds = $chatIds;

        return $this;
    }

    /**
     * Get Identifiers of private chats that are always excluded; for businessConnectedBot only.
     */
    public function getExcludedChatIds(): array|null
    {
        return $this->excludedChatIds;
    }

    /**
     * Set Identifiers of private chats that are always excluded; for businessConnectedBot only.
     */
    public function setExcludedChatIds(array|null $excludedChatIds): self
    {
        $this->excludedChatIds = $excludedChatIds;

        return $this;
    }

    /**
     * Get True, if all existing private chats are selected.
     */
    public function getSelectExistingChats(): bool
    {
        return $this->selectExistingChats;
    }

    /**
     * Set True, if all existing private chats are selected.
     */
    public function setSelectExistingChats(bool $selectExistingChats): self
    {
        $this->selectExistingChats = $selectExistingChats;

        return $this;
    }

    /**
     * Get True, if all new private chats are selected.
     */
    public function getSelectNewChats(): bool
    {
        return $this->selectNewChats;
    }

    /**
     * Set True, if all new private chats are selected.
     */
    public function setSelectNewChats(bool $selectNewChats): self
    {
        $this->selectNewChats = $selectNewChats;

        return $this;
    }

    /**
     * Get True, if all private chats with contacts are selected.
     */
    public function getSelectContacts(): bool
    {
        return $this->selectContacts;
    }

    /**
     * Set True, if all private chats with contacts are selected.
     */
    public function setSelectContacts(bool $selectContacts): self
    {
        $this->selectContacts = $selectContacts;

        return $this;
    }

    /**
     * Get True, if all private chats with non-contacts are selected.
     */
    public function getSelectNonContacts(): bool
    {
        return $this->selectNonContacts;
    }

    /**
     * Set True, if all private chats with non-contacts are selected.
     */
    public function setSelectNonContacts(bool $selectNonContacts): self
    {
        $this->selectNonContacts = $selectNonContacts;

        return $this;
    }

    /**
     * Get If true, then all private chats except the selected are chosen. Otherwise, only the selected chats are chosen.
     */
    public function getExcludeSelected(): bool
    {
        return $this->excludeSelected;
    }

    /**
     * Set If true, then all private chats except the selected are chosen. Otherwise, only the selected chats are chosen.
     */
    public function setExcludeSelected(bool $excludeSelected): self
    {
        $this->excludeSelected = $excludeSelected;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'businessRecipients',
            'chat_ids' => $this->getChatIds(),
            'excluded_chat_ids' => $this->getExcludedChatIds(),
            'select_existing_chats' => $this->getSelectExistingChats(),
            'select_new_chats' => $this->getSelectNewChats(),
            'select_contacts' => $this->getSelectContacts(),
            'select_non_contacts' => $this->getSelectNonContacts(),
            'exclude_selected' => $this->getExcludeSelected(),
        ];
    }
}
