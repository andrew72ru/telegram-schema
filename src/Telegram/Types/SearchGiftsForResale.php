<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns upgraded gifts that can be bought from other owners
 */
class SearchGiftsForResale extends GiftsForResale implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the regular gift that was upgraded to a unique gift */
        #[SerializedName('gift_id')]
        private int $giftId,
        /** Order in which the results will be sorted */
        #[SerializedName('order')]
        private GiftForResaleOrder|null $order = null,
        /** Attributes used to filter received gifts. If multiple attributes of the same type are specified, then all of them are allowed. */
        #[SerializedName('attributes')]
        private array|null $attributes = null,
        /** Offset of the first entry to return as received from the previous request with the same order and attributes; use empty string to get the first chunk of results */
        #[SerializedName('offset')]
        private string $offset,
        /** The maximum number of gifts to return */
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    /**
     * Get Identifier of the regular gift that was upgraded to a unique gift
     */
    public function getGiftId(): int
    {
        return $this->giftId;
    }

    /**
     * Set Identifier of the regular gift that was upgraded to a unique gift
     */
    public function setGiftId(int $giftId): self
    {
        $this->giftId = $giftId;

        return $this;
    }

    /**
     * Get Order in which the results will be sorted
     */
    public function getOrder(): GiftForResaleOrder|null
    {
        return $this->order;
    }

    /**
     * Set Order in which the results will be sorted
     */
    public function setOrder(GiftForResaleOrder|null $order): self
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get Attributes used to filter received gifts. If multiple attributes of the same type are specified, then all of them are allowed.
     */
    public function getAttributes(): array|null
    {
        return $this->attributes;
    }

    /**
     * Set Attributes used to filter received gifts. If multiple attributes of the same type are specified, then all of them are allowed.
     */
    public function setAttributes(array|null $attributes): self
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Get Offset of the first entry to return as received from the previous request with the same order and attributes; use empty string to get the first chunk of results
     */
    public function getOffset(): string
    {
        return $this->offset;
    }

    /**
     * Set Offset of the first entry to return as received from the previous request with the same order and attributes; use empty string to get the first chunk of results
     */
    public function setOffset(string $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * Get The maximum number of gifts to return
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of gifts to return
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchGiftsForResale',
            'gift_id' => $this->getGiftId(),
            'order' => $this->getOrder(),
            'attributes' => $this->getAttributes(),
            'offset' => $this->getOffset(),
            'limit' => $this->getLimit(),
        ];
    }
}
