<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains privacy settings for message read date in private chats. Read dates are always shown to the users that can see online status of the current user regardless of this setting
 */
class ReadDatePrivacySettings implements \JsonSerializable
{
    public function __construct(
        /** True, if message read date is shown to other users in private chats. If false and the current user isn't a Telegram Premium user, then they will not be able to see other's message read date */
        #[SerializedName('show_read_date')]
        private bool $showReadDate,
    ) {
    }

    /**
     * Get True, if message read date is shown to other users in private chats. If false and the current user isn't a Telegram Premium user, then they will not be able to see other's message read date
     */
    public function getShowReadDate(): bool
    {
        return $this->showReadDate;
    }

    /**
     * Set True, if message read date is shown to other users in private chats. If false and the current user isn't a Telegram Premium user, then they will not be able to see other's message read date
     */
    public function setShowReadDate(bool $showReadDate): self
    {
        $this->showReadDate = $showReadDate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'readDatePrivacySettings',
            'show_read_date' => $this->getShowReadDate(),
        ];
    }
}
