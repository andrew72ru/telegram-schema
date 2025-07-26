<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A token for Tizen Push Service @reg_id Push service registration identifier; may be empty to deregister a device
 */
class DeviceTokenTizenPush extends DeviceToken implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('reg_id')]
        private string $regId,
    ) {
    }

    public function getRegId(): string
    {
        return $this->regId;
    }

    public function setRegId(string $regId): self
    {
        $this->regId = $regId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'deviceTokenTizenPush',
            'reg_id' => $this->getRegId(),
        ];
    }
}
