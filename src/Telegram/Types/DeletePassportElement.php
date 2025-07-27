<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Deletes a Telegram Passport element @var Element type.
 */
class DeletePassportElement extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('type')]
        private PassportElementType|null $type = null,
    ) {
    }

    public function getType(): PassportElementType|null
    {
        return $this->type;
    }

    public function setType(PassportElementType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'deletePassportElement',
            'type' => $this->getType(),
        ];
    }
}
