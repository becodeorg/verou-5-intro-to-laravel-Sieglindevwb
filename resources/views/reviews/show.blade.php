 @include('header')

<h1>Review Details</h1>
<p>Content: {{ $review->textereaInfo }}</p>
<p>User: {{ $review->user->name }}</p>

 @include('footer')