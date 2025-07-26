<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Adds a message to a quick reply shortcut. If shortcut doesn't exist and there are less than getOption("quick_reply_shortcut_count_max") shortcuts, then a new shortcut is created.
 */
class AddQuickReplyShortcutMessage extends QuickReplyMessage implements \JsonSerializable
{
    public function __construct(
        /** Name of the target shortcut */
        #[SerializedName('shortcut_name')]
        private string $shortcutName,
        /** Identifier of a quick reply message in the same shortcut to be replied; pass 0 if none */
        #[SerializedName('reply_to_message_id')]
        private int $replyToMessageId,
        /** The content of the message to be added; inputMessagePaidMedia, inputMessageForwarded and inputMessageLocation with live_period aren't supported */
        #[SerializedName('input_message_content')]
        private InputMessageContent|null $inputMessageContent = null,
    ) {
    }

    /**
     * Get Name of the target shortcut
     */
    public function getShortcutName(): string
    {
        return $this->shortcutName;
    }

    /**
     * Set Name of the target shortcut
     */
    public function setShortcutName(string $shortcutName): self
    {
        $this->shortcutName = $shortcutName;

        return $this;
    }

    /**
     * Get Identifier of a quick reply message in the same shortcut to be replied; pass 0 if none
     */
    public function getReplyToMessageId(): int
    {
        return $this->replyToMessageId;
    }

    /**
     * Set Identifier of a quick reply message in the same shortcut to be replied; pass 0 if none
     */
    public function setReplyToMessageId(int $replyToMessageId): self
    {
        $this->replyToMessageId = $replyToMessageId;

        return $this;
    }

    /**
     * Get The content of the message to be added; inputMessagePaidMedia, inputMessageForwarded and inputMessageLocation with live_period aren't supported
     */
    public function getInputMessageContent(): InputMessageContent|null
    {
        return $this->inputMessageContent;
    }

    /**
     * Set The content of the message to be added; inputMessagePaidMedia, inputMessageForwarded and inputMessageLocation with live_period aren't supported
     */
    public function setInputMessageContent(InputMessageContent|null $inputMessageContent): self
    {
        $this->inputMessageContent = $inputMessageContent;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'addQuickReplyShortcutMessage',
            'shortcut_name' => $this->getShortcutName(),
            'reply_to_message_id' => $this->getReplyToMessageId(),
            'input_message_content' => $this->getInputMessageContent(),
        ];
    }
}
