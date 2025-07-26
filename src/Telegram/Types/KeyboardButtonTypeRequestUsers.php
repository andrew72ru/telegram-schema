<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A button that requests users to be shared by the current user; available only in private chats. Use the method shareUsersWithBot to complete the request
 */
class KeyboardButtonTypeRequestUsers extends KeyboardButtonType implements \JsonSerializable
{
    public function __construct(
        /** Unique button identifier */
        #[SerializedName('id')]
        private int $id,
        /** True, if the shared users must or must not be bots */
        #[SerializedName('restrict_user_is_bot')]
        private bool $restrictUserIsBot,
        /** True, if the shared users must be bots; otherwise, the shared users must not be bots. Ignored if restrict_user_is_bot is false */
        #[SerializedName('user_is_bot')]
        private bool $userIsBot,
        /** True, if the shared users must or must not be Telegram Premium users */
        #[SerializedName('restrict_user_is_premium')]
        private bool $restrictUserIsPremium,
        /** True, if the shared users must be Telegram Premium users; otherwise, the shared users must not be Telegram Premium users. Ignored if restrict_user_is_premium is false */
        #[SerializedName('user_is_premium')]
        private bool $userIsPremium,
        /** The maximum number of users to share */
        #[SerializedName('max_quantity')]
        private int $maxQuantity,
        /** Pass true to request name of the users; bots only */
        #[SerializedName('request_name')]
        private bool $requestName,
        /** Pass true to request username of the users; bots only */
        #[SerializedName('request_username')]
        private bool $requestUsername,
        /** Pass true to request photo of the users; bots only */
        #[SerializedName('request_photo')]
        private bool $requestPhoto,
    ) {
    }

    /**
     * Get Unique button identifier
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Unique button identifier
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get True, if the shared users must or must not be bots
     */
    public function getRestrictUserIsBot(): bool
    {
        return $this->restrictUserIsBot;
    }

    /**
     * Set True, if the shared users must or must not be bots
     */
    public function setRestrictUserIsBot(bool $restrictUserIsBot): self
    {
        $this->restrictUserIsBot = $restrictUserIsBot;

        return $this;
    }

    /**
     * Get True, if the shared users must be bots; otherwise, the shared users must not be bots. Ignored if restrict_user_is_bot is false
     */
    public function getUserIsBot(): bool
    {
        return $this->userIsBot;
    }

    /**
     * Set True, if the shared users must be bots; otherwise, the shared users must not be bots. Ignored if restrict_user_is_bot is false
     */
    public function setUserIsBot(bool $userIsBot): self
    {
        $this->userIsBot = $userIsBot;

        return $this;
    }

    /**
     * Get True, if the shared users must or must not be Telegram Premium users
     */
    public function getRestrictUserIsPremium(): bool
    {
        return $this->restrictUserIsPremium;
    }

    /**
     * Set True, if the shared users must or must not be Telegram Premium users
     */
    public function setRestrictUserIsPremium(bool $restrictUserIsPremium): self
    {
        $this->restrictUserIsPremium = $restrictUserIsPremium;

        return $this;
    }

    /**
     * Get True, if the shared users must be Telegram Premium users; otherwise, the shared users must not be Telegram Premium users. Ignored if restrict_user_is_premium is false
     */
    public function getUserIsPremium(): bool
    {
        return $this->userIsPremium;
    }

    /**
     * Set True, if the shared users must be Telegram Premium users; otherwise, the shared users must not be Telegram Premium users. Ignored if restrict_user_is_premium is false
     */
    public function setUserIsPremium(bool $userIsPremium): self
    {
        $this->userIsPremium = $userIsPremium;

        return $this;
    }

    /**
     * Get The maximum number of users to share
     */
    public function getMaxQuantity(): int
    {
        return $this->maxQuantity;
    }

    /**
     * Set The maximum number of users to share
     */
    public function setMaxQuantity(int $maxQuantity): self
    {
        $this->maxQuantity = $maxQuantity;

        return $this;
    }

    /**
     * Get Pass true to request name of the users; bots only
     */
    public function getRequestName(): bool
    {
        return $this->requestName;
    }

    /**
     * Set Pass true to request name of the users; bots only
     */
    public function setRequestName(bool $requestName): self
    {
        $this->requestName = $requestName;

        return $this;
    }

    /**
     * Get Pass true to request username of the users; bots only
     */
    public function getRequestUsername(): bool
    {
        return $this->requestUsername;
    }

    /**
     * Set Pass true to request username of the users; bots only
     */
    public function setRequestUsername(bool $requestUsername): self
    {
        $this->requestUsername = $requestUsername;

        return $this;
    }

    /**
     * Get Pass true to request photo of the users; bots only
     */
    public function getRequestPhoto(): bool
    {
        return $this->requestPhoto;
    }

    /**
     * Set Pass true to request photo of the users; bots only
     */
    public function setRequestPhoto(bool $requestPhoto): self
    {
        $this->requestPhoto = $requestPhoto;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'keyboardButtonTypeRequestUsers',
            'id' => $this->getId(),
            'restrict_user_is_bot' => $this->getRestrictUserIsBot(),
            'user_is_bot' => $this->getUserIsBot(),
            'restrict_user_is_premium' => $this->getRestrictUserIsPremium(),
            'user_is_premium' => $this->getUserIsPremium(),
            'max_quantity' => $this->getMaxQuantity(),
            'request_name' => $this->getRequestName(),
            'request_username' => $this->getRequestUsername(),
            'request_photo' => $this->getRequestPhoto(),
        ];
    }
}
