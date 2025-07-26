<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a list of users that has failed to be added to a chat @failed_to_add_members Information about users that weren't added to the chat
 */
class FailedToAddMembers implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('failed_to_add_members')]
        private array|null $failedToAddMembers = null,
    ) {
    }

    public function getFailedToAddMembers(): array|null
    {
        return $this->failedToAddMembers;
    }

    public function setFailedToAddMembers(array|null $failedToAddMembers): self
    {
        $this->failedToAddMembers = $failedToAddMembers;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'failedToAddMembers',
            'failed_to_add_members' => $this->getFailedToAddMembers(),
        ];
    }
}
