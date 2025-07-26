<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Toggles whether the current user will receive a notification when the video chat starts; for scheduled video chats only
 */
class ToggleVideoChatEnabledStartNotification extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Group call identifier */
        #[SerializedName('group_call_id')]
        private int $groupCallId,
        /** New value of the enabled_start_notification setting */
        #[SerializedName('enabled_start_notification')]
        private bool $enabledStartNotification,
    ) {
    }

    /**
     * Get Group call identifier
     */
    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    /**
     * Set Group call identifier
     */
    public function setGroupCallId(int $groupCallId): self
    {
        $this->groupCallId = $groupCallId;

        return $this;
    }

    /**
     * Get New value of the enabled_start_notification setting
     */
    public function getEnabledStartNotification(): bool
    {
        return $this->enabledStartNotification;
    }

    /**
     * Set New value of the enabled_start_notification setting
     */
    public function setEnabledStartNotification(bool $enabledStartNotification): self
    {
        $this->enabledStartNotification = $enabledStartNotification;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleVideoChatEnabledStartNotification',
            'group_call_id' => $this->getGroupCallId(),
            'enabled_start_notification' => $this->getEnabledStartNotification(),
        ];
    }
}
