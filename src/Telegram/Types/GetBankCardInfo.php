<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about a bank card @bank_card_number The bank card number.
 */
class GetBankCardInfo extends BankCardInfo implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('bank_card_number')]
        private string $bankCardNumber,
    ) {
    }

    public function getBankCardNumber(): string
    {
        return $this->bankCardNumber;
    }

    public function setBankCardNumber(string $bankCardNumber): self
    {
        $this->bankCardNumber = $bankCardNumber;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getBankCardInfo',
            'bank_card_number' => $this->getBankCardNumber(),
        ];
    }
}
