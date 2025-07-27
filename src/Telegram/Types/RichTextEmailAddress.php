<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A rich text email link @text Text @email_address Email address.
 */
class RichTextEmailAddress extends RichText implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('text')]
        private RichText|null $text = null,
        #[SerializedName('email_address')]
        private string $emailAddress,
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

    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    public function setEmailAddress(string $emailAddress): self
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'richTextEmailAddress',
            'text' => $this->getText(),
            'email_address' => $this->getEmailAddress(),
        ];
    }
}
