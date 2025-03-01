<?php

declare(strict_types=1);

/**
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'all_podcasts' => 'Svi podkasti',
    'no_podcast' => 'Nema pronađenih podkasta!',
    'create' => 'Napravi podkast',
    'import' => 'Uvezi podkast',
    'all_imports' => 'Uvozi podkasta',
    'new_episode' => 'Nova epizoda',
    'view' => 'Pogledaj epizodu',
    'edit' => 'Uredi podkast',
    'publish' => 'Objavi podkast',
    'publish_edit' => 'Uredi objavu',
    'delete' => 'Obriši podkast',
    'see_episodes' => 'Pogledaj epizode',
    'see_contributors' => 'Pogledaj saradnike',
    'monetization_other' => 'Druga monetizacija',
    'go_to_page' => 'Idi na stranicu',
    'latest_episodes' => 'Najnovije epizode',
    'see_all_episodes' => 'Prikaži sve epizode',
    'draft' => 'Nacrt',
    'messages' => [
        'createSuccess' => 'Podkast uspešno kreiran!',
        'editSuccess' => 'Podkast je uspešno ažuriran!',
        'importSuccess' => 'Podkast je uspešno uvezen!',
        'deleteSuccess' => 'Podkast @{podcast_handle} je uspešno obrisan!',
        'deletePodcastMediaError' => 'Neuspešno brisanje podkast {type, select,
            cover {omota}
            banner {banera}
            other {medija}
        }.',
        'deleteEpisodeMediaError' => 'Neuspešno brisanje {episode_slug} {type, select,
            transcript {transkripta}
            chapters {poglavlja}
            image {omota}
            audio {zvuka}
            other {medija}
        }.',
        'deletePodcastMediaFolderError' => 'Neuspešno brisanje podkast medija direktorijuma {folder_path}. Možete ga ručno ukloniti sa diska.',
        'podcastFeedUpdateSuccess' => 'Uspešno ažuriranje: {number_of_new_episodes, plural,
            one {# epizoda je}
            other {# epizode su}
        } deo podkasta!',
        'podcastFeedUpToDate' => 'Podkast je već ažuriran.',
        'publishError' => 'Ovaj podkast je ili već objavljen ili zakazan za objavu.',
        'publishEditError' => 'Ovaj podkast nije zakazan za objavu.',
        'publishCancelSuccess' => 'Objavljivanje podkasta je uspešno otkazano!',
        'scheduleDateError' => 'Morate zakazati datum objave!',
    ],
    'form' => [
        'identity_section_title' => 'Identitet podkasta',
        'identity_section_subtitle' => 'Ova polja vam pomažu da budete prepoznati.',
        'fediverse_section_title' => 'Fedivers identitet',

        'cover' => 'Omot podkasta',
        'cover_size_hint' => 'Omot mora biti kvadratnog oblika i minimum 1400px širok i visok.',
        'banner' => 'Baner podkasta',
        'banner_size_hint' => 'Baner mora imati odnos 3:1 i biti najmanje 1500px širok.',
        'banner_delete' => 'Obriši baner podkasta',
        'title' => 'Naslov',
        'handle' => 'Ručka',
        'handle_hint' =>
            'Koristi se radi identifikacije podkasta. Velika slova, mala slova, brojevi i donja crta su prihvatljivi.',
        'type' => [
            'label' => 'Vrsta',
            'episodic' => 'Epizodno',
            'episodic_hint' => 'Ukoliko su epizode namenjene za konzumiranje bez nekog specifičnog reda. Najnovija epizoda će biti predstavljena prva u redosledu.',
            'serial' => 'Serijski',
            'serial_hint' => 'Ukoliko su epizode namenjene za konzumiranje specifičnim redom. Najstarija epizoda će biti predstavljena prva u redosledu.',
        ],
        'description' => 'Opis',
        'classification_section_title' => 'Klasifikacija',
        'classification_section_subtitle' =>
            'Ova polja će uticati na vašu publiku i konkurenciju.',
        'language' => 'Jezik',
        'category' => 'Kategorija',
        'category_placeholder' => 'Izaberite kategoriju…',
        'other_categories' => 'Ostale kategorije',
        'parental_advisory' => [
            'label' => 'Upozorenje za roditelje',
            'hint' => 'Da li sadrži eksplicitan sadržaj?',
            'undefined' => 'nedefinisano',
            'clean' => 'Čisto',
            'explicit' => 'Eksplicitno',
        ],
        'author_section_title' => 'Autor',
        'author_section_subtitle' => 'Ko upravlja podkastom?',
        'owner_name' => 'Ime vlasnika',
        'owner_name_hint' =>
            'Za administrativnu upotrebu. Vidljivo u javnom RSS feed-u.',
        'owner_email' => 'Elektronska pošta vlasnika',
        'owner_email_hint' =>
            'Koristiće se na većini platforma kako bi se utvrdilo vlasništvo nad podkastom. Vidljivo javno u RSS feed-u.',
        'publisher' => 'Izdavač',
        'publisher_hint' =>
            'Grupa odgovorna za stvaranje ove emisije. Često se misli na vlasničku kompaniju ili mrežu kojoj pripada podkast. Ovo polje se nekada naziva i \'Autor".',
        'copyright' => 'Autorsko pravo',
        'location_section_title' => 'Lokacija',
        'location_section_subtitle' => 'O kom mestu je ova epizoda?',
        'location_name' => 'Ime ili adresa lokacije',
        'location_name_hint' => 'Ovo može biti stvarno ili izmišljeno mesto',
        'monetization_section_title' => 'Monetizacija',
        'monetization_section_subtitle' =>
            'Zaradi novac zahvaljujući svojoj publici.',
        'premium' => 'Premijum',
        'premium_by_default' => 'Epizode ​​se podrazumevano moraju podesiti kao premijum',
        'premium_by_default_hint' => 'Epizode ​​podkasta će podrazumevano biti označene kao premijum. I dalje možete izabrati da neke epizode, trejlere ili bonuse postavite kao javne.',
        'op3' => 'Otvoreni Podkast Prefiks Projekat (OP3)',
        'op3_hint' => 'Vrednujte svoje analitičke podatke pomoću OP3, otvorenog koda i pouzdane analitičke usluge treće strane. Delite, potvrdite i uporedite svoje analitičke podatke sa otvorenim podkast ekosistemom.',
        'op3_enable' => 'Omogućite OP3 analitičku uslugu',
        'op3_enable_hint' => 'Iz bezbednosnih razloga, analitika premijum epizoda se neće deliti sa OP3.',
        'payment_pointer' => 'Pokazivač plaćanja za Veb monetizaciju',
        'payment_pointer_hint' =>
            'Ovde ćete primati novac zahvaljujući Veb monetizaciji',
        'advanced_section_title' => 'Napredni parametri',
        'advanced_section_subtitle' =>
            'Ukoliko su vam potrebni RSS tagovi koje Castopod ne obrađuje, postavite ih ovde.',
        'custom_rss' => 'Posebni RSS tagovi epizode',
        'custom_rss_hint' => 'Ovo će biti ubačeno u ❬channel❭ tag.',
        'new_feed_url' => 'Novi URL fid',
        'new_feed_url_hint' => 'Koristite ovo polje kada prelazite na drugi domen ili platformu za hostovanje podkasta. Podrazumevano, vrednost je podešena na trenutni RSS URL ako je podkast uvezen.',
        'old_feed_url' => 'Stari URL fid',
        'partnership' => 'Partnerstvo',
        'partner_id' => 'ID',
        'partner_link_url' => 'URL adresa veze',
        'partner_image_url' => 'URL adresa slike',
        'partner_id_hint' => 'Vaš partnerski ID',
        'partner_link_url_hint' => 'Generička adresa veze partnera',
        'partner_image_url_hint' => 'Generička adresa slike partnera',
        'block' => 'Podkast treba sakriti iz javnih kataloga',
        'block_hint' =>
            'Prikazan ili sakriven status podkasta: ukoliko uključite ovu opciju onemogućavate prikazivanje vašeg podkasta na paltformama za slušanje podkasta kao što su Apple Podcasts, Google Podcasts i sličnim direktorijima. (Nije zagarantovano)',
        'complete' => 'Podkast više neće imati novih epizoda',
        'lock' => 'Sprečite kopiranje podkasta',
        'lock_hint' =>
            'Cilj ovoga je da komunicira sa drugim podkast platformama i ne dozvoli im da povlače vaš sadržaj. Ukoliko odaberete Da, to znači da će svaki njihov pokušaj da izlistaju vaš sadržaj na svojoj platformi biti odbijen.',
        'submit_create' => 'Napravi podkast',
        'submit_edit' => 'Sačuvaj podkast',
    ],
    'category_options' => [
        'uncategorized' => 'nekategorizovano',
        'arts' => 'Umetnost',
        'business' => 'Posao',
        'comedy' => 'Komedija',
        'education' => 'Obrazovanje',
        'fiction' => 'Fikcija',
        'government' => 'Vlada',
        'health_and_fitness' => 'Zdravlje i Fitnes',
        'history' => 'Istorija',
        'kids_and_family' => 'Deca i Porodica',
        'leisure' => 'Razonoda',
        'music' => 'Muzika',
        'news' => 'Vesti',
        'religion_and_spirituality' => 'Religija i spiritualnost',
        'science' => 'Nauka',
        'society_and_culture' => 'Društvo i Kultura',
        'sports' => 'Sport',
        'technology' => 'Tehnologija',
        'true_crime' => 'Istinski zločini',
        'tv_and_film' => 'Televizija i Film',
        'books' => 'Knjige',
        'design' => 'Dizajn',
        'fashion_and_beauty' => 'Moda i Lepota',
        'food' => 'Hrana',
        'performing_arts' => 'Izvođačka umetnost',
        'visual_arts' => 'Likovna umetnost',
        'careers' => 'Karijera',
        'entrepreneurship' => 'Prednuzetništvo',
        'investing' => 'Investiranje',
        'management' => 'Upravljanje',
        'marketing' => 'Marketing',
        'non_profit' => 'Neprofitna udruženja',
        'comedy_interviews' => 'Komični intervjui',
        'improv' => 'Improvizacija',
        'stand_up' => 'Stendap komedija',
        'courses' => 'Kursevi',
        'how_to' => 'Uradi sam',
        'language_learning' => 'Učenje jezika',
        'self_improvement' => 'Samopoboljšanje',
        'comedy_fiction' => 'Komična fantastika',
        'drama' => 'Drama',
        'science_fiction' => 'Naučna Fantastika',
        'alternative_health' => 'Alternativno zdravlje',
        'fitness' => 'Fitnes',
        'medicine' => 'Medicina',
        'mental_health' => 'Mentalno zdravlje',
        'nutrition' => 'Nutricionizam',
        'sexuality' => 'Seksualnost',
        'education_for_kids' => 'Obrazovanje dece',
        'parenting' => 'Roditeljstvo',
        'pets_and_animals' => 'Ljubimci i životinje',
        'stories_for_kids' => 'Priče za decu',
        'animation_and_manga' => 'Animacija i Manga',
        'automotive' => 'Automobilizam',
        'aviation' => 'Avijacija',
        'crafts' => 'Zanati',
        'games' => 'Igre',
        'hobbies' => 'Hobiji',
        'home_and_garden' => 'Dom i bašta',
        'video_games' => 'Video igre',
        'music_commentary' => 'Komentari muzike',
        'music_history' => 'Istorija muzike',
        'music_interviews' => 'Muzički intervjui',
        'business_news' => 'Vesti iz preduzetništva',
        'daily_news' => 'Dnevne vesti',
        'entertainment_news' => 'Vesti iz zabave',
        'news_commentary' => 'Komentari vesti',
        'politics' => 'Politika',
        'sports_news' => 'Sportske vesti',
        'tech_news' => 'Tehnološke vesti',
        'buddhism' => 'Budizam',
        'christianity' => 'Hrišćanstvo',
        'hinduism' => 'Hinduizam',
        'islam' => 'Islam',
        'judaism' => 'Judeizam',
        'religion' => 'Religija',
        'spirituality' => 'Duhovnost',
        'astronomy' => 'Astronomija',
        'chemistry' => 'Hemija',
        'earth_sciences' => 'Studije zemlje',
        'life_sciences' => 'Studije života',
        'mathematics' => 'Matematika',
        'natural_sciences' => 'Prirodne nauke',
        'nature' => 'Priroda',
        'physics' => 'Fizika',
        'social_sciences' => 'Društvene nauke',
        'documentary' => 'Dokumentarni',
        'personal_journals' => 'Lični dnevnici',
        'philosophy' => 'Filozofija',
        'places_and_travel' => 'Mesta i Putovanje',
        'relationships' => 'Veze',
        'baseball' => 'Bejzbol',
        'basketball' => 'Košarka',
        'cricket' => 'Kriket',
        'fantasy_sports' => 'Fantazi sport',
        'football' => 'Američki fudbal',
        'golf' => 'Golf',
        'hockey' => 'Hokej',
        'rugby' => 'Ragbi',
        'running' => 'Trčanje',
        'soccer' => 'Fudbal',
        'swimming' => 'Plivanje',
        'tennis' => 'Tenis',
        'volleyball' => 'Odbojka',
        'wilderness' => 'Divljina',
        'wrestling' => 'Rvanje',
        'after_shows' => 'Posle emisija',
        'film_history' => 'Filmska istorija',
        'film_interviews' => 'Filmski intervjui',
        'film_reviews' => 'Filmske recenzije',
        'tv_reviews' => 'Televizijske recenzije',
    ],
    'publish_form' => [
        'back_to_podcast_dashboard' => 'Nazad na komandnu tablu podkasta',
        'post' => 'Najava vaše objave',
        'post_hint' =>
            "Napišite poruku kako bi ste najavili objavljivanje vašeg podkasta. Ova poruka će biti istaknuta na početnoj stranici vašeg podkasta.",
        'message_placeholder' => 'Napišite poruku…',
        'submit' => 'Objavi',
        'publication_date' => 'Datum objavljivanja',
        'publication_method' => [
            'now' => 'Sada',
            'schedule' => 'Raspored',
        ],
        'scheduled_publication_date' => 'Planiran datum objave',
        'scheduled_publication_date_hint' =>
            'Možete zakazati objavu podkasta u budućnosti. Ovo polje mora biti popunjeno u YYYY-MM-DD HH:mm formatu',
        'submit_edit' => 'Uredi objavu',
        'cancel_publication' => 'Poništi objavu',
        'message_warning' => 'Niste napisali poruku za najavu objave!',
        'message_warning_hint' => 'Poruka povećava šanse za angažovanjem na društvenim mrežama, rezultirajući u većoj vidljivosti vašeg podkasta.',
        'message_warning_submit' => 'Objavi svakako',
    ],
    'publication_status_banner' => [
        'draft_mode' => 'režim nacrta',
        'not_published' => 'Ovaj podkast nije još uvek objavljen.',
        'scheduled' => 'Ovaj podkast je zakazan za objavu {publication_date}.',
    ],
    'delete_form' => [
        'disclaimer' =>
            "Brisanjem podkasta obrisaće se i sve epizode, medijske datoteke, objave i analitika povezana sa njim. Ova radnja je nepovratna, nakon toga nećete više moći da ih preuzmete ili povratite.",
        'understand' => 'Razumem, želim da trajno obrišem podkast',
        'submit' => 'Obriši',
    ],
    'by' => 'Od {publisher}',
    'season' => 'Sezona {seasonNumber}',
    'list_of_episodes_year' => '{year} epizoda ({episodeCount})',
    'list_of_episodes_season' =>
        'Sezona {seasonNumber} epizoda ({episodeCount})',
    'no_episode' => 'Nijedna epizode nije pronađena!',
    'follow' => 'Prati',
    'followers' => '{numberOfFollowers, plural,
        one {# pratilac}
        other {# pratilaca}
    }',
    'posts' => '{numberOfPosts, plural,
        one {# objava}
        other {# objave}
    }',
    'activity' => 'Aktivnost',
    'episodes' => 'Epizode',
    'sponsor' => 'Sponzor',
    'funding_links' => 'Linkovi za finansiranje {podcastTitle}',
    'find_on' => 'Pronađi {podcastTitle} na',
    'listen_on' => 'Slušaj na',
];
