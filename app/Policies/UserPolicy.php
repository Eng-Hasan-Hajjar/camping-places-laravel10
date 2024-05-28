<?php

namespace App\Policies;
use Illuminate\Auth\Access\HandlesAuthorization;

use App\Models\User;

class UserPolicy
{
    use HandlesAuthorization;
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
        /**
     * Determine if the given user is a visitor.
     */
    public function isVisitor(User $user)
    {
        return $user->role === 'visitor';
    }
    /**
     * Determine if the given user is an employee.
     */
    public function isEmployee(User $user)
    {
        return $user->role === 'employee';
    }
    public function isAdmin(User $user)
    {
        return $user->role === 'admin';
    }
      /**
     * This method will be used to authorize any action if the user is an admin.
     */
    public function before(User $user, $ability)
    {
        if ($user->role === 'admin') {
            return true;
        }
    }
}
