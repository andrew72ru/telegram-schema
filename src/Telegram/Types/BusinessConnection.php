<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a connection of the bot with a business account.
 */
class BusinessConnection implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the connection */
        #[SerializedName('id')]
        private string $id,
        /** Identifier of the business user that created the connection */
        #[SerializedName('user_id')]
        private int $userId,
        /** Chat identifier of the private chat with the user */
        #[SerializedName('user_chat_id')]
        private int $userChatId,
        /** Point in time (Unix timestamp) when the connection was established */
        #[SerializedName('date')]
        private int $date,
        /** Rights of the bot; may be null if the connection was disabled */
        #[SerializedName('rights')]
        private BusinessBotRights|null $rights = null,
        /** True, if the connection is enabled; false otherwise */
        #[SerializedName('is_enabled')]
        private bool $isEnabled,
    ) {
    }

    /**
     * Get Unique identifier of the connection.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set Unique identifier of the connection.
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Identifier of the business user that created the connection.
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set Identifier of the business user that created the connection.
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get Chat identifier of the private chat with the user.
     */
    public function getUserChatId(): int
    {
        return $this->userChatId;
    }

    /**
     * Set Chat identifier of the private chat with the user.
     */
    public function setUserChatId(int $userChatId): self
    {
        $this->userChatId = $userChatId;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the connection was established.
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * Set Point in time (Unix timestamp) when the connection was established.
     */
    public function setDate(int $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get Rights of the bot; may be null if the connection was disabled.
     */
    public function getRights(): BusinessBotRights|null
    {
        return $this->rights;
    }

    /**
     * Set Rights of the bot; may be null if the connection was disabled.
     */
    public function setRights(BusinessBotRights|null $rights): self
    {
        $this->rights = $rights;

        return $this;
    }

    /**
     * Get True, if the connection is enabled; false otherwise.
     */
    public function getIsEnabled(): bool
    {
        return $this->isEnabled;
    }

    /**
     * Set True, if the connection is enabled; false otherwise.
     */
    public function setIsEnabled(bool $isEnabled): self
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'businessConnection',
            'id' => $this->getId(),
            'user_id' => $this->getUserId(),
            'user_chat_id' => $this->getUserChatId(),
            'date' => $this->getDate(),
            'rights' => $this->getRights(),
            'is_enabled' => $this->getIsEnabled(),
        ];
    }
}
