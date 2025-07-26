<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A chat draft has changed. Be aware that the update may come in the currently opened chat but with old content of the draft. If the user has changed the content of the draft, this update mustn't be applied
 */
class UpdateChatDraftMessage extends Update implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** The new draft message; may be null if none */
        #[SerializedName('draft_message')]
        private DraftMessage|null $draftMessage = null,
        /** The new chat positions in the chat lists */
        #[SerializedName('positions')]
        private array|null $positions = null,
    ) {
    }

    /**
     * Get Chat identifier
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get The new draft message; may be null if none
     */
    public function getDraftMessage(): DraftMessage|null
    {
        return $this->draftMessage;
    }

    /**
     * Set The new draft message; may be null if none
     */
    public function setDraftMessage(DraftMessage|null $draftMessage): self
    {
        $this->draftMessage = $draftMessage;

        return $this;
    }

    /**
     * Get The new chat positions in the chat lists
     */
    public function getPositions(): array|null
    {
        return $this->positions;
    }

    /**
     * Set The new chat positions in the chat lists
     */
    public function setPositions(array|null $positions): self
    {
        $this->positions = $positions;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateChatDraftMessage',
            'chat_id' => $this->getChatId(),
            'draft_message' => $this->getDraftMessage(),
            'positions' => $this->getPositions(),
        ];
    }
}
