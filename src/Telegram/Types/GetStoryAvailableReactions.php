<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns reactions, which can be chosen for a story @row_size Number of reaction per row, 5-25.
 */
class GetStoryAvailableReactions extends AvailableReactions implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('row_size')]
        private int $rowSize,
    ) {
    }

    public function getRowSize(): int
    {
        return $this->rowSize;
    }

    public function setRowSize(int $rowSize): self
    {
        $this->rowSize = $rowSize;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getStoryAvailableReactions',
            'row_size' => $this->getRowSize(),
        ];
    }
}
