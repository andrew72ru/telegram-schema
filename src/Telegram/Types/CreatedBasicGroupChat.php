<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a newly created basic group chat @chat_id Chat identifier @failed_to_add_members Information about failed to add members.
 */
class CreatedBasicGroupChat implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('failed_to_add_members')]
        private FailedToAddMembers|null $failedToAddMembers = null,
    ) {
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    public function getFailedToAddMembers(): FailedToAddMembers|null
    {
        return $this->failedToAddMembers;
    }

    public function setFailedToAddMembers(FailedToAddMembers|null $failedToAddMembers): self
    {
        $this->failedToAddMembers = $failedToAddMembers;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'createdBasicGroupChat',
            'chat_id' => $this->getChatId(),
            'failed_to_add_members' => $this->getFailedToAddMembers(),
        ];
    }
}
