<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An object of this type can be returned on every function call, in case of an error
 */
class Error implements \JsonSerializable
{
    public function __construct(
        /** Error code; subject to future changes. If the error code is 406, the error message must not be processed in any way and must not be displayed to the user */
        #[SerializedName('code')]
        private int $code,
        /** Error message; subject to future changes */
        #[SerializedName('message')]
        private string $message,
    ) {
    }

    /**
     * Get Error code; subject to future changes. If the error code is 406, the error message must not be processed in any way and must not be displayed to the user
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * Set Error code; subject to future changes. If the error code is 406, the error message must not be processed in any way and must not be displayed to the user
     */
    public function setCode(int $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get Error message; subject to future changes
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * Set Error message; subject to future changes
     */
    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'error',
            'code' => $this->getCode(),
            'message' => $this->getMessage(),
        ];
    }
}
