<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A basic group (a chat with 0-200 other users) @basic_group_id Basic group identifier.
 */
class ChatTypeBasicGroup extends ChatType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('basic_group_id')]
        private int $basicGroupId,
    ) {
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
            '@type' => 'chatTypeBasicGroup',
            'basic_group_id' => $this->getBasicGroupId(),
        ];
    }
}
