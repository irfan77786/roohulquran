<style>
    #why-us.why-us-split {
        position: relative;
        background-color: #F6F3EE !important;
        background-image: radial-gradient(rgba(18, 47, 42, 0.045) 1px, transparent 1px) !important;
        background-size: 18px 18px !important;
        padding: 80px 0 !important;
        overflow: hidden;
    }

    #why-us.why-us-split .why-eyebrow {
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

    #why-us.why-us-split .why-eyebrow::before {
        content: "";
        width: 28px;
        height: 2px;
        border-radius: 2px;
        background: #FF5528;
    }

    #why-us.why-us-split .why-heading {
        color: #122F2A;
        font-family: "Nunito", sans-serif;
        font-weight: 800;
        font-size: 2rem;
        line-height: 1.3;
        margin-bottom: 24px;
        letter-spacing: -0.3px;
        text-align: left;
    }

    #why-us.why-us-split .why-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    #why-us.why-us-split .why-list li {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        padding: 12px 14px;
        margin-bottom: 10px;
        border-radius: 14px;
        background: #ffffff;
        border: 1px solid rgba(18, 47, 42, 0.06);
        box-shadow: 0 6px 18px rgba(18, 47, 42, 0.04);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        text-align: left;
        color: #555;
        font-size: 0.98rem;
        line-height: 1.6;
    }

    #why-us.why-us-split .why-list li:hover {
        transform: translateX(4px);
        box-shadow: 0 10px 24px rgba(18, 47, 42, 0.08);
    }

    #why-us.why-us-split .why-list .check-icon {
        flex-shrink: 0;
        width: 28px;
        height: 28px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: rgba(26, 104, 91, 0.12);
        color: #1A685B;
        font-size: 0.85rem;
        font-weight: 700;
        margin-top: 1px;
    }

    #why-us.why-us-split .why-list strong {
        color: #122F2A !important;
        font-weight: 700;
    }

    #why-us.why-us-split .why-closing {
        margin-top: 22px;
        color: #5c6570;
        font-size: 1.02rem;
        line-height: 1.75;
        text-align: left;
    }

    #why-us.why-us-split .why-closing .trial-note {
        color: #122F2A;
        display: inline-block;
        margin-top: 8px;
    }

    /* Right: Courses panel */
    #why-us.why-us-split .why-courses-panel {
        background: #ffffff;
        border-radius: 28px;
        padding: 28px 24px 26px;
        border: 1px solid rgba(18, 47, 42, 0.07);
        box-shadow: 0 16px 42px rgba(18, 47, 42, 0.08);
        height: auto;
        align-self: flex-start;
    }

    #why-us.why-us-split .why-courses-panel h3 {
        color: #122F2A;
        font-family: "Nunito", sans-serif;
        font-weight: 800;
        font-size: 1.35rem;
        margin-bottom: 16px;
        padding-bottom: 14px;
        border-bottom: 1px solid rgba(18, 47, 42, 0.1);
    }

    #why-us.why-us-split .why-course-list {
        display: flex;
        flex-direction: column;
        gap: 12px;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    #why-us.why-us-split .why-course-link {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        width: 100%;
        padding: 14px 18px;
        border-radius: 50px;
        background: #ffffff;
        border: 1px solid rgba(18, 47, 42, 0.1);
        color: #6B7280 !important;
        font-weight: 600;
        font-size: 0.95rem;
        text-decoration: none !important;
        transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease,
            transform 0.3s ease, box-shadow 0.3s ease;
    }

    #why-us.why-us-split .why-course-link i {
        font-size: 1rem;
        line-height: 1;
        flex-shrink: 0;
        transition: transform 0.3s ease;
    }

    #why-us.why-us-split .why-course-link:hover,
    #why-us.why-us-split .why-course-link.is-active {
        background: #FF5528;
        border-color: #FF5528;
        color: #ffffff !important;
        box-shadow: 0 10px 24px rgba(255, 85, 40, 0.28);
        transform: translateY(-1px);
    }

    #why-us.why-us-split .why-course-link:hover i,
    #why-us.why-us-split .why-course-link.is-active i {
        transform: translateX(3px);
    }

    @media (min-width: 992px) {
        #why-us.why-us-split .row {
            align-items: flex-start !important;
        }

        #why-us.why-us-split .why-courses-panel {
            position: sticky;
            top: 100px;
        }
    }

    @media (max-width: 991px) {
        #why-us.why-us-split {
            padding: 52px 0 !important;
        }

        #why-us.why-us-split .why-heading {
            font-size: 1.55rem;
            text-align: center;
        }

        #why-us.why-us-split .why-eyebrow {
            justify-content: center;
            width: 100%;
        }

        #why-us.why-us-split .why-closing {
            text-align: center;
        }

        #why-us.why-us-split .why-courses-panel {
            margin-top: 8px;
            border-radius: 22px;
            padding: 22px 18px;
        }

        #why-us.why-us-split .why-courses-panel h3 {
            text-align: center;
        }
    }
</style>
