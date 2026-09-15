<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/attard/quran-academy-attard-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'attard')
    ->defaults('state', 'malta');

Route::get('/balzan/quran-academy-balzan-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'balzan')
    ->defaults('state', 'malta');

Route::get('/birkirkara/quran-academy-birkirkara-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'birkirkara')
    ->defaults('state', 'malta');

Route::get('/birzebbuga/quran-academy-birzebbuga-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'birzebbuga')
    ->defaults('state', 'malta');

Route::get('/cospicua/quran-academy-cospicua-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'cospicua')
    ->defaults('state', 'malta');

Route::get('/dingli/quran-academy-dingli-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dingli')
    ->defaults('state', 'malta');

Route::get('/fgura/quran-academy-fgura-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'fgura')
    ->defaults('state', 'malta');

Route::get('/floriana/quran-academy-floriana-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'floriana')
    ->defaults('state', 'malta');

Route::get('/fontana/quran-academy-fontana-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'fontana')
    ->defaults('state', 'malta');

Route::get('/gudja/quran-academy-gudja-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gudja')
    ->defaults('state', 'malta');

Route::get('/ghajnsielem/quran-academy-ghajnsielem-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ghajnsielem')
    ->defaults('state', 'malta');

Route::get('/gharb/quran-academy-gharb-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gharb')
    ->defaults('state', 'malta');

Route::get('/hal-ghaxaq/quran-academy-hal-ghaxaq-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hal-ghaxaq')
    ->defaults('state', 'malta');

Route::get('/gzira/quran-academy-gzira-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gzira')
    ->defaults('state', 'malta');

Route::get('/hal-gharghur/quran-academy-hal-gharghur-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hal-gharghur')
    ->defaults('state', 'malta');

Route::get('/haz-zebbug/quran-academy-haz-zebbug-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'haz-zebbug')
    ->defaults('state', 'malta');

Route::get('/imdina/quran-academy-imdina-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'imdina')
    ->defaults('state', 'malta');

Route::get('/imsida/quran-academy-imsida-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'imsida')
    ->defaults('state', 'malta');

Route::get('/imtarfa/quran-academy-imtarfa-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'imtarfa')
    ->defaults('state', 'malta');

Route::get('/imgarr/quran-academy-imgarr-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'imgarr')
    ->defaults('state', 'malta');

Route::get('/kalkara/quran-academy-kalkara-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kalkara')
    ->defaults('state', 'malta');

Route::get('/kercem/quran-academy-kercem-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kercem')
    ->defaults('state', 'malta');

Route::get('/kirkop/quran-academy-kirkop-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kirkop')
    ->defaults('state', 'malta');

Route::get('/l-iklin/quran-academy-l-iklin-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'l-iklin')
    ->defaults('state', 'malta');

Route::get('/hal-lija/quran-academy-hal-lija-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hal-lija')
    ->defaults('state', 'malta');

Route::get('/hal-luqa/quran-academy-hal-luqa-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hal-luqa')
    ->defaults('state', 'malta');

Route::get('/marsa/quran-academy-marsa-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'marsa')
    ->defaults('state', 'malta');

Route::get('/marsaskala/quran-academy-marsaskala-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'marsaskala')
    ->defaults('state', 'malta');

Route::get('/marsaxlokk/quran-academy-marsaxlokk-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'marsaxlokk')
    ->defaults('state', 'malta');

Route::get('/mellieha/quran-academy-mellieha-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mellieha')
    ->defaults('state', 'malta');

Route::get('/mosta/quran-academy-mosta-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mosta')
    ->defaults('state', 'malta');

Route::get('/mqabba/quran-academy-mqabba-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mqabba')
    ->defaults('state', 'malta');

Route::get('/munxar/quran-academy-munxar-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'munxar')
    ->defaults('state', 'malta');

Route::get('/mgarr/quran-academy-mgarr-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mgarr')
    ->defaults('state', 'malta');

Route::get('/nadur/quran-academy-nadur-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nadur')
    ->defaults('state', 'malta');

Route::get('/naxxar/quran-academy-naxxar-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'naxxar')
    ->defaults('state', 'malta');

Route::get('/paola/quran-academy-paola-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'paola')
    ->defaults('state', 'malta');

Route::get('/pembroke/quran-academy-pembroke-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pembroke')
    ->defaults('state', 'malta');

Route::get('/pieta/quran-academy-pieta-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pieta')
    ->defaults('state', 'malta');

Route::get('/qala/quran-academy-qala-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'qala')
    ->defaults('state', 'malta');

Route::get('/qormi/quran-academy-qormi-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'qormi')
    ->defaults('state', 'malta');

Route::get('/qrendi/quran-academy-qrendi-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'qrendi')
    ->defaults('state', 'malta');

Route::get('/rabat/quran-academy-rabat-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rabat')
    ->defaults('state', 'malta');

Route::get('/san-gwann/quran-academy-san-gwann-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'san-gwann')
    ->defaults('state', 'malta');

Route::get('/santa-lucija/quran-academy-santa-lucija-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'santa-lucija')
    ->defaults('state', 'malta');

Route::get('/san-lawrenz/quran-academy-san-lawrenz-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'san-lawrenz')
    ->defaults('state', 'malta');

Route::get('/san-pawl-il-bahar/quran-academy-san-pawl-il-bahar-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'san-pawl-il-bahar')
    ->defaults('state', 'malta');

Route::get('/san-giljan-st-julians/quran-academy-san-giljan-st-julians-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'san-giljan-st-julians')
    ->defaults('state', 'malta');

Route::get('/sannat/quran-academy-sannat-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sannat')
    ->defaults('state', 'malta');

Route::get('/santa-lucija-gozo/quran-academy-santa-lucija-gozo-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'santa-lucija-gozo')
    ->defaults('state', 'malta');

Route::get('/santa-venera/quran-academy-santa-venera-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'santa-venera')
    ->defaults('state', 'malta');

Route::get('/senglea/quran-academy-senglea-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'senglea')
    ->defaults('state', 'malta');

Route::get('/siggiewi/quran-academy-siggiewi-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'siggiewi')
    ->defaults('state', 'malta');

Route::get('/sliema/quran-academy-sliema-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sliema')
    ->defaults('state', 'malta');

Route::get('/swieqi/quran-academy-swieqi-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'swieqi')
    ->defaults('state', 'malta');

Route::get('/hal-tarxien/quran-academy-hal-tarxien-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hal-tarxien')
    ->defaults('state', 'malta');

Route::get('/ta-xbiex/quran-academy-ta-xbiex-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ta-xbiex')
    ->defaults('state', 'malta');

Route::get('/valletta/quran-academy-valletta-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'valletta')
    ->defaults('state', 'malta');

Route::get('/victoria/quran-academy-victoria-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'victoria')
    ->defaults('state', 'malta');

Route::get('/birgu-vittoriosa/quran-academy-birgu-vittoriosa-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'birgu-vittoriosa')
    ->defaults('state', 'malta');

Route::get('/xaghra/quran-academy-xaghra-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'xaghra')
    ->defaults('state', 'malta');

Route::get('/xewkija/quran-academy-xewkija-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'xewkija')
    ->defaults('state', 'malta');

Route::get('/xghajra/quran-academy-xghajra-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'xghajra')
    ->defaults('state', 'malta');

Route::get('/hamrun/quran-academy-hamrun-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hamrun')
    ->defaults('state', 'malta');

Route::get('/zabbar/quran-academy-zabbar-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'zabbar')
    ->defaults('state', 'malta');

Route::get('/zebbug/quran-academy-zebbug-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'zebbug')
    ->defaults('state', 'malta');

Route::get('/zejtun/quran-academy-zejtun-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'zejtun')
    ->defaults('state', 'malta');

Route::get('/zurrieq/quran-academy-zurrieq-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'zurrieq')
    ->defaults('state', 'malta');

Route::get('/bahar-ic-caghaq/quran-academy-bahar-ic-caghaq-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bahar-ic-caghaq')
    ->defaults('state', 'malta');

Route::get('/bahrija/quran-academy-bahrija-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bahrija')
    ->defaults('state', 'malta');

Route::get('/bidnija/quran-academy-bidnija-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bidnija')
    ->defaults('state', 'malta');

Route::get('/bingemma/quran-academy-bingemma-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bingemma')
    ->defaults('state', 'malta');

Route::get('/blata-l-bajda/quran-academy-blata-l-bajda-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'blata-l-bajda')
    ->defaults('state', 'malta');

Route::get('/bugibba/quran-academy-bugibba-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bugibba')
    ->defaults('state', 'malta');

Route::get('/burmarrad/quran-academy-burmarrad-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'burmarrad')
    ->defaults('state', 'malta');

Route::get('/fleur-de-lys/quran-academy-fleur-de-lys-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'fleur-de-lys')
    ->defaults('state', 'malta');

Route::get('/hal-far/quran-academy-hal-far-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hal-far')
    ->defaults('state', 'malta');

Route::get('/madliena/quran-academy-madliena-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'madliena')
    ->defaults('state', 'malta');

Route::get('/maghtab/quran-academy-maghtab-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'maghtab')
    ->defaults('state', 'malta');

Route::get('/manikata/quran-academy-manikata-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'manikata')
    ->defaults('state', 'malta');

Route::get('/paceville/quran-academy-paceville-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'paceville')
    ->defaults('state', 'malta');

Route::get('/qawra/quran-academy-qawra-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'qawra')
    ->defaults('state', 'malta');

Route::get('/hal-safi/quran-academy-hal-safi-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hal-safi')
    ->defaults('state', 'malta');

Route::get('/salina/quran-academy-salina-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'salina')
    ->defaults('state', 'malta');

Route::get('/swatar/quran-academy-swatar-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'swatar')
    ->defaults('state', 'malta');

Route::get('/wardija/quran-academy-wardija-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wardija')
    ->defaults('state', 'malta');

Route::get('/xemxija/quran-academy-xemxija-malta', [HomeController::class, 'cityPage'])
    ->defaults('city', 'xemxija')
    ->defaults('state', 'malta');
