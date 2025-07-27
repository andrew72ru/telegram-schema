<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Edits a business chat link of the current account. Requires Telegram Business subscription. Returns the edited link.
 */
class EditBusinessChatLink extends BusinessChatLink implements \JsonSerializable
{
    public function __construct(
        /** The link to edit */
        #[SerializedName('link')]
        private string $link,
        /** New description of the link */
        #[SerializedName('link_info')]
        private InputBusinessChatLink|null $linkInfo = null,
    ) {
    }

    /**
     * Get The link to edit.
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * Set The link to edit.
     */
    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get New description of the link.
     */
    public function getLinkInfo(): InputBusinessChatLink|null
    {
        return $this->linkInfo;
    }

    /**
     * Set New description of the link.
     */
    public function setLinkInfo(InputBusinessChatLink|null $linkInfo): self
    {
        $this->linkInfo = $linkInfo;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'editBusinessChatLink',
            'link' => $this->getLink(),
            'link_info' => $this->getLinkInfo(),
        ];
    }
}
