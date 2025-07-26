<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns a confirmation text to be shown to the user before starting message import
 */
class GetMessageImportConfirmationText extends Text implements \JsonSerializable
{
    public function __construct(
        /** Identifier of a chat to which the messages will be imported. It must be an identifier of a private chat with a mutual contact or an identifier of a supergroup chat with can_change_info member right */
        #[SerializedName('chat_id')]
        private int $chatId,
    ) {
    }

    /**
     * Get Identifier of a chat to which the messages will be imported. It must be an identifier of a private chat with a mutual contact or an identifier of a supergroup chat with can_change_info member right
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of a chat to which the messages will be imported. It must be an identifier of a private chat with a mutual contact or an identifier of a supergroup chat with can_change_info member right
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getMessageImportConfirmationText',
            'chat_id' => $this->getChatId(),
        ];
    }
}
