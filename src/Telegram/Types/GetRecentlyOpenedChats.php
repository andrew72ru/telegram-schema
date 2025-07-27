<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns recently opened chats. This is an offline method. Returns chats in the order of last opening @limit The maximum number of chats to be returned.
 */
class GetRecentlyOpenedChats extends Chats implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getRecentlyOpenedChats',
            'limit' => $this->getLimit(),
        ];
    }
}
