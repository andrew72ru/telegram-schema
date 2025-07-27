<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message with a user contact @contact The contact description.
 */
class MessageContact extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('contact')]
        private Contact|null $contact = null,
    ) {
    }

    public function getContact(): Contact|null
    {
        return $this->contact;
    }

    public function setContact(Contact|null $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageContact',
            'contact' => $this->getContact(),
        ];
    }
}
