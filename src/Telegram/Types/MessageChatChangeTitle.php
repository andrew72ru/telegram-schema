<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An updated chat title @title New chat title
 */
class MessageChatChangeTitle extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('title')]
        private string $title,
    ) {
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageChatChangeTitle',
            'title' => $this->getTitle(),
        ];
    }
}
