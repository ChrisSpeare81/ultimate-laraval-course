<?php

namespace App\Policies;

use App\Models\Employer;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class EmployerPolicy {

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool {
        return null === $user->employer;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Employer $employer): bool {
        return $employer->user_id === $user->id;
    }
}
