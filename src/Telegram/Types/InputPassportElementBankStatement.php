<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A Telegram Passport element to be saved containing the user's bank statement @bank_statement The bank statement to be saved.
 */
class InputPassportElementBankStatement extends InputPassportElement implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('bank_statement')]
        private InputPersonalDocument|null $bankStatement = null,
    ) {
    }

    public function getBankStatement(): InputPersonalDocument|null
    {
        return $this->bankStatement;
    }

    public function setBankStatement(InputPersonalDocument|null $bankStatement): self
    {
        $this->bankStatement = $bankStatement;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputPassportElementBankStatement',
            'bank_statement' => $this->getBankStatement(),
        ];
    }
}
