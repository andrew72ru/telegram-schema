<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns contacts of the user, which are members of the supergroup or channel @query Query to search for.
 */
class SupergroupMembersFilterContacts extends SupergroupMembersFilter implements \JsonSerializable
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
            '@type' => 'supergroupMembersFilterContacts',
            'query' => $this->getQuery(),
        ];
    }
}
