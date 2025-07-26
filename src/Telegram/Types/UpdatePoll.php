<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A poll was updated; for bots only @poll New data about the poll
 */
class UpdatePoll extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('poll')]
        private Poll|null $poll = null,
    ) {
    }

    public function getPoll(): Poll|null
    {
        return $this->poll;
    }

    public function setPoll(Poll|null $poll): self
    {
        $this->poll = $poll;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updatePoll',
            'poll' => $this->getPoll(),
        ];
    }
}
