<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of websites the current user is logged in with Telegram @websites List of connected websites
 */
class ConnectedWebsites implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('websites')]
        private array|null $websites = null,
    ) {
    }

    public function getWebsites(): array|null
    {
        return $this->websites;
    }

    public function setWebsites(array|null $websites): self
    {
        $this->websites = $websites;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'connectedWebsites',
            'websites' => $this->getWebsites(),
        ];
    }
}
