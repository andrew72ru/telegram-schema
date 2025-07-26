<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * TDLib needs the user's authentication code sent to an email address to authorize. Call checkAuthenticationEmailCode to provide the code
 */
class AuthorizationStateWaitEmailCode extends AuthorizationState implements \JsonSerializable
{
    public function __construct(
        /** True, if authorization through Apple ID is allowed */
        #[SerializedName('allow_apple_id')]
        private bool $allowAppleId,
        /** True, if authorization through Google ID is allowed */
        #[SerializedName('allow_google_id')]
        private bool $allowGoogleId,
        /** Information about the sent authentication code */
        #[SerializedName('code_info')]
        private EmailAddressAuthenticationCodeInfo|null $codeInfo = null,
        /** Reset state of the email address; may be null if the email address can't be reset */
        #[SerializedName('email_address_reset_state')]
        private EmailAddressResetState|null $emailAddressResetState = null,
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

    /**
     * Get Information about the sent authentication code
     */
    public function getCodeInfo(): EmailAddressAuthenticationCodeInfo|null
    {
        return $this->codeInfo;
    }

    /**
     * Set Information about the sent authentication code
     */
    public function setCodeInfo(EmailAddressAuthenticationCodeInfo|null $codeInfo): self
    {
        $this->codeInfo = $codeInfo;

        return $this;
    }

    /**
     * Get Reset state of the email address; may be null if the email address can't be reset
     */
    public function getEmailAddressResetState(): EmailAddressResetState|null
    {
        return $this->emailAddressResetState;
    }

    /**
     * Set Reset state of the email address; may be null if the email address can't be reset
     */
    public function setEmailAddressResetState(EmailAddressResetState|null $emailAddressResetState): self
    {
        $this->emailAddressResetState = $emailAddressResetState;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'authorizationStateWaitEmailCode',
            'allow_apple_id' => $this->getAllowAppleId(),
            'allow_google_id' => $this->getAllowGoogleId(),
            'code_info' => $this->getCodeInfo(),
            'email_address_reset_state' => $this->getEmailAddressResetState(),
        ];
    }
}
