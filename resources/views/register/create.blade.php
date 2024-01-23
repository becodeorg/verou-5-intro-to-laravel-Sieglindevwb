@include('header')

    <section class="container mt-5 mb-5">
        <main class="bg-light p-4 rounded border" >
            
            <h1 class="mb-4">Give input</h1>

            <form method="POST" action="/register">
            <div class="form-row">

                <div class="col-md-4 mb-3">
                <label for="validationDefault01">First name</label>
                <input type="text" class="form-control" id="validationDefault01" placeholder="First name" value="Mark" required>
                </div>

                <div class="col-md-4 mb-3">
                <label for="validationDefault02">Last name</label>
                <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" value="Otto" required>
                </div>

                <div class="col-md-4 mb-3">
                <label for="validationDefaultUsername">Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                    </div>
                    <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
                </div>
                </div>
            </div>

             <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Subject/Title</label>
                <select class="form-control" id="exampleFormControlSelect1">
                <option>Favorite post</option>
                <option>Update post</option>
                <option>Review post</option>
                <option>Delete post</option>
                <option>Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Extra info</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">Type here...</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </main>
    </section>

@include('footer')