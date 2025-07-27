<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The chat needs to be chosen by the user among chats of the specified types @vars Allowed types for the chat.
 */
class TargetChatChosen extends TargetChat implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('types')]
        private TargetChatTypes|null $types = null,
    ) {
    }

    public function getTypes(): TargetChatTypes|null
    {
        return $this->types;
    }

    public function setTypes(TargetChatTypes|null $types): self
    {
        $this->types = $types;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'targetChatChosen',
            'types' => $this->getTypes(),
        ];
    }
}
