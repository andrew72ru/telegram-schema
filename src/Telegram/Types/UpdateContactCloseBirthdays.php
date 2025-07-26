<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The list of contacts that had birthdays recently or will have birthday soon has changed @close_birthday_users List of contact users with close birthday
 */
class UpdateContactCloseBirthdays extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('close_birthday_users')]
        private array|null $closeBirthdayUsers = null,
    ) {
    }

    public function getCloseBirthdayUsers(): array|null
    {
        return $this->closeBirthdayUsers;
    }

    public function setCloseBirthdayUsers(array|null $closeBirthdayUsers): self
    {
        $this->closeBirthdayUsers = $closeBirthdayUsers;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateContactCloseBirthdays',
            'close_birthday_users' => $this->getCloseBirthdayUsers(),
        ];
    }
}
