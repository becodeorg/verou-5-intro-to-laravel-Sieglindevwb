 @include('header')

<h1>Submit a Review</h1>

    <form action="{{ route('reviews.store') }}" method="post">
        @csrf
        <textarea name="content" rows="4" cols="50" placeholder="Enter your review"></textarea>
        <br>
        <button type="submit">Submit Review</button>
    </form>

 @include('footer')