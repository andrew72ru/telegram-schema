<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sets the result of a pre-checkout query; for bots only @pre_checkout_query_id Identifier of the pre-checkout query @error_message An error message, empty on success.
 */
class AnswerPreCheckoutQuery extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('pre_checkout_query_id')]
        private int $preCheckoutQueryId,
        #[SerializedName('error_message')]
        private string $errorMessage,
    ) {
    }

    public function getPreCheckoutQueryId(): int
    {
        return $this->preCheckoutQueryId;
    }

    public function setPreCheckoutQueryId(int $preCheckoutQueryId): self
    {
        $this->preCheckoutQueryId = $preCheckoutQueryId;

        return $this;
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
            '@type' => 'answerPreCheckoutQuery',
            'pre_checkout_query_id' => $this->getPreCheckoutQueryId(),
            'error_message' => $this->getErrorMessage(),
        ];
    }
}
