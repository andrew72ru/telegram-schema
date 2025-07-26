<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user accepted bot's request to send messages with allowBotToSendMessages
 */
class BotWriteAccessAllowReasonAcceptedRequest extends BotWriteAccessAllowReason implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'botWriteAccessAllowReasonAcceptedRequest',
        ];
    }
}
