<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns a list of service actions taken by chat members and administrators in the last 48 hours. Available only for supergroups and channels. Requires administrator rights. Returns results in reverse chronological order (i.e., in order of decreasing event_id)
 */
class GetChatEventLog extends ChatEvents implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Search query by which to filter events */
        #[SerializedName('query')]
        private string $query,
        /** Identifier of an event from which to return results. Use 0 to get results from the latest events */
        #[SerializedName('from_event_id')]
        private int $fromEventId,
        /** The maximum number of events to return; up to 100 */
        #[SerializedName('limit')]
        private int $limit,
        /** The types of events to return; pass null to get chat events of all types */
        #[SerializedName('filters')]
        private ChatEventLogFilters|null $filters = null,
        /** User identifiers by which to filter events. By default, events relating to all users will be returned */
        #[SerializedName('user_ids')]
        private array|null $userIds = null,
    ) {
    }

    /**
     * Get Chat identifier
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Search query by which to filter events
     */
    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * Set Search query by which to filter events
     */
    public function setQuery(string $query): self
    {
        $this->query = $query;

        return $this;
    }

    /**
     * Get Identifier of an event from which to return results. Use 0 to get results from the latest events
     */
    public function getFromEventId(): int
    {
        return $this->fromEventId;
    }

    /**
     * Set Identifier of an event from which to return results. Use 0 to get results from the latest events
     */
    public function setFromEventId(int $fromEventId): self
    {
        $this->fromEventId = $fromEventId;

        return $this;
    }

    /**
     * Get The maximum number of events to return; up to 100
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of events to return; up to 100
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * Get The types of events to return; pass null to get chat events of all types
     */
    public function getFilters(): ChatEventLogFilters|null
    {
        return $this->filters;
    }

    /**
     * Set The types of events to return; pass null to get chat events of all types
     */
    public function setFilters(ChatEventLogFilters|null $filters): self
    {
        $this->filters = $filters;

        return $this;
    }

    /**
     * Get User identifiers by which to filter events. By default, events relating to all users will be returned
     */
    public function getUserIds(): array|null
    {
        return $this->userIds;
    }

    /**
     * Set User identifiers by which to filter events. By default, events relating to all users will be returned
     */
    public function setUserIds(array|null $userIds): self
    {
        $this->userIds = $userIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getChatEventLog',
            'chat_id' => $this->getChatId(),
            'query' => $this->getQuery(),
            'from_event_id' => $this->getFromEventId(),
            'limit' => $this->getLimit(),
            'filters' => $this->getFilters(),
            'user_ids' => $this->getUserIds(),
        ];
    }
}
