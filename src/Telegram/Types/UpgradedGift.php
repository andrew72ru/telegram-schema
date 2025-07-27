<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes an upgraded gift that can be transferred to another owner or transferred to the TON blockchain as an NFT.
 */
class UpgradedGift implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the gift */
        #[SerializedName('id')]
        private int $id,
        /** The title of the upgraded gift */
        #[SerializedName('title')]
        private string $title,
        /** Unique name of the upgraded gift that can be used with internalLinkTypeUpgradedGift or sendResoldGift */
        #[SerializedName('name')]
        private string $name,
        /** Unique number of the upgraded gift among gifts upgraded from the same gift */
        #[SerializedName('number')]
        private int $number,
        /** Total number of gifts that were upgraded from the same gift */
        #[SerializedName('total_upgraded_count')]
        private int $totalUpgradedCount,
        /** The maximum number of gifts that can be upgraded from the same gift */
        #[SerializedName('max_upgraded_count')]
        private int $maxUpgradedCount,
        /** Identifier of the user or the chat that owns the upgraded gift; may be null if none or unknown */
        #[SerializedName('owner_id')]
        private MessageSender|null $ownerId = null,
        /** Address of the gift NFT owner in TON blockchain; may be empty if none. Append the address to getOption("ton_blockchain_explorer_url") to get a link with information about the address */
        #[SerializedName('owner_address')]
        private string $ownerAddress,
        /** Name of the owner for the case when owner identifier and address aren't known */
        #[SerializedName('owner_name')]
        private string $ownerName,
        /** Address of the gift NFT in TON blockchain; may be empty if none. Append the address to getOption("ton_blockchain_explorer_url") to get a link with information about the address */
        #[SerializedName('gift_address')]
        private string $giftAddress,
        /** Model of the upgraded gift */
        #[SerializedName('model')]
        private UpgradedGiftModel|null $model = null,
        /** Symbol of the upgraded gift */
        #[SerializedName('symbol')]
        private UpgradedGiftSymbol|null $symbol = null,
        /** Backdrop of the upgraded gift */
        #[SerializedName('backdrop')]
        private UpgradedGiftBackdrop|null $backdrop = null,
        /** Information about the originally sent gift; may be null if unknown */
        #[SerializedName('original_details')]
        private UpgradedGiftOriginalDetails|null $originalDetails = null,
        /** Number of Telegram Stars that must be paid to buy the gift and send it to someone else; 0 if resale isn't possible */
        #[SerializedName('resale_star_count')]
        private int $resaleStarCount,
    ) {
    }

    /**
     * Get Unique identifier of the gift.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Unique identifier of the gift.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get The title of the upgraded gift.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set The title of the upgraded gift.
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get Unique name of the upgraded gift that can be used with internalLinkTypeUpgradedGift or sendResoldGift.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set Unique name of the upgraded gift that can be used with internalLinkTypeUpgradedGift or sendResoldGift.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get Unique number of the upgraded gift among gifts upgraded from the same gift.
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * Set Unique number of the upgraded gift among gifts upgraded from the same gift.
     */
    public function setNumber(int $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get Total number of gifts that were upgraded from the same gift.
     */
    public function getTotalUpgradedCount(): int
    {
        return $this->totalUpgradedCount;
    }

    /**
     * Set Total number of gifts that were upgraded from the same gift.
     */
    public function setTotalUpgradedCount(int $totalUpgradedCount): self
    {
        $this->totalUpgradedCount = $totalUpgradedCount;

        return $this;
    }

    /**
     * Get The maximum number of gifts that can be upgraded from the same gift.
     */
    public function getMaxUpgradedCount(): int
    {
        return $this->maxUpgradedCount;
    }

    /**
     * Set The maximum number of gifts that can be upgraded from the same gift.
     */
    public function setMaxUpgradedCount(int $maxUpgradedCount): self
    {
        $this->maxUpgradedCount = $maxUpgradedCount;

        return $this;
    }

    /**
     * Get Identifier of the user or the chat that owns the upgraded gift; may be null if none or unknown.
     */
    public function getOwnerId(): MessageSender|null
    {
        return $this->ownerId;
    }

    /**
     * Set Identifier of the user or the chat that owns the upgraded gift; may be null if none or unknown.
     */
    public function setOwnerId(MessageSender|null $ownerId): self
    {
        $this->ownerId = $ownerId;

        return $this;
    }

    /**
     * Get Address of the gift NFT owner in TON blockchain; may be empty if none. Append the address to getOption("ton_blockchain_explorer_url") to get a link with information about the address.
     */
    public function getOwnerAddress(): string
    {
        return $this->ownerAddress;
    }

    /**
     * Set Address of the gift NFT owner in TON blockchain; may be empty if none. Append the address to getOption("ton_blockchain_explorer_url") to get a link with information about the address.
     */
    public function setOwnerAddress(string $ownerAddress): self
    {
        $this->ownerAddress = $ownerAddress;

        return $this;
    }

    /**
     * Get Name of the owner for the case when owner identifier and address aren't known.
     */
    public function getOwnerName(): string
    {
        return $this->ownerName;
    }

    /**
     * Set Name of the owner for the case when owner identifier and address aren't known.
     */
    public function setOwnerName(string $ownerName): self
    {
        $this->ownerName = $ownerName;

        return $this;
    }

    /**
     * Get Address of the gift NFT in TON blockchain; may be empty if none. Append the address to getOption("ton_blockchain_explorer_url") to get a link with information about the address.
     */
    public function getGiftAddress(): string
    {
        return $this->giftAddress;
    }

    /**
     * Set Address of the gift NFT in TON blockchain; may be empty if none. Append the address to getOption("ton_blockchain_explorer_url") to get a link with information about the address.
     */
    public function setGiftAddress(string $giftAddress): self
    {
        $this->giftAddress = $giftAddress;

        return $this;
    }

    /**
     * Get Model of the upgraded gift.
     */
    public function getModel(): UpgradedGiftModel|null
    {
        return $this->model;
    }

    /**
     * Set Model of the upgraded gift.
     */
    public function setModel(UpgradedGiftModel|null $model): self
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get Symbol of the upgraded gift.
     */
    public function getSymbol(): UpgradedGiftSymbol|null
    {
        return $this->symbol;
    }

    /**
     * Set Symbol of the upgraded gift.
     */
    public function setSymbol(UpgradedGiftSymbol|null $symbol): self
    {
        $this->symbol = $symbol;

        return $this;
    }

    /**
     * Get Backdrop of the upgraded gift.
     */
    public function getBackdrop(): UpgradedGiftBackdrop|null
    {
        return $this->backdrop;
    }

    /**
     * Set Backdrop of the upgraded gift.
     */
    public function setBackdrop(UpgradedGiftBackdrop|null $backdrop): self
    {
        $this->backdrop = $backdrop;

        return $this;
    }

    /**
     * Get Information about the originally sent gift; may be null if unknown.
     */
    public function getOriginalDetails(): UpgradedGiftOriginalDetails|null
    {
        return $this->originalDetails;
    }

    /**
     * Set Information about the originally sent gift; may be null if unknown.
     */
    public function setOriginalDetails(UpgradedGiftOriginalDetails|null $originalDetails): self
    {
        $this->originalDetails = $originalDetails;

        return $this;
    }

    /**
     * Get Number of Telegram Stars that must be paid to buy the gift and send it to someone else; 0 if resale isn't possible.
     */
    public function getResaleStarCount(): int
    {
        return $this->resaleStarCount;
    }

    /**
     * Set Number of Telegram Stars that must be paid to buy the gift and send it to someone else; 0 if resale isn't possible.
     */
    public function setResaleStarCount(int $resaleStarCount): self
    {
        $this->resaleStarCount = $resaleStarCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'upgradedGift',
            'id' => $this->getId(),
            'title' => $this->getTitle(),
            'name' => $this->getName(),
            'number' => $this->getNumber(),
            'total_upgraded_count' => $this->getTotalUpgradedCount(),
            'max_upgraded_count' => $this->getMaxUpgradedCount(),
            'owner_id' => $this->getOwnerId(),
            'owner_address' => $this->getOwnerAddress(),
            'owner_name' => $this->getOwnerName(),
            'gift_address' => $this->getGiftAddress(),
            'model' => $this->getModel(),
            'symbol' => $this->getSymbol(),
            'backdrop' => $this->getBackdrop(),
            'original_details' => $this->getOriginalDetails(),
            'resale_star_count' => $this->getResaleStarCount(),
        ];
    }
}
