<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a temporary identifier of validated order information, which is stored for one hour, and the available shipping options @order_info_id Temporary identifier of the order information @shipping_options Available shipping options.
 */
class ValidatedOrderInfo implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('order_info_id')]
        private string $orderInfoId,
        #[SerializedName('shipping_options')]
        private array|null $shippingOptions = null,
    ) {
    }

    public function getOrderInfoId(): string
    {
        return $this->orderInfoId;
    }

    public function setOrderInfoId(string $orderInfoId): self
    {
        $this->orderInfoId = $orderInfoId;

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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'validatedOrderInfo',
            'order_info_id' => $this->getOrderInfoId(),
            'shipping_options' => $this->getShippingOptions(),
        ];
    }
}
