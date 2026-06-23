<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\ServiceIcon;
use Illuminate\Auth\Access\HandlesAuthorization;

class ServiceIconPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:ServiceIcon');
    }

    public function view(AuthUser $authUser, ServiceIcon $serviceIcon): bool
    {
        return $authUser->can('View:ServiceIcon');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:ServiceIcon');
    }

    public function update(AuthUser $authUser, ServiceIcon $serviceIcon): bool
    {
        return $authUser->can('Update:ServiceIcon');
    }

    public function delete(AuthUser $authUser, ServiceIcon $serviceIcon): bool
    {
        return $authUser->can('Delete:ServiceIcon');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:ServiceIcon');
    }

    public function restore(AuthUser $authUser, ServiceIcon $serviceIcon): bool
    {
        return $authUser->can('Restore:ServiceIcon');
    }

    public function forceDelete(AuthUser $authUser, ServiceIcon $serviceIcon): bool
    {
        return $authUser->can('ForceDelete:ServiceIcon');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:ServiceIcon');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:ServiceIcon');
    }

    public function replicate(AuthUser $authUser, ServiceIcon $serviceIcon): bool
    {
        return $authUser->can('Replicate:ServiceIcon');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:ServiceIcon');
    }

}