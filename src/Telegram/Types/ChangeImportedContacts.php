<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes imported contacts using the list of contacts saved on the device. Imports newly added contacts and, if at least the file database is enabled, deletes recently deleted contacts.
 */
class ChangeImportedContacts extends ImportedContacts implements \JsonSerializable
{
    public function __construct(
        /** The new list of contacts, contact's vCard are ignored and are not imported */
        #[SerializedName('contacts')]
        private array|null $contacts = null,
    ) {
    }

    /**
     * Get The new list of contacts, contact's vCard are ignored and are not imported
     */
    public function getContacts(): array|null
    {
        return $this->contacts;
    }

    /**
     * Set The new list of contacts, contact's vCard are ignored and are not imported
     */
    public function setContacts(array|null $contacts): self
    {
        $this->contacts = $contacts;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'changeImportedContacts',
            'contacts' => $this->getContacts(),
        ];
    }
}
