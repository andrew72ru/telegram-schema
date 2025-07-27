<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of chat members @total_count Approximate total number of chat members found @members A list of chat members.
 */
class ChatMembers implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('total_count')]
        private int $totalCount,
        #[SerializedName('members')]
        private array|null $members = null,
    ) {
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function setTotalCount(int $totalCount): self
    {
        $this->totalCount = $totalCount;

        return $this;
    }

    public function getMembers(): array|null
    {
        return $this->members;
    }

    public function setMembers(array|null $members): self
    {
        $this->members = $members;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatMembers',
            'total_count' => $this->getTotalCount(),
            'members' => $this->getMembers(),
        ];
    }
}
