@include('admin/common/header')

        <div class="alert alert-primary" role="alert">
            <h1> Admin Login</h1>
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li> {{$error}}</li>
                @endforeach
            </div>

        @endif

        <!-- Form-->
        <form method="post" action="{{url('admin/login')}}">
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
<!-- From End -->
@include('admin/common/footer')
