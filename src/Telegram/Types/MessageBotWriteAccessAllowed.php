<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user allowed the bot to send messages @reason The reason why the bot was allowed to write messages.
 */
class MessageBotWriteAccessAllowed extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('reason')]
        private BotWriteAccessAllowReason|null $reason = null,
    ) {
    }

    public function getReason(): BotWriteAccessAllowReason|null
    {
        return $this->reason;
    }

    public function setReason(BotWriteAccessAllowReason|null $reason): self
    {
        $this->reason = $reason;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageBotWriteAccessAllowed',
            'reason' => $this->getReason(),
        ];
    }
}
