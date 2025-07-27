<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The chat needs to be open with the provided internal link @see An internal link pointing to the chat.
 */
class TargetChatInternalLink extends TargetChat implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('link')]
        private InternalLinkType|null $link = null,
    ) {
    }

    public function getLink(): InternalLinkType|null
    {
        return $this->link;
    }

    public function setLink(InternalLinkType|null $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'targetChatInternalLink',
            'link' => $this->getLink(),
        ];
    }
}
