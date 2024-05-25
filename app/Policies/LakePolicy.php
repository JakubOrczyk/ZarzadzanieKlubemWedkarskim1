<?php

namespace App\Policies;

use App\Models\Lake;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class LakePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Lake $lake): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Lake $lake): bool
    {
        return $user->lake_id === $lake->id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Lake $lake): bool
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Lake $lake): bool
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Lake $lake): bool
    {
        return true;
    }
}
