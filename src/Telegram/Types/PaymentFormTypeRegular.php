<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The payment form is for a regular payment.
 */
class PaymentFormTypeRegular extends PaymentFormType implements \JsonSerializable
{
    public function __construct(
        /** Full information about the invoice */
        #[SerializedName('invoice')]
        private Invoice|null $invoice = null,
        /** User identifier of the payment provider bot */
        #[SerializedName('payment_provider_user_id')]
        private int $paymentProviderUserId,
        /** Information about the payment provider */
        #[SerializedName('payment_provider')]
        private PaymentProvider|null $paymentProvider = null,
        /** The list of additional payment options */
        #[SerializedName('additional_payment_options')]
        private array|null $additionalPaymentOptions = null,
        /** Saved server-side order information; may be null */
        #[SerializedName('saved_order_info')]
        private OrderInfo|null $savedOrderInfo = null,
        /** The list of saved payment credentials */
        #[SerializedName('saved_credentials')]
        private array|null $savedCredentials = null,
        /** True, if the user can choose to save credentials */
        #[SerializedName('can_save_credentials')]
        private bool $canSaveCredentials,
        /** True, if the user will be able to save credentials, if sets up a 2-step verification password */
        #[SerializedName('need_password')]
        private bool $needPassword,
    ) {
    }

    /**
     * Get Full information about the invoice.
     */
    public function getInvoice(): Invoice|null
    {
        return $this->invoice;
    }

    /**
     * Set Full information about the invoice.
     */
    public function setInvoice(Invoice|null $invoice): self
    {
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * Get User identifier of the payment provider bot.
     */
    public function getPaymentProviderUserId(): int
    {
        return $this->paymentProviderUserId;
    }

    /**
     * Set User identifier of the payment provider bot.
     */
    public function setPaymentProviderUserId(int $paymentProviderUserId): self
    {
        $this->paymentProviderUserId = $paymentProviderUserId;

        return $this;
    }

    /**
     * Get Information about the payment provider.
     */
    public function getPaymentProvider(): PaymentProvider|null
    {
        return $this->paymentProvider;
    }

    /**
     * Set Information about the payment provider.
     */
    public function setPaymentProvider(PaymentProvider|null $paymentProvider): self
    {
        $this->paymentProvider = $paymentProvider;

        return $this;
    }

    /**
     * Get The list of additional payment options.
     */
    public function getAdditionalPaymentOptions(): array|null
    {
        return $this->additionalPaymentOptions;
    }

    /**
     * Set The list of additional payment options.
     */
    public function setAdditionalPaymentOptions(array|null $additionalPaymentOptions): self
    {
        $this->additionalPaymentOptions = $additionalPaymentOptions;

        return $this;
    }

    /**
     * Get Saved server-side order information; may be null.
     */
    public function getSavedOrderInfo(): OrderInfo|null
    {
        return $this->savedOrderInfo;
    }

    /**
     * Set Saved server-side order information; may be null.
     */
    public function setSavedOrderInfo(OrderInfo|null $savedOrderInfo): self
    {
        $this->savedOrderInfo = $savedOrderInfo;

        return $this;
    }

    /**
     * Get The list of saved payment credentials.
     */
    public function getSavedCredentials(): array|null
    {
        return $this->savedCredentials;
    }

    /**
     * Set The list of saved payment credentials.
     */
    public function setSavedCredentials(array|null $savedCredentials): self
    {
        $this->savedCredentials = $savedCredentials;

        return $this;
    }

    /**
     * Get True, if the user can choose to save credentials.
     */
    public function getCanSaveCredentials(): bool
    {
        return $this->canSaveCredentials;
    }

    /**
     * Set True, if the user can choose to save credentials.
     */
    public function setCanSaveCredentials(bool $canSaveCredentials): self
    {
        $this->canSaveCredentials = $canSaveCredentials;

        return $this;
    }

    /**
     * Get True, if the user will be able to save credentials, if sets up a 2-step verification password.
     */
    public function getNeedPassword(): bool
    {
        return $this->needPassword;
    }

    /**
     * Set True, if the user will be able to save credentials, if sets up a 2-step verification password.
     */
    public function setNeedPassword(bool $needPassword): self
    {
        $this->needPassword = $needPassword;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'paymentFormTypeRegular',
            'invoice' => $this->getInvoice(),
            'payment_provider_user_id' => $this->getPaymentProviderUserId(),
            'payment_provider' => $this->getPaymentProvider(),
            'additional_payment_options' => $this->getAdditionalPaymentOptions(),
            'saved_order_info' => $this->getSavedOrderInfo(),
            'saved_credentials' => $this->getSavedCredentials(),
            'can_save_credentials' => $this->getCanSaveCredentials(),
            'need_password' => $this->getNeedPassword(),
        ];
    }
}
