<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A Telegram Passport element to be saved containing the user's utility bill @utility_bill The utility bill to be saved
 */
class InputPassportElementUtilityBill extends InputPassportElement implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('utility_bill')]
        private InputPersonalDocument|null $utilityBill = null,
    ) {
    }

    public function getUtilityBill(): InputPersonalDocument|null
    {
        return $this->utilityBill;
    }

    public function setUtilityBill(InputPersonalDocument|null $utilityBill): self
    {
        $this->utilityBill = $utilityBill;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputPassportElementUtilityBill',
            'utility_bill' => $this->getUtilityBill(),
        ];
    }
}
