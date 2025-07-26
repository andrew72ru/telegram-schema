<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sets default administrator rights for adding the bot to channel chats; for bots only @default_channel_administrator_rights Default administrator rights for adding the bot to channels; pass null to remove default rights
 */
class SetDefaultChannelAdministratorRights extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('default_channel_administrator_rights')]
        private ChatAdministratorRights|null $defaultChannelAdministratorRights = null,
    ) {
    }

    public function getDefaultChannelAdministratorRights(): ChatAdministratorRights|null
    {
        return $this->defaultChannelAdministratorRights;
    }

    public function setDefaultChannelAdministratorRights(
        ChatAdministratorRights|null $defaultChannelAdministratorRights,
    ): self {
        $this->defaultChannelAdministratorRights = $defaultChannelAdministratorRights;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setDefaultChannelAdministratorRights',
            'default_channel_administrator_rights' => $this->getDefaultChannelAdministratorRights(),
        ];
    }
}
