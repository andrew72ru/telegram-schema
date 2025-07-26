<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns users banned from the supergroup or channel; can be used only by administrators @query Query to search for
 */
class SupergroupMembersFilterBanned extends SupergroupMembersFilter implements \JsonSerializable
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
            '@type' => 'supergroupMembersFilterBanned',
            'query' => $this->getQuery(),
        ];
    }
}
