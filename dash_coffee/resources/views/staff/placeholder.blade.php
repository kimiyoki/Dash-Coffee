@extends('layouts.staff')

@section('title', $title)

@section('content')
  <h1>{{ $title }}</h1>
  <p class="staff-sub">This page is ready and protected. The real content comes next.</p>
  <a href="{{ route('staff.dashboard') }}" class="btn btn-primary">&larr; Back to Dashboard</a>
@endsection
