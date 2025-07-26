<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A user tried to use a Business feature @feature The used feature; pass null if none specific feature was used
 */
class PremiumSourceBusinessFeature extends PremiumSource implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('feature')]
        private BusinessFeature|null $feature = null,
    ) {
    }

    public function getFeature(): BusinessFeature|null
    {
        return $this->feature;
    }

    public function setFeature(BusinessFeature|null $feature): self
    {
        $this->feature = $feature;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumSourceBusinessFeature',
            'feature' => $this->getFeature(),
        ];
    }
}
