<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a notification
 */
class Notification implements \JsonSerializable
{
    public function __construct(
        /** Unique persistent identifier of this notification */
        #[SerializedName('id')]
        private int $id,
        /** Notification date */
        #[SerializedName('date')]
        private int $date,
        /** True, if the notification was explicitly sent without sound */
        #[SerializedName('is_silent')]
        private bool $isSilent,
        /** Notification type */
        #[SerializedName('type')]
        private NotificationType|null $type = null,
    ) {
    }

    /**
     * Get Unique persistent identifier of this notification
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Unique persistent identifier of this notification
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Notification date
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * Set Notification date
     */
    public function setDate(int $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get True, if the notification was explicitly sent without sound
     */
    public function getIsSilent(): bool
    {
        return $this->isSilent;
    }

    /**
     * Set True, if the notification was explicitly sent without sound
     */
    public function setIsSilent(bool $isSilent): self
    {
        $this->isSilent = $isSilent;

        return $this;
    }

    /**
     * Get Notification type
     */
    public function getType(): NotificationType|null
    {
        return $this->type;
    }

    /**
     * Set Notification type
     */
    public function setType(NotificationType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'notification',
            'id' => $this->getId(),
            'date' => $this->getDate(),
            'is_silent' => $this->getIsSilent(),
            'type' => $this->getType(),
        ];
    }
}
