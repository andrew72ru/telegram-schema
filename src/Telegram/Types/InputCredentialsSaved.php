<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Applies if a user chooses some previously saved payment credentials. To use their previously saved credentials, the user must have a valid temporary password @saved_credentials_id Identifier of the saved credentials
 */
class InputCredentialsSaved extends InputCredentials implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('saved_credentials_id')]
        private string $savedCredentialsId,
    ) {
    }

    public function getSavedCredentialsId(): string
    {
        return $this->savedCredentialsId;
    }

    public function setSavedCredentialsId(string $savedCredentialsId): self
    {
        $this->savedCredentialsId = $savedCredentialsId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputCredentialsSaved',
            'saved_credentials_id' => $this->getSavedCredentialsId(),
        ];
    }
}
