<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A user tried to use a Premium story feature @feature The used feature.
 */
class PremiumSourceStoryFeature extends PremiumSource implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('feature')]
        private PremiumStoryFeature|null $feature = null,
    ) {
    }

    public function getFeature(): PremiumStoryFeature|null
    {
        return $this->feature;
    }

    public function setFeature(PremiumStoryFeature|null $feature): self
    {
        $this->feature = $feature;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumSourceStoryFeature',
            'feature' => $this->getFeature(),
        ];
    }
}
