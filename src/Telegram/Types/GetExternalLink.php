<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns an HTTP URL which can be used to automatically authorize the current user on a website after clicking an HTTP link. Use the method getExternalLinkInfo to find whether a prior user confirmation is needed.
 */
class GetExternalLink extends HttpUrl implements \JsonSerializable
{
    public function __construct(
        /** The HTTP link */
        #[SerializedName('link')]
        private string $link,
        /** Pass true if the current user allowed the bot, returned in getExternalLinkInfo, to send them messages */
        #[SerializedName('allow_write_access')]
        private bool $allowWriteAccess,
    ) {
    }

    /**
     * Get The HTTP link.
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * Set The HTTP link.
     */
    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get Pass true if the current user allowed the bot, returned in getExternalLinkInfo, to send them messages.
     */
    public function getAllowWriteAccess(): bool
    {
        return $this->allowWriteAccess;
    }

    /**
     * Set Pass true if the current user allowed the bot, returned in getExternalLinkInfo, to send them messages.
     */
    public function setAllowWriteAccess(bool $allowWriteAccess): self
    {
        $this->allowWriteAccess = $allowWriteAccess;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getExternalLink',
            'link' => $this->getLink(),
            'allow_write_access' => $this->getAllowWriteAccess(),
        ];
    }
}
