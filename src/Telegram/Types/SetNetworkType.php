<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sets the current network type. Can be called before authorization. Calling this method forces all network connections to reopen, mitigating the delay in switching between different networks,.
 */
class SetNetworkType extends Ok implements \JsonSerializable
{
    public function __construct(
        /** The new network type; pass null to set network type to networkTypeOther */
        #[SerializedName('type')]
        private NetworkType|null $type = null,
    ) {
    }

    /**
     * Get The new network type; pass null to set network type to networkTypeOther.
     */
    public function getType(): NetworkType|null
    {
        return $this->type;
    }

    /**
     * Set The new network type; pass null to set network type to networkTypeOther.
     */
    public function setType(NetworkType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setNetworkType',
            'type' => $this->getType(),
        ];
    }
}
