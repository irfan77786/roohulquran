<style>
    #academy-intro {
        background-color: #ffffff;
        padding: 70px 0;
        overflow: hidden;
    }

    #academy-intro .intro-image-col {
        position: relative;
    }

    #academy-intro .intro-image-frame {
        position: relative;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 16px 48px rgba(18, 47, 42, 0.12);
        background: #F6F3EE;
    }

    #academy-intro .intro-image-frame::before {
        content: "";
        position: absolute;
        inset: 0;
        border: 3px solid rgba(26, 104, 91, 0.15);
        border-radius: 20px;
        pointer-events: none;
        z-index: 2;
    }

    #academy-intro .intro-image-frame img {
        width: 100%;
        height: auto;
        min-height: 420px;
        object-fit: cover;
        display: block;
        transition: transform 0.55s cubic-bezier(0.22, 1, 0.36, 1);
    }

    #academy-intro .intro-image-frame:hover img {
        transform: scale(1.04);
    }

    #academy-intro .intro-image-accent {
        position: absolute;
        bottom: -18px;
        right: -18px;
        width: 120px;
        height: 120px;
        background: #FF5528;
        border-radius: 20px;
        opacity: 0.12;
        z-index: 0;
    }

    #academy-intro .intro-image-dot {
        position: absolute;
        top: -14px;
        left: -14px;
        width: 72px;
        height: 72px;
        background: rgba(26, 104, 91, 0.12);
        border-radius: 50%;
        z-index: 0;
    }

    #academy-intro .intro-content {
        padding-left: 0;
        text-align: left;
    }

    #academy-intro .intro-content h2 {
        color: #122F2A;
        font-weight: 800;
        font-family: "Nunito", sans-serif;
        font-size: 1.85rem;
        line-height: 1.35;
        margin-bottom: 20px;
    }

    #academy-intro .intro-content p {
        color: #555555;
        font-size: 1.02rem;
        line-height: 1.85;
        margin-bottom: 16px;
    }

    #academy-intro .intro-content p strong {
        color: #122F2A;
        font-weight: 700;
    }

    #academy-intro .intro-enroll {
        color: #1A685B !important;
        font-weight: 700;
        font-size: 1.05rem;
        margin-top: 8px;
        margin-bottom: 0;
    }

    #academy-intro .intro-divider {
        margin: 32px 0;
        border: none;
        border-top: 1px solid rgba(18, 47, 42, 0.1);
    }

    #academy-intro .intro-block-secondary h2 {
        font-size: 1.65rem;
        margin-bottom: 16px;
    }

    #academy-intro .intro-actions {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 24px 32px;
        margin-top: 32px;
    }

    #academy-intro .intro-discover-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background-color: #FF5528;
        color: #ffffff !important;
        font-weight: 700;
        font-size: 1rem;
        padding: 14px 28px;
        border-radius: 50px;
        text-decoration: none !important;
        box-shadow: 0 8px 22px rgba(255, 85, 40, 0.28);
        transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
    }

    #academy-intro .intro-discover-btn:hover {
        background-color: #e04a22;
        color: #ffffff !important;
        transform: translateY(-2px);
        box-shadow: 0 12px 28px rgba(255, 85, 40, 0.35);
    }

    #academy-intro .intro-discover-btn i {
        font-size: 1.1rem;
        line-height: 1;
    }

    #academy-intro .intro-phone-block {
        display: flex;
        align-items: center;
        gap: 14px;
    }

    #academy-intro .intro-phone-icon {
        width: 52px;
        height: 52px;
        min-width: 52px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background-color: #1A685B;
        color: #ffffff;
        border-radius: 12px;
        font-size: 1.25rem;
    }

    #academy-intro .intro-phone-text {
        display: flex;
        flex-direction: column;
        gap: 2px;
    }

    #academy-intro .intro-phone-label {
        color: #797E88;
        font-size: 0.9rem;
        line-height: 1.3;
    }

    #academy-intro .intro-phone-number {
        color: #122F2A;
        font-weight: 800;
        font-size: 1.15rem;
        font-family: "Nunito", sans-serif;
        text-decoration: none !important;
        line-height: 1.3;
        transition: color 0.2s ease;
    }

    #academy-intro .intro-phone-number:hover {
        color: #FF5528;
    }

    @media (min-width: 992px) {
        #academy-intro .intro-content {
            padding-left: 20px;
        }
    }

    @media (max-width: 991px) {
        #academy-intro {
            padding: 50px 0;
        }

        #academy-intro .intro-image-col {
            padding-left: max(16px, env(safe-area-inset-left));
            padding-right: max(16px, env(safe-area-inset-right));
        }

        #academy-intro .intro-image-frame {
            margin-bottom: 28px;
            max-width: 520px;
            margin-left: auto;
            margin-right: auto;
        }

        #academy-intro .intro-image-frame img {
            min-height: 320px;
        }

        #academy-intro .intro-content {
            padding: 8px max(20px, env(safe-area-inset-right)) 8px max(20px, env(safe-area-inset-left));
        }

        #academy-intro .intro-content h2,
        #academy-intro .intro-block-secondary h2 {
            text-align: center;
        }

        #academy-intro .intro-content h2 {
            font-size: 1.55rem;
        }

        #academy-intro .intro-block-secondary h2 {
            font-size: 1.45rem;
        }

        #academy-intro .intro-actions {
            flex-direction: column;
            align-items: stretch;
            gap: 20px;
            margin-top: 28px;
        }

        #academy-intro .intro-discover-btn {
            justify-content: center;
            width: 100%;
        }

        #academy-intro .intro-phone-block {
            justify-content: center;
        }
    }
</style>
