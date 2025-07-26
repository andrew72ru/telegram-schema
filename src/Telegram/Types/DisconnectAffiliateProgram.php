<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Disconnects an affiliate program from the given affiliate and immediately deactivates its referral link. Returns updated information about the disconnected affiliate program
 */
class DisconnectAffiliateProgram extends ConnectedAffiliateProgram implements \JsonSerializable
{
    public function __construct(
        /** The affiliate to which the affiliate program is connected */
        #[SerializedName('affiliate')]
        private AffiliateType|null $affiliate = null,
        /** The referral link of the affiliate program */
        #[SerializedName('url')]
        private string $url,
    ) {
    }

    /**
     * Get The affiliate to which the affiliate program is connected
     */
    public function getAffiliate(): AffiliateType|null
    {
        return $this->affiliate;
    }

    /**
     * Set The affiliate to which the affiliate program is connected
     */
    public function setAffiliate(AffiliateType|null $affiliate): self
    {
        $this->affiliate = $affiliate;

        return $this;
    }

    /**
     * Get The referral link of the affiliate program
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Set The referral link of the affiliate program
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'disconnectAffiliateProgram',
            'affiliate' => $this->getAffiliate(),
            'url' => $this->getUrl(),
        ];
    }
}
