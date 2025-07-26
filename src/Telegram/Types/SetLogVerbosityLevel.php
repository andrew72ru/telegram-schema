<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sets the verbosity level of the internal logging of TDLib. Can be called synchronously
 */
class SetLogVerbosityLevel extends Ok implements \JsonSerializable
{
    public function __construct(
        /** New value of the verbosity level for logging. Value 0 corresponds to fatal errors, value 1 corresponds to errors, value 2 corresponds to warnings and debug warnings, */
        #[SerializedName('new_verbosity_level')]
        private int $newVerbosityLevel,
    ) {
    }

    /**
     * Get New value of the verbosity level for logging. Value 0 corresponds to fatal errors, value 1 corresponds to errors, value 2 corresponds to warnings and debug warnings,
     */
    public function getNewVerbosityLevel(): int
    {
        return $this->newVerbosityLevel;
    }

    /**
     * Set New value of the verbosity level for logging. Value 0 corresponds to fatal errors, value 1 corresponds to errors, value 2 corresponds to warnings and debug warnings,
     */
    public function setNewVerbosityLevel(int $newVerbosityLevel): self
    {
        $this->newVerbosityLevel = $newVerbosityLevel;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setLogVerbosityLevel',
            'new_verbosity_level' => $this->getNewVerbosityLevel(),
        ];
    }
}
