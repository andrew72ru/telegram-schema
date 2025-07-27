<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A chat title was edited @title New chat title.
 */
class PushMessageContentChatChangeTitle extends PushMessageContent implements \JsonSerializable
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
            '@type' => 'pushMessageContentChatChangeTitle',
            'title' => $this->getTitle(),
        ];
    }
}
