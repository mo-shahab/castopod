<?php

declare(strict_types=1);

/**
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'all_podcasts' => 'Alle Podcasts',
    'no_podcast' => 'Kein Podcast gefunden!',
    'create' => 'Podcast erstellen',
    'import' => 'Podcast importieren',
    'all_imports' => 'Podcast-Importe',
    'new_episode' => 'Neue Folge',
    'view' => 'Podcast ansehen',
    'edit' => 'Podcast bearbeiten',
    'publish' => 'Podcast veröffentlichen',
    'publish_edit' => 'Veröffentlichung bearbeiten',
    'delete' => 'Podcast löschen',
    'see_episodes' => 'Episoden ansehen',
    'see_contributors' => 'Mitwirkende anzeigen',
    'monetization_other' => 'Other monetization',
    'go_to_page' => 'Gehe zur Seite',
    'latest_episodes' => 'Neueste Folgen',
    'see_all_episodes' => 'Alle Folgen anzeigen',
    'draft' => 'Entwurf',
    'messages' => [
        'createSuccess' => 'Podcast erfolgreich erstellt!',
        'editSuccess' => 'Der Podcast wurde erfolgreich aktualisiert!',
        'importSuccess' => 'Der Podcast wurde erfolgreich importiert!',
        'deleteSuccess' => 'Podcast @{podcast_handle} erfolgreich gelöscht!',
        'deletePodcastMediaError' => 'Fehler beim Löschen des Podcast-{type, select,
            cover {Covers}
            banner {Banners}
            other {Media}
        }.',
        'deleteEpisodeMediaError' => 'Fehler beim Löschen {type, select,
            transcript {der Abschrift}
            chapters {der Kapitel}
            image {des Covers}
            audio {der Audio}
            other {der Medien}
        } von Episode {episode_slug}.',
        'deletePodcastMediaFolderError' => 'Fehler beim Löschen des Podcast-Medienordners {folder_path}. Sie können ihn manuell von der Festplatte löschen.',
        'podcastFeedUpdateSuccess' => 'Erfolgreiche Aktualisierung: {number_of_new_episodes, plural,
            one {# Episode wurde}
            other {# Episoden wurden}
        } zum Podcast hinzugefügt!',
        'podcastFeedUpToDate' => 'Der Podcast ist bereits auf dem neuesten Stand.',
        'publishError' => 'Dieser Podcast ist entweder bereits veröffentlicht oder zur Veröffentlichung geplant.',
        'publishEditError' => 'Dieser Podcast ist nicht zur Veröffentlichung geplant.',
        'publishCancelSuccess' => 'Veröffentlichung des Podcasts erfolgreich abgebrochen!',
        'scheduleDateError' => 'Veröffentlichungsdatum muss gesetzt sein!',
    ],
    'form' => [
        'identity_section_title' => 'Podcast-Identität',
        'identity_section_subtitle' => 'Diese Felder erlauben es dir, Aufmerksamkeit zu bekommen.',
        'fediverse_section_title' => 'Fediverse identity',

        'cover' => 'Podcast-Cover',
        'cover_size_hint' => 'Das Cover muss quadratisch und mindestens 1400px breit und hoch sein.',
        'banner' => 'Podcast-Banner',
        'banner_size_hint' => 'Der Banner muss ein 3:1-Verhältnis haben und mindestens 1500px breit sein.',
        'banner_delete' => 'Podcast-Banner löschen',
        'title' => 'Titel',
        'handle' => 'Identifikator',
        'handle_hint' =>
            'Wird genutzt, um den Podcast zu identifizieren. Großbuchstaben, Kleinbuchstaben, Zahlen und Unterstriche sind erlaubt.',
        'type' => [
            'label' => 'Typ',
            'episodic' => 'Episodisch',
            'episodic_hint' => 'Wenn Folgen ohne bestimmte Reihenfolge abgespielt werden sollen. Neueste Folgen werden zuerst angezeigt.',
            'serial' => 'Seriell',
            'serial_hint' => 'Wenn Folgen in bestimmter Reihenfolge abgespielt werden sollen. Älteste Folgen werden zuerst angezeigt.',
        ],
        'description' => 'Beschreibung',
        'classification_section_title' => 'Klassifikation',
        'classification_section_subtitle' =>
            'Dieser Bereich wird die Zuhörer und den Wettbewerb beeinflussen.',
        'language' => 'Sprache',
        'category' => 'Kategorie',
        'category_placeholder' => 'Kategorie wählen...',
        'other_categories' => 'Andere Kategorien',
        'parental_advisory' => [
            'label' => 'Hinweis an Eltern',
            'hint' => 'Enthält die Folge anstößige Inhalte?',
            'undefined' => 'nicht definiert',
            'clean' => 'Sauber',
            'explicit' => 'Anstößig',
        ],
        'author_section_title' => 'Autor',
        'author_section_subtitle' => 'Wer verwaltet den Podcast?',
        'owner_name' => 'Eigentümer',
        'owner_name_hint' =>
            'Nur für administrative Nutzung. Sichtbar im öffentlichen RSS-Feed.',
        'owner_email' => 'E-Mail des Eigentümers',
        'owner_email_hint' =>
            'Wird von den meisten Plattformen verwendet werden, um den Podcast-Besitz zu überprüfen. Sichtbar im öffentlichen RSS-Feed.',
        'publisher' => 'Herausgeber',
        'publisher_hint' =>
            'Die Gruppe, die für die Erstellung des Podcasts verantwortlich ist. Oft bezogen auf die Muttergesellschaft oder das Netzwerk eines Podcasts. Dieses Feld wird manchmal als \'Autor\' bezeichnet.',
        'copyright' => 'Urheberrecht',
        'location_section_title' => 'Standort',
        'location_section_subtitle' => 'Um welchen Ort geht es in diesem Podcast?',
        'location_name' => 'Standortname oder Adresse',
        'location_name_hint' => 'Dies kann ein echter oder ein fiktiver Ort sein',
        'monetization_section_title' => 'Monetarisierung',
        'monetization_section_subtitle' =>
            'Geld dank der Zuhörer verdienen.',
        'premium' => 'Premium',
        'premium_by_default' => 'Episoden müssen standardmäßig als Premium festgelegt werden',
        'premium_by_default_hint' => 'Podcast-Episoden werden standardmäßig als Premium markiert. Sie können dennoch einzelne Episoden, Trailer oder Boni als öffentlich festlegen.',
        'op3' => 'Open Podcast Prefix Project (OP3)',
        'op3_hint' => 'Werten Sie Ihre Analysedaten mit OP3 auf, einem quelloffenen und vertrauenswürdigen Analysedienst eines Drittanbieters. Teilen, validieren und vergleichen Sie Ihre Analysedaten in dem offenen Podcast-Ökosystem.',
        'op3_enable' => 'OP3-Analysedienst aktivieren',
        'op3_enable_hint' => 'Aus Sicherheitsgründen werden die Analysedaten von Premium-Episoden nicht mit OP3 geteilt.',
        'payment_pointer' => 'Zahlungsadresse (Payment Pointer) für Web-Monetarisierung',
        'payment_pointer_hint' =>
            'Hier erhalten Sie dank Monetarisierung Geld',
        'advanced_section_title' => 'Erweiterte Einstellungen',
        'advanced_section_subtitle' =>
            'Wenn RSS-Tags benötigt werden, die Castopod nicht verwendet, können diese hier gesetzt werden.',
        'custom_rss' => 'Eigene RSS-Tags für den Podcast',
        'custom_rss_hint' => 'Dies wird innerhalb des ❬channel❭ Tags eingefügt.',
        'new_feed_url' => 'Neue Feed-URL',
        'new_feed_url_hint' => 'Benutzen Sie dieses Feld, wenn Sie zu einer anderen Domain oder Podcast-Plattform wechseln. Standardmäßig wird der Wert auf die aktuelle RSS URL gesetzt, wenn der Podcast importiert wird.',
        'old_feed_url' => 'Alte Feed-URL',
        'partnership' => 'Partnerschaft:en',
        'partner_id' => 'ID',
        'partner_link_url' => 'Link',
        'partner_image_url' => 'Bildadresse',
        'partner_id_hint' => 'Ihre eigene Partner-ID',
        'partner_link_url_hint' => 'Die generische Partnerlink-Adresse',
        'partner_image_url_hint' => 'Die generische Partnerbild-Adresse',
        'block' => 'Podcast soll vor öffentlichen Katalogen versteckt werden',
        'block_hint' =>
            'Der Podcast zeigt oder versteckt den Status: Beim Einschalten dieser Option wird verhindert, dass der Podcast in Apple Podcasts, Google Podcasts und alle Apps von Drittanbietern, die Inhalte aus diesen Verzeichnissen ziehen, erscheint. (Ohne Garantie!)',
        'complete' => 'Der Podcast wird keine neuen Folgen erhalten',
        'lock' => 'Schütze den Podcast davor kopiert zu werden',
        'lock_hint' =>
            'Der Zweck ist es, anderen Podcast-Plattformen mitzuteilen, ob sie diesen Feed importieren dürfen. "Ja" bedeutet, dass jeder Versuch, diesen Feed in eine neue Plattform zu importieren, abgelehnt wird.',
        'submit_create' => 'Podcast erstellen',
        'submit_edit' => 'Podcast speichern',
    ],
    'category_options' => [
        'uncategorized' => 'unkategorisiert',
        'arts' => 'Kunst',
        'business' => 'Geschäftliches',
        'comedy' => 'Comedy',
        'education' => 'Bildung',
        'fiction' => 'Fiktion',
        'government' => 'Regierung',
        'health_and_fitness' => 'Gesundheit &amp Fitness',
        'history' => 'Geschichte',
        'kids_and_family' => 'Kinder &amp Familie',
        'leisure' => 'Freizeit',
        'music' => 'Musik',
        'news' => 'Nachrichten',
        'religion_and_spirituality' => 'Religion &amp Spiritualität',
        'science' => 'Wissenschaft',
        'society_and_culture' => 'Gesellschaft &amp Kultur',
        'sports' => 'Sport',
        'technology' => 'Technologie',
        'true_crime' => 'Wahres Verbrechen',
        'tv_and_film' => 'TV &amp Filme',
        'books' => 'Bücher',
        'design' => 'Design',
        'fashion_and_beauty' => 'Mode &amp Schönheit',
        'food' => 'Essen',
        'performing_arts' => 'Darstellende Kunst',
        'visual_arts' => 'Visuelle Kunst',
        'careers' => 'Karriere',
        'entrepreneurship' => 'Unternehmertum',
        'investing' => 'Investment',
        'management' => 'Management',
        'marketing' => 'Marketing',
        'non_profit' => 'Gemeinnützigkeit',
        'comedy_interviews' => 'Comedy-Interviews',
        'improv' => 'Improvisation',
        'stand_up' => 'Stand-Up',
        'courses' => 'Kurse',
        'how_to' => 'So geht\'s',
        'language_learning' => 'Sprachenlernen',
        'self_improvement' => 'Weiterbildung',
        'comedy_fiction' => 'Komödie Fiktion',
        'drama' => 'Drama',
        'science_fiction' => 'Science-Fiction',
        'alternative_health' => 'Alternative Gesundheit',
        'fitness' => 'Fitness',
        'medicine' => 'Medizin',
        'mental_health' => 'Mentale Gesundheit',
        'nutrition' => 'Ernährung',
        'sexuality' => 'Sexualität',
        'education_for_kids' => 'Bildung für Kinder',
        'parenting' => 'Erziehung',
        'pets_and_animals' => 'Haustiere &amp Tiere',
        'stories_for_kids' => 'Geschichten für Kinder',
        'animation_and_manga' => 'Animation &amp Manga',
        'automotive' => 'Autos',
        'aviation' => 'Luftfahrt',
        'crafts' => 'Handwerk',
        'games' => 'Spiele',
        'hobbies' => 'Hobbies',
        'home_and_garden' => 'Heim &amp Garten',
        'video_games' => 'Videospiele',
        'music_commentary' => 'Musikkommentar',
        'music_history' => 'Musikgeschichte',
        'music_interviews' => 'Musikinterviews',
        'business_news' => 'Wirtschaftsnachrichten',
        'daily_news' => 'Nachrichten',
        'entertainment_news' => 'Unterhaltung',
        'news_commentary' => 'Nachrichtenkommentar',
        'politics' => 'Politik',
        'sports_news' => 'Sport',
        'tech_news' => 'Technik',
        'buddhism' => 'Buddhismus',
        'christianity' => 'Christentum',
        'hinduism' => 'Hinduismus',
        'islam' => 'Islam',
        'judaism' => 'Judentum',
        'religion' => 'Religion',
        'spirituality' => 'Spiritualität',
        'astronomy' => 'Astronomie',
        'chemistry' => 'Chemie',
        'earth_sciences' => 'Erdkunde',
        'life_sciences' => 'Lebenswissenschaften',
        'mathematics' => 'Mathematik',
        'natural_sciences' => 'Naturwissenschaft',
        'nature' => 'Natur',
        'physics' => 'Physik',
        'social_sciences' => 'Sozialwissenschaften',
        'documentary' => 'Dokumentation',
        'personal_journals' => 'Persönliche Tagebücher',
        'philosophy' => 'Philosophie',
        'places_and_travel' => 'Orte &amp Reisen',
        'relationships' => 'Beziehungen',
        'baseball' => 'Baseball',
        'basketball' => 'Basketball',
        'cricket' => 'Cricket',
        'fantasy_sports' => 'Fantasy-Sport',
        'football' => 'American Football',
        'golf' => 'Golf',
        'hockey' => 'Eishockey',
        'rugby' => 'Rugby',
        'running' => 'Laufen',
        'soccer' => 'Fußball',
        'swimming' => 'Schwimmen',
        'tennis' => 'Tennis',
        'volleyball' => 'Volleyball',
        'wilderness' => 'Wildnis',
        'wrestling' => 'Ringen',
        'after_shows' => 'After Shows',
        'film_history' => 'Filmgeschichte',
        'film_interviews' => 'Filminterviews',
        'film_reviews' => 'Filmkritiken',
        'tv_reviews' => 'TV-Kritiken',
    ],
    'publish_form' => [
        'back_to_podcast_dashboard' => 'Zurück zum Podcast-Dashboard',
        'post' => 'Dein Ankündigungsbeitrag',
        'post_hint' =>
            "Schreiben Sie eine Nachricht, um die Veröffentlichung Ihres Podcasts anzukündigen. Diese Nachricht wird auf der Homepage des Podcasts erscheinen.",
        'message_placeholder' => 'Schreiben Sie Ihre Nachricht…',
        'submit' => 'Veröffentlichen',
        'publication_date' => 'Veröffentlichungsdatum',
        'publication_method' => [
            'now' => 'Jetzt',
            'schedule' => 'Planen',
        ],
        'scheduled_publication_date' => 'Geplantes Veröffentlichungsdatum',
        'scheduled_publication_date_hint' =>
            'Du kannst die Veröffentlichung des Podcasts planen, indem du ein zukünftiges Veröffentlichungsdatum festlegst. Dieses Feld muss als YYYY-MM-TT HH:mm formatiert werden',
        'submit_edit' => 'Veröffentlichung bearbeiten',
        'cancel_publication' => 'Veröffentlichung abbrechen',
        'message_warning' => 'Sie haben keinen Text für Ihren Ankündigungsbeitrag geschrieben!',
        'message_warning_hint' => 'Eine Nachricht erhöht das soziale Engagement, was zu einer besseren Sichtbarkeit des Podcasts führt.',
        'message_warning_submit' => 'Dennoch veröffentlichen',
    ],
    'publication_status_banner' => [
        'draft_mode' => 'Entwurfsmodus',
        'not_published' => 'Dieser Podcast ist noch nicht veröffentlicht.',
        'scheduled' => 'Dieser Podcast ist für eine Veröffentlichung am {publication_date} vorgesehen.',
    ],
    'delete_form' => [
        'disclaimer' =>
            "Beim Löschen des Podcasts werden alle damit verbundenen Episoden, Mediendateien, Beiträge und Analysen gelöscht. Diese Aktion ist unumkehrbar, Sie können diese danach nicht mehr abrufen.",
        'understand' => 'Ich verstehe, ich möchte, dass der Podcast dauerhaft gelöscht wird',
        'submit' => 'Löschen',
    ],
    'by' => 'Von {publisher}',
    'season' => 'Staffel {seasonNumber}',
    'list_of_episodes_year' => '{year} Folgen ({episodeCount})',
    'list_of_episodes_season' =>
        'Staffel {seasonNumber} Folgen ({episodeCount})',
    'no_episode' => 'Keine Folge gefunden!',
    'follow' => 'Folgen',
    'followers' => '{numberOfFollowers, plural,
        one {# Follower}
        other {# Follower}
    }',
    'posts' => '{numberOfPosts, plural,
        one {# Beitrag}
        other {# Beiträge}
    }',
    'activity' => 'Aktivitäten',
    'episodes' => 'Folgen',
    'sponsor' => 'Unterstützer',
    'funding_links' => 'Links zur Finanzierung von {podcastTitle}',
    'find_on' => 'Finde {podcastTitle} auf',
    'listen_on' => 'Hören auf',
];
