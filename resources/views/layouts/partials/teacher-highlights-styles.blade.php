<style>
    #teacher-highlights {
        background-color: #F6F3EE;
        background-image: radial-gradient(rgba(18, 47, 42, 0.06) 1px, transparent 1px);
        background-size: 18px 18px;
        padding: 50px 0 60px;
    }

    #teacher-highlights .teacher-card {
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        min-height: 340px;
        padding: 36px 32px;
        border-radius: 28px;
        overflow: hidden;
        background-color: #122F2A;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        box-shadow: 0 14px 40px rgba(18, 47, 42, 0.14);
        transition: transform 0.4s cubic-bezier(0.22, 1, 0.36, 1),
            box-shadow 0.4s ease;
        height: 100%;
    }

    #teacher-highlights .teacher-card::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(18, 47, 42, 0.35) 0%, rgba(18, 47, 42, 0.88) 100%);
        z-index: 1;
        transition: background 0.4s ease;
    }

    #teacher-highlights .teacher-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 20px 48px rgba(18, 47, 42, 0.2);
    }

    #teacher-highlights .teacher-card:hover::before {
        background: linear-gradient(180deg, rgba(18, 47, 42, 0.28) 0%, rgba(18, 47, 42, 0.92) 100%);
    }

    #teacher-highlights .teacher-card-body {
        position: relative;
        z-index: 2;
        color: #ffffff;
    }

    #teacher-highlights .teacher-card-body h3 {
        color: #ffffff;
        font-family: "Nunito", sans-serif;
        font-weight: 800;
        font-size: 1.55rem;
        line-height: 1.3;
        margin-bottom: 14px;
    }

    #teacher-highlights .teacher-card-body p {
        color: rgba(255, 255, 255, 0.92);
        font-size: 0.98rem;
        line-height: 1.75;
        margin-bottom: 24px;
        max-width: 520px;
    }

    #teacher-highlights .teacher-card-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 12px 24px;
        border-radius: 50px;
        font-weight: 700;
        font-size: 0.95rem;
        text-decoration: none !important;
        transition: transform 0.3s ease, background-color 0.3s ease, color 0.3s ease, box-shadow 0.3s ease;
    }

    #teacher-highlights .teacher-card-btn i {
        font-size: 0.95rem;
        line-height: 1;
    }

    #teacher-highlights .teacher-card-btn:hover {
        transform: translateY(-2px);
    }

    #teacher-highlights .teacher-card-btn--accent {
        background-color: #FF5528;
        color: #ffffff !important;
        box-shadow: 0 8px 20px rgba(255, 85, 40, 0.3);
    }

    #teacher-highlights .teacher-card-btn--accent:hover {
        background-color: #e04a22;
        color: #ffffff !important;
        box-shadow: 0 12px 26px rgba(255, 85, 40, 0.38);
    }

    #teacher-highlights .teacher-card-btn--light {
        background-color: #ffffff;
        color: #122F2A !important;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
    }

    #teacher-highlights .teacher-card-btn--light:hover {
        background-color: #f3f3f3;
        color: #122F2A !important;
    }

    @media (max-width: 991px) {
        #teacher-highlights {
            padding: 36px 0 44px;
        }

        #teacher-highlights .teacher-card {
            min-height: 300px;
            padding: 28px 24px;
            border-radius: 22px;
        }

        #teacher-highlights .teacher-card-body h3 {
            font-size: 1.35rem;
        }
    }

    @media (max-width: 575px) {
        #teacher-highlights .teacher-card {
            min-height: 280px;
            padding: 24px 20px;
        }

        #teacher-highlights .teacher-card-body p {
            font-size: 0.94rem;
            margin-bottom: 20px;
        }

        #teacher-highlights .teacher-card-btn {
            width: 100%;
            justify-content: center;
        }
    }
</style>
