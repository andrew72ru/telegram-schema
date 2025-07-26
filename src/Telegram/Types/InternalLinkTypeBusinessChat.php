<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to a business chat. Use getBusinessChatLinkInfo with the provided link name to get information about the link,
 */
class InternalLinkTypeBusinessChat extends InternalLinkType implements \JsonSerializable
{
    public function __construct(
        /** Name of the link */
        #[SerializedName('link_name')]
        private string $linkName,
    ) {
    }

    /**
     * Get Name of the link
     */
    public function getLinkName(): string
    {
        return $this->linkName;
    }

    /**
     * Set Name of the link
     */
    public function setLinkName(string $linkName): self
    {
        $this->linkName = $linkName;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypeBusinessChat',
            'link_name' => $this->getLinkName(),
        ];
    }
}
