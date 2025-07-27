<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a user that sent a join request and waits for administrator approval @user_id User identifier @date Point in time (Unix timestamp) when the user sent the join request @bio A short bio of the user.
 */
class ChatJoinRequest implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('user_id')]
        private int $userId,
        #[SerializedName('date')]
        private int $date,
        #[SerializedName('bio')]
        private string $bio,
    ) {
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function setDate(int $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getBio(): string
    {
        return $this->bio;
    }

    public function setBio(string $bio): self
    {
        $this->bio = $bio;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatJoinRequest',
            'user_id' => $this->getUserId(),
            'date' => $this->getDate(),
            'bio' => $this->getBio(),
        ];
    }
}
