<h2>التقييمات:</h2>
@foreach ($ratings as $rating)
    <div>
        <strong>{{ $rating->user->name }}</strong>
        <p>التقييم: {{ $rating->rating }}</p>
        <p>{{ $rating->comment }}</p>
        <p>{{ $rating->created_at->format('d/m/Y') }}</p>
    </div>
@endforeach
