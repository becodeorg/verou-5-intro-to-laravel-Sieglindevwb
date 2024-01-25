@include('header')
 

     <h1>Reviews</h1>

    <!-- Display reviews -->
    <ul>
        @foreach ($reviews as $review)
            <li>
                <a href="{{ route('reviews.show', $review->id) }}">{{ $review->content }}</a>
            </li>
        @endforeach
    </ul>

    <!-- Review submission form -->
    <h2>Submit a Review</h2>
    <form action="{{ route('reviews.store') }}" method="post">
        @csrf
        <textarea name="content" rows="4" cols="50" placeholder="Enter your review"></textarea>
        <br>
        <button type="submit">Submit Review</button>
    </form>


@include('footer')