<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about features, available to Business users @source Source of the request; pass null if the method is called from settings or some non-standard source
 */
class GetBusinessFeatures extends BusinessFeatures implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('source')]
        private BusinessFeature|null $source = null,
    ) {
    }

    public function getSource(): BusinessFeature|null
    {
        return $this->source;
    }

    public function setSource(BusinessFeature|null $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getBusinessFeatures',
            'source' => $this->getSource(),
        ];
    }
}
