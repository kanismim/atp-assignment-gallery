@extends('base')

@section('cont')


      <div class="login-form">
    <form method="post">
    {{csrf_field()}}
      <div class="avatar"><i class="material-icons">&#xE7FF;</i></div>
      <h4 class="modal-title">Login to Your Account</h4>
      <table>
        <tr>
       <td> <label for="inputName">Username</label> </td>
          <td><input type="username" id="username" name="username" class="form-control" placeholder="User Name" required="required" autofocus="autofocus"></td>
        </tr>
        <tr>
       <td> <label for="inputPassword">Password</label> </td>
          <td> <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="required"></td>
        </tr>


      </table>
      <div class="form-group small clearfix">

      </div>

      <input type="submit" class="btn btn-success" name="submit" value="Login">

    </form>
    {{session('msg')}}
  </div>
@endsection