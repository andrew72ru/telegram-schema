<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to the Premium features screen of the application from which the user can subscribe to Telegram Premium. Call getPremiumFeatures with the given referrer to process the link.
 */
class InternalLinkTypePremiumFeatures extends InternalLinkType implements \JsonSerializable
{
    public function __construct(
        /** Referrer specified in the link */
        #[SerializedName('referrer')]
        private string $referrer,
    ) {
    }

    /**
     * Get Referrer specified in the link.
     */
    public function getReferrer(): string
    {
        return $this->referrer;
    }

    /**
     * Set Referrer specified in the link.
     */
    public function setReferrer(string $referrer): self
    {
        $this->referrer = $referrer;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypePremiumFeatures',
            'referrer' => $this->getReferrer(),
        ];
    }
}
