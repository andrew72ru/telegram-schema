<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a Telegram Passport elements and corresponding errors @elements Telegram Passport elements @errors Errors in the elements that are already available
 */
class PassportElementsWithErrors implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('elements')]
        private array|null $elements = null,
        #[SerializedName('errors')]
        private array|null $errors = null,
    ) {
    }

    public function getElements(): array|null
    {
        return $this->elements;
    }

    public function setElements(array|null $elements): self
    {
        $this->elements = $elements;

        return $this;
    }

    public function getErrors(): array|null
    {
        return $this->errors;
    }

    public function setErrors(array|null $errors): self
    {
        $this->errors = $errors;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'passportElementsWithErrors',
            'elements' => $this->getElements(),
            'errors' => $this->getErrors(),
        ];
    }
}
