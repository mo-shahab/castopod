<?php

declare(strict_types=1);

/**
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'all_podcasts' => 'An holl bodkastoù',
    'no_podcast' => 'N\'eo bet kavet podkast ebet!',
    'create' => 'Krouiñ ur podkast',
    'import' => 'Enporzhiañ ur podkast',
    'all_imports' => 'Podcast imports',
    'new_episode' => 'Rann nevez',
    'view' => 'Gwelet ar podkast',
    'edit' => 'Kemmañ ar podkast',
    'publish' => 'Embann ar podkast',
    'publish_edit' => 'Kemmañ an embannadur',
    'delete' => 'Dilemel ar podkast',
    'see_episodes' => 'Gwelet ar rannoù',
    'see_contributors' => 'Gwelet ar berzhidi, ar perzhiadezed',
    'monetization_other' => 'Other monetization',
    'go_to_page' => 'Gwelet ar bajenn',
    'latest_episodes' => 'Rannoù diwezhañ',
    'see_all_episodes' => 'Gwelet an holl rannoù',
    'draft' => 'Brouilhed',
    'messages' => [
        'createSuccess' => 'Krouet eo bet ar podkast gant berzh!',
        'editSuccess' => 'Hizivaet eo bet ar podkast gant berzh!',
        'importSuccess' => 'Enporzhet eo bet ar podkast gant berzh!',
        'deleteSuccess' => 'Dilamet eo bet ar podkast @{podcast_handle} gant berzh!',
        'deletePodcastMediaError' => 'C\'hwitadenn war dilemel {type, select,
            cover {golo}
            banner {giton}
            other {media}
        } ar podkast.',
        'deleteEpisodeMediaError' => 'C\'hwitadenn war dilemel {type, select,
            transcript {treuzskrivadur}
            chapters {chabistroù}
            image {golo}
            audio {aodio}
            other {media}
        } ar rann {episode_slug}.',
        'deletePodcastMediaFolderError' => 'C\'hwitadenn war dilemel teuliad ar mediaioù {folder_path}. Gallout a rit lemel an teuliad-mañ diouzh ar gantenn dre zorn.',
        'podcastFeedUpdateSuccess' => 'Hizivadenn: {number_of_new_episodes, plural,
            one {# rann}
            two {# rann}
            few {# rann}
            many {# rann}
            other {# rann}
        } a zo bet ouzhpennet d\'ar podkast gant berzh!',
        'podcastFeedUpToDate' => 'Hizivaet eo bet ar podkast dija.',
        'publishError' => 'Ar podkast-mañ a zo bet embannet dija pe steuñvet eo e embannadur.',
        'publishEditError' => 'N\'eo ket steuñvet embannadur ar podkast-mañ.',
        'publishCancelSuccess' => 'Nullet eo bet embannadur ar podkast gant berzh!',
        'scheduleDateError' => 'Ret eo lakaat un deiziad evit an embannadur!',
    ],
    'form' => [
        'identity_section_title' => 'Titouroù diwar-benn ar podkast',
        'identity_section_subtitle' => 'Ar maeziennoù a laka ac\'hanoc\'h da vezañ remerket.',
        'fediverse_section_title' => 'Fediverse identity',

        'cover' => 'Golo ar podkast',
        'cover_size_hint' => 'Ar golo a rankfe bezañ ur c\'harrez ha 1400px e vent da nebeutañ.',
        'banner' => 'Giton ar podkast',
        'banner_size_hint' => 'Ar giton a rankfe bezañ 3:1 e feur led/sav ha bezañ 1500px e led d\'an nebeutañ.',
        'banner_delete' => 'Dilemel giton ar podkast',
        'title' => 'Titl',
        'handle' => 'Anv ar podkast (handle)',
        'handle_hint' =>
            'Implijet evit anavezout ar podkast. Lizherennoù bras pe munut, niveroù hag islinenn (_) degemeret.',
        'type' => [
            'label' => 'Doare',
            'episodic' => 'Bep ur mare',
            'episodic_hint' => 'M\'eo ar rannoù da vezañ selaouet hep urzh resis. Ar rannoù nevesoc’h a vo kinniget da gentañ.',
            'serial' => 'Heuliad',
            'serial_hint' => 'M\'eo ar rannoù da vezañ selaouet gant un urzh resis. Ar rannoù koshoc\'h a vo kinniget da gentañ.',
        ],
        'description' => 'Deskrivadur',
        'classification_section_title' => 'Rummatadur',
        'classification_section_subtitle' =>
            'Ar maeziennoù-mañ o do ul levezon war an niver a selaouerien·ezed hag ho kevezerezh.',
        'language' => 'Yezh',
        'category' => 'Rummad',
        'category_placeholder' => 'Dibab ur rummad…',
        'other_categories' => 'Rummadoù all',
        'parental_advisory' => [
            'label' => 'Kemenn evit ar gerent',
            'hint' => 'Hag an dra-se a zo danvez ha ne zlefe ket gwelet gant bugale?',
            'undefined' => 'andermenet',
            'clean' => 'Dereat',
            'explicit' => 'Danvez evit an oadourien',
        ],
        'author_section_title' => 'Aozer·ez',
        'author_section_subtitle' => 'Piv zo o verañ ar podkast?',
        'owner_name' => 'Anv ar perc\'henn',
        'owner_name_hint' =>
            'Evit a sell ouzh ar mererezh. War al lanv RSS publik e vo.',
        'owner_email' => 'Chomlec\'h postel ar perc\'henn',
        'owner_email_hint' =>
            'Implijet e vo gant an darn vrasañ eus ar savennoù evit gwiriañ perc\'hentiezh ar podkast. War al lanv RSS publik e vo.',
        'publisher' => 'Embanner·ez',
        'publisher_hint' =>
            'Ar strollad kiriek eus sevel ar podkast. Alies eo embregerezh pe rouedad ar podkast. A-wechoù e vez anvet ar vaezienn-mañ "Aozer·ez".',
        'copyright' => 'Gwirioù an aozer·ez',
        'location_section_title' => 'Lec\'h',
        'location_section_subtitle' => 'Eus peseurt lec\'h ez eus kaoz er podkast-mañ?',
        'location_name' => 'Anv pe chomlec\'h al lec\'h',
        'location_name_hint' => 'Gallout a ra bezañ gwir pe faltaziek',
        'monetization_section_title' => 'Moneisaat',
        'monetization_section_subtitle' =>
            'Dastum arc\'hant a-drugarez d\'ho selaouerien·ezed.',
        'premium' => 'Premium',
        'premium_by_default' => 'Episodes must be set as premium by default',
        'premium_by_default_hint' => 'Podcast episodes will be marked as premium by default. You can still choose to set some episodes, trailers or bonuses as public.',
        'op3' => 'Open Podcast Prefix Project (OP3)',
        'op3_hint' => 'Value your analytics data with OP3, an open-source and trusted third party analytics service. Share, validate and compare your analytics data with the open podcasting ecosystem.',
        'op3_enable' => 'Enable OP3 analytics service',
        'op3_enable_hint' => 'For security reasons, premium episodes\' analytics data will not be shared with OP3.',
        'payment_pointer' => 'Chomlec\'h paeañ (Payment Poienter) evit Web Monetization',
        'payment_pointer_hint' =>
            'Ar chomlec\'h ma vo dastumet an arc\'hant ganeoc\'h a-drugarez da Web Monetization',
        'advanced_section_title' => 'Arventennoù kempleshoc\'h',
        'advanced_section_subtitle' =>
            'M\'ho peus ezhomm eus balizennoù RSS ha n\'eus ket anezho e Castopod e c\'hellit o lakaat amañ.',
        'custom_rss' => 'Balizennoù RSS personelaet evit ar podkast',
        'custom_rss_hint' => 'An dra-se a vo ouzhpennet e-barzh ar valizenn ❬channel❭.',
        'new_feed_url' => 'URL nevez al lanv',
        'new_feed_url_hint' => 'Implijit ar vaezienn-mañ pa cheñchit anv domani pe savenn herberc\'hiañ ho podkast. M\'eo enporzhiet ar podkast e vez lakaet enni URL a-vremañ al lanv dre ziouer.',
        'old_feed_url' => 'URL kozh al lanv',
        'partnership' => 'Kevelerezh',
        'partner_id' => 'ID',
        'partner_link_url' => 'Ere URL',
        'partner_image_url' => 'URL ar skeudenn',
        'partner_id_hint' => 'Hoc’h ID deoc\'h-c\'hwi e ti ar c\'heveler',
        'partner_link_url_hint' => 'Chomlec\'h generek an ereoù gant ar c\'heveler',
        'partner_image_url_hint' => 'Chomlec\'h generek ar skeudennoù gant ar c\'heveler',
        'block' => 'Ar podkast a rankfe bezañ kuzhet diouzh ar rolladoù publik',
        'block_hint' =>
            'Diskouez pe kuzhat ar podkast: trec\'haoliñ an afell-mañ a viro ar podkast a-bezh ouzh bezañ diskouezet war Apple Podcasts, Google Podcasts pe savennoù all hag a implij ar renabloù-se. (N\'eus gwarant ebet)',
        'complete' => 'Ne vo mui rannoù nevez gant ar podkast',
        'lock' => 'Mirout ar podkast ouzh bezañ eilet',
        'lock_hint' =>
            'Ar pal eo lavaret d\'ar savennoù all hag aotreet int da enporzhiañ al lanv-mañ pe get. "Ya" a dalv eo nac\'het an holl c\'houlennoù enporzhiañ.',
        'submit_create' => 'Krouiñ ar podkast',
        'submit_edit' => 'Enrollañ ar podkast',
    ],
    'category_options' => [
        'uncategorized' => 'hep rummad',
        'arts' => 'Arzoù',
        'business' => 'Embregerezh',
        'comedy' => 'Fentc\'hoari',
        'education' => 'Deskadurezh',
        'fiction' => 'Faltazi',
        'government' => 'Gouarnamant',
        'health_and_fitness' => 'Yec\'hed ha fitness',
        'history' => 'Istor',
        'kids_and_family' => 'Bugale ha familh',
        'leisure' => 'Dudi',
        'music' => 'Sonerezh',
        'news' => 'Keleier',
        'religion_and_spirituality' => 'Relijion ha speredelezh',
        'science' => 'Skiant',
        'society_and_culture' => 'Kevredigezh ha sevenadur',
        'sports' => 'Sportoù',
        'technology' => 'Teknologiezh',
        'true_crime' => 'Teulioù an torfed',
        'tv_and_film' => 'Skinwel ha filmoù',
        'books' => 'Levrioù',
        'design' => 'Ergrafañ',
        'fashion_and_beauty' => 'Giz ha kened',
        'food' => 'Boued',
        'performing_arts' => 'Arzoù an arvest',
        'visual_arts' => 'Arzoù ar gweled',
        'careers' => 'Respetoù',
        'entrepreneurship' => 'Antreprenerezh',
        'investing' => 'Postadur',
        'management' => 'Mererezh',
        'marketing' => 'Marketing',
        'non_profit' => 'Hep pal kenwerzhel',
        'comedy_interviews' => 'Atersadennoù fentus',
        'improv' => 'Primaozañ',
        'stand_up' => 'Stand up',
        'courses' => 'Kentelioù',
        'how_to' => 'Tutorial',
        'language_learning' => 'Deskiñ yezhoù',
        'self_improvement' => 'Diorren hiniennel',
        'comedy_fiction' => 'Fentc\'hoari faltaziek',
        'drama' => 'Drama',
        'science_fiction' => 'Skiant-faltazi',
        'alternative_health' => 'Yec\'hed all',
        'fitness' => 'Fitness',
        'medicine' => 'Medisinerezh',
        'mental_health' => 'Yec\'hed-spered',
        'nutrition' => 'Magadurezh',
        'sexuality' => 'Seksualegezh',
        'education_for_kids' => 'Deskadurezh evit ar vugale',
        'parenting' => 'Kerentelezh',
        'pets_and_animals' => 'Loened-ti ha loened',
        'stories_for_kids' => 'Marvailhoù evit ar vugale',
        'animation_and_manga' => 'Tresadennoù bev ha Manga',
        'automotive' => 'Kirri-tan',
        'aviation' => 'Kirri-nij',
        'crafts' => 'Artizanerezh',
        'games' => 'C\'hoarioù',
        'hobbies' => 'Dudioù',
        'home_and_garden' => 'Ti ha jardin',
        'video_games' => 'C\'hoarioù video',
        'music_commentary' => 'Evezhiadenn sonerezh',
        'music_history' => 'Istor ar sonerezh',
        'music_interviews' => 'Atersadennoù sonerezh',
        'business_news' => 'Keleier ekonomikel',
        'daily_news' => 'Keleier pemdeziek',
        'entertainment_news' => 'Keleier an diduamant',
        'news_commentary' => 'Evezhiadenn ar c\'heleier',
        'politics' => 'Politikerezh',
        'sports_news' => 'Keleier sport',
        'tech_news' => 'Keleier teknologiezh',
        'buddhism' => 'Boudaegezh',
        'christianity' => 'Kristeniezh',
        'hinduism' => 'Hindouegezh',
        'islam' => 'Islam',
        'judaism' => 'Yuzevegezh',
        'religion' => 'Relijion',
        'spirituality' => 'Speredelezh',
        'astronomy' => 'Steredoniezh',
        'chemistry' => 'Kimiezh',
        'earth_sciences' => 'Skiantoù an douar',
        'life_sciences' => 'Bevoniezh',
        'mathematics' => 'Matematikoù',
        'natural_sciences' => 'Skiantoù an natur',
        'nature' => 'Natur',
        'physics' => 'Fizik',
        'social_sciences' => 'Skiantoù sokial',
        'documentary' => 'Teulioù',
        'personal_journals' => 'Deizlevr hiniennel',
        'philosophy' => 'Prederouriezh',
        'places_and_travel' => 'Lec\'hioù ha beajoù',
        'relationships' => 'Darempredoù',
        'baseball' => 'Baseball',
        'basketball' => 'Basket-ball',
        'cricket' => 'Kriked',
        'fantasy_sports' => 'Sportoù faltaziek',
        'football' => 'Mell-droad',
        'golf' => 'Golf',
        'hockey' => 'Hockey',
        'rugby' => 'Rugbi',
        'running' => 'Running',
        'soccer' => 'Soccer',
        'swimming' => 'Swimming',
        'tennis' => 'Tennis',
        'volleyball' => 'Volleyball',
        'wilderness' => 'Wilderness',
        'wrestling' => 'Wrestling',
        'after_shows' => 'After Shows',
        'film_history' => 'Film History',
        'film_interviews' => 'Film Interviews',
        'film_reviews' => 'Film Reviews',
        'tv_reviews' => 'TV Reviews',
    ],
    'publish_form' => [
        'back_to_podcast_dashboard' => 'Back to podcast dashboard',
        'post' => 'Your announcement post',
        'post_hint' =>
            "Write a message to announce the publication of your podcast. The message will be featured in your podcast's homepage.",
        'message_placeholder' => 'Write your message…',
        'submit' => 'Publish',
        'publication_date' => 'Publication date',
        'publication_method' => [
            'now' => 'Now',
            'schedule' => 'Schedule',
        ],
        'scheduled_publication_date' => 'Scheduled publication date',
        'scheduled_publication_date_hint' =>
            'You can schedule the podcast release by setting a future publication date. This field must be formatted as YYYY-MM-DD HH:mm',
        'submit_edit' => 'Edit publication',
        'cancel_publication' => 'Cancel publication',
        'message_warning' => 'You did not write a message for your announcement post!',
        'message_warning_hint' => 'Having a message increases social engagement, resulting in a better visibility for your podcast.',
        'message_warning_submit' => 'Publish anyway',
    ],
    'publication_status_banner' => [
        'draft_mode' => 'draft mode',
        'not_published' => 'This podcast is not yet published.',
        'scheduled' => 'This podcast is scheduled for publication on {publication_date}.',
    ],
    'delete_form' => [
        'disclaimer' =>
            "Deleting the podcast will delete all episodes, media files, posts and analytics associated with it. This action is irreversible, you will not be able to retrieve them afterwards.",
        'understand' => 'I understand, I want the podcast to be permanently deleted',
        'submit' => 'Delete',
    ],
    'by' => 'By {publisher}',
    'season' => 'Season {seasonNumber}',
    'list_of_episodes_year' => '{year} episodes ({episodeCount})',
    'list_of_episodes_season' =>
        'Season {seasonNumber} episodes ({episodeCount})',
    'no_episode' => 'No episode found!',
    'follow' => 'Follow',
    'followers' => '{numberOfFollowers, plural,
        one {# follower}
        other {# followers}
    }',
    'posts' => '{numberOfPosts, plural,
        one {# post}
        other {# posts}
    }',
    'activity' => 'Activity',
    'episodes' => 'Episodes',
    'sponsor' => 'Sponsor',
    'funding_links' => 'Funding links for {podcastTitle}',
    'find_on' => 'Find {podcastTitle} on',
    'listen_on' => 'Selaouit war',
];
