<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A table
 */
class PageBlockTable extends PageBlock implements \JsonSerializable
{
    public function __construct(
        /** Table caption */
        #[SerializedName('caption')]
        private RichText|null $caption = null,
        /** Table cells */
        #[SerializedName('cells')]
        private array|null $cells = null,
        /** True, if the table is bordered */
        #[SerializedName('is_bordered')]
        private bool $isBordered,
        /** True, if the table is striped */
        #[SerializedName('is_striped')]
        private bool $isStriped,
    ) {
    }

    /**
     * Get Table caption
     */
    public function getCaption(): RichText|null
    {
        return $this->caption;
    }

    /**
     * Set Table caption
     */
    public function setCaption(RichText|null $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Get Table cells
     */
    public function getCells(): array|null
    {
        return $this->cells;
    }

    /**
     * Set Table cells
     */
    public function setCells(array|null $cells): self
    {
        $this->cells = $cells;

        return $this;
    }

    /**
     * Get True, if the table is bordered
     */
    public function getIsBordered(): bool
    {
        return $this->isBordered;
    }

    /**
     * Set True, if the table is bordered
     */
    public function setIsBordered(bool $isBordered): self
    {
        $this->isBordered = $isBordered;

        return $this;
    }

    /**
     * Get True, if the table is striped
     */
    public function getIsStriped(): bool
    {
        return $this->isStriped;
    }

    /**
     * Set True, if the table is striped
     */
    public function setIsStriped(bool $isStriped): self
    {
        $this->isStriped = $isStriped;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pageBlockTable',
            'caption' => $this->getCaption(),
            'cells' => $this->getCells(),
            'is_bordered' => $this->getIsBordered(),
            'is_striped' => $this->getIsStriped(),
        ];
    }
}
