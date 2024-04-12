<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostCard extends Component
{
    public int $id;

    public string $class;

    public string $title;

    public string $excerpt;

    public string $thumbnail;

    public string $link;

    public string $time;

    /**
     * Create a new component instance.
     */
    public function __construct($id, $class)
    {
        $this->class = $class;
        $this->id = $id;
        $this->setTitle(get_the_title($this->id));
        $this->setExcerpt(get_the_excerpt($this->id));
        $this->setThumbnail(get_the_post_thumbnail($this->id, 'full', ['class' => 'post-card__thumbnail-img']));
        $this->setLink(get_the_permalink($this->id));
        $this->setDate($this->id);
    }

    protected function setTitle(string $title): void
    {
        $this->title = $title;
    }

    protected function setThumbnail(string $thumbnail): void
    {
        $this->thumbnail = $thumbnail;
    }

    protected function setExcerpt(string $excerpt): void
    {
        $this->excerpt = $excerpt;
    }

    protected function setLink(string $link): void
    {
        $this->link = $link;
    }

    protected function setDate(int $id) {
        $date = get_post_time('U', false, $id);
        $diff = human_time_diff($date, current_time('timestamp'));

        $this->time = $diff;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.post-card');
    }
}
