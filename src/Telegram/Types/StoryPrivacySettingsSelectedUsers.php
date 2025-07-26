<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The story can be viewed by certain specified users @user_ids Identifiers of the users; always unknown and empty for non-owned stories
 */
class StoryPrivacySettingsSelectedUsers extends StoryPrivacySettings implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('user_ids')]
        private array|null $userIds = null,
    ) {
    }

    public function getUserIds(): array|null
    {
        return $this->userIds;
    }

    public function setUserIds(array|null $userIds): self
    {
        $this->userIds = $userIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'storyPrivacySettingsSelectedUsers',
            'user_ids' => $this->getUserIds(),
        ];
    }
}
