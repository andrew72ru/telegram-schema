<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Deletes all call messages @revoke Pass true to delete the messages for all users
 */
class DeleteAllCallMessages extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('revoke')]
        private bool $revoke,
    ) {
    }

    public function getRevoke(): bool
    {
        return $this->revoke;
    }

    public function setRevoke(bool $revoke): self
    {
        $this->revoke = $revoke;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'deleteAllCallMessages',
            'revoke' => $this->getRevoke(),
        ];
    }
}
