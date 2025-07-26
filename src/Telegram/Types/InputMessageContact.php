<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message containing a user contact @contact Contact to send
 */
class InputMessageContact extends InputMessageContent implements \JsonSerializable
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
            '@type' => 'inputMessageContact',
            'contact' => $this->getContact(),
        ];
    }
}
