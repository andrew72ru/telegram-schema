<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message with a checklist @list The checklist description.
 */
class MessageChecklist extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('list')]
        private Checklist|null $list = null,
    ) {
    }

    public function getList(): Checklist|null
    {
        return $this->list;
    }

    public function setList(Checklist|null $list): self
    {
        $this->list = $list;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageChecklist',
            'list' => $this->getList(),
        ];
    }
}
