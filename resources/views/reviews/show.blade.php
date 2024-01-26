 @include('header')

<h1>Review Details</h1>
<p>Content: {{ $review->textereaInfo }}</p>
<p>User: {{ $review->userName }}</p> 

 @include('footer')