<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to a Telegram message or a forum topic. Call getMessageLinkInfo with the given URL to process the link,
 */
class InternalLinkTypeMessage extends InternalLinkType implements \JsonSerializable
{
    public function __construct(
        /** URL to be passed to getMessageLinkInfo */
        #[SerializedName('url')]
        private string $url,
    ) {
    }

    /**
     * Get URL to be passed to getMessageLinkInfo
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Set URL to be passed to getMessageLinkInfo
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypeMessage',
            'url' => $this->getUrl(),
        ];
    }
}
