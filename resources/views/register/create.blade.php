@include('header')

    <section class="container mt-5 mb-5">
        <main class="bg-light p-4 rounded border" >
            
            <h1 class="mb-4">Give input</h1>

            <form method="POST" action="{{ route('handleRegister') }}">
                @csrf
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="firstName">First name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" value="Mark" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last name" value="Otto" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="userName">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="userName">@</span>
                            </div>
                            <input type="text" class="form-control" id="userName" name="username" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="emailAdress">Email address</label>
                    <input type="email" class="form-control" id="emailAdress" name="emailAdress" placeholder="name@example.com" required>
                

                @error('emailAdress')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
                </div>

                <div class="form-group">
                    <label for="subjectSelect">Subject/Title</label>
                    <select class="form-control" id="subjectSelect" name="subjectSelect" required>
                        <option>Favorite post</option>
                        <option>Update post</option>
                        <option>Review post</option>
                        <option>Delete post</option>
                        <option>Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="textereaInfo">Extra info</label>
                    <textarea class="form-control" id="textereaInfo" name="textereaInfo" rows="3" required>Type here...</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </main>
    </section>

@include('footer')