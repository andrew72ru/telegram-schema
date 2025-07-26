<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A detailed statistics about a channel chat
 */
class ChatStatisticsChannel extends ChatStatistics implements \JsonSerializable
{
    public function __construct(
        /** A period to which the statistics applies */
        #[SerializedName('period')]
        private DateRange|null $period = null,
        /** Number of members in the chat */
        #[SerializedName('member_count')]
        private StatisticalValue|null $memberCount = null,
        /** Mean number of times the recently sent messages were viewed */
        #[SerializedName('mean_message_view_count')]
        private StatisticalValue|null $meanMessageViewCount = null,
        /** Mean number of times the recently sent messages were shared */
        #[SerializedName('mean_message_share_count')]
        private StatisticalValue|null $meanMessageShareCount = null,
        /** Mean number of times reactions were added to the recently sent messages */
        #[SerializedName('mean_message_reaction_count')]
        private StatisticalValue|null $meanMessageReactionCount = null,
        /** Mean number of times the recently posted stories were viewed */
        #[SerializedName('mean_story_view_count')]
        private StatisticalValue|null $meanStoryViewCount = null,
        /** Mean number of times the recently posted stories were shared */
        #[SerializedName('mean_story_share_count')]
        private StatisticalValue|null $meanStoryShareCount = null,
        /** Mean number of times reactions were added to the recently posted stories */
        #[SerializedName('mean_story_reaction_count')]
        private StatisticalValue|null $meanStoryReactionCount = null,
        /** A percentage of users with enabled notifications for the chat; 0-100 */
        #[SerializedName('enabled_notifications_percentage')]
        private float $enabledNotificationsPercentage,
        /** A graph containing number of members in the chat */
        #[SerializedName('member_count_graph')]
        private StatisticalGraph|null $memberCountGraph = null,
        /** A graph containing number of members joined and left the chat */
        #[SerializedName('join_graph')]
        private StatisticalGraph|null $joinGraph = null,
        /** A graph containing number of members muted and unmuted the chat */
        #[SerializedName('mute_graph')]
        private StatisticalGraph|null $muteGraph = null,
        /** A graph containing number of message views in a given hour in the last two weeks */
        #[SerializedName('view_count_by_hour_graph')]
        private StatisticalGraph|null $viewCountByHourGraph = null,
        /** A graph containing number of message views per source */
        #[SerializedName('view_count_by_source_graph')]
        private StatisticalGraph|null $viewCountBySourceGraph = null,
        /** A graph containing number of new member joins per source */
        #[SerializedName('join_by_source_graph')]
        private StatisticalGraph|null $joinBySourceGraph = null,
        /** A graph containing number of users viewed chat messages per language */
        #[SerializedName('language_graph')]
        private StatisticalGraph|null $languageGraph = null,
        /** A graph containing number of chat message views and shares */
        #[SerializedName('message_interaction_graph')]
        private StatisticalGraph|null $messageInteractionGraph = null,
        /** A graph containing number of reactions on messages */
        #[SerializedName('message_reaction_graph')]
        private StatisticalGraph|null $messageReactionGraph = null,
        /** A graph containing number of story views and shares */
        #[SerializedName('story_interaction_graph')]
        private StatisticalGraph|null $storyInteractionGraph = null,
        /** A graph containing number of reactions on stories */
        #[SerializedName('story_reaction_graph')]
        private StatisticalGraph|null $storyReactionGraph = null,
        /** A graph containing number of views of associated with the chat instant views */
        #[SerializedName('instant_view_interaction_graph')]
        private StatisticalGraph|null $instantViewInteractionGraph = null,
        /** Detailed statistics about number of views and shares of recently sent messages and posted stories */
        #[SerializedName('recent_interactions')]
        private array|null $recentInteractions = null,
    ) {
    }

    /**
     * Get A period to which the statistics applies
     */
    public function getPeriod(): DateRange|null
    {
        return $this->period;
    }

    /**
     * Set A period to which the statistics applies
     */
    public function setPeriod(DateRange|null $period): self
    {
        $this->period = $period;

        return $this;
    }

    /**
     * Get Number of members in the chat
     */
    public function getMemberCount(): StatisticalValue|null
    {
        return $this->memberCount;
    }

    /**
     * Set Number of members in the chat
     */
    public function setMemberCount(StatisticalValue|null $memberCount): self
    {
        $this->memberCount = $memberCount;

        return $this;
    }

    /**
     * Get Mean number of times the recently sent messages were viewed
     */
    public function getMeanMessageViewCount(): StatisticalValue|null
    {
        return $this->meanMessageViewCount;
    }

    /**
     * Set Mean number of times the recently sent messages were viewed
     */
    public function setMeanMessageViewCount(StatisticalValue|null $meanMessageViewCount): self
    {
        $this->meanMessageViewCount = $meanMessageViewCount;

        return $this;
    }

    /**
     * Get Mean number of times the recently sent messages were shared
     */
    public function getMeanMessageShareCount(): StatisticalValue|null
    {
        return $this->meanMessageShareCount;
    }

    /**
     * Set Mean number of times the recently sent messages were shared
     */
    public function setMeanMessageShareCount(StatisticalValue|null $meanMessageShareCount): self
    {
        $this->meanMessageShareCount = $meanMessageShareCount;

        return $this;
    }

    /**
     * Get Mean number of times reactions were added to the recently sent messages
     */
    public function getMeanMessageReactionCount(): StatisticalValue|null
    {
        return $this->meanMessageReactionCount;
    }

    /**
     * Set Mean number of times reactions were added to the recently sent messages
     */
    public function setMeanMessageReactionCount(StatisticalValue|null $meanMessageReactionCount): self
    {
        $this->meanMessageReactionCount = $meanMessageReactionCount;

        return $this;
    }

    /**
     * Get Mean number of times the recently posted stories were viewed
     */
    public function getMeanStoryViewCount(): StatisticalValue|null
    {
        return $this->meanStoryViewCount;
    }

    /**
     * Set Mean number of times the recently posted stories were viewed
     */
    public function setMeanStoryViewCount(StatisticalValue|null $meanStoryViewCount): self
    {
        $this->meanStoryViewCount = $meanStoryViewCount;

        return $this;
    }

    /**
     * Get Mean number of times the recently posted stories were shared
     */
    public function getMeanStoryShareCount(): StatisticalValue|null
    {
        return $this->meanStoryShareCount;
    }

    /**
     * Set Mean number of times the recently posted stories were shared
     */
    public function setMeanStoryShareCount(StatisticalValue|null $meanStoryShareCount): self
    {
        $this->meanStoryShareCount = $meanStoryShareCount;

        return $this;
    }

    /**
     * Get Mean number of times reactions were added to the recently posted stories
     */
    public function getMeanStoryReactionCount(): StatisticalValue|null
    {
        return $this->meanStoryReactionCount;
    }

    /**
     * Set Mean number of times reactions were added to the recently posted stories
     */
    public function setMeanStoryReactionCount(StatisticalValue|null $meanStoryReactionCount): self
    {
        $this->meanStoryReactionCount = $meanStoryReactionCount;

        return $this;
    }

    /**
     * Get A percentage of users with enabled notifications for the chat; 0-100
     */
    public function getEnabledNotificationsPercentage(): float
    {
        return $this->enabledNotificationsPercentage;
    }

    /**
     * Set A percentage of users with enabled notifications for the chat; 0-100
     */
    public function setEnabledNotificationsPercentage(float $enabledNotificationsPercentage): self
    {
        $this->enabledNotificationsPercentage = $enabledNotificationsPercentage;

        return $this;
    }

    /**
     * Get A graph containing number of members in the chat
     */
    public function getMemberCountGraph(): StatisticalGraph|null
    {
        return $this->memberCountGraph;
    }

    /**
     * Set A graph containing number of members in the chat
     */
    public function setMemberCountGraph(StatisticalGraph|null $memberCountGraph): self
    {
        $this->memberCountGraph = $memberCountGraph;

        return $this;
    }

    /**
     * Get A graph containing number of members joined and left the chat
     */
    public function getJoinGraph(): StatisticalGraph|null
    {
        return $this->joinGraph;
    }

    /**
     * Set A graph containing number of members joined and left the chat
     */
    public function setJoinGraph(StatisticalGraph|null $joinGraph): self
    {
        $this->joinGraph = $joinGraph;

        return $this;
    }

    /**
     * Get A graph containing number of members muted and unmuted the chat
     */
    public function getMuteGraph(): StatisticalGraph|null
    {
        return $this->muteGraph;
    }

    /**
     * Set A graph containing number of members muted and unmuted the chat
     */
    public function setMuteGraph(StatisticalGraph|null $muteGraph): self
    {
        $this->muteGraph = $muteGraph;

        return $this;
    }

    /**
     * Get A graph containing number of message views in a given hour in the last two weeks
     */
    public function getViewCountByHourGraph(): StatisticalGraph|null
    {
        return $this->viewCountByHourGraph;
    }

    /**
     * Set A graph containing number of message views in a given hour in the last two weeks
     */
    public function setViewCountByHourGraph(StatisticalGraph|null $viewCountByHourGraph): self
    {
        $this->viewCountByHourGraph = $viewCountByHourGraph;

        return $this;
    }

    /**
     * Get A graph containing number of message views per source
     */
    public function getViewCountBySourceGraph(): StatisticalGraph|null
    {
        return $this->viewCountBySourceGraph;
    }

    /**
     * Set A graph containing number of message views per source
     */
    public function setViewCountBySourceGraph(StatisticalGraph|null $viewCountBySourceGraph): self
    {
        $this->viewCountBySourceGraph = $viewCountBySourceGraph;

        return $this;
    }

    /**
     * Get A graph containing number of new member joins per source
     */
    public function getJoinBySourceGraph(): StatisticalGraph|null
    {
        return $this->joinBySourceGraph;
    }

    /**
     * Set A graph containing number of new member joins per source
     */
    public function setJoinBySourceGraph(StatisticalGraph|null $joinBySourceGraph): self
    {
        $this->joinBySourceGraph = $joinBySourceGraph;

        return $this;
    }

    /**
     * Get A graph containing number of users viewed chat messages per language
     */
    public function getLanguageGraph(): StatisticalGraph|null
    {
        return $this->languageGraph;
    }

    /**
     * Set A graph containing number of users viewed chat messages per language
     */
    public function setLanguageGraph(StatisticalGraph|null $languageGraph): self
    {
        $this->languageGraph = $languageGraph;

        return $this;
    }

    /**
     * Get A graph containing number of chat message views and shares
     */
    public function getMessageInteractionGraph(): StatisticalGraph|null
    {
        return $this->messageInteractionGraph;
    }

    /**
     * Set A graph containing number of chat message views and shares
     */
    public function setMessageInteractionGraph(StatisticalGraph|null $messageInteractionGraph): self
    {
        $this->messageInteractionGraph = $messageInteractionGraph;

        return $this;
    }

    /**
     * Get A graph containing number of reactions on messages
     */
    public function getMessageReactionGraph(): StatisticalGraph|null
    {
        return $this->messageReactionGraph;
    }

    /**
     * Set A graph containing number of reactions on messages
     */
    public function setMessageReactionGraph(StatisticalGraph|null $messageReactionGraph): self
    {
        $this->messageReactionGraph = $messageReactionGraph;

        return $this;
    }

    /**
     * Get A graph containing number of story views and shares
     */
    public function getStoryInteractionGraph(): StatisticalGraph|null
    {
        return $this->storyInteractionGraph;
    }

    /**
     * Set A graph containing number of story views and shares
     */
    public function setStoryInteractionGraph(StatisticalGraph|null $storyInteractionGraph): self
    {
        $this->storyInteractionGraph = $storyInteractionGraph;

        return $this;
    }

    /**
     * Get A graph containing number of reactions on stories
     */
    public function getStoryReactionGraph(): StatisticalGraph|null
    {
        return $this->storyReactionGraph;
    }

    /**
     * Set A graph containing number of reactions on stories
     */
    public function setStoryReactionGraph(StatisticalGraph|null $storyReactionGraph): self
    {
        $this->storyReactionGraph = $storyReactionGraph;

        return $this;
    }

    /**
     * Get A graph containing number of views of associated with the chat instant views
     */
    public function getInstantViewInteractionGraph(): StatisticalGraph|null
    {
        return $this->instantViewInteractionGraph;
    }

    /**
     * Set A graph containing number of views of associated with the chat instant views
     */
    public function setInstantViewInteractionGraph(StatisticalGraph|null $instantViewInteractionGraph): self
    {
        $this->instantViewInteractionGraph = $instantViewInteractionGraph;

        return $this;
    }

    /**
     * Get Detailed statistics about number of views and shares of recently sent messages and posted stories
     */
    public function getRecentInteractions(): array|null
    {
        return $this->recentInteractions;
    }

    /**
     * Set Detailed statistics about number of views and shares of recently sent messages and posted stories
     */
    public function setRecentInteractions(array|null $recentInteractions): self
    {
        $this->recentInteractions = $recentInteractions;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatStatisticsChannel',
            'period' => $this->getPeriod(),
            'member_count' => $this->getMemberCount(),
            'mean_message_view_count' => $this->getMeanMessageViewCount(),
            'mean_message_share_count' => $this->getMeanMessageShareCount(),
            'mean_message_reaction_count' => $this->getMeanMessageReactionCount(),
            'mean_story_view_count' => $this->getMeanStoryViewCount(),
            'mean_story_share_count' => $this->getMeanStoryShareCount(),
            'mean_story_reaction_count' => $this->getMeanStoryReactionCount(),
            'enabled_notifications_percentage' => $this->getEnabledNotificationsPercentage(),
            'member_count_graph' => $this->getMemberCountGraph(),
            'join_graph' => $this->getJoinGraph(),
            'mute_graph' => $this->getMuteGraph(),
            'view_count_by_hour_graph' => $this->getViewCountByHourGraph(),
            'view_count_by_source_graph' => $this->getViewCountBySourceGraph(),
            'join_by_source_graph' => $this->getJoinBySourceGraph(),
            'language_graph' => $this->getLanguageGraph(),
            'message_interaction_graph' => $this->getMessageInteractionGraph(),
            'message_reaction_graph' => $this->getMessageReactionGraph(),
            'story_interaction_graph' => $this->getStoryInteractionGraph(),
            'story_reaction_graph' => $this->getStoryReactionGraph(),
            'instant_view_interaction_graph' => $this->getInstantViewInteractionGraph(),
            'recent_interactions' => $this->getRecentInteractions(),
        ];
    }
}
