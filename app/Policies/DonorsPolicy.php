<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Donors;
use Illuminate\Auth\Access\HandlesAuthorization;

class DonorsPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Donors');
    }

    public function view(AuthUser $authUser, Donors $donors): bool
    {
        return $authUser->can('View:Donors');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Donors');
    }

    public function update(AuthUser $authUser, Donors $donors): bool
    {
        return $authUser->can('Update:Donors');
    }

    public function delete(AuthUser $authUser, Donors $donors): bool
    {
        return $authUser->can('Delete:Donors');
    }

    public function restore(AuthUser $authUser, Donors $donors): bool
    {
        return $authUser->can('Restore:Donors');
    }

    public function forceDelete(AuthUser $authUser, Donors $donors): bool
    {
        return $authUser->can('ForceDelete:Donors');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Donors');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Donors');
    }

    public function replicate(AuthUser $authUser, Donors $donors): bool
    {
        return $authUser->can('Replicate:Donors');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Donors');
    }

}