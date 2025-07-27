<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A supergroup has been created from a basic group @title Title of the newly created supergroup @basic_group_id The identifier of the original basic group.
 */
class MessageChatUpgradeFrom extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('title')]
        private string $title,
        #[SerializedName('basic_group_id')]
        private int $basicGroupId,
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

    public function getBasicGroupId(): int
    {
        return $this->basicGroupId;
    }

    public function setBasicGroupId(int $basicGroupId): self
    {
        $this->basicGroupId = $basicGroupId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageChatUpgradeFrom',
            'title' => $this->getTitle(),
            'basic_group_id' => $this->getBasicGroupId(),
        ];
    }
}
