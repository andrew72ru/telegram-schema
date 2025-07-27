<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A list of data blocks @items The items of the list.
 */
class PageBlockList extends PageBlock implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('items')]
        private array|null $items = null,
    ) {
    }

    public function getItems(): array|null
    {
        return $this->items;
    }

    public function setItems(array|null $items): self
    {
        $this->items = $items;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pageBlockList',
            'items' => $this->getItems(),
        ];
    }
}
