<?php

namespace App\Policies;

use App\AdsModel;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any ads models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    /**
     * Determine whether the user can create ads models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {

    }

    /**
     * Determine whether the user can update the ads model.
     *
     * @param  \App\User  $user
     * @param  \App\AdsModel  $adsModel
     * @return mixed
     */
    public function update(User $user, AdsModel $adsModel)
    {
        
    }

    /**
     * Determine whether the user can delete the ads model.
     *
     * @param  \App\User  $user
     * @param  \App\AdsModel  $adsModel
     * @return mixed
     */
    public function delete(User $user, AdsModel $adsModel)
    {
        //
    }

    /**
     * Determine whether the user can restore the ads model.
     *
     * @param  \App\User  $user
     * @param  \App\AdsModel  $adsModel
     * @return mixed
     */
    public function restore(User $user, AdsModel $adsModel)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the ads model.
     *
     * @param  \App\User  $user
     * @param  \App\AdsModel  $adsModel
     * @return mixed
     */
    public function forceDelete(User $user, AdsModel $adsModel)
    {
        //
    }
}
