<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class CardTweet extends Component
{
    public $tweet;

    public function __construct($tweet)
    {
        $this->tweet = $tweet;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.card-tweet');
    }
}
