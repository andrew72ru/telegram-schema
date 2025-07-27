<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains active notifications that were shown on previous application launches. This update is sent only if the message database is used. In that case it comes once before any updateNotification and updateNotificationGroup update @groups Lists of active notification groups.
 */
class UpdateActiveNotifications extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('groups')]
        private array|null $groups = null,
    ) {
    }

    public function getGroups(): array|null
    {
        return $this->groups;
    }

    public function setGroups(array|null $groups): self
    {
        $this->groups = $groups;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateActiveNotifications',
            'groups' => $this->getGroups(),
        ];
    }
}
