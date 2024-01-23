<!-- resources/views/pages/home.blade.php -->



@include('header')

    <article class="container mt-4">
        <h1>Welcome to My Friends Website</h1>
        <p>This is a safe space where all my Friends episodes are stored. It's safe because Ross can't propose in here. <br>
        You can find my list with episodes in the link below: </p>
    </article>

   
    <a class="container d-flex mt-4" href="{{ route('post') }}">The one with episodes</a>


@include('footer')

