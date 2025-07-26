<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Imports messages exported from another app
 */
class ImportMessages extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of a chat to which the messages will be imported. It must be an identifier of a private chat with a mutual contact or an identifier of a supergroup chat with can_change_info member right */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** File with messages to import. Only inputFileLocal and inputFileGenerated are supported. The file must not be previously uploaded */
        #[SerializedName('message_file')]
        private InputFile|null $messageFile = null,
        /** Files used in the imported messages. Only inputFileLocal and inputFileGenerated are supported. The files must not be previously uploaded */
        #[SerializedName('attached_files')]
        private array|null $attachedFiles = null,
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

    /**
     * Get File with messages to import. Only inputFileLocal and inputFileGenerated are supported. The file must not be previously uploaded
     */
    public function getMessageFile(): InputFile|null
    {
        return $this->messageFile;
    }

    /**
     * Set File with messages to import. Only inputFileLocal and inputFileGenerated are supported. The file must not be previously uploaded
     */
    public function setMessageFile(InputFile|null $messageFile): self
    {
        $this->messageFile = $messageFile;

        return $this;
    }

    /**
     * Get Files used in the imported messages. Only inputFileLocal and inputFileGenerated are supported. The files must not be previously uploaded
     */
    public function getAttachedFiles(): array|null
    {
        return $this->attachedFiles;
    }

    /**
     * Set Files used in the imported messages. Only inputFileLocal and inputFileGenerated are supported. The files must not be previously uploaded
     */
    public function setAttachedFiles(array|null $attachedFiles): self
    {
        $this->attachedFiles = $attachedFiles;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'importMessages',
            'chat_id' => $this->getChatId(),
            'message_file' => $this->getMessageFile(),
            'attached_files' => $this->getAttachedFiles(),
        ];
    }
}
