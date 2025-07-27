<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * One of the data fields contains an error. The error will be considered resolved when the value of the field changes @field_name Field name.
 */
class PassportElementErrorSourceDataField extends PassportElementErrorSource implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('field_name')]
        private string $fieldName,
    ) {
    }

    public function getFieldName(): string
    {
        return $this->fieldName;
    }

    public function setFieldName(string $fieldName): self
    {
        $this->fieldName = $fieldName;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'passportElementErrorSourceDataField',
            'field_name' => $this->getFieldName(),
        ];
    }
}
