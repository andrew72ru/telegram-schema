<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The has_aggressive_anti_spam_enabled setting of a supergroup was toggled @has_aggressive_anti_spam_enabled New value of has_aggressive_anti_spam_enabled
 */
class ChatEventHasAggressiveAntiSpamEnabledToggled extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('has_aggressive_anti_spam_enabled')]
        private bool $hasAggressiveAntiSpamEnabled,
    ) {
    }

    public function getHasAggressiveAntiSpamEnabled(): bool
    {
        return $this->hasAggressiveAntiSpamEnabled;
    }

    public function setHasAggressiveAntiSpamEnabled(bool $hasAggressiveAntiSpamEnabled): self
    {
        $this->hasAggressiveAntiSpamEnabled = $hasAggressiveAntiSpamEnabled;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventHasAggressiveAntiSpamEnabledToggled',
            'has_aggressive_anti_spam_enabled' => $this->getHasAggressiveAntiSpamEnabled(),
        ];
    }
}
