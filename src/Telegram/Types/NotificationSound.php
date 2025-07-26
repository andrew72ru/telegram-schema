<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a notification sound in MP3 format
 */
class NotificationSound implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the notification sound */
        #[SerializedName('id')]
        private int $id,
        /** Duration of the sound, in seconds */
        #[SerializedName('duration')]
        private int $duration,
        /** Point in time (Unix timestamp) when the sound was created */
        #[SerializedName('date')]
        private int $date,
        /** Title of the notification sound */
        #[SerializedName('title')]
        private string $title,
        /** Arbitrary data, defined while the sound was uploaded */
        #[SerializedName('data')]
        private string $data,
        /** File containing the sound */
        #[SerializedName('sound')]
        private File|null $sound = null,
    ) {
    }

    /**
     * Get Unique identifier of the notification sound
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Unique identifier of the notification sound
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Duration of the sound, in seconds
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * Set Duration of the sound, in seconds
     */
    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the sound was created
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * Set Point in time (Unix timestamp) when the sound was created
     */
    public function setDate(int $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get Title of the notification sound
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Title of the notification sound
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get Arbitrary data, defined while the sound was uploaded
     */
    public function getData(): string
    {
        return $this->data;
    }

    /**
     * Set Arbitrary data, defined while the sound was uploaded
     */
    public function setData(string $data): self
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get File containing the sound
     */
    public function getSound(): File|null
    {
        return $this->sound;
    }

    /**
     * Set File containing the sound
     */
    public function setSound(File|null $sound): self
    {
        $this->sound = $sound;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'notificationSound',
            'id' => $this->getId(),
            'duration' => $this->getDuration(),
            'date' => $this->getDate(),
            'title' => $this->getTitle(),
            'data' => $this->getData(),
            'sound' => $this->getSound(),
        ];
    }
}
