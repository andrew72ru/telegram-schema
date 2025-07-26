<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user added the bot to attachment or side menu using toggleBotIsAddedToAttachmentMenu
 */
class BotWriteAccessAllowReasonAddedToAttachmentMenu extends BotWriteAccessAllowReason implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'botWriteAccessAllowReasonAddedToAttachmentMenu',
        ];
    }
}
