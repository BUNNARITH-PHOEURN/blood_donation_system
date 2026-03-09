<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\BloodRequests;
use Illuminate\Auth\Access\HandlesAuthorization;

class BloodRequestsPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:BloodRequests');
    }

    public function view(AuthUser $authUser, BloodRequests $bloodRequests): bool
    {
        return $authUser->can('View:BloodRequests');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:BloodRequests');
    }

    public function update(AuthUser $authUser, BloodRequests $bloodRequests): bool
    {
        return $authUser->can('Update:BloodRequests');
    }

    public function delete(AuthUser $authUser, BloodRequests $bloodRequests): bool
    {
        return $authUser->can('Delete:BloodRequests');
    }

    public function restore(AuthUser $authUser, BloodRequests $bloodRequests): bool
    {
        return $authUser->can('Restore:BloodRequests');
    }

    public function forceDelete(AuthUser $authUser, BloodRequests $bloodRequests): bool
    {
        return $authUser->can('ForceDelete:BloodRequests');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:BloodRequests');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:BloodRequests');
    }

    public function replicate(AuthUser $authUser, BloodRequests $bloodRequests): bool
    {
        return $authUser->can('Replicate:BloodRequests');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:BloodRequests');
    }

}