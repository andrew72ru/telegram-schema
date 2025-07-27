<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to boost a Telegram chat. Call getChatBoostLinkInfo with the given URL to process the link.
 */
class InternalLinkTypeChatBoost extends InternalLinkType implements \JsonSerializable
{
    public function __construct(
        /** URL to be passed to getChatBoostLinkInfo */
        #[SerializedName('url')]
        private string $url,
    ) {
    }

    /**
     * Get URL to be passed to getChatBoostLinkInfo.
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Set URL to be passed to getChatBoostLinkInfo.
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypeChatBoost',
            'url' => $this->getUrl(),
        ];
    }
}
