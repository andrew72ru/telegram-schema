<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Some data of a secret chat has changed. This update is guaranteed to come before the secret chat identifier is returned to the application @secret_chat New data about the secret chat.
 */
class UpdateSecretChat extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('secret_chat')]
        private SecretChat|null $secretChat = null,
    ) {
    }

    public function getSecretChat(): SecretChat|null
    {
        return $this->secretChat;
    }

    public function setSecretChat(SecretChat|null $secretChat): self
    {
        $this->secretChat = $secretChat;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateSecretChat',
            'secret_chat' => $this->getSecretChat(),
        ];
    }
}
