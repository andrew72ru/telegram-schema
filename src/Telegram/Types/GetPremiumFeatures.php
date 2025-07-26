<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about features, available to Premium users @source Source of the request; pass null if the method is called from some non-standard source
 */
class GetPremiumFeatures extends PremiumFeatures implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('source')]
        private PremiumSource|null $source = null,
    ) {
    }

    public function getSource(): PremiumSource|null
    {
        return $this->source;
    }

    public function setSource(PremiumSource|null $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getPremiumFeatures',
            'source' => $this->getSource(),
        ];
    }
}
