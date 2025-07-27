<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The information about interactions with a message has changed @chat_id Chat identifier @message_id Message identifier @interaction_info New information about interactions with the message; may be null.
 */
class UpdateMessageInteractionInfo extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('message_id')]
        private int $messageId,
        #[SerializedName('interaction_info')]
        private MessageInteractionInfo|null $interactionInfo = null,
    ) {
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    public function getInteractionInfo(): MessageInteractionInfo|null
    {
        return $this->interactionInfo;
    }

    public function setInteractionInfo(MessageInteractionInfo|null $interactionInfo): self
    {
        $this->interactionInfo = $interactionInfo;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateMessageInteractionInfo',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'interaction_info' => $this->getInteractionInfo(),
        ];
    }
}
