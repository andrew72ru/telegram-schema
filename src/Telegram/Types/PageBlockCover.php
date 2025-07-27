<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A page cover.
 */
class PageBlockCover extends PageBlock implements \JsonSerializable
{
    public function __construct(
        /** Cover */
        #[SerializedName('cover')]
        private PageBlock|null $cover = null,
    ) {
    }

    /**
     * Get Cover.
     */
    public function getCover(): PageBlock|null
    {
        return $this->cover;
    }

    /**
     * Set Cover.
     */
    public function setCover(PageBlock|null $cover): self
    {
        $this->cover = $cover;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pageBlockCover',
            'cover' => $this->getCover(),
        ];
    }
}
