<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents an available reaction @var Type of the reaction @needs_premium True, if Telegram Premium is needed to send the reaction.
 */
class AvailableReaction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('type')]
        private ReactionType|null $type = null,
        #[SerializedName('needs_premium')]
        private bool $needsPremium,
    ) {
    }

    public function getType(): ReactionType|null
    {
        return $this->type;
    }

    public function setType(ReactionType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getNeedsPremium(): bool
    {
        return $this->needsPremium;
    }

    public function setNeedsPremium(bool $needsPremium): self
    {
        $this->needsPremium = $needsPremium;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'availableReaction',
            'type' => $this->getType(),
            'needs_premium' => $this->getNeedsPremium(),
        ];
    }
}
