<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Applies a Telegram Premium gift code @code The code to apply
 */
class ApplyPremiumGiftCode extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('code')]
        private string $code,
    ) {
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'applyPremiumGiftCode',
            'code' => $this->getCode(),
        ];
    }
}
