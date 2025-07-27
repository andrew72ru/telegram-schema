<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A chat invite link @info Information about the chat invite link.
 */
class TMeUrlTypeChatInvite extends TMeUrlType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('info')]
        private ChatInviteLinkInfo|null $info = null,
    ) {
    }

    public function getInfo(): ChatInviteLinkInfo|null
    {
        return $this->info;
    }

    public function setInfo(ChatInviteLinkInfo|null $info): self
    {
        $this->info = $info;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'tMeUrlTypeChatInvite',
            'info' => $this->getInfo(),
        ];
    }
}
