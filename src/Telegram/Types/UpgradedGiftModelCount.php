<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a model of an upgraded gift with the number of gifts found @model The model @total_count Total number of gifts with the model
 */
class UpgradedGiftModelCount implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('model')]
        private UpgradedGiftModel|null $model = null,
        #[SerializedName('total_count')]
        private int $totalCount,
    ) {
    }

    public function getModel(): UpgradedGiftModel|null
    {
        return $this->model;
    }

    public function setModel(UpgradedGiftModel|null $model): self
    {
        $this->model = $model;

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
            '@type' => 'upgradedGiftModelCount',
            'model' => $this->getModel(),
            'total_count' => $this->getTotalCount(),
        ];
    }
}
