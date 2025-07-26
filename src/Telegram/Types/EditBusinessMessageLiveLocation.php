<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Edits the content of a live location in a message sent on behalf of a business account; for bots only
 */
class EditBusinessMessageLiveLocation extends BusinessMessage implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of business connection on behalf of which the message was sent */
        #[SerializedName('business_connection_id')]
        private string $businessConnectionId,
        /** The chat the message belongs to */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the message */
        #[SerializedName('message_id')]
        private int $messageId,
        /** The new message reply markup; pass null if none */
        #[SerializedName('reply_markup')]
        private ReplyMarkup|null $replyMarkup = null,
        /** New location content of the message; pass null to stop sharing the live location */
        #[SerializedName('location')]
        private Location|null $location = null,
        /** New time relative to the message send date, for which the location can be updated, in seconds. If 0x7FFFFFFF specified, then the location can be updated forever. */
        #[SerializedName('live_period')]
        private int $livePeriod,
        /** The new direction in which the location moves, in degrees; 1-360. Pass 0 if unknown */
        #[SerializedName('heading')]
        private int $heading,
        /** The new maximum distance for proximity alerts, in meters (0-100000). Pass 0 if the notification is disabled */
        #[SerializedName('proximity_alert_radius')]
        private int $proximityAlertRadius,
    ) {
    }

    /**
     * Get Unique identifier of business connection on behalf of which the message was sent
     */
    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
    }

    /**
     * Set Unique identifier of business connection on behalf of which the message was sent
     */
    public function setBusinessConnectionId(string $businessConnectionId): self
    {
        $this->businessConnectionId = $businessConnectionId;

        return $this;
    }

    /**
     * Get The chat the message belongs to
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set The chat the message belongs to
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the message
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the message
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get The new message reply markup; pass null if none
     */
    public function getReplyMarkup(): ReplyMarkup|null
    {
        return $this->replyMarkup;
    }

    /**
     * Set The new message reply markup; pass null if none
     */
    public function setReplyMarkup(ReplyMarkup|null $replyMarkup): self
    {
        $this->replyMarkup = $replyMarkup;

        return $this;
    }

    /**
     * Get New location content of the message; pass null to stop sharing the live location
     */
    public function getLocation(): Location|null
    {
        return $this->location;
    }

    /**
     * Set New location content of the message; pass null to stop sharing the live location
     */
    public function setLocation(Location|null $location): self
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get New time relative to the message send date, for which the location can be updated, in seconds. If 0x7FFFFFFF specified, then the location can be updated forever.
     */
    public function getLivePeriod(): int
    {
        return $this->livePeriod;
    }

    /**
     * Set New time relative to the message send date, for which the location can be updated, in seconds. If 0x7FFFFFFF specified, then the location can be updated forever.
     */
    public function setLivePeriod(int $livePeriod): self
    {
        $this->livePeriod = $livePeriod;

        return $this;
    }

    /**
     * Get The new direction in which the location moves, in degrees; 1-360. Pass 0 if unknown
     */
    public function getHeading(): int
    {
        return $this->heading;
    }

    /**
     * Set The new direction in which the location moves, in degrees; 1-360. Pass 0 if unknown
     */
    public function setHeading(int $heading): self
    {
        $this->heading = $heading;

        return $this;
    }

    /**
     * Get The new maximum distance for proximity alerts, in meters (0-100000). Pass 0 if the notification is disabled
     */
    public function getProximityAlertRadius(): int
    {
        return $this->proximityAlertRadius;
    }

    /**
     * Set The new maximum distance for proximity alerts, in meters (0-100000). Pass 0 if the notification is disabled
     */
    public function setProximityAlertRadius(int $proximityAlertRadius): self
    {
        $this->proximityAlertRadius = $proximityAlertRadius;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'editBusinessMessageLiveLocation',
            'business_connection_id' => $this->getBusinessConnectionId(),
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'reply_markup' => $this->getReplyMarkup(),
            'location' => $this->getLocation(),
            'live_period' => $this->getLivePeriod(),
            'heading' => $this->getHeading(),
            'proximity_alert_radius' => $this->getProximityAlertRadius(),
        ];
    }
}
