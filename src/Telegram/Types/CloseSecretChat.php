<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Closes a secret chat, effectively transferring its state to secretChatStateClosed @secret_chat_id Secret chat identifier.
 */
class CloseSecretChat extends Ok implements \JsonSerializable
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
            '@type' => 'closeSecretChat',
            'secret_chat_id' => $this->getSecretChatId(),
        ];
    }
}
