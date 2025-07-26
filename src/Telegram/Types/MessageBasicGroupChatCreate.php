<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A newly created basic group @title Title of the basic group @member_user_ids User identifiers of members in the basic group
 */
class MessageBasicGroupChatCreate extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('title')]
        private string $title,
        #[SerializedName('member_user_ids')]
        private array|null $memberUserIds = null,
    ) {
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
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
            '@type' => 'messageBasicGroupChatCreate',
            'title' => $this->getTitle(),
            'member_user_ids' => $this->getMemberUserIds(),
        ];
    }
}
