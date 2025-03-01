<?php

declare(strict_types=1);

/**
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'season' => 'Σεζόν {seasonNumber}',
    'season_abbr' => 'S{seasonNumber}',
    'number' => 'Επεισόδιο {episodeNumber}',
    'number_abbr' => 'Επ. {episodeNumber}',
    'season_episode' => 'Σεζόν {seasonNumber} επεισόδιο {episodeNumber}',
    'season_episode_abbr' => 'S{seasonNumber}:E{episodeNumber}',
    'number_of_comments' => '{numberOfComments, plural,
        one {# σχόλιο}
        other {# σχόλεια}
    }',
    'all_podcast_episodes' => 'Όλα τα επεισόδια του podcast',
    'back_to_podcast' => 'Μετάβαση πίσω στο podcast',
    'edit' => 'Επεξεργασία',
    'preview' => 'Preview',
    'publish' => 'Δημοσίευση',
    'publish_edit' => 'Επεξεργασία δημοσίευσης',
    'publish_date_edit' => 'Επεξεργασία ημερομηνίας δημοσίευσης',
    'unpublish' => 'Αναίρεση δημοσίευσης',
    'publish_error' => 'Το επεισόδιο έχει ήδη δημοσιευθεί.',
    'publish_edit_error' => 'Το επεισόδιο έχει ήδη δημοσιευθεί.',
    'publish_cancel_error' => 'Το επεισόδιο έχει ήδη δημοσιευθεί.',
    'publish_date_edit_error' => 'Το επεισόδιο δεν έχει δημοσιευθεί ακόμα, δεν μπορείτε να επεξεργαστείτε την ημερομηνία έκδοσής του.',
    'publish_date_edit_future_error' => 'Η ημερομηνία δημοσίευσης του επεισοδίου μπορεί να οριστεί μόνο σε μια προηγούμενη ημερομηνία! Αν θέλετε να την προγραμματίσετε εκ νέου, αποδημοσιεύστε την πρώτα.',
    'publish_date_edit_success' => 'Η ημερομηνία δημοσίευσης του επεισοδίου έχει ενημερωθεί με επιτυχία!',
    'unpublish_error' => 'Το επεισόδιο δεν έχει δημοσιευθεί.',
    'delete' => 'Διαγραφή',
    'go_to_page' => 'Μετάβαση στη σελίδα',
    'create' => 'Προσθήκη επεισοδίου',
    'publication_status' => [
        'published' => 'Δημοσιευμένο',
        'with_podcast' => 'Δημοσιευμένο',
        'scheduled' => 'Προγραμματισμένο',
        'not_published' => 'Δεν έχει δημοσιευτεί',
    ],
    'with_podcast_hint' => 'Να δημοσιευτεί ταυτόχρονα με το podcast',
    'list' => [
        'search' => [
            'placeholder' => 'Αναζήτηση ενός επεισοδίου',
            'clear' => 'Καθαρισμός αναζήτησης',
            'submit' => 'Αναζήτηση',
        ],
        'number_of_episodes' => '{numberOfEpisodes, plural,
            one {# επισόδειο}
            other {# επισόδεια}
        }',
        'episode' => 'Επεισόδιο',
        'visibility' => 'Ορατότητα',
        'downloads' => 'Downloads',
        'comments' => 'Σχόλια',
        'actions' => 'Ενέργειες',
    ],
    'messages' => [
        'createSuccess' => 'Το επεισόδιο δημιουργήθηκε με επιτυχία!',
        'editSuccess' => 'Το επεισόδιο ενημερώθηκε με επιτυχία!',
        'publishSuccess' => '{publication_status, select,
            published {Το επεισόδιο δημοσιεύτηκε με επιτυχία!}
            scheduled {Η έκδοση για το επεισόδιο έχει προγραμματιστεί επιτυχώς!}
            with_podcast {Αυτό το επεισόδιο θα δημοσιευθεί ταυτόχρονα με το podcast.}
            other {Αυτό το επεισόδιο δεν έχει δημοσιευθεί.}
        }',
        'publishCancelSuccess' => 'Η δημοσίευση του επεισοδίου ακυρώθηκε επιτυχώς!',
        'unpublishBeforeDeleteTip' => 'Πρέπει να καταργήσετε τη δημοσίευση του επεισοδίου πριν τη διαγραφή.',
        'scheduleDateError' => 'Η ημερομηνία πρέπει να οριστεί!',
        'deletePublishedEpisodeError' => 'Πρέπει να καταργήσετε τη δημοσίευση του επεισοδίου πριν τη διαγραφή.',
        'deleteSuccess' => 'Το επεισόδιο διαγράφτηκε με επιτυχία!',
        'deleteError' => 'Αποτυχία διαγραφής επεισοδίου {type, select,
            transcript {transcript}
            chapters {κεφάλαια}
            image {καλύπτουν}
            audio {ήχος}
            other {πολυμέσα}
        }.',
        'deleteFileError' => 'Failed to delete {type, select,
            transcript {transcript}
            chapters {chapters}
            image {cover}
            audio {audio}
            other {media}
        } file {file_key}. You may manually remove it from your disk.',
        'sameSlugError' => 'Ένα επεισόδιο με το επιλεγμένο slug υπάρχει ήδη.',
    ],
    'form' => [
        'file_size_error' =>
            'Το μέγεθος του αρχείου σας είναι πολύ μεγάλο! Το μέγιστο μέγεθος είναι {0}. Αυξήστε τις τιμές `memory_limit`, `upload_max_filesize` και `post_max_size` στο αρχείο ρυθμίσεων php και έπειτα επανεκκινήστε τον διακομιστή web για να ανεβάσετε το αρχείο σας.',
        'audio_file' => 'Αρχείο ήχου',
        'audio_file_hint' => 'Επιλέξτε ένα αρχείο ήχου .mp3 ή .m4a.',
        'info_section_title' => 'Πληροφορίες επεισοδίου',
        'cover' => 'Εξώφυλλο επισοδίου',
        'cover_hint' =>
            'Εάν δεν ορίσετε ένα εξώφυλλο, το εξώφυλλο του podcast θα χρησιμοποιηθεί αντ \'αυτού.',
        'cover_size_hint' => 'Το εξώφυλλο πρέπει να είναι τουλάχιστον 1400px πλάτος και ύψος.',
        'title' => 'Τίτλος',
        'title_hint' =>
            'Θα πρέπει να υπάρχει ένα σαφές και συνοπτικό όνομα επεισοδίου. Μην καθορίσετε εδώ το επεισόδιο ή τους αριθμούς της σεζόν.',
        'permalink' => 'Μόνιμος σύνδεσμος',
        'season_number' => 'Σεζόν',
        'episode_number' => 'Επεισόδιο',
        'type' => [
            'label' => 'Είδος',
            'full' => 'Πλήρης',
            'full_hint' => 'Πλήρες περιεχόμενο (το επεισόδιο)',
            'trailer' => 'Τρέιλερ',
            'trailer_hint' => 'Σύντομο, προωθητικό περιεχόμενο που αντιπροσωπεύει μια προεπισκόπηση της τρέχουσας εμφάνισης',
            'bonus' => 'Μπόνους',
            'bonus_hint' => 'Επιπλέον περιεχόμενο για την παράσταση (για παράδειγμα, πίσω από τις σκηνές πληροφορίες ή συνεντεύξεις με τη cast) ή δια-διαφημιστικό περιεχόμενο για μια άλλη παράσταση',
        ],
        'premium_title' => 'Premium',
        'premium' => 'Το επεισόδιο πρέπει να είναι προσβάσιμο μόνο σε συνδρομητές premium',
        'parental_advisory' => [
            'label' => 'Γονικός σύμβουλος',
            'hint' => 'Μήπως το επεισόδιο περιέχει ακατάλληλο περιεχόμενο;',
            'undefined' => 'απροσδιόριστο',
            'clean' => 'Καθαρισμός',
            'explicit' => 'Άσεμνο περιεχόμενο',
        ],
        'show_notes_section_title' => 'Εμφάνιση σημειώσεων',
        'show_notes_section_subtitle' =>
            'Μέχρι 4000 χαρακτήρες, να είναι σαφείς και συνοπτικές. Η εμφάνιση σημειώσεων βοηθάει πιθανούς ακροατές στην εύρεση του επεισοδίου.',
        'description' => 'Περιγραφή',
        'description_footer' => 'Υποσέλιδο περιγραφής',
        'description_footer_hint' =>
            'Αυτό το κείμενο προστίθεται στο τέλος του κάθε επεισοδίου, είναι ένα καλό μέρος για να εισάγετε κοινωνικές συνδέσεις για παράδειγμα.',
        'additional_files_section_title' => 'Επιπρόσθετα αρχεία',
        'additional_files_section_subtitle' =>
            'Αυτά τα αρχεία μπορούν να χρησιμοποιηθούν από άλλες πλατφόρμες για την παροχή καλύτερης εμπειρίας στο κοινό σας. Δείτε το {podcastNamespaceLink} για περισσότερες πληροφορίες.',
        'location_section_title' => 'Τοποθεσία',
        'location_section_subtitle' => 'Σε ποιο μέρος είναι αυτό το επεισόδιο;',
        'location_name' => 'Όνομα τοποθεσίας ή διεύθυνση',
        'location_name_hint' => 'Αυτή μπορεί να είναι μια πραγματική ή φανταστική τοποθεσία',
        'transcript' => 'Απομαγνητοφώνηση (υπότιτλοι / κλειστοί υπότιτλοι)',
        'transcript_hint' => 'Επιτρέπονται μόνο .srt αρχεία.',
        'transcript_download' => 'Λήψη απομαγνητοφώνησης',
        'transcript_file' => 'Αρχείο απομαγνητοφώνησης (.srt)',
        'transcript_remote_url' => 'Απομακρυσμένη διεύθυνση url για απομαγνητοφώνηση',
        'transcript_file_delete' => 'Διαγραφή αρχείου απομαγνητοφώνησης',
        'chapters' => 'Κεφάλαια',
        'chapters_hint' => 'Το αρχείο πρέπει να είναι σε μορφή JSON.',
        'chapters_download' => 'Κατεβάστε τα κεφάλαια',
        'chapters_file' => 'Αρχεία κεφαλαίων',
        'chapters_remote_url' => 'Απομακρυσμένη διεύθυνση url για αρχεία κεφαλαίων',
        'chapters_file_delete' => 'Διαγραφή αρχείου κεφαλαίων',
        'advanced_section_title' => 'Προηγμένες Παράμετροι',
        'advanced_section_subtitle' =>
            'Αν χρειάζεστε ετικέτες RSS που δεν χειρίζεται το Castopod, ορίστε τις εδώ.',
        'custom_rss' => 'Προσαρμοσμένες ετικέτες RSS για το επεισόδιο',
        'custom_rss_hint' => 'Αυτό θα ενεθεί εντός της ετικέτας "item".',
        'block' => 'Το επεισόδιο πρέπει να είναι κρυμμένο από όλες τις πλατφόρμες',
        'block_hint' =>
            'H κατάσταση εμφάνιση ή απόκρυψη επισοδείου: Η εναλλαγή αποτρέπει την εμφάνιση του επεισοδίου στο Apple Podcast Google Podcasts, και σε οποιεσδήποτε εφαρμογή τρίτων που τραβούν τις εμφανίσεις από αυτούς τους καταλόγους. (Μη εγγυημένη)',
        'submit_create' => 'Δημιουργία επεισοδίου',
        'submit_edit' => 'Αποθήκευση επεισοδίου',
    ],
    'publish_form' => [
        'back_to_episode_dashboard' => 'Πίσω στον Πίνακα Ελέγχου',
        'post' => 'Η ανακοίνωσή σας',
        'post_hint' =>
            "Γράψτε ένα μήνυμα για να ανακοινώσετε τη δημοσίευση του επεισοδίου σας. Το μήνυμα θα μεταδοθεί σε όλους τους οπαδούς σας στο fediverse και θα εμφανίζεται στην αρχική σελίδα του podcast σας.",
        'message_placeholder' => 'Γράψτε το μήνυμά σας…',
        'publication_date' => 'Ημερομηνία δημοσίευσης',
        'publication_method' => [
            'now' => 'Τώρα',
            'schedule' => 'Προγραμματισμός',
            'with_podcast' => 'Δημοσίευση παράλληλα με podcast',
        ],
        'scheduled_publication_date' => 'Ημερομηνία προγραμματισμένης δημοσίευσης',
        'scheduled_publication_date_clear' => 'Εκκαθάριση ημερομηνίας δημοσίευσης',
        'scheduled_publication_date_hint' =>
            'Μπορείτε να προγραμματίσετε την έκδοση επεισοδίων ορίζοντας μια μελλοντική ημερομηνία δημοσίευσης. Αυτό το πεδίο πρέπει να μορφοποιηθεί ως ΕΕΕ-ΜΜ-ΗΗ HH:mm',
        'submit' => 'Δημοσίευση',
        'submit_edit' => 'Επεξεργασία δημοσίευσης',
        'cancel_publication' => 'Ακύρωση δημοσίευσης',
        'message_warning' => 'Δεν γράψατε μήνυμα για την ανακοίνωσή σας!',
        'message_warning_hint' => 'Έχοντας ένα μήνυμα αυξάνει την κοινωνική δέσμευση, με αποτέλεσμα μια καλύτερη προβολή για το επεισόδιο σας.',
        'message_warning_submit' => 'Δημοσίευση ούτως ή άλλως',
    ],
    'publish_date_edit_form' => [
        'new_publication_date' => 'Ημερομηνία νέας δημοσίευσης',
        'new_publication_date_hint' => 'Πρέπει να οριστεί σε μια προηγούμενη ημερομηνία.',
        'submit' => 'Επεξεργασία ημερομηνίας δημοσίευσης',
    ],
    'unpublish_form' => [
        'disclaimer' =>
            "Η κατάργηση της δημοσίευσης του επεισοδίου θα διαγράψει όλα τα σχόλια και τις δημοσιεύσεις που σχετίζονται με αυτό και θα τα αφαιρέσει από τη ροή RSS του podcast.",
        'understand' => 'Καταλαβαίνω, θέλω να αποδημοσιεύσει το επεισόδιο',
        'submit' => 'Αναίρεση δημοσίευσης',
    ],
    'delete_form' => [
        'disclaimer' =>
            "Διαγράφοντας το επεισόδιο θα διαγράψετε όλα τα αρχεία πολυμέσων, τα σχόλια, τα βίντεο κλιπ και τα ηχητικά δεδομένα που σχετίζονται με αυτό.",
        'understand' => 'Καταλαβαίνω, θέλω να διαγράψω το επεισόδιο',
        'submit' => 'Διαγραφή',
    ],
    'embed' => [
        'title' => 'Ενσωματώσιμος αναπαραγωγέας',
        'label' =>
            'Επιλέξτε ένα χρώμα θέματος, αντιγράψτε τον ενσωματωμένο παίκτη στο πρόχειρο και στη συνέχεια επικολλήστε το στην ιστοσελίδα σας.',
        'clipboard_iframe' => 'Αντιγραφή ενσωματωμένου αναπαραγωγέα στο πρόχειρο',
        'clipboard_url' => 'Αντιγραφή διεύθυνσης στο πρόχειρο',
        'dark' => 'Σκοτεινό',
        'dark-transparent' => 'Σκούρο διαφανές',
        'light' => 'Ανοιχτόχρωμο',
        'light-transparent' => 'Ανοιχτό διαφανές',
    ],
    'publication_status_banner' => [
        'draft_mode' => 'draft mode',
        'text' => '{publication_status, select,
            published {This episode is not yet published.}
            scheduled {This episode is scheduled for publication on {publication_date}.}
            with_podcast {This episode will be published at the same time as the podcast.}
            other {This episode is not yet published.}
        }',
        'preview' => 'Preview',
    ],
];
