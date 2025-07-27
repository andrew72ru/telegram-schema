<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The freeze state of the current user's account has changed.
 */
class UpdateFreezeState extends Update implements \JsonSerializable
{
    public function __construct(
        /** True, if the account is frozen */
        #[SerializedName('is_frozen')]
        private bool $isFrozen,
        /** Point in time (Unix timestamp) when the account was frozen; 0 if the account isn't frozen */
        #[SerializedName('freezing_date')]
        private int $freezingDate,
        /** Point in time (Unix timestamp) when the account will be deleted and can't be unfrozen; 0 if the account isn't frozen */
        #[SerializedName('deletion_date')]
        private int $deletionDate,
        /** The link to open to send an appeal to unfreeze the account */
        #[SerializedName('appeal_link')]
        private string $appealLink,
    ) {
    }

    /**
     * Get True, if the account is frozen.
     */
    public function getIsFrozen(): bool
    {
        return $this->isFrozen;
    }

    /**
     * Set True, if the account is frozen.
     */
    public function setIsFrozen(bool $isFrozen): self
    {
        $this->isFrozen = $isFrozen;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the account was frozen; 0 if the account isn't frozen.
     */
    public function getFreezingDate(): int
    {
        return $this->freezingDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the account was frozen; 0 if the account isn't frozen.
     */
    public function setFreezingDate(int $freezingDate): self
    {
        $this->freezingDate = $freezingDate;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the account will be deleted and can't be unfrozen; 0 if the account isn't frozen.
     */
    public function getDeletionDate(): int
    {
        return $this->deletionDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the account will be deleted and can't be unfrozen; 0 if the account isn't frozen.
     */
    public function setDeletionDate(int $deletionDate): self
    {
        $this->deletionDate = $deletionDate;

        return $this;
    }

    /**
     * Get The link to open to send an appeal to unfreeze the account.
     */
    public function getAppealLink(): string
    {
        return $this->appealLink;
    }

    /**
     * Set The link to open to send an appeal to unfreeze the account.
     */
    public function setAppealLink(string $appealLink): self
    {
        $this->appealLink = $appealLink;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateFreezeState',
            'is_frozen' => $this->getIsFrozen(),
            'freezing_date' => $this->getFreezingDate(),
            'deletion_date' => $this->getDeletionDate(),
            'appeal_link' => $this->getAppealLink(),
        ];
    }
}
