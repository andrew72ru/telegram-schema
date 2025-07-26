<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes settings for greeting messages that are automatically sent by a Telegram Business account as response to incoming messages in an inactive private chat
 */
class BusinessGreetingMessageSettings implements \JsonSerializable
{
    public function __construct(
        /** Unique quick reply shortcut identifier for the greeting messages */
        #[SerializedName('shortcut_id')]
        private int $shortcutId,
        /** Chosen recipients of the greeting messages */
        #[SerializedName('recipients')]
        private BusinessRecipients|null $recipients = null,
        /** The number of days after which a chat will be considered as inactive; currently, must be on of 7, 14, 21, or 28 */
        #[SerializedName('inactivity_days')]
        private int $inactivityDays,
    ) {
    }

    /**
     * Get Unique quick reply shortcut identifier for the greeting messages
     */
    public function getShortcutId(): int
    {
        return $this->shortcutId;
    }

    /**
     * Set Unique quick reply shortcut identifier for the greeting messages
     */
    public function setShortcutId(int $shortcutId): self
    {
        $this->shortcutId = $shortcutId;

        return $this;
    }

    /**
     * Get Chosen recipients of the greeting messages
     */
    public function getRecipients(): BusinessRecipients|null
    {
        return $this->recipients;
    }

    /**
     * Set Chosen recipients of the greeting messages
     */
    public function setRecipients(BusinessRecipients|null $recipients): self
    {
        $this->recipients = $recipients;

        return $this;
    }

    /**
     * Get The number of days after which a chat will be considered as inactive; currently, must be on of 7, 14, 21, or 28
     */
    public function getInactivityDays(): int
    {
        return $this->inactivityDays;
    }

    /**
     * Set The number of days after which a chat will be considered as inactive; currently, must be on of 7, 14, 21, or 28
     */
    public function setInactivityDays(int $inactivityDays): self
    {
        $this->inactivityDays = $inactivityDays;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'businessGreetingMessageSettings',
            'shortcut_id' => $this->getShortcutId(),
            'recipients' => $this->getRecipients(),
            'inactivity_days' => $this->getInactivityDays(),
        ];
    }
}
