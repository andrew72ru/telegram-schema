<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Informs TDLib that the user viewed detailed information about a Premium feature on the Premium features screen @feature The viewed premium feature.
 */
class ViewPremiumFeature extends Ok implements \JsonSerializable
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
            '@type' => 'viewPremiumFeature',
            'feature' => $this->getFeature(),
        ];
    }
}
