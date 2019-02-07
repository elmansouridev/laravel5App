<?php

namespace App\Policies;

use App\User;
use App\Inscription;
use Illuminate\Auth\Access\HandlesAuthorization;

class InsPolicy
{
    use HandlesAuthorization;

    public function before($user,$ability){
        if($user->is_admin and $ability!="show"){
            return true;//si cette condition return true la fonction edit autorise update
        }
    }

    /**
     * Determine whether the user can view the inscription.
     *
     * @param  \App\User  $user
     * @param  \App\inscription  $inscription
     * @return mixed
     */


    public function admin_only(User $user)
    {
        if ($user->is_admin == 1) {
                    return true;
                }
            return false;
        
    }

    public function index(User $user, Inscription $ins)
    {
        return true;
    }

    public function view(User $user, Inscription $ins)
    {
        return true;
    }

    /**
     * Determine whether the user can create inscriptions.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the inscription.
     *
     * @param  \App\User  $user
     * @param  \App\inscription  $inscription
     * @return mixed
     */
    public function update(User $user, Inscription $ins)
    {
        return $user->id === $ins->user_id;
    }

    /**
     * Determine whether the user can delete the inscription.
     *
     * @param  \App\User  $user
     * @param  \App\inscription  $inscription
     * @return mixed
     */
    public function delete(User $user, Inscription $ins)
    {
        return $user->id === $ins->user_id;
    }
}
