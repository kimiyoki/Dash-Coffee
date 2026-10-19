@extends('layouts.staff')
@section('title', 'Staff')
@section('content')
  <div class="toolbar">
    <h1 class="pos-title">Staff</h1>
    <div class="toolbar-right"><input class="search" type="search" placeholder="Search" /><button class="btn btn-primary">+ ADD STAFF</button></div>
  </div>
  <div class="tbl cols-4">
    <div class="tbl-head"><span>#</span><span>Name</span><span>Username</span><span>Role</span></div>
    @foreach ($users as $user)
      <div class="tbl-row"><span>{{ $loop->iteration }}</span><span>{{ $user->name }}</span><span>{{ $user->username }}</span><span class="pill">{{ ucfirst($user->role) }}</span></div>
    @endforeach
  </div>
  @if ($users->isEmpty())<div class="empty">No staff accounts yet.</div>@endif
@endsection
