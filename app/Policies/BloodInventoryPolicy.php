<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\BloodInventory;
use Illuminate\Auth\Access\HandlesAuthorization;

class BloodInventoryPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:BloodInventory');
    }

    public function view(AuthUser $authUser, BloodInventory $bloodInventory): bool
    {
        return $authUser->can('View:BloodInventory');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:BloodInventory');
    }

    public function update(AuthUser $authUser, BloodInventory $bloodInventory): bool
    {
        return $authUser->can('Update:BloodInventory');
    }

    public function delete(AuthUser $authUser, BloodInventory $bloodInventory): bool
    {
        return $authUser->can('Delete:BloodInventory');
    }

    public function restore(AuthUser $authUser, BloodInventory $bloodInventory): bool
    {
        return $authUser->can('Restore:BloodInventory');
    }

    public function forceDelete(AuthUser $authUser, BloodInventory $bloodInventory): bool
    {
        return $authUser->can('ForceDelete:BloodInventory');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:BloodInventory');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:BloodInventory');
    }

    public function replicate(AuthUser $authUser, BloodInventory $bloodInventory): bool
    {
        return $authUser->can('Replicate:BloodInventory');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:BloodInventory');
    }

}