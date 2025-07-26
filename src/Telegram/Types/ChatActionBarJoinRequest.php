<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The chat is a private chat with an administrator of a chat to which the user sent join request
 */
class ChatActionBarJoinRequest extends ChatActionBar implements \JsonSerializable
{
    public function __construct(
        /** Title of the chat to which the join request was sent */
        #[SerializedName('title')]
        private string $title,
        /** True, if the join request was sent to a channel chat */
        #[SerializedName('is_channel')]
        private bool $isChannel,
        /** Point in time (Unix timestamp) when the join request was sent */
        #[SerializedName('request_date')]
        private int $requestDate,
    ) {
    }

    /**
     * Get Title of the chat to which the join request was sent
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Title of the chat to which the join request was sent
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get True, if the join request was sent to a channel chat
     */
    public function getIsChannel(): bool
    {
        return $this->isChannel;
    }

    /**
     * Set True, if the join request was sent to a channel chat
     */
    public function setIsChannel(bool $isChannel): self
    {
        $this->isChannel = $isChannel;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the join request was sent
     */
    public function getRequestDate(): int
    {
        return $this->requestDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the join request was sent
     */
    public function setRequestDate(int $requestDate): self
    {
        $this->requestDate = $requestDate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatActionBarJoinRequest',
            'title' => $this->getTitle(),
            'is_channel' => $this->getIsChannel(),
            'request_date' => $this->getRequestDate(),
        ];
    }
}
