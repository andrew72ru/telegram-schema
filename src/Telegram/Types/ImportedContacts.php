<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents the result of an importContacts request
 */
class ImportedContacts implements \JsonSerializable
{
    public function __construct(
        /** User identifiers of the imported contacts in the same order as they were specified in the request; 0 if the contact is not yet a registered user */
        #[SerializedName('user_ids')]
        private array|null $userIds = null,
        /** The number of users that imported the corresponding contact; 0 for already registered users or if unavailable */
        #[SerializedName('importer_count')]
        private array|null $importerCount = null,
    ) {
    }

    /**
     * Get User identifiers of the imported contacts in the same order as they were specified in the request; 0 if the contact is not yet a registered user
     */
    public function getUserIds(): array|null
    {
        return $this->userIds;
    }

    /**
     * Set User identifiers of the imported contacts in the same order as they were specified in the request; 0 if the contact is not yet a registered user
     */
    public function setUserIds(array|null $userIds): self
    {
        $this->userIds = $userIds;

        return $this;
    }

    /**
     * Get The number of users that imported the corresponding contact; 0 for already registered users or if unavailable
     */
    public function getImporterCount(): array|null
    {
        return $this->importerCount;
    }

    /**
     * Set The number of users that imported the corresponding contact; 0 for already registered users or if unavailable
     */
    public function setImporterCount(array|null $importerCount): self
    {
        $this->importerCount = $importerCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'importedContacts',
            'user_ids' => $this->getUserIds(),
            'importer_count' => $this->getImporterCount(),
        ];
    }
}
