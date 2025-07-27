<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a promotion animation for a Premium feature @feature Premium feature @animation Promotion animation for the feature.
 */
class PremiumFeaturePromotionAnimation implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('feature')]
        private PremiumFeature|null $feature = null,
        #[SerializedName('animation')]
        private Animation|null $animation = null,
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

    public function getAnimation(): Animation|null
    {
        return $this->animation;
    }

    public function setAnimation(Animation|null $animation): self
    {
        $this->animation = $animation;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumFeaturePromotionAnimation',
            'feature' => $this->getFeature(),
            'animation' => $this->getAnimation(),
        ];
    }
}
