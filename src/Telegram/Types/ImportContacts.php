<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Adds new contacts or edits existing contacts by their phone numbers; contacts' user identifiers are ignored @contacts The list of contacts to import or edit; contacts' vCard are ignored and are not imported.
 */
class ImportContacts extends ImportedContacts implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('contacts')]
        private array|null $contacts = null,
    ) {
    }

    public function getContacts(): array|null
    {
        return $this->contacts;
    }

    public function setContacts(array|null $contacts): self
    {
        $this->contacts = $contacts;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'importContacts',
            'contacts' => $this->getContacts(),
        ];
    }
}
