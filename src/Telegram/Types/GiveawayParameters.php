<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes parameters of a giveaway.
 */
class GiveawayParameters implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the supergroup or channel chat, which will be automatically boosted by the winners of the giveaway for duration of the Telegram Premium subscription, */
        #[SerializedName('boosted_chat_id')]
        private int $boostedChatId,
        /** Identifiers of other supergroup or channel chats that must be subscribed by the users to be eligible for the giveaway. There can be up to getOption("giveaway_additional_chat_count_max") additional chats */
        #[SerializedName('additional_chat_ids')]
        private array|null $additionalChatIds = null,
        /** Point in time (Unix timestamp) when the giveaway is expected to be performed; must be 60-getOption("giveaway_duration_max") seconds in the future in scheduled giveaways */
        #[SerializedName('winners_selection_date')]
        private int $winnersSelectionDate,
        /** True, if only new members of the chats will be eligible for the giveaway */
        #[SerializedName('only_new_members')]
        private bool $onlyNewMembers,
        /** True, if the list of winners of the giveaway will be available to everyone */
        #[SerializedName('has_public_winners')]
        private bool $hasPublicWinners,
        /** The list of two-letter ISO 3166-1 alpha-2 codes of countries, users from which will be eligible for the giveaway. If empty, then all users can participate in the giveaway. */
        #[SerializedName('country_codes')]
        private array|null $countryCodes = null,
        /** Additional description of the giveaway prize; 0-128 characters */
        #[SerializedName('prize_description')]
        private string $prizeDescription,
    ) {
    }

    /**
     * Get Identifier of the supergroup or channel chat, which will be automatically boosted by the winners of the giveaway for duration of the Telegram Premium subscription,.
     */
    public function getBoostedChatId(): int
    {
        return $this->boostedChatId;
    }

    /**
     * Set Identifier of the supergroup or channel chat, which will be automatically boosted by the winners of the giveaway for duration of the Telegram Premium subscription,.
     */
    public function setBoostedChatId(int $boostedChatId): self
    {
        $this->boostedChatId = $boostedChatId;

        return $this;
    }

    /**
     * Get Identifiers of other supergroup or channel chats that must be subscribed by the users to be eligible for the giveaway. There can be up to getOption("giveaway_additional_chat_count_max") additional chats.
     */
    public function getAdditionalChatIds(): array|null
    {
        return $this->additionalChatIds;
    }

    /**
     * Set Identifiers of other supergroup or channel chats that must be subscribed by the users to be eligible for the giveaway. There can be up to getOption("giveaway_additional_chat_count_max") additional chats.
     */
    public function setAdditionalChatIds(array|null $additionalChatIds): self
    {
        $this->additionalChatIds = $additionalChatIds;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the giveaway is expected to be performed; must be 60-getOption("giveaway_duration_max") seconds in the future in scheduled giveaways.
     */
    public function getWinnersSelectionDate(): int
    {
        return $this->winnersSelectionDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the giveaway is expected to be performed; must be 60-getOption("giveaway_duration_max") seconds in the future in scheduled giveaways.
     */
    public function setWinnersSelectionDate(int $winnersSelectionDate): self
    {
        $this->winnersSelectionDate = $winnersSelectionDate;

        return $this;
    }

    /**
     * Get True, if only new members of the chats will be eligible for the giveaway.
     */
    public function getOnlyNewMembers(): bool
    {
        return $this->onlyNewMembers;
    }

    /**
     * Set True, if only new members of the chats will be eligible for the giveaway.
     */
    public function setOnlyNewMembers(bool $onlyNewMembers): self
    {
        $this->onlyNewMembers = $onlyNewMembers;

        return $this;
    }

    /**
     * Get True, if the list of winners of the giveaway will be available to everyone.
     */
    public function getHasPublicWinners(): bool
    {
        return $this->hasPublicWinners;
    }

    /**
     * Set True, if the list of winners of the giveaway will be available to everyone.
     */
    public function setHasPublicWinners(bool $hasPublicWinners): self
    {
        $this->hasPublicWinners = $hasPublicWinners;

        return $this;
    }

    /**
     * Get The list of two-letter ISO 3166-1 alpha-2 codes of countries, users from which will be eligible for the giveaway. If empty, then all users can participate in the giveaway..
     */
    public function getCountryCodes(): array|null
    {
        return $this->countryCodes;
    }

    /**
     * Set The list of two-letter ISO 3166-1 alpha-2 codes of countries, users from which will be eligible for the giveaway. If empty, then all users can participate in the giveaway..
     */
    public function setCountryCodes(array|null $countryCodes): self
    {
        $this->countryCodes = $countryCodes;

        return $this;
    }

    /**
     * Get Additional description of the giveaway prize; 0-128 characters.
     */
    public function getPrizeDescription(): string
    {
        return $this->prizeDescription;
    }

    /**
     * Set Additional description of the giveaway prize; 0-128 characters.
     */
    public function setPrizeDescription(string $prizeDescription): self
    {
        $this->prizeDescription = $prizeDescription;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'giveawayParameters',
            'boosted_chat_id' => $this->getBoostedChatId(),
            'additional_chat_ids' => $this->getAdditionalChatIds(),
            'winners_selection_date' => $this->getWinnersSelectionDate(),
            'only_new_members' => $this->getOnlyNewMembers(),
            'has_public_winners' => $this->getHasPublicWinners(),
            'country_codes' => $this->getCountryCodes(),
            'prize_description' => $this->getPrizeDescription(),
        ];
    }
}
