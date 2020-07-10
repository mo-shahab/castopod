<?php
/**
 * @copyright  2020 Podlibre
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

namespace App\Entities;

use App\Models\PodcastModel;
use CodeIgniter\Entity;

class Episode extends Entity
{
    protected \App\Entities\Podcast $podcast;
    protected string $GUID;
    protected string $link;
    protected \CodeIgniter\Files\File $image;
    protected string $image_media_path;
    protected string $image_url;
    protected \CodeIgniter\Files\File $enclosure;
    protected string $enclosure_media_path;
    protected string $enclosure_url;
    protected array $enclosure_metadata;

    protected $casts = [
        'slug' => 'string',
        'title' => 'string',
        'enclosure_uri' => 'string',
        'pub_date' => 'datetime',
        'description' => 'string',
        'image_uri' => '?string',
        'author_name' => '?string',
        'author_email' => '?string',
        'explicit' => 'boolean',
        'number' => 'integer',
        'season_number' => '?integer',
        'type' => 'string',
        'block' => 'boolean',
    ];

    public function setImage(?\CodeIgniter\HTTP\Files\UploadedFile $image)
    {
        if ($image->isValid()) {
            // check whether the user has inputted an image and store it
            $this->attributes['image_uri'] = save_podcast_media(
                $image,
                $this->getPodcast()->name,
                $this->attributes['slug']
            );
        } elseif (
            $APICdata = $this->getEnclosureMetadata()['attached_picture']
        ) {
            // if the user didn't input an image,
            // check if the uploaded audio file has an attached cover and store it
            $cover_image = new \CodeIgniter\Files\File('episode_cover');
            file_put_contents($cover_image, $APICdata);

            $this->attributes['image_uri'] = save_podcast_media(
                $cover_image,
                $this->getPodcast()->name,
                $this->attributes['slug']
            );
        }

        return $this;
    }

    public function getImage()
    {
        return new \CodeIgniter\Files\File($this->getImageMediaPath());
    }

    public function getImageMediaPath()
    {
        return media_path($this->attributes['image_uri']);
    }

    public function getImageUrl()
    {
        if ($image_uri = $this->attributes['image_uri']) {
            return media_url($image_uri);
        }
        return $this->getPodcast()->image_url;
    }

    public function setEnclosure(
        \CodeIgniter\HTTP\Files\UploadedFile $enclosure = null
    ) {
        if ($enclosure->isValid()) {
            helper('media');

            $this->attributes['enclosure_uri'] = save_podcast_media(
                $enclosure,
                $this->getPodcast()->name,
                $this->attributes['slug']
            );

            return $this;
        }
    }

    public function getEnclosure()
    {
        return new \CodeIgniter\Files\File($this->getEnclosureMediaPath());
    }

    public function getEnclosureMediaPath()
    {
        helper('media');

        return media_path($this->attributes['enclosure_uri']);
    }

    public function getEnclosureUrl()
    {
        return base_url(
            route_to(
                'analytics_hit',
                $this->attributes['podcast_id'],
                $this->attributes['id'],
                $this->attributes['enclosure_uri']
            )
        );
    }

    public function getEnclosureMetadata()
    {
        helper('id3');

        return get_file_tags($this->getEnclosure());
    }

    public function getLink()
    {
        return base_url(
            route_to(
                'episode',
                $this->getPodcast()->name,
                $this->attributes['slug']
            )
        );
    }

    public function getGUID()
    {
        return $this->getLink();
    }

    public function getPodcast()
    {
        $podcast_model = new PodcastModel();

        return $podcast_model->find($this->attributes['podcast_id']);
    }
}
