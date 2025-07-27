<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A header @header Header.
 */
class PageBlockHeader extends PageBlock implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('header')]
        private RichText|null $header = null,
    ) {
    }

    public function getHeader(): RichText|null
    {
        return $this->header;
    }

    public function setHeader(RichText|null $header): self
    {
        $this->header = $header;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pageBlockHeader',
            'header' => $this->getHeader(),
        ];
    }
}
