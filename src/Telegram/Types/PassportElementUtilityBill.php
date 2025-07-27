<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A Telegram Passport element containing the user's utility bill @utility_bill Utility bill.
 */
class PassportElementUtilityBill extends PassportElement implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('utility_bill')]
        private PersonalDocument|null $utilityBill = null,
    ) {
    }

    public function getUtilityBill(): PersonalDocument|null
    {
        return $this->utilityBill;
    }

    public function setUtilityBill(PersonalDocument|null $utilityBill): self
    {
        $this->utilityBill = $utilityBill;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'passportElementUtilityBill',
            'utility_bill' => $this->getUtilityBill(),
        ];
    }
}
