<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about an action to be done when the current user clicks an external link. Don't use this method for links from secret chats if link preview is disabled in secret chats @link The link
 */
class GetExternalLinkInfo extends LoginUrlInfo implements \JsonSerializable
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
            '@type' => 'getExternalLinkInfo',
            'link' => $this->getLink(),
        ];
    }
}
