<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Adds a message to TDLib internal log. Can be called synchronously.
 */
class AddLogMessage extends Ok implements \JsonSerializable
{
    public function __construct(
        /** The minimum verbosity level needed for the message to be logged; 0-1023 */
        #[SerializedName('verbosity_level')]
        private int $verbosityLevel,
        /** Text of a message to log */
        #[SerializedName('text')]
        private string $text,
    ) {
    }

    /**
     * Get The minimum verbosity level needed for the message to be logged; 0-1023.
     */
    public function getVerbosityLevel(): int
    {
        return $this->verbosityLevel;
    }

    /**
     * Set The minimum verbosity level needed for the message to be logged; 0-1023.
     */
    public function setVerbosityLevel(int $verbosityLevel): self
    {
        $this->verbosityLevel = $verbosityLevel;

        return $this;
    }

    /**
     * Get Text of a message to log.
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * Set Text of a message to log.
     */
    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'addLogMessage',
            'verbosity_level' => $this->getVerbosityLevel(),
            'text' => $this->getText(),
        ];
    }
}
