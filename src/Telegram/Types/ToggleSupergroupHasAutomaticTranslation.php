<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Toggles whether messages are automatically translated in the channel chat; requires can_change_info administrator right in the channel.
 */
class ToggleSupergroupHasAutomaticTranslation extends Ok implements \JsonSerializable
{
    public function __construct(
        /** The identifier of the channel */
        #[SerializedName('supergroup_id')]
        private int $supergroupId,
        /** The new value of has_automatic_translation */
        #[SerializedName('has_automatic_translation')]
        private bool $hasAutomaticTranslation,
    ) {
    }

    /**
     * Get The identifier of the channel
     */
    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    /**
     * Set The identifier of the channel
     */
    public function setSupergroupId(int $supergroupId): self
    {
        $this->supergroupId = $supergroupId;

        return $this;
    }

    /**
     * Get The new value of has_automatic_translation
     */
    public function getHasAutomaticTranslation(): bool
    {
        return $this->hasAutomaticTranslation;
    }

    /**
     * Set The new value of has_automatic_translation
     */
    public function setHasAutomaticTranslation(bool $hasAutomaticTranslation): self
    {
        $this->hasAutomaticTranslation = $hasAutomaticTranslation;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleSupergroupHasAutomaticTranslation',
            'supergroup_id' => $this->getSupergroupId(),
            'has_automatic_translation' => $this->getHasAutomaticTranslation(),
        ];
    }
}
