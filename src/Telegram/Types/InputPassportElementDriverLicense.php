<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A Telegram Passport element to be saved containing the user's driver license @driver_license The driver license to be saved
 */
class InputPassportElementDriverLicense extends InputPassportElement implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('driver_license')]
        private InputIdentityDocument|null $driverLicense = null,
    ) {
    }

    public function getDriverLicense(): InputIdentityDocument|null
    {
        return $this->driverLicense;
    }

    public function setDriverLicense(InputIdentityDocument|null $driverLicense): self
    {
        $this->driverLicense = $driverLicense;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputPassportElementDriverLicense',
            'driver_license' => $this->getDriverLicense(),
        ];
    }
}
