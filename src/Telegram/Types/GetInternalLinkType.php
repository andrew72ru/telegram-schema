<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about the type of internal link. Returns a 404 error if the link is not internal. Can be called before authorization @see The link.
 */
class GetInternalLinkType extends InternalLinkType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('link')]
        private string $link,
    ) {
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getInternalLinkType',
            'link' => $this->getLink(),
        ];
    }
}
