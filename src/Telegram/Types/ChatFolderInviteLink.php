<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a chat folder invite link.
 */
class ChatFolderInviteLink implements \JsonSerializable
{
    public function __construct(
        /** The chat folder invite link */
        #[SerializedName('invite_link')]
        private string $inviteLink,
        /** Name of the link */
        #[SerializedName('name')]
        private string $name,
        /** Identifiers of chats, included in the link */
        #[SerializedName('chat_ids')]
        private array|null $chatIds = null,
    ) {
    }

    /**
     * Get The chat folder invite link.
     */
    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    /**
     * Set The chat folder invite link.
     */
    public function setInviteLink(string $inviteLink): self
    {
        $this->inviteLink = $inviteLink;

        return $this;
    }

    /**
     * Get Name of the link.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set Name of the link.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get Identifiers of chats, included in the link.
     */
    public function getChatIds(): array|null
    {
        return $this->chatIds;
    }

    /**
     * Set Identifiers of chats, included in the link.
     */
    public function setChatIds(array|null $chatIds): self
    {
        $this->chatIds = $chatIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatFolderInviteLink',
            'invite_link' => $this->getInviteLink(),
            'name' => $this->getName(),
            'chat_ids' => $this->getChatIds(),
        ];
    }
}
