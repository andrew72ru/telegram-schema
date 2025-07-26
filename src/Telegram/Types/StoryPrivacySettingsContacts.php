<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The story can be viewed by all contacts except chosen users @except_user_ids User identifiers of the contacts that can't see the story; always unknown and empty for non-owned stories
 */
class StoryPrivacySettingsContacts extends StoryPrivacySettings implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('except_user_ids')]
        private array|null $exceptUserIds = null,
    ) {
    }

    public function getExceptUserIds(): array|null
    {
        return $this->exceptUserIds;
    }

    public function setExceptUserIds(array|null $exceptUserIds): self
    {
        $this->exceptUserIds = $exceptUserIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'storyPrivacySettingsContacts',
            'except_user_ids' => $this->getExceptUserIds(),
        ];
    }
}
