<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sets the result of a shipping query; for bots only @shipping_query_id Identifier of the shipping query @shipping_options Available shipping options @error_message An error message, empty on success
 */
class AnswerShippingQuery extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('shipping_query_id')]
        private int $shippingQueryId,
        #[SerializedName('shipping_options')]
        private array|null $shippingOptions = null,
        #[SerializedName('error_message')]
        private string $errorMessage,
    ) {
    }

    public function getShippingQueryId(): int
    {
        return $this->shippingQueryId;
    }

    public function setShippingQueryId(int $shippingQueryId): self
    {
        $this->shippingQueryId = $shippingQueryId;

        return $this;
    }

    public function getShippingOptions(): array|null
    {
        return $this->shippingOptions;
    }

    public function setShippingOptions(array|null $shippingOptions): self
    {
        $this->shippingOptions = $shippingOptions;

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
            '@type' => 'answerShippingQuery',
            'shipping_query_id' => $this->getShippingQueryId(),
            'shipping_options' => $this->getShippingOptions(),
            'error_message' => $this->getErrorMessage(),
        ];
    }
}
