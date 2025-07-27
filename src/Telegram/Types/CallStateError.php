<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The call has ended with an error @error Error. An error with the code 4005000 will be returned if an outgoing call is missed because of an expired timeout.
 */
class CallStateError extends CallState implements \JsonSerializable
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
            '@type' => 'callStateError',
            'error' => $this->getError(),
        ];
    }
}
