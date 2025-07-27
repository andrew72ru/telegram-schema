<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains database statistics.
 */
class DatabaseStatistics implements \JsonSerializable
{
    public function __construct(
        /** Database statistics in an unspecified human-readable format */
        #[SerializedName('statistics')]
        private string $statistics,
    ) {
    }

    /**
     * Get Database statistics in an unspecified human-readable format.
     */
    public function getStatistics(): string
    {
        return $this->statistics;
    }

    /**
     * Set Database statistics in an unspecified human-readable format.
     */
    public function setStatistics(string $statistics): self
    {
        $this->statistics = $statistics;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'databaseStatistics',
            'statistics' => $this->getStatistics(),
        ];
    }
}
