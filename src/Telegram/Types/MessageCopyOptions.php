<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Options to be used when a message content is copied without reference to the original sender. Service messages, messages with messageInvoice, messagePaidMedia, messageGiveaway, or messageGiveawayWinners content can't be copied
 */
class MessageCopyOptions implements \JsonSerializable
{
    public function __construct(
        /** True, if content of the message needs to be copied without reference to the original sender. Always true if the message is forwarded to a secret chat or is local. */
        #[SerializedName('send_copy')]
        private bool $sendCopy,
        /** True, if media caption of the message copy needs to be replaced. Ignored if send_copy is false */
        #[SerializedName('replace_caption')]
        private bool $replaceCaption,
        /** New message caption; pass null to copy message without caption. Ignored if replace_caption is false */
        #[SerializedName('new_caption')]
        private FormattedText|null $newCaption = null,
        /** True, if new caption must be shown above the media; otherwise, new caption must be shown below the media; not supported in secret chats. Ignored if replace_caption is false */
        #[SerializedName('new_show_caption_above_media')]
        private bool $newShowCaptionAboveMedia,
    ) {
    }

    /**
     * Get True, if content of the message needs to be copied without reference to the original sender. Always true if the message is forwarded to a secret chat or is local.
     */
    public function getSendCopy(): bool
    {
        return $this->sendCopy;
    }

    /**
     * Set True, if content of the message needs to be copied without reference to the original sender. Always true if the message is forwarded to a secret chat or is local.
     */
    public function setSendCopy(bool $sendCopy): self
    {
        $this->sendCopy = $sendCopy;

        return $this;
    }

    /**
     * Get True, if media caption of the message copy needs to be replaced. Ignored if send_copy is false
     */
    public function getReplaceCaption(): bool
    {
        return $this->replaceCaption;
    }

    /**
     * Set True, if media caption of the message copy needs to be replaced. Ignored if send_copy is false
     */
    public function setReplaceCaption(bool $replaceCaption): self
    {
        $this->replaceCaption = $replaceCaption;

        return $this;
    }

    /**
     * Get New message caption; pass null to copy message without caption. Ignored if replace_caption is false
     */
    public function getNewCaption(): FormattedText|null
    {
        return $this->newCaption;
    }

    /**
     * Set New message caption; pass null to copy message without caption. Ignored if replace_caption is false
     */
    public function setNewCaption(FormattedText|null $newCaption): self
    {
        $this->newCaption = $newCaption;

        return $this;
    }

    /**
     * Get True, if new caption must be shown above the media; otherwise, new caption must be shown below the media; not supported in secret chats. Ignored if replace_caption is false
     */
    public function getNewShowCaptionAboveMedia(): bool
    {
        return $this->newShowCaptionAboveMedia;
    }

    /**
     * Set True, if new caption must be shown above the media; otherwise, new caption must be shown below the media; not supported in secret chats. Ignored if replace_caption is false
     */
    public function setNewShowCaptionAboveMedia(bool $newShowCaptionAboveMedia): self
    {
        $this->newShowCaptionAboveMedia = $newShowCaptionAboveMedia;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageCopyOptions',
            'send_copy' => $this->getSendCopy(),
            'replace_caption' => $this->getReplaceCaption(),
            'new_caption' => $this->getNewCaption(),
            'new_show_caption_above_media' => $this->getNewShowCaptionAboveMedia(),
        ];
    }
}
