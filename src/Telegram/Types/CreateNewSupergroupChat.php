<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Creates a new supergroup or channel and sends a corresponding messageSupergroupChatCreate. Returns the newly created chat.
 */
class CreateNewSupergroupChat extends Chat implements \JsonSerializable
{
    public function __construct(
        /** Title of the new chat; 1-128 characters */
        #[SerializedName('title')]
        private string $title,
        /** Pass true to create a forum supergroup chat */
        #[SerializedName('is_forum')]
        private bool $isForum,
        /** Pass true to create a channel chat; ignored if a forum is created */
        #[SerializedName('is_channel')]
        private bool $isChannel,
        /** Creates a new supergroup or channel and sends a corresponding messageSupergroupChatCreate. Returns the newly created chat */
        #[SerializedName('description')]
        private string $description,
        /** Chat location if a location-based supergroup is being created; pass null to create an ordinary supergroup chat */
        #[SerializedName('location')]
        private ChatLocation|null $location = null,
        /** Message auto-delete time value, in seconds; must be from 0 up to 365 * 86400 and be divisible by 86400. If 0, then messages aren't deleted automatically */
        #[SerializedName('message_auto_delete_time')]
        private int $messageAutoDeleteTime,
        /** Pass true to create a supergroup for importing messages using importMessages */
        #[SerializedName('for_import')]
        private bool $forImport,
    ) {
    }

    /**
     * Get Title of the new chat; 1-128 characters.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Title of the new chat; 1-128 characters.
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get Pass true to create a forum supergroup chat.
     */
    public function getIsForum(): bool
    {
        return $this->isForum;
    }

    /**
     * Set Pass true to create a forum supergroup chat.
     */
    public function setIsForum(bool $isForum): self
    {
        $this->isForum = $isForum;

        return $this;
    }

    /**
     * Get Pass true to create a channel chat; ignored if a forum is created.
     */
    public function getIsChannel(): bool
    {
        return $this->isChannel;
    }

    /**
     * Set Pass true to create a channel chat; ignored if a forum is created.
     */
    public function setIsChannel(bool $isChannel): self
    {
        $this->isChannel = $isChannel;

        return $this;
    }

    /**
     * Get Creates a new supergroup or channel and sends a corresponding messageSupergroupChatCreate. Returns the newly created chat.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set Creates a new supergroup or channel and sends a corresponding messageSupergroupChatCreate. Returns the newly created chat.
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get Chat location if a location-based supergroup is being created; pass null to create an ordinary supergroup chat.
     */
    public function getLocation(): ChatLocation|null
    {
        return $this->location;
    }

    /**
     * Set Chat location if a location-based supergroup is being created; pass null to create an ordinary supergroup chat.
     */
    public function setLocation(ChatLocation|null $location): self
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get Message auto-delete time value, in seconds; must be from 0 up to 365 * 86400 and be divisible by 86400. If 0, then messages aren't deleted automatically.
     */
    public function getMessageAutoDeleteTime(): int
    {
        return $this->messageAutoDeleteTime;
    }

    /**
     * Set Message auto-delete time value, in seconds; must be from 0 up to 365 * 86400 and be divisible by 86400. If 0, then messages aren't deleted automatically.
     */
    public function setMessageAutoDeleteTime(int $messageAutoDeleteTime): self
    {
        $this->messageAutoDeleteTime = $messageAutoDeleteTime;

        return $this;
    }

    /**
     * Get Pass true to create a supergroup for importing messages using importMessages.
     */
    public function getForImport(): bool
    {
        return $this->forImport;
    }

    /**
     * Set Pass true to create a supergroup for importing messages using importMessages.
     */
    public function setForImport(bool $forImport): self
    {
        $this->forImport = $forImport;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'createNewSupergroupChat',
            'title' => $this->getTitle(),
            'is_forum' => $this->getIsForum(),
            'is_channel' => $this->getIsChannel(),
            'description' => $this->getDescription(),
            'location' => $this->getLocation(),
            'message_auto_delete_time' => $this->getMessageAutoDeleteTime(),
            'for_import' => $this->getForImport(),
        ];
    }
}
