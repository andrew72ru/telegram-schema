<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes notification settings for reactions @notification_settings The new notification settings for reactions.
 */
class SetReactionNotificationSettings extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('notification_settings')]
        private ReactionNotificationSettings|null $notificationSettings = null,
    ) {
    }

    public function getNotificationSettings(): ReactionNotificationSettings|null
    {
        return $this->notificationSettings;
    }

    public function setNotificationSettings(ReactionNotificationSettings|null $notificationSettings): self
    {
        $this->notificationSettings = $notificationSettings;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setReactionNotificationSettings',
            'notification_settings' => $this->getNotificationSettings(),
        ];
    }
}
