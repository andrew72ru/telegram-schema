<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Edits the content of a live location in an inline message sent via a bot; for bots only
 */
class EditInlineMessageLiveLocation extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Inline message identifier */
        #[SerializedName('inline_message_id')]
        private string $inlineMessageId,
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
     * Get Inline message identifier
     */
    public function getInlineMessageId(): string
    {
        return $this->inlineMessageId;
    }

    /**
     * Set Inline message identifier
     */
    public function setInlineMessageId(string $inlineMessageId): self
    {
        $this->inlineMessageId = $inlineMessageId;

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
            '@type' => 'editInlineMessageLiveLocation',
            'inline_message_id' => $this->getInlineMessageId(),
            'reply_markup' => $this->getReplyMarkup(),
            'location' => $this->getLocation(),
            'live_period' => $this->getLivePeriod(),
            'heading' => $this->getHeading(),
            'proximity_alert_radius' => $this->getProximityAlertRadius(),
        ];
    }
}
