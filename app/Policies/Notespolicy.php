<?php

namespace App\Policies;

use App\Models\Notes;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class Notespolicy
{

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Notes $note)
    {
        return $note->user_id == $user->id ? Response::allow() : Response::denyAsNotFound() ;
    }

}
