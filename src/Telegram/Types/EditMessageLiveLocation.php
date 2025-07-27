<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Edits the message content of a live location. Messages can be edited for a limited period of time specified in the live location.
 */
class EditMessageLiveLocation extends Message implements \JsonSerializable
{
    public function __construct(
        /** The chat the message belongs to */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the message. Use messageProperties.can_be_edited to check whether the message can be edited */
        #[SerializedName('message_id')]
        private int $messageId,
        /** The new message reply markup; pass null if none; for bots only */
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
     * Get The chat the message belongs to.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set The chat the message belongs to.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the message. Use messageProperties.can_be_edited to check whether the message can be edited.
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the message. Use messageProperties.can_be_edited to check whether the message can be edited.
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get The new message reply markup; pass null if none; for bots only.
     */
    public function getReplyMarkup(): ReplyMarkup|null
    {
        return $this->replyMarkup;
    }

    /**
     * Set The new message reply markup; pass null if none; for bots only.
     */
    public function setReplyMarkup(ReplyMarkup|null $replyMarkup): self
    {
        $this->replyMarkup = $replyMarkup;

        return $this;
    }

    /**
     * Get New location content of the message; pass null to stop sharing the live location.
     */
    public function getLocation(): Location|null
    {
        return $this->location;
    }

    /**
     * Set New location content of the message; pass null to stop sharing the live location.
     */
    public function setLocation(Location|null $location): self
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get New time relative to the message send date, for which the location can be updated, in seconds. If 0x7FFFFFFF specified, then the location can be updated forever..
     */
    public function getLivePeriod(): int
    {
        return $this->livePeriod;
    }

    /**
     * Set New time relative to the message send date, for which the location can be updated, in seconds. If 0x7FFFFFFF specified, then the location can be updated forever..
     */
    public function setLivePeriod(int $livePeriod): self
    {
        $this->livePeriod = $livePeriod;

        return $this;
    }

    /**
     * Get The new direction in which the location moves, in degrees; 1-360. Pass 0 if unknown.
     */
    public function getHeading(): int
    {
        return $this->heading;
    }

    /**
     * Set The new direction in which the location moves, in degrees; 1-360. Pass 0 if unknown.
     */
    public function setHeading(int $heading): self
    {
        $this->heading = $heading;

        return $this;
    }

    /**
     * Get The new maximum distance for proximity alerts, in meters (0-100000). Pass 0 if the notification is disabled.
     */
    public function getProximityAlertRadius(): int
    {
        return $this->proximityAlertRadius;
    }

    /**
     * Set The new maximum distance for proximity alerts, in meters (0-100000). Pass 0 if the notification is disabled.
     */
    public function setProximityAlertRadius(int $proximityAlertRadius): self
    {
        $this->proximityAlertRadius = $proximityAlertRadius;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'editMessageLiveLocation',
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
