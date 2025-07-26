<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A Telegram Passport element containing the user's bank statement @bank_statement Bank statement
 */
class PassportElementBankStatement extends PassportElement implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('bank_statement')]
        private PersonalDocument|null $bankStatement = null,
    ) {
    }

    public function getBankStatement(): PersonalDocument|null
    {
        return $this->bankStatement;
    }

    public function setBankStatement(PersonalDocument|null $bankStatement): self
    {
        $this->bankStatement = $bankStatement;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'passportElementBankStatement',
            'bank_statement' => $this->getBankStatement(),
        ];
    }
}
