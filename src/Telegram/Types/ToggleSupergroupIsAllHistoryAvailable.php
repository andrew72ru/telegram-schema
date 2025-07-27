<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Toggles whether the message history of a supergroup is available to new members; requires can_change_info member right @supergroup_id The identifier of the supergroup @is_all_history_available The new value of is_all_history_available.
 */
class ToggleSupergroupIsAllHistoryAvailable extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('supergroup_id')]
        private int $supergroupId,
        #[SerializedName('is_all_history_available')]
        private bool $isAllHistoryAvailable,
    ) {
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function setSupergroupId(int $supergroupId): self
    {
        $this->supergroupId = $supergroupId;

        return $this;
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
            '@type' => 'toggleSupergroupIsAllHistoryAvailable',
            'supergroup_id' => $this->getSupergroupId(),
            'is_all_history_available' => $this->getIsAllHistoryAvailable(),
        ];
    }
}
