
@extends('layout.headerfooter', ['title' => 'Set New Password'])
@section('main-content')
<div style="padding:40px; max-width:540px; margin:40px auto; background:#fff; border-radius:8px;">
  <h4>Set New Password</h4>
  <form method="POST" action="{{ route('password.update') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <div class="mb-3"><input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required class="form-control" /></div>
    <div class="mb-3"><input type="password" name="password" placeholder="New password" required class="form-control" /></div>
    <div class="mb-3"><input type="password" name="password_confirmation" placeholder="Confirm password" required class="form-control" /></div>
    <button class="btn btn-primary">Reset Password</button>
  </form>
</div>
@endsection