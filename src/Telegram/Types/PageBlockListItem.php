<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes an item of a list page block @label Item label @page_blocks Item blocks.
 */
class PageBlockListItem implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('label')]
        private string $label,
        #[SerializedName('page_blocks')]
        private array|null $pageBlocks = null,
    ) {
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getPageBlocks(): array|null
    {
        return $this->pageBlocks;
    }

    public function setPageBlocks(array|null $pageBlocks): self
    {
        $this->pageBlocks = $pageBlocks;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pageBlockListItem',
            'label' => $this->getLabel(),
            'page_blocks' => $this->getPageBlocks(),
        ];
    }
}
