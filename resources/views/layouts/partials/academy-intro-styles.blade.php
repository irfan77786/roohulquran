<style>
    #academy-intro {
        position: relative;
        background-color: #F6F3EE;
        background-image: radial-gradient(rgba(18, 47, 42, 0.045) 1px, transparent 1px);
        background-size: 18px 18px;
        padding: 80px 0;
        overflow: hidden;
    }

    #academy-intro .intro-image-col {
        position: relative;
        z-index: 1;
        align-self: stretch;
        display: flex;
    }

    #academy-intro .intro-image-frame {
        position: relative;
        z-index: 2;
        border-radius: 28px;
        overflow: hidden;
        background: #ffffff;
        box-shadow:
            0 4px 0 rgba(255, 255, 255, 0.7) inset,
            0 22px 56px rgba(18, 47, 42, 0.14);
        width: 100%;
        height: 100%;
        min-height: 100%;
    }

    #academy-intro .intro-image-frame::before {
        content: "";
        position: absolute;
        inset: 0;
        border: 1px solid rgba(255, 255, 255, 0.35);
        border-radius: 28px;
        pointer-events: none;
        z-index: 2;
    }

    #academy-intro .intro-image-frame::after {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        height: 38%;
        background: linear-gradient(180deg, transparent 0%, rgba(18, 47, 42, 0.35) 100%);
        pointer-events: none;
        z-index: 2;
    }

    #academy-intro .intro-image-frame img {
        width: 100%;
        height: 100%;
        min-height: 520px;
        object-fit: cover;
        object-position: center top;
        display: block;
        transition: transform 0.65s cubic-bezier(0.22, 1, 0.36, 1);
    }

    #academy-intro .intro-image-frame:hover img {
        transform: scale(1.05);
    }

    #academy-intro .intro-image-dot {
        position: absolute;
        top: -22px;
        left: -22px;
        width: 110px;
        height: 110px;
        background: rgba(26, 104, 91, 0.14);
        border-radius: 50%;
        z-index: 0;
    }

    #academy-intro .intro-image-accent {
        position: absolute;
        bottom: -26px;
        right: -18px;
        width: 140px;
        height: 140px;
        background: rgba(255, 85, 40, 0.14);
        border-radius: 28px;
        z-index: 0;
    }

    #academy-intro .intro-image-badge {
        position: absolute;
        left: 18px;
        bottom: 18px;
        z-index: 3;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 10px 14px;
        border-radius: 16px;
        background: rgba(255, 255, 255, 0.95);
        box-shadow: 0 10px 28px rgba(18, 47, 42, 0.16);
        backdrop-filter: blur(8px);
    }

    #academy-intro .intro-image-badge i {
        width: 36px;
        height: 36px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        background: rgba(26, 104, 91, 0.12);
        color: #1A685B;
        font-size: 1rem;
    }

    #academy-intro .intro-image-badge strong {
        display: block;
        color: #122F2A;
        font-size: 0.92rem;
        font-weight: 800;
        line-height: 1.2;
        font-family: "Nunito", sans-serif;
    }

    #academy-intro .intro-image-badge span {
        display: block;
        color: #797E88;
        font-size: 0.75rem;
        line-height: 1.2;
    }

    #academy-intro .intro-content {
        padding-left: 0;
        text-align: left;
    }

    #academy-intro .intro-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 14px;
        color: #FF5528;
        font-size: 0.82rem;
        font-weight: 800;
        letter-spacing: 1.4px;
        text-transform: uppercase;
    }

    #academy-intro .intro-eyebrow::before {
        content: "";
        width: 28px;
        height: 2px;
        border-radius: 2px;
        background: #FF5528;
    }

    #academy-intro .intro-panel {
        background: #ffffff;
        border: 1px solid rgba(18, 47, 42, 0.07);
        border-radius: 22px;
        padding: 26px 26px 24px;
        box-shadow: 0 12px 36px rgba(18, 47, 42, 0.06);
        transition: transform 0.35s ease, box-shadow 0.35s ease;
    }

    #academy-intro .intro-panel:hover {
        transform: translateY(-3px);
        box-shadow: 0 18px 42px rgba(18, 47, 42, 0.1);
    }

    #academy-intro .intro-panel + .intro-panel {
        margin-top: 18px;
    }

    #academy-intro .intro-content h2 {
        color: #122F2A;
        font-weight: 800;
        font-family: "Nunito", sans-serif;
        font-size: 1.8rem;
        line-height: 1.32;
        margin-bottom: 16px;
        letter-spacing: -0.3px;
    }

    #academy-intro .intro-block-secondary h2 {
        font-size: 1.48rem;
        margin-bottom: 14px;
    }

    #academy-intro .intro-content p {
        color: #5c6570;
        font-size: 1.02rem;
        line-height: 1.85;
        margin-bottom: 14px;
    }

    #academy-intro .intro-content p:last-child {
        margin-bottom: 0;
    }

    #academy-intro .intro-content p strong {
        color: #122F2A;
        font-weight: 700;
    }

    #academy-intro .intro-enroll {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        margin-top: 8px;
        color: #1A685B !important;
        font-weight: 800;
        font-size: 1.02rem;
        text-decoration: none !important;
        transition: color 0.25s ease, gap 0.25s ease;
    }

    #academy-intro .intro-enroll i {
        font-size: 0.95rem;
        transition: transform 0.25s ease;
    }

    #academy-intro .intro-enroll:hover {
        color: #FF5528 !important;
        gap: 12px;
    }

    #academy-intro .intro-enroll:hover i {
        transform: translateX(2px);
    }

    #academy-intro .intro-actions {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 18px 24px;
        margin-top: 26px;
        padding: 18px;
        border-radius: 20px;
        background: rgba(255, 255, 255, 0.72);
        border: 1px solid rgba(18, 47, 42, 0.06);
        box-shadow: 0 10px 30px rgba(18, 47, 42, 0.05);
    }

    #academy-intro .intro-discover-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background-color: #FF5528;
        color: #ffffff !important;
        font-weight: 700;
        font-size: 0.98rem;
        padding: 14px 26px;
        border-radius: 50px;
        text-decoration: none !important;
        box-shadow: 0 10px 24px rgba(255, 85, 40, 0.28);
        transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
    }

    #academy-intro .intro-discover-btn:hover {
        background-color: #e04a22;
        color: #ffffff !important;
        transform: translateY(-2px);
        box-shadow: 0 14px 30px rgba(255, 85, 40, 0.36);
    }

    #academy-intro .intro-discover-btn i {
        font-size: 1.05rem;
        line-height: 1;
    }

    #academy-intro .intro-phone-block {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 8px 12px 8px 8px;
        border-radius: 16px;
        background: #ffffff;
        border: 1px solid rgba(18, 47, 42, 0.08);
        transition: border-color 0.25s ease, box-shadow 0.25s ease;
    }

    #academy-intro .intro-phone-block:hover {
        border-color: rgba(26, 104, 91, 0.25);
        box-shadow: 0 8px 20px rgba(18, 47, 42, 0.08);
    }

    #academy-intro .intro-phone-icon {
        width: 48px;
        height: 48px;
        min-width: 48px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(145deg, #1A685B 0%, #122F2A 100%);
        color: #ffffff;
        border-radius: 14px;
        font-size: 1.15rem;
        box-shadow: 0 8px 18px rgba(26, 104, 91, 0.28);
    }

    #academy-intro .intro-phone-text {
        display: flex;
        flex-direction: column;
        gap: 2px;
        padding-right: 6px;
    }

    #academy-intro .intro-phone-label {
        color: #797E88;
        font-size: 0.82rem;
        line-height: 1.25;
    }

    #academy-intro .intro-phone-number {
        color: #122F2A;
        font-weight: 800;
        font-size: 1.08rem;
        font-family: "Nunito", sans-serif;
        text-decoration: none !important;
        line-height: 1.25;
        transition: color 0.2s ease;
    }

    #academy-intro .intro-phone-number:hover {
        color: #FF5528;
    }

    @media (min-width: 992px) {
        #academy-intro .row {
            align-items: stretch !important;
        }

        #academy-intro .intro-content {
            padding-left: 12px;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        #academy-intro .intro-image-col {
            display: flex;
        }

        #academy-intro .intro-image-frame {
            flex: 1;
            min-height: 100%;
        }

        #academy-intro .intro-image-frame img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            min-height: 0;
            object-fit: cover;
            object-position: center top;
        }

        #academy-intro .intro-actions {
            margin-top: auto;
        }
    }

    @media (max-width: 991px) {
        #academy-intro {
            padding: 52px 0;
        }

        #academy-intro .intro-image-col {
            padding-left: max(16px, env(safe-area-inset-left));
            padding-right: max(16px, env(safe-area-inset-right));
        }

        #academy-intro .intro-image-frame {
            margin-bottom: 8px;
            max-width: 520px;
            margin-left: auto;
            margin-right: auto;
        }

        #academy-intro .intro-image-frame img {
            min-height: 340px;
        }

        #academy-intro .intro-image-dot,
        #academy-intro .intro-image-accent {
            display: none;
        }

        #academy-intro .intro-content {
            padding: 8px max(16px, env(safe-area-inset-right)) 8px max(16px, env(safe-area-inset-left));
        }

        #academy-intro .intro-eyebrow {
            justify-content: center;
            width: 100%;
        }

        #academy-intro .intro-content h2,
        #academy-intro .intro-block-secondary h2 {
            text-align: center;
        }

        #academy-intro .intro-content h2 {
            font-size: 1.5rem;
        }

        #academy-intro .intro-block-secondary h2 {
            font-size: 1.28rem;
        }

        #academy-intro .intro-panel {
            padding: 22px 18px;
            border-radius: 18px;
            text-align: left;
        }

        #academy-intro .intro-enroll {
            width: 100%;
            justify-content: center;
        }

        #academy-intro .intro-actions {
            flex-direction: column;
            align-items: stretch;
            gap: 14px;
            margin-top: 20px;
            padding: 14px;
        }

        #academy-intro .intro-discover-btn {
            justify-content: center;
            width: 100%;
        }

        #academy-intro .intro-phone-block {
            justify-content: center;
            width: 100%;
        }
    }
</style>
