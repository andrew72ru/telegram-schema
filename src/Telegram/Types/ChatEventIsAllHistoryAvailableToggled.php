<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The is_all_history_available setting of a supergroup was toggled @is_all_history_available New value of is_all_history_available.
 */
class ChatEventIsAllHistoryAvailableToggled extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('is_all_history_available')]
        private bool $isAllHistoryAvailable,
    ) {
    }

    public function getIsAllHistoryAvailable(): bool
    {
        return $this->isAllHistoryAvailable;
    }

    public function setIsAllHistoryAvailable(bool $isAllHistoryAvailable): self
    {
        $this->isAllHistoryAvailable = $isAllHistoryAvailable;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventIsAllHistoryAvailableToggled',
            'is_all_history_available' => $this->getIsAllHistoryAvailable(),
        ];
    }
}
