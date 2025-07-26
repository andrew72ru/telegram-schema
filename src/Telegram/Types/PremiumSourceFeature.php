<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A user tried to use a Premium feature @feature The used feature
 */
class PremiumSourceFeature extends PremiumSource implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('feature')]
        private PremiumFeature|null $feature = null,
    ) {
    }

    public function getFeature(): PremiumFeature|null
    {
        return $this->feature;
    }

    public function setFeature(PremiumFeature|null $feature): self
    {
        $this->feature = $feature;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumSourceFeature',
            'feature' => $this->getFeature(),
        ];
    }
}
