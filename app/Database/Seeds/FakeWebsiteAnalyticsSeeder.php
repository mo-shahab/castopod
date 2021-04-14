<?php

/**
 * Class FakeWebsiteAnalyticsSeeder
 * Inserts Fake Analytics in the database
 *
 * @copyright  2020 Podlibre
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

namespace App\Database\Seeds;

use App\Models\PodcastModel;
use App\Models\EpisodeModel;

use CodeIgniter\Database\Seeder;

class FakeWebsiteAnalyticsSeeder extends Seeder
{
    protected $keywords = [
        'all the smoke podcast',
        'apple podcast',
        'bad friends podcast',
        'best podcast',
        'best podcasts',
        'best podcasts 2020',
        'blood ties',
        'call her daddy',
        'call her daddy podcast',
        'call her daddy podcast controversy',
        'call her daddy podcast drama',
        'counter clock podcast',
        'counterclock podcast',
        'crime junkie podcast',
        'crime podcast',
        'down the hill podcast',
        'gerry callahan podcast',
        'google podcast',
        'history podcast',
        'joe rogan',
        'joe rogan podcast',
        'lana rhoades and logan paul podcast',
        'last podcast on the left',
        'michael moore podcast',
        'michelle obama podcast',
        'missing in alaska podcast',
        'murder podcast',
        'nice white parents podcast',
        'nick cannon podcast',
        'npr podcast',
        'office ladies podcast',
        'podcast app',
        'podcasts',
        'rogan podcast',
        'rudy giuliani podcast',
        'savage podcast',
        'serial podcast',
        'smartless podcast',
        'ted cruz podcast',
        'the daily',
        'the daily podcast',
        'the last podcast on the left',
        'the new abnormal podcast',
        'tiger king podcast',
        'trey gowdy podcast',
        'true crime podcast',
        'what is a podcast',
        'what is podcast',
        'wind of change podcast',
        'your own backyard podcast',
    ];
    protected $domains = [
        '360.cn ',
        'adobe.com ',
        'aliexpress.com ',
        'alipay.com ',
        'amazon.co.jp ',
        'amazon.com ',
        'amazon.in ',
        'apple.com ',
        'baidu.com ',
        'bing.com ',
        'bongacams.com ',
        'chaturbate.com ',
        'china.com.cn ',
        'csdn.net ',
        'ebay.com ',
        'facebook.com ',
        'google.co.in ',
        'google.com ',
        'google.com.hk ',
        'instagram.com ',
        'jd.com ',
        'live.com ',
        'livejasmin.com ',
        'microsoft.com ',
        'microsoftonline.com ',
        'myshopify.com ',
        'naver.com ',
        'netflix.com ',
        'office.com ',
        'okezone.com ',
        'panda.tv ',
        'qq.com ',
        'reddit.com ',
        'sina.com.cn ',
        'sohu.com ',
        'taobao.com ',
        'tianya.cn ',
        'tmall.com ',
        'tribunnews.com ',
        'twitch.tv ',
        'twitter.com ',
        'vk.com ',
        'weibo.com ',
        'wikipedia.org ',
        'xinhuanet.com ',
        'yahoo.co.jp ',
        'yahoo.com ',
        'youtube.com ',
        'zhanqi.tv ',
        'zoom.us ',
    ];

    protected $browsers = [
        'Android Browser',
        'Avast Secure Browser',
        'BlackBerry Browser',
        'Chrome',
        'Chrome Mobile',
        'Chrome Mobile iOS',
        'Chrome Webview',
        'Chromium',
        'Ecosia',
        'Fennec',
        'Firebird',
        'Firefox',
        'Firefox Mobile',
        'Firefox Mobile iOS',
        'Galeon',
        'GNOME Web',
        'Headless Chrome',
        'Huawei Browser',
        'IE Mobile',
        'Inconnu',
        'Internet Explorer',
        'Kindle Browser',
        'Konqueror',
        'Maxthon',
        'Meizu Browser',
        'Microsoft Edge',
        'MIUI Browser',
        'Mobile Safari',
        'Mobile Silk',
        'OmniWeb',
        'Openwave Mobile Browser',
        'Opera',
        'Opera Mini',
        'Opera Mobile',
        'Opera Next',
        'Palm Blazer',
        'Puffin',
        'QupZilla',
        'Safari',
        'Samsung Browser',
        'UC Browser',
        'WOSBrowser',
    ];

    public function run()
    {
        $podcast = (new PodcastModel())->first();

        if ($podcast) {
            $firstEpisode = (new EpisodeModel())
                ->selectMin('published_at')
                ->first();

            for (
                $date = strtotime($firstEpisode->published_at);
                $date < strtotime('now');
                $date = strtotime(date('Y-m-d', $date) . ' +1 day')
            ) {
                $website_by_browser = [];
                $website_by_entry_page = [];
                $website_by_referer = [];

                $episodes = (new EpisodeModel())
                    ->where([
                        'podcast_id' => $podcast->id,
                        'DATE(published_at) <=' => date('Y-m-d', $date),
                    ])
                    ->findAll();
                foreach ($episodes as $episode) {
                    $age = floor(
                        ($date - strtotime($episode->published_at)) / 86400,
                    );
                    $proba1 = floor(exp(3 - $age / 40)) + 1;

                    for (
                        $num_line = 0;
                        $num_line < rand(1, $proba1);
                        $num_line++
                    ) {
                        $proba2 = floor(exp(6 - $age / 20)) + 10;

                        $domain =
                            $this->domains[rand(0, count($this->domains) - 1)];
                        $keyword =
                            $this->keywords[
                                rand(0, count($this->keywords) - 1)
                            ];
                        $browser =
                            $this->browsers[
                                rand(0, count($this->browsers) - 1)
                            ];

                        $hits = rand(0, $proba2);

                        $website_by_browser[] = [
                            'podcast_id' => $podcast->id,
                            'date' => date('Y-m-d', $date),
                            'browser' => $browser,
                            'hits' => $hits,
                        ];
                        $website_by_entry_page[] = [
                            'podcast_id' => $podcast->id,
                            'date' => date('Y-m-d', $date),
                            'entry_page_url' => $episode->link,
                            'hits' => $hits,
                        ];
                        $website_by_referer[] = [
                            'podcast_id' => $podcast->id,
                            'date' => date('Y-m-d', $date),
                            'referer_url' =>
                                'http://' . $domain . '/?q=' . $keyword,
                            'domain' => $domain,
                            'keywords' => $keyword,
                            'hits' => $hits,
                        ];
                    }
                }
                $this->db
                    ->table('analytics_website_by_browser')
                    ->ignore(true)
                    ->insertBatch($website_by_browser);
                $this->db
                    ->table('analytics_website_by_entry_page')
                    ->ignore(true)
                    ->insertBatch($website_by_entry_page);
                $this->db
                    ->table('analytics_website_by_referer')
                    ->ignore(true)
                    ->insertBatch($website_by_referer);
            }
        } else {
            echo "COULD NOT POPULATE DATABASE:\n\tCreate a podcast with episodes first.\n";
        }
    }
}
