<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A rule to allow all members of certain specified basic groups and supergroups to doing something @chat_ids The chat identifiers, total number of chats in all rules must not exceed 20.
 */
class UserPrivacySettingRuleAllowChatMembers extends UserPrivacySettingRule implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_ids')]
        private array|null $chatIds = null,
    ) {
    }

    public function getChatIds(): array|null
    {
        return $this->chatIds;
    }

    public function setChatIds(array|null $chatIds): self
    {
        $this->chatIds = $chatIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'userPrivacySettingRuleAllowChatMembers',
            'chat_ids' => $this->getChatIds(),
        ];
    }
}
