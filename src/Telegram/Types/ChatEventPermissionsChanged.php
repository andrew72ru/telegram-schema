<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The chat permissions were changed @old_permissions Previous chat permissions @new_permissions New chat permissions.
 */
class ChatEventPermissionsChanged extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('old_permissions')]
        private ChatPermissions|null $oldPermissions = null,
        #[SerializedName('new_permissions')]
        private ChatPermissions|null $newPermissions = null,
    ) {
    }

    public function getOldPermissions(): ChatPermissions|null
    {
        return $this->oldPermissions;
    }

    public function setOldPermissions(ChatPermissions|null $oldPermissions): self
    {
        $this->oldPermissions = $oldPermissions;

        return $this;
    }

    public function getNewPermissions(): ChatPermissions|null
    {
        return $this->newPermissions;
    }

    public function setNewPermissions(ChatPermissions|null $newPermissions): self
    {
        $this->newPermissions = $newPermissions;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventPermissionsChanged',
            'old_permissions' => $this->getOldPermissions(),
            'new_permissions' => $this->getNewPermissions(),
        ];
    }
}
