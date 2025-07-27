<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The chat can be reported as spam using the method reportChat with an empty option_id and message_ids. If the chat is a private chat with a user with an emoji status, then a notice about emoji status usage must be shown.
 */
class ChatActionBarReportSpam extends ChatActionBar implements \JsonSerializable
{
    public function __construct(
        /** If true, the chat was automatically archived and can be moved back to the main chat list using addChatToList simultaneously with setting chat notification settings to default using setChatNotificationSettings */
        #[SerializedName('can_unarchive')]
        private bool $canUnarchive,
    ) {
    }

    /**
     * Get If true, the chat was automatically archived and can be moved back to the main chat list using addChatToList simultaneously with setting chat notification settings to default using setChatNotificationSettings.
     */
    public function getCanUnarchive(): bool
    {
        return $this->canUnarchive;
    }

    /**
     * Set If true, the chat was automatically archived and can be moved back to the main chat list using addChatToList simultaneously with setting chat notification settings to default using setChatNotificationSettings.
     */
    public function setCanUnarchive(bool $canUnarchive): self
    {
        $this->canUnarchive = $canUnarchive;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatActionBarReportSpam',
            'can_unarchive' => $this->getCanUnarchive(),
        ];
    }
}
