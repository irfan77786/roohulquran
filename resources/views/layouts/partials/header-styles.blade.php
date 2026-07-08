<style>
  /* Modern Top Header Design */
  #top-header {
    background-color: #122F2A;
    position: relative;
    overflow: hidden;
    padding: 15px 0;
    min-height: 54px;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    contain: layout style;
  }

  #top-header .contact-info {
    width: 100%;
    display: flex;
    flex-wrap: nowrap;
    gap: 30px;
    justify-content: center;
    align-items: center;
    position: relative;
    z-index: 1;
  }

  #top-header .contact-info > div {
    margin-bottom: 0;
    padding: 8px 20px;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border-radius: 25px;
    border: 1px solid rgba(255, 255, 255, 0.2);
    transition: background 0.3s ease, box-shadow 0.3s ease;
  }

  #top-header .contact-info > div:hover {
    background: rgba(255, 255, 255, 0.15);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
  }

  #top-header .contact-info i {
    font-size: 1.3rem !important;
  }

  #top-header a {
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease;
  }

  #top-header a:hover {
    color: #FF5528;
  }

  .mobile-break {
    display: none;
  }

  .mobile-separator {
    display: none;
  }

  #header .logo {
    line-height: 0;
    flex-shrink: 0;
  }

  #header .logo img {
    width: auto;
    height: auto;
    max-height: 78px;
    max-width: 190px;
    margin: -4px 0;
    object-fit: contain;
    transition: transform 0.3s ease;
  }

  #header .logo img:hover {
    transform: scale(1.04);
  }

  @media (max-width: 1199px) {
    #header {
      width: 100%;
      max-width: 100%;
      overflow: hidden;
    }

    #header .container-fluid.container-xl {
      display: flex;
      flex-wrap: nowrap;
      align-items: center;
      justify-content: space-between;
      gap: 8px;
      width: 100%;
      max-width: 100%;
      padding-left: max(12px, env(safe-area-inset-left));
      padding-right: max(12px, env(safe-area-inset-right));
      box-sizing: border-box;
    }

    #header .logo {
      order: 1;
      margin-right: auto;
      flex-shrink: 1;
      min-width: 0;
      line-height: 1;
    }

    #header .logo img {
      max-height: 64px;
      max-width: 120px;
      margin: -4px 0;
    }

    #header .header-actions {
      order: 2;
      flex-shrink: 0;
      display: flex;
      align-items: center;
      gap: 6px;
      margin-left: auto;
    }

    #header .header-actions .btn-getstarted {
      padding: 6px 12px;
      font-size: 12px;
      white-space: nowrap;
      margin: 0 !important;
    }

    #header .navmenu {
      position: static;
      width: 0;
      height: 0;
      overflow: visible;
      padding: 0;
      margin: 0;
    }

    #header .mobile-nav-toggle {
      margin-right: 0;
      border: none;
      background: transparent;
      padding: 6px;
      line-height: 0;
      cursor: pointer;
    }
  }

  /* Hamburger icon */
  .mobile-nav-toggle-box {
    display: inline-flex;
    flex-direction: column;
    justify-content: center;
    gap: 5px;
    width: 26px;
    height: 22px;
  }

  .mobile-nav-toggle-line {
    display: block;
    width: 100%;
    height: 2.5px;
    background-color: #122F2A;
    border-radius: 2px;
    transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.25s ease, width 0.35s ease;
    transform-origin: center;
  }

  .mobile-nav-active .mobile-nav-toggle-line:nth-child(1) {
    transform: translateY(7.5px) rotate(45deg);
  }

  .mobile-nav-active .mobile-nav-toggle-line:nth-child(2) {
    opacity: 0;
    transform: scaleX(0);
  }

  .mobile-nav-active .mobile-nav-toggle-line:nth-child(3) {
    transform: translateY(-7.5px) rotate(-45deg);
  }

  /* Mobile slide-in menu — Tauheed style */
  @media (max-width: 1199px) {
    .mobile-nav-overlay {
      position: fixed;
      inset: 0;
      background: rgba(18, 47, 42, 0.55);
      backdrop-filter: blur(2px);
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.4s ease, visibility 0.4s ease;
      z-index: 9998;
    }

    .mobile-nav-active .mobile-nav-overlay {
      opacity: 1;
      visibility: visible;
    }

    .navmenu .mobile-nav-panel {
      position: fixed;
      top: 0;
      right: 0;
      width: min(340px, 90vw);
      height: 100%;
      height: 100dvh;
      background: #122F2A;
      z-index: 9999;
      display: flex;
      flex-direction: column;
      transform: translateX(105%);
      transition: transform 0.45s cubic-bezier(0.4, 0, 0.2, 1);
      box-shadow: -12px 0 40px rgba(0, 0, 0, 0.2);
      overflow: hidden;
    }

    .mobile-nav-active .navmenu .mobile-nav-panel {
      transform: translateX(0);
    }

    .mobile-nav-top {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 18px 20px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      flex-shrink: 0;
    }

    .mobile-nav-logo {
      display: inline-flex;
      align-items: center;
      background: #ffffff;
      padding: 6px 14px;
      border-radius: 8px;
      text-decoration: none !important;
    }

    .mobile-nav-logo img {
      max-height: 48px;
      width: auto;
      height: auto;
      display: block;
      filter: none;
    }

    .mobile-nav-close {
      width: 40px;
      height: 40px;
      border: 1px solid rgba(255, 255, 255, 0.2);
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.08);
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.1rem;
      cursor: pointer;
      transition: background 0.25s ease, transform 0.25s ease;
    }

    .mobile-nav-close:hover {
      background: rgba(255, 85, 40, 0.25);
      transform: rotate(90deg);
    }

    .navmenu ul {
      display: block !important;
      position: static !important;
      inset: auto !important;
      margin: 0 !important;
      padding: 12px 0 !important;
      background: transparent !important;
      border: none !important;
      border-radius: 0 !important;
      box-shadow: none !important;
      overflow-y: auto;
      flex: 1;
      list-style: none;
    }

    .navmenu > .mobile-nav-panel > ul > li {
      opacity: 0;
      transform: translateX(24px);
    }

    .mobile-nav-active .navmenu > .mobile-nav-panel > ul > li {
      animation: mobileNavItemIn 0.45s cubic-bezier(0.4, 0, 0.2, 1) forwards;
    }

    .mobile-nav-active .navmenu > .mobile-nav-panel > ul > li:nth-child(1) { animation-delay: 0.06s; }
    .mobile-nav-active .navmenu > .mobile-nav-panel > ul > li:nth-child(2) { animation-delay: 0.1s; }
    .mobile-nav-active .navmenu > .mobile-nav-panel > ul > li:nth-child(3) { animation-delay: 0.14s; }
    .mobile-nav-active .navmenu > .mobile-nav-panel > ul > li:nth-child(4) { animation-delay: 0.18s; }
    .mobile-nav-active .navmenu > .mobile-nav-panel > ul > li:nth-child(5) { animation-delay: 0.22s; }
    .mobile-nav-active .navmenu > .mobile-nav-panel > ul > li:nth-child(6) { animation-delay: 0.26s; }
    .mobile-nav-active .navmenu > .mobile-nav-panel > ul > li:nth-child(7) { animation-delay: 0.3s; }
    .mobile-nav-active .navmenu > .mobile-nav-panel > ul > li:nth-child(8) { animation-delay: 0.34s; }

    @keyframes mobileNavItemIn {
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    .navmenu a,
    .navmenu a:focus {
      color: #ffffff !important;
      padding: 14px 22px !important;
      font-size: 16px !important;
      font-weight: 500 !important;
      border-bottom: 1px solid rgba(255, 255, 255, 0.07);
      transition: background 0.25s ease, color 0.25s ease, padding-left 0.25s ease;
    }

    .navmenu a:hover,
    .navmenu .active,
    .navmenu .active:focus {
      color: #FF5528 !important;
      background: rgba(255, 255, 255, 0.05);
      padding-left: 28px !important;
    }

    .navmenu a i.toggle-dropdown {
      width: 28px !important;
      height: 28px !important;
      min-width: 28px !important;
      min-height: 28px !important;
      display: inline-flex !important;
      align-items: center !important;
      justify-content: center !important;
      flex-shrink: 0 !important;
      margin-left: auto !important;
      margin-top: 0 !important;
      padding: 0 !important;
      line-height: 1 !important;
      font-size: 14px !important;
      background: rgba(255, 255, 255, 0.12) !important;
      color: #fff !important;
      border-radius: 6px !important;
      transition: transform 0.3s ease, background 0.3s ease !important;
    }

    .navmenu a i.toggle-dropdown::before {
      line-height: 1 !important;
      display: block !important;
    }

    .navmenu .dropdown.active > a i.toggle-dropdown {
      transform: rotate(180deg);
      background: #FF5528 !important;
    }

    .navmenu .dropdown ul {
      background: rgba(0, 0, 0, 0.2) !important;
      margin: 0 !important;
      padding: 0 !important;
      border: none !important;
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .navmenu .dropdown ul.dropdown-active,
    .navmenu .dropdown > .dropdown-active {
      max-height: 320px;
      display: block !important;
    }

    .navmenu .dropdown ul a {
      padding: 12px 22px 12px 36px !important;
      font-size: 14px !important;
      color: rgba(255, 255, 255, 0.9) !important;
      border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .navmenu .dropdown ul a:hover {
      color: #FF5528 !important;
      background: rgba(255, 255, 255, 0.04);
    }

    .mobile-nav-footer {
      padding: 20px 22px 28px;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      flex-shrink: 0;
      background: rgba(0, 0, 0, 0.15);
    }

    .mobile-nav-cta {
      display: block;
      width: 100%;
      text-align: center;
      background: #FF5528;
      color: #fff !important;
      font-weight: 700;
      font-size: 15px;
      padding: 14px 20px;
      border-radius: 50px;
      text-decoration: none !important;
      transition: background 0.25s ease, transform 0.25s ease;
      margin-bottom: 14px;
    }

    .mobile-nav-cta:hover {
      background: #e04a22;
      transform: translateY(-1px);
      color: #fff !important;
    }

    .mobile-nav-contact {
      margin: 0;
      text-align: center;
      font-size: 14px;
      color: rgba(255, 255, 255, 0.85);
    }

    .mobile-nav-contact a {
      color: #fff !important;
      text-decoration: none !important;
      font-weight: 600;
    }

    .mobile-nav-contact i {
      color: #FF5528;
      margin-right: 6px;
    }

    .mobile-nav-active {
      overflow: hidden;
    }

    /* Override legacy main.css full-screen nav */
    .mobile-nav-active .navmenu {
      position: static !important;
      inset: auto !important;
      background: transparent !important;
      overflow: visible !important;
    }

    .mobile-nav-active .mobile-nav-toggle {
      position: static !important;
      top: auto !important;
      right: auto !important;
      margin-right: 0 !important;
      z-index: auto !important;
    }

  }

  @media (min-width: 1200px) {
    .mobile-nav-overlay,
    .mobile-nav-top,
    .mobile-nav-footer {
      display: none !important;
    }

    .navmenu .mobile-nav-panel {
      display: contents;
    }
  }

  @media (max-width: 1199.98px) {
    #top-header {
      display: none !important;
    }
  }

  @media (min-width: 300px) and (max-width: 768px) {
    #header .logo img {
      max-height: 58px;
      max-width: 108px;
      margin: -3px 0;
    }

    #header .header-actions .btn-getstarted {
      padding: 5px 10px;
      font-size: 11px;
    }

    .mobile-break {
      display: none;
    }

    .mobile-break br {
      display: none;
    }
  }

  @media (max-width: 399px) {
    #header .logo img {
      max-height: 52px;
      max-width: 96px;
      margin: -2px 0;
    }

    #header .header-actions .btn-getstarted {
      padding: 4px 8px;
      font-size: 10px;
    }
  }

  @media (min-width: 769px) and (max-width: 1024px) {
    #top-header .contact-info {
      gap: 8px;
      font-size: 14px;
    }
  }

  @media (min-width: 1200px) {
    #top-header .contact-info {
      gap: 15px;
      font-size: 16px;
    }

    #header .container-fluid.container-xl {
      display: flex;
      align-items: center;
    }

    #header .logo {
      order: 1;
      margin-right: 0;
    }

    #header .logo img {
      max-height: 82px;
      max-width: 200px;
      margin: -6px 0;
    }

    #header .navmenu {
      order: 2;
      margin-left: auto;
      margin-right: 12px;
      width: auto;
      height: auto;
      overflow: visible;
    }

    #header .header-actions {
      order: 3;
      flex-shrink: 0;
    }

    #header .mobile-nav-toggle {
      display: none !important;
    }
  }
</style>
