<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Disconnects website from the current user's Telegram account @website_id Website identifier.
 */
class DisconnectWebsite extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('website_id')]
        private int $websiteId,
    ) {
    }

    public function getWebsiteId(): int
    {
        return $this->websiteId;
    }

    public function setWebsiteId(int $websiteId): self
    {
        $this->websiteId = $websiteId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'disconnectWebsite',
            'website_id' => $this->getWebsiteId(),
        ];
    }
}
