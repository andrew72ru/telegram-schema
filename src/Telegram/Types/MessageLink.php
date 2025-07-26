<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains an HTTPS link to a message in a supergroup or channel, or a forum topic @link The link @is_public True, if the link will work for non-members of the chat
 */
class MessageLink implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('link')]
        private string $link,
        #[SerializedName('is_public')]
        private bool $isPublic,
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

    public function getIsPublic(): bool
    {
        return $this->isPublic;
    }

    public function setIsPublic(bool $isPublic): self
    {
        $this->isPublic = $isPublic;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageLink',
            'link' => $this->getLink(),
            'is_public' => $this->getIsPublic(),
        ];
    }
}
