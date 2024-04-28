@include('user/common/header')

        <div class="alert alert-primary" role="alert">
            <h1> User Login</h1>
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li> {{$error}}</li>
                @endforeach
            </div>

        @endif

        <!-- Form-->
        <form method="post" action="{{url('login')}}">
        @csrf
        <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" >
        </div>

        <button type="submit" class="btn btn-primary">Login</button>

        </form>
        <a href="{{url('register')}}">Register</a>
<!-- From End -->
@include('user/common/footer')
