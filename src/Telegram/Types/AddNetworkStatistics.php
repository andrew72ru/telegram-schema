<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Adds the specified data to data usage statistics. Can be called before authorization @entry The network statistics entry with the data to be added to statistics
 */
class AddNetworkStatistics extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('entry')]
        private NetworkStatisticsEntry|null $entry = null,
    ) {
    }

    public function getEntry(): NetworkStatisticsEntry|null
    {
        return $this->entry;
    }

    public function setEntry(NetworkStatisticsEntry|null $entry): self
    {
        $this->entry = $entry;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'addNetworkStatistics',
            'entry' => $this->getEntry(),
        ];
    }
}
