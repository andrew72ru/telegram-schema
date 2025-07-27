<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is an unknown tg: link. Call getDeepLinkInfo to process the link @see Link to be passed to getDeepLinkInfo.
 */
class InternalLinkTypeUnknownDeepLink extends InternalLinkType implements \JsonSerializable
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
            '@type' => 'internalLinkTypeUnknownDeepLink',
            'link' => $this->getLink(),
        ];
    }
}
