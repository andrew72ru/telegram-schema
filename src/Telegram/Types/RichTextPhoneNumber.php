<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A rich text phone number @text Text @phone_number Phone number.
 */
class RichTextPhoneNumber extends RichText implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('text')]
        private RichText|null $text = null,
        #[SerializedName('phone_number')]
        private string $phoneNumber,
    ) {
    }

    public function getText(): RichText|null
    {
        return $this->text;
    }

    public function setText(RichText|null $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'richTextPhoneNumber',
            'text' => $this->getText(),
            'phone_number' => $this->getPhoneNumber(),
        ];
    }
}
