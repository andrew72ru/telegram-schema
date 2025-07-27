<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about features, available to Premium users.
 */
class PremiumFeatures implements \JsonSerializable
{
    public function __construct(
        /** The list of available features */
        #[SerializedName('features')]
        private array|null $features = null,
        /** The list of limits, increased for Premium users */
        #[SerializedName('limits')]
        private array|null $limits = null,
        /** An internal link to be opened to pay for Telegram Premium if store payment isn't possible; may be null if direct payment isn't available */
        #[SerializedName('payment_link')]
        private InternalLinkType|null $paymentLink = null,
    ) {
    }

    /**
     * Get The list of available features.
     */
    public function getFeatures(): array|null
    {
        return $this->features;
    }

    /**
     * Set The list of available features.
     */
    public function setFeatures(array|null $features): self
    {
        $this->features = $features;

        return $this;
    }

    /**
     * Get The list of limits, increased for Premium users.
     */
    public function getLimits(): array|null
    {
        return $this->limits;
    }

    /**
     * Set The list of limits, increased for Premium users.
     */
    public function setLimits(array|null $limits): self
    {
        $this->limits = $limits;

        return $this;
    }

    /**
     * Get An internal link to be opened to pay for Telegram Premium if store payment isn't possible; may be null if direct payment isn't available.
     */
    public function getPaymentLink(): InternalLinkType|null
    {
        return $this->paymentLink;
    }

    /**
     * Set An internal link to be opened to pay for Telegram Premium if store payment isn't possible; may be null if direct payment isn't available.
     */
    public function setPaymentLink(InternalLinkType|null $paymentLink): self
    {
        $this->paymentLink = $paymentLink;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumFeatures',
            'features' => $this->getFeatures(),
            'limits' => $this->getLimits(),
            'payment_link' => $this->getPaymentLink(),
        ];
    }
}
