<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a viewer of a message @user_id User identifier of the viewer @view_date Approximate point in time (Unix timestamp) when the message was viewed
 */
class MessageViewer implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('user_id')]
        private int $userId,
        #[SerializedName('view_date')]
        private int $viewDate,
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

    public function getViewDate(): int
    {
        return $this->viewDate;
    }

    public function setViewDate(int $viewDate): self
    {
        $this->viewDate = $viewDate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageViewer',
            'user_id' => $this->getUserId(),
            'view_date' => $this->getViewDate(),
        ];
    }
}
