<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a forwarded message
 */
class MessageForwardInfo implements \JsonSerializable
{
    public function __construct(
        /** Origin of the forwarded message */
        #[SerializedName('origin')]
        private MessageOrigin|null $origin = null,
        /** Point in time (Unix timestamp) when the message was originally sent */
        #[SerializedName('date')]
        private int $date,
        /** For messages forwarded to the chat with the current user (Saved Messages), to the Replies bot chat, or to the channel's discussion group, information about the source message from which the message was forwarded last time; may be null for other forwards or if unknown */
        #[SerializedName('source')]
        private ForwardSource|null $source = null,
        /** The type of public service announcement for the forwarded message */
        #[SerializedName('public_service_announcement_type')]
        private string $publicServiceAnnouncementType,
    ) {
    }

    /**
     * Get Origin of the forwarded message
     */
    public function getOrigin(): MessageOrigin|null
    {
        return $this->origin;
    }

    /**
     * Set Origin of the forwarded message
     */
    public function setOrigin(MessageOrigin|null $origin): self
    {
        $this->origin = $origin;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the message was originally sent
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * Set Point in time (Unix timestamp) when the message was originally sent
     */
    public function setDate(int $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get For messages forwarded to the chat with the current user (Saved Messages), to the Replies bot chat, or to the channel's discussion group, information about the source message from which the message was forwarded last time; may be null for other forwards or if unknown
     */
    public function getSource(): ForwardSource|null
    {
        return $this->source;
    }

    /**
     * Set For messages forwarded to the chat with the current user (Saved Messages), to the Replies bot chat, or to the channel's discussion group, information about the source message from which the message was forwarded last time; may be null for other forwards or if unknown
     */
    public function setSource(ForwardSource|null $source): self
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get The type of public service announcement for the forwarded message
     */
    public function getPublicServiceAnnouncementType(): string
    {
        return $this->publicServiceAnnouncementType;
    }

    /**
     * Set The type of public service announcement for the forwarded message
     */
    public function setPublicServiceAnnouncementType(string $publicServiceAnnouncementType): self
    {
        $this->publicServiceAnnouncementType = $publicServiceAnnouncementType;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageForwardInfo',
            'origin' => $this->getOrigin(),
            'date' => $this->getDate(),
            'source' => $this->getSource(),
            'public_service_announcement_type' => $this->getPublicServiceAnnouncementType(),
        ];
    }
}
