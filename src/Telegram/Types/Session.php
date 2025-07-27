<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about one session in a Telegram application used by the current user. Sessions must be shown to the user in the returned order.
 */
class Session implements \JsonSerializable
{
    public function __construct(
        /** Session identifier */
        #[SerializedName('id')]
        private int $id,
        /** True, if this session is the current session */
        #[SerializedName('is_current')]
        private bool $isCurrent,
        /** True, if a 2-step verification password is needed to complete authorization of the session */
        #[SerializedName('is_password_pending')]
        private bool $isPasswordPending,
        /** True, if the session wasn't confirmed from another session */
        #[SerializedName('is_unconfirmed')]
        private bool $isUnconfirmed,
        /** True, if incoming secret chats can be accepted by the session */
        #[SerializedName('can_accept_secret_chats')]
        private bool $canAcceptSecretChats,
        /** True, if incoming calls can be accepted by the session */
        #[SerializedName('can_accept_calls')]
        private bool $canAcceptCalls,
        /** Session type based on the system and application version, which can be used to display a corresponding icon */
        #[SerializedName('type')]
        private SessionType|null $type = null,
        /** Telegram API identifier, as provided by the application */
        #[SerializedName('api_id')]
        private int $apiId,
        /** Name of the application, as provided by the application */
        #[SerializedName('application_name')]
        private string $applicationName,
        /** The version of the application, as provided by the application */
        #[SerializedName('application_version')]
        private string $applicationVersion,
        /** True, if the application is an official application or uses the api_id of an official application */
        #[SerializedName('is_official_application')]
        private bool $isOfficialApplication,
        /** Model of the device the application has been run or is running on, as provided by the application */
        #[SerializedName('device_model')]
        private string $deviceModel,
        /** Operating system the application has been run or is running on, as provided by the application */
        #[SerializedName('platform')]
        private string $platform,
        /** Version of the operating system the application has been run or is running on, as provided by the application */
        #[SerializedName('system_version')]
        private string $systemVersion,
        /** Point in time (Unix timestamp) when the user has logged in */
        #[SerializedName('log_in_date')]
        private int $logInDate,
        /** Point in time (Unix timestamp) when the session was last used */
        #[SerializedName('last_active_date')]
        private int $lastActiveDate,
        /** IP address from which the session was created, in human-readable format */
        #[SerializedName('ip_address')]
        private string $ipAddress,
        /** A human-readable description of the location from which the session was created, based on the IP address */
        #[SerializedName('location')]
        private string $location,
    ) {
    }

    /**
     * Get Session identifier.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Session identifier.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get True, if this session is the current session.
     */
    public function getIsCurrent(): bool
    {
        return $this->isCurrent;
    }

    /**
     * Set True, if this session is the current session.
     */
    public function setIsCurrent(bool $isCurrent): self
    {
        $this->isCurrent = $isCurrent;

        return $this;
    }

    /**
     * Get True, if a 2-step verification password is needed to complete authorization of the session.
     */
    public function getIsPasswordPending(): bool
    {
        return $this->isPasswordPending;
    }

    /**
     * Set True, if a 2-step verification password is needed to complete authorization of the session.
     */
    public function setIsPasswordPending(bool $isPasswordPending): self
    {
        $this->isPasswordPending = $isPasswordPending;

        return $this;
    }

    /**
     * Get True, if the session wasn't confirmed from another session.
     */
    public function getIsUnconfirmed(): bool
    {
        return $this->isUnconfirmed;
    }

    /**
     * Set True, if the session wasn't confirmed from another session.
     */
    public function setIsUnconfirmed(bool $isUnconfirmed): self
    {
        $this->isUnconfirmed = $isUnconfirmed;

        return $this;
    }

    /**
     * Get True, if incoming secret chats can be accepted by the session.
     */
    public function getCanAcceptSecretChats(): bool
    {
        return $this->canAcceptSecretChats;
    }

    /**
     * Set True, if incoming secret chats can be accepted by the session.
     */
    public function setCanAcceptSecretChats(bool $canAcceptSecretChats): self
    {
        $this->canAcceptSecretChats = $canAcceptSecretChats;

        return $this;
    }

    /**
     * Get True, if incoming calls can be accepted by the session.
     */
    public function getCanAcceptCalls(): bool
    {
        return $this->canAcceptCalls;
    }

    /**
     * Set True, if incoming calls can be accepted by the session.
     */
    public function setCanAcceptCalls(bool $canAcceptCalls): self
    {
        $this->canAcceptCalls = $canAcceptCalls;

        return $this;
    }

    /**
     * Get Session type based on the system and application version, which can be used to display a corresponding icon.
     */
    public function getType(): SessionType|null
    {
        return $this->type;
    }

    /**
     * Set Session type based on the system and application version, which can be used to display a corresponding icon.
     */
    public function setType(SessionType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get Telegram API identifier, as provided by the application.
     */
    public function getApiId(): int
    {
        return $this->apiId;
    }

    /**
     * Set Telegram API identifier, as provided by the application.
     */
    public function setApiId(int $apiId): self
    {
        $this->apiId = $apiId;

        return $this;
    }

    /**
     * Get Name of the application, as provided by the application.
     */
    public function getApplicationName(): string
    {
        return $this->applicationName;
    }

    /**
     * Set Name of the application, as provided by the application.
     */
    public function setApplicationName(string $applicationName): self
    {
        $this->applicationName = $applicationName;

        return $this;
    }

    /**
     * Get The version of the application, as provided by the application.
     */
    public function getApplicationVersion(): string
    {
        return $this->applicationVersion;
    }

    /**
     * Set The version of the application, as provided by the application.
     */
    public function setApplicationVersion(string $applicationVersion): self
    {
        $this->applicationVersion = $applicationVersion;

        return $this;
    }

    /**
     * Get True, if the application is an official application or uses the api_id of an official application.
     */
    public function getIsOfficialApplication(): bool
    {
        return $this->isOfficialApplication;
    }

    /**
     * Set True, if the application is an official application or uses the api_id of an official application.
     */
    public function setIsOfficialApplication(bool $isOfficialApplication): self
    {
        $this->isOfficialApplication = $isOfficialApplication;

        return $this;
    }

    /**
     * Get Model of the device the application has been run or is running on, as provided by the application.
     */
    public function getDeviceModel(): string
    {
        return $this->deviceModel;
    }

    /**
     * Set Model of the device the application has been run or is running on, as provided by the application.
     */
    public function setDeviceModel(string $deviceModel): self
    {
        $this->deviceModel = $deviceModel;

        return $this;
    }

    /**
     * Get Operating system the application has been run or is running on, as provided by the application.
     */
    public function getPlatform(): string
    {
        return $this->platform;
    }

    /**
     * Set Operating system the application has been run or is running on, as provided by the application.
     */
    public function setPlatform(string $platform): self
    {
        $this->platform = $platform;

        return $this;
    }

    /**
     * Get Version of the operating system the application has been run or is running on, as provided by the application.
     */
    public function getSystemVersion(): string
    {
        return $this->systemVersion;
    }

    /**
     * Set Version of the operating system the application has been run or is running on, as provided by the application.
     */
    public function setSystemVersion(string $systemVersion): self
    {
        $this->systemVersion = $systemVersion;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the user has logged in.
     */
    public function getLogInDate(): int
    {
        return $this->logInDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the user has logged in.
     */
    public function setLogInDate(int $logInDate): self
    {
        $this->logInDate = $logInDate;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the session was last used.
     */
    public function getLastActiveDate(): int
    {
        return $this->lastActiveDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the session was last used.
     */
    public function setLastActiveDate(int $lastActiveDate): self
    {
        $this->lastActiveDate = $lastActiveDate;

        return $this;
    }

    /**
     * Get IP address from which the session was created, in human-readable format.
     */
    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }

    /**
     * Set IP address from which the session was created, in human-readable format.
     */
    public function setIpAddress(string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * Get A human-readable description of the location from which the session was created, based on the IP address.
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * Set A human-readable description of the location from which the session was created, based on the IP address.
     */
    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'session',
            'id' => $this->getId(),
            'is_current' => $this->getIsCurrent(),
            'is_password_pending' => $this->getIsPasswordPending(),
            'is_unconfirmed' => $this->getIsUnconfirmed(),
            'can_accept_secret_chats' => $this->getCanAcceptSecretChats(),
            'can_accept_calls' => $this->getCanAcceptCalls(),
            'type' => $this->getType(),
            'api_id' => $this->getApiId(),
            'application_name' => $this->getApplicationName(),
            'application_version' => $this->getApplicationVersion(),
            'is_official_application' => $this->getIsOfficialApplication(),
            'device_model' => $this->getDeviceModel(),
            'platform' => $this->getPlatform(),
            'system_version' => $this->getSystemVersion(),
            'log_in_date' => $this->getLogInDate(),
            'last_active_date' => $this->getLastActiveDate(),
            'ip_address' => $this->getIpAddress(),
            'location' => $this->getLocation(),
        ];
    }
}
