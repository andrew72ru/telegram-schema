<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Order information.
 */
class OrderInfo implements \JsonSerializable
{
    public function __construct(
        /** Name of the user */
        #[SerializedName('name')]
        private string $name,
        /** Phone number of the user */
        #[SerializedName('phone_number')]
        private string $phoneNumber,
        /** Email address of the user */
        #[SerializedName('email_address')]
        private string $emailAddress,
        /** Shipping address for this order; may be null */
        #[SerializedName('shipping_address')]
        private Address|null $shippingAddress = null,
    ) {
    }

    /**
     * Get Name of the user.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set Name of the user.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get Phone number of the user.
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * Set Phone number of the user.
     */
    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get Email address of the user.
     */
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    /**
     * Set Email address of the user.
     */
    public function setEmailAddress(string $emailAddress): self
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * Get Shipping address for this order; may be null.
     */
    public function getShippingAddress(): Address|null
    {
        return $this->shippingAddress;
    }

    /**
     * Set Shipping address for this order; may be null.
     */
    public function setShippingAddress(Address|null $shippingAddress): self
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'orderInfo',
            'name' => $this->getName(),
            'phone_number' => $this->getPhoneNumber(),
            'email_address' => $this->getEmailAddress(),
            'shipping_address' => $this->getShippingAddress(),
        ];
    }
}
