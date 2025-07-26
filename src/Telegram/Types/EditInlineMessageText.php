<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Edits the text of an inline text or game message sent via a bot; for bots only
 */
class EditInlineMessageText extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Inline message identifier */
        #[SerializedName('inline_message_id')]
        private string $inlineMessageId,
        /** The new message reply markup; pass null if none */
        #[SerializedName('reply_markup')]
        private ReplyMarkup|null $replyMarkup = null,
        /** New text content of the message. Must be of type inputMessageText */
        #[SerializedName('input_message_content')]
        private InputMessageContent|null $inputMessageContent = null,
    ) {
    }

    /**
     * Get Inline message identifier
     */
    public function getInlineMessageId(): string
    {
        return $this->inlineMessageId;
    }

    /**
     * Set Inline message identifier
     */
    public function setInlineMessageId(string $inlineMessageId): self
    {
        $this->inlineMessageId = $inlineMessageId;

        return $this;
    }

    /**
     * Get The new message reply markup; pass null if none
     */
    public function getReplyMarkup(): ReplyMarkup|null
    {
        return $this->replyMarkup;
    }

    /**
     * Set The new message reply markup; pass null if none
     */
    public function setReplyMarkup(ReplyMarkup|null $replyMarkup): self
    {
        $this->replyMarkup = $replyMarkup;

        return $this;
    }

    /**
     * Get New text content of the message. Must be of type inputMessageText
     */
    public function getInputMessageContent(): InputMessageContent|null
    {
        return $this->inputMessageContent;
    }

    /**
     * Set New text content of the message. Must be of type inputMessageText
     */
    public function setInputMessageContent(InputMessageContent|null $inputMessageContent): self
    {
        $this->inputMessageContent = $inputMessageContent;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'editInlineMessageText',
            'inline_message_id' => $this->getInlineMessageId(),
            'reply_markup' => $this->getReplyMarkup(),
            'input_message_content' => $this->getInputMessageContent(),
        ];
    }
}
