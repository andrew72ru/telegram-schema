<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A General forum topic has been hidden or unhidden @is_hidden True, if the topic was hidden; otherwise, the topic was unhidden.
 */
class MessageForumTopicIsHiddenToggled extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('is_hidden')]
        private bool $isHidden,
    ) {
    }

    public function getIsHidden(): bool
    {
        return $this->isHidden;
    }

    public function setIsHidden(bool $isHidden): self
    {
        $this->isHidden = $isHidden;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageForumTopicIsHiddenToggled',
            'is_hidden' => $this->getIsHidden(),
        ];
    }
}
