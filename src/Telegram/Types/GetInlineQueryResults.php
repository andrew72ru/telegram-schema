<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sends an inline query to a bot and returns its results. Returns an error with code 502 if the bot fails to answer the query before the query timeout expires
 */
class GetInlineQueryResults extends InlineQueryResults implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the target bot */
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        /** Identifier of the chat where the query was sent */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Location of the user; pass null if unknown or the bot doesn't need user's location */
        #[SerializedName('user_location')]
        private Location|null $userLocation = null,
        /** Text of the query */
        #[SerializedName('query')]
        private string $query,
        /** Offset of the first entry to return; use empty string to get the first chunk of results */
        #[SerializedName('offset')]
        private string $offset,
    ) {
    }

    /**
     * Get Identifier of the target bot
     */
    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    /**
     * Set Identifier of the target bot
     */
    public function setBotUserId(int $botUserId): self
    {
        $this->botUserId = $botUserId;

        return $this;
    }

    /**
     * Get Identifier of the chat where the query was sent
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat where the query was sent
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Location of the user; pass null if unknown or the bot doesn't need user's location
     */
    public function getUserLocation(): Location|null
    {
        return $this->userLocation;
    }

    /**
     * Set Location of the user; pass null if unknown or the bot doesn't need user's location
     */
    public function setUserLocation(Location|null $userLocation): self
    {
        $this->userLocation = $userLocation;

        return $this;
    }

    /**
     * Get Text of the query
     */
    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * Set Text of the query
     */
    public function setQuery(string $query): self
    {
        $this->query = $query;

        return $this;
    }

    /**
     * Get Offset of the first entry to return; use empty string to get the first chunk of results
     */
    public function getOffset(): string
    {
        return $this->offset;
    }

    /**
     * Set Offset of the first entry to return; use empty string to get the first chunk of results
     */
    public function setOffset(string $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getInlineQueryResults',
            'bot_user_id' => $this->getBotUserId(),
            'chat_id' => $this->getChatId(),
            'user_location' => $this->getUserLocation(),
            'query' => $this->getQuery(),
            'offset' => $this->getOffset(),
        ];
    }
}
