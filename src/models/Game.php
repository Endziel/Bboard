<?php

class Game
{
    private $title;
    private $image;
    private $minimum_time_minute;
    private $average_time_minute;
    private $minimum_age;
    private $minimum_players;
    private $maximum_players;


    public function __construct($title, $image, $minimum_time_minute, $average_time_minute, $minimum_age, $minimum_players, $maximum_players)
    {
        $this->title = $title;
        $this->image = $image;
        $this->minimum_time_minute = $minimum_time_minute;
        $this->average_time_minute = $average_time_minute;
        $this->minimum_age = $minimum_age;
        $this->minimum_players = $minimum_players;
        $this->maximum_players = $maximum_players;
    }


    public function getTitle()
    {
        return $this->title;
    }


    public function setTitle($title)
    {
        $this->title = $title;
    }


    public function getImage()
    {
        return $this->image;
    }


    public function setImage($image)
    {
        $this->image = $image;
    }


    public function getMinimumTimeMinute()
    {
        return $this->minimum_time_minute;
    }


    public function setMinimumTimeMinute($minimum_time_minute)
    {
        $this->minimum_time_minute = $minimum_time_minute;
    }


    public function getAverageTimeMinute()
    {
        return $this->average_time_minute;
    }


    public function setAverageTimeMinute($average_time_minute)
    {
        $this->average_time_minute = $average_time_minute;
    }


    public function getMinimumAge()
    {
        return $this->minimum_age;
    }


    public function setMinimumAge($minimum_age)
    {
        $this->minimum_age = $minimum_age;
    }


    public function getMinimumPlayers()
    {
        return $this->minimum_players;
    }


    public function setMinimumPlayers($minimum_players)
    {
        $this->minimum_players = $minimum_players;
    }


    public function getMaximumPlayers()
    {
        return $this->maximum_players;
    }


    public function setMaximumPlayers($maximum_players)
    {
        $this->maximum_players = $maximum_players;
    }


}