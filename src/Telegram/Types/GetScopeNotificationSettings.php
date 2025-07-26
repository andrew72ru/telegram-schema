<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the notification settings for chats of a given type @scope Types of chats for which to return the notification settings information
 */
class GetScopeNotificationSettings extends ScopeNotificationSettings implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('scope')]
        private NotificationSettingsScope|null $scope = null,
    ) {
    }

    public function getScope(): NotificationSettingsScope|null
    {
        return $this->scope;
    }

    public function setScope(NotificationSettingsScope|null $scope): self
    {
        $this->scope = $scope;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getScopeNotificationSettings',
            'scope' => $this->getScope(),
        ];
    }
}
