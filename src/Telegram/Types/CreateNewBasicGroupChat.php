<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Creates a new basic group and sends a corresponding messageBasicGroupChatCreate. Returns information about the newly created chat
 */
class CreateNewBasicGroupChat extends CreatedBasicGroupChat implements \JsonSerializable
{
    public function __construct(
        /** Identifiers of users to be added to the basic group; may be empty to create a basic group without other members */
        #[SerializedName('user_ids')]
        private array|null $userIds = null,
        /** Title of the new basic group; 1-128 characters */
        #[SerializedName('title')]
        private string $title,
        /** Message auto-delete time value, in seconds; must be from 0 up to 365 * 86400 and be divisible by 86400. If 0, then messages aren't deleted automatically */
        #[SerializedName('message_auto_delete_time')]
        private int $messageAutoDeleteTime,
    ) {
    }

    /**
     * Get Identifiers of users to be added to the basic group; may be empty to create a basic group without other members
     */
    public function getUserIds(): array|null
    {
        return $this->userIds;
    }

    /**
     * Set Identifiers of users to be added to the basic group; may be empty to create a basic group without other members
     */
    public function setUserIds(array|null $userIds): self
    {
        $this->userIds = $userIds;

        return $this;
    }

    /**
     * Get Title of the new basic group; 1-128 characters
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Title of the new basic group; 1-128 characters
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get Message auto-delete time value, in seconds; must be from 0 up to 365 * 86400 and be divisible by 86400. If 0, then messages aren't deleted automatically
     */
    public function getMessageAutoDeleteTime(): int
    {
        return $this->messageAutoDeleteTime;
    }

    /**
     * Set Message auto-delete time value, in seconds; must be from 0 up to 365 * 86400 and be divisible by 86400. If 0, then messages aren't deleted automatically
     */
    public function setMessageAutoDeleteTime(int $messageAutoDeleteTime): self
    {
        $this->messageAutoDeleteTime = $messageAutoDeleteTime;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'createNewBasicGroupChat',
            'user_ids' => $this->getUserIds(),
            'title' => $this->getTitle(),
            'message_auto_delete_time' => $this->getMessageAutoDeleteTime(),
        ];
    }
}
