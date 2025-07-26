<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The messages were exported from a group chat @title Title of the group chat; may be empty if unrecognized
 */
class MessageFileTypeGroup extends MessageFileType implements \JsonSerializable
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
            '@type' => 'messageFileTypeGroup',
            'title' => $this->getTitle(),
        ];
    }
}
