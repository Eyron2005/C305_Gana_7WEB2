@include('components.header')
{!! Form::open(['route'=> 'register', 'method'=>'post']) !!}
<p>Name</p>
{!! Form::text('name') !!}
<p>Email</p>
{!! Form::text('email') !!}
<p>Password</p>
{!! Form::text('password') !!}
<p>Confirm Password</p>
{!! Form::text('name') !!}
@include('components.footer')