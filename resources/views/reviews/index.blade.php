@include('header')
 

     <h1>Reviews</h1>

    <!-- Display reviews -->
    <ul>
        @foreach ($reviews as $review)
            <li>
                 <a href="{{ route('reviews.show', $review->id) }}">{{ $review->textereaInfo }}</a>
            </li>
        @endforeach
    </ul>

    <!-- Review submission form -->
   <div class="container mt-5">
    <h2 class="mb-4">Submit a Review</h2>
    
    <form action="{{ route('reviews.store') }}" method="post">
        @csrf

        <div class="mb-3">
            <label for="firstName" class="form-label">First Name:</label>
            <input type="text" class="form-control" id="firstName" name="firstName" required>
        </div>

        <div class="mb-3">
            <label for="lastName" class="form-label">Last Name:</label>
            <input type="text" class="form-control" id="lastName" name="lastName" required>
        </div>

        <div class="mb-3">
            <label for="userName" class="form-label">Username:</label>
            <input type="text" class="form-control" id="userName" name="userName" required>
        </div>

        <div class="mb-3">
            <label for="emailAdress" class="form-label">Email Address:</label>
            <input type="email" class="form-control" id="emailAdress" name="emailAdress" required>
        </div>

        <div class="mb-3">
            <label for="subjectSelect" class="form-label">Subject/Title:</label>
            <select class="form-select" id="subjectSelect" name="subjectSelect" required>
                <option value="Favorite post">Favorite post</option>
                <option value="Update post">Update post</option>
                <option value="Review post">Review post</option>
                <option value="Delete post">Delete post</option>
                <option value="Other">Other</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="textereaInfo" class="form-label">Review Content:</label>
            <textarea class="form-control" id="textereaInfo" name="textereaInfo" rows="4" placeholder="Enter your review" required></textarea>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Submit Review</button>
        </div>
    </form>
</div>




@include('footer')