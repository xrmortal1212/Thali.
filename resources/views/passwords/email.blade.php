@extends('layout.headerfooter', ['title' => 'Reset Password'])
@section('main-content')
<div style="padding:40px; max-width:540px; margin:40px auto; background:#fff; border-radius:8px;">
  <h4>Reset Password</h4>
  @if(session('status')) <div class="alert alert-success">{{ session('status') }}</div> @endif
  <form method="POST" action="{{ route('password.email') }}">
    @csrf
    <div class="mb-3">
      <input type="email" name="email" placeholder="Your email" value="{{ old('email') }}" required class="form-control" />
    </div>
    <button class="btn btn-primary">Send Reset Link</button>
  </form>
</div>
@endsection