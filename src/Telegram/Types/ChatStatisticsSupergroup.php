<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A detailed statistics about a supergroup chat
 */
class ChatStatisticsSupergroup extends ChatStatistics implements \JsonSerializable
{
    public function __construct(
        /** A period to which the statistics applies */
        #[SerializedName('period')]
        private DateRange|null $period = null,
        /** Number of members in the chat */
        #[SerializedName('member_count')]
        private StatisticalValue|null $memberCount = null,
        /** Number of messages sent to the chat */
        #[SerializedName('message_count')]
        private StatisticalValue|null $messageCount = null,
        /** Number of users who viewed messages in the chat */
        #[SerializedName('viewer_count')]
        private StatisticalValue|null $viewerCount = null,
        /** Number of users who sent messages to the chat */
        #[SerializedName('sender_count')]
        private StatisticalValue|null $senderCount = null,
        /** A graph containing number of members in the chat */
        #[SerializedName('member_count_graph')]
        private StatisticalGraph|null $memberCountGraph = null,
        /** A graph containing number of members joined and left the chat */
        #[SerializedName('join_graph')]
        private StatisticalGraph|null $joinGraph = null,
        /** A graph containing number of new member joins per source */
        #[SerializedName('join_by_source_graph')]
        private StatisticalGraph|null $joinBySourceGraph = null,
        /** A graph containing distribution of active users per language */
        #[SerializedName('language_graph')]
        private StatisticalGraph|null $languageGraph = null,
        /** A graph containing distribution of sent messages by content type */
        #[SerializedName('message_content_graph')]
        private StatisticalGraph|null $messageContentGraph = null,
        /** A graph containing number of different actions in the chat */
        #[SerializedName('action_graph')]
        private StatisticalGraph|null $actionGraph = null,
        /** A graph containing distribution of message views per hour */
        #[SerializedName('day_graph')]
        private StatisticalGraph|null $dayGraph = null,
        /** A graph containing distribution of message views per day of week */
        #[SerializedName('week_graph')]
        private StatisticalGraph|null $weekGraph = null,
        /** List of users sent most messages in the last week */
        #[SerializedName('top_senders')]
        private array|null $topSenders = null,
        /** List of most active administrators in the last week */
        #[SerializedName('top_administrators')]
        private array|null $topAdministrators = null,
        /** List of most active inviters of new members in the last week */
        #[SerializedName('top_inviters')]
        private array|null $topInviters = null,
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
     * Get Number of messages sent to the chat
     */
    public function getMessageCount(): StatisticalValue|null
    {
        return $this->messageCount;
    }

    /**
     * Set Number of messages sent to the chat
     */
    public function setMessageCount(StatisticalValue|null $messageCount): self
    {
        $this->messageCount = $messageCount;

        return $this;
    }

    /**
     * Get Number of users who viewed messages in the chat
     */
    public function getViewerCount(): StatisticalValue|null
    {
        return $this->viewerCount;
    }

    /**
     * Set Number of users who viewed messages in the chat
     */
    public function setViewerCount(StatisticalValue|null $viewerCount): self
    {
        $this->viewerCount = $viewerCount;

        return $this;
    }

    /**
     * Get Number of users who sent messages to the chat
     */
    public function getSenderCount(): StatisticalValue|null
    {
        return $this->senderCount;
    }

    /**
     * Set Number of users who sent messages to the chat
     */
    public function setSenderCount(StatisticalValue|null $senderCount): self
    {
        $this->senderCount = $senderCount;

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
     * Get A graph containing distribution of active users per language
     */
    public function getLanguageGraph(): StatisticalGraph|null
    {
        return $this->languageGraph;
    }

    /**
     * Set A graph containing distribution of active users per language
     */
    public function setLanguageGraph(StatisticalGraph|null $languageGraph): self
    {
        $this->languageGraph = $languageGraph;

        return $this;
    }

    /**
     * Get A graph containing distribution of sent messages by content type
     */
    public function getMessageContentGraph(): StatisticalGraph|null
    {
        return $this->messageContentGraph;
    }

    /**
     * Set A graph containing distribution of sent messages by content type
     */
    public function setMessageContentGraph(StatisticalGraph|null $messageContentGraph): self
    {
        $this->messageContentGraph = $messageContentGraph;

        return $this;
    }

    /**
     * Get A graph containing number of different actions in the chat
     */
    public function getActionGraph(): StatisticalGraph|null
    {
        return $this->actionGraph;
    }

    /**
     * Set A graph containing number of different actions in the chat
     */
    public function setActionGraph(StatisticalGraph|null $actionGraph): self
    {
        $this->actionGraph = $actionGraph;

        return $this;
    }

    /**
     * Get A graph containing distribution of message views per hour
     */
    public function getDayGraph(): StatisticalGraph|null
    {
        return $this->dayGraph;
    }

    /**
     * Set A graph containing distribution of message views per hour
     */
    public function setDayGraph(StatisticalGraph|null $dayGraph): self
    {
        $this->dayGraph = $dayGraph;

        return $this;
    }

    /**
     * Get A graph containing distribution of message views per day of week
     */
    public function getWeekGraph(): StatisticalGraph|null
    {
        return $this->weekGraph;
    }

    /**
     * Set A graph containing distribution of message views per day of week
     */
    public function setWeekGraph(StatisticalGraph|null $weekGraph): self
    {
        $this->weekGraph = $weekGraph;

        return $this;
    }

    /**
     * Get List of users sent most messages in the last week
     */
    public function getTopSenders(): array|null
    {
        return $this->topSenders;
    }

    /**
     * Set List of users sent most messages in the last week
     */
    public function setTopSenders(array|null $topSenders): self
    {
        $this->topSenders = $topSenders;

        return $this;
    }

    /**
     * Get List of most active administrators in the last week
     */
    public function getTopAdministrators(): array|null
    {
        return $this->topAdministrators;
    }

    /**
     * Set List of most active administrators in the last week
     */
    public function setTopAdministrators(array|null $topAdministrators): self
    {
        $this->topAdministrators = $topAdministrators;

        return $this;
    }

    /**
     * Get List of most active inviters of new members in the last week
     */
    public function getTopInviters(): array|null
    {
        return $this->topInviters;
    }

    /**
     * Set List of most active inviters of new members in the last week
     */
    public function setTopInviters(array|null $topInviters): self
    {
        $this->topInviters = $topInviters;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatStatisticsSupergroup',
            'period' => $this->getPeriod(),
            'member_count' => $this->getMemberCount(),
            'message_count' => $this->getMessageCount(),
            'viewer_count' => $this->getViewerCount(),
            'sender_count' => $this->getSenderCount(),
            'member_count_graph' => $this->getMemberCountGraph(),
            'join_graph' => $this->getJoinGraph(),
            'join_by_source_graph' => $this->getJoinBySourceGraph(),
            'language_graph' => $this->getLanguageGraph(),
            'message_content_graph' => $this->getMessageContentGraph(),
            'action_graph' => $this->getActionGraph(),
            'day_graph' => $this->getDayGraph(),
            'week_graph' => $this->getWeekGraph(),
            'top_senders' => $this->getTopSenders(),
            'top_administrators' => $this->getTopAdministrators(),
            'top_inviters' => $this->getTopInviters(),
        ];
    }
}
