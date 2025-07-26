<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user joins a chat and subscribes to regular payments in Telegram Stars @invite_link Invite link to use
 */
class TelegramPaymentPurposeJoinChat extends TelegramPaymentPurpose implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('invite_link')]
        private string $inviteLink,
    ) {
    }

    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    public function setInviteLink(string $inviteLink): self
    {
        $this->inviteLink = $inviteLink;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'telegramPaymentPurposeJoinChat',
            'invite_link' => $this->getInviteLink(),
        ];
    }
}
