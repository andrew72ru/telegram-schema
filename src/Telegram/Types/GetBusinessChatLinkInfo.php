<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about a business chat link @link_name Name of the link
 */
class GetBusinessChatLinkInfo extends BusinessChatLinkInfo implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('link_name')]
        private string $linkName,
    ) {
    }

    public function getLinkName(): string
    {
        return $this->linkName;
    }

    public function setLinkName(string $linkName): self
    {
        $this->linkName = $linkName;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getBusinessChatLinkInfo',
            'link_name' => $this->getLinkName(),
        ];
    }
}
