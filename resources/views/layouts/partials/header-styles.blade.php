<style>
  /* Modern Top Header Design */
  #top-header {
    background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
    position: relative;
    overflow: hidden;
    padding: 15px 0;
    min-height: 54px;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    contain: layout style;
  }

  /* Shimmer overlay — transform only (no layout reflow) */
  #top-header::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
    transform: translateX(-100%);
    animation: shimmer 3s infinite;
    will-change: transform;
    pointer-events: none;
  }

  @keyframes shimmer {
    0% {
      transform: translateX(-100%);
    }
    100% {
      transform: translateX(100%);
    }
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
    color: #FFD43B;
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
    #header .container-fluid.container-xl {
      display: flex;
      flex-wrap: nowrap;
      align-items: center;
      justify-content: space-between;
      gap: 8px;
    }

    #header .logo {
      order: 1;
      margin-right: auto;
      flex-shrink: 0;
    }

    #header .logo img {
      width: 120px;
      height: 120px;
      max-height: 120px;
    }

    #header .header-actions {
      order: 2;
      flex-shrink: 0;
      display: flex;
      align-items: center;
      gap: 6px;
    }

    #header .header-actions .btn-getstarted {
      padding: 6px 12px;
      font-size: 12px;
      white-space: nowrap;
    }

    #header .navmenu {
      order: 3;
      flex-shrink: 0;
    }
  }

  @media (min-width: 300px) and (max-width: 768px) {
    #top-header {
      padding: 12px 0;
    }

    #top-header .contact-info {
      flex-direction: column;
      gap: 10px;
      font-size: 12px;
      padding: 0 10px;
    }

    #top-header .contact-info > div {
      width: 100%;
      max-width: 350px;
      padding: 10px 15px;
      text-align: center;
      justify-content: center;
    }

    #top-header .contact-info .phone-number {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: nowrap;
      gap: 8px;
    }

    #top-header .contact-info .phone-number a {
      white-space: nowrap;
    }

    #top-header .contact-info i {
      font-size: 1.2rem !important;
    }

    .logo img {
      width: 130px;
      height: 130px;
    }

    #header .logo img {
      width: 120px;
      height: 80px;
      max-height: 120px;
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
      background: linear-gradient(120deg, #44137c, #2bab6d);
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
      font-size: 11px;
    }

    #top-header .contact-info > div {
      padding: 8px 12px;
    }

    #top-header .contact-info .phone-number {
      gap: 5px;
    }

    #top-header .contact-info i {
      font-size: 1.1rem !important;
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
