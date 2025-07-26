<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes an advertisent to be shown while a video from a message is watched
 */
class VideoMessageAdvertisement implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of this result */
        #[SerializedName('unique_id')]
        private int $uniqueId,
        /** Text of the advertisement */
        #[SerializedName('text')]
        private string $text,
        /** The minimum amount of time the advertisement must be displayed before it can be hidden by the user, in seconds */
        #[SerializedName('min_display_duration')]
        private int $minDisplayDuration,
        /** The maximum amount of time the advertisement must be displayed before it must be automatically hidden, in seconds */
        #[SerializedName('max_display_duration')]
        private int $maxDisplayDuration,
        /** True, if the advertisement can be reported to Telegram moderators through reportVideoMessageAdvertisement */
        #[SerializedName('can_be_reported')]
        private bool $canBeReported,
        /** Information about the sponsor of the advertisement */
        #[SerializedName('sponsor')]
        private AdvertisementSponsor|null $sponsor = null,
        /** Title of the sponsored message */
        #[SerializedName('title')]
        private string $title,
        /** If non-empty, additional information about the sponsored message to be shown along with the message */
        #[SerializedName('additional_info')]
        private string $additionalInfo,
    ) {
    }

    /**
     * Get Unique identifier of this result
     */
    public function getUniqueId(): int
    {
        return $this->uniqueId;
    }

    /**
     * Set Unique identifier of this result
     */
    public function setUniqueId(int $uniqueId): self
    {
        $this->uniqueId = $uniqueId;

        return $this;
    }

    /**
     * Get Text of the advertisement
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * Set Text of the advertisement
     */
    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get The minimum amount of time the advertisement must be displayed before it can be hidden by the user, in seconds
     */
    public function getMinDisplayDuration(): int
    {
        return $this->minDisplayDuration;
    }

    /**
     * Set The minimum amount of time the advertisement must be displayed before it can be hidden by the user, in seconds
     */
    public function setMinDisplayDuration(int $minDisplayDuration): self
    {
        $this->minDisplayDuration = $minDisplayDuration;

        return $this;
    }

    /**
     * Get The maximum amount of time the advertisement must be displayed before it must be automatically hidden, in seconds
     */
    public function getMaxDisplayDuration(): int
    {
        return $this->maxDisplayDuration;
    }

    /**
     * Set The maximum amount of time the advertisement must be displayed before it must be automatically hidden, in seconds
     */
    public function setMaxDisplayDuration(int $maxDisplayDuration): self
    {
        $this->maxDisplayDuration = $maxDisplayDuration;

        return $this;
    }

    /**
     * Get True, if the advertisement can be reported to Telegram moderators through reportVideoMessageAdvertisement
     */
    public function getCanBeReported(): bool
    {
        return $this->canBeReported;
    }

    /**
     * Set True, if the advertisement can be reported to Telegram moderators through reportVideoMessageAdvertisement
     */
    public function setCanBeReported(bool $canBeReported): self
    {
        $this->canBeReported = $canBeReported;

        return $this;
    }

    /**
     * Get Information about the sponsor of the advertisement
     */
    public function getSponsor(): AdvertisementSponsor|null
    {
        return $this->sponsor;
    }

    /**
     * Set Information about the sponsor of the advertisement
     */
    public function setSponsor(AdvertisementSponsor|null $sponsor): self
    {
        $this->sponsor = $sponsor;

        return $this;
    }

    /**
     * Get Title of the sponsored message
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Title of the sponsored message
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get If non-empty, additional information about the sponsored message to be shown along with the message
     */
    public function getAdditionalInfo(): string
    {
        return $this->additionalInfo;
    }

    /**
     * Set If non-empty, additional information about the sponsored message to be shown along with the message
     */
    public function setAdditionalInfo(string $additionalInfo): self
    {
        $this->additionalInfo = $additionalInfo;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'videoMessageAdvertisement',
            'unique_id' => $this->getUniqueId(),
            'text' => $this->getText(),
            'min_display_duration' => $this->getMinDisplayDuration(),
            'max_display_duration' => $this->getMaxDisplayDuration(),
            'can_be_reported' => $this->getCanBeReported(),
            'sponsor' => $this->getSponsor(),
            'title' => $this->getTitle(),
            'additional_info' => $this->getAdditionalInfo(),
        ];
    }
}
