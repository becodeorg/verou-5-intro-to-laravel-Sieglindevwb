 @include('header')
 
 <h1>Reviews</h1>

    <ul>
        @foreach ($reviews as $review)
            <li>
                <a href="{{ route('reviews.show', $review->id) }}">{{ $review->content }}</a>
            </li>
        @endforeach
    </ul>

 @include('footer')