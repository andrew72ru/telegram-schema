<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The first unconfirmed session has changed @session The unconfirmed session; may be null if none
 */
class UpdateUnconfirmedSession extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('session')]
        private UnconfirmedSession|null $session = null,
    ) {
    }

    public function getSession(): UnconfirmedSession|null
    {
        return $this->session;
    }

    public function setSession(UnconfirmedSession|null $session): self
    {
        $this->session = $session;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateUnconfirmedSession',
            'session' => $this->getSession(),
        ];
    }
}
