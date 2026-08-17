<style>
    #hero.hero-tauheed {
        position: relative;
        padding: 168px 0 80px;
        min-height: 580px;
        background-color: #F6F3EE;
        background-image: url('{{ asset('assets/img/hero-quran-banner.png') }}');
        background-size: cover;
        background-position: center bottom;
        background-repeat: no-repeat;
        overflow: hidden;
    }

    #hero.hero-tauheed .desktop-image,
    #hero.hero-tauheed .mobile-image,
    #hero.hero-tauheed picture {
        display: none !important;
    }

    #hero.hero-tauheed .container {
        position: relative;
        z-index: 2;
    }

    /* Mobile: form first (DOM order). Desktop: content left, form right */
    @media (min-width: 992px) {
        #hero.hero-tauheed .hero-tauheed-row {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        #hero.hero-tauheed .hero-content-col {
            order: 1;
        }

        #hero.hero-tauheed .hero-form-col {
            order: 2;
        }
    }

    #hero.hero-tauheed .hero-heading {
        font-size: 2.75rem;
        font-weight: 800;
        color: #122F2A;
        margin-bottom: 18px;
        letter-spacing: -0.5px;
        text-shadow: none;
        background: none;
        -webkit-text-fill-color: unset;
        text-align: left;
    }

    #hero.hero-tauheed .hero-subtext {
        font-size: 1.1rem;
        line-height: 1.75;
        color: #444444;
        text-shadow: none;
        margin-bottom: 20px;
        min-height: auto;
        text-align: left;
    }

    #hero.hero-tauheed .hero-features {
        padding-left: 1.25rem;
        margin-bottom: 0;
    }

    #hero.hero-tauheed .hero-features li {
        list-style: disc;
        display: list-item;
        font-size: 1rem;
        color: #122F2A;
        text-shadow: none;
        padding: 4px 0;
        margin-bottom: 6px;
    }

    #hero.hero-tauheed .hero-features li .check-icon {
        display: none;
    }

    #hero.hero-tauheed .btn-get-started {
        background-color: #FF5528 !important;
        color: #ffffff !important;
        font-weight: 700;
        font-size: 1rem;
        padding: 14px 32px;
        border-radius: 50px;
        border: none;
        box-shadow: none;
        text-transform: none;
        letter-spacing: 0;
    }

    #hero.hero-tauheed .btn-get-started:hover {
        background-color: #e04a22 !important;
        transform: translateY(-2px);
        box-shadow: none;
    }

    #hero.hero-tauheed .form-container {
        max-width: 100%;
        margin: 0 auto;
        background: #ffffff !important;
        backdrop-filter: none;
        box-shadow: 0 8px 30px rgba(18, 47, 42, 0.08);
        border-radius: 22px;
        border: 1px solid #d8dde1;
        padding: 28px 26px !important;
        transition: box-shadow 0.2s ease;
    }

    #hero.hero-tauheed .form-container:hover {
        transform: none;
        box-shadow: 0 12px 36px rgba(18, 47, 42, 0.12);
    }

    #hero.hero-tauheed .form-container h3,
    #hero.hero-tauheed .form-container .form-title {
        color: #122F2A;
        font-weight: 800;
        font-size: 1.5rem;
        margin-bottom: 6px;
        background: none;
        -webkit-text-fill-color: unset;
    }

    #hero.hero-tauheed .form-container .form-subtitle {
        color: #797E88;
        font-size: 0.9rem;
        margin-bottom: 18px;
    }

    #hero.hero-tauheed .form-container .form-control {
        border: 1px solid #d8dde1;
        border-radius: 10px;
        padding: 12px 16px;
        font-size: 0.95rem;
        background: #ffffff;
        color: #333;
    }

    #hero.hero-tauheed .form-container .form-control:focus {
        border-color: #1A685B;
        box-shadow: 0 0 0 0.2rem rgba(26, 104, 91, 0.15);
        outline: none;
    }

    #hero.hero-tauheed .form-container button[type="submit"] {
        background-color: #FF5528 !important;
        background-image: none !important;
        border: none;
        padding: 13px 24px;
        font-size: 1rem;
        font-weight: 700;
        border-radius: 50px;
        box-shadow: none;
        text-transform: none;
        letter-spacing: 0;
    }

    #hero.hero-tauheed .form-container button[type="submit"]:hover {
        background-color: #e04a22 !important;
        transform: translateY(-1px);
        box-shadow: none;
    }

    @media (max-width: 991px) {
        #hero.hero-tauheed {
            padding: 132px 0 60px;
            min-height: auto;
            background-position: 70% bottom;
        }

        #hero.hero-tauheed .hero-heading {
            font-size: 2rem;
        }

        #hero.hero-tauheed .hero-content-col {
            text-align: left;
        }

        #hero.hero-tauheed .form-container {
            margin-top: 0;
            margin-bottom: 24px;
        }

        #hero.hero-tauheed .hero-form-col {
            width: 100%;
        }
    }

    @media (max-width: 576px) {
        #hero.hero-tauheed .hero-heading {
            font-size: 1.75rem !important;
        }

        #hero.hero-tauheed .hero-subtext {
            font-size: 1rem;
        }
    }

    /* Override legacy course-page #hero CSS */
    #hero.hero-tauheed {
        text-align: left !important;
        overflow: hidden;
    }

    #hero.hero-tauheed .form-container {
        max-width: 100% !important;
        margin-left: auto !important;
        margin-right: auto !important;
    }

    #hero.hero-tauheed .hero-heading {
        max-width: none;
        overflow-wrap: break-word;
    }

    #hero.hero-tauheed .desktop-image,
    #hero.hero-tauheed .mobile-image {
        display: none !important;
    }
</style>
