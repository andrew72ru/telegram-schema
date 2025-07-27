<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Forwards previously sent messages. Returns the forwarded messages in the same order as the message identifiers passed in message_ids. If a message can't be forwarded, null will be returned instead of the message.
 */
class ForwardMessages extends Messages implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat to which to forward messages */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** If not 0, the message thread identifier in which the message will be sent; for forum threads only */
        #[SerializedName('message_thread_id')]
        private int $messageThreadId,
        /** Identifier of the chat from which to forward messages */
        #[SerializedName('from_chat_id')]
        private int $fromChatId,
        /** Identifiers of the messages to forward. Message identifiers must be in a strictly increasing order. At most 100 messages can be forwarded simultaneously. A message can be forwarded only if messageProperties.can_be_forwarded */
        #[SerializedName('message_ids')]
        private array|null $messageIds = null,
        /** Options to be used to send the messages; pass null to use default options */
        #[SerializedName('options')]
        private MessageSendOptions|null $options = null,
        /** Pass true to copy content of the messages without reference to the original sender. Always true if the messages are forwarded to a secret chat or are local. */
        #[SerializedName('send_copy')]
        private bool $sendCopy,
        /** Pass true to remove media captions of message copies. Ignored if send_copy is false */
        #[SerializedName('remove_caption')]
        private bool $removeCaption,
    ) {
    }

    /**
     * Get Identifier of the chat to which to forward messages.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat to which to forward messages.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get If not 0, the message thread identifier in which the message will be sent; for forum threads only.
     */
    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    /**
     * Set If not 0, the message thread identifier in which the message will be sent; for forum threads only.
     */
    public function setMessageThreadId(int $messageThreadId): self
    {
        $this->messageThreadId = $messageThreadId;

        return $this;
    }

    /**
     * Get Identifier of the chat from which to forward messages.
     */
    public function getFromChatId(): int
    {
        return $this->fromChatId;
    }

    /**
     * Set Identifier of the chat from which to forward messages.
     */
    public function setFromChatId(int $fromChatId): self
    {
        $this->fromChatId = $fromChatId;

        return $this;
    }

    /**
     * Get Identifiers of the messages to forward. Message identifiers must be in a strictly increasing order. At most 100 messages can be forwarded simultaneously. A message can be forwarded only if messageProperties.can_be_forwarded.
     */
    public function getMessageIds(): array|null
    {
        return $this->messageIds;
    }

    /**
     * Set Identifiers of the messages to forward. Message identifiers must be in a strictly increasing order. At most 100 messages can be forwarded simultaneously. A message can be forwarded only if messageProperties.can_be_forwarded.
     */
    public function setMessageIds(array|null $messageIds): self
    {
        $this->messageIds = $messageIds;

        return $this;
    }

    /**
     * Get Options to be used to send the messages; pass null to use default options.
     */
    public function getOptions(): MessageSendOptions|null
    {
        return $this->options;
    }

    /**
     * Set Options to be used to send the messages; pass null to use default options.
     */
    public function setOptions(MessageSendOptions|null $options): self
    {
        $this->options = $options;

        return $this;
    }

    /**
     * Get Pass true to copy content of the messages without reference to the original sender. Always true if the messages are forwarded to a secret chat or are local..
     */
    public function getSendCopy(): bool
    {
        return $this->sendCopy;
    }

    /**
     * Set Pass true to copy content of the messages without reference to the original sender. Always true if the messages are forwarded to a secret chat or are local..
     */
    public function setSendCopy(bool $sendCopy): self
    {
        $this->sendCopy = $sendCopy;

        return $this;
    }

    /**
     * Get Pass true to remove media captions of message copies. Ignored if send_copy is false.
     */
    public function getRemoveCaption(): bool
    {
        return $this->removeCaption;
    }

    /**
     * Set Pass true to remove media captions of message copies. Ignored if send_copy is false.
     */
    public function setRemoveCaption(bool $removeCaption): self
    {
        $this->removeCaption = $removeCaption;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'forwardMessages',
            'chat_id' => $this->getChatId(),
            'message_thread_id' => $this->getMessageThreadId(),
            'from_chat_id' => $this->getFromChatId(),
            'message_ids' => $this->getMessageIds(),
            'options' => $this->getOptions(),
            'send_copy' => $this->getSendCopy(),
            'remove_caption' => $this->getRemoveCaption(),
        ];
    }
}
