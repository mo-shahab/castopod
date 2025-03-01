<?php

declare(strict_types=1);

/**
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'season' => 'Temporada {seasonNumber}',
    'season_abbr' => 'T{seasonNumber}',
    'number' => 'Episódio {episodeNumber}',
    'number_abbr' => 'Ep. {episodeNumber}',
    'season_episode' => 'Temporada {seasonNumber} episódio {episodeNumber}',
    'season_episode_abbr' => 'T{seasonNumber}:E{episodeNumber}',
    'persons' => '{personsCount, plural,
        one {# pessoa}
        other {# pessoas}
    }',
    'persons_list' => 'Pessoas',
    'back_to_episodes' => 'Voltar para episódios de {podcast}',
    'comments' => 'Comentários',
    'activity' => 'Atividade',
    'description' => 'Descrição do episódio',
    'number_of_comments' => '{numberOfComments, plural,
        one {# comentário}
        other {# comentários}
    }',
    'all_podcast_episodes' => 'Todos os episódios de podcast',
    'back_to_podcast' => 'Voltar para o podcast',
    'preview' => [
        'title' => 'Preview',
        'not_published' => 'Not published',
        'text' => '{publication_status, select,
            published {This episode is not yet published.}
            scheduled {This episode is scheduled for publication on {publication_date}.}
            with_podcast {This episode will be published at the same time as the podcast.}
            other {This episode is not yet published.}
        }',
        'publish' => 'Publish',
        'publish_edit' => 'Edit publication',
    ],
];
