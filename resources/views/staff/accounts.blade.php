@extends('layouts.staff')
@section('title', 'Staff')
@section('content')
  @php
    $roleOptions = collect(['Staff', 'Cashier', 'Barista', 'Manager'])
      ->merge($users->where('role', '!=', 'owner')->pluck('role')->map(fn ($r) => ucfirst($r)))
      ->unique(fn ($r) => strtolower($r))
      ->values();
    $formErr = $errors->any() ? $errors->first() : null;
  @endphp
  <div class="staff-page">
    <div class="rp-head">
      <div>
        <h1 class="pos-title">Staff</h1>
        <p class="staff-sub">{{ $users->count() }} account(s)</p>
      </div>
      <div class="rp-clock"><small id="clkDate"></small><strong id="clkTime"></strong></div>
    </div>

    @if (session('ok'))<div class="alert-ok">{{ session('ok') }}</div>@endif
    @if ($formErr && ! old('form'))<div class="alert-low"><p>{{ $formErr }}</p></div>@endif

    <div class="rp-bar staff-bar">
      <input class="search" id="staffSearch" type="search" placeholder="Search staff..." />
      <button type="button" class="btn btn-primary add-staff-btn" data-open="addStaff"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" aria-hidden="true"><path d="M12 5v14M5 12h14" /></svg>ADD STAFF</button>
    </div>

    <div class="rp-card">
      <div class="rp-scroll">
        <table class="rp-table" id="staffTable">
          <tr>
            <th>#</th><th>Name</th><th>Username</th><th>Role</th><th>Actions</th>
          </tr>
          @foreach ($users as $user)
            @php $isOwner = $user->role === 'owner'; @endphp
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td><strong>{{ $user->name }}</strong></td>
              <td>{{ $user->username }}</td>
              <td><span class="role-pill {{ $isOwner ? 'owner' : '' }}">{{ ucfirst($user->role) }}</span></td>
              <td class="row-actions">
                <button type="button" class="btn btn-soft btn-sm" data-open="customize"
                  data-id="{{ $user->id }}" data-label="{{ $user->name }} ({{ $user->username }})"
                  data-name="{{ $user->name }}" data-username="{{ $user->username }}"
                  data-role="{{ ucfirst($user->role) }}" data-owner="{{ $isOwner ? 1 : 0 }}">Customize</button>
                @if ($user->id !== auth()->id() && ! $isOwner)
                  <button type="button" class="btn btn-danger btn-sm" data-open="deleteStaff" data-id="{{ $user->id }}" data-label="{{ $user->name }} ({{ $user->username }})">Delete</button>
                @endif
              </td>
            </tr>
          @endforeach
        </table>
      </div>
      @if ($users->isEmpty())<div class="empty">No staff accounts yet.</div>@endif
    </div>
  </div>

  <datalist id="roleList">@foreach ($roleOptions as $r)<option value="{{ $r }}">@endforeach</datalist>

  <dialog class="staff-modal" id="addStaff">
    <form method="POST" action="{{ route('staff.accounts.store') }}">
      @csrf
      <input type="hidden" name="form" value="addStaff" />
      <h3>Add staff</h3>
      @if ($formErr && old('form') === 'addStaff')<p class="modal-err">{{ $formErr }}</p>@endif
      <label>Name</label><input type="text" name="name" value="{{ old('form') === 'addStaff' ? old('name') : '' }}" required />
      <label>Username</label><input type="text" name="username" value="{{ old('form') === 'addStaff' ? old('username') : '' }}" required />
      <label>Password</label><input class="search wide" type="password" name="password" minlength="8" required />
      <label>Role <small>(type any role or pick from the list)</small></label>
      <input type="text" class="role-input" name="role" list="roleList" maxlength="30" placeholder="e.g. Cashier, Barista" autocomplete="off" value="{{ old('form') === 'addStaff' ? old('role') : '' }}" required />
      <div class="actions end"><button type="button" class="btn btn-soft" data-close>Cancel</button><button class="btn btn-primary">Save</button></div>
    </form>
  </dialog>

  <dialog class="staff-modal" id="customize">
    <form method="POST" action="{{ route('staff.accounts.update') }}">
      @csrf @method('PUT')
      <input type="hidden" name="form" value="customize" />
      <input type="hidden" name="user_id" value="{{ old('user_id') }}" />
      <h3>Customize account</h3>
      <p>Account: <strong class="modal-for"></strong></p>
      @if ($formErr && old('form') === 'customize')<p class="modal-err">{{ $formErr }}</p>@endif
      <label>Name</label><input type="text" name="name" required />
      <label>Username</label><input type="text" name="username" required />
      <label>Role <small id="roleHint">(type any role or pick from the list)</small></label>
      <input type="text" class="role-input" name="role" list="roleList" maxlength="30" placeholder="e.g. Cashier, Barista" autocomplete="off" />
      <label>New password <small>(leave blank to keep the current one)</small></label>
      <input class="search wide" type="password" name="password" minlength="8" autocomplete="new-password" />
      <div class="actions end"><button type="button" class="btn btn-soft" data-close>Cancel</button><button class="btn btn-primary">Save changes</button></div>
    </form>
  </dialog>

  <dialog class="staff-modal" id="deleteStaff">
    <form method="POST" action="{{ route('staff.accounts.destroy') }}">
      @csrf @method('DELETE')
      <input type="hidden" name="form" value="deleteStaff" />
      <input type="hidden" name="user_id" value="" />
      <h3>Delete staff</h3>
      <p>Are you sure you want to delete <strong class="modal-for"></strong>? This cannot be undone.</p>
      <div class="actions end"><button type="button" class="btn btn-soft" data-close>Cancel</button><button class="btn btn-danger">Delete</button></div>
    </form>
  </dialog>

  <style>
    /* Page background + cards: same look as Order History / Inventory */
    .pos-main:has(.staff-page) {
      background:
        linear-gradient(rgba(198, 217, 190, 0.82), rgba(198, 217, 190, 0.82)),
        url('../images/system-background.png') center / cover no-repeat fixed;
    }
    .pos-main:has(.staff-page) :is(.rp-card, .rp-head, .rp-bar) {
      background: #fff;
      border: 1.5px solid #9fbb96;
      box-shadow: 0 8px 22px rgba(24, 36, 27, 0.16);
    }
    .pos-main:has(.staff-page) .pos-title { color: #0f1a12; }
    .pos-main:has(.staff-page) .staff-sub { color: #2b372f; font-weight: 500; }
    .pos-main:has(.staff-page) :is(input, select) { border-color: #8fae85; }
    .pos-main:has(.staff-page) .btn-soft { background: #dce8d6; border: 1px solid #a9c4a0; color: #14231a; }

    /* Search + add button bar */
    .staff-bar { justify-content: space-between; margin-bottom: 18px; }
    .staff-bar .search { flex: 0 1 320px; }
    .add-staff-btn { display: inline-flex; align-items: center; gap: 8px; padding: 0.7rem 1.5rem; }
    .add-staff-btn svg { width: 18px; height: 18px; }

    /* Table */
    .staff-page .rp-table th { background: #2f6b3a; color: #fff; border-bottom: 0; }
    .staff-page .rp-table td { color: #0f1a12; border-bottom: 1px solid #c9d9c3; font-size: 0.9rem; vertical-align: middle; }
    .staff-page .rp-table tr:nth-child(even) td { background: #f1f7ee; }
    .staff-page .rp-table td.row-actions { white-space: nowrap; }
    .staff-page .rp-table td.row-actions .btn + .btn { margin-left: 8px; }
    .role-pill { display: inline-block; padding: 3px 14px; border-radius: 999px; background: #bfe3b8; color: #14531f; font-size: 0.75rem; font-weight: 700; }
    .role-pill.owner { background: #f6e3a8; color: #6b4b00; }

    /* Pop-ups */
    .staff-modal { border: 0; border-radius: 18px; padding: 26px; width: min(420px, 92vw); box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25); }
    .staff-modal::backdrop { background: rgba(0, 0, 0, 0.45); }
    .staff-modal h3 { margin: 0 0 6px; font-size: 1.15rem; color: #0f1a12; }
    .staff-modal p { margin: 6px 0 4px; font-size: 0.9rem; color: #2b372f; }
    .staff-modal label { display: block; margin: 14px 0 5px; font-size: 0.82rem; font-weight: 600; }
    .staff-modal label small { font-weight: 400; color: #5b645d; }
    .staff-modal .search.wide { margin-bottom: 0; border-radius: 12px; }
    .staff-modal input[readonly] { background: #e9ece6; color: #5b645d; }
    .staff-modal .modal-err { margin: 10px 0 0; padding: 8px 12px; border-radius: 10px; background: #ffe0dd; border: 1.5px solid #dc6f69; color: #82170f; font-weight: 600; }
  </style>
  <script>
    function fillCustomize(d, b) {
      d.querySelector('[name=name]').value = b.dataset.name;
      d.querySelector('[name=username]').value = b.dataset.username;
      var role = d.querySelector('[name=role]'), hint = document.getElementById('roleHint');
      role.value = b.dataset.role;
      role.setCustomValidity('');
      if (b.dataset.owner === '1') {
        role.readOnly = true; role.removeAttribute('list'); role.required = false;
        hint.textContent = '(the owner role is fixed - there is only one owner)';
      } else {
        role.readOnly = false; role.setAttribute('list', 'roleList'); role.required = true;
        hint.textContent = '(type any role or pick from the list)';
      }
      d.querySelector('[name=password]').value = '';
    }
    document.querySelectorAll('[data-open]').forEach(function (b) {
      b.addEventListener('click', function () {
        var d = document.getElementById(b.dataset.open);
        if (b.dataset.id) {
          d.querySelector('[name=user_id]').value = b.dataset.id;
          d.querySelector('.modal-for').textContent = b.dataset.label;
        }
        if (b.dataset.open === 'customize') fillCustomize(d, b);
        d.showModal();
      });
    });
    document.querySelectorAll('[data-close]').forEach(function (b) {
      b.addEventListener('click', function () { b.closest('dialog').close(); });
    });
    document.querySelectorAll('.staff-modal').forEach(function (d) {
      d.addEventListener('click', function (e) { if (e.target === d) d.close(); });
    });
    // Nobody can be given the "owner" role - there is only one owner.
    document.querySelectorAll('.role-input').forEach(function (i) {
      i.addEventListener('input', function () {
        i.setCustomValidity(!i.readOnly && i.value.trim().toLowerCase() === 'owner' ? 'There can only be one owner.' : '');
      });
    });
    @if (old('form') === 'addStaff')
      document.getElementById('addStaff').showModal();
    @endif
    @if (old('form') === 'customize')
      (function () {
        var cb = document.querySelector('[data-open="customize"][data-id="{{ (int) old('user_id') }}"]');
        if (!cb) return;
        cb.click();
        var d = document.getElementById('customize');
        d.querySelector('[name=name]').value = @json(old('name'));
        d.querySelector('[name=username]').value = @json(old('username'));
        var r = d.querySelector('[name=role]');
        if (!r.readOnly) r.value = @json(old('role'));
      })();
    @endif
    document.getElementById('staffSearch').addEventListener('input', function () {
      var q = this.value.toLowerCase();
      document.querySelectorAll('#staffTable tr').forEach(function (r, i) {
        if (i) r.hidden = r.textContent.toLowerCase().indexOf(q) < 0;
      });
    });
  </script>
@endsection
