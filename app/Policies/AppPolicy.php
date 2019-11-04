<?php

namespace App\Policies;

use App\AppModel;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AppPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any app models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the app model.
     *
     * @param  \App\User  $user
     * @param  \App\AppModel  $appModel
     * @return mixed
     */
    public function view(User $user, AppModel $appModel)
    {
        //
    }

    /**
     * Determine whether the user can create app models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the app model.
     *
     * @param  \App\User  $user
     * @param  \App\AppModel  $appModel
     * @return mixed
     */
    public function update(User $user, AppModel $appModel)
    {
        //
    }

    /**
     * Determine whether the user can delete the app model.
     *
     * @param  \App\User  $user
     * @param  \App\AppModel  $appModel
     * @return mixed
     */
    public function delete(User $user, AppModel $appModel)
    {
        //
    }

    /**
     * Determine whether the user can restore the app model.
     *
     * @param  \App\User  $user
     * @param  \App\AppModel  $appModel
     * @return mixed
     */
    public function restore(User $user, AppModel $appModel)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the app model.
     *
     * @param  \App\User  $user
     * @param  \App\AppModel  $appModel
     * @return mixed
     */
    public function forceDelete(User $user, AppModel $appModel)
    {
        //
    }
}
