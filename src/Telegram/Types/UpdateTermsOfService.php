<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * New terms of service must be accepted by the user. If the terms of service are declined, then the deleteAccount method must be called with the reason "Decline ToS update" @terms_of_service_id Identifier of the terms of service @terms_of_service The new terms of service.
 */
class UpdateTermsOfService extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('terms_of_service_id')]
        private string $termsOfServiceId,
        #[SerializedName('terms_of_service')]
        private TermsOfService|null $termsOfService = null,
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

    public function getTermsOfService(): TermsOfService|null
    {
        return $this->termsOfService;
    }

    public function setTermsOfService(TermsOfService|null $termsOfService): self
    {
        $this->termsOfService = $termsOfService;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateTermsOfService',
            'terms_of_service_id' => $this->getTermsOfServiceId(),
            'terms_of_service' => $this->getTermsOfService(),
        ];
    }
}
