<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\DonationRequests;
use Illuminate\Auth\Access\HandlesAuthorization;

class DonationRequestsPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:DonationRequests');
    }

    public function view(AuthUser $authUser, DonationRequests $donationRequests): bool
    {
        return $authUser->can('View:DonationRequests');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:DonationRequests');
    }

    public function update(AuthUser $authUser, DonationRequests $donationRequests): bool
    {
        return $authUser->can('Update:DonationRequests');
    }

    public function delete(AuthUser $authUser, DonationRequests $donationRequests): bool
    {
        return $authUser->can('Delete:DonationRequests');
    }

    public function restore(AuthUser $authUser, DonationRequests $donationRequests): bool
    {
        return $authUser->can('Restore:DonationRequests');
    }

    public function forceDelete(AuthUser $authUser, DonationRequests $donationRequests): bool
    {
        return $authUser->can('ForceDelete:DonationRequests');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:DonationRequests');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:DonationRequests');
    }

    public function replicate(AuthUser $authUser, DonationRequests $donationRequests): bool
    {
        return $authUser->can('Replicate:DonationRequests');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:DonationRequests');
    }

}