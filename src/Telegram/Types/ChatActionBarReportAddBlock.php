<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The chat is a private or secret chat, which can be reported using the method reportChat, or the other user can be blocked using the method setMessageSenderBlockList,
 */
class ChatActionBarReportAddBlock extends ChatActionBar implements \JsonSerializable
{
    public function __construct(
        /** If true, the chat was automatically archived and can be moved back to the main chat list using addChatToList simultaneously with setting chat notification settings to default using setChatNotificationSettings */
        #[SerializedName('can_unarchive')]
        private bool $canUnarchive,
        /** Basic information about the other user in the chat; may be null if unknown */
        #[SerializedName('account_info')]
        private AccountInfo|null $accountInfo = null,
    ) {
    }

    /**
     * Get If true, the chat was automatically archived and can be moved back to the main chat list using addChatToList simultaneously with setting chat notification settings to default using setChatNotificationSettings
     */
    public function getCanUnarchive(): bool
    {
        return $this->canUnarchive;
    }

    /**
     * Set If true, the chat was automatically archived and can be moved back to the main chat list using addChatToList simultaneously with setting chat notification settings to default using setChatNotificationSettings
     */
    public function setCanUnarchive(bool $canUnarchive): self
    {
        $this->canUnarchive = $canUnarchive;

        return $this;
    }

    /**
     * Get Basic information about the other user in the chat; may be null if unknown
     */
    public function getAccountInfo(): AccountInfo|null
    {
        return $this->accountInfo;
    }

    /**
     * Set Basic information about the other user in the chat; may be null if unknown
     */
    public function setAccountInfo(AccountInfo|null $accountInfo): self
    {
        $this->accountInfo = $accountInfo;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatActionBarReportAddBlock',
            'can_unarchive' => $this->getCanUnarchive(),
            'account_info' => $this->getAccountInfo(),
        ];
    }
}
