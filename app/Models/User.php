<?php

namespace App\Models;

use JeffersonGoncalves\Filament\User\Models\User as BaseUser;
use JeffersonGoncalves\Gdpr\Attributes\PersonalData;
use JeffersonGoncalves\Gdpr\Concerns\InteractsWithPersonalData;
use JeffersonGoncalves\Gdpr\Contracts\HasPersonalData;
use JeffersonGoncalves\Gdpr\Enums\AnonymizeStrategy;
use JeffersonGoncalves\Gdpr\Enums\LegalBasis;

/**
 * Columns, casts, factory, observer, Filament panel access and avatar come from
 * jeffersongoncalves/laravel-user + jeffersongoncalves/filament-user.
 * Add traits, relations or overrides here.
 *
 * Personal data declared for the EU General Data Protection Regulation (GDPR): add a #[PersonalData] line for every column you add.
 */
#[PersonalData('name', purpose: 'Account identification', legalBasis: LegalBasis::Contract, anonymize: AnonymizeStrategy::Mask)]
#[PersonalData('email', purpose: 'Login and account notices', legalBasis: LegalBasis::Contract, anonymize: AnonymizeStrategy::Hash)]
class User extends BaseUser implements HasPersonalData
{
    use InteractsWithPersonalData;
}
