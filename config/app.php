<?php
/**
 * Yii Application Config
 *
 * Edit this file at your own risk!
 *
 * The array returned by this file will get merged with
 * vendor/craftcms/cms/src/config/app.php and app.[web|console].php, when
 * Craft's bootstrap script is defining the configuration for the entire
 * application.
 *
 * You can define custom modules and system components, and even override the
 * built-in system components.
 *
 * If you want to modify the application config for *only* web requests or
 * *only* console requests, create an app.web.php or app.console.php file in
 * your config/ folder, alongside this one.
 * 
 * Read more about application configuration:
 * https://craftcms.com/docs/4.x/config/app.html
 */

use craft\helpers\App;
use modules\accountapi\AccountApi;
use modules\adminregister\AdminRegister;
use modules\afteractivation\AfterActivation;
use modules\afterdeactivation\AfterDeactivation;
use modules\beforeactivationuser\BeforeActivationUser;
use modules\confirmemail\ConfirmEmail;
use modules\csvgenerator\CsvGenerator;
use modules\custommemberid\CustomMemberId;
use modules\dailychecks\DailyChecks;
use modules\deactivateuser\DeactivateUser;
use modules\etigenerator\EtiGenerator;
use modules\excelusers\ExcelUsers;
use modules\flexmail\Flexmail;
use modules\loginapi\LoginApi;
use modules\membershippayments\MembershipPayments;
use modules\oldmembers\OldMembers;
use modules\rateextramember\RateExtraMember;
use modules\ratemember\RateMember;
use modules\submissions\Submissions;
use modules\userfullname\UserFullName;

return [
    'id' => App::env('CRAFT_APP_ID') ?: 'CraftCMS', 
    'modules' => [
        'admin-register' => AdminRegister::class,
        'rate-member' => RateMember::class, 
        'rate-extra-member' => RateExtraMember::class, 
        'membership-payments' => MembershipPayments::class,
        'confirm-email' => ConfirmEmail::class,
        'user-full-name' => UserFullName::class,
        'custom-member-id' => CustomMemberId::class,
        'excel-users' => ExcelUsers::class,
        'after-deactivation' => AfterDeactivation::class,
        'before-activation-user' => BeforeActivationUser::class,
        'deactivate-user' => DeactivateUser::class,
        'after-activation' => AfterActivation::class,
        'daily-checks' => DailyChecks::class,
        'old-members' => OldMembers::class,
        'eti-generator' => EtiGenerator::class,
        'flexmail' => Flexmail::class,
        'submissions' => Submissions::class,
        'account-api' => AccountApi::class,
        'csv-generator' => CsvGenerator::class,
    ], 
    'bootstrap' => [
        'admin-register',
        'rate-member', 
        'rate-extra-member', 
        'membership-payments',
        'confirm-email',
        'user-full-name',
        'custom-member-id',
        'excel-users',
        'after-deactivation',
        'before-activation-user',
        'deactivate-user',
        'after-activation',
        'daily-checks',
        'old-members',
        'eti-generator',
        'flexmail',
        'submissions',
        'account-api',
        'csv-generator',
    ],
];
