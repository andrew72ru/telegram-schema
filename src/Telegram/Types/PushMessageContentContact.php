<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message with a user contact @name Contact's name @is_pinned True, if the message is a pinned message with the specified content
 */
class PushMessageContentContact extends PushMessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('name')]
        private string $name,
        #[SerializedName('is_pinned')]
        private bool $isPinned,
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

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function setIsPinned(bool $isPinned): self
    {
        $this->isPinned = $isPinned;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pushMessageContentContact',
            'name' => $this->getName(),
            'is_pinned' => $this->getIsPinned(),
        ];
    }
}
