<div>
    <h4 id="tittle">Welcome! {{ Auth::user()['name'] }}</h4>
    <form action="{{ 'home' }}" method="POST">
        @csrf
        <textarea name="text" placeholder="¿Qué está pasando?" maxlength="250" required></textarea>
        <div>
            <button type="submit">Twittear</button>
        </div>
    </form>
</div>
