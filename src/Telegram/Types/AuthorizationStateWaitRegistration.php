<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user is unregistered and need to accept terms of service and enter their first name and last name to finish registration. Call registerUser to accept the terms of service and provide the data @terms_of_service Telegram terms of service.
 */
class AuthorizationStateWaitRegistration extends AuthorizationState implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('terms_of_service')]
        private TermsOfService|null $termsOfService = null,
    ) {
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
            '@type' => 'authorizationStateWaitRegistration',
            'terms_of_service' => $this->getTermsOfService(),
        ];
    }
}
