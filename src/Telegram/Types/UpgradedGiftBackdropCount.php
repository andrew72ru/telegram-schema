<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a backdrop of an upgraded gift @backdrop The backdrop @total_count Total number of gifts with the symbol.
 */
class UpgradedGiftBackdropCount implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('backdrop')]
        private UpgradedGiftBackdrop|null $backdrop = null,
        #[SerializedName('total_count')]
        private int $totalCount,
    ) {
    }

    public function getBackdrop(): UpgradedGiftBackdrop|null
    {
        return $this->backdrop;
    }

    public function setBackdrop(UpgradedGiftBackdrop|null $backdrop): self
    {
        $this->backdrop = $backdrop;

        return $this;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function setTotalCount(int $totalCount): self
    {
        $this->totalCount = $totalCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'upgradedGiftBackdropCount',
            'backdrop' => $this->getBackdrop(),
            'total_count' => $this->getTotalCount(),
        ];
    }
}
