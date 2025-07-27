<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Asynchronously edits the text, media or caption of a quick reply message. Use quickReplyMessage.can_be_edited to check whether a message can be edited.
 */
class EditQuickReplyMessage extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the quick reply shortcut with the message */
        #[SerializedName('shortcut_id')]
        private int $shortcutId,
        /** Identifier of the message */
        #[SerializedName('message_id')]
        private int $messageId,
        /** New content of the message. Must be one of the following types: inputMessageAnimation, inputMessageAudio, inputMessageChecklist, inputMessageDocument, inputMessagePhoto, inputMessageText, or inputMessageVideo */
        #[SerializedName('input_message_content')]
        private InputMessageContent|null $inputMessageContent = null,
    ) {
    }

    /**
     * Get Unique identifier of the quick reply shortcut with the message.
     */
    public function getShortcutId(): int
    {
        return $this->shortcutId;
    }

    /**
     * Set Unique identifier of the quick reply shortcut with the message.
     */
    public function setShortcutId(int $shortcutId): self
    {
        $this->shortcutId = $shortcutId;

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
     * Get New content of the message. Must be one of the following types: inputMessageAnimation, inputMessageAudio, inputMessageChecklist, inputMessageDocument, inputMessagePhoto, inputMessageText, or inputMessageVideo.
     */
    public function getInputMessageContent(): InputMessageContent|null
    {
        return $this->inputMessageContent;
    }

    /**
     * Set New content of the message. Must be one of the following types: inputMessageAnimation, inputMessageAudio, inputMessageChecklist, inputMessageDocument, inputMessagePhoto, inputMessageText, or inputMessageVideo.
     */
    public function setInputMessageContent(InputMessageContent|null $inputMessageContent): self
    {
        $this->inputMessageContent = $inputMessageContent;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'editQuickReplyMessage',
            'shortcut_id' => $this->getShortcutId(),
            'message_id' => $this->getMessageId(),
            'input_message_content' => $this->getInputMessageContent(),
        ];
    }
}
