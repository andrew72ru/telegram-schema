<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link with a Telegram Premium gift code. Call checkPremiumGiftCode with the given code to process the link.
 */
class InternalLinkTypePremiumGiftCode extends InternalLinkType implements \JsonSerializable
{
    public function __construct(
        /** The Telegram Premium gift code */
        #[SerializedName('code')]
        private string $code,
    ) {
    }

    /**
     * Get The Telegram Premium gift code
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Set The Telegram Premium gift code
     */
    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypePremiumGiftCode',
            'code' => $this->getCode(),
        ];
    }
}
