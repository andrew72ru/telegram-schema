<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Informs the server about the number of pending bot updates if they haven't been processed for a long time; for bots only @pending_update_count The number of pending updates @error_message The last error message.
 */
class SetBotUpdatesStatus extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('pending_update_count')]
        private int $pendingUpdateCount,
        #[SerializedName('error_message')]
        private string $errorMessage,
    ) {
    }

    public function getPendingUpdateCount(): int
    {
        return $this->pendingUpdateCount;
    }

    public function setPendingUpdateCount(int $pendingUpdateCount): self
    {
        $this->pendingUpdateCount = $pendingUpdateCount;

        return $this;
    }

    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    public function setErrorMessage(string $errorMessage): self
    {
        $this->errorMessage = $errorMessage;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setBotUpdatesStatus',
            'pending_update_count' => $this->getPendingUpdateCount(),
            'error_message' => $this->getErrorMessage(),
        ];
    }
}
