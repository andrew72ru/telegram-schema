<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sets title of a video chat; requires groupCall.can_be_managed right @group_call_id Group call identifier @title New group call title; 1-64 characters
 */
class SetVideoChatTitle extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('group_call_id')]
        private int $groupCallId,
        #[SerializedName('title')]
        private string $title,
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

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setVideoChatTitle',
            'group_call_id' => $this->getGroupCallId(),
            'title' => $this->getTitle(),
        ];
    }
}
