<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Edits the message content of a checklist. Returns the edited message after the edit is completed on the server side.
 */
class EditMessageChecklist extends Message implements \JsonSerializable
{
    public function __construct(
        /** The chat the message belongs to */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the message. Use messageProperties.can_be_edited to check whether the message can be edited */
        #[SerializedName('message_id')]
        private int $messageId,
        /** The new message reply markup; pass null if none; for bots only */
        #[SerializedName('reply_markup')]
        private ReplyMarkup|null $replyMarkup = null,
        /** The new checklist. If some tasks were completed, this information will be kept */
        #[SerializedName('checklist')]
        private InputChecklist|null $checklist = null,
    ) {
    }

    /**
     * Get The chat the message belongs to.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set The chat the message belongs to.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the message. Use messageProperties.can_be_edited to check whether the message can be edited.
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the message. Use messageProperties.can_be_edited to check whether the message can be edited.
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get The new message reply markup; pass null if none; for bots only.
     */
    public function getReplyMarkup(): ReplyMarkup|null
    {
        return $this->replyMarkup;
    }

    /**
     * Set The new message reply markup; pass null if none; for bots only.
     */
    public function setReplyMarkup(ReplyMarkup|null $replyMarkup): self
    {
        $this->replyMarkup = $replyMarkup;

        return $this;
    }

    /**
     * Get The new checklist. If some tasks were completed, this information will be kept.
     */
    public function getChecklist(): InputChecklist|null
    {
        return $this->checklist;
    }

    /**
     * Set The new checklist. If some tasks were completed, this information will be kept.
     */
    public function setChecklist(InputChecklist|null $checklist): self
    {
        $this->checklist = $checklist;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'editMessageChecklist',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'reply_markup' => $this->getReplyMarkup(),
            'checklist' => $this->getChecklist(),
        ];
    }
}
