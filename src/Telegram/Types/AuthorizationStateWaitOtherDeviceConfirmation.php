<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user needs to confirm authorization on another logged in device by scanning a QR code with the provided link @link A tg:// URL for the QR code. The link will be updated frequently
 */
class AuthorizationStateWaitOtherDeviceConfirmation extends AuthorizationState implements \JsonSerializable
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
            '@type' => 'authorizationStateWaitOtherDeviceConfirmation',
            'link' => $this->getLink(),
        ];
    }
}
