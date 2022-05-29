<?php

namespace App\Actions\AccountType;

use App\Models\AccountField;
use App\Models\AccountType;
use Lorisleiva\Actions\Concerns\AsAction;

class CreateField
{
    use AsAction;

    public function handle(
        AccountType $accountType,
        string $name,
        ?string $regex,
        bool $isRequired = false,
        bool $canCreateByCreator = false,
        bool $canUpdateByCreator = false,
        bool $canDeleteByCreator = false,
        bool $canViewByAnyone = false,
        bool $canViewByCreator = false,
        bool $canViewByUnconfirmedBuyer = false,
        bool $canViewByConfirmedBuyer = false,
    ): AccountField {
        return AccountField::forceCreate([
            'account_type_id' => $accountType->getKey(),
            'name' => $name,
            'regex' => $regex,
            'is_required' => $isRequired,
            'can_create_by_creator' => $canCreateByCreator,
            'can_update_by_creator' => $canUpdateByCreator,
            'can_delete_by_creator' => $canDeleteByCreator,
            'can_view_by_anyone' => $canViewByAnyone,
            'can_view_by_creator' => $canViewByCreator,
            'can_view_by_unconfirmed_buyer' => $canViewByUnconfirmedBuyer,
            'can_view_by_confirmed_buyer' => $canViewByConfirmedBuyer,
        ]);
    }
}
