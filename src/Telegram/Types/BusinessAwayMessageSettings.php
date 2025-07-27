<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes settings for messages that are automatically sent by a Telegram Business account when it is away.
 */
class BusinessAwayMessageSettings implements \JsonSerializable
{
    public function __construct(
        /** Unique quick reply shortcut identifier for the away messages */
        #[SerializedName('shortcut_id')]
        private int $shortcutId,
        /** Chosen recipients of the away messages */
        #[SerializedName('recipients')]
        private BusinessRecipients|null $recipients = null,
        /** Settings used to check whether the current user is away */
        #[SerializedName('schedule')]
        private BusinessAwayMessageSchedule|null $schedule = null,
        /** True, if the messages must not be sent if the account was online in the last 10 minutes */
        #[SerializedName('offline_only')]
        private bool $offlineOnly,
    ) {
    }

    /**
     * Get Unique quick reply shortcut identifier for the away messages.
     */
    public function getShortcutId(): int
    {
        return $this->shortcutId;
    }

    /**
     * Set Unique quick reply shortcut identifier for the away messages.
     */
    public function setShortcutId(int $shortcutId): self
    {
        $this->shortcutId = $shortcutId;

        return $this;
    }

    /**
     * Get Chosen recipients of the away messages.
     */
    public function getRecipients(): BusinessRecipients|null
    {
        return $this->recipients;
    }

    /**
     * Set Chosen recipients of the away messages.
     */
    public function setRecipients(BusinessRecipients|null $recipients): self
    {
        $this->recipients = $recipients;

        return $this;
    }

    /**
     * Get Settings used to check whether the current user is away.
     */
    public function getSchedule(): BusinessAwayMessageSchedule|null
    {
        return $this->schedule;
    }

    /**
     * Set Settings used to check whether the current user is away.
     */
    public function setSchedule(BusinessAwayMessageSchedule|null $schedule): self
    {
        $this->schedule = $schedule;

        return $this;
    }

    /**
     * Get True, if the messages must not be sent if the account was online in the last 10 minutes.
     */
    public function getOfflineOnly(): bool
    {
        return $this->offlineOnly;
    }

    /**
     * Set True, if the messages must not be sent if the account was online in the last 10 minutes.
     */
    public function setOfflineOnly(bool $offlineOnly): self
    {
        $this->offlineOnly = $offlineOnly;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'businessAwayMessageSettings',
            'shortcut_id' => $this->getShortcutId(),
            'recipients' => $this->getRecipients(),
            'schedule' => $this->getSchedule(),
            'offline_only' => $this->getOfflineOnly(),
        ];
    }
}
