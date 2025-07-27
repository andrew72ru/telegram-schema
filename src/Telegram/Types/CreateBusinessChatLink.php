<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Creates a business chat link for the current account. Requires Telegram Business subscription. There can be up to getOption("business_chat_link_count_max") links created. Returns the created link.
 */
class CreateBusinessChatLink extends BusinessChatLink implements \JsonSerializable
{
    public function __construct(
        /** Information about the link to create */
        #[SerializedName('link_info')]
        private InputBusinessChatLink|null $linkInfo = null,
    ) {
    }

    /**
     * Get Information about the link to create.
     */
    public function getLinkInfo(): InputBusinessChatLink|null
    {
        return $this->linkInfo;
    }

    /**
     * Set Information about the link to create.
     */
    public function setLinkInfo(InputBusinessChatLink|null $linkInfo): self
    {
        $this->linkInfo = $linkInfo;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'createBusinessChatLink',
            'link_info' => $this->getLinkInfo(),
        ];
    }
}
