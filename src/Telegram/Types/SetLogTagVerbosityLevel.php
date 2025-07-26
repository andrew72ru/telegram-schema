<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sets the verbosity level for a specified TDLib internal log tag. Can be called synchronously
 */
class SetLogTagVerbosityLevel extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Logging tag to change verbosity level */
        #[SerializedName('tag')]
        private string $tag,
        /** New verbosity level; 1-1024 */
        #[SerializedName('new_verbosity_level')]
        private int $newVerbosityLevel,
    ) {
    }

    /**
     * Get Logging tag to change verbosity level
     */
    public function getTag(): string
    {
        return $this->tag;
    }

    /**
     * Set Logging tag to change verbosity level
     */
    public function setTag(string $tag): self
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get New verbosity level; 1-1024
     */
    public function getNewVerbosityLevel(): int
    {
        return $this->newVerbosityLevel;
    }

    /**
     * Set New verbosity level; 1-1024
     */
    public function setNewVerbosityLevel(int $newVerbosityLevel): self
    {
        $this->newVerbosityLevel = $newVerbosityLevel;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setLogTagVerbosityLevel',
            'tag' => $this->getTag(),
            'new_verbosity_level' => $this->getNewVerbosityLevel(),
        ];
    }
}
