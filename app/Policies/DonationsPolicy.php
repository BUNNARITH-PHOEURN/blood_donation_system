<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Donations;
use Illuminate\Auth\Access\HandlesAuthorization;

class DonationsPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Donations');
    }

    public function view(AuthUser $authUser, Donations $donations): bool
    {
        return $authUser->can('View:Donations');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Donations');
    }

    public function update(AuthUser $authUser, Donations $donations): bool
    {
        return $authUser->can('Update:Donations');
    }

    public function delete(AuthUser $authUser, Donations $donations): bool
    {
        return $authUser->can('Delete:Donations');
    }

    public function restore(AuthUser $authUser, Donations $donations): bool
    {
        return $authUser->can('Restore:Donations');
    }

    public function forceDelete(AuthUser $authUser, Donations $donations): bool
    {
        return $authUser->can('ForceDelete:Donations');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Donations');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Donations');
    }

    public function replicate(AuthUser $authUser, Donations $donations): bool
    {
        return $authUser->can('Replicate:Donations');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Donations');
    }

}