<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\BloodBags;
use Illuminate\Auth\Access\HandlesAuthorization;

class BloodBagsPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:BloodBags');
    }

    public function view(AuthUser $authUser, BloodBags $bloodBags): bool
    {
        return $authUser->can('View:BloodBags');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:BloodBags');
    }

    public function update(AuthUser $authUser, BloodBags $bloodBags): bool
    {
        return $authUser->can('Update:BloodBags');
    }

    public function delete(AuthUser $authUser, BloodBags $bloodBags): bool
    {
        return $authUser->can('Delete:BloodBags');
    }

    public function restore(AuthUser $authUser, BloodBags $bloodBags): bool
    {
        return $authUser->can('Restore:BloodBags');
    }

    public function forceDelete(AuthUser $authUser, BloodBags $bloodBags): bool
    {
        return $authUser->can('ForceDelete:BloodBags');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:BloodBags');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:BloodBags');
    }

    public function replicate(AuthUser $authUser, BloodBags $bloodBags): bool
    {
        return $authUser->can('Replicate:BloodBags');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:BloodBags');
    }

}