<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\BloodTests;
use Illuminate\Auth\Access\HandlesAuthorization;

class BloodTestsPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:BloodTests');
    }

    public function view(AuthUser $authUser, BloodTests $bloodTests): bool
    {
        return $authUser->can('View:BloodTests');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:BloodTests');
    }

    public function update(AuthUser $authUser, BloodTests $bloodTests): bool
    {
        return $authUser->can('Update:BloodTests');
    }

    public function delete(AuthUser $authUser, BloodTests $bloodTests): bool
    {
        return $authUser->can('Delete:BloodTests');
    }

    public function restore(AuthUser $authUser, BloodTests $bloodTests): bool
    {
        return $authUser->can('Restore:BloodTests');
    }

    public function forceDelete(AuthUser $authUser, BloodTests $bloodTests): bool
    {
        return $authUser->can('ForceDelete:BloodTests');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:BloodTests');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:BloodTests');
    }

    public function replicate(AuthUser $authUser, BloodTests $bloodTests): bool
    {
        return $authUser->can('Replicate:BloodTests');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:BloodTests');
    }

}