<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user has chosen a result of an inline query; for bots only.
 */
class UpdateNewChosenInlineResult extends Update implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the user who sent the query */
        #[SerializedName('sender_user_id')]
        private int $senderUserId,
        /** User location; may be null */
        #[SerializedName('user_location')]
        private Location|null $userLocation = null,
        /** Text of the query */
        #[SerializedName('query')]
        private string $query,
        /** Identifier of the chosen result */
        #[SerializedName('result_id')]
        private string $resultId,
        /** Identifier of the sent inline message, if known */
        #[SerializedName('inline_message_id')]
        private string $inlineMessageId,
    ) {
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
     * Get Identifier of the chosen result.
     */
    public function getResultId(): string
    {
        return $this->resultId;
    }

    /**
     * Set Identifier of the chosen result.
     */
    public function setResultId(string $resultId): self
    {
        $this->resultId = $resultId;

        return $this;
    }

    /**
     * Get Identifier of the sent inline message, if known.
     */
    public function getInlineMessageId(): string
    {
        return $this->inlineMessageId;
    }

    /**
     * Set Identifier of the sent inline message, if known.
     */
    public function setInlineMessageId(string $inlineMessageId): self
    {
        $this->inlineMessageId = $inlineMessageId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateNewChosenInlineResult',
            'sender_user_id' => $this->getSenderUserId(),
            'user_location' => $this->getUserLocation(),
            'query' => $this->getQuery(),
            'result_id' => $this->getResultId(),
            'inline_message_id' => $this->getInlineMessageId(),
        ];
    }
}
