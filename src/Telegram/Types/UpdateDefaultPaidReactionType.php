<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The type of default paid reaction has changed @type The new type of the default paid reaction
 */
class UpdateDefaultPaidReactionType extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('type')]
        private PaidReactionType|null $type = null,
    ) {
    }

    public function getType(): PaidReactionType|null
    {
        return $this->type;
    }

    public function setType(PaidReactionType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateDefaultPaidReactionType',
            'type' => $this->getType(),
        ];
    }
}
