<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A full list of available network statistic entries @since_date Point in time (Unix timestamp) from which the statistics are collected @entries Network statistics entries.
 */
class NetworkStatistics implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('since_date')]
        private int $sinceDate,
        #[SerializedName('entries')]
        private array|null $entries = null,
    ) {
    }

    public function getSinceDate(): int
    {
        return $this->sinceDate;
    }

    public function setSinceDate(int $sinceDate): self
    {
        $this->sinceDate = $sinceDate;

        return $this;
    }

    public function getEntries(): array|null
    {
        return $this->entries;
    }

    public function setEntries(array|null $entries): self
    {
        $this->entries = $entries;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'networkStatistics',
            'since_date' => $this->getSinceDate(),
            'entries' => $this->getEntries(),
        ];
    }
}
