<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Suggests the user to enable archive_and_mute_new_chats_from_unknown_users setting in archiveChatListSettings
 */
class SuggestedActionEnableArchiveAndMuteNewChats extends SuggestedAction implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'suggestedActionEnableArchiveAndMuteNewChats',
        ];
    }
}
