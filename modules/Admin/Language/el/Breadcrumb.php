<?php

declare(strict_types=1);

use Modules\Admin\Config\Admin;

/**
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'label' => 'διαδρομή (Breadcrumb)',
    config(Admin::class)
        ->gateway => 'Αρχική σελίδα',
    'podcasts' => 'podcasts',
    'episodes' => 'επεισόδια',
    'subscriptions' => 'συνδρομές',
    'contributors' => 'συντελεστές',
    'pages' => 'σελίδες',
    'settings' => 'ρυθμίσεις',
    'theme' => 'θέμα',
    'about' => 'σχετικά',
    'add' => 'προσθήκη',
    'new' => 'νέο',
    'edit' => 'επεξεργασία',
    'persons' => 'άτομα',
    'publish' => 'δημοσίευση',
    'publish-edit' => 'επεξεργασία δημοσίευσης',
    'publish-date-edit' => 'επεξεργασία ημερομηνίας δημοσίευσης',
    'unpublish' => 'αναίρεση δημοσίευσης',
    'delete' => 'διαγραφή',
    'remove' => 'αφαίρεση',
    'fediverse' => 'fediverse',
    'blocked-actors' => 'blocked actors',
    'blocked-domains' => 'blocked domains',
    'users' => 'χρήστες',
    'my-account' => 'ο λογαριασμός μου',
    'change-password' => 'αλλαγή κωδικού πρόσβασης',
    'imports' => 'imports',
    'platforms' => 'πλατφόρμες',
    'social' => 'κοινωνικά δίκτυα',
    'funding' => 'χρηματοδότηση',
    'analytics' => 'αναλυτικά στοιχεία',
    'locations' => 'τοποθεσίες',
    'webpages' => 'ιστοσελίδες',
    'unique-listeners' => 'μοναδικοί ακροατές',
    'players' => 'παίκτες',
    'listening-time' => 'χρόνος ακρόασης',
    'time-periods' => 'χρονικές περίοδοι',
    'soundbites' => 'ήχοι',
    'video-clips' => 'βίντεο κλιπς',
    'embed' => 'ενσωματώσιμος αναπαραγωγέας',
    'notifications' => 'ειδοποιήσεις',
    'suspend' => 'αναστολή',
];
