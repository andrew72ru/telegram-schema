<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains parameters of the application theme.
 */
class ThemeParameters implements \JsonSerializable
{
    public function __construct(
        /** A color of the background in the RGB format */
        #[SerializedName('background_color')]
        private int $backgroundColor,
        /** A secondary color for the background in the RGB format */
        #[SerializedName('secondary_background_color')]
        private int $secondaryBackgroundColor,
        /** A color of the header background in the RGB format */
        #[SerializedName('header_background_color')]
        private int $headerBackgroundColor,
        /** A color of the bottom bar background in the RGB format */
        #[SerializedName('bottom_bar_background_color')]
        private int $bottomBarBackgroundColor,
        /** A color of the section background in the RGB format */
        #[SerializedName('section_background_color')]
        private int $sectionBackgroundColor,
        /** A color of the section separator in the RGB format */
        #[SerializedName('section_separator_color')]
        private int $sectionSeparatorColor,
        /** A color of text in the RGB format */
        #[SerializedName('text_color')]
        private int $textColor,
        /** An accent color of the text in the RGB format */
        #[SerializedName('accent_text_color')]
        private int $accentTextColor,
        /** A color of text on the section headers in the RGB format */
        #[SerializedName('section_header_text_color')]
        private int $sectionHeaderTextColor,
        /** A color of the subtitle text in the RGB format */
        #[SerializedName('subtitle_text_color')]
        private int $subtitleTextColor,
        /** A color of the text for destructive actions in the RGB format */
        #[SerializedName('destructive_text_color')]
        private int $destructiveTextColor,
        /** A color of hints in the RGB format */
        #[SerializedName('hint_color')]
        private int $hintColor,
        /** A color of links in the RGB format */
        #[SerializedName('link_color')]
        private int $linkColor,
        /** A color of the buttons in the RGB format */
        #[SerializedName('button_color')]
        private int $buttonColor,
        /** A color of text on the buttons in the RGB format */
        #[SerializedName('button_text_color')]
        private int $buttonTextColor,
    ) {
    }

    /**
     * Get A color of the background in the RGB format.
     */
    public function getBackgroundColor(): int
    {
        return $this->backgroundColor;
    }

    /**
     * Set A color of the background in the RGB format.
     */
    public function setBackgroundColor(int $backgroundColor): self
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }

    /**
     * Get A secondary color for the background in the RGB format.
     */
    public function getSecondaryBackgroundColor(): int
    {
        return $this->secondaryBackgroundColor;
    }

    /**
     * Set A secondary color for the background in the RGB format.
     */
    public function setSecondaryBackgroundColor(int $secondaryBackgroundColor): self
    {
        $this->secondaryBackgroundColor = $secondaryBackgroundColor;

        return $this;
    }

    /**
     * Get A color of the header background in the RGB format.
     */
    public function getHeaderBackgroundColor(): int
    {
        return $this->headerBackgroundColor;
    }

    /**
     * Set A color of the header background in the RGB format.
     */
    public function setHeaderBackgroundColor(int $headerBackgroundColor): self
    {
        $this->headerBackgroundColor = $headerBackgroundColor;

        return $this;
    }

    /**
     * Get A color of the bottom bar background in the RGB format.
     */
    public function getBottomBarBackgroundColor(): int
    {
        return $this->bottomBarBackgroundColor;
    }

    /**
     * Set A color of the bottom bar background in the RGB format.
     */
    public function setBottomBarBackgroundColor(int $bottomBarBackgroundColor): self
    {
        $this->bottomBarBackgroundColor = $bottomBarBackgroundColor;

        return $this;
    }

    /**
     * Get A color of the section background in the RGB format.
     */
    public function getSectionBackgroundColor(): int
    {
        return $this->sectionBackgroundColor;
    }

    /**
     * Set A color of the section background in the RGB format.
     */
    public function setSectionBackgroundColor(int $sectionBackgroundColor): self
    {
        $this->sectionBackgroundColor = $sectionBackgroundColor;

        return $this;
    }

    /**
     * Get A color of the section separator in the RGB format.
     */
    public function getSectionSeparatorColor(): int
    {
        return $this->sectionSeparatorColor;
    }

    /**
     * Set A color of the section separator in the RGB format.
     */
    public function setSectionSeparatorColor(int $sectionSeparatorColor): self
    {
        $this->sectionSeparatorColor = $sectionSeparatorColor;

        return $this;
    }

    /**
     * Get A color of text in the RGB format.
     */
    public function getTextColor(): int
    {
        return $this->textColor;
    }

    /**
     * Set A color of text in the RGB format.
     */
    public function setTextColor(int $textColor): self
    {
        $this->textColor = $textColor;

        return $this;
    }

    /**
     * Get An accent color of the text in the RGB format.
     */
    public function getAccentTextColor(): int
    {
        return $this->accentTextColor;
    }

    /**
     * Set An accent color of the text in the RGB format.
     */
    public function setAccentTextColor(int $accentTextColor): self
    {
        $this->accentTextColor = $accentTextColor;

        return $this;
    }

    /**
     * Get A color of text on the section headers in the RGB format.
     */
    public function getSectionHeaderTextColor(): int
    {
        return $this->sectionHeaderTextColor;
    }

    /**
     * Set A color of text on the section headers in the RGB format.
     */
    public function setSectionHeaderTextColor(int $sectionHeaderTextColor): self
    {
        $this->sectionHeaderTextColor = $sectionHeaderTextColor;

        return $this;
    }

    /**
     * Get A color of the subtitle text in the RGB format.
     */
    public function getSubtitleTextColor(): int
    {
        return $this->subtitleTextColor;
    }

    /**
     * Set A color of the subtitle text in the RGB format.
     */
    public function setSubtitleTextColor(int $subtitleTextColor): self
    {
        $this->subtitleTextColor = $subtitleTextColor;

        return $this;
    }

    /**
     * Get A color of the text for destructive actions in the RGB format.
     */
    public function getDestructiveTextColor(): int
    {
        return $this->destructiveTextColor;
    }

    /**
     * Set A color of the text for destructive actions in the RGB format.
     */
    public function setDestructiveTextColor(int $destructiveTextColor): self
    {
        $this->destructiveTextColor = $destructiveTextColor;

        return $this;
    }

    /**
     * Get A color of hints in the RGB format.
     */
    public function getHintColor(): int
    {
        return $this->hintColor;
    }

    /**
     * Set A color of hints in the RGB format.
     */
    public function setHintColor(int $hintColor): self
    {
        $this->hintColor = $hintColor;

        return $this;
    }

    /**
     * Get A color of links in the RGB format.
     */
    public function getLinkColor(): int
    {
        return $this->linkColor;
    }

    /**
     * Set A color of links in the RGB format.
     */
    public function setLinkColor(int $linkColor): self
    {
        $this->linkColor = $linkColor;

        return $this;
    }

    /**
     * Get A color of the buttons in the RGB format.
     */
    public function getButtonColor(): int
    {
        return $this->buttonColor;
    }

    /**
     * Set A color of the buttons in the RGB format.
     */
    public function setButtonColor(int $buttonColor): self
    {
        $this->buttonColor = $buttonColor;

        return $this;
    }

    /**
     * Get A color of text on the buttons in the RGB format.
     */
    public function getButtonTextColor(): int
    {
        return $this->buttonTextColor;
    }

    /**
     * Set A color of text on the buttons in the RGB format.
     */
    public function setButtonTextColor(int $buttonTextColor): self
    {
        $this->buttonTextColor = $buttonTextColor;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'themeParameters',
            'background_color' => $this->getBackgroundColor(),
            'secondary_background_color' => $this->getSecondaryBackgroundColor(),
            'header_background_color' => $this->getHeaderBackgroundColor(),
            'bottom_bar_background_color' => $this->getBottomBarBackgroundColor(),
            'section_background_color' => $this->getSectionBackgroundColor(),
            'section_separator_color' => $this->getSectionSeparatorColor(),
            'text_color' => $this->getTextColor(),
            'accent_text_color' => $this->getAccentTextColor(),
            'section_header_text_color' => $this->getSectionHeaderTextColor(),
            'subtitle_text_color' => $this->getSubtitleTextColor(),
            'destructive_text_color' => $this->getDestructiveTextColor(),
            'hint_color' => $this->getHintColor(),
            'link_color' => $this->getLinkColor(),
            'button_color' => $this->getButtonColor(),
            'button_text_color' => $this->getButtonTextColor(),
        ];
    }
}
