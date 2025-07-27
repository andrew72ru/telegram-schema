<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The chat available reactions were changed @old_available_reactions Previous chat available reactions @new_available_reactions New chat available reactions.
 */
class ChatEventAvailableReactionsChanged extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('old_available_reactions')]
        private ChatAvailableReactions|null $oldAvailableReactions = null,
        #[SerializedName('new_available_reactions')]
        private ChatAvailableReactions|null $newAvailableReactions = null,
    ) {
    }

    public function getOldAvailableReactions(): ChatAvailableReactions|null
    {
        return $this->oldAvailableReactions;
    }

    public function setOldAvailableReactions(ChatAvailableReactions|null $oldAvailableReactions): self
    {
        $this->oldAvailableReactions = $oldAvailableReactions;

        return $this;
    }

    public function getNewAvailableReactions(): ChatAvailableReactions|null
    {
        return $this->newAvailableReactions;
    }

    public function setNewAvailableReactions(ChatAvailableReactions|null $newAvailableReactions): self
    {
        $this->newAvailableReactions = $newAvailableReactions;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventAvailableReactionsChanged',
            'old_available_reactions' => $this->getOldAvailableReactions(),
            'new_available_reactions' => $this->getNewAvailableReactions(),
        ];
    }
}
