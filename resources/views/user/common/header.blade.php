<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task Manegement System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div style="margin:50px;">
    @auth('web')
      <div>
        asdas
     <h4>Welcome {{Auth::guard('web')->user()->name}}!</h4> &nbsp;<a class="btn btn-primary bm-5" href="{{url('logout')}}"> Logout</a>
      </div>
    @endauth

