<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Confirms QR code authentication on another device. Returns created session on success @link A link from a QR code. The link must be scanned by the in-app camera
 */
class ConfirmQrCodeAuthentication extends Session implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('link')]
        private string $link,
    ) {
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'confirmQrCodeAuthentication',
            'link' => $this->getLink(),
        ];
    }
}
