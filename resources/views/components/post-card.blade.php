<article class="{{ $class }} post-card">
    @if (! empty($title))
        <h3 class="post-card__title">
            {!! $title !!}
        </h3>
    @endif

    @if (! empty($excerpt))
        <p class="post-card__excerpt">
            {!! $excerpt !!}
        </p>
    @endif

    @if (! empty($thumbnail))
        <figure class="post-card__thumbnail">
            {!! $thumbnail !!}
        </figure>
    @endif

    @if (! empty($link))
        <a href="post-card__link">
            {!! __('See more →', 'sage') !!}
        </a>
    @endif

    @if (! empty($time))
        <time class="post-card__time">
            {{ $time }}
        </time>
    @endif
</article>