<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A user opened an internal link of the type internalLinkTypePremiumFeatures @referrer The referrer from the link
 */
class PremiumSourceLink extends PremiumSource implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('referrer')]
        private string $referrer,
    ) {
    }

    public function getReferrer(): string
    {
        return $this->referrer;
    }

    public function setReferrer(string $referrer): self
    {
        $this->referrer = $referrer;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumSourceLink',
            'referrer' => $this->getReferrer(),
        ];
    }
}
