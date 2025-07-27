<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The messages were exported from a private chat @name Name of the other party; may be empty if unrecognized.
 */
class MessageFileTypePrivate extends MessageFileType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('name')]
        private string $name,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageFileTypePrivate',
            'name' => $this->getName(),
        ];
    }
}
