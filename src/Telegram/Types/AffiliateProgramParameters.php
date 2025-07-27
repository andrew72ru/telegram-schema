<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes parameters of an affiliate program.
 */
class AffiliateProgramParameters implements \JsonSerializable
{
    public function __construct(
        /** The number of Telegram Stars received by the affiliate for each 1000 Telegram Stars received by the program owner; */
        #[SerializedName('commission_per_mille')]
        private int $commissionPerMille,
        /** Number of months the program will be active; 0-36. If 0, then the program is eternal */
        #[SerializedName('month_count')]
        private int $monthCount,
    ) {
    }

    /**
     * Get The number of Telegram Stars received by the affiliate for each 1000 Telegram Stars received by the program owner;.
     */
    public function getCommissionPerMille(): int
    {
        return $this->commissionPerMille;
    }

    /**
     * Set The number of Telegram Stars received by the affiliate for each 1000 Telegram Stars received by the program owner;.
     */
    public function setCommissionPerMille(int $commissionPerMille): self
    {
        $this->commissionPerMille = $commissionPerMille;

        return $this;
    }

    /**
     * Get Number of months the program will be active; 0-36. If 0, then the program is eternal.
     */
    public function getMonthCount(): int
    {
        return $this->monthCount;
    }

    /**
     * Set Number of months the program will be active; 0-36. If 0, then the program is eternal.
     */
    public function setMonthCount(int $monthCount): self
    {
        $this->monthCount = $monthCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'affiliateProgramParameters',
            'commission_per_mille' => $this->getCommissionPerMille(),
            'month_count' => $this->getMonthCount(),
        ];
    }
}
