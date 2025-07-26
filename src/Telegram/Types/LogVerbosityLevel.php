<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a TDLib internal log verbosity level @verbosity_level Log verbosity level
 */
class LogVerbosityLevel implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('verbosity_level')]
        private int $verbosityLevel,
    ) {
    }

    public function getVerbosityLevel(): int
    {
        return $this->verbosityLevel;
    }

    public function setVerbosityLevel(int $verbosityLevel): self
    {
        $this->verbosityLevel = $verbosityLevel;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'logVerbosityLevel',
            'verbosity_level' => $this->getVerbosityLevel(),
        ];
    }
}
