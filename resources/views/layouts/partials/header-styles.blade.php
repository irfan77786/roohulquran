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

  .logo img {
    width: 160px;
    height: 160px;
    aspect-ratio: 1 / 1;
    transition: transform 0.3s ease;
  }

  .logo img:hover {
    transform: scale(1.05);
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
      width: 100px;
      height: auto;
      max-height: 56px;
      max-width: 100%;
    }

    #header .header-actions {
      order: 2;
      flex-shrink: 0;
      display: flex;
      align-items: center;
      gap: 6px;
      margin-left: 0;
    }

    #header .header-actions .btn-getstarted {
      padding: 6px 12px;
      font-size: 12px;
      white-space: nowrap;
      margin: 0 !important;
    }

    #header .navmenu {
      order: 3;
      flex-shrink: 0;
    }

    #header .mobile-nav-toggle {
      margin-right: 0;
    }
  }

  @media (min-width: 300px) and (max-width: 768px) {
    #top-header {
      padding: 12px 0;
      overflow: hidden;
    }

    #top-header .container-fluid {
      max-width: 100%;
      padding-left: max(10px, env(safe-area-inset-left));
      padding-right: max(10px, env(safe-area-inset-right));
      box-sizing: border-box;
    }

    #top-header .contact-info {
      flex-direction: column;
      gap: 10px;
      font-size: 12px;
      padding: 0 10px;
      width: 100%;
      max-width: 100%;
      box-sizing: border-box;
    }

    #top-header .contact-info > div {
      width: 100%;
      max-width: 100%;
      padding: 10px 12px;
      text-align: center;
      justify-content: center;
      box-sizing: border-box;
    }

    #top-header .contact-info .phone-number {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
      gap: 6px;
      max-width: 100%;
    }

    #top-header .contact-info .phone-number a {
      white-space: nowrap;
      font-size: 11px;
    }

    #top-header .contact-info .email {
      font-size: 11px;
      word-break: break-word;
      line-height: 1.3;
    }

    #top-header .contact-info i {
      font-size: 1.1rem !important;
      flex-shrink: 0;
    }

    #header .logo img {
      width: 88px;
      max-height: 52px;
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

    .mobile-separator {
      display: inline-block;
      margin: 0 5px;
      font-weight: 300;
    }

    #navmenu ul {
      top: 70px;
      left: 0;
      width: 100%;
      color: white;
      background-color: #122F2A;
    }

    #navmenu.active ul {
      display: block;
    }

    #navmenu .dropdown i {
      background: white;
      color: black;
      text-align: center;
      margin-top: 20px
    }

    #navmenu .dropdown ul {
      background: #fff8e6;
      color: black
    }

    a,
    a:link,
    a:visited,
    a:active,
    a:hover {
      color: inherit !important;
      text-decoration: none !important;
    }

    .phone-number {
      color: #fff !important;
      text-decoration: none !important;
    }
  }

  @media (max-width: 399px) {
    #top-header .contact-info {
      font-size: 10px;
    }

    #top-header .contact-info > div {
      padding: 8px 10px;
    }

    #top-header .contact-info .phone-number {
      flex-direction: column;
      gap: 4px;
    }

    #top-header .contact-info .phone-number .mobile-separator {
      display: none;
    }

    #top-header .contact-info .phone-number a {
      font-size: 10px;
    }

    #top-header .contact-info .email {
      font-size: 10px;
    }

    #top-header .contact-info i {
      font-size: 1rem !important;
    }

    #header .logo img {
      width: 76px;
      max-height: 46px;
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
  }
</style>
