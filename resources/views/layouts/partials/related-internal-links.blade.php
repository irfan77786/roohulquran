@php
    use App\Helpers\SiteLinks;

    $forRoute = $forRoute ?? (optional(request()->route())->getName() ?: 'home.index');
    $heading = $heading ?? 'Explore related pages';
    $intro = $intro ?? 'Helpful next steps across our courses and academy pages.';
    $links = $links ?? SiteLinks::related($forRoute);
@endphp

@if(count($links))
<section class="rq-related-links" aria-labelledby="rq-related-heading-{{ md5($forRoute.$heading) }}">
    <div class="container">
        <div class="rq-related-inner" data-aos="fade-up">
            <div class="rq-related-head">
                <span class="rq-related-eyebrow">Internal guide</span>
                <h2 id="rq-related-heading-{{ md5($forRoute.$heading) }}">{{ $heading }}</h2>
                <p>{{ $intro }}</p>
            </div>
            <nav aria-label="{{ $heading }}">
                <ul class="rq-related-grid">
                    @foreach($links as $link)
                        <li>
                            <a href="{{ $link['url'] }}" class="rq-related-card">
                                <span class="rq-related-label">{{ $link['label'] }}</span>
                                @if(!empty($link['desc']))
                                    <span class="rq-related-desc">{{ $link['desc'] }}</span>
                                @endif
                                <span class="rq-related-go" aria-hidden="true">
                                    <i class="bi bi-arrow-right"></i>
                                </span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
</section>

@once
<style>
    .rq-related-links {
        padding: 56px 0;
        background:
            radial-gradient(circle at top left, rgba(26, 104, 91, 0.07), transparent 45%),
            linear-gradient(180deg, #f7faf9 0%, #ffffff 70%);
    }

    .rq-related-inner {
        max-width: 1080px;
        margin: 0 auto;
    }

    .rq-related-head {
        text-align: center;
        margin-bottom: 1.75rem;
    }

    .rq-related-eyebrow {
        display: inline-block;
        color: #1A685B;
        font-size: 0.8rem;
        font-weight: 700;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        margin-bottom: 0.45rem;
    }

    .rq-related-head h2 {
        color: #122F2A;
        font-weight: 800;
        font-size: clamp(1.35rem, 2.4vw, 1.75rem);
        margin-bottom: 0.45rem;
    }

    .rq-related-head p {
        color: #5f6670;
        margin: 0 auto;
        max-width: 560px;
        line-height: 1.6;
    }

    .rq-related-grid {
        list-style: none;
        margin: 0;
        padding: 0;
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 14px;
    }

    .rq-related-card {
        display: flex;
        flex-direction: column;
        gap: 0.35rem;
        height: 100%;
        padding: 1.05rem 1.15rem;
        background: #ffffff;
        border: 1px solid rgba(18, 47, 42, 0.1);
        border-radius: 14px;
        text-decoration: none;
        color: inherit;
        transition: border-color 0.2s ease, transform 0.2s ease, box-shadow 0.2s ease;
    }

    .rq-related-card:hover,
    .rq-related-card:focus-visible {
        border-color: rgba(26, 104, 91, 0.35);
        transform: translateY(-2px);
        box-shadow: 0 10px 24px rgba(18, 47, 42, 0.08);
        outline: none;
    }

    .rq-related-label {
        color: #122F2A;
        font-weight: 750;
        font-size: 1rem;
        line-height: 1.35;
    }

    .rq-related-desc {
        color: #6a727a;
        font-size: 0.9rem;
        line-height: 1.45;
        flex-grow: 1;
    }

    .rq-related-go {
        color: #1A685B;
        font-size: 1rem;
        margin-top: 0.25rem;
    }

    .rq-related-card:hover .rq-related-go {
        color: #FF5528;
    }

    @media (max-width: 991.98px) {
        .rq-related-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }

    @media (max-width: 575.98px) {
        .rq-related-links {
            padding: 42px 0;
        }

        .rq-related-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@endonce
@endif
