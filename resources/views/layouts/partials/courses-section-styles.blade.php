<style>
    #courses.courses-elegant {
        position: relative;
        background-color: #ffffff;
        background-image: radial-gradient(rgba(18, 47, 42, 0.04) 1px, transparent 1px);
        background-size: 18px 18px;
        padding: 80px 0;
        overflow: hidden;
    }

    #courses.courses-elegant .section-title {
        margin-bottom: 42px;
        max-width: 720px;
        margin-left: auto;
        margin-right: auto;
    }

    #courses.courses-elegant .courses-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 12px;
        color: #FF5528;
        font-size: 0.82rem;
        font-weight: 800;
        letter-spacing: 1.4px;
        text-transform: uppercase;
    }

    #courses.courses-elegant .courses-eyebrow::before {
        content: "";
        width: 28px;
        height: 2px;
        border-radius: 2px;
        background: #FF5528;
    }

    #courses.courses-elegant .courses-heading {
        color: #122F2A !important;
        font-family: "Nunito", sans-serif;
        font-weight: 800;
        font-size: 2rem;
        line-height: 1.3;
        margin-bottom: 14px;
        letter-spacing: -0.4px;
    }

    #courses.courses-elegant .courses-sub {
        display: block;
        color: #797E88;
        font-size: 1.02rem;
        line-height: 1.75;
    }

    #courses.courses-elegant .course-wrapper {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 28px;
        margin: 0;
        justify-content: stretch;
        width: 100%;
    }

    #courses.courses-elegant .course-card {
        display: flex;
        flex-direction: column;
        flex: none;
        max-width: none;
        width: 100%;
        margin-bottom: 0;
        background: #ffffff;
        border-radius: 22px;
        overflow: hidden;
        border: 1px solid rgba(18, 47, 42, 0.08);
        box-shadow:
            0 1px 0 rgba(255, 255, 255, 0.9) inset,
            0 14px 40px rgba(18, 47, 42, 0.07);
        transition: transform 0.4s cubic-bezier(0.22, 1, 0.36, 1),
            box-shadow 0.4s ease,
            border-color 0.4s ease;
    }

    #courses.courses-elegant .course-card:hover {
        transform: translateY(-8px);
        border-color: rgba(26, 104, 91, 0.18);
        box-shadow:
            0 1px 0 rgba(255, 255, 255, 0.95) inset,
            0 22px 50px rgba(18, 47, 42, 0.14);
    }

    #courses.courses-elegant .course-image {
        position: relative;
        flex: none;
        width: 100%;
        height: 230px;
        overflow: hidden;
    }

    #courses.courses-elegant .course-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.22, 1, 0.36, 1);
    }

    #courses.courses-elegant .course-card:hover .course-image img {
        transform: scale(1.07);
    }

    #courses.courses-elegant .course-image::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, transparent 45%, rgba(18, 47, 42, 0.28) 100%);
        pointer-events: none;
    }

    #courses.courses-elegant .badge-level {
        position: absolute;
        top: 16px;
        left: 16px;
        background: #FF5528;
        color: #ffffff;
        font-size: 11px;
        padding: 6px 14px;
        border-radius: 20px;
        font-weight: 700;
        letter-spacing: 0.3px;
        z-index: 2;
        box-shadow: 0 6px 16px rgba(255, 85, 40, 0.35);
    }

    #courses.courses-elegant .course-info {
        flex: 1;
        display: flex;
        flex-direction: column;
        padding: 26px 24px 28px;
    }

    #courses.courses-elegant .course-info .title {
        font-size: 1.28rem;
        font-weight: 800;
        margin-bottom: 10px;
        line-height: 1.35;
        font-family: "Nunito", sans-serif;
    }

    #courses.courses-elegant .course-info .title a {
        color: #122F2A;
        text-decoration: none;
        transition: color 0.25s ease;
    }

    #courses.courses-elegant .course-info .title a:hover {
        color: #FF5528;
    }

    #courses.courses-elegant .course-info .description {
        color: #797E88;
        font-size: 0.96rem;
        line-height: 1.7;
        margin-bottom: 22px;
        flex-grow: 1;
    }

    #courses.courses-elegant .course-cta {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        align-self: flex-start;
        background: #122F2A;
        color: #ffffff !important;
        font-weight: 700;
        font-size: 0.9rem;
        padding: 11px 20px;
        border-radius: 50px;
        text-decoration: none !important;
        transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 8px 18px rgba(18, 47, 42, 0.18);
    }

    #courses.courses-elegant .course-cta:hover {
        background: #FF5528;
        color: #ffffff !important;
        transform: translateY(-2px);
        box-shadow: 0 10px 22px rgba(255, 85, 40, 0.3);
    }

    #courses.courses-elegant .course-cta i {
        font-size: 0.85rem;
        transition: transform 0.3s ease;
    }

    #courses.courses-elegant .course-cta:hover i {
        transform: translateX(3px);
    }

    #courses.courses-elegant .course-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 10px 16px;
        margin-bottom: 14px;
        color: #1A685B;
        font-size: 0.82rem;
        font-weight: 600;
    }

    #courses.courses-elegant .course-meta span {
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    #courses.courses-elegant .course-meta i {
        font-size: 0.9rem;
    }

    @media (max-width: 991px) {
        #courses.courses-elegant {
            padding: 56px 0;
        }

        #courses.courses-elegant .course-wrapper {
            grid-template-columns: 1fr;
            gap: 22px;
        }

        #courses.courses-elegant .courses-heading {
            font-size: 1.6rem;
        }

        #courses.courses-elegant .course-image {
            height: 210px;
        }
    }

    @media (max-width: 575px) {
        #courses.courses-elegant .section-title {
            padding: 0 8px;
        }

        #courses.courses-elegant .course-info {
            padding: 22px 18px 24px;
        }

        #courses.courses-elegant .course-cta {
            width: 100%;
            justify-content: center;
        }
    }
</style>
