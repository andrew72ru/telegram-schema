<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a list of found users @user_ids Identifiers of the found users @next_offset The offset for the next request. If empty, then there are no more results.
 */
class FoundUsers implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('user_ids')]
        private array|null $userIds = null,
        #[SerializedName('next_offset')]
        private string $nextOffset,
    ) {
    }

    public function getUserIds(): array|null
    {
        return $this->userIds;
    }

    public function setUserIds(array|null $userIds): self
    {
        $this->userIds = $userIds;

        return $this;
    }

    public function getNextOffset(): string
    {
        return $this->nextOffset;
    }

    public function setNextOffset(string $nextOffset): self
    {
        $this->nextOffset = $nextOffset;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'foundUsers',
            'user_ids' => $this->getUserIds(),
            'next_offset' => $this->getNextOffset(),
        ];
    }
}
