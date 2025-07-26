<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sets the parameters for TDLib initialization. Works only when the current authorization state is authorizationStateWaitTdlibParameters
 */
class SetTdlibParameters extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Pass true to use Telegram test environment instead of the production environment */
        #[SerializedName('use_test_dc')]
        private bool $useTestDc,
        /** The path to the directory for the persistent database; if empty, the current working directory will be used */
        #[SerializedName('database_directory')]
        private string $databaseDirectory,
        /** The path to the directory for storing files; if empty, database_directory will be used */
        #[SerializedName('files_directory')]
        private string $filesDirectory,
        /** Encryption key for the database. If the encryption key is invalid, then an error with code 401 will be returned */
        #[SerializedName('database_encryption_key')]
        private string $databaseEncryptionKey,
        /** Pass true to keep information about downloaded and uploaded files between application restarts */
        #[SerializedName('use_file_database')]
        private bool $useFileDatabase,
        /** Pass true to keep cache of users, basic groups, supergroups, channels and secret chats between restarts. Implies use_file_database */
        #[SerializedName('use_chat_info_database')]
        private bool $useChatInfoDatabase,
        /** Pass true to keep cache of chats and messages between restarts. Implies use_chat_info_database */
        #[SerializedName('use_message_database')]
        private bool $useMessageDatabase,
        /** Pass true to enable support for secret chats */
        #[SerializedName('use_secret_chats')]
        private bool $useSecretChats,
        /** Application identifier for Telegram API access, which can be obtained at https://my.telegram.org */
        #[SerializedName('api_id')]
        private int $apiId,
        /** Application identifier hash for Telegram API access, which can be obtained at https://my.telegram.org */
        #[SerializedName('api_hash')]
        private string $apiHash,
        /** IETF language tag of the user's operating system language; must be non-empty */
        #[SerializedName('system_language_code')]
        private string $systemLanguageCode,
        /** Model of the device the application is being run on; must be non-empty */
        #[SerializedName('device_model')]
        private string $deviceModel,
        /** Version of the operating system the application is being run on. If empty, the version is automatically detected by TDLib */
        #[SerializedName('system_version')]
        private string $systemVersion,
        /** Application version; must be non-empty */
        #[SerializedName('application_version')]
        private string $applicationVersion,
    ) {
    }

    /**
     * Get Pass true to use Telegram test environment instead of the production environment
     */
    public function getUseTestDc(): bool
    {
        return $this->useTestDc;
    }

    /**
     * Set Pass true to use Telegram test environment instead of the production environment
     */
    public function setUseTestDc(bool $useTestDc): self
    {
        $this->useTestDc = $useTestDc;

        return $this;
    }

    /**
     * Get The path to the directory for the persistent database; if empty, the current working directory will be used
     */
    public function getDatabaseDirectory(): string
    {
        return $this->databaseDirectory;
    }

    /**
     * Set The path to the directory for the persistent database; if empty, the current working directory will be used
     */
    public function setDatabaseDirectory(string $databaseDirectory): self
    {
        $this->databaseDirectory = $databaseDirectory;

        return $this;
    }

    /**
     * Get The path to the directory for storing files; if empty, database_directory will be used
     */
    public function getFilesDirectory(): string
    {
        return $this->filesDirectory;
    }

    /**
     * Set The path to the directory for storing files; if empty, database_directory will be used
     */
    public function setFilesDirectory(string $filesDirectory): self
    {
        $this->filesDirectory = $filesDirectory;

        return $this;
    }

    /**
     * Get Encryption key for the database. If the encryption key is invalid, then an error with code 401 will be returned
     */
    public function getDatabaseEncryptionKey(): string
    {
        return $this->databaseEncryptionKey;
    }

    /**
     * Set Encryption key for the database. If the encryption key is invalid, then an error with code 401 will be returned
     */
    public function setDatabaseEncryptionKey(string $databaseEncryptionKey): self
    {
        $this->databaseEncryptionKey = $databaseEncryptionKey;

        return $this;
    }

    /**
     * Get Pass true to keep information about downloaded and uploaded files between application restarts
     */
    public function getUseFileDatabase(): bool
    {
        return $this->useFileDatabase;
    }

    /**
     * Set Pass true to keep information about downloaded and uploaded files between application restarts
     */
    public function setUseFileDatabase(bool $useFileDatabase): self
    {
        $this->useFileDatabase = $useFileDatabase;

        return $this;
    }

    /**
     * Get Pass true to keep cache of users, basic groups, supergroups, channels and secret chats between restarts. Implies use_file_database
     */
    public function getUseChatInfoDatabase(): bool
    {
        return $this->useChatInfoDatabase;
    }

    /**
     * Set Pass true to keep cache of users, basic groups, supergroups, channels and secret chats between restarts. Implies use_file_database
     */
    public function setUseChatInfoDatabase(bool $useChatInfoDatabase): self
    {
        $this->useChatInfoDatabase = $useChatInfoDatabase;

        return $this;
    }

    /**
     * Get Pass true to keep cache of chats and messages between restarts. Implies use_chat_info_database
     */
    public function getUseMessageDatabase(): bool
    {
        return $this->useMessageDatabase;
    }

    /**
     * Set Pass true to keep cache of chats and messages between restarts. Implies use_chat_info_database
     */
    public function setUseMessageDatabase(bool $useMessageDatabase): self
    {
        $this->useMessageDatabase = $useMessageDatabase;

        return $this;
    }

    /**
     * Get Pass true to enable support for secret chats
     */
    public function getUseSecretChats(): bool
    {
        return $this->useSecretChats;
    }

    /**
     * Set Pass true to enable support for secret chats
     */
    public function setUseSecretChats(bool $useSecretChats): self
    {
        $this->useSecretChats = $useSecretChats;

        return $this;
    }

    /**
     * Get Application identifier for Telegram API access, which can be obtained at https://my.telegram.org
     */
    public function getApiId(): int
    {
        return $this->apiId;
    }

    /**
     * Set Application identifier for Telegram API access, which can be obtained at https://my.telegram.org
     */
    public function setApiId(int $apiId): self
    {
        $this->apiId = $apiId;

        return $this;
    }

    /**
     * Get Application identifier hash for Telegram API access, which can be obtained at https://my.telegram.org
     */
    public function getApiHash(): string
    {
        return $this->apiHash;
    }

    /**
     * Set Application identifier hash for Telegram API access, which can be obtained at https://my.telegram.org
     */
    public function setApiHash(string $apiHash): self
    {
        $this->apiHash = $apiHash;

        return $this;
    }

    /**
     * Get IETF language tag of the user's operating system language; must be non-empty
     */
    public function getSystemLanguageCode(): string
    {
        return $this->systemLanguageCode;
    }

    /**
     * Set IETF language tag of the user's operating system language; must be non-empty
     */
    public function setSystemLanguageCode(string $systemLanguageCode): self
    {
        $this->systemLanguageCode = $systemLanguageCode;

        return $this;
    }

    /**
     * Get Model of the device the application is being run on; must be non-empty
     */
    public function getDeviceModel(): string
    {
        return $this->deviceModel;
    }

    /**
     * Set Model of the device the application is being run on; must be non-empty
     */
    public function setDeviceModel(string $deviceModel): self
    {
        $this->deviceModel = $deviceModel;

        return $this;
    }

    /**
     * Get Version of the operating system the application is being run on. If empty, the version is automatically detected by TDLib
     */
    public function getSystemVersion(): string
    {
        return $this->systemVersion;
    }

    /**
     * Set Version of the operating system the application is being run on. If empty, the version is automatically detected by TDLib
     */
    public function setSystemVersion(string $systemVersion): self
    {
        $this->systemVersion = $systemVersion;

        return $this;
    }

    /**
     * Get Application version; must be non-empty
     */
    public function getApplicationVersion(): string
    {
        return $this->applicationVersion;
    }

    /**
     * Set Application version; must be non-empty
     */
    public function setApplicationVersion(string $applicationVersion): self
    {
        $this->applicationVersion = $applicationVersion;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setTdlibParameters',
            'use_test_dc' => $this->getUseTestDc(),
            'database_directory' => $this->getDatabaseDirectory(),
            'files_directory' => $this->getFilesDirectory(),
            'database_encryption_key' => $this->getDatabaseEncryptionKey(),
            'use_file_database' => $this->getUseFileDatabase(),
            'use_chat_info_database' => $this->getUseChatInfoDatabase(),
            'use_message_database' => $this->getUseMessageDatabase(),
            'use_secret_chats' => $this->getUseSecretChats(),
            'api_id' => $this->getApiId(),
            'api_hash' => $this->getApiHash(),
            'system_language_code' => $this->getSystemLanguageCode(),
            'device_model' => $this->getDeviceModel(),
            'system_version' => $this->getSystemVersion(),
            'application_version' => $this->getApplicationVersion(),
        ];
    }
}
