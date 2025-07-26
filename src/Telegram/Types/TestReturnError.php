<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the specified error and ensures that the Error object is used; for testing only. Can be called synchronously @error The error to be returned
 */
class TestReturnError extends Error implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('error')]
        private Error|null $error = null,
    ) {
    }

    public function getError(): Error|null
    {
        return $this->error;
    }

    public function setError(Error|null $error): self
    {
        $this->error = $error;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'testReturnError',
            'error' => $this->getError(),
        ];
    }
}
