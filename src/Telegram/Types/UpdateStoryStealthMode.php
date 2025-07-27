<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Story stealth mode settings have changed.
 */
class UpdateStoryStealthMode extends Update implements \JsonSerializable
{
    public function __construct(
        /** Point in time (Unix timestamp) until stealth mode is active; 0 if it is disabled */
        #[SerializedName('active_until_date')]
        private int $activeUntilDate,
        /** Point in time (Unix timestamp) when stealth mode can be enabled again; 0 if there is no active cooldown */
        #[SerializedName('cooldown_until_date')]
        private int $cooldownUntilDate,
    ) {
    }

    /**
     * Get Point in time (Unix timestamp) until stealth mode is active; 0 if it is disabled.
     */
    public function getActiveUntilDate(): int
    {
        return $this->activeUntilDate;
    }

    /**
     * Set Point in time (Unix timestamp) until stealth mode is active; 0 if it is disabled.
     */
    public function setActiveUntilDate(int $activeUntilDate): self
    {
        $this->activeUntilDate = $activeUntilDate;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when stealth mode can be enabled again; 0 if there is no active cooldown.
     */
    public function getCooldownUntilDate(): int
    {
        return $this->cooldownUntilDate;
    }

    /**
     * Set Point in time (Unix timestamp) when stealth mode can be enabled again; 0 if there is no active cooldown.
     */
    public function setCooldownUntilDate(int $cooldownUntilDate): self
    {
        $this->cooldownUntilDate = $cooldownUntilDate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateStoryStealthMode',
            'active_until_date' => $this->getActiveUntilDate(),
            'cooldown_until_date' => $this->getCooldownUntilDate(),
        ];
    }
}
