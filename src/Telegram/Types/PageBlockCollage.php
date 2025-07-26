<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A collage
 */
class PageBlockCollage extends PageBlock implements \JsonSerializable
{
    public function __construct(
        /** Collage item contents */
        #[SerializedName('page_blocks')]
        private array|null $pageBlocks = null,
        /** Block caption */
        #[SerializedName('caption')]
        private PageBlockCaption|null $caption = null,
    ) {
    }

    /**
     * Get Collage item contents
     */
    public function getPageBlocks(): array|null
    {
        return $this->pageBlocks;
    }

    /**
     * Set Collage item contents
     */
    public function setPageBlocks(array|null $pageBlocks): self
    {
        $this->pageBlocks = $pageBlocks;

        return $this;
    }

    /**
     * Get Block caption
     */
    public function getCaption(): PageBlockCaption|null
    {
        return $this->caption;
    }

    /**
     * Set Block caption
     */
    public function setCaption(PageBlockCaption|null $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pageBlockCollage',
            'page_blocks' => $this->getPageBlocks(),
            'caption' => $this->getCaption(),
        ];
    }
}
