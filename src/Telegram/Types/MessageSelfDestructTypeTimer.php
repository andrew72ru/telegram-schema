<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The message will be self-destructed in the specified time after its content was opened @self_destruct_time The message's self-destruct time, in seconds; must be between 0 and 60 in private chats
 */
class MessageSelfDestructTypeTimer extends MessageSelfDestructType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('self_destruct_time')]
        private int $selfDestructTime,
    ) {
    }

    public function getSelfDestructTime(): int
    {
        return $this->selfDestructTime;
    }

    public function setSelfDestructTime(int $selfDestructTime): self
    {
        $this->selfDestructTime = $selfDestructTime;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageSelfDestructTypeTimer',
            'self_destruct_time' => $this->getSelfDestructTime(),
        ];
    }
}
