<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns an existing chat corresponding to a known secret chat @secret_chat_id Secret chat identifier
 */
class CreateSecretChat extends Chat implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('secret_chat_id')]
        private int $secretChatId,
    ) {
    }

    public function getSecretChatId(): int
    {
        return $this->secretChatId;
    }

    public function setSecretChatId(int $secretChatId): self
    {
        $this->secretChatId = $secretChatId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'createSecretChat',
            'secret_chat_id' => $this->getSecretChatId(),
        ];
    }
}
