<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A dice message @emoji Emoji on which the dice throw animation is based @clear_draft True, if the chat message draft must be deleted.
 */
class InputMessageDice extends InputMessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('emoji')]
        private string $emoji,
        #[SerializedName('clear_draft')]
        private bool $clearDraft,
    ) {
    }

    public function getEmoji(): string
    {
        return $this->emoji;
    }

    public function setEmoji(string $emoji): self
    {
        $this->emoji = $emoji;

        return $this;
    }

    public function getClearDraft(): bool
    {
        return $this->clearDraft;
    }

    public function setClearDraft(bool $clearDraft): self
    {
        $this->clearDraft = $clearDraft;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputMessageDice',
            'emoji' => $this->getEmoji(),
            'clear_draft' => $this->getClearDraft(),
        ];
    }
}
