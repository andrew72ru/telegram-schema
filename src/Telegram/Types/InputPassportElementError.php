<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains the description of an error in a Telegram Passport element; for bots only @var Type of Telegram Passport element that has the error @message Error message @source Error source.
 */
class InputPassportElementError implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('type')]
        private PassportElementType|null $type = null,
        #[SerializedName('message')]
        private string $message,
        #[SerializedName('source')]
        private InputPassportElementErrorSource|null $source = null,
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

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getSource(): InputPassportElementErrorSource|null
    {
        return $this->source;
    }

    public function setSource(InputPassportElementErrorSource|null $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputPassportElementError',
            'type' => $this->getType(),
            'message' => $this->getMessage(),
            'source' => $this->getSource(),
        ];
    }
}
