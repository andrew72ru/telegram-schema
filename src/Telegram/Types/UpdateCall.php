<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * New call was created or information about a call was updated @call New data about a call
 */
class UpdateCall extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('call')]
        private Call|null $call = null,
    ) {
    }

    public function getCall(): Call|null
    {
        return $this->call;
    }

    public function setCall(Call|null $call): self
    {
        $this->call = $call;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateCall',
            'call' => $this->getCall(),
        ];
    }
}
