<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Succeeds after a specified amount of time has passed. Can be called before initialization @seconds Number of seconds before the function returns
 */
class SetAlarm extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('seconds')]
        private float $seconds,
    ) {
    }

    public function getSeconds(): float
    {
        return $this->seconds;
    }

    public function setSeconds(float $seconds): self
    {
        $this->seconds = $seconds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setAlarm',
            'seconds' => $this->getSeconds(),
        ];
    }
}
