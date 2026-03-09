<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\DonoresScreening;
use Illuminate\Auth\Access\HandlesAuthorization;

class DonoresScreeningPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:DonoresScreening');
    }

    public function view(AuthUser $authUser, DonoresScreening $donoresScreening): bool
    {
        return $authUser->can('View:DonoresScreening');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:DonoresScreening');
    }

    public function update(AuthUser $authUser, DonoresScreening $donoresScreening): bool
    {
        return $authUser->can('Update:DonoresScreening');
    }

    public function delete(AuthUser $authUser, DonoresScreening $donoresScreening): bool
    {
        return $authUser->can('Delete:DonoresScreening');
    }

    public function restore(AuthUser $authUser, DonoresScreening $donoresScreening): bool
    {
        return $authUser->can('Restore:DonoresScreening');
    }

    public function forceDelete(AuthUser $authUser, DonoresScreening $donoresScreening): bool
    {
        return $authUser->can('ForceDelete:DonoresScreening');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:DonoresScreening');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:DonoresScreening');
    }

    public function replicate(AuthUser $authUser, DonoresScreening $donoresScreening): bool
    {
        return $authUser->can('Replicate:DonoresScreening');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:DonoresScreening');
    }

}