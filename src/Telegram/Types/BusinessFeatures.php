<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about features, available to Business user accounts @features The list of available business features
 */
class BusinessFeatures implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('features')]
        private array|null $features = null,
    ) {
    }

    public function getFeatures(): array|null
    {
        return $this->features;
    }

    public function setFeatures(array|null $features): self
    {
        $this->features = $features;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'businessFeatures',
            'features' => $this->getFeatures(),
        ];
    }
}
