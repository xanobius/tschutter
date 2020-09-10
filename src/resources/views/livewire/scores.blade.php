<div class="{{ $wrapper_classes }}">
    <h2>Scores</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Player</th>
            <th>Games</th>
            <th>Wins</th>
            <th>Score</th>
        </tr>
        </thead>
        <tbody>
        @foreach($playerScores as $p)
        <tr>
            <td>{{ $p['name'] }}</td>
            <td>{{ $p['matches'] }}</td>
            <td>{{ $p['wins'] }}</td>
            <td>{{ $p['score'] }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
