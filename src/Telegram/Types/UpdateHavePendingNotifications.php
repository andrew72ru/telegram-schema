<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes whether there are some pending notification updates. Can be used to prevent application from killing, while there are some pending notifications
 */
class UpdateHavePendingNotifications extends Update implements \JsonSerializable
{
    public function __construct(
        /** True, if there are some delayed notification updates, which will be sent soon */
        #[SerializedName('have_delayed_notifications')]
        private bool $haveDelayedNotifications,
        /** True, if there can be some yet unreceived notifications, which are being fetched from the server */
        #[SerializedName('have_unreceived_notifications')]
        private bool $haveUnreceivedNotifications,
    ) {
    }

    /**
     * Get True, if there are some delayed notification updates, which will be sent soon
     */
    public function getHaveDelayedNotifications(): bool
    {
        return $this->haveDelayedNotifications;
    }

    /**
     * Set True, if there are some delayed notification updates, which will be sent soon
     */
    public function setHaveDelayedNotifications(bool $haveDelayedNotifications): self
    {
        $this->haveDelayedNotifications = $haveDelayedNotifications;

        return $this;
    }

    /**
     * Get True, if there can be some yet unreceived notifications, which are being fetched from the server
     */
    public function getHaveUnreceivedNotifications(): bool
    {
        return $this->haveUnreceivedNotifications;
    }

    /**
     * Set True, if there can be some yet unreceived notifications, which are being fetched from the server
     */
    public function setHaveUnreceivedNotifications(bool $haveUnreceivedNotifications): self
    {
        $this->haveUnreceivedNotifications = $haveUnreceivedNotifications;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateHavePendingNotifications',
            'have_delayed_notifications' => $this->getHaveDelayedNotifications(),
            'have_unreceived_notifications' => $this->getHaveUnreceivedNotifications(),
        ];
    }
}
