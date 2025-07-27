<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the database encryption key. Usually the encryption key is never changed and is stored in some OS keychain @new_encryption_key New encryption key.
 */
class SetDatabaseEncryptionKey extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('new_encryption_key')]
        private string $newEncryptionKey,
    ) {
    }

    public function getNewEncryptionKey(): string
    {
        return $this->newEncryptionKey;
    }

    public function setNewEncryptionKey(string $newEncryptionKey): self
    {
        $this->newEncryptionKey = $newEncryptionKey;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setDatabaseEncryptionKey',
            'new_encryption_key' => $this->getNewEncryptionKey(),
        ];
    }
}
