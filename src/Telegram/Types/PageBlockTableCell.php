<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a cell of a table
 */
class PageBlockTableCell implements \JsonSerializable
{
    public function __construct(
        /** Cell text; may be null. If the text is null, then the cell must be invisible */
        #[SerializedName('text')]
        private RichText|null $text = null,
        /** True, if it is a header cell */
        #[SerializedName('is_header')]
        private bool $isHeader,
        /** The number of columns the cell spans */
        #[SerializedName('colspan')]
        private int $colspan,
        /** The number of rows the cell spans */
        #[SerializedName('rowspan')]
        private int $rowspan,
        /** Horizontal cell content alignment */
        #[SerializedName('align')]
        private PageBlockHorizontalAlignment|null $align = null,
        /** Vertical cell content alignment */
        #[SerializedName('valign')]
        private PageBlockVerticalAlignment|null $valign = null,
    ) {
    }

    /**
     * Get Cell text; may be null. If the text is null, then the cell must be invisible
     */
    public function getText(): RichText|null
    {
        return $this->text;
    }

    /**
     * Set Cell text; may be null. If the text is null, then the cell must be invisible
     */
    public function setText(RichText|null $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get True, if it is a header cell
     */
    public function getIsHeader(): bool
    {
        return $this->isHeader;
    }

    /**
     * Set True, if it is a header cell
     */
    public function setIsHeader(bool $isHeader): self
    {
        $this->isHeader = $isHeader;

        return $this;
    }

    /**
     * Get The number of columns the cell spans
     */
    public function getColspan(): int
    {
        return $this->colspan;
    }

    /**
     * Set The number of columns the cell spans
     */
    public function setColspan(int $colspan): self
    {
        $this->colspan = $colspan;

        return $this;
    }

    /**
     * Get The number of rows the cell spans
     */
    public function getRowspan(): int
    {
        return $this->rowspan;
    }

    /**
     * Set The number of rows the cell spans
     */
    public function setRowspan(int $rowspan): self
    {
        $this->rowspan = $rowspan;

        return $this;
    }

    /**
     * Get Horizontal cell content alignment
     */
    public function getAlign(): PageBlockHorizontalAlignment|null
    {
        return $this->align;
    }

    /**
     * Set Horizontal cell content alignment
     */
    public function setAlign(PageBlockHorizontalAlignment|null $align): self
    {
        $this->align = $align;

        return $this;
    }

    /**
     * Get Vertical cell content alignment
     */
    public function getValign(): PageBlockVerticalAlignment|null
    {
        return $this->valign;
    }

    /**
     * Set Vertical cell content alignment
     */
    public function setValign(PageBlockVerticalAlignment|null $valign): self
    {
        $this->valign = $valign;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pageBlockTableCell',
            'text' => $this->getText(),
            'is_header' => $this->getIsHeader(),
            'colspan' => $this->getColspan(),
            'rowspan' => $this->getRowspan(),
            'align' => $this->getAlign(),
            'valign' => $this->getValign(),
        ];
    }
}
