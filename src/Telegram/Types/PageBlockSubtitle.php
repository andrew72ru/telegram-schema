<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The subtitle of a page @subtitle Subtitle
 */
class PageBlockSubtitle extends PageBlock implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('subtitle')]
        private RichText|null $subtitle = null,
    ) {
    }

    public function getSubtitle(): RichText|null
    {
        return $this->subtitle;
    }

    public function setSubtitle(RichText|null $subtitle): self
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pageBlockSubtitle',
            'subtitle' => $this->getSubtitle(),
        ];
    }
}
