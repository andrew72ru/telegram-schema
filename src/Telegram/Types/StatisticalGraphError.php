<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An error message to be shown to the user instead of the graph @error_message The error message
 */
class StatisticalGraphError extends StatisticalGraph implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('error_message')]
        private string $errorMessage,
    ) {
    }

    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    public function setErrorMessage(string $errorMessage): self
    {
        $this->errorMessage = $errorMessage;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'statisticalGraphError',
            'error_message' => $this->getErrorMessage(),
        ];
    }
}
