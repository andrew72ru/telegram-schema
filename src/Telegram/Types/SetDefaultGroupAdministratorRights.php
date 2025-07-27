<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sets default administrator rights for adding the bot to basic group and supergroup chats; for bots only @default_group_administrator_rights Default administrator rights for adding the bot to basic group and supergroup chats; pass null to remove default rights.
 */
class SetDefaultGroupAdministratorRights extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('default_group_administrator_rights')]
        private ChatAdministratorRights|null $defaultGroupAdministratorRights = null,
    ) {
    }

    public function getDefaultGroupAdministratorRights(): ChatAdministratorRights|null
    {
        return $this->defaultGroupAdministratorRights;
    }

    public function setDefaultGroupAdministratorRights(
        ChatAdministratorRights|null $defaultGroupAdministratorRights,
    ): self {
        $this->defaultGroupAdministratorRights = $defaultGroupAdministratorRights;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setDefaultGroupAdministratorRights',
            'default_group_administrator_rights' => $this->getDefaultGroupAdministratorRights(),
        ];
    }
}
