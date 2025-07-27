<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A forwarded message.
 */
class InputMessageForwarded extends InputMessageContent implements \JsonSerializable
{
    public function __construct(
        /** Identifier for the chat this forwarded message came from */
        #[SerializedName('from_chat_id')]
        private int $fromChatId,
        /** Identifier of the message to forward. A message can be forwarded only if messageProperties.can_be_forwarded */
        #[SerializedName('message_id')]
        private int $messageId,
        /** Pass true if a game message is being shared from a launched game; applies only to game messages */
        #[SerializedName('in_game_share')]
        private bool $inGameShare,
        /** Pass true to replace video start timestamp in the forwarded message */
        #[SerializedName('replace_video_start_timestamp')]
        private bool $replaceVideoStartTimestamp,
        /** The new video start timestamp; ignored if replace_video_start_timestamp == false */
        #[SerializedName('new_video_start_timestamp')]
        private int $newVideoStartTimestamp,
        /** Options to be used to copy content of the message without reference to the original sender; pass null to forward the message as usual */
        #[SerializedName('copy_options')]
        private MessageCopyOptions|null $copyOptions = null,
    ) {
    }

    /**
     * Get Identifier for the chat this forwarded message came from.
     */
    public function getFromChatId(): int
    {
        return $this->fromChatId;
    }

    /**
     * Set Identifier for the chat this forwarded message came from.
     */
    public function setFromChatId(int $fromChatId): self
    {
        $this->fromChatId = $fromChatId;

        return $this;
    }

    /**
     * Get Identifier of the message to forward. A message can be forwarded only if messageProperties.can_be_forwarded.
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the message to forward. A message can be forwarded only if messageProperties.can_be_forwarded.
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get Pass true if a game message is being shared from a launched game; applies only to game messages.
     */
    public function getInGameShare(): bool
    {
        return $this->inGameShare;
    }

    /**
     * Set Pass true if a game message is being shared from a launched game; applies only to game messages.
     */
    public function setInGameShare(bool $inGameShare): self
    {
        $this->inGameShare = $inGameShare;

        return $this;
    }

    /**
     * Get Pass true to replace video start timestamp in the forwarded message.
     */
    public function getReplaceVideoStartTimestamp(): bool
    {
        return $this->replaceVideoStartTimestamp;
    }

    /**
     * Set Pass true to replace video start timestamp in the forwarded message.
     */
    public function setReplaceVideoStartTimestamp(bool $replaceVideoStartTimestamp): self
    {
        $this->replaceVideoStartTimestamp = $replaceVideoStartTimestamp;

        return $this;
    }

    /**
     * Get The new video start timestamp; ignored if replace_video_start_timestamp == false.
     */
    public function getNewVideoStartTimestamp(): int
    {
        return $this->newVideoStartTimestamp;
    }

    /**
     * Set The new video start timestamp; ignored if replace_video_start_timestamp == false.
     */
    public function setNewVideoStartTimestamp(int $newVideoStartTimestamp): self
    {
        $this->newVideoStartTimestamp = $newVideoStartTimestamp;

        return $this;
    }

    /**
     * Get Options to be used to copy content of the message without reference to the original sender; pass null to forward the message as usual.
     */
    public function getCopyOptions(): MessageCopyOptions|null
    {
        return $this->copyOptions;
    }

    /**
     * Set Options to be used to copy content of the message without reference to the original sender; pass null to forward the message as usual.
     */
    public function setCopyOptions(MessageCopyOptions|null $copyOptions): self
    {
        $this->copyOptions = $copyOptions;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputMessageForwarded',
            'from_chat_id' => $this->getFromChatId(),
            'message_id' => $this->getMessageId(),
            'in_game_share' => $this->getInGameShare(),
            'replace_video_start_timestamp' => $this->getReplaceVideoStartTimestamp(),
            'new_video_start_timestamp' => $this->getNewVideoStartTimestamp(),
            'copy_options' => $this->getCopyOptions(),
        ];
    }
}
