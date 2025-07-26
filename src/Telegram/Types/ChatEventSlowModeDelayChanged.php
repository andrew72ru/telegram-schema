<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The slow_mode_delay setting of a supergroup was changed @old_slow_mode_delay Previous value of slow_mode_delay, in seconds @new_slow_mode_delay New value of slow_mode_delay, in seconds
 */
class ChatEventSlowModeDelayChanged extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('old_slow_mode_delay')]
        private int $oldSlowModeDelay,
        #[SerializedName('new_slow_mode_delay')]
        private int $newSlowModeDelay,
    ) {
    }

    public function getOldSlowModeDelay(): int
    {
        return $this->oldSlowModeDelay;
    }

    public function setOldSlowModeDelay(int $oldSlowModeDelay): self
    {
        $this->oldSlowModeDelay = $oldSlowModeDelay;

        return $this;
    }

    public function getNewSlowModeDelay(): int
    {
        return $this->newSlowModeDelay;
    }

    public function setNewSlowModeDelay(int $newSlowModeDelay): self
    {
        $this->newSlowModeDelay = $newSlowModeDelay;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventSlowModeDelayChanged',
            'old_slow_mode_delay' => $this->getOldSlowModeDelay(),
            'new_slow_mode_delay' => $this->getNewSlowModeDelay(),
        ];
    }
}
