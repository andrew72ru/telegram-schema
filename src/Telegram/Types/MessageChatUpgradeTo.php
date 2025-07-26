<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A basic group was upgraded to a supergroup and was deactivated as the result @supergroup_id Identifier of the supergroup to which the basic group was upgraded
 */
class MessageChatUpgradeTo extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('supergroup_id')]
        private int $supergroupId,
    ) {
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function setSupergroupId(int $supergroupId): self
    {
        $this->supergroupId = $supergroupId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageChatUpgradeTo',
            'supergroup_id' => $this->getSupergroupId(),
        ];
    }
}
