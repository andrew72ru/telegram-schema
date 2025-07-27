<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A newly created video chat @group_call_id Identifier of the video chat. The video chat can be received through the method getGroupCall.
 */
class MessageVideoChatStarted extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('group_call_id')]
        private int $groupCallId,
    ) {
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function setGroupCallId(int $groupCallId): self
    {
        $this->groupCallId = $groupCallId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageVideoChatStarted',
            'group_call_id' => $this->getGroupCallId(),
        ];
    }
}
