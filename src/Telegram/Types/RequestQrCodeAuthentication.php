<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Requests QR code authentication by scanning a QR code on another logged in device. Works only when the current authorization state is authorizationStateWaitPhoneNumber,
 */
class RequestQrCodeAuthentication extends Ok implements \JsonSerializable
{
    public function __construct(
        /** List of user identifiers of other users currently using the application */
        #[SerializedName('other_user_ids')]
        private array|null $otherUserIds = null,
    ) {
    }

    /**
     * Get List of user identifiers of other users currently using the application
     */
    public function getOtherUserIds(): array|null
    {
        return $this->otherUserIds;
    }

    /**
     * Set List of user identifiers of other users currently using the application
     */
    public function setOtherUserIds(array|null $otherUserIds): self
    {
        $this->otherUserIds = $otherUserIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'requestQrCodeAuthentication',
            'other_user_ids' => $this->getOtherUserIds(),
        ];
    }
}
