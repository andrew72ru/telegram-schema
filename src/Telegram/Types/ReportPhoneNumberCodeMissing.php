<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Reports that authentication code wasn't delivered via SMS to the specified phone number; for official mobile applications only @mobile_network_code Current mobile network code
 */
class ReportPhoneNumberCodeMissing extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('mobile_network_code')]
        private string $mobileNetworkCode,
    ) {
    }

    public function getMobileNetworkCode(): string
    {
        return $this->mobileNetworkCode;
    }

    public function setMobileNetworkCode(string $mobileNetworkCode): self
    {
        $this->mobileNetworkCode = $mobileNetworkCode;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reportPhoneNumberCodeMissing',
            'mobile_network_code' => $this->getMobileNetworkCode(),
        ];
    }
}
