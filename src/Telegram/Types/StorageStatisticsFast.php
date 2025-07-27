<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains approximate storage usage statistics, excluding files of unknown file type.
 */
class StorageStatisticsFast implements \JsonSerializable
{
    public function __construct(
        /** Approximate total size of files, in bytes */
        #[SerializedName('files_size')]
        private int $filesSize,
        /** Approximate number of files */
        #[SerializedName('file_count')]
        private int $fileCount,
        /** Size of the database */
        #[SerializedName('database_size')]
        private int $databaseSize,
        /** Size of the language pack database */
        #[SerializedName('language_pack_database_size')]
        private int $languagePackDatabaseSize,
        /** Size of the TDLib internal log */
        #[SerializedName('log_size')]
        private int $logSize,
    ) {
    }

    /**
     * Get Approximate total size of files, in bytes.
     */
    public function getFilesSize(): int
    {
        return $this->filesSize;
    }

    /**
     * Set Approximate total size of files, in bytes.
     */
    public function setFilesSize(int $filesSize): self
    {
        $this->filesSize = $filesSize;

        return $this;
    }

    /**
     * Get Approximate number of files.
     */
    public function getFileCount(): int
    {
        return $this->fileCount;
    }

    /**
     * Set Approximate number of files.
     */
    public function setFileCount(int $fileCount): self
    {
        $this->fileCount = $fileCount;

        return $this;
    }

    /**
     * Get Size of the database.
     */
    public function getDatabaseSize(): int
    {
        return $this->databaseSize;
    }

    /**
     * Set Size of the database.
     */
    public function setDatabaseSize(int $databaseSize): self
    {
        $this->databaseSize = $databaseSize;

        return $this;
    }

    /**
     * Get Size of the language pack database.
     */
    public function getLanguagePackDatabaseSize(): int
    {
        return $this->languagePackDatabaseSize;
    }

    /**
     * Set Size of the language pack database.
     */
    public function setLanguagePackDatabaseSize(int $languagePackDatabaseSize): self
    {
        $this->languagePackDatabaseSize = $languagePackDatabaseSize;

        return $this;
    }

    /**
     * Get Size of the TDLib internal log.
     */
    public function getLogSize(): int
    {
        return $this->logSize;
    }

    /**
     * Set Size of the TDLib internal log.
     */
    public function setLogSize(int $logSize): self
    {
        $this->logSize = $logSize;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'storageStatisticsFast',
            'files_size' => $this->getFilesSize(),
            'file_count' => $this->getFileCount(),
            'database_size' => $this->getDatabaseSize(),
            'language_pack_database_size' => $this->getLanguagePackDatabaseSize(),
            'log_size' => $this->getLogSize(),
        ];
    }
}
