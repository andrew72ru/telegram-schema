<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The parameters of speech recognition without Telegram Premium subscription has changed
 */
class UpdateSpeechRecognitionTrial extends Update implements \JsonSerializable
{
    public function __construct(
        /** The maximum allowed duration of media for speech recognition without Telegram Premium subscription, in seconds */
        #[SerializedName('max_media_duration')]
        private int $maxMediaDuration,
        /** The total number of allowed speech recognitions per week; 0 if none */
        #[SerializedName('weekly_count')]
        private int $weeklyCount,
        /** Number of left speech recognition attempts this week */
        #[SerializedName('left_count')]
        private int $leftCount,
        /** Point in time (Unix timestamp) when the weekly number of tries will reset; 0 if unknown */
        #[SerializedName('next_reset_date')]
        private int $nextResetDate,
    ) {
    }

    /**
     * Get The maximum allowed duration of media for speech recognition without Telegram Premium subscription, in seconds
     */
    public function getMaxMediaDuration(): int
    {
        return $this->maxMediaDuration;
    }

    /**
     * Set The maximum allowed duration of media for speech recognition without Telegram Premium subscription, in seconds
     */
    public function setMaxMediaDuration(int $maxMediaDuration): self
    {
        $this->maxMediaDuration = $maxMediaDuration;

        return $this;
    }

    /**
     * Get The total number of allowed speech recognitions per week; 0 if none
     */
    public function getWeeklyCount(): int
    {
        return $this->weeklyCount;
    }

    /**
     * Set The total number of allowed speech recognitions per week; 0 if none
     */
    public function setWeeklyCount(int $weeklyCount): self
    {
        $this->weeklyCount = $weeklyCount;

        return $this;
    }

    /**
     * Get Number of left speech recognition attempts this week
     */
    public function getLeftCount(): int
    {
        return $this->leftCount;
    }

    /**
     * Set Number of left speech recognition attempts this week
     */
    public function setLeftCount(int $leftCount): self
    {
        $this->leftCount = $leftCount;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the weekly number of tries will reset; 0 if unknown
     */
    public function getNextResetDate(): int
    {
        return $this->nextResetDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the weekly number of tries will reset; 0 if unknown
     */
    public function setNextResetDate(int $nextResetDate): self
    {
        $this->nextResetDate = $nextResetDate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateSpeechRecognitionTrial',
            'max_media_duration' => $this->getMaxMediaDuration(),
            'weekly_count' => $this->getWeeklyCount(),
            'left_count' => $this->getLeftCount(),
            'next_reset_date' => $this->getNextResetDate(),
        ];
    }
}
