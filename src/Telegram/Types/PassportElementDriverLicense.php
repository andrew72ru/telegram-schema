<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A Telegram Passport element containing the user's driver license @driver_license Driver license
 */
class PassportElementDriverLicense extends PassportElement implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('driver_license')]
        private IdentityDocument|null $driverLicense = null,
    ) {
    }

    public function getDriverLicense(): IdentityDocument|null
    {
        return $this->driverLicense;
    }

    public function setDriverLicense(IdentityDocument|null $driverLicense): self
    {
        $this->driverLicense = $driverLicense;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'passportElementDriverLicense',
            'driver_license' => $this->getDriverLicense(),
        ];
    }
}
