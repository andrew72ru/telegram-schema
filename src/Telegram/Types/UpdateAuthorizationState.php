<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user authorization state has changed @authorization_state New authorization state.
 */
class UpdateAuthorizationState extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('authorization_state')]
        private AuthorizationState|null $authorizationState = null,
    ) {
    }

    public function getAuthorizationState(): AuthorizationState|null
    {
        return $this->authorizationState;
    }

    public function setAuthorizationState(AuthorizationState|null $authorizationState): self
    {
        $this->authorizationState = $authorizationState;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateAuthorizationState',
            'authorization_state' => $this->getAuthorizationState(),
        ];
    }
}
