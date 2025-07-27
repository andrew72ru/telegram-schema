<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Information about the message sent by answerWebAppQuery @inline_message_id Identifier of the sent inline message, if known.
 */
class SentWebAppMessage implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('inline_message_id')]
        private string $inlineMessageId,
    ) {
    }

    public function getInlineMessageId(): string
    {
        return $this->inlineMessageId;
    }

    public function setInlineMessageId(string $inlineMessageId): self
    {
        $this->inlineMessageId = $inlineMessageId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sentWebAppMessage',
            'inline_message_id' => $this->getInlineMessageId(),
        ];
    }
}
