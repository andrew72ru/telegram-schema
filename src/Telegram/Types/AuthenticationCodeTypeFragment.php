<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A digit-only authentication code is delivered to https://fragment.com. The user must be logged in there via a wallet owning the phone number's NFT.
 */
class AuthenticationCodeTypeFragment extends AuthenticationCodeType implements \JsonSerializable
{
    public function __construct(
        /** URL to open to receive the code */
        #[SerializedName('url')]
        private string $url,
        /** Length of the code */
        #[SerializedName('length')]
        private int $length,
    ) {
    }

    /**
     * Get URL to open to receive the code.
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Set URL to open to receive the code.
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get Length of the code.
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * Set Length of the code.
     */
    public function setLength(int $length): self
    {
        $this->length = $length;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'authenticationCodeTypeFragment',
            'url' => $this->getUrl(),
            'length' => $this->getLength(),
        ];
    }
}
