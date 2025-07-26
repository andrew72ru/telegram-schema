<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The has_automatic_translation setting of a channel was toggled @has_automatic_translation New value of has_automatic_translation
 */
class ChatEventAutomaticTranslationToggled extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('has_automatic_translation')]
        private bool $hasAutomaticTranslation,
    ) {
    }

    public function getHasAutomaticTranslation(): bool
    {
        return $this->hasAutomaticTranslation;
    }

    public function setHasAutomaticTranslation(bool $hasAutomaticTranslation): self
    {
        $this->hasAutomaticTranslation = $hasAutomaticTranslation;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventAutomaticTranslationToggled',
            'has_automatic_translation' => $this->getHasAutomaticTranslation(),
        ];
    }
}
