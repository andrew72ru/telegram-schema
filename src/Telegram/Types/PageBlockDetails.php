<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A collapsible block.
 */
class PageBlockDetails extends PageBlock implements \JsonSerializable
{
    public function __construct(
        /** Always visible heading for the block */
        #[SerializedName('header')]
        private RichText|null $header = null,
        /** Block contents */
        #[SerializedName('page_blocks')]
        private array|null $pageBlocks = null,
        /** True, if the block is open by default */
        #[SerializedName('is_open')]
        private bool $isOpen,
    ) {
    }

    /**
     * Get Always visible heading for the block.
     */
    public function getHeader(): RichText|null
    {
        return $this->header;
    }

    /**
     * Set Always visible heading for the block.
     */
    public function setHeader(RichText|null $header): self
    {
        $this->header = $header;

        return $this;
    }

    /**
     * Get Block contents.
     */
    public function getPageBlocks(): array|null
    {
        return $this->pageBlocks;
    }

    /**
     * Set Block contents.
     */
    public function setPageBlocks(array|null $pageBlocks): self
    {
        $this->pageBlocks = $pageBlocks;

        return $this;
    }

    /**
     * Get True, if the block is open by default.
     */
    public function getIsOpen(): bool
    {
        return $this->isOpen;
    }

    /**
     * Set True, if the block is open by default.
     */
    public function setIsOpen(bool $isOpen): self
    {
        $this->isOpen = $isOpen;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pageBlockDetails',
            'header' => $this->getHeader(),
            'page_blocks' => $this->getPageBlocks(),
            'is_open' => $this->getIsOpen(),
        ];
    }
}
