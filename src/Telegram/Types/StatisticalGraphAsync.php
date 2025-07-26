<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The graph data to be asynchronously loaded through getStatisticalGraph @token The token to use for data loading
 */
class StatisticalGraphAsync extends StatisticalGraph implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('token')]
        private string $token,
    ) {
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'statisticalGraphAsync',
            'token' => $this->getToken(),
        ];
    }
}
