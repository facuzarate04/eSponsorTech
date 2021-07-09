<div>
    <div id="tweet-component">
        <div id="header">
            <h5>@ {{ $tweet['user']['username'] }}</h5>
            <h6 style="font-weight: lighter">{{ $tweet['created_at'] }}</h6>
        </div>
        <div id="body">
            <h5>{{ $tweet['text'] }}</h5>
        </div>
    </div>
</div>