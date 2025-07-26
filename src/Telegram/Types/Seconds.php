<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a value representing a number of seconds @seconds Number of seconds
 */
class Seconds implements \JsonSerializable
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
            '@type' => 'seconds',
            'seconds' => $this->getSeconds(),
        ];
    }
}
