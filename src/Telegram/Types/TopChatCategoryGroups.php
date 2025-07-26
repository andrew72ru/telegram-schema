<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A category containing frequently used basic groups and supergroups
 */
class TopChatCategoryGroups extends TopChatCategory implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'topChatCategoryGroups',
        ];
    }
}
