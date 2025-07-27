<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * New chat members were added @member_user_ids User identifiers of the new members.
 */
class MessageChatAddMembers extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('member_user_ids')]
        private array|null $memberUserIds = null,
    ) {
    }

    public function getMemberUserIds(): array|null
    {
        return $this->memberUserIds;
    }

    public function setMemberUserIds(array|null $memberUserIds): self
    {
        $this->memberUserIds = $memberUserIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageChatAddMembers',
            'member_user_ids' => $this->getMemberUserIds(),
        ];
    }
}
