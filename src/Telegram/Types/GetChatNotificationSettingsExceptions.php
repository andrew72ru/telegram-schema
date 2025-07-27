<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the list of chats with non-default notification settings for new messages.
 */
class GetChatNotificationSettingsExceptions extends Chats implements \JsonSerializable
{
    public function __construct(
        /** If specified, only chats from the scope will be returned; pass null to return chats from all scopes */
        #[SerializedName('scope')]
        private NotificationSettingsScope|null $scope = null,
        /** Pass true to include in the response chats with only non-default sound */
        #[SerializedName('compare_sound')]
        private bool $compareSound,
    ) {
    }

    /**
     * Get If specified, only chats from the scope will be returned; pass null to return chats from all scopes.
     */
    public function getScope(): NotificationSettingsScope|null
    {
        return $this->scope;
    }

    /**
     * Set If specified, only chats from the scope will be returned; pass null to return chats from all scopes.
     */
    public function setScope(NotificationSettingsScope|null $scope): self
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * Get Pass true to include in the response chats with only non-default sound.
     */
    public function getCompareSound(): bool
    {
        return $this->compareSound;
    }

    /**
     * Set Pass true to include in the response chats with only non-default sound.
     */
    public function setCompareSound(bool $compareSound): self
    {
        $this->compareSound = $compareSound;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getChatNotificationSettingsExceptions',
            'scope' => $this->getScope(),
            'compare_sound' => $this->getCompareSound(),
        ];
    }
}
