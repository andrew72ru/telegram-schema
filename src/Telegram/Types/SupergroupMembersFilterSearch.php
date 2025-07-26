<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Used to search for supergroup or channel members via a (string) query @query Query to search for
 */
class SupergroupMembersFilterSearch extends SupergroupMembersFilter implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('query')]
        private string $query,
    ) {
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function setQuery(string $query): self
    {
        $this->query = $query;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'supergroupMembersFilterSearch',
            'query' => $this->getQuery(),
        ];
    }
}
