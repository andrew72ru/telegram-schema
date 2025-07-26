<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a promotion animation for a Business feature @feature Business feature @animation Promotion animation for the feature
 */
class BusinessFeaturePromotionAnimation implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('feature')]
        private BusinessFeature|null $feature = null,
        #[SerializedName('animation')]
        private Animation|null $animation = null,
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
            '@type' => 'businessFeaturePromotionAnimation',
            'feature' => $this->getFeature(),
            'animation' => $this->getAnimation(),
        ];
    }
}
