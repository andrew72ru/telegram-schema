<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The is_forum setting of a channel was toggled @is_forum New value of is_forum
 */
class ChatEventIsForumToggled extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('is_forum')]
        private bool $isForum,
    ) {
    }

    public function getIsForum(): bool
    {
        return $this->isForum;
    }

    public function setIsForum(bool $isForum): self
    {
        $this->isForum = $isForum;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventIsForumToggled',
            'is_forum' => $this->getIsForum(),
        ];
    }
}
