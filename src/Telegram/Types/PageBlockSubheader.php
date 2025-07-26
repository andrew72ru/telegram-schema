<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A subheader @subheader Subheader
 */
class PageBlockSubheader extends PageBlock implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('subheader')]
        private RichText|null $subheader = null,
    ) {
    }

    public function getSubheader(): RichText|null
    {
        return $this->subheader;
    }

    public function setSubheader(RichText|null $subheader): self
    {
        $this->subheader = $subheader;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pageBlockSubheader',
            'subheader' => $this->getSubheader(),
        ];
    }
}
