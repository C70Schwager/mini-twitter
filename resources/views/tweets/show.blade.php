<div>
<p>{{ $tweet->title }}</p>
            <p>{{ $tweet->text }}</p>

            <form action="{{ route('tweets.destroy', $tweet) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Löschen</button>
            </form>

</div>

