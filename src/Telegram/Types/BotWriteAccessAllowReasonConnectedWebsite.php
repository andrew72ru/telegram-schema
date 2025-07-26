<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user connected a website by logging in using Telegram Login Widget on it @domain_name Domain name of the connected website
 */
class BotWriteAccessAllowReasonConnectedWebsite extends BotWriteAccessAllowReason implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('domain_name')]
        private string $domainName,
    ) {
    }

    public function getDomainName(): string
    {
        return $this->domainName;
    }

    public function setDomainName(string $domainName): self
    {
        $this->domainName = $domainName;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'botWriteAccessAllowReasonConnectedWebsite',
            'domain_name' => $this->getDomainName(),
        ];
    }
}
