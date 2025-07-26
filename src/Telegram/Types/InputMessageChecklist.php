<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message with a checklist. Checklists can't be sent to secret chats, channel chats and channel direct messages chats; for Telegram Premium users only
 */
class InputMessageChecklist extends InputMessageContent implements \JsonSerializable
{
    public function __construct(
        /** The checklist to send */
        #[SerializedName('checklist')]
        private InputChecklist|null $checklist = null,
    ) {
    }

    /**
     * Get The checklist to send
     */
    public function getChecklist(): InputChecklist|null
    {
        return $this->checklist;
    }

    /**
     * Set The checklist to send
     */
    public function setChecklist(InputChecklist|null $checklist): self
    {
        $this->checklist = $checklist;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputMessageChecklist',
            'checklist' => $this->getChecklist(),
        ];
    }
}
