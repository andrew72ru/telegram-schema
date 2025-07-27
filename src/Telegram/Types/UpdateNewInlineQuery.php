<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A new incoming inline query; for bots only.
 */
class UpdateNewInlineQuery extends Update implements \JsonSerializable
{
    public function __construct(
        /** Unique query identifier */
        #[SerializedName('id')]
        private int $id,
        /** Identifier of the user who sent the query */
        #[SerializedName('sender_user_id')]
        private int $senderUserId,
        /** User location; may be null */
        #[SerializedName('user_location')]
        private Location|null $userLocation = null,
        /** The type of the chat from which the query originated; may be null if unknown */
        #[SerializedName('chat_type')]
        private ChatType|null $chatType = null,
        /** Text of the query */
        #[SerializedName('query')]
        private string $query,
        /** Offset of the first entry to return */
        #[SerializedName('offset')]
        private string $offset,
    ) {
    }

    /**
     * Get Unique query identifier.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Unique query identifier.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Identifier of the user who sent the query.
     */
    public function getSenderUserId(): int
    {
        return $this->senderUserId;
    }

    /**
     * Set Identifier of the user who sent the query.
     */
    public function setSenderUserId(int $senderUserId): self
    {
        $this->senderUserId = $senderUserId;

        return $this;
    }

    /**
     * Get User location; may be null.
     */
    public function getUserLocation(): Location|null
    {
        return $this->userLocation;
    }

    /**
     * Set User location; may be null.
     */
    public function setUserLocation(Location|null $userLocation): self
    {
        $this->userLocation = $userLocation;

        return $this;
    }

    /**
     * Get The type of the chat from which the query originated; may be null if unknown.
     */
    public function getChatType(): ChatType|null
    {
        return $this->chatType;
    }

    /**
     * Set The type of the chat from which the query originated; may be null if unknown.
     */
    public function setChatType(ChatType|null $chatType): self
    {
        $this->chatType = $chatType;

        return $this;
    }

    /**
     * Get Text of the query.
     */
    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * Set Text of the query.
     */
    public function setQuery(string $query): self
    {
        $this->query = $query;

        return $this;
    }

    /**
     * Get Offset of the first entry to return.
     */
    public function getOffset(): string
    {
        return $this->offset;
    }

    /**
     * Set Offset of the first entry to return.
     */
    public function setOffset(string $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateNewInlineQuery',
            'id' => $this->getId(),
            'sender_user_id' => $this->getSenderUserId(),
            'user_location' => $this->getUserLocation(),
            'chat_type' => $this->getChatType(),
            'query' => $this->getQuery(),
            'offset' => $this->getOffset(),
        ];
    }
}
