<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Adds a user to the contact list or edits an existing contact by their user identifier.
 */
class AddContact extends Ok implements \JsonSerializable
{
    public function __construct(
        /** The contact to add or edit; phone number may be empty and needs to be specified only if known, vCard is ignored */
        #[SerializedName('contact')]
        private Contact|null $contact = null,
        /** Pass true to share the current user's phone number with the new contact. A corresponding rule to userPrivacySettingShowPhoneNumber will be added if needed. */
        #[SerializedName('share_phone_number')]
        private bool $sharePhoneNumber,
    ) {
    }

    /**
     * Get The contact to add or edit; phone number may be empty and needs to be specified only if known, vCard is ignored.
     */
    public function getContact(): Contact|null
    {
        return $this->contact;
    }

    /**
     * Set The contact to add or edit; phone number may be empty and needs to be specified only if known, vCard is ignored.
     */
    public function setContact(Contact|null $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get Pass true to share the current user's phone number with the new contact. A corresponding rule to userPrivacySettingShowPhoneNumber will be added if needed..
     */
    public function getSharePhoneNumber(): bool
    {
        return $this->sharePhoneNumber;
    }

    /**
     * Set Pass true to share the current user's phone number with the new contact. A corresponding rule to userPrivacySettingShowPhoneNumber will be added if needed..
     */
    public function setSharePhoneNumber(bool $sharePhoneNumber): self
    {
        $this->sharePhoneNumber = $sharePhoneNumber;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'addContact',
            'contact' => $this->getContact(),
            'share_phone_number' => $this->getSharePhoneNumber(),
        ];
    }
}
