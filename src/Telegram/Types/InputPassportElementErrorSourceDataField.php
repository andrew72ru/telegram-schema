<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A data field contains an error. The error is considered resolved when the field's value changes @field_name Field name @data_hash Current data hash
 */
class InputPassportElementErrorSourceDataField extends InputPassportElementErrorSource implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('field_name')]
        private string $fieldName,
        #[SerializedName('data_hash')]
        private string $dataHash,
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

    public function getDataHash(): string
    {
        return $this->dataHash;
    }

    public function setDataHash(string $dataHash): self
    {
        $this->dataHash = $dataHash;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputPassportElementErrorSourceDataField',
            'field_name' => $this->getFieldName(),
            'data_hash' => $this->getDataHash(),
        ];
    }
}
