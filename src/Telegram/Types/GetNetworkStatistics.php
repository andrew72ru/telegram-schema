<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns network data usage statistics. Can be called before authorization @only_current Pass true to get statistics only for the current library launch.
 */
class GetNetworkStatistics extends NetworkStatistics implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('only_current')]
        private bool $onlyCurrent,
    ) {
    }

    public function getOnlyCurrent(): bool
    {
        return $this->onlyCurrent;
    }

    public function setOnlyCurrent(bool $onlyCurrent): self
    {
        $this->onlyCurrent = $onlyCurrent;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getNetworkStatistics',
            'only_current' => $this->getOnlyCurrent(),
        ];
    }
}
