<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/acharnes/quran-academy-acharnes-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'acharnes')
    ->defaults('state', 'greece');

Route::get('/acharavi/quran-academy-acharavi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'acharavi')
    ->defaults('state', 'greece');

Route::get('/adamas/quran-academy-adamas-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'adamas')
    ->defaults('state', 'greece');

Route::get('/aegina/quran-academy-aegina-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aegina')
    ->defaults('state', 'greece');

Route::get('/afidnes/quran-academy-afidnes-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'afidnes')
    ->defaults('state', 'greece');

Route::get('/afration/quran-academy-afration-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'afration')
    ->defaults('state', 'greece');

Route::get('/afantou/quran-academy-afantou-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'afantou')
    ->defaults('state', 'greece');

Route::get('/aghios-panteleimon/quran-academy-aghios-panteleimon-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aghios-panteleimon')
    ->defaults('state', 'greece');

Route::get('/agios-dimitrios/quran-academy-agios-dimitrios-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agios-dimitrios')
    ->defaults('state', 'greece');

Route::get('/agios-dimitrios-kropias/quran-academy-agios-dimitrios-kropias-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agios-dimitrios-kropias')
    ->defaults('state', 'greece');

Route::get('/agios-georgis/quran-academy-agios-georgis-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agios-georgis')
    ->defaults('state', 'greece');

Route::get('/agios-ioannis-rentis/quran-academy-agios-ioannis-rentis-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agios-ioannis-rentis')
    ->defaults('state', 'greece');

Route::get('/agkathia/quran-academy-agkathia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agkathia')
    ->defaults('state', 'greece');

Route::get('/agnantero/quran-academy-agnantero-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agnantero')
    ->defaults('state', 'greece');

Route::get('/agria/quran-academy-agria-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agria')
    ->defaults('state', 'greece');

Route::get('/agrinio/quran-academy-agrinio-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agrinio')
    ->defaults('state', 'greece');

Route::get('/agia-foteini/quran-academy-agia-foteini-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agia-foteini')
    ->defaults('state', 'greece');

Route::get('/agia-galini/quran-academy-agia-galini-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agia-galini')
    ->defaults('state', 'greece');

Route::get('/agia-kyriaki/quran-academy-agia-kyriaki-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agia-kyriaki')
    ->defaults('state', 'greece');

Route::get('/agia-marina/quran-academy-agia-marina-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agia-marina')
    ->defaults('state', 'greece');

Route::get('/agia-paraskevi/quran-academy-agia-paraskevi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agia-paraskevi')
    ->defaults('state', 'greece');

Route::get('/agia-paraskevi-1/quran-academy-agia-paraskevi-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agia-paraskevi-1')
    ->defaults('state', 'greece');

Route::get('/agia-triada/quran-academy-agia-triada-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agia-triada')
    ->defaults('state', 'greece');

Route::get('/agia-triada-1/quran-academy-agia-triada-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agia-triada-1')
    ->defaults('state', 'greece');

Route::get('/agia-triada-2/quran-academy-agia-triada-2-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agia-triada-2')
    ->defaults('state', 'greece');

Route::get('/agia-varvara/quran-academy-agia-varvara-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agia-varvara')
    ->defaults('state', 'greece');

Route::get('/agia-varvara-1/quran-academy-agia-varvara-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agia-varvara-1')
    ->defaults('state', 'greece');

Route::get('/aiani/quran-academy-aiani-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aiani')
    ->defaults('state', 'greece');

Route::get('/aidipsos/quran-academy-aidipsos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aidipsos')
    ->defaults('state', 'greece');

Route::get('/aigaleo/quran-academy-aigaleo-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aigaleo')
    ->defaults('state', 'greece');

Route::get('/aiginio/quran-academy-aiginio-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aiginio')
    ->defaults('state', 'greece');

Route::get('/aitoliko/quran-academy-aitoliko-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aitoliko')
    ->defaults('state', 'greece');

Route::get('/aianteio/quran-academy-aianteio-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aianteio')
    ->defaults('state', 'greece');

Route::get('/akraifnia/quran-academy-akraifnia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'akraifnia')
    ->defaults('state', 'greece');

Route::get('/akrini/quran-academy-akrini-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'akrini')
    ->defaults('state', 'greece');

Route::get('/akrolimni/quran-academy-akrolimni-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'akrolimni')
    ->defaults('state', 'greece');

Route::get('/akrata/quran-academy-akrata-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'akrata')
    ->defaults('state', 'greece');

Route::get('/aktaio/quran-academy-aktaio-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aktaio')
    ->defaults('state', 'greece');

Route::get('/alepou/quran-academy-alepou-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'alepou')
    ->defaults('state', 'greece');

Route::get('/alexandroupoli/quran-academy-alexandroupoli-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'alexandroupoli')
    ->defaults('state', 'greece');

Route::get('/alexandreia/quran-academy-alexandreia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'alexandreia')
    ->defaults('state', 'greece');

Route::get('/alfeiousa/quran-academy-alfeiousa-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'alfeiousa')
    ->defaults('state', 'greece');

Route::get('/alistrati/quran-academy-alistrati-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'alistrati')
    ->defaults('state', 'greece');

Route::get('/aliveri/quran-academy-aliveri-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aliveri')
    ->defaults('state', 'greece');

Route::get('/almyros/quran-academy-almyros-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'almyros')
    ->defaults('state', 'greece');

Route::get('/aliartos/quran-academy-aliartos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aliartos')
    ->defaults('state', 'greece');

Route::get('/amaliada/quran-academy-amaliada-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'amaliada')
    ->defaults('state', 'greece');

Route::get('/ambelokipoi/quran-academy-ambelokipoi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ambelokipoi')
    ->defaults('state', 'greece');

Route::get('/amfilochia/quran-academy-amfilochia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'amfilochia')
    ->defaults('state', 'greece');

Route::get('/amfikleia/quran-academy-amfikleia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'amfikleia')
    ->defaults('state', 'greece');

Route::get('/ammochori/quran-academy-ammochori-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ammochori')
    ->defaults('state', 'greece');

Route::get('/amorgos/quran-academy-amorgos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'amorgos')
    ->defaults('state', 'greece');

Route::get('/ampeleies/quran-academy-ampeleies-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ampeleies')
    ->defaults('state', 'greece');

Route::get('/ampelakia/quran-academy-ampelakia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ampelakia')
    ->defaults('state', 'greece');

Route::get('/ampelokipoi/quran-academy-ampelokipoi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ampelokipoi')
    ->defaults('state', 'greece');

Route::get('/amygdaleonas/quran-academy-amygdaleonas-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'amygdaleonas')
    ->defaults('state', 'greece');

Route::get('/amarynthos/quran-academy-amarynthos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'amarynthos')
    ->defaults('state', 'greece');

Route::get('/amyntaio/quran-academy-amyntaio-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'amyntaio')
    ->defaults('state', 'greece');

Route::get('/anakasia/quran-academy-anakasia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'anakasia')
    ->defaults('state', 'greece');

Route::get('/anarachi/quran-academy-anarachi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'anarachi')
    ->defaults('state', 'greece');

Route::get('/anatoliko/quran-academy-anatoliko-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'anatoliko')
    ->defaults('state', 'greece');

Route::get('/anatoli/quran-academy-anatoli-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'anatoli')
    ->defaults('state', 'greece');

Route::get('/andravida/quran-academy-andravida-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'andravida')
    ->defaults('state', 'greece');

Route::get('/andros/quran-academy-andros-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'andros')
    ->defaults('state', 'greece');

Route::get('/angelochori/quran-academy-angelochori-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'angelochori')
    ->defaults('state', 'greece');

Route::get('/angelokastro/quran-academy-angelokastro-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'angelokastro')
    ->defaults('state', 'greece');

Route::get('/ano-arhanes/quran-academy-ano-arhanes-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ano-arhanes')
    ->defaults('state', 'greece');

Route::get('/anoixi/quran-academy-anoixi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'anoixi')
    ->defaults('state', 'greece');

Route::get('/anthiro/quran-academy-anthiro-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'anthiro')
    ->defaults('state', 'greece');

Route::get('/anthousa/quran-academy-anthousa-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'anthousa')
    ->defaults('state', 'greece');

Route::get('/anthili/quran-academy-anthili-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'anthili')
    ->defaults('state', 'greece');

Route::get('/antikyra/quran-academy-antikyra-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'antikyra')
    ->defaults('state', 'greece');

Route::get('/antimacheia/quran-academy-antimacheia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'antimacheia')
    ->defaults('state', 'greece');

Route::get('/antirrio/quran-academy-antirrio-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'antirrio')
    ->defaults('state', 'greece');

Route::get('/antiparos/quran-academy-antiparos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'antiparos')
    ->defaults('state', 'greece');

Route::get('/anafi/quran-academy-anafi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'anafi')
    ->defaults('state', 'greece');

Route::get('/anavra/quran-academy-anavra-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'anavra')
    ->defaults('state', 'greece');

Route::get('/anavyssos/quran-academy-anavyssos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'anavyssos')
    ->defaults('state', 'greece');

Route::get('/aneza/quran-academy-aneza-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aneza')
    ->defaults('state', 'greece');

Route::get('/anogeia/quran-academy-anogeia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'anogeia')
    ->defaults('state', 'greece');

Route::get('/aravissos/quran-academy-aravissos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aravissos')
    ->defaults('state', 'greece');

Route::get('/archaia-olympia/quran-academy-archaia-olympia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'archaia-olympia')
    ->defaults('state', 'greece');

Route::get('/archontochori/quran-academy-archontochori-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'archontochori')
    ->defaults('state', 'greece');

Route::get('/archangelos/quran-academy-archangelos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'archangelos')
    ->defaults('state', 'greece');

Route::get('/arfara/quran-academy-arfara-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'arfara')
    ->defaults('state', 'greece');

Route::get('/argalasti/quran-academy-argalasti-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'argalasti')
    ->defaults('state', 'greece');

Route::get('/argithea/quran-academy-argithea-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'argithea')
    ->defaults('state', 'greece');

Route::get('/argos-orestiko/quran-academy-argos-orestiko-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'argos-orestiko')
    ->defaults('state', 'greece');

Route::get('/argostolion/quran-academy-argostolion-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'argostolion')
    ->defaults('state', 'greece');

Route::get('/argyroupoli/quran-academy-argyroupoli-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'argyroupoli')
    ->defaults('state', 'greece');

Route::get('/aria/quran-academy-aria-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aria')
    ->defaults('state', 'greece');

Route::get('/aridaia/quran-academy-aridaia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aridaia')
    ->defaults('state', 'greece');

Route::get('/arkalochori/quran-academy-arkalochori-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'arkalochori')
    ->defaults('state', 'greece');

Route::get('/arkhaia-korinthos/quran-academy-arkhaia-korinthos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'arkhaia-korinthos')
    ->defaults('state', 'greece');

Route::get('/arkoudi/quran-academy-arkoudi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'arkoudi')
    ->defaults('state', 'greece');

Route::get('/arnaia/quran-academy-arnaia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'arnaia')
    ->defaults('state', 'greece');

Route::get('/arriana/quran-academy-arriana-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'arriana')
    ->defaults('state', 'greece');

Route::get('/arsenio/quran-academy-arsenio-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'arsenio')
    ->defaults('state', 'greece');

Route::get('/artesiano/quran-academy-artesiano-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'artesiano')
    ->defaults('state', 'greece');

Route::get('/artemida/quran-academy-artemida-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'artemida')
    ->defaults('state', 'greece');

Route::get('/arachova/quran-academy-arachova-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'arachova')
    ->defaults('state', 'greece');

Route::get('/arisvi/quran-academy-arisvi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'arisvi')
    ->defaults('state', 'greece');

Route::get('/askos/quran-academy-askos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'askos')
    ->defaults('state', 'greece');

Route::get('/asopia/quran-academy-asopia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'asopia')
    ->defaults('state', 'greece');

Route::get('/asopos/quran-academy-asopos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'asopos')
    ->defaults('state', 'greece');

Route::get('/asprovalta/quran-academy-asprovalta-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'asprovalta')
    ->defaults('state', 'greece');

Route::get('/asprangeloi/quran-academy-asprangeloi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'asprangeloi')
    ->defaults('state', 'greece');

Route::get('/aspropyrgos/quran-academy-aspropyrgos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aspropyrgos')
    ->defaults('state', 'greece');

Route::get('/astakos/quran-academy-astakos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'astakos')
    ->defaults('state', 'greece');

Route::get('/astypalaia/quran-academy-astypalaia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'astypalaia')
    ->defaults('state', 'greece');

Route::get('/asvestochori/quran-academy-asvestochori-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'asvestochori')
    ->defaults('state', 'greece');

Route::get('/asimion/quran-academy-asimion-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'asimion')
    ->defaults('state', 'greece');

Route::get('/asini/quran-academy-asini-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'asini')
    ->defaults('state', 'greece');

Route::get('/atalanti/quran-academy-atalanti-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'atalanti')
    ->defaults('state', 'greece');

Route::get('/athens/quran-academy-athens-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'athens')
    ->defaults('state', 'greece');

Route::get('/athikia/quran-academy-athikia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'athikia')
    ->defaults('state', 'greece');

Route::get('/atsipopoulo/quran-academy-atsipopoulo-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'atsipopoulo')
    ->defaults('state', 'greece');

Route::get('/avlonas/quran-academy-avlonas-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'avlonas')
    ->defaults('state', 'greece');

Route::get('/axioupoli/quran-academy-axioupoli-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'axioupoli')
    ->defaults('state', 'greece');

Route::get('/axos/quran-academy-axos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'axos')
    ->defaults('state', 'greece');

Route::get('/ayia-trias/quran-academy-ayia-trias-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ayia-trias')
    ->defaults('state', 'greece');

Route::get('/aigio/quran-academy-aigio-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aigio')
    ->defaults('state', 'greece');

Route::get('/aiyira/quran-academy-aiyira-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aiyira')
    ->defaults('state', 'greece');

Route::get('/chaironeia/quran-academy-chaironeia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chaironeia')
    ->defaults('state', 'greece');

Route::get('/chalandritsa/quran-academy-chalandritsa-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chalandritsa')
    ->defaults('state', 'greece');

Route::get('/chalkidona/quran-academy-chalkidona-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chalkidona')
    ->defaults('state', 'greece');

Route::get('/chalkiades/quran-academy-chalkiades-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chalkiades')
    ->defaults('state', 'greece');

Route::get('/chalkida/quran-academy-chalkida-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chalkida')
    ->defaults('state', 'greece');

Route::get('/chalastra/quran-academy-chalastra-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chalastra')
    ->defaults('state', 'greece');

Route::get('/chania/quran-academy-chania-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chania')
    ->defaults('state', 'greece');

Route::get('/charopo/quran-academy-charopo-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'charopo')
    ->defaults('state', 'greece');

Route::get('/chaidari/quran-academy-chaidari-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chaidari')
    ->defaults('state', 'greece');

Route::get('/chloi/quran-academy-chloi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chloi')
    ->defaults('state', 'greece');

Route::get('/cholargos/quran-academy-cholargos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'cholargos')
    ->defaults('state', 'greece');

Route::get('/choristi/quran-academy-choristi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'choristi')
    ->defaults('state', 'greece');

Route::get('/chortiatis/quran-academy-chortiatis-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chortiatis')
    ->defaults('state', 'greece');

Route::get('/chrysochorafa/quran-academy-chrysochorafa-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chrysochorafa')
    ->defaults('state', 'greece');

Route::get('/chrysochori/quran-academy-chrysochori-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chrysochori')
    ->defaults('state', 'greece');

Route::get('/chrysoupolis/quran-academy-chrysoupolis-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chrysoupolis')
    ->defaults('state', 'greece');

Route::get('/chryso/quran-academy-chryso-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chryso')
    ->defaults('state', 'greece');

Route::get('/chalki/quran-academy-chalki-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chalki')
    ->defaults('state', 'greece');

Route::get('/chavari/quran-academy-chavari-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chavari')
    ->defaults('state', 'greece');

Route::get('/chora/quran-academy-chora-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chora')
    ->defaults('state', 'greece');

Route::get('/chora-sfakion/quran-academy-chora-sfakion-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chora-sfakion')
    ->defaults('state', 'greece');

Route::get('/corfu/quran-academy-corfu-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'corfu')
    ->defaults('state', 'greece');

Route::get('/daratsos/quran-academy-daratsos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'daratsos')
    ->defaults('state', 'greece');

Route::get('/delphi/quran-academy-delphi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'delphi')
    ->defaults('state', 'greece');

Route::get('/deskati/quran-academy-deskati-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'deskati')
    ->defaults('state', 'greece');

Route::get('/dhafni/quran-academy-dhafni-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dhafni')
    ->defaults('state', 'greece');

Route::get('/dhokimion/quran-academy-dhokimion-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dhokimion')
    ->defaults('state', 'greece');

Route::get('/dhrosia/quran-academy-dhrosia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dhrosia')
    ->defaults('state', 'greece');

Route::get('/dhrafi/quran-academy-dhrafi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dhrafi')
    ->defaults('state', 'greece');

Route::get('/diavata/quran-academy-diavata-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'diavata')
    ->defaults('state', 'greece');

Route::get('/diavatos/quran-academy-diavatos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'diavatos')
    ->defaults('state', 'greece');

Route::get('/didymoteicho/quran-academy-didymoteicho-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'didymoteicho')
    ->defaults('state', 'greece');

Route::get('/dimitsana/quran-academy-dimitsana-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dimitsana')
    ->defaults('state', 'greece');

Route::get('/dioni/quran-academy-dioni-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dioni')
    ->defaults('state', 'greece');

Route::get('/dionysos/quran-academy-dionysos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dionysos')
    ->defaults('state', 'greece');

Route::get('/domokos/quran-academy-domokos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'domokos')
    ->defaults('state', 'greece');

Route::get('/domvraina/quran-academy-domvraina-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'domvraina')
    ->defaults('state', 'greece');

Route::get('/drapetsona/quran-academy-drapetsona-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'drapetsona')
    ->defaults('state', 'greece');

Route::get('/draviskos/quran-academy-draviskos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'draviskos')
    ->defaults('state', 'greece');

Route::get('/drosia/quran-academy-drosia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'drosia')
    ->defaults('state', 'greece');

Route::get('/drymos/quran-academy-drymos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'drymos')
    ->defaults('state', 'greece');

Route::get('/drama/quran-academy-drama-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'drama')
    ->defaults('state', 'greece');

Route::get('/drepanon/quran-academy-drepanon-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'drepanon')
    ->defaults('state', 'greece');

Route::get('/didyma/quran-academy-didyma-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'didyma')
    ->defaults('state', 'greece');

Route::get('/dilesi/quran-academy-dilesi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dilesi')
    ->defaults('state', 'greece');

Route::get('/dion/quran-academy-dion-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dion')
    ->defaults('state', 'greece');

Route::get('/distomo/quran-academy-distomo-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'distomo')
    ->defaults('state', 'greece');

Route::get('/echinos/quran-academy-echinos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'echinos')
    ->defaults('state', 'greece');

Route::get('/efkarpia/quran-academy-efkarpia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'efkarpia')
    ->defaults('state', 'greece');

Route::get('/eirinoupoli/quran-academy-eirinoupoli-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'eirinoupoli')
    ->defaults('state', 'greece');

Route::get('/eksochi/quran-academy-eksochi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'eksochi')
    ->defaults('state', 'greece');

Route::get('/ekali/quran-academy-ekali-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ekali')
    ->defaults('state', 'greece');

Route::get('/elaiochori/quran-academy-elaiochori-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'elaiochori')
    ->defaults('state', 'greece');

Route::get('/elefsina/quran-academy-elefsina-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'elefsina')
    ->defaults('state', 'greece');

Route::get('/eleftheroupolis/quran-academy-eleftheroupolis-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'eleftheroupolis')
    ->defaults('state', 'greece');

Route::get('/eleftheres/quran-academy-eleftheres-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'eleftheres')
    ->defaults('state', 'greece');

Route::get('/eleousa/quran-academy-eleousa-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'eleousa')
    ->defaults('state', 'greece');

Route::get('/elliniko/quran-academy-elliniko-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'elliniko')
    ->defaults('state', 'greece');

Route::get('/elounda/quran-academy-elounda-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'elounda')
    ->defaults('state', 'greece');

Route::get('/elateia/quran-academy-elateia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'elateia')
    ->defaults('state', 'greece');

Route::get('/emporeio/quran-academy-emporeio-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'emporeio')
    ->defaults('state', 'greece');

Route::get('/emporio/quran-academy-emporio-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'emporio')
    ->defaults('state', 'greece');

Route::get('/epanomi/quran-academy-epanomi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'epanomi')
    ->defaults('state', 'greece');

Route::get('/episkopi/quran-academy-episkopi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'episkopi')
    ->defaults('state', 'greece');

Route::get('/epitalio/quran-academy-epitalio-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'epitalio')
    ->defaults('state', 'greece');

Route::get('/ermioni/quran-academy-ermioni-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ermioni')
    ->defaults('state', 'greece');

Route::get('/ermoupolis/quran-academy-ermoupolis-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ermoupolis')
    ->defaults('state', 'greece');

Route::get('/erythres/quran-academy-erythres-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'erythres')
    ->defaults('state', 'greece');

Route::get('/eratyra/quran-academy-eratyra-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'eratyra')
    ->defaults('state', 'greece');

Route::get('/eretria/quran-academy-eretria-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'eretria')
    ->defaults('state', 'greece');

Route::get('/evropos/quran-academy-evropos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'evropos')
    ->defaults('state', 'greece');

Route::get('/evxinoupolis/quran-academy-evxinoupolis-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'evxinoupolis')
    ->defaults('state', 'greece');

Route::get('/examilia/quran-academy-examilia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'examilia')
    ->defaults('state', 'greece');

Route::get('/exaplatanos/quran-academy-exaplatanos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'exaplatanos')
    ->defaults('state', 'greece');

Route::get('/faliraki/quran-academy-faliraki-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'faliraki')
    ->defaults('state', 'greece');

Route::get('/farkadona/quran-academy-farkadona-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'farkadona')
    ->defaults('state', 'greece');

Route::get('/filiatra/quran-academy-filiatra-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'filiatra')
    ->defaults('state', 'greece');

Route::get('/filippiada/quran-academy-filippiada-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'filippiada')
    ->defaults('state', 'greece');

Route::get('/filiates/quran-academy-filiates-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'filiates')
    ->defaults('state', 'greece');

Route::get('/fillyra/quran-academy-fillyra-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'fillyra')
    ->defaults('state', 'greece');

Route::get('/filothei/quran-academy-filothei-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'filothei')
    ->defaults('state', 'greece');

Route::get('/filotas/quran-academy-filotas-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'filotas')
    ->defaults('state', 'greece');

Route::get('/filotion/quran-academy-filotion-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'filotion')
    ->defaults('state', 'greece');

Route::get('/fira/quran-academy-fira-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'fira')
    ->defaults('state', 'greece');

Route::get('/florina/quran-academy-florina-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'florina')
    ->defaults('state', 'greece');

Route::get('/folegandros/quran-academy-folegandros-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'folegandros')
    ->defaults('state', 'greece');

Route::get('/fotolivos/quran-academy-fotolivos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'fotolivos')
    ->defaults('state', 'greece');

Route::get('/fry/quran-academy-fry-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'fry')
    ->defaults('state', 'greece');

Route::get('/ftelia/quran-academy-ftelia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ftelia')
    ->defaults('state', 'greece');

Route::get('/fyli/quran-academy-fyli-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'fyli')
    ->defaults('state', 'greece');

Route::get('/fyteies/quran-academy-fyteies-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'fyteies')
    ->defaults('state', 'greece');

Route::get('/faros/quran-academy-faros-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'faros')
    ->defaults('state', 'greece');

Route::get('/feres/quran-academy-feres-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'feres')
    ->defaults('state', 'greece');

Route::get('/fiki/quran-academy-fiki-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'fiki')
    ->defaults('state', 'greece');

Route::get('/filiro/quran-academy-filiro-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'filiro')
    ->defaults('state', 'greece');

Route::get('/filla/quran-academy-filla-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'filla')
    ->defaults('state', 'greece');

Route::get('/galatini/quran-academy-galatini-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'galatini')
    ->defaults('state', 'greece');

Route::get('/galatades/quran-academy-galatades-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'galatades')
    ->defaults('state', 'greece');

Route::get('/galatas/quran-academy-galatas-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'galatas')
    ->defaults('state', 'greece');

Route::get('/galatas-1/quran-academy-galatas-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'galatas-1')
    ->defaults('state', 'greece');

Route::get('/galatas-2/quran-academy-galatas-2-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'galatas-2')
    ->defaults('state', 'greece');

Route::get('/galaxidhion/quran-academy-galaxidhion-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'galaxidhion')
    ->defaults('state', 'greece');

Route::get('/galatista/quran-academy-galatista-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'galatista')
    ->defaults('state', 'greece');

Route::get('/galatsi/quran-academy-galatsi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'galatsi')
    ->defaults('state', 'greece');

Route::get('/gargalianoi/quran-academy-gargalianoi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gargalianoi')
    ->defaults('state', 'greece');

Route::get('/gastouni/quran-academy-gastouni-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gastouni')
    ->defaults('state', 'greece');

Route::get('/gavalou/quran-academy-gavalou-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gavalou')
    ->defaults('state', 'greece');

Route::get('/gaitanion/quran-academy-gaitanion-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gaitanion')
    ->defaults('state', 'greece');

Route::get('/genissea/quran-academy-genissea-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'genissea')
    ->defaults('state', 'greece');

Route::get('/georgioupolis/quran-academy-georgioupolis-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'georgioupolis')
    ->defaults('state', 'greece');

Route::get('/gerakarou/quran-academy-gerakarou-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gerakarou')
    ->defaults('state', 'greece');

Route::get('/geraki/quran-academy-geraki-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'geraki')
    ->defaults('state', 'greece');

Route::get('/gerani/quran-academy-gerani-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gerani')
    ->defaults('state', 'greece');

Route::get('/giannitsa/quran-academy-giannitsa-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'giannitsa')
    ->defaults('state', 'greece');

Route::get('/glyfada/quran-academy-glyfada-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'glyfada')
    ->defaults('state', 'greece');

Route::get('/goumenissa/quran-academy-goumenissa-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'goumenissa')
    ->defaults('state', 'greece');

Route::get('/goumero/quran-academy-goumero-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'goumero')
    ->defaults('state', 'greece');

Route::get('/gournes/quran-academy-gournes-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gournes')
    ->defaults('state', 'greece');

Route::get('/gra-liyia/quran-academy-gra-liyia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gra-liyia')
    ->defaults('state', 'greece');

Route::get('/graikochori/quran-academy-graikochori-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'graikochori')
    ->defaults('state', 'greece');

Route::get('/grammatiko/quran-academy-grammatiko-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'grammatiko')
    ->defaults('state', 'greece');

Route::get('/grammenitsa/quran-academy-grammenitsa-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'grammenitsa')
    ->defaults('state', 'greece');

Route::get('/grevena/quran-academy-grevena-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'grevena')
    ->defaults('state', 'greece');

Route::get('/grizano/quran-academy-grizano-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'grizano')
    ->defaults('state', 'greece');

Route::get('/gazi/quran-academy-gazi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gazi')
    ->defaults('state', 'greece');

Route::get('/gazoros/quran-academy-gazoros-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gazoros')
    ->defaults('state', 'greece');

Route::get('/gaios/quran-academy-gaios-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gaios')
    ->defaults('state', 'greece');

Route::get('/gefyra/quran-academy-gefyra-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gefyra')
    ->defaults('state', 'greece');

Route::get('/gefyra-1/quran-academy-gefyra-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gefyra-1')
    ->defaults('state', 'greece');

Route::get('/gerakas/quran-academy-gerakas-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gerakas')
    ->defaults('state', 'greece');

Route::get('/gergeri/quran-academy-gergeri-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gergeri')
    ->defaults('state', 'greece');

Route::get('/gomfoi/quran-academy-gomfoi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gomfoi')
    ->defaults('state', 'greece');

Route::get('/gytheio/quran-academy-gytheio-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gytheio')
    ->defaults('state', 'greece');

Route::get('/ialysos/quran-academy-ialysos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ialysos')
    ->defaults('state', 'greece');

Route::get('/ierissos/quran-academy-ierissos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ierissos')
    ->defaults('state', 'greece');

Route::get('/ierapetra/quran-academy-ierapetra-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ierapetra')
    ->defaults('state', 'greece');

Route::get('/igoumenitsa/quran-academy-igoumenitsa-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'igoumenitsa')
    ->defaults('state', 'greece');

Route::get('/iliokentima/quran-academy-iliokentima-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'iliokentima')
    ->defaults('state', 'greece');

Route::get('/ilioupoli/quran-academy-ilioupoli-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ilioupoli')
    ->defaults('state', 'greece');

Route::get('/ioannina/quran-academy-ioannina-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ioannina')
    ->defaults('state', 'greece');

Route::get('/irakleia/quran-academy-irakleia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'irakleia')
    ->defaults('state', 'greece');

Route::get('/irakleio/quran-academy-irakleio-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'irakleio')
    ->defaults('state', 'greece');

Route::get('/irakleion/quran-academy-irakleion-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'irakleion')
    ->defaults('state', 'greece');

Route::get('/isthmia/quran-academy-isthmia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'isthmia')
    ->defaults('state', 'greece');

Route::get('/istiaia/quran-academy-istiaia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'istiaia')
    ->defaults('state', 'greece');

Route::get('/ithaki/quran-academy-ithaki-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ithaki')
    ->defaults('state', 'greece');

Route::get('/itea/quran-academy-itea-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'itea')
    ->defaults('state', 'greece');

Route::get('/itea-1/quran-academy-itea-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'itea-1')
    ->defaults('state', 'greece');

Route::get('/kainouryion/quran-academy-kainouryion-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kainouryion')
    ->defaults('state', 'greece');

Route::get('/kainouryion-1/quran-academy-kainouryion-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kainouryion-1')
    ->defaults('state', 'greece');

Route::get('/kaisariani/quran-academy-kaisariani-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kaisariani')
    ->defaults('state', 'greece');

Route::get('/kalamaria/quran-academy-kalamaria-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kalamaria')
    ->defaults('state', 'greece');

Route::get('/kalamata/quran-academy-kalamata-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kalamata')
    ->defaults('state', 'greece');

Route::get('/kalamia/quran-academy-kalamia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kalamia')
    ->defaults('state', 'greece');

Route::get('/kalampaka/quran-academy-kalampaka-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kalampaka')
    ->defaults('state', 'greece');

Route::get('/kalampaki/quran-academy-kalampaki-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kalampaki')
    ->defaults('state', 'greece');

Route::get('/kallifoni/quran-academy-kallifoni-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kallifoni')
    ->defaults('state', 'greece');

Route::get('/kallithea/quran-academy-kallithea-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kallithea')
    ->defaults('state', 'greece');

Route::get('/kallithea-1/quran-academy-kallithea-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kallithea-1')
    ->defaults('state', 'greece');

Route::get('/kallifytos/quran-academy-kallifytos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kallifytos')
    ->defaults('state', 'greece');

Route::get('/kallithiro/quran-academy-kallithiro-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kallithiro')
    ->defaults('state', 'greece');

Route::get('/kalochori/quran-academy-kalochori-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kalochori')
    ->defaults('state', 'greece');

Route::get('/kalpaki/quran-academy-kalpaki-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kalpaki')
    ->defaults('state', 'greece');

Route::get('/kala-dendra/quran-academy-kala-dendra-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kala-dendra')
    ->defaults('state', 'greece');

Route::get('/kalavryta/quran-academy-kalavryta-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kalavryta')
    ->defaults('state', 'greece');

Route::get('/kali/quran-academy-kali-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kali')
    ->defaults('state', 'greece');

Route::get('/kali-vrysi/quran-academy-kali-vrysi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kali-vrysi')
    ->defaults('state', 'greece');

Route::get('/kalos-agros/quran-academy-kalos-agros-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kalos-agros')
    ->defaults('state', 'greece');

Route::get('/kalyves/quran-academy-kalyves-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kalyves')
    ->defaults('state', 'greece');

Route::get('/kalyves-polygyrou/quran-academy-kalyves-polygyrou-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kalyves-polygyrou')
    ->defaults('state', 'greece');

Route::get('/kalyvia/quran-academy-kalyvia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kalyvia')
    ->defaults('state', 'greece');

Route::get('/kalyvia-thorikou/quran-academy-kalyvia-thorikou-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kalyvia-thorikou')
    ->defaults('state', 'greece');

Route::get('/kamariotissa/quran-academy-kamariotissa-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kamariotissa')
    ->defaults('state', 'greece');

Route::get('/kamateron/quran-academy-kamateron-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kamateron')
    ->defaults('state', 'greece');

Route::get('/kampanis/quran-academy-kampanis-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kampanis')
    ->defaults('state', 'greece');

Route::get('/kamarai/quran-academy-kamarai-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kamarai')
    ->defaults('state', 'greece');

Route::get('/kamena-vourla/quran-academy-kamena-vourla-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kamena-vourla')
    ->defaults('state', 'greece');

Route::get('/kanalaki/quran-academy-kanalaki-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kanalaki')
    ->defaults('state', 'greece');

Route::get('/kandila/quran-academy-kandila-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kandila')
    ->defaults('state', 'greece');

Route::get('/kanali/quran-academy-kanali-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kanali')
    ->defaults('state', 'greece');

Route::get('/kanalia/quran-academy-kanalia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kanalia')
    ->defaults('state', 'greece');

Route::get('/kapandriti/quran-academy-kapandriti-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kapandriti')
    ->defaults('state', 'greece');

Route::get('/kaparellion/quran-academy-kaparellion-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kaparellion')
    ->defaults('state', 'greece');

Route::get('/kardamas/quran-academy-kardamas-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kardamas')
    ->defaults('state', 'greece');

Route::get('/kardamitsia/quran-academy-kardamitsia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kardamitsia')
    ->defaults('state', 'greece');

Route::get('/kardamyli/quran-academy-kardamyli-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kardamyli')
    ->defaults('state', 'greece');

Route::get('/karditsomagoula/quran-academy-karditsomagoula-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'karditsomagoula')
    ->defaults('state', 'greece');

Route::get('/kardia/quran-academy-kardia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kardia')
    ->defaults('state', 'greece');

Route::get('/kardamaina/quran-academy-kardamaina-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kardamaina')
    ->defaults('state', 'greece');

Route::get('/karditsa/quran-academy-karditsa-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'karditsa')
    ->defaults('state', 'greece');

Route::get('/karellas/quran-academy-karellas-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'karellas')
    ->defaults('state', 'greece');

Route::get('/karpathos/quran-academy-karpathos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'karpathos')
    ->defaults('state', 'greece');

Route::get('/karpenisi/quran-academy-karpenisi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'karpenisi')
    ->defaults('state', 'greece');

Route::get('/karpochori/quran-academy-karpochori-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'karpochori')
    ->defaults('state', 'greece');

Route::get('/karyes/quran-academy-karyes-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'karyes')
    ->defaults('state', 'greece');

Route::get('/karyotissa/quran-academy-karyotissa-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'karyotissa')
    ->defaults('state', 'greece');

Route::get('/karatoula/quran-academy-karatoula-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'karatoula')
    ->defaults('state', 'greece');

Route::get('/karitsa/quran-academy-karitsa-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'karitsa')
    ->defaults('state', 'greece');

Route::get('/kassandreia/quran-academy-kassandreia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kassandreia')
    ->defaults('state', 'greece');

Route::get('/kastanies/quran-academy-kastanies-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kastanies')
    ->defaults('state', 'greece');

Route::get('/kastoria/quran-academy-kastoria-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kastoria')
    ->defaults('state', 'greece');

Route::get('/kastraki/quran-academy-kastraki-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kastraki')
    ->defaults('state', 'greece');

Route::get('/kastri/quran-academy-kastri-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kastri')
    ->defaults('state', 'greece');

Route::get('/kastella/quran-academy-kastella-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kastella')
    ->defaults('state', 'greece');

Route::get('/kastelli/quran-academy-kastelli-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kastelli')
    ->defaults('state', 'greece');

Route::get('/katastarion/quran-academy-katastarion-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'katastarion')
    ->defaults('state', 'greece');

Route::get('/katerini/quran-academy-katerini-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'katerini')
    ->defaults('state', 'greece');

Route::get('/katochi/quran-academy-katochi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'katochi')
    ->defaults('state', 'greece');

Route::get('/katouna/quran-academy-katouna-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'katouna')
    ->defaults('state', 'greece');

Route::get('/katsikas/quran-academy-katsikas-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'katsikas')
    ->defaults('state', 'greece');

Route::get('/kavallari/quran-academy-kavallari-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kavallari')
    ->defaults('state', 'greece');

Route::get('/kavala/quran-academy-kavala-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kavala')
    ->defaults('state', 'greece');

Route::get('/kavasila/quran-academy-kavasila-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kavasila')
    ->defaults('state', 'greece');

Route::get('/kavyli/quran-academy-kavyli-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kavyli')
    ->defaults('state', 'greece');

Route::get('/kentri/quran-academy-kentri-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kentri')
    ->defaults('state', 'greece');

Route::get('/keramoti/quran-academy-keramoti-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'keramoti')
    ->defaults('state', 'greece');

Route::get('/kerasochori/quran-academy-kerasochori-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kerasochori')
    ->defaults('state', 'greece');

Route::get('/keratsini/quran-academy-keratsini-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'keratsini')
    ->defaults('state', 'greece');

Route::get('/keratea/quran-academy-keratea-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'keratea')
    ->defaults('state', 'greece');

Route::get('/khalkoutsion/quran-academy-khalkoutsion-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'khalkoutsion')
    ->defaults('state', 'greece');

Route::get('/khalandrion/quran-academy-khalandrion-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'khalandrion')
    ->defaults('state', 'greece');

Route::get('/khiliomodhi/quran-academy-khiliomodhi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'khiliomodhi')
    ->defaults('state', 'greece');

Route::get('/kifisia/quran-academy-kifisia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kifisia')
    ->defaults('state', 'greece');

Route::get('/kilkis/quran-academy-kilkis-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kilkis')
    ->defaults('state', 'greece');

Route::get('/kimmeria/quran-academy-kimmeria-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kimmeria')
    ->defaults('state', 'greece');

Route::get('/kineta/quran-academy-kineta-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kineta')
    ->defaults('state', 'greece');

Route::get('/kipseli/quran-academy-kipseli-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kipseli')
    ->defaults('state', 'greece');

Route::get('/kiato/quran-academy-kiato-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kiato')
    ->defaults('state', 'greece');

Route::get('/kleidi/quran-academy-kleidi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kleidi')
    ->defaults('state', 'greece');

Route::get('/kleitos/quran-academy-kleitos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kleitos')
    ->defaults('state', 'greece');

Route::get('/koilas/quran-academy-koilas-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'koilas')
    ->defaults('state', 'greece');

Route::get('/kokkinochoma/quran-academy-kokkinochoma-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kokkinochoma')
    ->defaults('state', 'greece');

Route::get('/kokkini-chani/quran-academy-kokkini-chani-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kokkini-chani')
    ->defaults('state', 'greece');

Route::get('/kokkonion/quran-academy-kokkonion-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kokkonion')
    ->defaults('state', 'greece');

Route::get('/kolchikon/quran-academy-kolchikon-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kolchikon')
    ->defaults('state', 'greece');

Route::get('/kolindros/quran-academy-kolindros-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kolindros')
    ->defaults('state', 'greece');

Route::get('/kolympari/quran-academy-kolympari-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kolympari')
    ->defaults('state', 'greece');

Route::get('/komnina/quran-academy-komnina-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'komnina')
    ->defaults('state', 'greece');

Route::get('/komotini/quran-academy-komotini-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'komotini')
    ->defaults('state', 'greece');

Route::get('/kompoti/quran-academy-kompoti-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kompoti')
    ->defaults('state', 'greece');

Route::get('/kontariotissa/quran-academy-kontariotissa-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kontariotissa')
    ->defaults('state', 'greece');

Route::get('/kontokali/quran-academy-kontokali-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kontokali')
    ->defaults('state', 'greece');

Route::get('/kopanaki/quran-academy-kopanaki-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kopanaki')
    ->defaults('state', 'greece');

Route::get('/kopanos/quran-academy-kopanos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kopanos')
    ->defaults('state', 'greece');

Route::get('/korinos/quran-academy-korinos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'korinos')
    ->defaults('state', 'greece');

Route::get('/koropi/quran-academy-koropi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'koropi')
    ->defaults('state', 'greece');

Route::get('/korydallos/quran-academy-korydallos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'korydallos')
    ->defaults('state', 'greece');

Route::get('/koryfi/quran-academy-koryfi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'koryfi')
    ->defaults('state', 'greece');

Route::get('/koroni/quran-academy-koroni-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'koroni')
    ->defaults('state', 'greece');

Route::get('/kos/quran-academy-kos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kos')
    ->defaults('state', 'greece');

Route::get('/kostakioi/quran-academy-kostakioi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kostakioi')
    ->defaults('state', 'greece');

Route::get('/koufalia/quran-academy-koufalia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'koufalia')
    ->defaults('state', 'greece');

Route::get('/kouloura/quran-academy-kouloura-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kouloura')
    ->defaults('state', 'greece');

Route::get('/koutselio/quran-academy-koutselio-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'koutselio')
    ->defaults('state', 'greece');

Route::get('/koutsopodi/quran-academy-koutsopodi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'koutsopodi')
    ->defaults('state', 'greece');

Route::get('/kouvaras/quran-academy-kouvaras-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kouvaras')
    ->defaults('state', 'greece');

Route::get('/kozani/quran-academy-kozani-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kozani')
    ->defaults('state', 'greece');

Route::get('/koila/quran-academy-koila-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'koila')
    ->defaults('state', 'greece');

Route::get('/koimisi/quran-academy-koimisi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'koimisi')
    ->defaults('state', 'greece');

Route::get('/kranidi/quran-academy-kranidi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kranidi')
    ->defaults('state', 'greece');

Route::get('/kremasti/quran-academy-kremasti-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kremasti')
    ->defaults('state', 'greece');

Route::get('/krinides/quran-academy-krinides-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'krinides')
    ->defaults('state', 'greece');

Route::get('/krithia/quran-academy-krithia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'krithia')
    ->defaults('state', 'greece');

Route::get('/kritsa/quran-academy-kritsa-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kritsa')
    ->defaults('state', 'greece');

Route::get('/krokees/quran-academy-krokees-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'krokees')
    ->defaults('state', 'greece');

Route::get('/krouson/quran-academy-krouson-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'krouson')
    ->defaults('state', 'greece');

Route::get('/kryoneri/quran-academy-kryoneri-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kryoneri')
    ->defaults('state', 'greece');

Route::get('/krestena/quran-academy-krestena-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'krestena')
    ->defaults('state', 'greece');

Route::get('/krikellos/quran-academy-krikellos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'krikellos')
    ->defaults('state', 'greece');

Route::get('/krokos/quran-academy-krokos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'krokos')
    ->defaults('state', 'greece');

Route::get('/krya-vrysi/quran-academy-krya-vrysi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'krya-vrysi')
    ->defaults('state', 'greece');

Route::get('/kyllini/quran-academy-kyllini-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kyllini')
    ->defaults('state', 'greece');

Route::get('/kynopiastes/quran-academy-kynopiastes-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kynopiastes')
    ->defaults('state', 'greece');

Route::get('/kyparissia/quran-academy-kyparissia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kyparissia')
    ->defaults('state', 'greece');

Route::get('/kyprinos/quran-academy-kyprinos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kyprinos')
    ->defaults('state', 'greece');

Route::get('/kypseli/quran-academy-kypseli-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kypseli')
    ->defaults('state', 'greece');

Route::get('/kyriaki/quran-academy-kyriaki-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kyriaki')
    ->defaults('state', 'greece');

Route::get('/kyras-vrysi/quran-academy-kyras-vrysi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kyras-vrysi')
    ->defaults('state', 'greece');

Route::get('/kalamos/quran-academy-kalamos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kalamos')
    ->defaults('state', 'greece');

Route::get('/kalymnos/quran-academy-kalymnos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kalymnos')
    ->defaults('state', 'greece');

Route::get('/karystos/quran-academy-karystos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'karystos')
    ->defaults('state', 'greece');

Route::get('/kato-achaa/quran-academy-kato-achaa-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kato-achaa')
    ->defaults('state', 'greece');

Route::get('/kato-asitai/quran-academy-kato-asitai-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kato-asitai')
    ->defaults('state', 'greece');

Route::get('/kato-dhiminio/quran-academy-kato-dhiminio-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kato-dhiminio')
    ->defaults('state', 'greece');

Route::get('/kato-glykovrysi/quran-academy-kato-glykovrysi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kato-glykovrysi')
    ->defaults('state', 'greece');

Route::get('/kato-gouves/quran-academy-kato-gouves-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kato-gouves')
    ->defaults('state', 'greece');

Route::get('/kato-kamila/quran-academy-kato-kamila-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kato-kamila')
    ->defaults('state', 'greece');

Route::get('/kato-lekhonia/quran-academy-kato-lekhonia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kato-lekhonia')
    ->defaults('state', 'greece');

Route::get('/kato-lipochori/quran-academy-kato-lipochori-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kato-lipochori')
    ->defaults('state', 'greece');

Route::get('/kato-mazaraki/quran-academy-kato-mazaraki-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kato-mazaraki')
    ->defaults('state', 'greece');

Route::get('/kato-milia/quran-academy-kato-milia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kato-milia')
    ->defaults('state', 'greece');

Route::get('/kato-nevrokopi/quran-academy-kato-nevrokopi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kato-nevrokopi')
    ->defaults('state', 'greece');

Route::get('/kato-scholari/quran-academy-kato-scholari-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kato-scholari')
    ->defaults('state', 'greece');

Route::get('/kato-soulion/quran-academy-kato-soulion-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kato-soulion')
    ->defaults('state', 'greece');

Route::get('/kato-tithorea/quran-academy-kato-tithorea-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kato-tithorea')
    ->defaults('state', 'greece');

Route::get('/kefalos/quran-academy-kefalos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kefalos')
    ->defaults('state', 'greece');

Route::get('/kimolos/quran-academy-kimolos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kimolos')
    ->defaults('state', 'greece');

Route::get('/kirra/quran-academy-kirra-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kirra')
    ->defaults('state', 'greece');

Route::get('/kissamos/quran-academy-kissamos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kissamos')
    ->defaults('state', 'greece');

Route::get('/kitros/quran-academy-kitros-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kitros')
    ->defaults('state', 'greece');

Route::get('/kitsi/quran-academy-kitsi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kitsi')
    ->defaults('state', 'greece');

Route::get('/konitsa/quran-academy-konitsa-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'konitsa')
    ->defaults('state', 'greece');

Route::get('/korinthos/quran-academy-korinthos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'korinthos')
    ->defaults('state', 'greece');

Route::get('/kymi/quran-academy-kymi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kymi')
    ->defaults('state', 'greece');

Route::get('/kymina/quran-academy-kymina-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kymina')
    ->defaults('state', 'greece');

Route::get('/kyria/quran-academy-kyria-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kyria')
    ->defaults('state', 'greece');

Route::get('/kythira/quran-academy-kythira-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kythira')
    ->defaults('state', 'greece');

Route::get('/kythnos/quran-academy-kythnos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kythnos')
    ->defaults('state', 'greece');

Route::get('/lagkadas/quran-academy-lagkadas-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lagkadas')
    ->defaults('state', 'greece');

Route::get('/lagyna/quran-academy-lagyna-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lagyna')
    ->defaults('state', 'greece');

Route::get('/lagos/quran-academy-lagos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lagos')
    ->defaults('state', 'greece');

Route::get('/laimos/quran-academy-laimos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'laimos')
    ->defaults('state', 'greece');

Route::get('/lakki/quran-academy-lakki-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lakki')
    ->defaults('state', 'greece');

Route::get('/lamia/quran-academy-lamia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lamia')
    ->defaults('state', 'greece');

Route::get('/langadhia/quran-academy-langadhia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'langadhia')
    ->defaults('state', 'greece');

Route::get('/lechaina/quran-academy-lechaina-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lechaina')
    ->defaults('state', 'greece');

Route::get('/lefkada/quran-academy-lefkada-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lefkada')
    ->defaults('state', 'greece');

Route::get('/lefkimmi/quran-academy-lefkimmi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lefkimmi')
    ->defaults('state', 'greece');

Route::get('/lefkonas/quran-academy-lefkonas-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lefkonas')
    ->defaults('state', 'greece');

Route::get('/leondarion/quran-academy-leondarion-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'leondarion')
    ->defaults('state', 'greece');

Route::get('/leonidio/quran-academy-leonidio-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'leonidio')
    ->defaults('state', 'greece');

Route::get('/lepenou/quran-academy-lepenou-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lepenou')
    ->defaults('state', 'greece');

Route::get('/leptokarya/quran-academy-leptokarya-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'leptokarya')
    ->defaults('state', 'greece');

Route::get('/levidion/quran-academy-levidion-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'levidion')
    ->defaults('state', 'greece');

Route::get('/lianokladhion/quran-academy-lianokladhion-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lianokladhion')
    ->defaults('state', 'greece');

Route::get('/lianovergi/quran-academy-lianovergi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lianovergi')
    ->defaults('state', 'greece');

Route::get('/lidoriki/quran-academy-lidoriki-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lidoriki')
    ->defaults('state', 'greece');

Route::get('/ligourion/quran-academy-ligourion-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ligourion')
    ->defaults('state', 'greece');

Route::get('/limenaria/quran-academy-limenaria-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'limenaria')
    ->defaults('state', 'greece');

Route::get('/limnokhorion/quran-academy-limnokhorion-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'limnokhorion')
    ->defaults('state', 'greece');

Route::get('/limin-khersonisou/quran-academy-limin-khersonisou-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'limin-khersonisou')
    ->defaults('state', 'greece');

Route::get('/limin-mesoyaias/quran-academy-limin-mesoyaias-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'limin-mesoyaias')
    ->defaults('state', 'greece');

Route::get('/lithakia/quran-academy-lithakia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lithakia')
    ->defaults('state', 'greece');

Route::get('/liti/quran-academy-liti-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'liti')
    ->defaults('state', 'greece');

Route::get('/litochoro/quran-academy-litochoro-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'litochoro')
    ->defaults('state', 'greece');

Route::get('/livadeia/quran-academy-livadeia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'livadeia')
    ->defaults('state', 'greece');

Route::get('/livadero/quran-academy-livadero-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'livadero')
    ->defaults('state', 'greece');

Route::get('/livanates/quran-academy-livanates-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'livanates')
    ->defaults('state', 'greece');

Route::get('/lixouri/quran-academy-lixouri-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lixouri')
    ->defaults('state', 'greece');

Route::get('/loukisia/quran-academy-loukisia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'loukisia')
    ->defaults('state', 'greece');

Route::get('/loutra-aidhipsou/quran-academy-loutra-aidhipsou-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'loutra-aidhipsou')
    ->defaults('state', 'greece');

Route::get('/loutra-oraias-elenis/quran-academy-loutra-oraias-elenis-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'loutra-oraias-elenis')
    ->defaults('state', 'greece');

Route::get('/loutraki/quran-academy-loutraki-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'loutraki')
    ->defaults('state', 'greece');

Route::get('/loutraki-1/quran-academy-loutraki-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'loutraki-1')
    ->defaults('state', 'greece');

Route::get('/loutros/quran-academy-loutros-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'loutros')
    ->defaults('state', 'greece');

Route::get('/louros/quran-academy-louros-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'louros')
    ->defaults('state', 'greece');

Route::get('/lykovrysi/quran-academy-lykovrysi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lykovrysi')
    ->defaults('state', 'greece');

Route::get('/lakkoma/quran-academy-lakkoma-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lakkoma')
    ->defaults('state', 'greece');

Route::get('/lalas/quran-academy-lalas-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lalas')
    ->defaults('state', 'greece');

Route::get('/lapas/quran-academy-lapas-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lapas')
    ->defaults('state', 'greece');

Route::get('/lardos/quran-academy-lardos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lardos')
    ->defaults('state', 'greece');

Route::get('/lavara/quran-academy-lavara-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lavara')
    ->defaults('state', 'greece');

Route::get('/lavrio/quran-academy-lavrio-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lavrio')
    ->defaults('state', 'greece');

Route::get('/lechovo/quran-academy-lechovo-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lechovo')
    ->defaults('state', 'greece');

Route::get('/lekhaio/quran-academy-lekhaio-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lekhaio')
    ->defaults('state', 'greece');

Route::get('/limni/quran-academy-limni-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'limni')
    ->defaults('state', 'greece');

Route::get('/lofos/quran-academy-lofos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lofos')
    ->defaults('state', 'greece');

Route::get('/lykeio/quran-academy-lykeio-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lykeio')
    ->defaults('state', 'greece');

Route::get('/magoula/quran-academy-magoula-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'magoula')
    ->defaults('state', 'greece');

Route::get('/magoula-1/quran-academy-magoula-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'magoula-1')
    ->defaults('state', 'greece');

Route::get('/magoula-2/quran-academy-magoula-2-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'magoula-2')
    ->defaults('state', 'greece');

Route::get('/magoula-3/quran-academy-magoula-3-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'magoula-3')
    ->defaults('state', 'greece');

Route::get('/makrakomi/quran-academy-makrakomi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'makrakomi')
    ->defaults('state', 'greece');

Route::get('/makrochori/quran-academy-makrochori-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'makrochori')
    ->defaults('state', 'greece');

Route::get('/makrychori/quran-academy-makrychori-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'makrychori')
    ->defaults('state', 'greece');

Route::get('/makrisia/quran-academy-makrisia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'makrisia')
    ->defaults('state', 'greece');

Route::get('/makrygialos/quran-academy-makrygialos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'makrygialos')
    ->defaults('state', 'greece');

Route::get('/malakonta/quran-academy-malakonta-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'malakonta')
    ->defaults('state', 'greece');

Route::get('/malesina/quran-academy-malesina-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'malesina')
    ->defaults('state', 'greece');

Route::get('/mandraki/quran-academy-mandraki-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mandraki')
    ->defaults('state', 'greece');

Route::get('/maniakoi/quran-academy-maniakoi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'maniakoi')
    ->defaults('state', 'greece');

Route::get('/manolada/quran-academy-manolada-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'manolada')
    ->defaults('state', 'greece');

Route::get('/mantoudi/quran-academy-mantoudi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mantoudi')
    ->defaults('state', 'greece');

Route::get('/marathonas/quran-academy-marathonas-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'marathonas')
    ->defaults('state', 'greece');

Route::get('/markopoulo/quran-academy-markopoulo-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'markopoulo')
    ->defaults('state', 'greece');

Route::get('/markopoulo-oropou/quran-academy-markopoulo-oropou-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'markopoulo-oropou')
    ->defaults('state', 'greece');

Route::get('/marmarion/quran-academy-marmarion-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'marmarion')
    ->defaults('state', 'greece');

Route::get('/marousi/quran-academy-marousi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'marousi')
    ->defaults('state', 'greece');

Route::get('/martinon/quran-academy-martinon-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'martinon')
    ->defaults('state', 'greece');

Route::get('/marina/quran-academy-marina-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'marina')
    ->defaults('state', 'greece');

Route::get('/mataranga/quran-academy-mataranga-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mataranga')
    ->defaults('state', 'greece');

Route::get('/mavrochori/quran-academy-mavrochori-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mavrochori')
    ->defaults('state', 'greece');

Route::get('/mavrommati/quran-academy-mavrommati-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mavrommati')
    ->defaults('state', 'greece');

Route::get('/mavrothalassa/quran-academy-mavrothalassa-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mavrothalassa')
    ->defaults('state', 'greece');

Route::get('/mavrovouni/quran-academy-mavrovouni-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mavrovouni')
    ->defaults('state', 'greece');

Route::get('/megalochori/quran-academy-megalochori-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'megalochori')
    ->defaults('state', 'greece');

Route::get('/megalochori-1/quran-academy-megalochori-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'megalochori-1')
    ->defaults('state', 'greece');

Route::get('/megalopoli/quran-academy-megalopoli-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'megalopoli')
    ->defaults('state', 'greece');

Route::get('/megala-kalyvia/quran-academy-megala-kalyvia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'megala-kalyvia')
    ->defaults('state', 'greece');

Route::get('/megali-khora/quran-academy-megali-khora-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'megali-khora')
    ->defaults('state', 'greece');

Route::get('/megali-panagia/quran-academy-megali-panagia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'megali-panagia')
    ->defaults('state', 'greece');

Route::get('/megalo-chorio/quran-academy-megalo-chorio-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'megalo-chorio')
    ->defaults('state', 'greece');

Route::get('/megisti/quran-academy-megisti-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'megisti')
    ->defaults('state', 'greece');

Route::get('/meligalas/quran-academy-meligalas-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'meligalas')
    ->defaults('state', 'greece');

Route::get('/melissochori/quran-academy-melissochori-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'melissochori')
    ->defaults('state', 'greece');

Route::get('/meliki/quran-academy-meliki-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'meliki')
    ->defaults('state', 'greece');

Route::get('/melissi/quran-academy-melissi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'melissi')
    ->defaults('state', 'greece');

Route::get('/melissia/quran-academy-melissia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'melissia')
    ->defaults('state', 'greece');

Route::get('/meliti/quran-academy-meliti-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'meliti')
    ->defaults('state', 'greece');

Route::get('/menemeni/quran-academy-menemeni-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'menemeni')
    ->defaults('state', 'greece');

Route::get('/menidi/quran-academy-menidi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'menidi')
    ->defaults('state', 'greece');

Route::get('/mesaria/quran-academy-mesaria-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mesaria')
    ->defaults('state', 'greece');

Route::get('/mesimeri/quran-academy-mesimeri-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mesimeri')
    ->defaults('state', 'greece');

Route::get('/mesolongi/quran-academy-mesolongi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mesolongi')
    ->defaults('state', 'greece');

Route::get('/mesopotamia/quran-academy-mesopotamia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mesopotamia')
    ->defaults('state', 'greece');

Route::get('/messini/quran-academy-messini-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'messini')
    ->defaults('state', 'greece');

Route::get('/metamorfosi/quran-academy-metamorfosi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'metamorfosi')
    ->defaults('state', 'greece');

Route::get('/methoni/quran-academy-methoni-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'methoni')
    ->defaults('state', 'greece');

Route::get('/metsovo/quran-academy-metsovo-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'metsovo')
    ->defaults('state', 'greece');

Route::get('/mikro-monastiri/quran-academy-mikro-monastiri-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mikro-monastiri')
    ->defaults('state', 'greece');

Route::get('/mikropolis/quran-academy-mikropolis-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mikropolis')
    ->defaults('state', 'greece');

Route::get('/mindiloglion/quran-academy-mindiloglion-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mindiloglion')
    ->defaults('state', 'greece');

Route::get('/mitrousi/quran-academy-mitrousi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mitrousi')
    ->defaults('state', 'greece');

Route::get('/mitropoli/quran-academy-mitropoli-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mitropoli')
    ->defaults('state', 'greece');

Route::get('/mokhos/quran-academy-mokhos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mokhos')
    ->defaults('state', 'greece');

Route::get('/molaoi/quran-academy-molaoi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'molaoi')
    ->defaults('state', 'greece');

Route::get('/monastiraki/quran-academy-monastiraki-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'monastiraki')
    ->defaults('state', 'greece');

Route::get('/morfovouni/quran-academy-morfovouni-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'morfovouni')
    ->defaults('state', 'greece');

Route::get('/moskhaton/quran-academy-moskhaton-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'moskhaton')
    ->defaults('state', 'greece');

Route::get('/mournies/quran-academy-mournies-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mournies')
    ->defaults('state', 'greece');

Route::get('/mouzaki/quran-academy-mouzaki-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mouzaki')
    ->defaults('state', 'greece');

Route::get('/mouzouras/quran-academy-mouzouras-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mouzouras')
    ->defaults('state', 'greece');

Route::get('/mouzaki-1/quran-academy-mouzaki-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mouzaki-1')
    ->defaults('state', 'greece');

Route::get('/moires/quran-academy-moires-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'moires')
    ->defaults('state', 'greece');

Route::get('/moulki/quran-academy-moulki-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'moulki')
    ->defaults('state', 'greece');

Route::get('/mykonos/quran-academy-mykonos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mykonos')
    ->defaults('state', 'greece');

Route::get('/myrsini/quran-academy-myrsini-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'myrsini')
    ->defaults('state', 'greece');

Route::get('/mytikas/quran-academy-mytikas-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mytikas')
    ->defaults('state', 'greece');

Route::get('/malia/quran-academy-malia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'malia')
    ->defaults('state', 'greece');

Route::get('/mandalo/quran-academy-mandalo-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mandalo')
    ->defaults('state', 'greece');

Route::get('/mandra/quran-academy-mandra-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mandra')
    ->defaults('state', 'greece');

Route::get('/megara/quran-academy-megara-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'megara')
    ->defaults('state', 'greece');

Route::get('/milos/quran-academy-milos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'milos')
    ->defaults('state', 'greece');

Route::get('/molos/quran-academy-molos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'molos')
    ->defaults('state', 'greece');

Route::get('/myki/quran-academy-myki-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'myki')
    ->defaults('state', 'greece');

Route::get('/nea-lava/quran-academy-nea-lava-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-lava')
    ->defaults('state', 'greece');

Route::get('/neapoli/quran-academy-neapoli-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'neapoli')
    ->defaults('state', 'greece');

Route::get('/nemea/quran-academy-nemea-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nemea')
    ->defaults('state', 'greece');

Route::get('/neochorouda/quran-academy-neochorouda-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'neochorouda')
    ->defaults('state', 'greece');

Route::get('/neochoropoulo/quran-academy-neochoropoulo-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'neochoropoulo')
    ->defaults('state', 'greece');

Route::get('/neochori/quran-academy-neochori-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'neochori')
    ->defaults('state', 'greece');

Route::get('/neochori-1/quran-academy-neochori-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'neochori-1')
    ->defaults('state', 'greece');

Route::get('/neochori-2/quran-academy-neochori-2-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'neochori-2')
    ->defaults('state', 'greece');

Route::get('/neochori-3/quran-academy-neochori-3-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'neochori-3')
    ->defaults('state', 'greece');

Route::get('/neochorion/quran-academy-neochorion-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'neochorion')
    ->defaults('state', 'greece');

Route::get('/neos-voutzas/quran-academy-neos-voutzas-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'neos-voutzas')
    ->defaults('state', 'greece');

Route::get('/nerokouros/quran-academy-nerokouros-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nerokouros')
    ->defaults('state', 'greece');

Route::get('/nestorio/quran-academy-nestorio-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nestorio')
    ->defaults('state', 'greece');

Route::get('/neapoli-1/quran-academy-neapoli-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'neapoli-1')
    ->defaults('state', 'greece');

Route::get('/neapolis/quran-academy-neapolis-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'neapolis')
    ->defaults('state', 'greece');

Route::get('/nigrita/quran-academy-nigrita-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nigrita')
    ->defaults('state', 'greece');

Route::get('/nikisiani/quran-academy-nikisiani-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nikisiani')
    ->defaults('state', 'greece');

Route::get('/nisi/quran-academy-nisi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nisi')
    ->defaults('state', 'greece');

Route::get('/nomos-achaas/quran-academy-nomos-achaas-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nomos-achaas')
    ->defaults('state', 'greece');

Route::get('/nomos-aitolias-kai-akarnanias/quran-academy-nomos-aitolias-kai-akarnanias-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nomos-aitolias-kai-akarnanias')
    ->defaults('state', 'greece');

Route::get('/nomos-arkadias/quran-academy-nomos-arkadias-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nomos-arkadias')
    ->defaults('state', 'greece');

Route::get('/nomos-chalkidikis/quran-academy-nomos-chalkidikis-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nomos-chalkidikis')
    ->defaults('state', 'greece');

Route::get('/nomos-evrytanias/quran-academy-nomos-evrytanias-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nomos-evrytanias')
    ->defaults('state', 'greece');

Route::get('/nomos-fokidos/quran-academy-nomos-fokidos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nomos-fokidos')
    ->defaults('state', 'greece');

Route::get('/nomos-ileias/quran-academy-nomos-ileias-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nomos-ileias')
    ->defaults('state', 'greece');

Route::get('/nomos-ioanninon/quran-academy-nomos-ioanninon-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nomos-ioanninon')
    ->defaults('state', 'greece');

Route::get('/nomos-irakleiou/quran-academy-nomos-irakleiou-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nomos-irakleiou')
    ->defaults('state', 'greece');

Route::get('/nomos-kerkyras/quran-academy-nomos-kerkyras-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nomos-kerkyras')
    ->defaults('state', 'greece');

Route::get('/nomos-kozanis/quran-academy-nomos-kozanis-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nomos-kozanis')
    ->defaults('state', 'greece');

Route::get('/nomos-kykladon/quran-academy-nomos-kykladon-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nomos-kykladon')
    ->defaults('state', 'greece');

Route::get('/nomos-pellis/quran-academy-nomos-pellis-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nomos-pellis')
    ->defaults('state', 'greece');

Route::get('/nomos-rethymnis/quran-academy-nomos-rethymnis-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nomos-rethymnis')
    ->defaults('state', 'greece');

Route::get('/nomos-thessalonikis/quran-academy-nomos-thessalonikis-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nomos-thessalonikis')
    ->defaults('state', 'greece');

Route::get('/nomos-zakynthou/quran-academy-nomos-zakynthou-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nomos-zakynthou')
    ->defaults('state', 'greece');

Route::get('/nafpaktos/quran-academy-nafpaktos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nafpaktos')
    ->defaults('state', 'greece');

Route::get('/nafplio/quran-academy-nafplio-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nafplio')
    ->defaults('state', 'greece');

Route::get('/naousa/quran-academy-naousa-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'naousa')
    ->defaults('state', 'greece');

Route::get('/naousa-1/quran-academy-naousa-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'naousa-1')
    ->defaults('state', 'greece');

Route::get('/naxos/quran-academy-naxos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'naxos')
    ->defaults('state', 'greece');

Route::get('/nea-alikarnassos/quran-academy-nea-alikarnassos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-alikarnassos')
    ->defaults('state', 'greece');

Route::get('/nea-anatoli/quran-academy-nea-anatoli-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-anatoli')
    ->defaults('state', 'greece');

Route::get('/nea-anchialos/quran-academy-nea-anchialos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-anchialos')
    ->defaults('state', 'greece');

Route::get('/nea-apollonia/quran-academy-nea-apollonia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-apollonia')
    ->defaults('state', 'greece');

Route::get('/nea-artaki/quran-academy-nea-artaki-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-artaki')
    ->defaults('state', 'greece');

Route::get('/nea-chalkidona/quran-academy-nea-chalkidona-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-chalkidona')
    ->defaults('state', 'greece');

Route::get('/nea-erythraia/quran-academy-nea-erythraia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-erythraia')
    ->defaults('state', 'greece');

Route::get('/nea-filadelfeia/quran-academy-nea-filadelfeia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-filadelfeia')
    ->defaults('state', 'greece');

Route::get('/nea-flogita/quran-academy-nea-flogita-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-flogita')
    ->defaults('state', 'greece');

Route::get('/nea-fokaia/quran-academy-nea-fokaia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-fokaia')
    ->defaults('state', 'greece');

Route::get('/nea-ionia/quran-academy-nea-ionia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-ionia')
    ->defaults('state', 'greece');

Route::get('/nea-ionia-1/quran-academy-nea-ionia-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-ionia-1')
    ->defaults('state', 'greece');

Route::get('/nea-iraklitsa/quran-academy-nea-iraklitsa-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-iraklitsa')
    ->defaults('state', 'greece');

Route::get('/nea-kallikrateia/quran-academy-nea-kallikrateia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-kallikrateia')
    ->defaults('state', 'greece');

Route::get('/nea-karvali/quran-academy-nea-karvali-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-karvali')
    ->defaults('state', 'greece');

Route::get('/nea-karya/quran-academy-nea-karya-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-karya')
    ->defaults('state', 'greece');

Route::get('/nea-kios/quran-academy-nea-kios-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-kios')
    ->defaults('state', 'greece');

Route::get('/nea-lampsakos/quran-academy-nea-lampsakos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-lampsakos')
    ->defaults('state', 'greece');

Route::get('/nea-magnisia/quran-academy-nea-magnisia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-magnisia')
    ->defaults('state', 'greece');

Route::get('/nea-manolada/quran-academy-nea-manolada-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-manolada')
    ->defaults('state', 'greece');

Route::get('/nea-mesimvria/quran-academy-nea-mesimvria-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-mesimvria')
    ->defaults('state', 'greece');

Route::get('/nea-michaniona/quran-academy-nea-michaniona-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-michaniona')
    ->defaults('state', 'greece');

Route::get('/nea-moudhania/quran-academy-nea-moudhania-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-moudhania')
    ->defaults('state', 'greece');

Route::get('/nea-makri/quran-academy-nea-makri-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-makri')
    ->defaults('state', 'greece');

Route::get('/nea-malgara/quran-academy-nea-malgara-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-malgara')
    ->defaults('state', 'greece');

Route::get('/nea-palatia/quran-academy-nea-palatia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-palatia')
    ->defaults('state', 'greece');

Route::get('/nea-penteli/quran-academy-nea-penteli-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-penteli')
    ->defaults('state', 'greece');

Route::get('/nea-plagia/quran-academy-nea-plagia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-plagia')
    ->defaults('state', 'greece');

Route::get('/nea-poteidaia/quran-academy-nea-poteidaia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-poteidaia')
    ->defaults('state', 'greece');

Route::get('/nea-potidhaia/quran-academy-nea-potidhaia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-potidhaia')
    ->defaults('state', 'greece');

Route::get('/nea-pella/quran-academy-nea-pella-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-pella')
    ->defaults('state', 'greece');

Route::get('/nea-peramos/quran-academy-nea-peramos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-peramos')
    ->defaults('state', 'greece');

Route::get('/nea-peramos-1/quran-academy-nea-peramos-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-peramos-1')
    ->defaults('state', 'greece');

Route::get('/nea-roda/quran-academy-nea-roda-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-roda')
    ->defaults('state', 'greece');

Route::get('/nea-selefkeia/quran-academy-nea-selefkeia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-selefkeia')
    ->defaults('state', 'greece');

Route::get('/nea-smyrni/quran-academy-nea-smyrni-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-smyrni')
    ->defaults('state', 'greece');

Route::get('/nea-stira/quran-academy-nea-stira-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-stira')
    ->defaults('state', 'greece');

Route::get('/nea-santa/quran-academy-nea-santa-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-santa')
    ->defaults('state', 'greece');

Route::get('/nea-triglia/quran-academy-nea-triglia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-triglia')
    ->defaults('state', 'greece');

Route::get('/nea-tirins/quran-academy-nea-tirins-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-tirins')
    ->defaults('state', 'greece');

Route::get('/nea-vrasna/quran-academy-nea-vrasna-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-vrasna')
    ->defaults('state', 'greece');

Route::get('/nea-vyssa/quran-academy-nea-vyssa-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-vyssa')
    ->defaults('state', 'greece');

Route::get('/nea-zichni/quran-academy-nea-zichni-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-zichni')
    ->defaults('state', 'greece');

Route::get('/nea-efesos/quran-academy-nea-efesos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nea-efesos')
    ->defaults('state', 'greece');

Route::get('/neo-agioneri/quran-academy-neo-agioneri-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'neo-agioneri')
    ->defaults('state', 'greece');

Route::get('/neo-petritsi/quran-academy-neo-petritsi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'neo-petritsi')
    ->defaults('state', 'greece');

Route::get('/neo-psychiko/quran-academy-neo-psychiko-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'neo-psychiko')
    ->defaults('state', 'greece');

Route::get('/neo-rysi/quran-academy-neo-rysi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'neo-rysi')
    ->defaults('state', 'greece');

Route::get('/neo-souli/quran-academy-neo-souli-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'neo-souli')
    ->defaults('state', 'greece');

Route::get('/neoi-epivates/quran-academy-neoi-epivates-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'neoi-epivates')
    ->defaults('state', 'greece');

Route::get('/neon-monastirion/quran-academy-neon-monastirion-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'neon-monastirion')
    ->defaults('state', 'greece');

Route::get('/neos-marmaras/quran-academy-neos-marmaras-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'neos-marmaras')
    ->defaults('state', 'greece');

Route::get('/neos-mylotopos/quran-academy-neos-mylotopos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'neos-mylotopos')
    ->defaults('state', 'greece');

Route::get('/neos-oropos/quran-academy-neos-oropos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'neos-oropos')
    ->defaults('state', 'greece');

Route::get('/neos-skopos/quran-academy-neos-skopos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'neos-skopos')
    ->defaults('state', 'greece');

Route::get('/nikaia/quran-academy-nikaia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nikaia')
    ->defaults('state', 'greece');

Route::get('/nikiti/quran-academy-nikiti-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nikiti')
    ->defaults('state', 'greece');

Route::get('/oichalia/quran-academy-oichalia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'oichalia')
    ->defaults('state', 'greece');

Route::get('/oinofyta/quran-academy-oinofyta-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'oinofyta')
    ->defaults('state', 'greece');

Route::get('/omvriaki/quran-academy-omvriaki-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'omvriaki')
    ->defaults('state', 'greece');

Route::get('/oraiokastro/quran-academy-oraiokastro-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'oraiokastro')
    ->defaults('state', 'greece');

Route::get('/orchomenos/quran-academy-orchomenos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'orchomenos')
    ->defaults('state', 'greece');

Route::get('/oreoi/quran-academy-oreoi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'oreoi')
    ->defaults('state', 'greece');

Route::get('/orestiada/quran-academy-orestiada-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'orestiada')
    ->defaults('state', 'greece');

Route::get('/ormylia/quran-academy-ormylia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ormylia')
    ->defaults('state', 'greece');

Route::get('/ornos/quran-academy-ornos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ornos')
    ->defaults('state', 'greece');

Route::get('/oropos/quran-academy-oropos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'oropos')
    ->defaults('state', 'greece');

Route::get('/ouranoupolis/quran-academy-ouranoupolis-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ouranoupolis')
    ->defaults('state', 'greece');

Route::get('/ovria/quran-academy-ovria-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ovria')
    ->defaults('state', 'greece');

Route::get('/oxilithos/quran-academy-oxilithos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'oxilithos')
    ->defaults('state', 'greece');

Route::get('/oia/quran-academy-oia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'oia')
    ->defaults('state', 'greece');

Route::get('/paiania/quran-academy-paiania-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'paiania')
    ->defaults('state', 'greece');

Route::get('/palaiochori/quran-academy-palaiochori-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'palaiochori')
    ->defaults('state', 'greece');

Route::get('/palaiochori-1/quran-academy-palaiochori-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'palaiochori-1')
    ->defaults('state', 'greece');

Route::get('/palaiokomi/quran-academy-palaiokomi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'palaiokomi')
    ->defaults('state', 'greece');

Route::get('/palaiomonastiro/quran-academy-palaiomonastiro-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'palaiomonastiro')
    ->defaults('state', 'greece');

Route::get('/palaia-epidavros/quran-academy-palaia-epidavros-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'palaia-epidavros')
    ->defaults('state', 'greece');

Route::get('/palaia-fokaia/quran-academy-palaia-fokaia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'palaia-fokaia')
    ->defaults('state', 'greece');

Route::get('/palaio-faliro/quran-academy-palaio-faliro-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'palaio-faliro')
    ->defaults('state', 'greece');

Route::get('/palaio-tsifliki/quran-academy-palaio-tsifliki-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'palaio-tsifliki')
    ->defaults('state', 'greece');

Route::get('/palaiochora/quran-academy-palaiochora-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'palaiochora')
    ->defaults('state', 'greece');

Route::get('/palaiopyrgos/quran-academy-palaiopyrgos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'palaiopyrgos')
    ->defaults('state', 'greece');

Route::get('/palamas/quran-academy-palamas-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'palamas')
    ->defaults('state', 'greece');

Route::get('/palaifyto/quran-academy-palaifyto-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'palaifyto')
    ->defaults('state', 'greece');

Route::get('/palekastro/quran-academy-palekastro-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'palekastro')
    ->defaults('state', 'greece');

Route::get('/pallini/quran-academy-pallini-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pallini')
    ->defaults('state', 'greece');

Route::get('/panaitolion/quran-academy-panaitolion-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'panaitolion')
    ->defaults('state', 'greece');

Route::get('/panorama/quran-academy-panorama-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'panorama')
    ->defaults('state', 'greece');

Route::get('/pappadhatai/quran-academy-pappadhatai-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pappadhatai')
    ->defaults('state', 'greece');

Route::get('/pappadates/quran-academy-pappadates-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pappadates')
    ->defaults('state', 'greece');

Route::get('/papagou/quran-academy-papagou-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'papagou')
    ->defaults('state', 'greece');

Route::get('/paralia/quran-academy-paralia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'paralia')
    ->defaults('state', 'greece');

Route::get('/paralia-1/quran-academy-paralia-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'paralia-1')
    ->defaults('state', 'greece');

Route::get('/paralia-avlidhos/quran-academy-paralia-avlidhos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'paralia-avlidhos')
    ->defaults('state', 'greece');

Route::get('/paralia-ofryniou/quran-academy-paralia-ofryniou-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'paralia-ofryniou')
    ->defaults('state', 'greece');

Route::get('/paralia-vergas/quran-academy-paralia-vergas-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'paralia-vergas')
    ->defaults('state', 'greece');

Route::get('/paramythia/quran-academy-paramythia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'paramythia')
    ->defaults('state', 'greece');

Route::get('/paranesti/quran-academy-paranesti-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'paranesti')
    ->defaults('state', 'greece');

Route::get('/parapotamos/quran-academy-parapotamos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'parapotamos')
    ->defaults('state', 'greece');

Route::get('/paravola/quran-academy-paravola-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'paravola')
    ->defaults('state', 'greece');

Route::get('/patitirion/quran-academy-patitirion-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'patitirion')
    ->defaults('state', 'greece');

Route::get('/patrida/quran-academy-patrida-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'patrida')
    ->defaults('state', 'greece');

Route::get('/pedini/quran-academy-pedini-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pedini')
    ->defaults('state', 'greece');

Route::get('/pefkochori/quran-academy-pefkochori-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pefkochori')
    ->defaults('state', 'greece');

Route::get('/pelasgia/quran-academy-pelasgia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pelasgia')
    ->defaults('state', 'greece');

Route::get('/pelopi/quran-academy-pelopi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pelopi')
    ->defaults('state', 'greece');

Route::get('/pentaplatano/quran-academy-pentaplatano-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pentaplatano')
    ->defaults('state', 'greece');

Route::get('/pentalofos/quran-academy-pentalofos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pentalofos')
    ->defaults('state', 'greece');

Route::get('/penteli/quran-academy-penteli-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'penteli')
    ->defaults('state', 'greece');

Route::get('/perachora/quran-academy-perachora-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'perachora')
    ->defaults('state', 'greece');

Route::get('/perama/quran-academy-perama-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'perama')
    ->defaults('state', 'greece');

Route::get('/peraia/quran-academy-peraia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'peraia')
    ->defaults('state', 'greece');

Route::get('/peristera/quran-academy-peristera-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'peristera')
    ->defaults('state', 'greece');

Route::get('/peristeri/quran-academy-peristeri-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'peristeri')
    ->defaults('state', 'greece');

Route::get('/perivoli/quran-academy-perivoli-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'perivoli')
    ->defaults('state', 'greece');

Route::get('/perivolia/quran-academy-perivolia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'perivolia')
    ->defaults('state', 'greece');

Route::get('/periyiali/quran-academy-periyiali-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'periyiali')
    ->defaults('state', 'greece');

Route::get('/peristasi/quran-academy-peristasi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'peristasi')
    ->defaults('state', 'greece');

Route::get('/peteinos/quran-academy-peteinos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'peteinos')
    ->defaults('state', 'greece');

Route::get('/petrochori/quran-academy-petrochori-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'petrochori')
    ->defaults('state', 'greece');

Route::get('/petroupolis/quran-academy-petroupolis-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'petroupolis')
    ->defaults('state', 'greece');

Route::get('/petroussa/quran-academy-petroussa-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'petroussa')
    ->defaults('state', 'greece');

Route::get('/pigi/quran-academy-pigi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pigi')
    ->defaults('state', 'greece');

Route::get('/pikermi/quran-academy-pikermi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pikermi')
    ->defaults('state', 'greece');

Route::get('/piraeus/quran-academy-piraeus-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'piraeus')
    ->defaults('state', 'greece');

Route::get('/pithari/quran-academy-pithari-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pithari')
    ->defaults('state', 'greece');

Route::get('/plagiari/quran-academy-plagiari-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'plagiari')
    ->defaults('state', 'greece');

Route::get('/platanorevma/quran-academy-platanorevma-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'platanorevma')
    ->defaults('state', 'greece');

Route::get('/plataria/quran-academy-plataria-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'plataria')
    ->defaults('state', 'greece');

Route::get('/platy/quran-academy-platy-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'platy')
    ->defaults('state', 'greece');

Route::get('/plaka-dilesi/quran-academy-plaka-dilesi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'plaka-dilesi')
    ->defaults('state', 'greece');

Route::get('/platanos/quran-academy-platanos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'platanos')
    ->defaults('state', 'greece');

Route::get('/politika/quran-academy-politika-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'politika')
    ->defaults('state', 'greece');

Route::get('/polydendri/quran-academy-polydendri-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'polydendri')
    ->defaults('state', 'greece');

Route::get('/polykarpi/quran-academy-polykarpi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'polykarpi')
    ->defaults('state', 'greece');

Route::get('/polichni/quran-academy-polichni-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'polichni')
    ->defaults('state', 'greece');

Route::get('/polygyros/quran-academy-polygyros-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'polygyros')
    ->defaults('state', 'greece');

Route::get('/polykastro/quran-academy-polykastro-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'polykastro')
    ->defaults('state', 'greece');

Route::get('/pontismeno/quran-academy-pontismeno-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pontismeno')
    ->defaults('state', 'greece');

Route::get('/portaria/quran-academy-portaria-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'portaria')
    ->defaults('state', 'greece');

Route::get('/portaria-1/quran-academy-portaria-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'portaria-1')
    ->defaults('state', 'greece');

Route::get('/potamia/quran-academy-potamia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'potamia')
    ->defaults('state', 'greece');

Route::get('/potamos/quran-academy-potamos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'potamos')
    ->defaults('state', 'greece');

Route::get('/profitis-ilias/quran-academy-profitis-ilias-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'profitis-ilias')
    ->defaults('state', 'greece');

Route::get('/profitis-ilias-1/quran-academy-profitis-ilias-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'profitis-ilias-1')
    ->defaults('state', 'greece');

Route::get('/prokopi/quran-academy-prokopi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'prokopi')
    ->defaults('state', 'greece');

Route::get('/prosotsani/quran-academy-prosotsani-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'prosotsani')
    ->defaults('state', 'greece');

Route::get('/provatas/quran-academy-provatas-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'provatas')
    ->defaults('state', 'greece');

Route::get('/proastio/quran-academy-proastio-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'proastio')
    ->defaults('state', 'greece');

Route::get('/pramanta/quran-academy-pramanta-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pramanta')
    ->defaults('state', 'greece');

Route::get('/preveza/quran-academy-preveza-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'preveza')
    ->defaults('state', 'greece');

Route::get('/prinos/quran-academy-prinos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'prinos')
    ->defaults('state', 'greece');

Route::get('/prochoma/quran-academy-prochoma-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'prochoma')
    ->defaults('state', 'greece');

Route::get('/promachoi/quran-academy-promachoi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'promachoi')
    ->defaults('state', 'greece');

Route::get('/proti/quran-academy-proti-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'proti')
    ->defaults('state', 'greece');

Route::get('/psachna/quran-academy-psachna-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'psachna')
    ->defaults('state', 'greece');

Route::get('/psychiko/quran-academy-psychiko-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'psychiko')
    ->defaults('state', 'greece');

Route::get('/pteleos/quran-academy-pteleos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pteleos')
    ->defaults('state', 'greece');

Route::get('/ptolemada/quran-academy-ptolemada-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ptolemada')
    ->defaults('state', 'greece');

Route::get('/pylaia/quran-academy-pylaia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pylaia')
    ->defaults('state', 'greece');

Route::get('/pyli/quran-academy-pyli-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pyli')
    ->defaults('state', 'greece');

Route::get('/pyrgetos/quran-academy-pyrgetos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pyrgetos')
    ->defaults('state', 'greece');

Route::get('/pachni/quran-academy-pachni-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pachni')
    ->defaults('state', 'greece');

Route::get('/palairos/quran-academy-palairos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'palairos')
    ->defaults('state', 'greece');

Route::get('/panormos/quran-academy-panormos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'panormos')
    ->defaults('state', 'greece');

Route::get('/panormos-1/quran-academy-panormos-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'panormos-1')
    ->defaults('state', 'greece');

Route::get('/parga/quran-academy-parga-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'parga')
    ->defaults('state', 'greece');

Route::get('/paros/quran-academy-paros-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'paros')
    ->defaults('state', 'greece');

Route::get('/pasion/quran-academy-pasion-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pasion')
    ->defaults('state', 'greece');

Route::get('/patmos/quran-academy-patmos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'patmos')
    ->defaults('state', 'greece');

Route::get('/patra/quran-academy-patra-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'patra')
    ->defaults('state', 'greece');

Route::get('/pefka/quran-academy-pefka-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pefka')
    ->defaults('state', 'greece');

Route::get('/pefki/quran-academy-pefki-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pefki')
    ->defaults('state', 'greece');

Route::get('/pella/quran-academy-pella-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pella')
    ->defaults('state', 'greece');

Route::get('/peplos/quran-academy-peplos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'peplos')
    ->defaults('state', 'greece');

Route::get('/perama-1/quran-academy-perama-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'perama-1')
    ->defaults('state', 'greece');

Route::get('/perama-2/quran-academy-perama-2-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'perama-2')
    ->defaults('state', 'greece');

Route::get('/perama-3/quran-academy-perama-3-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'perama-3')
    ->defaults('state', 'greece');

Route::get('/perdika/quran-academy-perdika-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'perdika')
    ->defaults('state', 'greece');

Route::get('/peta/quran-academy-peta-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'peta')
    ->defaults('state', 'greece');

Route::get('/poros/quran-academy-poros-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'poros')
    ->defaults('state', 'greece');

Route::get('/poros-1/quran-academy-poros-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'poros-1')
    ->defaults('state', 'greece');

Route::get('/porto-cheli/quran-academy-porto-cheli-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'porto-cheli')
    ->defaults('state', 'greece');

Route::get('/pyli-1/quran-academy-pyli-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pyli-1')
    ->defaults('state', 'greece');

Route::get('/pylos/quran-academy-pylos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pylos')
    ->defaults('state', 'greece');

Route::get('/pyrgos/quran-academy-pyrgos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pyrgos')
    ->defaults('state', 'greece');

Route::get('/pyrgos-1/quran-academy-pyrgos-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pyrgos-1')
    ->defaults('state', 'greece');

Route::get('/rafina/quran-academy-rafina-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rafina')
    ->defaults('state', 'greece');

Route::get('/rethymno/quran-academy-rethymno-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rethymno')
    ->defaults('state', 'greece');

Route::get('/ritini/quran-academy-ritini-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ritini')
    ->defaults('state', 'greece');

Route::get('/rizari/quran-academy-rizari-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rizari')
    ->defaults('state', 'greece');

Route::get('/rizo/quran-academy-rizo-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rizo')
    ->defaults('state', 'greece');

Route::get('/rizomata/quran-academy-rizomata-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rizomata')
    ->defaults('state', 'greece');

Route::get('/rizomylos/quran-academy-rizomylos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rizomylos')
    ->defaults('state', 'greece');

Route::get('/rodhitsa/quran-academy-rodhitsa-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rodhitsa')
    ->defaults('state', 'greece');

Route::get('/rododafni/quran-academy-rododafni-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rododafni')
    ->defaults('state', 'greece');

Route::get('/rodolivos/quran-academy-rodolivos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rodolivos')
    ->defaults('state', 'greece');

Route::get('/rodotopi/quran-academy-rodotopi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rodotopi')
    ->defaults('state', 'greece');

Route::get('/rodopoli/quran-academy-rodopoli-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rodopoli')
    ->defaults('state', 'greece');

Route::get('/rovies/quran-academy-rovies-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rovies')
    ->defaults('state', 'greece');

Route::get('/royitika/quran-academy-royitika-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'royitika')
    ->defaults('state', 'greece');

Route::get('/rio/quran-academy-rio-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rio')
    ->defaults('state', 'greece');

Route::get('/rizia/quran-academy-rizia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rizia')
    ->defaults('state', 'greece');

Route::get('/rizoma/quran-academy-rizoma-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rizoma')
    ->defaults('state', 'greece');

Route::get('/rodos/quran-academy-rodos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rodos')
    ->defaults('state', 'greece');

Route::get('/salamina/quran-academy-salamina-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'salamina')
    ->defaults('state', 'greece');

Route::get('/samothraki/quran-academy-samothraki-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'samothraki')
    ->defaults('state', 'greece');

Route::get('/sardinia/quran-academy-sardinia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sardinia')
    ->defaults('state', 'greece');

Route::get('/saronida/quran-academy-saronida-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'saronida')
    ->defaults('state', 'greece');

Route::get('/savalia/quran-academy-savalia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'savalia')
    ->defaults('state', 'greece');

Route::get('/schimatari/quran-academy-schimatari-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'schimatari')
    ->defaults('state', 'greece');

Route::get('/schisma-eloundas/quran-academy-schisma-eloundas-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'schisma-eloundas')
    ->defaults('state', 'greece');

Route::get('/selinia/quran-academy-selinia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'selinia')
    ->defaults('state', 'greece');

Route::get('/sevastiana/quran-academy-sevastiana-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sevastiana')
    ->defaults('state', 'greece');

Route::get('/sfendami/quran-academy-sfendami-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sfendami')
    ->defaults('state', 'greece');

Route::get('/sidirokastro/quran-academy-sidirokastro-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sidirokastro')
    ->defaults('state', 'greece');

Route::get('/sikyon/quran-academy-sikyon-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sikyon')
    ->defaults('state', 'greece');

Route::get('/sitagroi/quran-academy-sitagroi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sitagroi')
    ->defaults('state', 'greece');

Route::get('/sitia/quran-academy-sitia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sitia')
    ->defaults('state', 'greece');

Route::get('/siatista/quran-academy-siatista-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'siatista')
    ->defaults('state', 'greece');

Route::get('/skalanion/quran-academy-skalanion-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'skalanion')
    ->defaults('state', 'greece');

Route::get('/skarmagkas/quran-academy-skarmagkas-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'skarmagkas')
    ->defaults('state', 'greece');

Route::get('/skiathos/quran-academy-skiathos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'skiathos')
    ->defaults('state', 'greece');

Route::get('/skotoussa/quran-academy-skotoussa-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'skotoussa')
    ->defaults('state', 'greece');

Route::get('/skoutari/quran-academy-skoutari-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'skoutari')
    ->defaults('state', 'greece');

Route::get('/skala/quran-academy-skala-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'skala')
    ->defaults('state', 'greece');

Route::get('/skala-1/quran-academy-skala-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'skala-1')
    ->defaults('state', 'greece');

Route::get('/skala-oropou/quran-academy-skala-oropou-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'skala-oropou')
    ->defaults('state', 'greece');

Route::get('/skopelos/quran-academy-skopelos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'skopelos')
    ->defaults('state', 'greece');

Route::get('/skydra/quran-academy-skydra-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'skydra')
    ->defaults('state', 'greece');

Route::get('/skyros/quran-academy-skyros-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'skyros')
    ->defaults('state', 'greece');

Route::get('/sminthi/quran-academy-sminthi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sminthi')
    ->defaults('state', 'greece');

Route::get('/sochos/quran-academy-sochos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sochos')
    ->defaults('state', 'greece');

Route::get('/sofikon/quran-academy-sofikon-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sofikon')
    ->defaults('state', 'greece');

Route::get('/sofades/quran-academy-sofades-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sofades')
    ->defaults('state', 'greece');

Route::get('/sosandra/quran-academy-sosandra-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sosandra')
    ->defaults('state', 'greece');

Route::get('/soufli/quran-academy-soufli-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'soufli')
    ->defaults('state', 'greece');

Route::get('/souroti/quran-academy-souroti-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'souroti')
    ->defaults('state', 'greece');

Route::get('/souda/quran-academy-souda-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'souda')
    ->defaults('state', 'greece');

Route::get('/sourpi/quran-academy-sourpi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sourpi')
    ->defaults('state', 'greece');

Route::get('/spercheiada/quran-academy-spercheiada-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'spercheiada')
    ->defaults('state', 'greece');

Route::get('/sperchogeia/quran-academy-sperchogeia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sperchogeia')
    ->defaults('state', 'greece');

Route::get('/sparti/quran-academy-sparti-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sparti')
    ->defaults('state', 'greece');

Route::get('/spata/quran-academy-spata-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'spata')
    ->defaults('state', 'greece');

Route::get('/spetses/quran-academy-spetses-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'spetses')
    ->defaults('state', 'greece');

Route::get('/stalis/quran-academy-stalis-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stalis')
    ->defaults('state', 'greece');

Route::get('/stamata/quran-academy-stamata-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stamata')
    ->defaults('state', 'greece');

Route::get('/stathmos-mourion/quran-academy-stathmos-mourion-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stathmos-mourion')
    ->defaults('state', 'greece');

Route::get('/stavroupoli/quran-academy-stavroupoli-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stavroupoli')
    ->defaults('state', 'greece');

Route::get('/stavraki/quran-academy-stavraki-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stavraki')
    ->defaults('state', 'greece');

Route::get('/stavros/quran-academy-stavros-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stavros')
    ->defaults('state', 'greece');

Route::get('/stavros-1/quran-academy-stavros-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stavros-1')
    ->defaults('state', 'greece');

Route::get('/stefanovikeio/quran-academy-stefanovikeio-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stefanovikeio')
    ->defaults('state', 'greece');

Route::get('/steiri/quran-academy-steiri-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'steiri')
    ->defaults('state', 'greece');

Route::get('/stratonion/quran-academy-stratonion-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stratonion')
    ->defaults('state', 'greece');

Route::get('/strymoniko/quran-academy-strymoniko-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'strymoniko')
    ->defaults('state', 'greece');

Route::get('/stylida/quran-academy-stylida-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stylida')
    ->defaults('state', 'greece');

Route::get('/stanos/quran-academy-stanos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stanos')
    ->defaults('state', 'greece');

Route::get('/svoronos/quran-academy-svoronos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'svoronos')
    ->defaults('state', 'greece');

Route::get('/sykia/quran-academy-sykia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sykia')
    ->defaults('state', 'greece');

Route::get('/sykia-1/quran-academy-sykia-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sykia-1')
    ->defaults('state', 'greece');

Route::get('/sykies/quran-academy-sykies-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sykies')
    ->defaults('state', 'greece');

Route::get('/sylivainiotika/quran-academy-sylivainiotika-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sylivainiotika')
    ->defaults('state', 'greece');

Route::get('/synoikismos-chavariou/quran-academy-synoikismos-chavariou-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'synoikismos-chavariou')
    ->defaults('state', 'greece');

Route::get('/sami/quran-academy-sami-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sami')
    ->defaults('state', 'greece');

Route::get('/sapes/quran-academy-sapes-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sapes')
    ->defaults('state', 'greece');

Route::get('/sarti/quran-academy-sarti-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sarti')
    ->defaults('state', 'greece');

Route::get('/selero/quran-academy-selero-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'selero')
    ->defaults('state', 'greece');

Route::get('/serifos/quran-academy-serifos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'serifos')
    ->defaults('state', 'greece');

Route::get('/serres/quran-academy-serres-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'serres')
    ->defaults('state', 'greece');

Route::get('/servia/quran-academy-servia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'servia')
    ->defaults('state', 'greece');

Route::get('/simantra/quran-academy-simantra-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'simantra')
    ->defaults('state', 'greece');

Route::get('/sindos/quran-academy-sindos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sindos')
    ->defaults('state', 'greece');

Route::get('/sision/quran-academy-sision-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sision')
    ->defaults('state', 'greece');

Route::get('/symi/quran-academy-symi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'symi')
    ->defaults('state', 'greece');

Route::get('/taxiarches/quran-academy-taxiarches-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'taxiarches')
    ->defaults('state', 'greece');

Route::get('/terpni/quran-academy-terpni-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'terpni')
    ->defaults('state', 'greece');

Route::get('/thespies/quran-academy-thespies-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'thespies')
    ->defaults('state', 'greece');

Route::get('/thesprotiko/quran-academy-thesprotiko-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'thesprotiko')
    ->defaults('state', 'greece');

Route::get('/thessaloniki/quran-academy-thessaloniki-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'thessaloniki')
    ->defaults('state', 'greece');

Route::get('/thouria/quran-academy-thouria-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'thouria')
    ->defaults('state', 'greece');

Route::get('/thrakomakedones/quran-academy-thrakomakedones-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'thrakomakedones')
    ->defaults('state', 'greece');

Route::get('/thrapsanon/quran-academy-thrapsanon-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'thrapsanon')
    ->defaults('state', 'greece');

Route::get('/thasos/quran-academy-thasos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'thasos')
    ->defaults('state', 'greece');

Route::get('/thermi/quran-academy-thermi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'thermi')
    ->defaults('state', 'greece');

Route::get('/thermo/quran-academy-thermo-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'thermo')
    ->defaults('state', 'greece');

Route::get('/thivai/quran-academy-thivai-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'thivai')
    ->defaults('state', 'greece');

Route::get('/tolon/quran-academy-tolon-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tolon')
    ->defaults('state', 'greece');

Route::get('/traganon/quran-academy-traganon-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'traganon')
    ->defaults('state', 'greece');

Route::get('/triandaiika/quran-academy-triandaiika-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'triandaiika')
    ->defaults('state', 'greece');

Route::get('/triandria/quran-academy-triandria-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'triandria')
    ->defaults('state', 'greece');

Route::get('/trikala/quran-academy-trikala-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'trikala')
    ->defaults('state', 'greece');

Route::get('/trikala-1/quran-academy-trikala-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'trikala-1')
    ->defaults('state', 'greece');

Route::get('/trikeri/quran-academy-trikeri-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'trikeri')
    ->defaults('state', 'greece');

Route::get('/trilofos/quran-academy-trilofos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'trilofos')
    ->defaults('state', 'greece');

Route::get('/tripoli/quran-academy-tripoli-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tripoli')
    ->defaults('state', 'greece');

Route::get('/tsiflikopoulo/quran-academy-tsiflikopoulo-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tsiflikopoulo')
    ->defaults('state', 'greece');

Route::get('/tsikalaria/quran-academy-tsikalaria-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tsikalaria')
    ->defaults('state', 'greece');

Route::get('/tsotili/quran-academy-tsotili-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tsotili')
    ->defaults('state', 'greece');

Route::get('/tychero/quran-academy-tychero-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tychero')
    ->defaults('state', 'greece');

Route::get('/tympaki/quran-academy-tympaki-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tympaki')
    ->defaults('state', 'greece');

Route::get('/tavros/quran-academy-tavros-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tavros')
    ->defaults('state', 'greece');

Route::get('/temeni/quran-academy-temeni-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'temeni')
    ->defaults('state', 'greece');

Route::get('/tilisos/quran-academy-tilisos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tilisos')
    ->defaults('state', 'greece');

Route::get('/tinos/quran-academy-tinos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tinos')
    ->defaults('state', 'greece');

Route::get('/valsamata/quran-academy-valsamata-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'valsamata')
    ->defaults('state', 'greece');

Route::get('/valtero/quran-academy-valtero-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'valtero')
    ->defaults('state', 'greece');

Route::get('/vamvakofyto/quran-academy-vamvakofyto-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'vamvakofyto')
    ->defaults('state', 'greece');

Route::get('/vanaton/quran-academy-vanaton-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'vanaton')
    ->defaults('state', 'greece');

Route::get('/varnavas/quran-academy-varnavas-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'varnavas')
    ->defaults('state', 'greece');

Route::get('/vartholomio/quran-academy-vartholomio-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'vartholomio')
    ->defaults('state', 'greece');

Route::get('/varvasaina/quran-academy-varvasaina-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'varvasaina')
    ->defaults('state', 'greece');

Route::get('/varybobi/quran-academy-varybobi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'varybobi')
    ->defaults('state', 'greece');

Route::get('/vasilika/quran-academy-vasilika-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'vasilika')
    ->defaults('state', 'greece');

Route::get('/vasiliki/quran-academy-vasiliki-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'vasiliki')
    ->defaults('state', 'greece');

Route::get('/vasilikon/quran-academy-vasilikon-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'vasilikon')
    ->defaults('state', 'greece');

Route::get('/vathi/quran-academy-vathi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'vathi')
    ->defaults('state', 'greece');

Route::get('/vathy/quran-academy-vathy-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'vathy')
    ->defaults('state', 'greece');

Route::get('/vathylakkos/quran-academy-vathylakkos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'vathylakkos')
    ->defaults('state', 'greece');

Route::get('/velestino/quran-academy-velestino-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'velestino')
    ->defaults('state', 'greece');

Route::get('/velventos/quran-academy-velventos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'velventos')
    ->defaults('state', 'greece');

Route::get('/vergina/quran-academy-vergina-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'vergina')
    ->defaults('state', 'greece');

Route::get('/violi-charaki/quran-academy-violi-charaki-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'violi-charaki')
    ->defaults('state', 'greece');

Route::get('/viros/quran-academy-viros-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'viros')
    ->defaults('state', 'greece');

Route::get('/vlachiotis/quran-academy-vlachiotis-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'vlachiotis')
    ->defaults('state', 'greece');

Route::get('/vlachopoulo/quran-academy-vlachopoulo-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'vlachopoulo')
    ->defaults('state', 'greece');

Route::get('/vlychada/quran-academy-vlychada-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'vlychada')
    ->defaults('state', 'greece');

Route::get('/vokhaiko/quran-academy-vokhaiko-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'vokhaiko')
    ->defaults('state', 'greece');

Route::get('/volos/quran-academy-volos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'volos')
    ->defaults('state', 'greece');

Route::get('/voulgareli/quran-academy-voulgareli-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'voulgareli')
    ->defaults('state', 'greece');

Route::get('/vouliagmeni/quran-academy-vouliagmeni-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'vouliagmeni')
    ->defaults('state', 'greece');

Route::get('/vounoplagia/quran-academy-vounoplagia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'vounoplagia')
    ->defaults('state', 'greece');

Route::get('/voula/quran-academy-voula-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'voula')
    ->defaults('state', 'greece');

Route::get('/vrachnaiika/quran-academy-vrachnaiika-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'vrachnaiika')
    ->defaults('state', 'greece');

Route::get('/vrakhati/quran-academy-vrakhati-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'vrakhati')
    ->defaults('state', 'greece');

Route::get('/vrana/quran-academy-vrana-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'vrana')
    ->defaults('state', 'greece');

Route::get('/vrilissia/quran-academy-vrilissia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'vrilissia')
    ->defaults('state', 'greece');

Route::get('/vrontou/quran-academy-vrontou-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'vrontou')
    ->defaults('state', 'greece');

Route::get('/vryses/quran-academy-vryses-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'vryses')
    ->defaults('state', 'greece');

Route::get('/vagia/quran-academy-vagia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'vagia')
    ->defaults('state', 'greece');

Route::get('/varda/quran-academy-varda-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'varda')
    ->defaults('state', 'greece');

Route::get('/vari/quran-academy-vari-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'vari')
    ->defaults('state', 'greece');

Route::get('/vari-1/quran-academy-vari-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'vari-1')
    ->defaults('state', 'greece');

Route::get('/velo/quran-academy-velo-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'velo')
    ->defaults('state', 'greece');

Route::get('/veroia/quran-academy-veroia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'veroia')
    ->defaults('state', 'greece');

Route::get('/vilia/quran-academy-vilia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'vilia')
    ->defaults('state', 'greece');

Route::get('/volakas/quran-academy-volakas-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'volakas')
    ->defaults('state', 'greece');

Route::get('/vonitsa/quran-academy-vonitsa-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'vonitsa')
    ->defaults('state', 'greece');

Route::get('/vyronas/quran-academy-vyronas-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'vyronas')
    ->defaults('state', 'greece');

Route::get('/xilopolis/quran-academy-xilopolis-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'xilopolis')
    ->defaults('state', 'greece');

Route::get('/xino-nero/quran-academy-xino-nero-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'xino-nero')
    ->defaults('state', 'greece');

Route::get('/xiropotamos/quran-academy-xiropotamos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'xiropotamos')
    ->defaults('state', 'greece');

Route::get('/xylagani/quran-academy-xylagani-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'xylagani')
    ->defaults('state', 'greece');

Route::get('/xylokastro/quran-academy-xylokastro-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'xylokastro')
    ->defaults('state', 'greece');

Route::get('/xanthi/quran-academy-xanthi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'xanthi')
    ->defaults('state', 'greece');

Route::get('/yimnon/quran-academy-yimnon-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'yimnon')
    ->defaults('state', 'greece');

Route::get('/ymittos/quran-academy-ymittos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ymittos')
    ->defaults('state', 'greece');

Route::get('/zacharo/quran-academy-zacharo-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'zacharo')
    ->defaults('state', 'greece');

Route::get('/zagora/quran-academy-zagora-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'zagora')
    ->defaults('state', 'greece');

Route::get('/zakynthos/quran-academy-zakynthos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'zakynthos')
    ->defaults('state', 'greece');

Route::get('/zaros/quran-academy-zaros-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'zaros')
    ->defaults('state', 'greece');

Route::get('/zefyri/quran-academy-zefyri-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'zefyri')
    ->defaults('state', 'greece');

Route::get('/zevgolateio/quran-academy-zevgolateio-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'zevgolateio')
    ->defaults('state', 'greece');

Route::get('/zipari/quran-academy-zipari-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'zipari')
    ->defaults('state', 'greece');

Route::get('/zografos/quran-academy-zografos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'zografos')
    ->defaults('state', 'greece');

Route::get('/zoniana/quran-academy-zoniana-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'zoniana')
    ->defaults('state', 'greece');

Route::get('/zygos/quran-academy-zygos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'zygos')
    ->defaults('state', 'greece');

Route::get('/zarkos/quran-academy-zarkos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'zarkos')
    ->defaults('state', 'greece');

Route::get('/adendro/quran-academy-adendro-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'adendro')
    ->defaults('state', 'greece');

Route::get('/afytos/quran-academy-afytos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'afytos')
    ->defaults('state', 'greece');

Route::get('/agio-pnevma/quran-academy-agio-pnevma-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agio-pnevma')
    ->defaults('state', 'greece');

Route::get('/agioi-anargyroi/quran-academy-agioi-anargyroi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agioi-anargyroi')
    ->defaults('state', 'greece');

Route::get('/agioi-deka/quran-academy-agioi-deka-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agioi-deka')
    ->defaults('state', 'greece');

Route::get('/agioi-theodoroi/quran-academy-agioi-theodoroi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agioi-theodoroi')
    ->defaults('state', 'greece');

Route::get('/agios-andreas/quran-academy-agios-andreas-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agios-andreas')
    ->defaults('state', 'greece');

Route::get('/agios-athanasios/quran-academy-agios-athanasios-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agios-athanasios')
    ->defaults('state', 'greece');

Route::get('/agios-athanasios-1/quran-academy-agios-athanasios-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agios-athanasios-1')
    ->defaults('state', 'greece');

Route::get('/agios-georgios/quran-academy-agios-georgios-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agios-georgios')
    ->defaults('state', 'greece');

Route::get('/agios-georgios-1/quran-academy-agios-georgios-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agios-georgios-1')
    ->defaults('state', 'greece');

Route::get('/agios-loukas/quran-academy-agios-loukas-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agios-loukas')
    ->defaults('state', 'greece');

Route::get('/agios-matthaios/quran-academy-agios-matthaios-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agios-matthaios')
    ->defaults('state', 'greece');

Route::get('/agios-nikolaos/quran-academy-agios-nikolaos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agios-nikolaos')
    ->defaults('state', 'greece');

Route::get('/agios-nikolaos-1/quran-academy-agios-nikolaos-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agios-nikolaos-1')
    ->defaults('state', 'greece');

Route::get('/agios-pavlos/quran-academy-agios-pavlos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agios-pavlos')
    ->defaults('state', 'greece');

Route::get('/agios-petros/quran-academy-agios-petros-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agios-petros')
    ->defaults('state', 'greece');

Route::get('/agios-spyridon/quran-academy-agios-spyridon-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agios-spyridon')
    ->defaults('state', 'greece');

Route::get('/agios-stefanos/quran-academy-agios-stefanos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agios-stefanos')
    ->defaults('state', 'greece');

Route::get('/agios-vasileios/quran-academy-agios-vasileios-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agios-vasileios')
    ->defaults('state', 'greece');

Route::get('/alimos/quran-academy-alimos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'alimos')
    ->defaults('state', 'greece');

Route::get('/alli-meria/quran-academy-alli-meria-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'alli-meria')
    ->defaults('state', 'greece');

Route::get('/amfissa/quran-academy-amfissa-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'amfissa')
    ->defaults('state', 'greece');

Route::get('/ano-kalentini/quran-academy-ano-kalentini-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ano-kalentini')
    ->defaults('state', 'greece');

Route::get('/ano-kastritsi/quran-academy-ano-kastritsi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ano-kastritsi')
    ->defaults('state', 'greece');

Route::get('/ano-komi/quran-academy-ano-komi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ano-komi')
    ->defaults('state', 'greece');

Route::get('/ano-lekhonia/quran-academy-ano-lekhonia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ano-lekhonia')
    ->defaults('state', 'greece');

Route::get('/ano-liosia/quran-academy-ano-liosia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ano-liosia')
    ->defaults('state', 'greece');

Route::get('/ano-mera/quran-academy-ano-mera-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ano-mera')
    ->defaults('state', 'greece');

Route::get('/ano-syros/quran-academy-ano-syros-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ano-syros')
    ->defaults('state', 'greece');

Route::get('/apsalos/quran-academy-apsalos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'apsalos')
    ->defaults('state', 'greece');

Route::get('/aratos/quran-academy-aratos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aratos')
    ->defaults('state', 'greece');

Route::get('/argos/quran-academy-argos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'argos')
    ->defaults('state', 'greece');

Route::get('/aris/quran-academy-aris-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aris')
    ->defaults('state', 'greece');

Route::get('/arma/quran-academy-arma-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'arma')
    ->defaults('state', 'greece');

Route::get('/arnissa/quran-academy-arnissa-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'arnissa')
    ->defaults('state', 'greece');

Route::get('/arta/quran-academy-arta-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'arta')
    ->defaults('state', 'greece');

Route::get('/assiros/quran-academy-assiros-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'assiros')
    ->defaults('state', 'greece');

Route::get('/assos/quran-academy-assos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'assos')
    ->defaults('state', 'greece');

Route::get('/astros/quran-academy-astros-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'astros')
    ->defaults('state', 'greece');

Route::get('/athyra/quran-academy-athyra-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'athyra')
    ->defaults('state', 'greece');

Route::get('/avato/quran-academy-avato-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'avato')
    ->defaults('state', 'greece');

Route::get('/ayioi-apostoloi/quran-academy-ayioi-apostoloi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ayioi-apostoloi')
    ->defaults('state', 'greece');

Route::get('/ayios-adhrianos/quran-academy-ayios-adhrianos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ayios-adhrianos')
    ->defaults('state', 'greece');

Route::get('/ayios-konstandinos/quran-academy-ayios-konstandinos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ayios-konstandinos')
    ->defaults('state', 'greece');

Route::get('/ayios-konstandinos-1/quran-academy-ayios-konstandinos-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ayios-konstandinos-1')
    ->defaults('state', 'greece');

Route::get('/ayios-nikolaos/quran-academy-ayios-nikolaos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ayios-nikolaos')
    ->defaults('state', 'greece');

Route::get('/ayios-thomas/quran-academy-ayios-thomas-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ayios-thomas')
    ->defaults('state', 'greece');

Route::get('/ayios-vasilios/quran-academy-ayios-vasilios-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ayios-vasilios')
    ->defaults('state', 'greece');

Route::get('/edessa/quran-academy-edessa-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'edessa')
    ->defaults('state', 'greece');

Route::get('/emponas/quran-academy-emponas-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'emponas')
    ->defaults('state', 'greece');

Route::get('/evlalo/quran-academy-evlalo-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'evlalo')
    ->defaults('state', 'greece');

Route::get('/evosmos/quran-academy-evosmos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'evosmos')
    ->defaults('state', 'greece');

Route::get('/iasmos/quran-academy-iasmos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'iasmos')
    ->defaults('state', 'greece');

Route::get('/ilion/quran-academy-ilion-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ilion')
    ->defaults('state', 'greece');

Route::get('/ios/quran-academy-ios-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ios')
    ->defaults('state', 'greece');

Route::get('/olynthos/quran-academy-olynthos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'olynthos')
    ->defaults('state', 'greece');

Route::get('/ydra/quran-academy-ydra-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ydra')
    ->defaults('state', 'greece');

Route::get('/heraklion/quran-academy-heraklion-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'heraklion')
    ->defaults('state', 'greece');

Route::get('/evros/quran-academy-evros-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'evros')
    ->defaults('state', 'greece');

Route::get('/drama-1/quran-academy-drama-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'drama-1')
    ->defaults('state', 'greece');

Route::get('/rhodope/quran-academy-rhodope-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rhodope')
    ->defaults('state', 'greece');

Route::get('/kavala-1/quran-academy-kavala-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kavala-1')
    ->defaults('state', 'greece');

Route::get('/xanthi-1/quran-academy-xanthi-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'xanthi-1')
    ->defaults('state', 'greece');

Route::get('/alexandroupolis/quran-academy-alexandroupolis-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'alexandroupolis')
    ->defaults('state', 'greece');

Route::get('/didymoteicho-1/quran-academy-didymoteicho-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'didymoteicho-1')
    ->defaults('state', 'greece');

Route::get('/orestiada-1/quran-academy-orestiada-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'orestiada-1')
    ->defaults('state', 'greece');

Route::get('/samothrace/quran-academy-samothrace-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'samothrace')
    ->defaults('state', 'greece');

Route::get('/soufli-1/quran-academy-soufli-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'soufli-1')
    ->defaults('state', 'greece');

Route::get('/doxato/quran-academy-doxato-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'doxato')
    ->defaults('state', 'greece');

Route::get('/kato-nevrokopi-1/quran-academy-kato-nevrokopi-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kato-nevrokopi-1')
    ->defaults('state', 'greece');

Route::get('/paranesti-1/quran-academy-paranesti-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'paranesti-1')
    ->defaults('state', 'greece');

Route::get('/prosotsani-1/quran-academy-prosotsani-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'prosotsani-1')
    ->defaults('state', 'greece');

Route::get('/arriana-1/quran-academy-arriana-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'arriana-1')
    ->defaults('state', 'greece');

Route::get('/iasmos-1/quran-academy-iasmos-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'iasmos-1')
    ->defaults('state', 'greece');

Route::get('/komotini-1/quran-academy-komotini-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'komotini-1')
    ->defaults('state', 'greece');

Route::get('/maroneia-sapes/quran-academy-maroneia-sapes-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'maroneia-sapes')
    ->defaults('state', 'greece');

Route::get('/pangaio/quran-academy-pangaio-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pangaio')
    ->defaults('state', 'greece');

Route::get('/myki-1/quran-academy-myki-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'myki-1')
    ->defaults('state', 'greece');

Route::get('/topeiros/quran-academy-topeiros-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'topeiros')
    ->defaults('state', 'greece');

Route::get('/karditsa-1/quran-academy-karditsa-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'karditsa-1')
    ->defaults('state', 'greece');

Route::get('/larissa/quran-academy-larissa-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'larissa')
    ->defaults('state', 'greece');

Route::get('/magnesia/quran-academy-magnesia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'magnesia')
    ->defaults('state', 'greece');

Route::get('/sporades/quran-academy-sporades-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sporades')
    ->defaults('state', 'greece');

Route::get('/trikala-2/quran-academy-trikala-2-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'trikala-2')
    ->defaults('state', 'greece');

Route::get('/argithea-1/quran-academy-argithea-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'argithea-1')
    ->defaults('state', 'greece');

Route::get('/lake-plastiras/quran-academy-lake-plastiras-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lake-plastiras')
    ->defaults('state', 'greece');

Route::get('/mouzaki-2/quran-academy-mouzaki-2-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mouzaki-2')
    ->defaults('state', 'greece');

Route::get('/palamas-1/quran-academy-palamas-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'palamas-1')
    ->defaults('state', 'greece');

Route::get('/sofades-1/quran-academy-sofades-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sofades-1')
    ->defaults('state', 'greece');

Route::get('/agia/quran-academy-agia-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agia')
    ->defaults('state', 'greece');

Route::get('/elassona/quran-academy-elassona-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'elassona')
    ->defaults('state', 'greece');

Route::get('/farsala/quran-academy-farsala-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'farsala')
    ->defaults('state', 'greece');

Route::get('/kileler/quran-academy-kileler-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kileler')
    ->defaults('state', 'greece');

Route::get('/tempi/quran-academy-tempi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tempi')
    ->defaults('state', 'greece');

Route::get('/tyrnavos/quran-academy-tyrnavos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tyrnavos')
    ->defaults('state', 'greece');

Route::get('/almyros-1/quran-academy-almyros-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'almyros-1')
    ->defaults('state', 'greece');

Route::get('/rigas-feraios/quran-academy-rigas-feraios-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rigas-feraios')
    ->defaults('state', 'greece');

Route::get('/south-pelion/quran-academy-south-pelion-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'south-pelion')
    ->defaults('state', 'greece');

Route::get('/volos-1/quran-academy-volos-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'volos-1')
    ->defaults('state', 'greece');

Route::get('/zagora-mouresi/quran-academy-zagora-mouresi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'zagora-mouresi')
    ->defaults('state', 'greece');

Route::get('/alonnisos/quran-academy-alonnisos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'alonnisos')
    ->defaults('state', 'greece');

Route::get('/skiathos-1/quran-academy-skiathos-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'skiathos-1')
    ->defaults('state', 'greece');

Route::get('/skopelos-1/quran-academy-skopelos-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'skopelos-1')
    ->defaults('state', 'greece');

Route::get('/farkadona-1/quran-academy-farkadona-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'farkadona-1')
    ->defaults('state', 'greece');

Route::get('/kalampaka-1/quran-academy-kalampaka-1-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kalampaka-1')
    ->defaults('state', 'greece');

Route::get('/pyli-2/quran-academy-pyli-2-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pyli-2')
    ->defaults('state', 'greece');

Route::get('/agiou-pavlou/quran-academy-agiou-pavlou-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agiou-pavlou')
    ->defaults('state', 'greece');

Route::get('/dionysiou/quran-academy-dionysiou-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dionysiou')
    ->defaults('state', 'greece');

Route::get('/osiou-gregoriou/quran-academy-osiou-gregoriou-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'osiou-gregoriou')
    ->defaults('state', 'greece');

Route::get('/simonopetra/quran-academy-simonopetra-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'simonopetra')
    ->defaults('state', 'greece');

Route::get('/xeropotamou/quran-academy-xeropotamou-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'xeropotamou')
    ->defaults('state', 'greece');

Route::get('/st-panteleimon/quran-academy-st-panteleimon-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'st-panteleimon')
    ->defaults('state', 'greece');

Route::get('/xenophontos/quran-academy-xenophontos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'xenophontos')
    ->defaults('state', 'greece');

Route::get('/docheiariou/quran-academy-docheiariou-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'docheiariou')
    ->defaults('state', 'greece');

Route::get('/konstamonitou/quran-academy-konstamonitou-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'konstamonitou')
    ->defaults('state', 'greece');

Route::get('/zografou/quran-academy-zografou-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'zografou')
    ->defaults('state', 'greece');

Route::get('/hilandar/quran-academy-hilandar-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hilandar')
    ->defaults('state', 'greece');

Route::get('/esphigmenou/quran-academy-esphigmenou-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'esphigmenou')
    ->defaults('state', 'greece');

Route::get('/vatopedi/quran-academy-vatopedi-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'vatopedi')
    ->defaults('state', 'greece');

Route::get('/pantokratoros/quran-academy-pantokratoros-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pantokratoros')
    ->defaults('state', 'greece');

Route::get('/stavronikita/quran-academy-stavronikita-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stavronikita')
    ->defaults('state', 'greece');

Route::get('/koutloumousiou/quran-academy-koutloumousiou-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'koutloumousiou')
    ->defaults('state', 'greece');

Route::get('/iviron/quran-academy-iviron-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'iviron')
    ->defaults('state', 'greece');

Route::get('/philotheou/quran-academy-philotheou-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'philotheou')
    ->defaults('state', 'greece');

Route::get('/karakallou/quran-academy-karakallou-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'karakallou')
    ->defaults('state', 'greece');

Route::get('/megisti-lavra/quran-academy-megisti-lavra-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'megisti-lavra')
    ->defaults('state', 'greece');

Route::get('/chios/quran-academy-chios-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chios')
    ->defaults('state', 'greece');

Route::get('/ikaria/quran-academy-ikaria-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ikaria')
    ->defaults('state', 'greece');

Route::get('/lemnos/quran-academy-lemnos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lemnos')
    ->defaults('state', 'greece');

Route::get('/lesbos/quran-academy-lesbos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lesbos')
    ->defaults('state', 'greece');

Route::get('/samos/quran-academy-samos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'samos')
    ->defaults('state', 'greece');

Route::get('/oinousses/quran-academy-oinousses-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'oinousses')
    ->defaults('state', 'greece');

Route::get('/psara/quran-academy-psara-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'psara')
    ->defaults('state', 'greece');

Route::get('/fournoi-korseon/quran-academy-fournoi-korseon-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'fournoi-korseon')
    ->defaults('state', 'greece');

Route::get('/agios-efstratios/quran-academy-agios-efstratios-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'agios-efstratios')
    ->defaults('state', 'greece');

Route::get('/mytilene/quran-academy-mytilene-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mytilene')
    ->defaults('state', 'greece');

Route::get('/west-lesbos/quran-academy-west-lesbos-greece', [HomeController::class, 'cityPage'])
    ->defaults('city', 'west-lesbos')
    ->defaults('state', 'greece');
