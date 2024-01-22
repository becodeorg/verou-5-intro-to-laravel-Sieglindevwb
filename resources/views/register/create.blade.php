@include('header')

    <section class="container mt-5 mb-5">
        <main class="bg-light p-4 rounded border" >
            
            <h1 class="d-flex justify-content-center">Register!</h1>

            <form action="POST" action="/register" class="max-w-lg" >

                <div class="d-flex justify-content-center mt-4">
                    <label class="form-label mr-2" 
                    for="name">
                    Name
                </label>

                <input class="form-control-sm" 
                        type="text"
                        name="name"
                        id="name"
                        required
                    >
                </div>

                <div class="d-flex justify-content-center mt-4">
                    <label class="form-label mr-2" 
                    for="username">
                    Username
                </label>

                <input class="form-control-sm" 
                        type="text"
                        name="username"
                        id="username"
                        required
                    >
                </div>

                <div class="d-flex justify-content-center mt-4">
                    <label class="form-label mr-2" 
                    for="password">
                    Password
                </label>

                <input class="form-control-sm" 
                        type="password"
                        name="password"
                        id="password"
                        required
                    >
                </div>

                <button type="submit" class="d-flex justify-content-center mt-4 btn btn-primary">Submit</button>
                
            </form>
        </main>
    </section>

@include('footer')