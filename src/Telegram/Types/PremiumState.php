<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains state of Telegram Premium subscription and promotion videos for Premium features
 */
class PremiumState implements \JsonSerializable
{
    public function __construct(
        /** Text description of the state of the current Premium subscription; may be empty if the current user has no Telegram Premium subscription */
        #[SerializedName('state')]
        private FormattedText|null $state = null,
        /** The list of available options for buying Telegram Premium */
        #[SerializedName('payment_options')]
        private array|null $paymentOptions = null,
        /** The list of available promotion animations for Premium features */
        #[SerializedName('animations')]
        private array|null $animations = null,
        /** The list of available promotion animations for Business features */
        #[SerializedName('business_animations')]
        private array|null $businessAnimations = null,
    ) {
    }

    /**
     * Get Text description of the state of the current Premium subscription; may be empty if the current user has no Telegram Premium subscription
     */
    public function getState(): FormattedText|null
    {
        return $this->state;
    }

    /**
     * Set Text description of the state of the current Premium subscription; may be empty if the current user has no Telegram Premium subscription
     */
    public function setState(FormattedText|null $state): self
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get The list of available options for buying Telegram Premium
     */
    public function getPaymentOptions(): array|null
    {
        return $this->paymentOptions;
    }

    /**
     * Set The list of available options for buying Telegram Premium
     */
    public function setPaymentOptions(array|null $paymentOptions): self
    {
        $this->paymentOptions = $paymentOptions;

        return $this;
    }

    /**
     * Get The list of available promotion animations for Premium features
     */
    public function getAnimations(): array|null
    {
        return $this->animations;
    }

    /**
     * Set The list of available promotion animations for Premium features
     */
    public function setAnimations(array|null $animations): self
    {
        $this->animations = $animations;

        return $this;
    }

    /**
     * Get The list of available promotion animations for Business features
     */
    public function getBusinessAnimations(): array|null
    {
        return $this->businessAnimations;
    }

    /**
     * Set The list of available promotion animations for Business features
     */
    public function setBusinessAnimations(array|null $businessAnimations): self
    {
        $this->businessAnimations = $businessAnimations;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumState',
            'state' => $this->getState(),
            'payment_options' => $this->getPaymentOptions(),
            'animations' => $this->getAnimations(),
            'business_animations' => $this->getBusinessAnimations(),
        ];
    }
}
