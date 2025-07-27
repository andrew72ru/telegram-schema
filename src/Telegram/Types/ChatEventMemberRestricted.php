<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A chat member was restricted/unrestricted or banned/unbanned, or the list of their restrictions has changed @member_id Affected chat member identifier @old_status Previous status of the chat member @new_status New status of the chat member.
 */
class ChatEventMemberRestricted extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('member_id')]
        private MessageSender|null $memberId = null,
        #[SerializedName('old_status')]
        private ChatMemberStatus|null $oldStatus = null,
        #[SerializedName('new_status')]
        private ChatMemberStatus|null $newStatus = null,
    ) {
    }

    public function getMemberId(): MessageSender|null
    {
        return $this->memberId;
    }

    public function setMemberId(MessageSender|null $memberId): self
    {
        $this->memberId = $memberId;

        return $this;
    }

    public function getOldStatus(): ChatMemberStatus|null
    {
        return $this->oldStatus;
    }

    public function setOldStatus(ChatMemberStatus|null $oldStatus): self
    {
        $this->oldStatus = $oldStatus;

        return $this;
    }

    public function getNewStatus(): ChatMemberStatus|null
    {
        return $this->newStatus;
    }

    public function setNewStatus(ChatMemberStatus|null $newStatus): self
    {
        $this->newStatus = $newStatus;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventMemberRestricted',
            'member_id' => $this->getMemberId(),
            'old_status' => $this->getOldStatus(),
            'new_status' => $this->getNewStatus(),
        ];
    }
}
