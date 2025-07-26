<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Adds 2-10 messages grouped together into an album to a quick reply shortcut. Currently, only audio, document, photo and video messages can be grouped into an album.
 */
class AddQuickReplyShortcutMessageAlbum extends QuickReplyMessages implements \JsonSerializable
{
    public function __construct(
        /** Name of the target shortcut */
        #[SerializedName('shortcut_name')]
        private string $shortcutName,
        /** Identifier of a quick reply message in the same shortcut to be replied; pass 0 if none */
        #[SerializedName('reply_to_message_id')]
        private int $replyToMessageId,
        /** Contents of messages to be sent. At most 10 messages can be added to an album. All messages must have the same value of show_caption_above_media */
        #[SerializedName('input_message_contents')]
        private array|null $inputMessageContents = null,
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
     * Get Contents of messages to be sent. At most 10 messages can be added to an album. All messages must have the same value of show_caption_above_media
     */
    public function getInputMessageContents(): array|null
    {
        return $this->inputMessageContents;
    }

    /**
     * Set Contents of messages to be sent. At most 10 messages can be added to an album. All messages must have the same value of show_caption_above_media
     */
    public function setInputMessageContents(array|null $inputMessageContents): self
    {
        $this->inputMessageContents = $inputMessageContents;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'addQuickReplyShortcutMessageAlbum',
            'shortcut_name' => $this->getShortcutName(),
            'reply_to_message_id' => $this->getReplyToMessageId(),
            'input_message_contents' => $this->getInputMessageContents(),
        ];
    }
}
