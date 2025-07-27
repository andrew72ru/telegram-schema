<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of chat invite links @total_count Approximate total number of chat invite links found @invite_links List of invite links.
 */
class ChatInviteLinks implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('total_count')]
        private int $totalCount,
        #[SerializedName('invite_links')]
        private array|null $inviteLinks = null,
    ) {
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function setTotalCount(int $totalCount): self
    {
        $this->totalCount = $totalCount;

        return $this;
    }

    public function getInviteLinks(): array|null
    {
        return $this->inviteLinks;
    }

    public function setInviteLinks(array|null $inviteLinks): self
    {
        $this->inviteLinks = $inviteLinks;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatInviteLinks',
            'total_count' => $this->getTotalCount(),
            'invite_links' => $this->getInviteLinks(),
        ];
    }
}
