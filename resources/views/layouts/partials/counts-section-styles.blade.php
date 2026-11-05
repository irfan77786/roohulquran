<style>
    /* Stats section — banner palette + help-people-v1-shape1 decorative bg */
    #counts.counts-tauheed {
        position: relative;
        padding: 70px 0;
        background-color: #F6F3EE;
        overflow: hidden;
    }

    #counts.counts-tauheed::before {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        width: min(58%, 620px);
        background-image: url('{{ asset('assets/img/help-people-v1-shape1.png') }}');
        background-repeat: no-repeat;
        background-position: right center;
        background-size: cover;
        opacity: 0.22;
        mix-blend-mode: multiply;
        pointer-events: none;
        z-index: 0;
    }

    #counts.counts-tauheed::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg, #F6F3EE 0%, #F6F3EE 42%, rgba(246, 243, 238, 0.72) 100%);
        pointer-events: none;
        z-index: 0;
    }

    #counts.counts-tauheed .container {
        position: relative;
        z-index: 1;
    }
    #counts.counts-tauheed .counts-heading {
        color: #122F2A;
        font-weight: 800;
        font-family: "Nunito", sans-serif;
        font-size: 2rem;
        margin-bottom: 16px;
    }

    #counts.counts-tauheed .counts-lead {
        color: #444444;
        font-size: 1.05rem;
        line-height: 1.8;
    }

    #counts.counts-tauheed .stats-row {
        --bs-gutter-y: 1.75rem;
    }

    #counts.counts-tauheed .stats-item {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 190px;
        padding: 32px 24px 28px;
        border-radius: 20px;
        background: linear-gradient(180deg, #ffffff 0%, #faf9f7 100%);
        border: 1px solid rgba(18, 47, 42, 0.08);
        box-shadow:
            0 1px 0 rgba(255, 255, 255, 0.9) inset,
            0 10px 32px rgba(18, 47, 42, 0.07);
        overflow: hidden;
        transition: transform 0.4s cubic-bezier(0.22, 1, 0.36, 1),
            box-shadow 0.4s ease,
            border-color 0.4s ease;
    }

    #counts.counts-tauheed .stats-item::before {
        content: "";
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 56px;
        height: 3px;
        border-radius: 0 0 4px 4px;
        background: linear-gradient(90deg, #1A685B 0%, #FF5528 100%);
        opacity: 0.85;
    }

    #counts.counts-tauheed .stats-item::after {
        content: "";
        position: absolute;
        right: -24px;
        bottom: -24px;
        width: 88px;
        height: 88px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(26, 104, 91, 0.08) 0%, transparent 70%);
        pointer-events: none;
    }

    #counts.counts-tauheed .stats-item:hover {
        transform: translateY(-8px);
        border-color: rgba(26, 104, 91, 0.18);
        box-shadow:
            0 1px 0 rgba(255, 255, 255, 0.95) inset,
            0 18px 44px rgba(18, 47, 42, 0.12);
    }

    #counts.counts-tauheed .stats-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 52px;
        height: 52px;
        margin-bottom: 14px;
        border-radius: 14px;
        background: rgba(26, 104, 91, 0.1);
        color: #1A685B;
        font-size: 1.35rem;
        transition: background 0.35s ease, color 0.35s ease, transform 0.35s ease;
    }

    #counts.counts-tauheed .stats-item:hover .stats-icon {
        background: rgba(255, 85, 40, 0.12);
        color: #FF5528;
        transform: scale(1.06);
    }

    #counts.counts-tauheed .stats-number,
    #counts.counts-tauheed .stats-item span.purecounter {
        display: block;
        font-size: 2.65rem;
        font-weight: 800;
        line-height: 1.1;
        color: #122F2A !important;
        font-family: "Nunito", sans-serif;
        letter-spacing: -0.5px;
        margin-bottom: 6px;
    }

    #counts.counts-tauheed .stats-label,
    #counts.counts-tauheed .stats-item p.stats-label {
        font-size: 0.82rem !important;
        margin-top: 0;
        margin-bottom: 0;
        color: #797E88 !important;
        font-weight: 700;
        letter-spacing: 1.2px;
        text-transform: uppercase;
    }

    #counts.counts-tauheed .add-plus::after {
        content: "+";
        margin-left: 1px;
        color: #FF5528;
        font-weight: 800;
    }
    @media (max-width: 768px) {
        #counts.counts-tauheed {
            padding: 50px 0;
        }

        #counts.counts-tauheed::before {
            width: 72%;
            background-position: 120% center;
            background-size: contain;
            opacity: 0.16;
        }

        #counts.counts-tauheed::after {
            background: linear-gradient(180deg, #F6F3EE 0%, rgba(246, 243, 238, 0.92) 100%);
        }
        #counts.counts-tauheed .counts-heading {
            font-size: 1.55rem;
        }

        #counts.counts-tauheed .stats-item {
            min-height: 170px;
            padding: 28px 20px 24px;
        }

        #counts.counts-tauheed .stats-number,
        #counts.counts-tauheed .stats-item span.purecounter {
            font-size: 2.15rem;
        }

        #counts.counts-tauheed .stats-icon {
            width: 46px;
            height: 46px;
            font-size: 1.2rem;
            margin-bottom: 12px;
        }    }
</style>
