<?php

namespace App\Policies;

use App\User;
use App\Representation_user;
use Illuminate\Auth\Access\HandlesAuthorization;

class Representation_userPolicy
{
    use HandlesAuthorization;

    public function before($user,$ability){
        if($user->role_id==1){  // si le user est un admin le code s'arrete ici
                                 // et n'execute pas le code en bas
              return true;       //$ability == donner tous les droit au admin
                     //if($user->role_id==1 and $ability != 'delete')
                     // comme ca on retire le delete a les droit de l'admin(il peut pas supprimer ce qui lui appartient)
            
        }
    }

    /**
     * Determine whether the user can view the representationUser.
     *
     * @param  \App\User  $user
     * @param  \App\Representation_user  $representationUser
     * @return mixed
     */
    public function view(User $user, Representation_user $representation_user)
    {
    return true;
    }

    /**
     * Determine whether the user can create representationUsers.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the representationUser.
     *
     * @param  \App\User  $user
     * @param  \App\Representation_user  $representationUser
     * @return mixed
     */
    public function update(User $user, Representation_user $representation_user)
    {
      return $user->id === $representation_user->user_id; 
    }

    /**
     * Determine whether the user can delete the representationUser.
     *
     * @param  \App\User  $user
     * @param  \App\Representation_user  $representationUser
     * @return mixed
     */
    public function delete(User $user, Representation_user $representation_user)
    {
        return $user->id === $representation_user->user_id; 
    }
}
