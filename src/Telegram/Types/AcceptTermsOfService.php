<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Accepts Telegram terms of services @terms_of_service_id Terms of service identifier.
 */
class AcceptTermsOfService extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('terms_of_service_id')]
        private string $termsOfServiceId,
    ) {
    }

    public function getTermsOfServiceId(): string
    {
        return $this->termsOfServiceId;
    }

    public function setTermsOfServiceId(string $termsOfServiceId): self
    {
        $this->termsOfServiceId = $termsOfServiceId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'acceptTermsOfService',
            'terms_of_service_id' => $this->getTermsOfServiceId(),
        ];
    }
}
