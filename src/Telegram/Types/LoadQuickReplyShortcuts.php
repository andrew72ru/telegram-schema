<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Loads quick reply shortcuts created by the current user. The loaded data will be sent through updateQuickReplyShortcut and updateQuickReplyShortcuts
 */
class LoadQuickReplyShortcuts extends Ok implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'loadQuickReplyShortcuts',
        ];
    }
}
