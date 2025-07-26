<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns only messages in basic group and supergroup chats
 */
class SearchMessagesChatTypeFilterGroup extends SearchMessagesChatTypeFilter implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchMessagesChatTypeFilterGroup',
        ];
    }
}
