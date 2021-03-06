<?php
/**
 * This file is part of the Slack API Bundle, a Symfony bundle for Slack.com
 * Copyright (C) 2015  Tyler Romeo <tylerromeo@gmail.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */


namespace CastlePointAnime\SlackApiBundle\Event;

use Symfony\Component\EventDispatcher\Event;

/**
 * An event that represents a request sent in from Slack
 *
 * @package CastlePointAnime\SlackApiBundle\Event
 */
class HookResponseEvent extends Event
{
    public $team;

    public $channelId;

    public $channelName;

    public $timestamp;

    public $userId;

    public $userName;

    public $text;

    public $triggerWord;

    public $slashCommand;

    public $response;
}
