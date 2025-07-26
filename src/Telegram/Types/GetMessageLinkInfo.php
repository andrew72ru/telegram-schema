<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about a public or private message link. Can be called for any internal link of the type internalLinkTypeMessage @url The message link
 */
class GetMessageLinkInfo extends MessageLinkInfo implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('url')]
        private string $url,
    ) {
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getMessageLinkInfo',
            'url' => $this->getUrl(),
        ];
    }
}
