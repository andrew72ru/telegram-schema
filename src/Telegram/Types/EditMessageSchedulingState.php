<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Edits the time when a scheduled message will be sent. Scheduling state of all messages in the same album or forwarded together with the message will be also changed
 */
class EditMessageSchedulingState extends Ok implements \JsonSerializable
{
    public function __construct(
        /** The chat the message belongs to */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the message. Use messageProperties.can_edit_scheduling_state to check whether the message is suitable */
        #[SerializedName('message_id')]
        private int $messageId,
        /** The new message scheduling state; pass null to send the message immediately. Must be null for messages in the state messageSchedulingStateSendWhenVideoProcessed */
        #[SerializedName('scheduling_state')]
        private MessageSchedulingState|null $schedulingState = null,
    ) {
    }

    /**
     * Get The chat the message belongs to
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set The chat the message belongs to
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the message. Use messageProperties.can_edit_scheduling_state to check whether the message is suitable
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the message. Use messageProperties.can_edit_scheduling_state to check whether the message is suitable
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get The new message scheduling state; pass null to send the message immediately. Must be null for messages in the state messageSchedulingStateSendWhenVideoProcessed
     */
    public function getSchedulingState(): MessageSchedulingState|null
    {
        return $this->schedulingState;
    }

    /**
     * Set The new message scheduling state; pass null to send the message immediately. Must be null for messages in the state messageSchedulingStateSendWhenVideoProcessed
     */
    public function setSchedulingState(MessageSchedulingState|null $schedulingState): self
    {
        $this->schedulingState = $schedulingState;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'editMessageSchedulingState',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'scheduling_state' => $this->getSchedulingState(),
        ];
    }
}
