<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Searches affiliate programs that can be connected to the given affiliate.
 */
class SearchAffiliatePrograms extends FoundAffiliatePrograms implements \JsonSerializable
{
    public function __construct(
        /** The affiliate for which affiliate programs are searched for */
        #[SerializedName('affiliate')]
        private AffiliateType|null $affiliate = null,
        /** Sort order for the results */
        #[SerializedName('sort_order')]
        private AffiliateProgramSortOrder|null $sortOrder = null,
        /** Offset of the first affiliate program to return as received from the previous request; use empty string to get the first chunk of results */
        #[SerializedName('offset')]
        private string $offset,
        /** The maximum number of affiliate programs to return */
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    /**
     * Get The affiliate for which affiliate programs are searched for.
     */
    public function getAffiliate(): AffiliateType|null
    {
        return $this->affiliate;
    }

    /**
     * Set The affiliate for which affiliate programs are searched for.
     */
    public function setAffiliate(AffiliateType|null $affiliate): self
    {
        $this->affiliate = $affiliate;

        return $this;
    }

    /**
     * Get Sort order for the results.
     */
    public function getSortOrder(): AffiliateProgramSortOrder|null
    {
        return $this->sortOrder;
    }

    /**
     * Set Sort order for the results.
     */
    public function setSortOrder(AffiliateProgramSortOrder|null $sortOrder): self
    {
        $this->sortOrder = $sortOrder;

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
            '@type' => 'searchAffiliatePrograms',
            'affiliate' => $this->getAffiliate(),
            'sort_order' => $this->getSortOrder(),
            'offset' => $this->getOffset(),
            'limit' => $this->getLimit(),
        ];
    }
}
