<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns an HTML code for embedding the message. Available only if messageProperties.can_get_embedding_code.
 */
class GetMessageEmbeddingCode extends Text implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat to which the message belongs */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the message */
        #[SerializedName('message_id')]
        private int $messageId,
        /** Pass true to return an HTML code for embedding of the whole media album */
        #[SerializedName('for_album')]
        private bool $forAlbum,
    ) {
    }

    /**
     * Get Identifier of the chat to which the message belongs.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat to which the message belongs.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the message.
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the message.
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get Pass true to return an HTML code for embedding of the whole media album.
     */
    public function getForAlbum(): bool
    {
        return $this->forAlbum;
    }

    /**
     * Set Pass true to return an HTML code for embedding of the whole media album.
     */
    public function setForAlbum(bool $forAlbum): self
    {
        $this->forAlbum = $forAlbum;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getMessageEmbeddingCode',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'for_album' => $this->getForAlbum(),
        ];
    }
}
