<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The has_protected_content setting of a channel was toggled @has_protected_content New value of has_protected_content
 */
class ChatEventHasProtectedContentToggled extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('has_protected_content')]
        private bool $hasProtectedContent,
    ) {
    }

    public function getHasProtectedContent(): bool
    {
        return $this->hasProtectedContent;
    }

    public function setHasProtectedContent(bool $hasProtectedContent): self
    {
        $this->hasProtectedContent = $hasProtectedContent;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventHasProtectedContentToggled',
            'has_protected_content' => $this->getHasProtectedContent(),
        ];
    }
}
