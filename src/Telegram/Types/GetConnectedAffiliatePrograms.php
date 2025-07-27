<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns affiliate programs that were connected to the given affiliate.
 */
class GetConnectedAffiliatePrograms extends ConnectedAffiliatePrograms implements \JsonSerializable
{
    public function __construct(
        /** The affiliate to which the affiliate program were connected */
        #[SerializedName('affiliate')]
        private AffiliateType|null $affiliate = null,
        /** Offset of the first affiliate program to return as received from the previous request; use empty string to get the first chunk of results */
        #[SerializedName('offset')]
        private string $offset,
        /** The maximum number of affiliate programs to return */
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    /**
     * Get The affiliate to which the affiliate program were connected.
     */
    public function getAffiliate(): AffiliateType|null
    {
        return $this->affiliate;
    }

    /**
     * Set The affiliate to which the affiliate program were connected.
     */
    public function setAffiliate(AffiliateType|null $affiliate): self
    {
        $this->affiliate = $affiliate;

        return $this;
    }

    /**
     * Get Offset of the first affiliate program to return as received from the previous request; use empty string to get the first chunk of results.
     */
    public function getOffset(): string
    {
        return $this->offset;
    }

    /**
     * Set Offset of the first affiliate program to return as received from the previous request; use empty string to get the first chunk of results.
     */
    public function setOffset(string $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * Get The maximum number of affiliate programs to return.
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of affiliate programs to return.
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getConnectedAffiliatePrograms',
            'affiliate' => $this->getAffiliate(),
            'offset' => $this->getOffset(),
            'limit' => $this->getLimit(),
        ];
    }
}
