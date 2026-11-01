<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class StaffController extends Controller
{
    private const ROLE_RULE = ['string', 'max:30', 'regex:/^[\pL\pN][\pL\pN \-]*$/u'];

    private function isOwnerWord(?string $role): bool
    {
        return strtolower(trim((string) $role)) === 'owner';
    }

    public function store(Request $request)
    {
        $d = $request->validate([
            'name' => 'required|string|max:100',
            'username' => 'required|alpha_dash|max:50|unique:users,username',
            'password' => 'required|string|min:8',
            'role' => array_merge(['required'], self::ROLE_RULE),
        ]);

        // There is only one owner, so new accounts can never be owners.
        if ($this->isOwnerWord($d['role'])) {
            return back()->withErrors(['role' => 'There can only be one owner.'])->withInput();
        }

        DB::table('users')->insert([
            'name' => $d['name'],
            'username' => $d['username'],
            'email' => $d['username'] . '@dashcoffee.local',
            'password' => Hash::make($d['password']),
            'role' => trim($d['role']),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return back()->with('ok', $d['name'] . ' added.');
    }

    public function update(Request $request)
    {
        $d = $request->validate([
            'user_id' => 'required|exists:users,id',
            'name' => 'required|string|max:100',
            'username' => ['required', 'alpha_dash', 'max:50', Rule::unique('users', 'username')->ignore($request->input('user_id'))],
            'role' => array_merge(['nullable'], self::ROLE_RULE),
            'password' => 'nullable|string|min:8',
        ]);

        $user = User::findOrFail($d['user_id']);
        $fields = [
            'name' => $d['name'],
            'username' => $d['username'],
            'updated_at' => now(),
        ];

        if ($user->role === 'owner') {
            // The owner's role is locked.
        } else {
            $role = trim((string) ($d['role'] ?? ''));
            if ($role === '') {
                return back()->withErrors(['role' => 'Please type a role.'])->withInput();
            }
            if ($this->isOwnerWord($role)) {
                return back()->withErrors(['role' => 'There can only be one owner.'])->withInput();
            }
            $fields['role'] = $role;
        }

        if (! empty($d['password'])) {
            $fields['password'] = Hash::make($d['password']);
        }

        // Keep the placeholder e-mail in step with the username.
        if (str_ends_with((string) $user->email, '@dashcoffee.local')) {
            $fields['email'] = $d['username'] . '@dashcoffee.local';
        }

        DB::table('users')->where('id', $user->id)->update($fields);

        return back()->with('ok', $d['name'] . ' updated.');
    }

    public function destroy(Request $request)
    {
        $d = $request->validate(['user_id' => 'required|exists:users,id']);

        if ((int) $d['user_id'] === auth()->id()) {
            return back()->withErrors(['user_id' => 'You cannot delete your own account.']);
        }

        $user = User::findOrFail($d['user_id']);

        if ($user->role === 'owner') {
            return back()->withErrors(['user_id' => 'The owner account cannot be deleted.']);
        }

        $user->delete();

        return back()->with('ok', 'Account deleted.');
    }
}
