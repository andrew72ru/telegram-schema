<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * TDLib needs the user's email address to authorize. Call setAuthenticationEmailAddress to provide the email address, or directly call checkAuthenticationEmailCode with Apple ID/Google ID token if allowed
 */
class AuthorizationStateWaitEmailAddress extends AuthorizationState implements \JsonSerializable
{
    public function __construct(
        /** True, if authorization through Apple ID is allowed */
        #[SerializedName('allow_apple_id')]
        private bool $allowAppleId,
        /** True, if authorization through Google ID is allowed */
        #[SerializedName('allow_google_id')]
        private bool $allowGoogleId,
    ) {
    }

    /**
     * Get True, if authorization through Apple ID is allowed
     */
    public function getAllowAppleId(): bool
    {
        return $this->allowAppleId;
    }

    /**
     * Set True, if authorization through Apple ID is allowed
     */
    public function setAllowAppleId(bool $allowAppleId): self
    {
        $this->allowAppleId = $allowAppleId;

        return $this;
    }

    /**
     * Get True, if authorization through Google ID is allowed
     */
    public function getAllowGoogleId(): bool
    {
        return $this->allowGoogleId;
    }

    /**
     * Set True, if authorization through Google ID is allowed
     */
    public function setAllowGoogleId(bool $allowGoogleId): self
    {
        $this->allowGoogleId = $allowGoogleId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'authorizationStateWaitEmailAddress',
            'allow_apple_id' => $this->getAllowAppleId(),
            'allow_google_id' => $this->getAllowGoogleId(),
        ];
    }
}
