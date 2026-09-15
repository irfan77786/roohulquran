<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Support\UkLocations;

foreach (UkLocations::pages() as $page) {
    Route::get($page['path'], [HomeController::class, 'cityPage'])
        ->defaults('city', $page['city'])
        ->defaults('state', $page['state']);
}


Route::get('/aberdeen/quran-academy-aberdeen-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aberdeen')
    ->defaults('state', 'united-kingdom');

Route::get('/milltimber/quran-academy-milltimber-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'milltimber')
    ->defaults('state', 'united-kingdom');

Route::get('/peterculter/quran-academy-peterculter-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'peterculter')
    ->defaults('state', 'united-kingdom');

Route::get('/aberdeen-airport/quran-academy-aberdeen-airport-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aberdeen-airport')
    ->defaults('state', 'united-kingdom');

Route::get('/bridge-of-don/quran-academy-bridge-of-don-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bridge-of-don')
    ->defaults('state', 'united-kingdom');

Route::get('/laurencekirk/quran-academy-laurencekirk-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'laurencekirk')
    ->defaults('state', 'united-kingdom');

Route::get('/banchory/quran-academy-banchory-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'banchory')
    ->defaults('state', 'united-kingdom');

Route::get('/westhill/quran-academy-westhill-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'westhill')
    ->defaults('state', 'united-kingdom');

Route::get('/alford/quran-academy-alford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'alford')
    ->defaults('state', 'united-kingdom');

Route::get('/aboyne/quran-academy-aboyne-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aboyne')
    ->defaults('state', 'united-kingdom');

Route::get('/ballatar/quran-academy-ballatar-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ballatar')
    ->defaults('state', 'united-kingdom');

Route::get('/strathdon/quran-academy-strathdon-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'strathdon')
    ->defaults('state', 'united-kingdom');

Route::get('/ballindalloch/quran-academy-ballindalloch-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ballindalloch')
    ->defaults('state', 'united-kingdom');

Route::get('/aberlour/quran-academy-aberlour-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aberlour')
    ->defaults('state', 'united-kingdom');

Route::get('/stonehaven/quran-academy-stonehaven-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stonehaven')
    ->defaults('state', 'united-kingdom');

Route::get('/ellon/quran-academy-ellon-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ellon')
    ->defaults('state', 'united-kingdom');

Route::get('/peterhead/quran-academy-peterhead-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'peterhead')
    ->defaults('state', 'united-kingdom');

Route::get('/fraserburgh/quran-academy-fraserburgh-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'fraserburgh')
    ->defaults('state', 'united-kingdom');

Route::get('/macduff/quran-academy-macduff-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'macduff')
    ->defaults('state', 'united-kingdom');

Route::get('/banff/quran-academy-banff-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'banff')
    ->defaults('state', 'united-kingdom');

Route::get('/inverurie/quran-academy-inverurie-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'inverurie')
    ->defaults('state', 'united-kingdom');

Route::get('/insch/quran-academy-insch-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'insch')
    ->defaults('state', 'united-kingdom');

Route::get('/turriff/quran-academy-turriff-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'turriff')
    ->defaults('state', 'united-kingdom');

Route::get('/huntly/quran-academy-huntly-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'huntly')
    ->defaults('state', 'united-kingdom');

Route::get('/st-albans/quran-academy-st-albans-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'st-albans')
    ->defaults('state', 'united-kingdom');

Route::get('/hatfield/quran-academy-hatfield-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hatfield')
    ->defaults('state', 'united-kingdom');

Route::get('/redbourn/quran-academy-redbourn-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'redbourn')
    ->defaults('state', 'united-kingdom');

Route::get('/sandridge/quran-academy-sandridge-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sandridge')
    ->defaults('state', 'united-kingdom');

Route::get('/harpenden/quran-academy-harpenden-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'harpenden')
    ->defaults('state', 'united-kingdom');

Route::get('/welwyn/quran-academy-welwyn-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'welwyn')
    ->defaults('state', 'united-kingdom');

Route::get('/welwyn-garden-city/quran-academy-welwyn-garden-city-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'welwyn-garden-city')
    ->defaults('state', 'united-kingdom');

Route::get('/castle-bromwich/quran-academy-castle-bromwich-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'castle-bromwich')
    ->defaults('state', 'united-kingdom');

Route::get('/chelmsley-wood/quran-academy-chelmsley-wood-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chelmsley-wood')
    ->defaults('state', 'united-kingdom');

Route::get('/tees-grove/quran-academy-tees-grove-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tees-grove')
    ->defaults('state', 'united-kingdom');

Route::get('/bickenhill/quran-academy-bickenhill-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bickenhill')
    ->defaults('state', 'united-kingdom');

Route::get('/west-bromwich/quran-academy-west-bromwich-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'west-bromwich')
    ->defaults('state', 'united-kingdom');

Route::get('/coleshill/quran-academy-coleshill-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'coleshill')
    ->defaults('state', 'united-kingdom');

Route::get('/wythall/quran-academy-wythall-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wythall')
    ->defaults('state', 'united-kingdom');

Route::get('/alvechurch/quran-academy-alvechurch-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'alvechurch')
    ->defaults('state', 'united-kingdom');

Route::get('/alcester/quran-academy-alcester-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'alcester')
    ->defaults('state', 'united-kingdom');

Route::get('/bidford-on-avon/quran-academy-bidford-on-avon-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bidford-on-avon')
    ->defaults('state', 'united-kingdom');

Route::get('/bromsgrove/quran-academy-bromsgrove-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bromsgrove')
    ->defaults('state', 'united-kingdom');

Route::get('/hurst-green/quran-academy-hurst-green-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hurst-green')
    ->defaults('state', 'united-kingdom');

Route::get('/tamworth/quran-academy-tamworth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tamworth')
    ->defaults('state', 'united-kingdom');

Route::get('/wigginton/quran-academy-wigginton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wigginton')
    ->defaults('state', 'united-kingdom');

Route::get('/studley/quran-academy-studley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'studley')
    ->defaults('state', 'united-kingdom');

Route::get('/dorridge/quran-academy-dorridge-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dorridge')
    ->defaults('state', 'united-kingdom');

Route::get('/tanworth-in-arden/quran-academy-tanworth-in-arden-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tanworth-in-arden')
    ->defaults('state', 'united-kingdom');

Route::get('/henley-in-arden/quran-academy-henley-in-arden-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'henley-in-arden')
    ->defaults('state', 'united-kingdom');

Route::get('/redditch/quran-academy-redditch-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'redditch')
    ->defaults('state', 'united-kingdom');

Route::get('/bath/quran-academy-bath-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bath')
    ->defaults('state', 'united-kingdom');

Route::get('/bruton/quran-academy-bruton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bruton')
    ->defaults('state', 'united-kingdom');

Route::get('/frome/quran-academy-frome-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'frome')
    ->defaults('state', 'united-kingdom');

Route::get('/longbridge-deverill/quran-academy-longbridge-deverill-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'longbridge-deverill')
    ->defaults('state', 'united-kingdom');

Route::get('/westbury/quran-academy-westbury-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'westbury')
    ->defaults('state', 'united-kingdom');

Route::get('/trowbridge/quran-academy-trowbridge-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'trowbridge')
    ->defaults('state', 'united-kingdom');

Route::get('/bradford-on-avon/quran-academy-bradford-on-avon-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bradford-on-avon')
    ->defaults('state', 'united-kingdom');

Route::get('/street/quran-academy-street-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'street')
    ->defaults('state', 'united-kingdom');

Route::get('/yeovil/quran-academy-yeovil-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'yeovil')
    ->defaults('state', 'united-kingdom');

Route::get('/mudford/quran-academy-mudford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mudford')
    ->defaults('state', 'united-kingdom');

Route::get('/kilmersdon/quran-academy-kilmersdon-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kilmersdon')
    ->defaults('state', 'united-kingdom');

Route::get('/shepton-mallet/quran-academy-shepton-mallet-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'shepton-mallet')
    ->defaults('state', 'united-kingdom');

Route::get('/st-cuthbert-out/quran-academy-st-cuthbert-out-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'st-cuthbert-out')
    ->defaults('state', 'united-kingdom');

Route::get('/glastonbury/quran-academy-glastonbury-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'glastonbury')
    ->defaults('state', 'united-kingdom');

Route::get('/castle-cary/quran-academy-castle-cary-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'castle-cary')
    ->defaults('state', 'united-kingdom');

Route::get('/templecombe/quran-academy-templecombe-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'templecombe')
    ->defaults('state', 'united-kingdom');

Route::get('/wincanton/quran-academy-wincanton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wincanton')
    ->defaults('state', 'united-kingdom');

Route::get('/darwen/quran-academy-darwen-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'darwen')
    ->defaults('state', 'united-kingdom');

Route::get('/burnley/quran-academy-burnley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'burnley')
    ->defaults('state', 'united-kingdom');

Route::get('/ightenhill/quran-academy-ightenhill-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ightenhill')
    ->defaults('state', 'united-kingdom');

Route::get('/salterforth/quran-academy-salterforth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'salterforth')
    ->defaults('state', 'united-kingdom');

Route::get('/rawtenstall/quran-academy-rawtenstall-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rawtenstall')
    ->defaults('state', 'united-kingdom');

Route::get('/accrington/quran-academy-accrington-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'accrington')
    ->defaults('state', 'united-kingdom');

Route::get('/clitheroe/quran-academy-clitheroe-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'clitheroe')
    ->defaults('state', 'united-kingdom');

Route::get('/newchurch/quran-academy-newchurch-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'newchurch')
    ->defaults('state', 'united-kingdom');

Route::get('/queensbury/quran-academy-queensbury-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'queensbury')
    ->defaults('state', 'united-kingdom');

Route::get('/dewsbury/quran-academy-dewsbury-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dewsbury')
    ->defaults('state', 'united-kingdom');

Route::get('/bingley/quran-academy-bingley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bingley')
    ->defaults('state', 'united-kingdom');

Route::get('/steeton/quran-academy-steeton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'steeton')
    ->defaults('state', 'united-kingdom');

Route::get('/keighley/quran-academy-keighley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'keighley')
    ->defaults('state', 'united-kingdom');

Route::get('/thorlby/quran-academy-thorlby-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'thorlby')
    ->defaults('state', 'united-kingdom');

Route::get('/langcliffe/quran-academy-langcliffe-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'langcliffe')
    ->defaults('state', 'united-kingdom');

Route::get('/upton/quran-academy-upton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'upton')
    ->defaults('state', 'united-kingdom');

Route::get('/swanage/quran-academy-swanage-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'swanage')
    ->defaults('state', 'united-kingdom');

Route::get('/wareham/quran-academy-wareham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wareham')
    ->defaults('state', 'united-kingdom');

Route::get('/colehill/quran-academy-colehill-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'colehill')
    ->defaults('state', 'united-kingdom');

Route::get('/ferndown/quran-academy-ferndown-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ferndown')
    ->defaults('state', 'united-kingdom');

Route::get('/burton/quran-academy-burton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'burton')
    ->defaults('state', 'united-kingdom');

Route::get('/ringwood/quran-academy-ringwood-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ringwood')
    ->defaults('state', 'united-kingdom');

Route::get('/new-milton/quran-academy-new-milton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'new-milton')
    ->defaults('state', 'united-kingdom');

Route::get('/verwood/quran-academy-verwood-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'verwood')
    ->defaults('state', 'united-kingdom');

Route::get('/ramsbottom/quran-academy-ramsbottom-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ramsbottom')
    ->defaults('state', 'united-kingdom');

Route::get('/westhoughton/quran-academy-westhoughton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'westhoughton')
    ->defaults('state', 'united-kingdom');

Route::get('/horwich/quran-academy-horwich-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'horwich')
    ->defaults('state', 'united-kingdom');

Route::get('/brighton/quran-academy-brighton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'brighton')
    ->defaults('state', 'united-kingdom');

Route::get('/peacehaven/quran-academy-peacehaven-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'peacehaven')
    ->defaults('state', 'united-kingdom');

Route::get('/worthing/quran-academy-worthing-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'worthing')
    ->defaults('state', 'united-kingdom');

Route::get('/lancing/quran-academy-lancing-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lancing')
    ->defaults('state', 'united-kingdom');

Route::get('/rustington/quran-academy-rustington-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rustington')
    ->defaults('state', 'united-kingdom');

Route::get('/littlehampton/quran-academy-littlehampton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'littlehampton')
    ->defaults('state', 'united-kingdom');

Route::get('/arundel/quran-academy-arundel-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'arundel')
    ->defaults('state', 'united-kingdom');

Route::get('/eastbourne/quran-academy-eastbourne-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'eastbourne')
    ->defaults('state', 'united-kingdom');

Route::get('/westham/quran-academy-westham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'westham')
    ->defaults('state', 'united-kingdom');

Route::get('/seaford/quran-academy-seaford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'seaford')
    ->defaults('state', 'united-kingdom');

Route::get('/long-man/quran-academy-long-man-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'long-man')
    ->defaults('state', 'united-kingdom');

Route::get('/hailsham/quran-academy-hailsham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hailsham')
    ->defaults('state', 'united-kingdom');

Route::get('/shoreham-by-sea/quran-academy-shoreham-by-sea-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'shoreham-by-sea')
    ->defaults('state', 'united-kingdom');

Route::get('/steyning/quran-academy-steyning-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'steyning')
    ->defaults('state', 'united-kingdom');

Route::get('/newtimber/quran-academy-newtimber-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'newtimber')
    ->defaults('state', 'united-kingdom');

Route::get('/henfield/quran-academy-henfield-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'henfield')
    ->defaults('state', 'united-kingdom');

Route::get('/clayton/quran-academy-clayton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'clayton')
    ->defaults('state', 'united-kingdom');

Route::get('/lewes/quran-academy-lewes-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lewes')
    ->defaults('state', 'united-kingdom');

Route::get('/ringmer/quran-academy-ringmer-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ringmer')
    ->defaults('state', 'united-kingdom');

Route::get('/newhaven/quran-academy-newhaven-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'newhaven')
    ->defaults('state', 'united-kingdom');

Route::get('/bromley/quran-academy-bromley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bromley')
    ->defaults('state', 'united-kingdom');

Route::get('/swanley/quran-academy-swanley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'swanley')
    ->defaults('state', 'united-kingdom');

Route::get('/bristol/quran-academy-bristol-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bristol')
    ->defaults('state', 'united-kingdom');

Route::get('/kingswood/quran-academy-kingswood-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kingswood')
    ->defaults('state', 'united-kingdom');

Route::get('/portbury/quran-academy-portbury-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'portbury')
    ->defaults('state', 'united-kingdom');

Route::get('/clevedon/quran-academy-clevedon-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'clevedon')
    ->defaults('state', 'united-kingdom');

Route::get('/weston-super-mare/quran-academy-weston-super-mare-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'weston-super-mare')
    ->defaults('state', 'united-kingdom');

Route::get('/hutton/quran-academy-hutton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hutton')
    ->defaults('state', 'united-kingdom');

Route::get('/winscombe/quran-academy-winscombe-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'winscombe')
    ->defaults('state', 'united-kingdom');

Route::get('/weare/quran-academy-weare-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'weare')
    ->defaults('state', 'united-kingdom');

Route::get('/cheddar/quran-academy-cheddar-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'cheddar')
    ->defaults('state', 'united-kingdom');

Route::get('/wedmore/quran-academy-wedmore-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wedmore')
    ->defaults('state', 'united-kingdom');

Route::get('/banwell/quran-academy-banwell-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'banwell')
    ->defaults('state', 'united-kingdom');

Route::get('/bitton/quran-academy-bitton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bitton')
    ->defaults('state', 'united-kingdom');

Route::get('/keynsham/quran-academy-keynsham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'keynsham')
    ->defaults('state', 'united-kingdom');

Route::get('/bradley-stoke/quran-academy-bradley-stoke-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bradley-stoke')
    ->defaults('state', 'united-kingdom');

Route::get('/stoke-gifford/quran-academy-stoke-gifford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stoke-gifford')
    ->defaults('state', 'united-kingdom');

Route::get('/aust/quran-academy-aust-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aust')
    ->defaults('state', 'united-kingdom');

Route::get('/frampton-cotterell/quran-academy-frampton-cotterell-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'frampton-cotterell')
    ->defaults('state', 'united-kingdom');

Route::get('/yate/quran-academy-yate-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'yate')
    ->defaults('state', 'united-kingdom');

Route::get('/clutton/quran-academy-clutton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'clutton')
    ->defaults('state', 'united-kingdom');

Route::get('/nempnett-thrubwell/quran-academy-nempnett-thrubwell-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nempnett-thrubwell')
    ->defaults('state', 'united-kingdom');

Route::get('/long-ashton/quran-academy-long-ashton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'long-ashton')
    ->defaults('state', 'united-kingdom');

Route::get('/nailsea/quran-academy-nailsea-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nailsea')
    ->defaults('state', 'united-kingdom');

Route::get('/yatton/quran-academy-yatton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'yatton')
    ->defaults('state', 'united-kingdom');

Route::get('/dundonald/quran-academy-dundonald-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dundonald')
    ->defaults('state', 'united-kingdom');

Route::get('/dunmurry/quran-academy-dunmurry-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dunmurry')
    ->defaults('state', 'united-kingdom');

Route::get('/holywood/quran-academy-holywood-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'holywood')
    ->defaults('state', 'united-kingdom');

Route::get('/bangor/quran-academy-bangor-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bangor')
    ->defaults('state', 'united-kingdom');

Route::get('/donaghadee/quran-academy-donaghadee-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'donaghadee')
    ->defaults('state', 'united-kingdom');

Route::get('/downpatrick/quran-academy-downpatrick-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'downpatrick')
    ->defaults('state', 'united-kingdom');

Route::get('/newcastle/quran-academy-newcastle-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'newcastle')
    ->defaults('state', 'united-kingdom');

Route::get('/whiteabbey/quran-academy-whiteabbey-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'whiteabbey')
    ->defaults('state', 'united-kingdom');

Route::get('/mill-town/quran-academy-mill-town-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mill-town')
    ->defaults('state', 'united-kingdom');

Route::get('/londonderry/quran-academy-londonderry-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'londonderry')
    ->defaults('state', 'united-kingdom');

Route::get('/ballycastle/quran-academy-ballycastle-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ballycastle')
    ->defaults('state', 'united-kingdom');

Route::get('/portstewart/quran-academy-portstewart-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'portstewart')
    ->defaults('state', 'united-kingdom');

Route::get('/portrush/quran-academy-portrush-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'portrush')
    ->defaults('state', 'united-kingdom');

Route::get('/bushmills/quran-academy-bushmills-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bushmills')
    ->defaults('state', 'united-kingdom');

Route::get('/portadown/quran-academy-portadown-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'portadown')
    ->defaults('state', 'united-kingdom');

Route::get('/lurgan/quran-academy-lurgan-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lurgan')
    ->defaults('state', 'united-kingdom');

Route::get('/fivemiletown/quran-academy-fivemiletown-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'fivemiletown')
    ->defaults('state', 'united-kingdom');

Route::get('/carryduff/quran-academy-carryduff-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'carryduff')
    ->defaults('state', 'united-kingdom');

Route::get('/carlisle/quran-academy-carlisle-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'carlisle')
    ->defaults('state', 'united-kingdom');

Route::get('/cliburn/quran-academy-cliburn-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'cliburn')
    ->defaults('state', 'united-kingdom');

Route::get('/catterlen/quran-academy-catterlen-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'catterlen')
    ->defaults('state', 'united-kingdom');

Route::get('/keswick/quran-academy-keswick-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'keswick')
    ->defaults('state', 'united-kingdom');

Route::get('/cockermouth/quran-academy-cockermouth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'cockermouth')
    ->defaults('state', 'united-kingdom');

Route::get('/workington/quran-academy-workington-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'workington')
    ->defaults('state', 'united-kingdom');

Route::get('/maryport/quran-academy-maryport-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'maryport')
    ->defaults('state', 'united-kingdom');

Route::get('/appleby-in-westmorland/quran-academy-appleby-in-westmorland-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'appleby-in-westmorland')
    ->defaults('state', 'united-kingdom');

Route::get('/kirkby-stephen/quran-academy-kirkby-stephen-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kirkby-stephen')
    ->defaults('state', 'united-kingdom');

Route::get('/muncaster/quran-academy-muncaster-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'muncaster')
    ->defaults('state', 'united-kingdom');

Route::get('/gosforth/quran-academy-gosforth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gosforth')
    ->defaults('state', 'united-kingdom');

Route::get('/beckermet/quran-academy-beckermet-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'beckermet')
    ->defaults('state', 'united-kingdom');

Route::get('/egremont/quran-academy-egremont-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'egremont')
    ->defaults('state', 'united-kingdom');

Route::get('/cleator-moor/quran-academy-cleator-moor-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'cleator-moor')
    ->defaults('state', 'united-kingdom');

Route::get('/arlecdon/quran-academy-arlecdon-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'arlecdon')
    ->defaults('state', 'united-kingdom');

Route::get('/st-bees/quran-academy-st-bees-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'st-bees')
    ->defaults('state', 'united-kingdom');

Route::get('/whitehaven/quran-academy-whitehaven-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'whitehaven')
    ->defaults('state', 'united-kingdom');

Route::get('/wetheral/quran-academy-wetheral-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wetheral')
    ->defaults('state', 'united-kingdom');

Route::get('/orton/quran-academy-orton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'orton')
    ->defaults('state', 'united-kingdom');

Route::get('/kirklinton/quran-academy-kirklinton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kirklinton')
    ->defaults('state', 'united-kingdom');

Route::get('/waverton/quran-academy-waverton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'waverton')
    ->defaults('state', 'united-kingdom');

Route::get('/brampton/quran-academy-brampton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'brampton')
    ->defaults('state', 'united-kingdom');

Route::get('/alston/quran-academy-alston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'alston')
    ->defaults('state', 'united-kingdom');

Route::get('/fulbourn/quran-academy-fulbourn-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'fulbourn')
    ->defaults('state', 'united-kingdom');

Route::get('/saffron-walden/quran-academy-saffron-walden-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'saffron-walden')
    ->defaults('state', 'united-kingdom');

Route::get('/newport/quran-academy-newport-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'newport')
    ->defaults('state', 'united-kingdom');

Route::get('/great-shelford/quran-academy-great-shelford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'great-shelford')
    ->defaults('state', 'united-kingdom');

Route::get('/balsham/quran-academy-balsham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'balsham')
    ->defaults('state', 'united-kingdom');

Route::get('/little-shelford/quran-academy-little-shelford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'little-shelford')
    ->defaults('state', 'united-kingdom');

Route::get('/highfields/quran-academy-highfields-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'highfields')
    ->defaults('state', 'united-kingdom');

Route::get('/over/quran-academy-over-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'over')
    ->defaults('state', 'united-kingdom');

Route::get('/lode/quran-academy-lode-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lode')
    ->defaults('state', 'united-kingdom');

Route::get('/hardwick/quran-academy-hardwick-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hardwick')
    ->defaults('state', 'united-kingdom');

Route::get('/impington/quran-academy-impington-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'impington')
    ->defaults('state', 'united-kingdom');

Route::get('/stow-cum-quy/quran-academy-stow-cum-quy-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stow-cum-quy')
    ->defaults('state', 'united-kingdom');

Route::get('/downham/quran-academy-downham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'downham')
    ->defaults('state', 'united-kingdom');

Route::get('/soham/quran-academy-soham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'soham')
    ->defaults('state', 'united-kingdom');

Route::get('/woodditton/quran-academy-woodditton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'woodditton')
    ->defaults('state', 'united-kingdom');

Route::get('/haverhill/quran-academy-haverhill-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'haverhill')
    ->defaults('state', 'united-kingdom');

Route::get('/butetown/quran-academy-butetown-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'butetown')
    ->defaults('state', 'united-kingdom');

Route::get('/grangetown/quran-academy-grangetown-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'grangetown')
    ->defaults('state', 'united-kingdom');

Route::get('/rhiwbina/quran-academy-rhiwbina-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rhiwbina')
    ->defaults('state', 'united-kingdom');

Route::get('/pentyrch/quran-academy-pentyrch-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pentyrch')
    ->defaults('state', 'united-kingdom');

Route::get('/pentwyn/quran-academy-pentwyn-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pentwyn')
    ->defaults('state', 'united-kingdom');

Route::get('/adamsdown/quran-academy-adamsdown-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'adamsdown')
    ->defaults('state', 'united-kingdom');

Route::get('/garw-valley/quran-academy-garw-valley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'garw-valley')
    ->defaults('state', 'united-kingdom');

Route::get('/cynffig/quran-academy-cynffig-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'cynffig')
    ->defaults('state', 'united-kingdom');

Route::get('/maesteg/quran-academy-maesteg-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'maesteg')
    ->defaults('state', 'united-kingdom');

Route::get('/pencoed/quran-academy-pencoed-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pencoed')
    ->defaults('state', 'united-kingdom');

Route::get('/porthcawl/quran-academy-porthcawl-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'porthcawl')
    ->defaults('state', 'united-kingdom');

Route::get('/pontypridd/quran-academy-pontypridd-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pontypridd')
    ->defaults('state', 'united-kingdom');

Route::get('/llantwit-fardre/quran-academy-llantwit-fardre-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llantwit-fardre')
    ->defaults('state', 'united-kingdom');

Route::get('/cymmer/quran-academy-cymmer-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'cymmer')
    ->defaults('state', 'united-kingdom');

Route::get('/tonypandy/quran-academy-tonypandy-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tonypandy')
    ->defaults('state', 'united-kingdom');

Route::get('/ystrad/quran-academy-ystrad-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ystrad')
    ->defaults('state', 'united-kingdom');

Route::get('/treorchy/quran-academy-treorchy-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'treorchy')
    ->defaults('state', 'united-kingdom');

Route::get('/ferndale/quran-academy-ferndale-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ferndale')
    ->defaults('state', 'united-kingdom');

Route::get('/aberdare/quran-academy-aberdare-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aberdare')
    ->defaults('state', 'united-kingdom');

Route::get('/penrhiwceiber/quran-academy-penrhiwceiber-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'penrhiwceiber')
    ->defaults('state', 'united-kingdom');

Route::get('/treharris/quran-academy-treharris-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'treharris')
    ->defaults('state', 'united-kingdom');

Route::get('/ely/quran-academy-ely-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ely')
    ->defaults('state', 'united-kingdom');

Route::get('/llantwit-major/quran-academy-llantwit-major-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llantwit-major')
    ->defaults('state', 'united-kingdom');

Route::get('/barry/quran-academy-barry-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'barry')
    ->defaults('state', 'united-kingdom');

Route::get('/penarth/quran-academy-penarth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'penarth')
    ->defaults('state', 'united-kingdom');

Route::get('/cowbridge/quran-academy-cowbridge-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'cowbridge')
    ->defaults('state', 'united-kingdom');

Route::get('/llanharan/quran-academy-llanharan-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llanharan')
    ->defaults('state', 'united-kingdom');

Route::get('/bargoed/quran-academy-bargoed-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bargoed')
    ->defaults('state', 'united-kingdom');

Route::get('/gelligaer/quran-academy-gelligaer-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gelligaer')
    ->defaults('state', 'united-kingdom');

Route::get('/chester/quran-academy-chester-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chester')
    ->defaults('state', 'united-kingdom');

Route::get('/saltney/quran-academy-saltney-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'saltney')
    ->defaults('state', 'united-kingdom');

Route::get('/birkenhead/quran-academy-birkenhead-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'birkenhead')
    ->defaults('state', 'united-kingdom');

Route::get('/wallasey/quran-academy-wallasey-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wallasey')
    ->defaults('state', 'united-kingdom');

Route::get('/hoylake/quran-academy-hoylake-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hoylake')
    ->defaults('state', 'united-kingdom');

Route::get('/shotton/quran-academy-shotton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'shotton')
    ->defaults('state', 'united-kingdom');

Route::get('/flint/quran-academy-flint-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'flint')
    ->defaults('state', 'united-kingdom');

Route::get('/heswall/quran-academy-heswall-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'heswall')
    ->defaults('state', 'united-kingdom');

Route::get('/ellesmere-port/quran-academy-ellesmere-port-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ellesmere-port')
    ->defaults('state', 'united-kingdom');

Route::get('/mold/quran-academy-mold-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mold')
    ->defaults('state', 'united-kingdom');

Route::get('/holywell/quran-academy-holywell-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'holywell')
    ->defaults('state', 'united-kingdom');

Route::get('/southminster/quran-academy-southminster-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'southminster')
    ->defaults('state', 'united-kingdom');

Route::get('/chelmsford/quran-academy-chelmsford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chelmsford')
    ->defaults('state', 'united-kingdom');

Route::get('/billericay/quran-academy-billericay-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'billericay')
    ->defaults('state', 'united-kingdom');

Route::get('/brentwood/quran-academy-brentwood-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'brentwood')
    ->defaults('state', 'united-kingdom');

Route::get('/epping/quran-academy-epping-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'epping')
    ->defaults('state', 'united-kingdom');

Route::get('/harlow/quran-academy-harlow-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'harlow')
    ->defaults('state', 'united-kingdom');

Route::get('/great-baddow/quran-academy-great-baddow-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'great-baddow')
    ->defaults('state', 'united-kingdom');

Route::get('/sawbridgeworth/quran-academy-sawbridgeworth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sawbridgeworth')
    ->defaults('state', 'united-kingdom');

Route::get('/great-hallingbury/quran-academy-great-hallingbury-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'great-hallingbury')
    ->defaults('state', 'united-kingdom');

Route::get('/bishops-stortford/quran-academy-bishops-stortford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bishops-stortford')
    ->defaults('state', 'united-kingdom');

Route::get('/stansted-mountfitchet/quran-academy-stansted-mountfitchet-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stansted-mountfitchet')
    ->defaults('state', 'united-kingdom');

Route::get('/danbury/quran-academy-danbury-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'danbury')
    ->defaults('state', 'united-kingdom');

Route::get('/ingatestone/quran-academy-ingatestone-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ingatestone')
    ->defaults('state', 'united-kingdom');

Route::get('/ongar/quran-academy-ongar-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ongar')
    ->defaults('state', 'united-kingdom');

Route::get('/great-dunmow/quran-academy-great-dunmow-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'great-dunmow')
    ->defaults('state', 'united-kingdom');

Route::get('/braintree/quran-academy-braintree-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'braintree')
    ->defaults('state', 'united-kingdom');

Route::get('/witham/quran-academy-witham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'witham')
    ->defaults('state', 'united-kingdom');

Route::get('/heybridge/quran-academy-heybridge-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'heybridge')
    ->defaults('state', 'united-kingdom');

Route::get('/colchester/quran-academy-colchester-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'colchester')
    ->defaults('state', 'united-kingdom');

Route::get('/sudbury/quran-academy-sudbury-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sudbury')
    ->defaults('state', 'united-kingdom');

Route::get('/mistley/quran-academy-mistley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mistley')
    ->defaults('state', 'united-kingdom');

Route::get('/harwich/quran-academy-harwich-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'harwich')
    ->defaults('state', 'united-kingdom');

Route::get('/frinton-and-walton/quran-academy-frinton-and-walton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'frinton-and-walton')
    ->defaults('state', 'united-kingdom');

Route::get('/clacton-on-sea/quran-academy-clacton-on-sea-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'clacton-on-sea')
    ->defaults('state', 'united-kingdom');

Route::get('/little-clacton/quran-academy-little-clacton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'little-clacton')
    ->defaults('state', 'united-kingdom');

Route::get('/layer-breton/quran-academy-layer-breton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'layer-breton')
    ->defaults('state', 'united-kingdom');

Route::get('/fordham/quran-academy-fordham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'fordham')
    ->defaults('state', 'united-kingdom');

Route::get('/elmstead/quran-academy-elmstead-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'elmstead')
    ->defaults('state', 'united-kingdom');

Route::get('/bures-hamlet/quran-academy-bures-hamlet-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bures-hamlet')
    ->defaults('state', 'united-kingdom');

Route::get('/sible-hedingham/quran-academy-sible-hedingham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sible-hedingham')
    ->defaults('state', 'united-kingdom');

Route::get('/croydon/quran-academy-croydon-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'croydon')
    ->defaults('state', 'united-kingdom');

Route::get('/whyteleafe/quran-academy-whyteleafe-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'whyteleafe')
    ->defaults('state', 'united-kingdom');

Route::get('/merton/quran-academy-merton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'merton')
    ->defaults('state', 'united-kingdom');

Route::get('/canterbury/quran-academy-canterbury-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'canterbury')
    ->defaults('state', 'united-kingdom');

Route::get('/broadstairs/quran-academy-broadstairs-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'broadstairs')
    ->defaults('state', 'united-kingdom');

Route::get('/margate/quran-academy-margate-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'margate')
    ->defaults('state', 'united-kingdom');

Route::get('/manston/quran-academy-manston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'manston')
    ->defaults('state', 'united-kingdom');

Route::get('/sandwich/quran-academy-sandwich-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sandwich')
    ->defaults('state', 'united-kingdom');

Route::get('/dover/quran-academy-dover-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dover')
    ->defaults('state', 'united-kingdom');

Route::get('/whitfield/quran-academy-whitfield-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'whitfield')
    ->defaults('state', 'united-kingdom');

Route::get('/hawkinge/quran-academy-hawkinge-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hawkinge')
    ->defaults('state', 'united-kingdom');

Route::get('/folkestone/quran-academy-folkestone-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'folkestone')
    ->defaults('state', 'united-kingdom');

Route::get('/hythe/quran-academy-hythe-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hythe')
    ->defaults('state', 'united-kingdom');

Route::get('/wingham/quran-academy-wingham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wingham')
    ->defaults('state', 'united-kingdom');

Route::get('/lower-hardres/quran-academy-lower-hardres-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lower-hardres')
    ->defaults('state', 'united-kingdom');

Route::get('/birchington/quran-academy-birchington-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'birchington')
    ->defaults('state', 'united-kingdom');

Route::get('/nuneaton/quran-academy-nuneaton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nuneaton')
    ->defaults('state', 'united-kingdom');

Route::get('/bedworth/quran-academy-bedworth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bedworth')
    ->defaults('state', 'united-kingdom');

Route::get('/market-bosworth/quran-academy-market-bosworth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'market-bosworth')
    ->defaults('state', 'united-kingdom');

Route::get('/rugby/quran-academy-rugby-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rugby')
    ->defaults('state', 'united-kingdom');

Route::get('/dunchurch/quran-academy-dunchurch-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dunchurch')
    ->defaults('state', 'united-kingdom');

Route::get('/leamington-spa/quran-academy-leamington-spa-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'leamington-spa')
    ->defaults('state', 'united-kingdom');

Route::get('/radford-semele/quran-academy-radford-semele-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'radford-semele')
    ->defaults('state', 'united-kingdom');

Route::get('/warwick/quran-academy-warwick-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'warwick')
    ->defaults('state', 'united-kingdom');

Route::get('/wasperton/quran-academy-wasperton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wasperton')
    ->defaults('state', 'united-kingdom');

Route::get('/shipston-on-stour/quran-academy-shipston-on-stour-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'shipston-on-stour')
    ->defaults('state', 'united-kingdom');

Route::get('/stratford-upon-avon/quran-academy-stratford-upon-avon-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stratford-upon-avon')
    ->defaults('state', 'united-kingdom');

Route::get('/ladbroke/quran-academy-ladbroke-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ladbroke')
    ->defaults('state', 'united-kingdom');

Route::get('/hawkes-end/quran-academy-hawkes-end-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hawkes-end')
    ->defaults('state', 'united-kingdom');

Route::get('/kenilworth/quran-academy-kenilworth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kenilworth')
    ->defaults('state', 'united-kingdom');

Route::get('/atherstone/quran-academy-atherstone-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'atherstone')
    ->defaults('state', 'united-kingdom');

Route::get('/crewe/quran-academy-crewe-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'crewe')
    ->defaults('state', 'united-kingdom');

Route::get('/middlewich/quran-academy-middlewich-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'middlewich')
    ->defaults('state', 'united-kingdom');

Route::get('/sandbach/quran-academy-sandbach-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sandbach')
    ->defaults('state', 'united-kingdom');

Route::get('/congleton/quran-academy-congleton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'congleton')
    ->defaults('state', 'united-kingdom');

Route::get('/bridgemere/quran-academy-bridgemere-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bridgemere')
    ->defaults('state', 'united-kingdom');

Route::get('/holmes-chapel/quran-academy-holmes-chapel-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'holmes-chapel')
    ->defaults('state', 'united-kingdom');

Route::get('/nantwich/quran-academy-nantwich-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nantwich')
    ->defaults('state', 'united-kingdom');

Route::get('/tarporley/quran-academy-tarporley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tarporley')
    ->defaults('state', 'united-kingdom');

Route::get('/winsford/quran-academy-winsford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'winsford')
    ->defaults('state', 'united-kingdom');

Route::get('/weaverham/quran-academy-weaverham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'weaverham')
    ->defaults('state', 'united-kingdom');

Route::get('/northwich/quran-academy-northwich-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'northwich')
    ->defaults('state', 'united-kingdom');

Route::get('/dartford/quran-academy-dartford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dartford')
    ->defaults('state', 'united-kingdom');

Route::get('/swanscombe/quran-academy-swanscombe-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'swanscombe')
    ->defaults('state', 'united-kingdom');

Route::get('/gravesend/quran-academy-gravesend-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gravesend')
    ->defaults('state', 'united-kingdom');

Route::get('/meopham-station/quran-academy-meopham-station-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'meopham-station')
    ->defaults('state', 'united-kingdom');

Route::get('/bexley/quran-academy-bexley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bexley')
    ->defaults('state', 'united-kingdom');

Route::get('/crayford/quran-academy-crayford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'crayford')
    ->defaults('state', 'united-kingdom');

Route::get('/darenth/quran-academy-darenth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'darenth')
    ->defaults('state', 'united-kingdom');

Route::get('/hartley/quran-academy-hartley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hartley')
    ->defaults('state', 'united-kingdom');

Route::get('/horton-kirby/quran-academy-horton-kirby-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'horton-kirby')
    ->defaults('state', 'united-kingdom');

Route::get('/stone/quran-academy-stone-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stone')
    ->defaults('state', 'united-kingdom');

Route::get('/dundee/quran-academy-dundee-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dundee')
    ->defaults('state', 'united-kingdom');

Route::get('/kirkton/quran-academy-kirkton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kirkton')
    ->defaults('state', 'united-kingdom');

Route::get('/carnoustie/quran-academy-carnoustie-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'carnoustie')
    ->defaults('state', 'united-kingdom');

Route::get('/swadlincote/quran-academy-swadlincote-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'swadlincote')
    ->defaults('state', 'united-kingdom');

Route::get('/overseal/quran-academy-overseal-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'overseal')
    ->defaults('state', 'united-kingdom');

Route::get('/branston/quran-academy-branston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'branston')
    ->defaults('state', 'united-kingdom');

Route::get('/burton-upon-trent/quran-academy-burton-upon-trent-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'burton-upon-trent')
    ->defaults('state', 'united-kingdom');

Route::get('/mickleover/quran-academy-mickleover-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mickleover')
    ->defaults('state', 'united-kingdom');

Route::get('/matlock-bath/quran-academy-matlock-bath-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'matlock-bath')
    ->defaults('state', 'united-kingdom');

Route::get('/bakewell/quran-academy-bakewell-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bakewell')
    ->defaults('state', 'united-kingdom');

Route::get('/ripley/quran-academy-ripley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ripley')
    ->defaults('state', 'united-kingdom');

Route::get('/alfreton/quran-academy-alfreton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'alfreton')
    ->defaults('state', 'united-kingdom');

Route::get('/belper/quran-academy-belper-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'belper')
    ->defaults('state', 'united-kingdom');

Route::get('/osmaston/quran-academy-osmaston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'osmaston')
    ->defaults('state', 'united-kingdom');

Route::get('/hilton/quran-academy-hilton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hilton')
    ->defaults('state', 'united-kingdom');

Route::get('/ilkeston/quran-academy-ilkeston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ilkeston')
    ->defaults('state', 'united-kingdom');

Route::get('/draycott/quran-academy-draycott-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'draycott')
    ->defaults('state', 'united-kingdom');

Route::get('/swarkestone/quran-academy-swarkestone-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'swarkestone')
    ->defaults('state', 'united-kingdom');

Route::get('/lockington/quran-academy-lockington-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lockington')
    ->defaults('state', 'united-kingdom');

Route::get('/heanor/quran-academy-heanor-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'heanor')
    ->defaults('state', 'united-kingdom');

Route::get('/annan/quran-academy-annan-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'annan')
    ->defaults('state', 'united-kingdom');

Route::get('/gretna/quran-academy-gretna-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gretna')
    ->defaults('state', 'united-kingdom');

Route::get('/dalbeattie/quran-academy-dalbeattie-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dalbeattie')
    ->defaults('state', 'united-kingdom');

Route::get('/kirkcudbright/quran-academy-kirkcudbright-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kirkcudbright')
    ->defaults('state', 'united-kingdom');

Route::get('/durham/quran-academy-durham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'durham')
    ->defaults('state', 'united-kingdom');

Route::get('/chester-le-street/quran-academy-chester-le-street-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chester-le-street')
    ->defaults('state', 'united-kingdom');

Route::get('/north-lodge/quran-academy-north-lodge-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'north-lodge')
    ->defaults('state', 'united-kingdom');

Route::get('/houghton-le-spring/quran-academy-houghton-le-spring-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'houghton-le-spring')
    ->defaults('state', 'united-kingdom');

Route::get('/hetton/quran-academy-hetton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hetton')
    ->defaults('state', 'united-kingdom');

Route::get('/shadforth/quran-academy-shadforth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'shadforth')
    ->defaults('state', 'united-kingdom');

Route::get('/esh/quran-academy-esh-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'esh')
    ->defaults('state', 'united-kingdom');

Route::get('/burnhope/quran-academy-burnhope-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'burnhope')
    ->defaults('state', 'united-kingdom');

Route::get('/stanley/quran-academy-stanley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stanley')
    ->defaults('state', 'united-kingdom');

Route::get('/skeeby/quran-academy-skeeby-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'skeeby')
    ->defaults('state', 'united-kingdom');

Route::get('/marske/quran-academy-marske-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'marske')
    ->defaults('state', 'united-kingdom');

Route::get('/cotherstone/quran-academy-cotherstone-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'cotherstone')
    ->defaults('state', 'united-kingdom');

Route::get('/stanhope/quran-academy-stanhope-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stanhope')
    ->defaults('state', 'united-kingdom');

Route::get('/lcp-stanhope-and-wolsingham-parishes-and/quran-academy-lcp-stanhope-and-wolsingham-parishes-and-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lcp-stanhope-and-wolsingham-parishes-and')
    ->defaults('state', 'united-kingdom');

Route::get('/spennymoor/quran-academy-spennymoor-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'spennymoor')
    ->defaults('state', 'united-kingdom');

Route::get('/ferryhill/quran-academy-ferryhill-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ferryhill')
    ->defaults('state', 'united-kingdom');

Route::get('/halnaby-ave/quran-academy-halnaby-ave-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'halnaby-ave')
    ->defaults('state', 'united-kingdom');

Route::get('/shildon/quran-academy-shildon-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'shildon')
    ->defaults('state', 'united-kingdom');

Route::get('/great-aycliffe/quran-academy-great-aycliffe-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'great-aycliffe')
    ->defaults('state', 'united-kingdom');

Route::get('/winton/quran-academy-winton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'winton')
    ->defaults('state', 'united-kingdom');

Route::get('/yafforth/quran-academy-yafforth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'yafforth')
    ->defaults('state', 'united-kingdom');

Route::get('/spennithorne/quran-academy-spennithorne-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'spennithorne')
    ->defaults('state', 'united-kingdom');

Route::get('/colburn/quran-academy-colburn-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'colburn')
    ->defaults('state', 'united-kingdom');

Route::get('/everton/quran-academy-everton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'everton')
    ->defaults('state', 'united-kingdom');

Route::get('/tickhill/quran-academy-tickhill-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tickhill')
    ->defaults('state', 'united-kingdom');

Route::get('/conisbrough/quran-academy-conisbrough-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'conisbrough')
    ->defaults('state', 'united-kingdom');

Route::get('/airmyn/quran-academy-airmyn-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'airmyn')
    ->defaults('state', 'united-kingdom');

Route::get('/burringham/quran-academy-burringham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'burringham')
    ->defaults('state', 'united-kingdom');

Route::get('/barton-upon-humber/quran-academy-barton-upon-humber-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'barton-upon-humber')
    ->defaults('state', 'united-kingdom');

Route::get('/barrow-upon-humber/quran-academy-barrow-upon-humber-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'barrow-upon-humber')
    ->defaults('state', 'united-kingdom');

Route::get('/broughton/quran-academy-broughton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'broughton')
    ->defaults('state', 'united-kingdom');

Route::get('/corringham/quran-academy-corringham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'corringham')
    ->defaults('state', 'united-kingdom');

Route::get('/clumber-and-hardwick/quran-academy-clumber-and-hardwick-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'clumber-and-hardwick')
    ->defaults('state', 'united-kingdom');

Route::get('/edenthorpe/quran-academy-edenthorpe-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'edenthorpe')
    ->defaults('state', 'united-kingdom');

Route::get('/cleethorpes/quran-academy-cleethorpes-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'cleethorpes')
    ->defaults('state', 'united-kingdom');

Route::get('/tetney/quran-academy-tetney-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tetney')
    ->defaults('state', 'united-kingdom');

Route::get('/bradley/quran-academy-bradley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bradley')
    ->defaults('state', 'united-kingdom');

Route::get('/bigby/quran-academy-bigby-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bigby')
    ->defaults('state', 'united-kingdom');

Route::get('/ulceby/quran-academy-ulceby-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ulceby')
    ->defaults('state', 'united-kingdom');

Route::get('/immingham/quran-academy-immingham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'immingham')
    ->defaults('state', 'united-kingdom');

Route::get('/stallingborough/quran-academy-stallingborough-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stallingborough')
    ->defaults('state', 'united-kingdom');

Route::get('/brodsworth/quran-academy-brodsworth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'brodsworth')
    ->defaults('state', 'united-kingdom');

Route::get('/owston/quran-academy-owston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'owston')
    ->defaults('state', 'united-kingdom');

Route::get('/thorne/quran-academy-thorne-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'thorne')
    ->defaults('state', 'united-kingdom');

Route::get('/haxey/quran-academy-haxey-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'haxey')
    ->defaults('state', 'united-kingdom');

Route::get('/dorchester/quran-academy-dorchester-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dorchester')
    ->defaults('state', 'united-kingdom');

Route::get('/sturminster-newton/quran-academy-sturminster-newton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sturminster-newton')
    ->defaults('state', 'united-kingdom');

Route::get('/bryanston/quran-academy-bryanston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bryanston')
    ->defaults('state', 'united-kingdom');

Route::get('/charminster/quran-academy-charminster-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'charminster')
    ->defaults('state', 'united-kingdom');

Route::get('/weymouth/quran-academy-weymouth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'weymouth')
    ->defaults('state', 'united-kingdom');

Route::get('/portland/quran-academy-portland-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'portland')
    ->defaults('state', 'united-kingdom');

Route::get('/allington/quran-academy-allington-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'allington')
    ->defaults('state', 'united-kingdom');

Route::get('/lyme-regis/quran-academy-lyme-regis-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lyme-regis')
    ->defaults('state', 'united-kingdom');

Route::get('/beaminster/quran-academy-beaminster-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'beaminster')
    ->defaults('state', 'united-kingdom');

Route::get('/castleton/quran-academy-castleton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'castleton')
    ->defaults('state', 'united-kingdom');

Route::get('/kidderminster/quran-academy-kidderminster-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kidderminster')
    ->defaults('state', 'united-kingdom');

Route::get('/upper-arley/quran-academy-upper-arley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'upper-arley')
    ->defaults('state', 'united-kingdom');

Route::get('/stourport-on-severn/quran-academy-stourport-on-severn-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stourport-on-severn')
    ->defaults('state', 'united-kingdom');

Route::get('/cleobury-mortimer/quran-academy-cleobury-mortimer-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'cleobury-mortimer')
    ->defaults('state', 'united-kingdom');

Route::get('/kinver/quran-academy-kinver-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kinver')
    ->defaults('state', 'united-kingdom');

Route::get('/poplar/quran-academy-poplar-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'poplar')
    ->defaults('state', 'united-kingdom');

Route::get('/walthamstow/quran-academy-walthamstow-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'walthamstow')
    ->defaults('state', 'united-kingdom');

Route::get('/stratford/quran-academy-stratford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stratford')
    ->defaults('state', 'united-kingdom');

Route::get('/east-ham/quran-academy-east-ham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'east-ham')
    ->defaults('state', 'united-kingdom');

Route::get('/ilford/quran-academy-ilford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ilford')
    ->defaults('state', 'united-kingdom');

Route::get('/queen-elizabeth-olympic-park/quran-academy-queen-elizabeth-olympic-park-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'queen-elizabeth-olympic-park')
    ->defaults('state', 'united-kingdom');

Route::get('/hackney/quran-academy-hackney-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hackney')
    ->defaults('state', 'united-kingdom');

Route::get('/islington/quran-academy-islington-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'islington')
    ->defaults('state', 'united-kingdom');

Route::get('/camden-town/quran-academy-camden-town-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'camden-town')
    ->defaults('state', 'united-kingdom');

Route::get('/old-town/quran-academy-old-town-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'old-town')
    ->defaults('state', 'united-kingdom');

Route::get('/morningside-braid-hill-and-swanston/quran-academy-morningside-braid-hill-and-swanston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'morningside-braid-hill-and-swanston')
    ->defaults('state', 'united-kingdom');

Route::get('/gorgie-stenhouse-and-sighthill/quran-academy-gorgie-stenhouse-and-sighthill-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gorgie-stenhouse-and-sighthill')
    ->defaults('state', 'united-kingdom');

Route::get('/murrayfield-corstorphine-and-gogar/quran-academy-murrayfield-corstorphine-and-gogar-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'murrayfield-corstorphine-and-gogar')
    ->defaults('state', 'united-kingdom');

Route::get('/colinton-and-oxgangs/quran-academy-colinton-and-oxgangs-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'colinton-and-oxgangs')
    ->defaults('state', 'united-kingdom');

Route::get('/juniper-green-currie-and-balerno/quran-academy-juniper-green-currie-and-balerno-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'juniper-green-currie-and-balerno')
    ->defaults('state', 'united-kingdom');

Route::get('/portobello/quran-academy-portobello-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'portobello')
    ->defaults('state', 'united-kingdom');

Route::get('/liberton-and-craigmillar/quran-academy-liberton-and-craigmillar-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'liberton-and-craigmillar')
    ->defaults('state', 'united-kingdom');

Route::get('/moredun/quran-academy-moredun-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'moredun')
    ->defaults('state', 'united-kingdom');

Route::get('/bonnyrigg-and-lasswade/quran-academy-bonnyrigg-and-lasswade-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bonnyrigg-and-lasswade')
    ->defaults('state', 'united-kingdom');

Route::get('/new-town/quran-academy-new-town-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'new-town')
    ->defaults('state', 'united-kingdom');

Route::get('/loanhead/quran-academy-loanhead-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'loanhead')
    ->defaults('state', 'united-kingdom');

Route::get('/musselburgh/quran-academy-musselburgh-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'musselburgh')
    ->defaults('state', 'united-kingdom');

Route::get('/dalkeith/quran-academy-dalkeith-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dalkeith')
    ->defaults('state', 'united-kingdom');

Route::get('/arniston/quran-academy-arniston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'arniston')
    ->defaults('state', 'united-kingdom');

Route::get('/rosewell/quran-academy-rosewell-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rosewell')
    ->defaults('state', 'united-kingdom');

Route::get('/roslin/quran-academy-roslin-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'roslin')
    ->defaults('state', 'united-kingdom');

Route::get('/penicuik/quran-academy-penicuik-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'penicuik')
    ->defaults('state', 'united-kingdom');

Route::get('/kirknewton/quran-academy-kirknewton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kirknewton')
    ->defaults('state', 'united-kingdom');

Route::get('/newbridge-and-ratho/quran-academy-newbridge-and-ratho-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'newbridge-and-ratho')
    ->defaults('state', 'united-kingdom');

Route::get('/kirkliston/quran-academy-kirkliston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kirkliston')
    ->defaults('state', 'united-kingdom');

Route::get('/inverleith-new-town-and-fountainbridge/quran-academy-inverleith-new-town-and-fountainbridge-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'inverleith-new-town-and-fountainbridge')
    ->defaults('state', 'united-kingdom');

Route::get('/queensferry/quran-academy-queensferry-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'queensferry')
    ->defaults('state', 'united-kingdom');

Route::get('/gullane/quran-academy-gullane-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gullane')
    ->defaults('state', 'united-kingdom');

Route::get('/cockenzie-and-port-seton/quran-academy-cockenzie-and-port-seton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'cockenzie-and-port-seton')
    ->defaults('state', 'united-kingdom');

Route::get('/tranent/quran-academy-tranent-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tranent')
    ->defaults('state', 'united-kingdom');

Route::get('/pencaitland/quran-academy-pencaitland-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pencaitland')
    ->defaults('state', 'united-kingdom');

Route::get('/ormiston/quran-academy-ormiston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ormiston')
    ->defaults('state', 'united-kingdom');

Route::get('/humbie/quran-academy-humbie-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'humbie')
    ->defaults('state', 'united-kingdom');

Route::get('/pathhead/quran-academy-pathhead-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pathhead')
    ->defaults('state', 'united-kingdom');

Route::get('/heriot/quran-academy-heriot-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'heriot')
    ->defaults('state', 'united-kingdom');

Route::get('/north-berwick/quran-academy-north-berwick-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'north-berwick')
    ->defaults('state', 'united-kingdom');

Route::get('/davidsons-mains-barnton-and-cramond/quran-academy-davidsons-mains-barnton-and-cramond-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'davidsons-mains-barnton-and-cramond')
    ->defaults('state', 'united-kingdom');

Route::get('/east-linton/quran-academy-east-linton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'east-linton')
    ->defaults('state', 'united-kingdom');

Route::get('/haddington-and-gifford/quran-academy-haddington-and-gifford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'haddington-and-gifford')
    ->defaults('state', 'united-kingdom');

Route::get('/dunbar/quran-academy-dunbar-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dunbar')
    ->defaults('state', 'united-kingdom');

Route::get('/walkerburn/quran-academy-walkerburn-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'walkerburn')
    ->defaults('state', 'united-kingdom');

Route::get('/innerleithen/quran-academy-innerleithen-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'innerleithen')
    ->defaults('state', 'united-kingdom');

Route::get('/peebles/quran-academy-peebles-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'peebles')
    ->defaults('state', 'united-kingdom');

Route::get('/west-linton-and-dolphinton/quran-academy-west-linton-and-dolphinton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'west-linton-and-dolphinton')
    ->defaults('state', 'united-kingdom');

Route::get('/blackburn-whitburn-and-fauldhouse/quran-academy-blackburn-whitburn-and-fauldhouse-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'blackburn-whitburn-and-fauldhouse')
    ->defaults('state', 'united-kingdom');

Route::get('/bathgate/quran-academy-bathgate-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bathgate')
    ->defaults('state', 'united-kingdom');

Route::get('/linlithgow/quran-academy-linlithgow-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'linlithgow')
    ->defaults('state', 'united-kingdom');

Route::get('/granton-and-trinity/quran-academy-granton-and-trinity-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'granton-and-trinity')
    ->defaults('state', 'united-kingdom');

Route::get('/grangepans/quran-academy-grangepans-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'grangepans')
    ->defaults('state', 'united-kingdom');

Route::get('/broxburn/quran-academy-broxburn-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'broxburn')
    ->defaults('state', 'united-kingdom');

Route::get('/livingston/quran-academy-livingston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'livingston')
    ->defaults('state', 'united-kingdom');

Route::get('/west-calder/quran-academy-west-calder-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'west-calder')
    ->defaults('state', 'united-kingdom');

Route::get('/newhaven-and-leith/quran-academy-newhaven-and-leith-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'newhaven-and-leith')
    ->defaults('state', 'united-kingdom');

Route::get('/bonnington-lochend-and-craigentinny/quran-academy-bonnington-lochend-and-craigentinny-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bonnington-lochend-and-craigentinny')
    ->defaults('state', 'united-kingdom');

Route::get('/south-bridge-holyrood-and-willowbrae/quran-academy-south-bridge-holyrood-and-willowbrae-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'south-bridge-holyrood-and-willowbrae')
    ->defaults('state', 'united-kingdom');

Route::get('/marchmont-and-blackford/quran-academy-marchmont-and-blackford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'marchmont-and-blackford')
    ->defaults('state', 'united-kingdom');

Route::get('/enfield/quran-academy-enfield-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'enfield')
    ->defaults('state', 'united-kingdom');

Route::get('/broxbourne/quran-academy-broxbourne-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'broxbourne')
    ->defaults('state', 'united-kingdom');

Route::get('/hoddesdon/quran-academy-hoddesdon-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hoddesdon')
    ->defaults('state', 'united-kingdom');

Route::get('/barnet/quran-academy-barnet-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'barnet')
    ->defaults('state', 'united-kingdom');

Route::get('/potters-bar/quran-academy-potters-bar-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'potters-bar')
    ->defaults('state', 'united-kingdom');

Route::get('/waltham-abbey/quran-academy-waltham-abbey-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'waltham-abbey')
    ->defaults('state', 'united-kingdom');

Route::get('/exeter/quran-academy-exeter-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'exeter')
    ->defaults('state', 'united-kingdom');

Route::get('/sidmouth/quran-academy-sidmouth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sidmouth')
    ->defaults('state', 'united-kingdom');

Route::get('/ottery-st-mary/quran-academy-ottery-st-mary-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ottery-st-mary')
    ->defaults('state', 'united-kingdom');

Route::get('/seaton/quran-academy-seaton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'seaton')
    ->defaults('state', 'united-kingdom');

Route::get('/axminster/quran-academy-axminster-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'axminster')
    ->defaults('state', 'united-kingdom');

Route::get('/honiton/quran-academy-honiton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'honiton')
    ->defaults('state', 'united-kingdom');

Route::get('/kentisbeare/quran-academy-kentisbeare-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kentisbeare')
    ->defaults('state', 'united-kingdom');

Route::get('/tiverton/quran-academy-tiverton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tiverton')
    ->defaults('state', 'united-kingdom');

Route::get('/sandford/quran-academy-sandford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sandford')
    ->defaults('state', 'united-kingdom');

Route::get('/chawleigh/quran-academy-chawleigh-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chawleigh')
    ->defaults('state', 'united-kingdom');

Route::get('/dowland/quran-academy-dowland-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dowland')
    ->defaults('state', 'united-kingdom');

Route::get('/okehampton-hamlets/quran-academy-okehampton-hamlets-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'okehampton-hamlets')
    ->defaults('state', 'united-kingdom');

Route::get('/black-torrington/quran-academy-black-torrington-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'black-torrington')
    ->defaults('state', 'united-kingdom');

Route::get('/holsworthy-hamlets/quran-academy-holsworthy-hamlets-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'holsworthy-hamlets')
    ->defaults('state', 'united-kingdom');

Route::get('/bude/quran-academy-bude-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bude')
    ->defaults('state', 'united-kingdom');

Route::get('/colyton/quran-academy-colyton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'colyton')
    ->defaults('state', 'united-kingdom');

Route::get('/barnstaple/quran-academy-barnstaple-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'barnstaple')
    ->defaults('state', 'united-kingdom');

Route::get('/braunton/quran-academy-braunton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'braunton')
    ->defaults('state', 'united-kingdom');

Route::get('/ilfracombe/quran-academy-ilfracombe-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ilfracombe')
    ->defaults('state', 'united-kingdom');

Route::get('/lynton/quran-academy-lynton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lynton')
    ->defaults('state', 'united-kingdom');

Route::get('/bishops-nympton/quran-academy-bishops-nympton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bishops-nympton')
    ->defaults('state', 'united-kingdom');

Route::get('/high-bickington/quran-academy-high-bickington-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'high-bickington')
    ->defaults('state', 'united-kingdom');

Route::get('/little-torrington/quran-academy-little-torrington-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'little-torrington')
    ->defaults('state', 'united-kingdom');

Route::get('/abbotsham/quran-academy-abbotsham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'abbotsham')
    ->defaults('state', 'united-kingdom');

Route::get('/broad-clyst/quran-academy-broad-clyst-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'broad-clyst')
    ->defaults('state', 'united-kingdom');

Route::get('/doddiscombsleigh/quran-academy-doddiscombsleigh-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'doddiscombsleigh')
    ->defaults('state', 'united-kingdom');

Route::get('/dawlish/quran-academy-dawlish-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dawlish')
    ->defaults('state', 'united-kingdom');

Route::get('/exmouth/quran-academy-exmouth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'exmouth')
    ->defaults('state', 'united-kingdom');

Route::get('/budleigh-salterton/quran-academy-budleigh-salterton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'budleigh-salterton')
    ->defaults('state', 'united-kingdom');

Route::get('/alloa/quran-academy-alloa-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'alloa')
    ->defaults('state', 'united-kingdom');

Route::get('/menstrie/quran-academy-menstrie-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'menstrie')
    ->defaults('state', 'united-kingdom');

Route::get('/alva/quran-academy-alva-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'alva')
    ->defaults('state', 'united-kingdom');

Route::get('/tillicoultry/quran-academy-tillicoultry-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tillicoultry')
    ->defaults('state', 'united-kingdom');

Route::get('/doune/quran-academy-doune-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'doune')
    ->defaults('state', 'united-kingdom');

Route::get('/callander/quran-academy-callander-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'callander')
    ->defaults('state', 'united-kingdom');

Route::get('/strathyre/quran-academy-strathyre-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'strathyre')
    ->defaults('state', 'united-kingdom');

Route::get('/hope-st/quran-academy-hope-st-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hope-st')
    ->defaults('state', 'united-kingdom');

Route::get('/killin/quran-academy-killin-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'killin')
    ->defaults('state', 'united-kingdom');

Route::get('/grangemouth/quran-academy-grangemouth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'grangemouth')
    ->defaults('state', 'united-kingdom');

Route::get('/dennyloanhead/quran-academy-dennyloanhead-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dennyloanhead')
    ->defaults('state', 'united-kingdom');

Route::get('/stoneywood/quran-academy-stoneywood-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stoneywood')
    ->defaults('state', 'united-kingdom');

Route::get('/bridge-of-allan/quran-academy-bridge-of-allan-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bridge-of-allan')
    ->defaults('state', 'united-kingdom');

Route::get('/hardhorn-and-thornton/quran-academy-hardhorn-and-thornton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hardhorn-and-thornton')
    ->defaults('state', 'united-kingdom');

Route::get('/lytham-saint-annes/quran-academy-lytham-saint-annes-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lytham-saint-annes')
    ->defaults('state', 'united-kingdom');

Route::get('/glasgow/quran-academy-glasgow-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'glasgow')
    ->defaults('state', 'united-kingdom');

Route::get('/thornliebank/quran-academy-thornliebank-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'thornliebank')
    ->defaults('state', 'united-kingdom');

Route::get('/clydebank/quran-academy-clydebank-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'clydebank')
    ->defaults('state', 'united-kingdom');

Route::get('/milngavie/quran-academy-milngavie-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'milngavie')
    ->defaults('state', 'united-kingdom');

Route::get('/killearn/quran-academy-killearn-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'killearn')
    ->defaults('state', 'united-kingdom');

Route::get('/bishopbriggs/quran-academy-bishopbriggs-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bishopbriggs')
    ->defaults('state', 'united-kingdom');

Route::get('/kilsyth/quran-academy-kilsyth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kilsyth')
    ->defaults('state', 'united-kingdom');

Route::get('/kirkintilloch/quran-academy-kirkintilloch-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kirkintilloch')
    ->defaults('state', 'united-kingdom');

Route::get('/cumbernauld/quran-academy-cumbernauld-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'cumbernauld')
    ->defaults('state', 'united-kingdom');

Route::get('/balloch/quran-academy-balloch-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'balloch')
    ->defaults('state', 'united-kingdom');

Route::get('/cambuslang/quran-academy-cambuslang-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'cambuslang')
    ->defaults('state', 'united-kingdom');

Route::get('/east-kilbride/quran-academy-east-kilbride-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'east-kilbride')
    ->defaults('state', 'united-kingdom');

Route::get('/newton-mearns/quran-academy-newton-mearns-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'newton-mearns')
    ->defaults('state', 'united-kingdom');

Route::get('/dumbarton/quran-academy-dumbarton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dumbarton')
    ->defaults('state', 'united-kingdom');

Route::get('/alexandria/quran-academy-alexandria-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'alexandria')
    ->defaults('state', 'united-kingdom');

Route::get('/helensburgh/quran-academy-helensburgh-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'helensburgh')
    ->defaults('state', 'united-kingdom');

Route::get('/gloucester/quran-academy-gloucester-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gloucester')
    ->defaults('state', 'united-kingdom');

Route::get('/stonehouse/quran-academy-stonehouse-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stonehouse')
    ->defaults('state', 'united-kingdom');

Route::get('/dursley/quran-academy-dursley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dursley')
    ->defaults('state', 'united-kingdom');

Route::get('/berkeley/quran-academy-berkeley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'berkeley')
    ->defaults('state', 'united-kingdom');

Route::get('/littledean/quran-academy-littledean-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'littledean')
    ->defaults('state', 'united-kingdom');

Route::get('/lydney/quran-academy-lydney-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lydney')
    ->defaults('state', 'united-kingdom');

Route::get('/coleford/quran-academy-coleford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'coleford')
    ->defaults('state', 'united-kingdom');

Route::get('/drybrook/quran-academy-drybrook-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'drybrook')
    ->defaults('state', 'united-kingdom');

Route::get('/oxenhall/quran-academy-oxenhall-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'oxenhall')
    ->defaults('state', 'united-kingdom');

Route::get('/ashleworth/quran-academy-ashleworth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ashleworth')
    ->defaults('state', 'united-kingdom');

Route::get('/ashchurch/quran-academy-ashchurch-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ashchurch')
    ->defaults('state', 'united-kingdom');

Route::get('/hucclecote/quran-academy-hucclecote-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hucclecote')
    ->defaults('state', 'united-kingdom');

Route::get('/rodborough/quran-academy-rodborough-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rodborough')
    ->defaults('state', 'united-kingdom');

Route::get('/cheltenham/quran-academy-cheltenham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'cheltenham')
    ->defaults('state', 'united-kingdom');

Route::get('/prestbury/quran-academy-prestbury-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'prestbury')
    ->defaults('state', 'united-kingdom');

Route::get('/naunton/quran-academy-naunton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'naunton')
    ->defaults('state', 'united-kingdom');

Route::get('/chipping-campden/quran-academy-chipping-campden-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chipping-campden')
    ->defaults('state', 'united-kingdom');

Route::get('/moreton-in-marsh/quran-academy-moreton-in-marsh-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'moreton-in-marsh')
    ->defaults('state', 'united-kingdom');

Route::get('/thrupp/quran-academy-thrupp-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'thrupp')
    ->defaults('state', 'united-kingdom');

Route::get('/ampney-st-mary/quran-academy-ampney-st-mary-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ampney-st-mary')
    ->defaults('state', 'united-kingdom');

Route::get('/tetbury/quran-academy-tetbury-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tetbury')
    ->defaults('state', 'united-kingdom');

Route::get('/hawkesbury/quran-academy-hawkesbury-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hawkesbury')
    ->defaults('state', 'united-kingdom');

Route::get('/guildford/quran-academy-guildford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'guildford')
    ->defaults('state', 'united-kingdom');

Route::get('/farnham/quran-academy-farnham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'farnham')
    ->defaults('state', 'united-kingdom');

Route::get('/aldershot/quran-academy-aldershot-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aldershot')
    ->defaults('state', 'united-kingdom');

Route::get('/ash/quran-academy-ash-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ash')
    ->defaults('state', 'united-kingdom');

Route::get('/fleet/quran-academy-fleet-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'fleet')
    ->defaults('state', 'united-kingdom');

Route::get('/farnborough/quran-academy-farnborough-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'farnborough')
    ->defaults('state', 'united-kingdom');

Route::get('/camberley/quran-academy-camberley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'camberley')
    ->defaults('state', 'united-kingdom');

Route::get('/blackwater-and-hawley/quran-academy-blackwater-and-hawley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'blackwater-and-hawley')
    ->defaults('state', 'united-kingdom');

Route::get('/windlesham/quran-academy-windlesham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'windlesham')
    ->defaults('state', 'united-kingdom');

Route::get('/woking/quran-academy-woking-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'woking')
    ->defaults('state', 'united-kingdom');

Route::get('/bisley/quran-academy-bisley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bisley')
    ->defaults('state', 'united-kingdom');

Route::get('/virginia-water/quran-academy-virginia-water-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'virginia-water')
    ->defaults('state', 'united-kingdom');

Route::get('/haslemere/quran-academy-haslemere-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'haslemere')
    ->defaults('state', 'united-kingdom');

Route::get('/tillington/quran-academy-tillington-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tillington')
    ->defaults('state', 'united-kingdom');

Route::get('/midhurst/quran-academy-midhurst-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'midhurst')
    ->defaults('state', 'united-kingdom');

Route::get('/worplesdon/quran-academy-worplesdon-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'worplesdon')
    ->defaults('state', 'united-kingdom');

Route::get('/liphook/quran-academy-liphook-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'liphook')
    ->defaults('state', 'united-kingdom');

Route::get('/petersfield/quran-academy-petersfield-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'petersfield')
    ->defaults('state', 'united-kingdom');

Route::get('/stroud/quran-academy-stroud-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stroud')
    ->defaults('state', 'united-kingdom');

Route::get('/liss/quran-academy-liss-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'liss')
    ->defaults('state', 'united-kingdom');

Route::get('/alton/quran-academy-alton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'alton')
    ->defaults('state', 'united-kingdom');

Route::get('/lindford/quran-academy-lindford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lindford')
    ->defaults('state', 'united-kingdom');

Route::get('/yateley/quran-academy-yateley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'yateley')
    ->defaults('state', 'united-kingdom');

Route::get('/sandhurst/quran-academy-sandhurst-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sandhurst')
    ->defaults('state', 'united-kingdom');

Route::get('/wonersh/quran-academy-wonersh-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wonersh')
    ->defaults('state', 'united-kingdom');

Route::get('/cranleigh/quran-academy-cranleigh-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'cranleigh')
    ->defaults('state', 'united-kingdom');

Route::get('/godalming/quran-academy-godalming-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'godalming')
    ->defaults('state', 'united-kingdom');

Route::get('/witley/quran-academy-witley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'witley')
    ->defaults('state', 'united-kingdom');

Route::get('/st-peter-port/quran-academy-st-peter-port-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'st-peter-port')
    ->defaults('state', 'united-kingdom');

Route::get('/st-sampson/quran-academy-st-sampson-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'st-sampson')
    ->defaults('state', 'united-kingdom');

Route::get('/carmel/quran-academy-carmel-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'carmel')
    ->defaults('state', 'united-kingdom');

Route::get('/albecq/quran-academy-albecq-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'albecq')
    ->defaults('state', 'united-kingdom');

Route::get('/lislet/quran-academy-lislet-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lislet')
    ->defaults('state', 'united-kingdom');

Route::get('/richmond/quran-academy-richmond-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'richmond')
    ->defaults('state', 'united-kingdom');

Route::get('/mouilpied/quran-academy-mouilpied-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mouilpied')
    ->defaults('state', 'united-kingdom');

Route::get('/nr-mouilpied/quran-academy-nr-mouilpied-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nr-mouilpied')
    ->defaults('state', 'united-kingdom');

Route::get('/brent/quran-academy-brent-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'brent')
    ->defaults('state', 'united-kingdom');

Route::get('/harrow/quran-academy-harrow-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'harrow')
    ->defaults('state', 'united-kingdom');

Route::get('/hillingdon/quran-academy-hillingdon-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hillingdon')
    ->defaults('state', 'united-kingdom');

Route::get('/huddersfield/quran-academy-huddersfield-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'huddersfield')
    ->defaults('state', 'united-kingdom');

Route::get('/halifax/quran-academy-halifax-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'halifax')
    ->defaults('state', 'united-kingdom');

Route::get('/kirkburton/quran-academy-kirkburton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kirkburton')
    ->defaults('state', 'united-kingdom');

Route::get('/holme/quran-academy-holme-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'holme')
    ->defaults('state', 'united-kingdom');

Route::get('/harrogate/quran-academy-harrogate-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'harrogate')
    ->defaults('state', 'united-kingdom');

Route::get('/clint/quran-academy-clint-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'clint')
    ->defaults('state', 'united-kingdom');

Route::get('/north-stainley/quran-academy-north-stainley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'north-stainley')
    ->defaults('state', 'united-kingdom');

Route::get('/knaresborough/quran-academy-knaresborough-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'knaresborough')
    ->defaults('state', 'united-kingdom');

Route::get('/hemel-hempstead/quran-academy-hemel-hempstead-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hemel-hempstead')
    ->defaults('state', 'united-kingdom');

Route::get('/chepping-wycombe/quran-academy-chepping-wycombe-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chepping-wycombe')
    ->defaults('state', 'united-kingdom');

Route::get('/high-wycombe/quran-academy-high-wycombe-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'high-wycombe')
    ->defaults('state', 'united-kingdom');

Route::get('/bledlow-cum-saunderton/quran-academy-bledlow-cum-saunderton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bledlow-cum-saunderton')
    ->defaults('state', 'united-kingdom');

Route::get('/hazlemere/quran-academy-hazlemere-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hazlemere')
    ->defaults('state', 'united-kingdom');

Route::get('/great-missenden/quran-academy-great-missenden-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'great-missenden')
    ->defaults('state', 'united-kingdom');

Route::get('/dinton/quran-academy-dinton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dinton')
    ->defaults('state', 'united-kingdom');

Route::get('/ashendon/quran-academy-ashendon-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ashendon')
    ->defaults('state', 'united-kingdom');

Route::get('/aylesbury/quran-academy-aylesbury-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aylesbury')
    ->defaults('state', 'united-kingdom');

Route::get('/weston-turville/quran-academy-weston-turville-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'weston-turville')
    ->defaults('state', 'united-kingdom');

Route::get('/tring/quran-academy-tring-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tring')
    ->defaults('state', 'united-kingdom');

Route::get('/princes-risborough/quran-academy-princes-risborough-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'princes-risborough')
    ->defaults('state', 'united-kingdom');

Route::get('/berkhamsted/quran-academy-berkhamsted-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'berkhamsted')
    ->defaults('state', 'united-kingdom');

Route::get('/chesham/quran-academy-chesham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chesham')
    ->defaults('state', 'united-kingdom');

Route::get('/amersham/quran-academy-amersham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'amersham')
    ->defaults('state', 'united-kingdom');

Route::get('/chalfont-st-giles/quran-academy-chalfont-st-giles-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chalfont-st-giles')
    ->defaults('state', 'united-kingdom');

Route::get('/beaconsfield/quran-academy-beaconsfield-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'beaconsfield')
    ->defaults('state', 'united-kingdom');

Route::get('/hampton-bishop/quran-academy-hampton-bishop-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hampton-bishop')
    ->defaults('state', 'united-kingdom');

Route::get('/allensmore/quran-academy-allensmore-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'allensmore')
    ->defaults('state', 'united-kingdom');

Route::get('/clifford/quran-academy-clifford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'clifford')
    ->defaults('state', 'united-kingdom');

Route::get('/burghill/quran-academy-burghill-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'burghill')
    ->defaults('state', 'united-kingdom');

Route::get('/kington-rural/quran-academy-kington-rural-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kington-rural')
    ->defaults('state', 'united-kingdom');

Route::get('/leominster/quran-academy-leominster-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'leominster')
    ->defaults('state', 'united-kingdom');

Route::get('/bromyard/quran-academy-bromyard-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bromyard')
    ->defaults('state', 'united-kingdom');

Route::get('/ledbury/quran-academy-ledbury-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ledbury')
    ->defaults('state', 'united-kingdom');

Route::get('/ross-on-wye/quran-academy-ross-on-wye-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ross-on-wye')
    ->defaults('state', 'united-kingdom');

Route::get('/stornoway/quran-academy-stornoway-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stornoway')
    ->defaults('state', 'united-kingdom');

Route::get('/leverburgh/quran-academy-leverburgh-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'leverburgh')
    ->defaults('state', 'united-kingdom');

Route::get('/hull/quran-academy-hull-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hull')
    ->defaults('state', 'united-kingdom');

Route::get('/cottingham/quran-academy-cottingham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'cottingham')
    ->defaults('state', 'united-kingdom');

Route::get('/ellerby/quran-academy-ellerby-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ellerby')
    ->defaults('state', 'united-kingdom');

Route::get('/burstwick/quran-academy-burstwick-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'burstwick')
    ->defaults('state', 'united-kingdom');

Route::get('/hessle/quran-academy-hessle-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hessle')
    ->defaults('state', 'united-kingdom');

Route::get('/north-ferriby/quran-academy-north-ferriby-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'north-ferriby')
    ->defaults('state', 'united-kingdom');

Route::get('/ellerker/quran-academy-ellerker-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ellerker')
    ->defaults('state', 'united-kingdom');

Route::get('/hornsea/quran-academy-hornsea-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hornsea')
    ->defaults('state', 'united-kingdom');

Route::get('/withernsea/quran-academy-withernsea-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'withernsea')
    ->defaults('state', 'united-kingdom');

Route::get('/rowley/quran-academy-rowley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rowley')
    ->defaults('state', 'united-kingdom');

Route::get('/hebden-royd/quran-academy-hebden-royd-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hebden-royd')
    ->defaults('state', 'united-kingdom');

Route::get('/loughton/quran-academy-loughton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'loughton')
    ->defaults('state', 'united-kingdom');

Route::get('/barking/quran-academy-barking-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'barking')
    ->defaults('state', 'united-kingdom');

Route::get('/douglas-braddan/quran-academy-douglas-braddan-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'douglas-braddan')
    ->defaults('state', 'united-kingdom');

Route::get('/onchan/quran-academy-onchan-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'onchan')
    ->defaults('state', 'united-kingdom');

Route::get('/peel-german/quran-academy-peel-german-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'peel-german')
    ->defaults('state', 'united-kingdom');

Route::get('/baldrine-loman/quran-academy-baldrine-loman-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'baldrine-loman')
    ->defaults('state', 'united-kingdom');

Route::get('/kirk-michael/quran-academy-kirk-michael-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kirk-michael')
    ->defaults('state', 'united-kingdom');

Route::get('/st-judes-andreas/quran-academy-st-judes-andreas-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'st-judes-andreas')
    ->defaults('state', 'united-kingdom');

Route::get('/ramsay/quran-academy-ramsay-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ramsay')
    ->defaults('state', 'united-kingdom');

Route::get('/arbory/quran-academy-arbory-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'arbory')
    ->defaults('state', 'united-kingdom');

Route::get('/ipswich/quran-academy-ipswich-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ipswich')
    ->defaults('state', 'united-kingdom');

Route::get('/levington/quran-academy-levington-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'levington')
    ->defaults('state', 'united-kingdom');

Route::get('/felixstowe/quran-academy-felixstowe-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'felixstowe')
    ->defaults('state', 'united-kingdom');

Route::get('/bromeswell/quran-academy-bromeswell-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bromeswell')
    ->defaults('state', 'united-kingdom');

Route::get('/kettleburgh/quran-academy-kettleburgh-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kettleburgh')
    ->defaults('state', 'united-kingdom');

Route::get('/stowupland/quran-academy-stowupland-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stowupland')
    ->defaults('state', 'united-kingdom');

Route::get('/aldeburgh/quran-academy-aldeburgh-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aldeburgh')
    ->defaults('state', 'united-kingdom');

Route::get('/leiston/quran-academy-leiston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'leiston')
    ->defaults('state', 'united-kingdom');

Route::get('/kelsale/quran-academy-kelsale-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kelsale')
    ->defaults('state', 'united-kingdom');

Route::get('/southwold/quran-academy-southwold-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'southwold')
    ->defaults('state', 'united-kingdom');

Route::get('/halesworth/quran-academy-halesworth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'halesworth')
    ->defaults('state', 'united-kingdom');

Route::get('/harleston/quran-academy-harleston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'harleston')
    ->defaults('state', 'united-kingdom');

Route::get('/syleham/quran-academy-syleham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'syleham')
    ->defaults('state', 'united-kingdom');

Route::get('/wortham/quran-academy-wortham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wortham')
    ->defaults('state', 'united-kingdom');

Route::get('/eye/quran-academy-eye-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'eye')
    ->defaults('state', 'united-kingdom');

Route::get('/thetford/quran-academy-thetford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'thetford')
    ->defaults('state', 'united-kingdom');

Route::get('/ovington/quran-academy-ovington-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ovington')
    ->defaults('state', 'united-kingdom');

Route::get('/methwold/quran-academy-methwold-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'methwold')
    ->defaults('state', 'united-kingdom');

Route::get('/brandon/quran-academy-brandon-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'brandon')
    ->defaults('state', 'united-kingdom');

Route::get('/tuddenham/quran-academy-tuddenham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tuddenham')
    ->defaults('state', 'united-kingdom');

Route::get('/whepstead/quran-academy-whepstead-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'whepstead')
    ->defaults('state', 'united-kingdom');

Route::get('/hessett/quran-academy-hessett-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hessett')
    ->defaults('state', 'united-kingdom');

Route::get('/pakenham/quran-academy-pakenham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pakenham')
    ->defaults('state', 'united-kingdom');

Route::get('/bury-st-edmunds/quran-academy-bury-st-edmunds-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bury-st-edmunds')
    ->defaults('state', 'united-kingdom');

Route::get('/kesgrave/quran-academy-kesgrave-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kesgrave')
    ->defaults('state', 'united-kingdom');

Route::get('/hemingstone/quran-academy-hemingstone-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hemingstone')
    ->defaults('state', 'united-kingdom');

Route::get('/aldham/quran-academy-aldham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aldham')
    ->defaults('state', 'united-kingdom');

Route::get('/sproughton/quran-academy-sproughton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sproughton')
    ->defaults('state', 'united-kingdom');

Route::get('/holbrook/quran-academy-holbrook-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'holbrook')
    ->defaults('state', 'united-kingdom');

Route::get('/inverness/quran-academy-inverness-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'inverness')
    ->defaults('state', 'united-kingdom');

Route::get('/cromarty/quran-academy-cromarty-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'cromarty')
    ->defaults('state', 'united-kingdom');

Route::get('/nairn/quran-academy-nairn-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nairn')
    ->defaults('state', 'united-kingdom');

Route::get('/strathpeffer/quran-academy-strathpeffer-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'strathpeffer')
    ->defaults('state', 'united-kingdom');

Route::get('/dingwall/quran-academy-dingwall-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dingwall')
    ->defaults('state', 'united-kingdom');

Route::get('/evanton/quran-academy-evanton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'evanton')
    ->defaults('state', 'united-kingdom');

Route::get('/alness/quran-academy-alness-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'alness')
    ->defaults('state', 'united-kingdom');

Route::get('/invergordon/quran-academy-invergordon-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'invergordon')
    ->defaults('state', 'united-kingdom');

Route::get('/tain/quran-academy-tain-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tain')
    ->defaults('state', 'united-kingdom');

Route::get('/gairloch/quran-academy-gairloch-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gairloch')
    ->defaults('state', 'united-kingdom');

Route::get('/rogart/quran-academy-rogart-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rogart')
    ->defaults('state', 'united-kingdom');

Route::get('/elgin/quran-academy-elgin-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'elgin')
    ->defaults('state', 'united-kingdom');

Route::get('/lossiemouth/quran-academy-lossiemouth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lossiemouth')
    ->defaults('state', 'united-kingdom');

Route::get('/mosstodloch/quran-academy-mosstodloch-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mosstodloch')
    ->defaults('state', 'united-kingdom');

Route::get('/forres/quran-academy-forres-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'forres')
    ->defaults('state', 'united-kingdom');

Route::get('/kyleakin/quran-academy-kyleakin-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kyleakin')
    ->defaults('state', 'united-kingdom');

Route::get('/saasaig/quran-academy-saasaig-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'saasaig')
    ->defaults('state', 'united-kingdom');

Route::get('/ferrindonald/quran-academy-ferrindonald-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ferrindonald')
    ->defaults('state', 'united-kingdom');

Route::get('/plockton/quran-academy-plockton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'plockton')
    ->defaults('state', 'united-kingdom');

Route::get('/isle-of-skye/quran-academy-isle-of-skye-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'isle-of-skye')
    ->defaults('state', 'united-kingdom');

Route::get('/muir-of-ord/quran-academy-muir-of-ord-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'muir-of-ord')
    ->defaults('state', 'united-kingdom');

Route::get('/lewiston/quran-academy-lewiston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lewiston')
    ->defaults('state', 'united-kingdom');

Route::get('/avoch/quran-academy-avoch-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'avoch')
    ->defaults('state', 'united-kingdom');

Route::get('/st-helier/quran-academy-st-helier-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'st-helier')
    ->defaults('state', 'united-kingdom');

Route::get('/stf2813-ouen/quran-academy-stf2813-ouen-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stf2813-ouen')
    ->defaults('state', 'united-kingdom');

Route::get('/kilmarnock/quran-academy-kilmarnock-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kilmarnock')
    ->defaults('state', 'united-kingdom');

Route::get('/troon/quran-academy-troon-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'troon')
    ->defaults('state', 'united-kingdom');

Route::get('/irvine/quran-academy-irvine-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'irvine')
    ->defaults('state', 'united-kingdom');

Route::get('/kilwinning/quran-academy-kilwinning-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kilwinning')
    ->defaults('state', 'united-kingdom');

Route::get('/glengarnock/quran-academy-glengarnock-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'glengarnock')
    ->defaults('state', 'united-kingdom');

Route::get('/beith/quran-academy-beith-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'beith')
    ->defaults('state', 'united-kingdom');

Route::get('/newmilns/quran-academy-newmilns-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'newmilns')
    ->defaults('state', 'united-kingdom');

Route::get('/darvel/quran-academy-darvel-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'darvel')
    ->defaults('state', 'united-kingdom');

Route::get('/cumnock/quran-academy-cumnock-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'cumnock')
    ->defaults('state', 'united-kingdom');

Route::get('/gatehead/quran-academy-gatehead-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gatehead')
    ->defaults('state', 'united-kingdom');

Route::get('/stevenston/quran-academy-stevenston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stevenston')
    ->defaults('state', 'united-kingdom');

Route::get('/ardrossan/quran-academy-ardrossan-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ardrossan')
    ->defaults('state', 'united-kingdom');

Route::get('/west-kilbride/quran-academy-west-kilbride-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'west-kilbride')
    ->defaults('state', 'united-kingdom');

Route::get('/dalry/quran-academy-dalry-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dalry')
    ->defaults('state', 'united-kingdom');

Route::get('/kilbirnie/quran-academy-kilbirnie-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kilbirnie')
    ->defaults('state', 'united-kingdom');

Route::get('/millport/quran-academy-millport-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'millport')
    ->defaults('state', 'united-kingdom');

Route::get('/fairlie/quran-academy-fairlie-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'fairlie')
    ->defaults('state', 'united-kingdom');

Route::get('/largs/quran-academy-largs-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'largs')
    ->defaults('state', 'united-kingdom');

Route::get('/galston/quran-academy-galston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'galston')
    ->defaults('state', 'united-kingdom');

Route::get('/mauchline/quran-academy-mauchline-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mauchline')
    ->defaults('state', 'united-kingdom');

Route::get('/ayr/quran-academy-ayr-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ayr')
    ->defaults('state', 'united-kingdom');

Route::get('/kingston-upon-thames/quran-academy-kingston-upon-thames-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kingston-upon-thames')
    ->defaults('state', 'united-kingdom');

Route::get('/esher/quran-academy-esher-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'esher')
    ->defaults('state', 'united-kingdom');

Route::get('/cobham/quran-academy-cobham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'cobham')
    ->defaults('state', 'united-kingdom');

Route::get('/west-molesey/quran-academy-west-molesey-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'west-molesey')
    ->defaults('state', 'united-kingdom');

Route::get('/addlestone/quran-academy-addlestone-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'addlestone')
    ->defaults('state', 'united-kingdom');

Route::get('/epsom/quran-academy-epsom-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'epsom')
    ->defaults('state', 'united-kingdom');

Route::get('/reigate-and-banstead/quran-academy-reigate-and-banstead-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'reigate-and-banstead')
    ->defaults('state', 'united-kingdom');

Route::get('/leatherhead/quran-academy-leatherhead-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'leatherhead')
    ->defaults('state', 'united-kingdom');

Route::get('/dorking/quran-academy-dorking-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dorking')
    ->defaults('state', 'united-kingdom');

Route::get('/east-horsley/quran-academy-east-horsley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'east-horsley')
    ->defaults('state', 'united-kingdom');

Route::get('/sutton/quran-academy-sutton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sutton')
    ->defaults('state', 'united-kingdom');

Route::get('/golspie/quran-academy-golspie-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'golspie')
    ->defaults('state', 'united-kingdom');

Route::get('/halkirk/quran-academy-halkirk-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'halkirk')
    ->defaults('state', 'united-kingdom');

Route::get('/thurso/quran-academy-thurso-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'thurso')
    ->defaults('state', 'united-kingdom');

Route::get('/kirkwall/quran-academy-kirkwall-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kirkwall')
    ->defaults('state', 'united-kingdom');

Route::get('/stromness/quran-academy-stromness-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stromness')
    ->defaults('state', 'united-kingdom');

Route::get('/gorseness/quran-academy-gorseness-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gorseness')
    ->defaults('state', 'united-kingdom');

Route::get('/whaligoe/quran-academy-whaligoe-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'whaligoe')
    ->defaults('state', 'united-kingdom');

Route::get('/lybster/quran-academy-lybster-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lybster')
    ->defaults('state', 'united-kingdom');

Route::get('/brora/quran-academy-brora-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'brora')
    ->defaults('state', 'united-kingdom');

Route::get('/kirkcaldy/quran-academy-kirkcaldy-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kirkcaldy')
    ->defaults('state', 'united-kingdom');

Route::get('/dunfermline/quran-academy-dunfermline-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dunfermline')
    ->defaults('state', 'united-kingdom');

Route::get('/kinross/quran-academy-kinross-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kinross')
    ->defaults('state', 'united-kingdom');

Route::get('/burntisland/quran-academy-burntisland-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'burntisland')
    ->defaults('state', 'united-kingdom');

Route::get('/glenrothes/quran-academy-glenrothes-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'glenrothes')
    ->defaults('state', 'united-kingdom');

Route::get('/leven/quran-academy-leven-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'leven')
    ->defaults('state', 'united-kingdom');

Route::get('/kilconquhar/quran-academy-kilconquhar-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kilconquhar')
    ->defaults('state', 'united-kingdom');

Route::get('/aintree/quran-academy-aintree-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aintree')
    ->defaults('state', 'united-kingdom');

Route::get('/garston/quran-academy-garston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'garston')
    ->defaults('state', 'united-kingdom');

Route::get('/southport/quran-academy-southport-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'southport')
    ->defaults('state', 'united-kingdom');

Route::get('/crosby/quran-academy-crosby-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'crosby')
    ->defaults('state', 'united-kingdom');

Route::get('/halewood/quran-academy-halewood-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'halewood')
    ->defaults('state', 'united-kingdom');

Route::get('/maghull/quran-academy-maghull-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'maghull')
    ->defaults('state', 'united-kingdom');

Route::get('/kirkby/quran-academy-kirkby-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kirkby')
    ->defaults('state', 'united-kingdom');

Route::get('/rainhill/quran-academy-rainhill-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rainhill')
    ->defaults('state', 'united-kingdom');

Route::get('/hyton/quran-academy-hyton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hyton')
    ->defaults('state', 'united-kingdom');

Route::get('/ormskirk/quran-academy-ormskirk-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ormskirk')
    ->defaults('state', 'united-kingdom');

Route::get('/burscough/quran-academy-burscough-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'burscough')
    ->defaults('state', 'united-kingdom');

Route::get('/lancaster/quran-academy-lancaster-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lancaster')
    ->defaults('state', 'united-kingdom');

Route::get('/sedbergh/quran-academy-sedbergh-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sedbergh')
    ->defaults('state', 'united-kingdom');

Route::get('/grange-over-sands/quran-academy-grange-over-sands-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'grange-over-sands')
    ->defaults('state', 'united-kingdom');

Route::get('/ulverston/quran-academy-ulverston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ulverston')
    ->defaults('state', 'united-kingdom');

Route::get('/dalton-in-furness/quran-academy-dalton-in-furness-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dalton-in-furness')
    ->defaults('state', 'united-kingdom');

Route::get('/dalton-town-with-newton/quran-academy-dalton-town-with-newton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dalton-town-with-newton')
    ->defaults('state', 'united-kingdom');

Route::get('/ireleth/quran-academy-ireleth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ireleth')
    ->defaults('state', 'united-kingdom');

Route::get('/kirkby-ireleth/quran-academy-kirkby-ireleth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kirkby-ireleth')
    ->defaults('state', 'united-kingdom');

Route::get('/millom/quran-academy-millom-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'millom')
    ->defaults('state', 'united-kingdom');

Route::get('/bootle/quran-academy-bootle-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bootle')
    ->defaults('state', 'united-kingdom');

Route::get('/caton/quran-academy-caton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'caton')
    ->defaults('state', 'united-kingdom');

Route::get('/broughton-west/quran-academy-broughton-west-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'broughton-west')
    ->defaults('state', 'united-kingdom');

Route::get('/coniston/quran-academy-coniston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'coniston')
    ->defaults('state', 'united-kingdom');

Route::get('/lakes/quran-academy-lakes-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lakes')
    ->defaults('state', 'united-kingdom');

Route::get('/windermere/quran-academy-windermere-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'windermere')
    ->defaults('state', 'united-kingdom');

Route::get('/warton/quran-academy-warton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'warton')
    ->defaults('state', 'united-kingdom');

Route::get('/whittingham/quran-academy-whittingham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'whittingham')
    ->defaults('state', 'united-kingdom');

Route::get('/milnthorpe/quran-academy-milnthorpe-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'milnthorpe')
    ->defaults('state', 'united-kingdom');

Route::get('/kendal/quran-academy-kendal-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kendal')
    ->defaults('state', 'united-kingdom');

Route::get('/llandrindod-wells/quran-academy-llandrindod-wells-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llandrindod-wells')
    ->defaults('state', 'united-kingdom');

Route::get('/duhonw/quran-academy-duhonw-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'duhonw')
    ->defaults('state', 'united-kingdom');

Route::get('/llanddew/quran-academy-llanddew-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llanddew')
    ->defaults('state', 'united-kingdom');

Route::get('/llangamarch/quran-academy-llangamarch-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llangamarch')
    ->defaults('state', 'united-kingdom');

Route::get('/treflys/quran-academy-treflys-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'treflys')
    ->defaults('state', 'united-kingdom');

Route::get('/rhayader/quran-academy-rhayader-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rhayader')
    ->defaults('state', 'united-kingdom');

Route::get('/knighton/quran-academy-knighton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'knighton')
    ->defaults('state', 'united-kingdom');

Route::get('/presteigne/quran-academy-presteigne-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'presteigne')
    ->defaults('state', 'united-kingdom');

Route::get('/leicester/quran-academy-leicester-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'leicester')
    ->defaults('state', 'united-kingdom');

Route::get('/hinckley/quran-academy-hinckley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hinckley')
    ->defaults('state', 'united-kingdom');

Route::get('/loughborough/quran-academy-loughborough-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'loughborough')
    ->defaults('state', 'united-kingdom');

Route::get('/melton-mowbray/quran-academy-melton-mowbray-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'melton-mowbray')
    ->defaults('state', 'united-kingdom');

Route::get('/hambleton/quran-academy-hambleton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hambleton')
    ->defaults('state', 'united-kingdom');

Route::get('/dingley/quran-academy-dingley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dingley')
    ->defaults('state', 'united-kingdom');

Route::get('/gilmorton/quran-academy-gilmorton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gilmorton')
    ->defaults('state', 'united-kingdom');

Route::get('/wigston/quran-academy-wigston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wigston')
    ->defaults('state', 'united-kingdom');

Route::get('/narborough/quran-academy-narborough-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'narborough')
    ->defaults('state', 'united-kingdom');

Route::get('/oadby/quran-academy-oadby-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'oadby')
    ->defaults('state', 'united-kingdom');

Route::get('/groby/quran-academy-groby-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'groby')
    ->defaults('state', 'united-kingdom');

Route::get('/ashby-de-la-zouch/quran-academy-ashby-de-la-zouch-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ashby-de-la-zouch')
    ->defaults('state', 'united-kingdom');

Route::get('/coalville/quran-academy-coalville-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'coalville')
    ->defaults('state', 'united-kingdom');

Route::get('/barkby/quran-academy-barkby-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'barkby')
    ->defaults('state', 'united-kingdom');

Route::get('/kilby/quran-academy-kilby-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kilby')
    ->defaults('state', 'united-kingdom');

Route::get('/gresford/quran-academy-gresford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gresford')
    ->defaults('state', 'united-kingdom');

Route::get('/abenbury/quran-academy-abenbury-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'abenbury')
    ->defaults('state', 'united-kingdom');

Route::get('/ruabon/quran-academy-ruabon-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ruabon')
    ->defaults('state', 'united-kingdom');

Route::get('/ruthin/quran-academy-ruthin-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ruthin')
    ->defaults('state', 'united-kingdom');

Route::get('/denbigh/quran-academy-denbigh-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'denbigh')
    ->defaults('state', 'united-kingdom');

Route::get('/st-asaph/quran-academy-st-asaph-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'st-asaph')
    ->defaults('state', 'united-kingdom');

Route::get('/rhyl/quran-academy-rhyl-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rhyl')
    ->defaults('state', 'united-kingdom');

Route::get('/prestatyn/quran-academy-prestatyn-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'prestatyn')
    ->defaults('state', 'united-kingdom');

Route::get('/llangollen/quran-academy-llangollen-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llangollen')
    ->defaults('state', 'united-kingdom');

Route::get('/corwen/quran-academy-corwen-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'corwen')
    ->defaults('state', 'united-kingdom');

Route::get('/betws-yn-rhos/quran-academy-betws-yn-rhos-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'betws-yn-rhos')
    ->defaults('state', 'united-kingdom');

Route::get('/bala/quran-academy-bala-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bala')
    ->defaults('state', 'united-kingdom');

Route::get('/bro-machno/quran-academy-bro-machno-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bro-machno')
    ->defaults('state', 'united-kingdom');

Route::get('/dolwyddelan/quran-academy-dolwyddelan-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dolwyddelan')
    ->defaults('state', 'united-kingdom');

Route::get('/llanrwst/quran-academy-llanrwst-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llanrwst')
    ->defaults('state', 'united-kingdom');

Route::get('/trefriw/quran-academy-trefriw-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'trefriw')
    ->defaults('state', 'united-kingdom');

Route::get('/mochdre/quran-academy-mochdre-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mochdre')
    ->defaults('state', 'united-kingdom');

Route::get('/old-colwyn/quran-academy-old-colwyn-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'old-colwyn')
    ->defaults('state', 'united-kingdom');

Route::get('/llandudno/quran-academy-llandudno-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llandudno')
    ->defaults('state', 'united-kingdom');

Route::get('/deganwy/quran-academy-deganwy-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'deganwy')
    ->defaults('state', 'united-kingdom');

Route::get('/henryd/quran-academy-henryd-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'henryd')
    ->defaults('state', 'united-kingdom');

Route::get('/llanfairfechan/quran-academy-llanfairfechan-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llanfairfechan')
    ->defaults('state', 'united-kingdom');

Route::get('/penmaenmawr/quran-academy-penmaenmawr-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'penmaenmawr')
    ->defaults('state', 'united-kingdom');

Route::get('/aberdovey/quran-academy-aberdovey-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aberdovey')
    ->defaults('state', 'united-kingdom');

Route::get('/bryncrug/quran-academy-bryncrug-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bryncrug')
    ->defaults('state', 'united-kingdom');

Route::get('/llangelynin/quran-academy-llangelynin-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llangelynin')
    ->defaults('state', 'united-kingdom');

Route::get('/arthog/quran-academy-arthog-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'arthog')
    ->defaults('state', 'united-kingdom');

Route::get('/brithdir/quran-academy-brithdir-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'brithdir')
    ->defaults('state', 'united-kingdom');

Route::get('/ffestiniog/quran-academy-ffestiniog-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ffestiniog')
    ->defaults('state', 'united-kingdom');

Route::get('/barmouth/quran-academy-barmouth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'barmouth')
    ->defaults('state', 'united-kingdom');

Route::get('/dyffryn-ardudwy/quran-academy-dyffryn-ardudwy-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dyffryn-ardudwy')
    ->defaults('state', 'united-kingdom');

Route::get('/llanbedr/quran-academy-llanbedr-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llanbedr')
    ->defaults('state', 'united-kingdom');

Route::get('/harlech/quran-academy-harlech-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'harlech')
    ->defaults('state', 'united-kingdom');

Route::get('/talsarnau/quran-academy-talsarnau-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'talsarnau')
    ->defaults('state', 'united-kingdom');

Route::get('/penrhyndeudraeth/quran-academy-penrhyndeudraeth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'penrhyndeudraeth')
    ->defaults('state', 'united-kingdom');

Route::get('/porthmadog/quran-academy-porthmadog-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'porthmadog')
    ->defaults('state', 'united-kingdom');

Route::get('/dolbenmaen/quran-academy-dolbenmaen-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dolbenmaen')
    ->defaults('state', 'united-kingdom');

Route::get('/criccieth/quran-academy-criccieth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'criccieth')
    ->defaults('state', 'united-kingdom');

Route::get('/buan/quran-academy-buan-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'buan')
    ->defaults('state', 'united-kingdom');

Route::get('/llanllyfni/quran-academy-llanllyfni-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llanllyfni')
    ->defaults('state', 'united-kingdom');

Route::get('/llanrug/quran-academy-llanrug-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llanrug')
    ->defaults('state', 'united-kingdom');

Route::get('/y-felinheli/quran-academy-y-felinheli-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'y-felinheli')
    ->defaults('state', 'united-kingdom');

Route::get('/llandygai/quran-academy-llandygai-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llandygai')
    ->defaults('state', 'united-kingdom');

Route::get('/beaumaris/quran-academy-beaumaris-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'beaumaris')
    ->defaults('state', 'united-kingdom');

Route::get('/cwm-cadnant/quran-academy-cwm-cadnant-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'cwm-cadnant')
    ->defaults('state', 'united-kingdom');

Route::get('/llanfihangel-ysgeifiog/quran-academy-llanfihangel-ysgeifiog-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llanfihangel-ysgeifiog')
    ->defaults('state', 'united-kingdom');

Route::get('/llanidan/quran-academy-llanidan-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llanidan')
    ->defaults('state', 'united-kingdom');

Route::get('/bodorgan/quran-academy-bodorgan-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bodorgan')
    ->defaults('state', 'united-kingdom');

Route::get('/aberffraw/quran-academy-aberffraw-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aberffraw')
    ->defaults('state', 'united-kingdom');

Route::get('/rhosneigr/quran-academy-rhosneigr-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rhosneigr')
    ->defaults('state', 'united-kingdom');

Route::get('/valley/quran-academy-valley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'valley')
    ->defaults('state', 'united-kingdom');

Route::get('/rhosybol/quran-academy-rhosybol-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rhosybol')
    ->defaults('state', 'united-kingdom');

Route::get('/llanbadrig/quran-academy-llanbadrig-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llanbadrig')
    ->defaults('state', 'united-kingdom');

Route::get('/amlwch/quran-academy-amlwch-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'amlwch')
    ->defaults('state', 'united-kingdom');

Route::get('/penysarn/quran-academy-penysarn-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'penysarn')
    ->defaults('state', 'united-kingdom');

Route::get('/moelfre/quran-academy-moelfre-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'moelfre')
    ->defaults('state', 'united-kingdom');

Route::get('/llannerch-y-medd/quran-academy-llannerch-y-medd-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llannerch-y-medd')
    ->defaults('state', 'united-kingdom');

Route::get('/llaneugrad/quran-academy-llaneugrad-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llaneugrad')
    ->defaults('state', 'united-kingdom');

Route::get('/llanfair-mathafarn-eithaf/quran-academy-llanfair-mathafarn-eithaf-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llanfair-mathafarn-eithaf')
    ->defaults('state', 'united-kingdom');

Route::get('/pentraeth/quran-academy-pentraeth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pentraeth')
    ->defaults('state', 'united-kingdom');

Route::get('/llangefni/quran-academy-llangefni-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llangefni')
    ->defaults('state', 'united-kingdom');

Route::get('/woodhall-spa/quran-academy-woodhall-spa-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'woodhall-spa')
    ->defaults('state', 'united-kingdom');

Route::get('/louth/quran-academy-louth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'louth')
    ->defaults('state', 'united-kingdom');

Route::get('/mablethorpe/quran-academy-mablethorpe-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mablethorpe')
    ->defaults('state', 'united-kingdom');

Route::get('/nettleham/quran-academy-nettleham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nettleham')
    ->defaults('state', 'united-kingdom');

Route::get('/fiskerton/quran-academy-fiskerton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'fiskerton')
    ->defaults('state', 'united-kingdom');

Route::get('/dunston/quran-academy-dunston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dunston')
    ->defaults('state', 'united-kingdom');

Route::get('/waddington/quran-academy-waddington-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'waddington')
    ->defaults('state', 'united-kingdom');

Route::get('/lincoln/quran-academy-lincoln-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lincoln')
    ->defaults('state', 'united-kingdom');

Route::get('/caistor/quran-academy-caistor-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'caistor')
    ->defaults('state', 'united-kingdom');

Route::get('/linwood/quran-academy-linwood-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'linwood')
    ->defaults('state', 'united-kingdom');

Route::get('/horncastle/quran-academy-horncastle-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'horncastle')
    ->defaults('state', 'united-kingdom');

Route::get('/harewood/quran-academy-harewood-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'harewood')
    ->defaults('state', 'united-kingdom');

Route::get('/guiseley/quran-academy-guiseley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'guiseley')
    ->defaults('state', 'united-kingdom');

Route::get('/otley/quran-academy-otley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'otley')
    ->defaults('state', 'united-kingdom');

Route::get('/wetherby/quran-academy-wetherby-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wetherby')
    ->defaults('state', 'united-kingdom');

Route::get('/boston-spa/quran-academy-boston-spa-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'boston-spa')
    ->defaults('state', 'united-kingdom');

Route::get('/grimston/quran-academy-grimston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'grimston')
    ->defaults('state', 'united-kingdom');

Route::get('/micklefield/quran-academy-micklefield-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'micklefield')
    ->defaults('state', 'united-kingdom');

Route::get('/rothwell/quran-academy-rothwell-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rothwell')
    ->defaults('state', 'united-kingdom');

Route::get('/gildersome/quran-academy-gildersome-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gildersome')
    ->defaults('state', 'united-kingdom');

Route::get('/ilkley/quran-academy-ilkley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ilkley')
    ->defaults('state', 'united-kingdom');

Route::get('/thorn/quran-academy-thorn-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'thorn')
    ->defaults('state', 'united-kingdom');

Route::get('/dunstable/quran-academy-dunstable-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dunstable')
    ->defaults('state', 'united-kingdom');

Route::get('/leighton-linslade/quran-academy-leighton-linslade-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'leighton-linslade')
    ->defaults('state', 'united-kingdom');

Route::get('/manchester/quran-academy-manchester-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'manchester')
    ->defaults('state', 'united-kingdom');

Route::get('/urmston/quran-academy-urmston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'urmston')
    ->defaults('state', 'united-kingdom');

Route::get('/middleton/quran-academy-middleton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'middleton')
    ->defaults('state', 'united-kingdom');

Route::get('/walkden/quran-academy-walkden-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'walkden')
    ->defaults('state', 'united-kingdom');

Route::get('/pemberton/quran-academy-pemberton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pemberton')
    ->defaults('state', 'united-kingdom');

Route::get('/partington/quran-academy-partington-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'partington')
    ->defaults('state', 'united-kingdom');

Route::get('/ashton-under-lyne/quran-academy-ashton-under-lyne-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ashton-under-lyne')
    ->defaults('state', 'united-kingdom');

Route::get('/ringway/quran-academy-ringway-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ringway')
    ->defaults('state', 'united-kingdom');

Route::get('/rochester/quran-academy-rochester-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rochester')
    ->defaults('state', 'united-kingdom');

Route::get('/sittingbourne/quran-academy-sittingbourne-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sittingbourne')
    ->defaults('state', 'united-kingdom');

Route::get('/queenborough/quran-academy-queenborough-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'queenborough')
    ->defaults('state', 'united-kingdom');

Route::get('/faversham/quran-academy-faversham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'faversham')
    ->defaults('state', 'united-kingdom');

Route::get('/maidstone/quran-academy-maidstone-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'maidstone')
    ->defaults('state', 'united-kingdom');

Route::get('/leeds/quran-academy-leeds-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'leeds')
    ->defaults('state', 'united-kingdom');

Route::get('/west-farleigh/quran-academy-west-farleigh-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'west-farleigh')
    ->defaults('state', 'united-kingdom');

Route::get('/west-malling/quran-academy-west-malling-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'west-malling')
    ->defaults('state', 'united-kingdom');

Route::get('/strood/quran-academy-strood-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'strood')
    ->defaults('state', 'united-kingdom');

Route::get('/ditton/quran-academy-ditton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ditton')
    ->defaults('state', 'united-kingdom');

Route::get('/hoo-st-werburgh/quran-academy-hoo-st-werburgh-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hoo-st-werburgh')
    ->defaults('state', 'united-kingdom');

Route::get('/snodland/quran-academy-snodland-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'snodland')
    ->defaults('state', 'united-kingdom');

Route::get('/gillingham/quran-academy-gillingham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gillingham')
    ->defaults('state', 'united-kingdom');

Route::get('/bletchley/quran-academy-bletchley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bletchley')
    ->defaults('state', 'united-kingdom');

Route::get('/stony-stratford/quran-academy-stony-stratford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stony-stratford')
    ->defaults('state', 'united-kingdom');

Route::get('/bradwell/quran-academy-bradwell-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bradwell')
    ->defaults('state', 'united-kingdom');

Route::get('/stantonbury/quran-academy-stantonbury-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stantonbury')
    ->defaults('state', 'united-kingdom');

Route::get('/willen/quran-academy-willen-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'willen')
    ->defaults('state', 'united-kingdom');

Route::get('/newport-pagnell/quran-academy-newport-pagnell-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'newport-pagnell')
    ->defaults('state', 'united-kingdom');

Route::get('/bow-brickhill/quran-academy-bow-brickhill-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bow-brickhill')
    ->defaults('state', 'united-kingdom');

Route::get('/buckingham/quran-academy-buckingham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'buckingham')
    ->defaults('state', 'united-kingdom');

Route::get('/cosgrove/quran-academy-cosgrove-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'cosgrove')
    ->defaults('state', 'united-kingdom');

Route::get('/shenley-brook-end/quran-academy-shenley-brook-end-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'shenley-brook-end')
    ->defaults('state', 'united-kingdom');

Route::get('/bedford/quran-academy-bedford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bedford')
    ->defaults('state', 'united-kingdom');

Route::get('/kempston/quran-academy-kempston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kempston')
    ->defaults('state', 'united-kingdom');

Route::get('/kempston-rural/quran-academy-kempston-rural-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kempston-rural')
    ->defaults('state', 'united-kingdom');

Route::get('/wilden/quran-academy-wilden-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wilden')
    ->defaults('state', 'united-kingdom');

Route::get('/maulden/quran-academy-maulden-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'maulden')
    ->defaults('state', 'united-kingdom');

Route::get('/clifton-reynes/quran-academy-clifton-reynes-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'clifton-reynes')
    ->defaults('state', 'united-kingdom');

Route::get('/shenley-church-end/quran-academy-shenley-church-end-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'shenley-church-end')
    ->defaults('state', 'united-kingdom');

Route::get('/woughton-on-the-green/quran-academy-woughton-on-the-green-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'woughton-on-the-green')
    ->defaults('state', 'united-kingdom');

Route::get('/walton/quran-academy-walton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'walton')
    ->defaults('state', 'united-kingdom');

Route::get('/bradwell-abbey/quran-academy-bradwell-abbey-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bradwell-abbey')
    ->defaults('state', 'united-kingdom');

Route::get('/motherwell/quran-academy-motherwell-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'motherwell')
    ->defaults('state', 'united-kingdom');

Route::get('/strathaven/quran-academy-strathaven-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'strathaven')
    ->defaults('state', 'united-kingdom');

Route::get('/new-lanark/quran-academy-new-lanark-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'new-lanark')
    ->defaults('state', 'united-kingdom');

Route::get('/wishaw/quran-academy-wishaw-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wishaw')
    ->defaults('state', 'united-kingdom');

Route::get('/hamilton/quran-academy-hamilton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hamilton')
    ->defaults('state', 'united-kingdom');

Route::get('/coatbridge/quran-academy-coatbridge-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'coatbridge')
    ->defaults('state', 'united-kingdom');

Route::get('/airdrie/quran-academy-airdrie-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'airdrie')
    ->defaults('state', 'united-kingdom');

Route::get('/carluke/quran-academy-carluke-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'carluke')
    ->defaults('state', 'united-kingdom');

Route::get('/larkhall/quran-academy-larkhall-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'larkhall')
    ->defaults('state', 'united-kingdom');

Route::get('/tottenham/quran-academy-tottenham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tottenham')
    ->defaults('state', 'united-kingdom');

Route::get('/kings-cross/quran-academy-kings-cross-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kings-cross')
    ->defaults('state', 'united-kingdom');

Route::get('/wickham-and-dunston/quran-academy-wickham-and-dunston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wickham-and-dunston')
    ->defaults('state', 'united-kingdom');

Route::get('/longbenton/quran-academy-longbenton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'longbenton')
    ->defaults('state', 'united-kingdom');

Route::get('/brunswick/quran-academy-brunswick-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'brunswick')
    ->defaults('state', 'united-kingdom');

Route::get('/newburn/quran-academy-newburn-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'newburn')
    ->defaults('state', 'united-kingdom');

Route::get('/blaydon/quran-academy-blaydon-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'blaydon')
    ->defaults('state', 'united-kingdom');

Route::get('/stamfordham/quran-academy-stamfordham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stamfordham')
    ->defaults('state', 'united-kingdom');

Route::get('/elsdon/quran-academy-elsdon-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'elsdon')
    ->defaults('state', 'united-kingdom');

Route::get('/byker/quran-academy-byker-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'byker')
    ->defaults('state', 'united-kingdom');

Route::get('/ponteland/quran-academy-ponteland-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ponteland')
    ->defaults('state', 'united-kingdom');

Route::get('/wansbeck/quran-academy-wansbeck-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wansbeck')
    ->defaults('state', 'united-kingdom');

Route::get('/blyth/quran-academy-blyth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'blyth')
    ->defaults('state', 'united-kingdom');

Route::get('/washington/quran-academy-washington-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'washington')
    ->defaults('state', 'united-kingdom');

Route::get('/wylam/quran-academy-wylam-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wylam')
    ->defaults('state', 'united-kingdom');

Route::get('/prudhoe/quran-academy-prudhoe-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'prudhoe')
    ->defaults('state', 'united-kingdom');

Route::get('/stocksfield/quran-academy-stocksfield-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stocksfield')
    ->defaults('state', 'united-kingdom');

Route::get('/broomhaugh-and-riding/quran-academy-broomhaugh-and-riding-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'broomhaugh-and-riding')
    ->defaults('state', 'united-kingdom');

Route::get('/corbridge/quran-academy-corbridge-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'corbridge')
    ->defaults('state', 'united-kingdom');

Route::get('/hexham/quran-academy-hexham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hexham')
    ->defaults('state', 'united-kingdom');

Route::get('/allendale/quran-academy-allendale-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'allendale')
    ->defaults('state', 'united-kingdom');

Route::get('/bellingham/quran-academy-bellingham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bellingham')
    ->defaults('state', 'united-kingdom');

Route::get('/haltwhistle/quran-academy-haltwhistle-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'haltwhistle')
    ->defaults('state', 'united-kingdom');

Route::get('/morpeth/quran-academy-morpeth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'morpeth')
    ->defaults('state', 'united-kingdom');

Route::get('/newton-on-the-moor/quran-academy-newton-on-the-moor-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'newton-on-the-moor')
    ->defaults('state', 'united-kingdom');

Route::get('/denwick/quran-academy-denwick-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'denwick')
    ->defaults('state', 'united-kingdom');

Route::get('/ellingham/quran-academy-ellingham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ellingham')
    ->defaults('state', 'united-kingdom');

Route::get('/north-sunderland/quran-academy-north-sunderland-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'north-sunderland')
    ->defaults('state', 'united-kingdom');

Route::get('/bamburgh/quran-academy-bamburgh-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bamburgh')
    ->defaults('state', 'united-kingdom');

Route::get('/belford/quran-academy-belford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'belford')
    ->defaults('state', 'united-kingdom');

Route::get('/akeld/quran-academy-akeld-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'akeld')
    ->defaults('state', 'united-kingdom');

Route::get('/clifton/quran-academy-clifton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'clifton')
    ->defaults('state', 'united-kingdom');

Route::get('/cotgrave/quran-academy-cotgrave-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'cotgrave')
    ->defaults('state', 'united-kingdom');

Route::get('/bingham/quran-academy-bingham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bingham')
    ->defaults('state', 'united-kingdom');

Route::get('/lowdham/quran-academy-lowdham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lowdham')
    ->defaults('state', 'united-kingdom');

Route::get('/sutton-in-ashfield/quran-academy-sutton-in-ashfield-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sutton-in-ashfield')
    ->defaults('state', 'united-kingdom');

Route::get('/greasley/quran-academy-greasley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'greasley')
    ->defaults('state', 'united-kingdom');

Route::get('/mansfield/quran-academy-mansfield-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mansfield')
    ->defaults('state', 'united-kingdom');

Route::get('/west-bridgford/quran-academy-west-bridgford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'west-bridgford')
    ->defaults('state', 'united-kingdom');

Route::get('/warsop/quran-academy-warsop-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'warsop')
    ->defaults('state', 'united-kingdom');

Route::get('/rainworth/quran-academy-rainworth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rainworth')
    ->defaults('state', 'united-kingdom');

Route::get('/ompton/quran-academy-ompton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ompton')
    ->defaults('state', 'united-kingdom');

Route::get('/north-muskham/quran-academy-north-muskham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'north-muskham')
    ->defaults('state', 'united-kingdom');

Route::get('/newark-on-trent/quran-academy-newark-on-trent-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'newark-on-trent')
    ->defaults('state', 'united-kingdom');

Route::get('/southwell/quran-academy-southwell-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'southwell')
    ->defaults('state', 'united-kingdom');

Route::get('/grantham/quran-academy-grantham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'grantham')
    ->defaults('state', 'united-kingdom');

Route::get('/great-gonerby/quran-academy-great-gonerby-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'great-gonerby')
    ->defaults('state', 'united-kingdom');

Route::get('/burton-coggles/quran-academy-burton-coggles-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'burton-coggles')
    ->defaults('state', 'united-kingdom');

Route::get('/sleaford/quran-academy-sleaford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sleaford')
    ->defaults('state', 'united-kingdom');

Route::get('/carlton/quran-academy-carlton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'carlton')
    ->defaults('state', 'united-kingdom');

Route::get('/beeston/quran-academy-beeston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'beeston')
    ->defaults('state', 'united-kingdom');

Route::get('/northampton/quran-academy-northampton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'northampton')
    ->defaults('state', 'united-kingdom');

Route::get('/rushden/quran-academy-rushden-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rushden')
    ->defaults('state', 'united-kingdom');

Route::get('/badby/quran-academy-badby-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'badby')
    ->defaults('state', 'united-kingdom');

Route::get('/towcester/quran-academy-towcester-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'towcester')
    ->defaults('state', 'united-kingdom');

Route::get('/brackley/quran-academy-brackley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'brackley')
    ->defaults('state', 'united-kingdom');

Route::get('/warkton/quran-academy-warkton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'warkton')
    ->defaults('state', 'united-kingdom');

Route::get('/kettering/quran-academy-kettering-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kettering')
    ->defaults('state', 'united-kingdom');

Route::get('/corby/quran-academy-corby-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'corby')
    ->defaults('state', 'united-kingdom');

Route::get('/wollaston/quran-academy-wollaston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wollaston')
    ->defaults('state', 'united-kingdom');

Route::get('/duston/quran-academy-duston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'duston')
    ->defaults('state', 'united-kingdom');

Route::get('/spratton/quran-academy-spratton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'spratton')
    ->defaults('state', 'united-kingdom');

Route::get('/wellingborough/quran-academy-wellingborough-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wellingborough')
    ->defaults('state', 'united-kingdom');

Route::get('/irthlingborough/quran-academy-irthlingborough-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'irthlingborough')
    ->defaults('state', 'united-kingdom');

Route::get('/graig/quran-academy-graig-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'graig')
    ->defaults('state', 'united-kingdom');

Route::get('/abercarn/quran-academy-abercarn-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'abercarn')
    ->defaults('state', 'united-kingdom');

Route::get('/blackwood/quran-academy-blackwood-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'blackwood')
    ->defaults('state', 'united-kingdom');

Route::get('/abertillery/quran-academy-abertillery-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'abertillery')
    ->defaults('state', 'united-kingdom');

Route::get('/gwehelog-fawr/quran-academy-gwehelog-fawr-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gwehelog-fawr')
    ->defaults('state', 'united-kingdom');

Route::get('/st-arvans/quran-academy-st-arvans-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'st-arvans')
    ->defaults('state', 'united-kingdom');

Route::get('/caerleon/quran-academy-caerleon-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'caerleon')
    ->defaults('state', 'united-kingdom');

Route::get('/alway/quran-academy-alway-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'alway')
    ->defaults('state', 'united-kingdom');

Route::get('/allt-yr-yn/quran-academy-allt-yr-yn-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'allt-yr-yn')
    ->defaults('state', 'united-kingdom');

Route::get('/tredegar/quran-academy-tredegar-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tredegar')
    ->defaults('state', 'united-kingdom');

Route::get('/ebbw-vale/quran-academy-ebbw-vale-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ebbw-vale')
    ->defaults('state', 'united-kingdom');

Route::get('/new-tredegar/quran-academy-new-tredegar-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'new-tredegar')
    ->defaults('state', 'united-kingdom');

Route::get('/monmouth/quran-academy-monmouth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'monmouth')
    ->defaults('state', 'united-kingdom');

Route::get('/rogiet/quran-academy-rogiet-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rogiet')
    ->defaults('state', 'united-kingdom');

Route::get('/trevethin/quran-academy-trevethin-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'trevethin')
    ->defaults('state', 'united-kingdom');

Route::get('/cwmbran/quran-academy-cwmbran-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'cwmbran')
    ->defaults('state', 'united-kingdom');

Route::get('/abergavenny/quran-academy-abergavenny-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'abergavenny')
    ->defaults('state', 'united-kingdom');

Route::get('/llangattock/quran-academy-llangattock-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llangattock')
    ->defaults('state', 'united-kingdom');

Route::get('/norwich/quran-academy-norwich-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'norwich')
    ->defaults('state', 'united-kingdom');

Route::get('/hevingham/quran-academy-hevingham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hevingham')
    ->defaults('state', 'united-kingdom');

Route::get('/erpingham/quran-academy-erpingham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'erpingham')
    ->defaults('state', 'united-kingdom');

Route::get('/smallburgh/quran-academy-smallburgh-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'smallburgh')
    ->defaults('state', 'united-kingdom');

Route::get('/blofield/quran-academy-blofield-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'blofield')
    ->defaults('state', 'united-kingdom');

Route::get('/alpington/quran-academy-alpington-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'alpington')
    ->defaults('state', 'united-kingdom');

Route::get('/hempnall/quran-academy-hempnall-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hempnall')
    ->defaults('state', 'united-kingdom');

Route::get('/old-buckenham/quran-academy-old-buckenham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'old-buckenham')
    ->defaults('state', 'united-kingdom');

Route::get('/attleborough/quran-academy-attleborough-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'attleborough')
    ->defaults('state', 'united-kingdom');

Route::get('/wymondham/quran-academy-wymondham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wymondham')
    ->defaults('state', 'united-kingdom');

Route::get('/scarning/quran-academy-scarning-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'scarning')
    ->defaults('state', 'united-kingdom');

Route::get('/swanton-morley/quran-academy-swanton-morley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'swanton-morley')
    ->defaults('state', 'united-kingdom');

Route::get('/fakenham/quran-academy-fakenham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'fakenham')
    ->defaults('state', 'united-kingdom');

Route::get('/walsingham/quran-academy-walsingham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'walsingham')
    ->defaults('state', 'united-kingdom');

Route::get('/wells-next-the-sea/quran-academy-wells-next-the-sea-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wells-next-the-sea')
    ->defaults('state', 'united-kingdom');

Route::get('/briston/quran-academy-briston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'briston')
    ->defaults('state', 'united-kingdom');

Route::get('/holt/quran-academy-holt-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'holt')
    ->defaults('state', 'united-kingdom');

Route::get('/sheringham/quran-academy-sheringham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sheringham')
    ->defaults('state', 'united-kingdom');

Route::get('/cromer/quran-academy-cromer-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'cromer')
    ->defaults('state', 'united-kingdom');

Route::get('/north-walsham/quran-academy-north-walsham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'north-walsham')
    ->defaults('state', 'united-kingdom');

Route::get('/great-yarmouth/quran-academy-great-yarmouth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'great-yarmouth')
    ->defaults('state', 'united-kingdom');

Route::get('/oulton-broad/quran-academy-oulton-broad-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'oulton-broad')
    ->defaults('state', 'united-kingdom');

Route::get('/weston/quran-academy-weston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'weston')
    ->defaults('state', 'united-kingdom');

Route::get('/bungay/quran-academy-bungay-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bungay')
    ->defaults('state', 'united-kingdom');

Route::get('/taverham/quran-academy-taverham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'taverham')
    ->defaults('state', 'united-kingdom');

Route::get('/marlingford/quran-academy-marlingford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'marlingford')
    ->defaults('state', 'united-kingdom');

Route::get('/paddington/quran-academy-paddington-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'paddington')
    ->defaults('state', 'united-kingdom');

Route::get('/heywood/quran-academy-heywood-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'heywood')
    ->defaults('state', 'united-kingdom');

Route::get('/todmorden/quran-academy-todmorden-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'todmorden')
    ->defaults('state', 'united-kingdom');

Route::get('/shaw/quran-academy-shaw-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'shaw')
    ->defaults('state', 'united-kingdom');

Route::get('/saddleworth/quran-academy-saddleworth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'saddleworth')
    ->defaults('state', 'united-kingdom');

Route::get('/mossley/quran-academy-mossley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mossley')
    ->defaults('state', 'united-kingdom');

Route::get('/oxford/quran-academy-oxford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'oxford')
    ->defaults('state', 'united-kingdom');

Route::get('/wallingford/quran-academy-wallingford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wallingford')
    ->defaults('state', 'united-kingdom');

Route::get('/didcot/quran-academy-didcot-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'didcot')
    ->defaults('state', 'united-kingdom');

Route::get('/wantage/quran-academy-wantage-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wantage')
    ->defaults('state', 'united-kingdom');

Route::get('/marcham/quran-academy-marcham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'marcham')
    ->defaults('state', 'united-kingdom');

Route::get('/culham/quran-academy-culham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'culham')
    ->defaults('state', 'united-kingdom');

Route::get('/tadmarton/quran-academy-tadmarton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tadmarton')
    ->defaults('state', 'united-kingdom');

Route::get('/banbury/quran-academy-banbury-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'banbury')
    ->defaults('state', 'united-kingdom');

Route::get('/middleton-cheney/quran-academy-middleton-cheney-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'middleton-cheney')
    ->defaults('state', 'united-kingdom');

Route::get('/carterton/quran-academy-carterton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'carterton')
    ->defaults('state', 'united-kingdom');

Route::get('/woodstock/quran-academy-woodstock-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'woodstock')
    ->defaults('state', 'united-kingdom');

Route::get('/chesterton/quran-academy-chesterton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chesterton')
    ->defaults('state', 'united-kingdom');

Route::get('/bicester/quran-academy-bicester-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bicester')
    ->defaults('state', 'united-kingdom');

Route::get('/fringford/quran-academy-fringford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'fringford')
    ->defaults('state', 'united-kingdom');

Route::get('/witney/quran-academy-witney-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'witney')
    ->defaults('state', 'united-kingdom');

Route::get('/eynsham/quran-academy-eynsham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'eynsham')
    ->defaults('state', 'united-kingdom');

Route::get('/holton/quran-academy-holton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'holton')
    ->defaults('state', 'united-kingdom');

Route::get('/chinnor/quran-academy-chinnor-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chinnor')
    ->defaults('state', 'united-kingdom');

Route::get('/cuddesdon/quran-academy-cuddesdon-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'cuddesdon')
    ->defaults('state', 'united-kingdom');

Route::get('/watlington/quran-academy-watlington-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'watlington')
    ->defaults('state', 'united-kingdom');

Route::get('/kidlington/quran-academy-kidlington-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kidlington')
    ->defaults('state', 'united-kingdom');

Route::get('/chadlington/quran-academy-chadlington-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chadlington')
    ->defaults('state', 'united-kingdom');

Route::get('/south-leigh/quran-academy-south-leigh-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'south-leigh')
    ->defaults('state', 'united-kingdom');

Route::get('/thame/quran-academy-thame-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'thame')
    ->defaults('state', 'united-kingdom');

Route::get('/paisley/quran-academy-paisley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'paisley')
    ->defaults('state', 'united-kingdom');

Route::get('/kilbarchan/quran-academy-kilbarchan-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kilbarchan')
    ->defaults('state', 'united-kingdom');

Route::get('/ranfurly/quran-academy-ranfurly-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ranfurly')
    ->defaults('state', 'united-kingdom');

Route::get('/lochwinnoch/quran-academy-lochwinnoch-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lochwinnoch')
    ->defaults('state', 'united-kingdom');

Route::get('/kilmacolm/quran-academy-kilmacolm-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kilmacolm')
    ->defaults('state', 'united-kingdom');

Route::get('/greenock/quran-academy-greenock-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'greenock')
    ->defaults('state', 'united-kingdom');

Route::get('/skelmorlie/quran-academy-skelmorlie-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'skelmorlie')
    ->defaults('state', 'united-kingdom');

Route::get('/wemyss-bay/quran-academy-wemyss-bay-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wemyss-bay')
    ->defaults('state', 'united-kingdom');

Route::get('/rothesay/quran-academy-rothesay-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rothesay')
    ->defaults('state', 'united-kingdom');

Route::get('/tighnabruaich/quran-academy-tighnabruaich-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tighnabruaich')
    ->defaults('state', 'united-kingdom');

Route::get('/port-riddell/quran-academy-port-riddell-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'port-riddell')
    ->defaults('state', 'united-kingdom');

Route::get('/lochgoilhead/quran-academy-lochgoilhead-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lochgoilhead')
    ->defaults('state', 'united-kingdom');

Route::get('/cairndow/quran-academy-cairndow-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'cairndow')
    ->defaults('state', 'united-kingdom');

Route::get('/strachur/quran-academy-strachur-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'strachur')
    ->defaults('state', 'united-kingdom');

Route::get('/ardrishaig/quran-academy-ardrishaig-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ardrishaig')
    ->defaults('state', 'united-kingdom');

Route::get('/bridge-of-orchy/quran-academy-bridge-of-orchy-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bridge-of-orchy')
    ->defaults('state', 'united-kingdom');

Route::get('/renfrew/quran-academy-renfrew-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'renfrew')
    ->defaults('state', 'united-kingdom');

Route::get('/port-ellen/quran-academy-port-ellen-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'port-ellen')
    ->defaults('state', 'united-kingdom');

Route::get('/bowmore/quran-academy-bowmore-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bowmore')
    ->defaults('state', 'united-kingdom');

Route::get('/blackrock/quran-academy-blackrock-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'blackrock')
    ->defaults('state', 'united-kingdom');

Route::get('/ballygrant/quran-academy-ballygrant-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ballygrant')
    ->defaults('state', 'united-kingdom');

Route::get('/port-askaig/quran-academy-port-askaig-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'port-askaig')
    ->defaults('state', 'united-kingdom');

Route::get('/portnahaven/quran-academy-portnahaven-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'portnahaven')
    ->defaults('state', 'united-kingdom');

Route::get('/port-charlotte/quran-academy-port-charlotte-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'port-charlotte')
    ->defaults('state', 'united-kingdom');

Route::get('/johnstone/quran-academy-johnstone-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'johnstone')
    ->defaults('state', 'united-kingdom');

Route::get('/scalasaig/quran-academy-scalasaig-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'scalasaig')
    ->defaults('state', 'united-kingdom');

Route::get('/lochdon/quran-academy-lochdon-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lochdon')
    ->defaults('state', 'united-kingdom');

Route::get('/bunessan/quran-academy-bunessan-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bunessan')
    ->defaults('state', 'united-kingdom');

Route::get('/bishopton/quran-academy-bishopton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bishopton')
    ->defaults('state', 'united-kingdom');

Route::get('/crossapol/quran-academy-crossapol-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'crossapol')
    ->defaults('state', 'united-kingdom');

Route::get('/howwood/quran-academy-howwood-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'howwood')
    ->defaults('state', 'united-kingdom');

Route::get('/bourne/quran-academy-bourne-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bourne')
    ->defaults('state', 'united-kingdom');

Route::get('/pinchbeck/quran-academy-pinchbeck-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pinchbeck')
    ->defaults('state', 'united-kingdom');

Route::get('/wisbech/quran-academy-wisbech-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wisbech')
    ->defaults('state', 'united-kingdom');

Route::get('/emneth/quran-academy-emneth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'emneth')
    ->defaults('state', 'united-kingdom');

Route::get('/march/quran-academy-march-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'march')
    ->defaults('state', 'united-kingdom');

Route::get('/chatteris/quran-academy-chatteris-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chatteris')
    ->defaults('state', 'united-kingdom');

Route::get('/st-neots/quran-academy-st-neots-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'st-neots')
    ->defaults('state', 'united-kingdom');

Route::get('/swineshead/quran-academy-swineshead-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'swineshead')
    ->defaults('state', 'united-kingdom');

Route::get('/boston/quran-academy-boston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'boston')
    ->defaults('state', 'united-kingdom');

Route::get('/old-leake/quran-academy-old-leake-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'old-leake')
    ->defaults('state', 'united-kingdom');

Route::get('/spilsby/quran-academy-spilsby-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'spilsby')
    ->defaults('state', 'united-kingdom');

Route::get('/burgh-le-marsh/quran-academy-burgh-le-marsh-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'burgh-le-marsh')
    ->defaults('state', 'united-kingdom');

Route::get('/skegness/quran-academy-skegness-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'skegness')
    ->defaults('state', 'united-kingdom');

Route::get('/ramsey/quran-academy-ramsey-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ramsey')
    ->defaults('state', 'united-kingdom');

Route::get('/st-ives/quran-academy-st-ives-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'st-ives')
    ->defaults('state', 'united-kingdom');

Route::get('/the-stukeleys/quran-academy-the-stukeleys-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'the-stukeleys')
    ->defaults('state', 'united-kingdom');

Route::get('/huntingdon/quran-academy-huntingdon-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'huntingdon')
    ->defaults('state', 'united-kingdom');

Route::get('/kings-lynn/quran-academy-kings-lynn-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kings-lynn')
    ->defaults('state', 'united-kingdom');

Route::get('/snettisham/quran-academy-snettisham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'snettisham')
    ->defaults('state', 'united-kingdom');

Route::get('/west-acre/quran-academy-west-acre-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'west-acre')
    ->defaults('state', 'united-kingdom');

Route::get('/shouldham/quran-academy-shouldham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'shouldham')
    ->defaults('state', 'united-kingdom');

Route::get('/wiggenhall-st-germans/quran-academy-wiggenhall-st-germans-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wiggenhall-st-germans')
    ->defaults('state', 'united-kingdom');

Route::get('/sandringham/quran-academy-sandringham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sandringham')
    ->defaults('state', 'united-kingdom');

Route::get('/old-hunstanton/quran-academy-old-hunstanton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'old-hunstanton')
    ->defaults('state', 'united-kingdom');

Route::get('/swaffham/quran-academy-swaffham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'swaffham')
    ->defaults('state', 'united-kingdom');

Route::get('/denver/quran-academy-denver-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'denver')
    ->defaults('state', 'united-kingdom');

Route::get('/ailsworth/quran-academy-ailsworth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ailsworth')
    ->defaults('state', 'united-kingdom');

Route::get('/deeping-st-james/quran-academy-deeping-st-james-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'deeping-st-james')
    ->defaults('state', 'united-kingdom');

Route::get('/farcet/quran-academy-farcet-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'farcet')
    ->defaults('state', 'united-kingdom');

Route::get('/tansor/quran-academy-tansor-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tansor')
    ->defaults('state', 'united-kingdom');

Route::get('/stamford/quran-academy-stamford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stamford')
    ->defaults('state', 'united-kingdom');

Route::get('/killichonan/quran-academy-killichonan-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'killichonan')
    ->defaults('state', 'united-kingdom');

Route::get('/dalwhinnie/quran-academy-dalwhinnie-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dalwhinnie')
    ->defaults('state', 'united-kingdom');

Route::get('/aviemore/quran-academy-aviemore-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aviemore')
    ->defaults('state', 'united-kingdom');

Route::get('/boat-of-garten/quran-academy-boat-of-garten-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'boat-of-garten')
    ->defaults('state', 'united-kingdom');

Route::get('/nethy-bridge/quran-academy-nethy-bridge-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nethy-bridge')
    ->defaults('state', 'united-kingdom');

Route::get('/grantown-on-spey/quran-academy-grantown-on-spey-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'grantown-on-spey')
    ->defaults('state', 'united-kingdom');

Route::get('/auchterarder/quran-academy-auchterarder-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'auchterarder')
    ->defaults('state', 'united-kingdom');

Route::get('/fort-augustus/quran-academy-fort-augustus-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'fort-augustus')
    ->defaults('state', 'united-kingdom');

Route::get('/fort-william/quran-academy-fort-william-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'fort-william')
    ->defaults('state', 'united-kingdom');

Route::get('/kentra/quran-academy-kentra-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kentra')
    ->defaults('state', 'united-kingdom');

Route::get('/arisaig/quran-academy-arisaig-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'arisaig')
    ->defaults('state', 'united-kingdom');

Route::get('/blackford/quran-academy-blackford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'blackford')
    ->defaults('state', 'united-kingdom');

Route::get('/mallaig/quran-academy-mallaig-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mallaig')
    ->defaults('state', 'united-kingdom');

Route::get('/isle-of-eigg/quran-academy-isle-of-eigg-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'isle-of-eigg')
    ->defaults('state', 'united-kingdom');

Route::get('/isle-of-rum/quran-academy-isle-of-rum-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'isle-of-rum')
    ->defaults('state', 'united-kingdom');

Route::get('/isle-of-canna/quran-academy-isle-of-canna-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'isle-of-canna')
    ->defaults('state', 'united-kingdom');

Route::get('/glencoe/quran-academy-glencoe-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'glencoe')
    ->defaults('state', 'united-kingdom');

Route::get('/muthill/quran-academy-muthill-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'muthill')
    ->defaults('state', 'united-kingdom');

Route::get('/kinlochleven/quran-academy-kinlochleven-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kinlochleven')
    ->defaults('state', 'united-kingdom');

Route::get('/comrie/quran-academy-comrie-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'comrie')
    ->defaults('state', 'united-kingdom');

Route::get('/crieff/quran-academy-crieff-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'crieff')
    ->defaults('state', 'united-kingdom');

Route::get('/rame/quran-academy-rame-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rame')
    ->defaults('state', 'united-kingdom');

Route::get('/antony/quran-academy-antony-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'antony')
    ->defaults('state', 'united-kingdom');

Route::get('/saltash/quran-academy-saltash-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'saltash')
    ->defaults('state', 'united-kingdom');

Route::get('/looe/quran-academy-looe-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'looe')
    ->defaults('state', 'united-kingdom');

Route::get('/liskeard/quran-academy-liskeard-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'liskeard')
    ->defaults('state', 'united-kingdom');

Route::get('/south-petherwin/quran-academy-south-petherwin-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'south-petherwin')
    ->defaults('state', 'united-kingdom');

Route::get('/lifton/quran-academy-lifton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lifton')
    ->defaults('state', 'united-kingdom');

Route::get('/callington/quran-academy-callington-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'callington')
    ->defaults('state', 'united-kingdom');

Route::get('/calstock/quran-academy-calstock-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'calstock')
    ->defaults('state', 'united-kingdom');

Route::get('/tavistock/quran-academy-tavistock-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tavistock')
    ->defaults('state', 'united-kingdom');

Route::get('/horrabridge/quran-academy-horrabridge-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'horrabridge')
    ->defaults('state', 'united-kingdom');

Route::get('/ivybridge/quran-academy-ivybridge-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ivybridge')
    ->defaults('state', 'united-kingdom');

Route::get('/lostwithiel/quran-academy-lostwithiel-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lostwithiel')
    ->defaults('state', 'united-kingdom');

Route::get('/fowey/quran-academy-fowey-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'fowey')
    ->defaults('state', 'united-kingdom');

Route::get('/st-blaise/quran-academy-st-blaise-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'st-blaise')
    ->defaults('state', 'united-kingdom');

Route::get('/st-austell/quran-academy-st-austell-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'st-austell')
    ->defaults('state', 'united-kingdom');

Route::get('/st-mewan/quran-academy-st-mewan-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'st-mewan')
    ->defaults('state', 'united-kingdom');

Route::get('/st-breock/quran-academy-st-breock-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'st-breock')
    ->defaults('state', 'united-kingdom');

Route::get('/padstow/quran-academy-padstow-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'padstow')
    ->defaults('state', 'united-kingdom');

Route::get('/st-endellion/quran-academy-st-endellion-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'st-endellion')
    ->defaults('state', 'united-kingdom');

Route::get('/helland/quran-academy-helland-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'helland')
    ->defaults('state', 'united-kingdom');

Route::get('/bodmin/quran-academy-bodmin-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bodmin')
    ->defaults('state', 'united-kingdom');

Route::get('/camelford/quran-academy-camelford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'camelford')
    ->defaults('state', 'united-kingdom');

Route::get('/st-teath/quran-academy-st-teath-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'st-teath')
    ->defaults('state', 'united-kingdom');

Route::get('/tintagel/quran-academy-tintagel-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tintagel')
    ->defaults('state', 'united-kingdom');

Route::get('/forrabury-and-minster/quran-academy-forrabury-and-minster-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'forrabury-and-minster')
    ->defaults('state', 'united-kingdom');

Route::get('/plympton/quran-academy-plympton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'plympton')
    ->defaults('state', 'united-kingdom');

Route::get('/yealmpton/quran-academy-yealmpton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'yealmpton')
    ->defaults('state', 'united-kingdom');

Route::get('/plymstock/quran-academy-plymstock-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'plymstock')
    ->defaults('state', 'united-kingdom');

Route::get('/hermitage/quran-academy-hermitage-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hermitage')
    ->defaults('state', 'united-kingdom');

Route::get('/south-hayling/quran-academy-south-hayling-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'south-hayling')
    ->defaults('state', 'united-kingdom');

Route::get('/gosport/quran-academy-gosport-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gosport')
    ->defaults('state', 'united-kingdom');

Route::get('/wickham/quran-academy-wickham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wickham')
    ->defaults('state', 'united-kingdom');

Route::get('/funtington/quran-academy-funtington-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'funtington')
    ->defaults('state', 'united-kingdom');

Route::get('/chichester/quran-academy-chichester-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chichester')
    ->defaults('state', 'united-kingdom');

Route::get('/sidlesham/quran-academy-sidlesham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sidlesham')
    ->defaults('state', 'united-kingdom');

Route::get('/aldwick/quran-academy-aldwick-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aldwick')
    ->defaults('state', 'united-kingdom');

Route::get('/felpham/quran-academy-felpham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'felpham')
    ->defaults('state', 'united-kingdom');

Route::get('/cowes/quran-academy-cowes-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'cowes')
    ->defaults('state', 'united-kingdom');

Route::get('/nettlestone/quran-academy-nettlestone-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nettlestone')
    ->defaults('state', 'united-kingdom');

Route::get('/bembridge/quran-academy-bembridge-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bembridge')
    ->defaults('state', 'united-kingdom');

Route::get('/sandown/quran-academy-sandown-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sandown')
    ->defaults('state', 'united-kingdom');

Route::get('/shanklin/quran-academy-shanklin-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'shanklin')
    ->defaults('state', 'united-kingdom');

Route::get('/ventnor/quran-academy-ventnor-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ventnor')
    ->defaults('state', 'united-kingdom');

Route::get('/totland/quran-academy-totland-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'totland')
    ->defaults('state', 'united-kingdom');

Route::get('/freshwater/quran-academy-freshwater-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'freshwater')
    ->defaults('state', 'united-kingdom');

Route::get('/yarmouth/quran-academy-yarmouth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'yarmouth')
    ->defaults('state', 'united-kingdom');

Route::get('/southwick/quran-academy-southwick-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'southwick')
    ->defaults('state', 'united-kingdom');

Route::get('/horndean/quran-academy-horndean-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'horndean')
    ->defaults('state', 'united-kingdom');

Route::get('/havant/quran-academy-havant-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'havant')
    ->defaults('state', 'united-kingdom');

Route::get('/preston/quran-academy-preston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'preston')
    ->defaults('state', 'united-kingdom');

Route::get('/leyland/quran-academy-leyland-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'leyland')
    ->defaults('state', 'united-kingdom');

Route::get('/claughton/quran-academy-claughton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'claughton')
    ->defaults('state', 'united-kingdom');

Route::get('/freckleton/quran-academy-freckleton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'freckleton')
    ->defaults('state', 'united-kingdom');

Route::get('/bamber-bridge/quran-academy-bamber-bridge-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bamber-bridge')
    ->defaults('state', 'united-kingdom');

Route::get('/chorley/quran-academy-chorley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chorley')
    ->defaults('state', 'united-kingdom');

Route::get('/twyford/quran-academy-twyford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'twyford')
    ->defaults('state', 'united-kingdom');

Route::get('/bracknell/quran-academy-bracknell-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bracknell')
    ->defaults('state', 'united-kingdom');

Route::get('/newbury/quran-academy-newbury-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'newbury')
    ->defaults('state', 'united-kingdom');

Route::get('/hungerford/quran-academy-hungerford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hungerford')
    ->defaults('state', 'united-kingdom');

Route::get('/bucklebury/quran-academy-bucklebury-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bucklebury')
    ->defaults('state', 'united-kingdom');

Route::get('/thatcham/quran-academy-thatcham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'thatcham')
    ->defaults('state', 'united-kingdom');

Route::get('/basingstoke/quran-academy-basingstoke-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'basingstoke')
    ->defaults('state', 'united-kingdom');

Route::get('/dummer/quran-academy-dummer-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dummer')
    ->defaults('state', 'united-kingdom');

Route::get('/pamber/quran-academy-pamber-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pamber')
    ->defaults('state', 'united-kingdom');

Route::get('/hook/quran-academy-hook-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hook')
    ->defaults('state', 'united-kingdom');

Route::get('/whitchurch/quran-academy-whitchurch-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'whitchurch')
    ->defaults('state', 'united-kingdom');

Route::get('/odiham/quran-academy-odiham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'odiham')
    ->defaults('state', 'united-kingdom');

Route::get('/warfield/quran-academy-warfield-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'warfield')
    ->defaults('state', 'united-kingdom');

Route::get('/wokingham-without/quran-academy-wokingham-without-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wokingham-without')
    ->defaults('state', 'united-kingdom');

Route::get('/woodley/quran-academy-woodley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'woodley')
    ->defaults('state', 'united-kingdom');

Route::get('/earley/quran-academy-earley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'earley')
    ->defaults('state', 'united-kingdom');

Route::get('/sulhamstead/quran-academy-sulhamstead-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sulhamstead')
    ->defaults('state', 'united-kingdom');

Route::get('/whitchurch-on-thames/quran-academy-whitchurch-on-thames-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'whitchurch-on-thames')
    ->defaults('state', 'united-kingdom');

Route::get('/rotherfield-greys/quran-academy-rotherfield-greys-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rotherfield-greys')
    ->defaults('state', 'united-kingdom');

Route::get('/crawley/quran-academy-crawley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'crawley')
    ->defaults('state', 'united-kingdom');

Route::get('/horsham/quran-academy-horsham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'horsham')
    ->defaults('state', 'united-kingdom');

Route::get('/southwater/quran-academy-southwater-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'southwater')
    ->defaults('state', 'united-kingdom');

Route::get('/wisborough-green/quran-academy-wisborough-green-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wisborough-green')
    ->defaults('state', 'united-kingdom');

Route::get('/burgess-hill/quran-academy-burgess-hill-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'burgess-hill')
    ->defaults('state', 'united-kingdom');

Route::get('/haywards-heath/quran-academy-haywards-heath-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'haywards-heath')
    ->defaults('state', 'united-kingdom');

Route::get('/cuckfield-rural/quran-academy-cuckfield-rural-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'cuckfield-rural')
    ->defaults('state', 'united-kingdom');

Route::get('/forest-row/quran-academy-forest-row-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'forest-row')
    ->defaults('state', 'united-kingdom');

Route::get('/east-grinstead/quran-academy-east-grinstead-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'east-grinstead')
    ->defaults('state', 'united-kingdom');

Route::get('/storrington/quran-academy-storrington-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'storrington')
    ->defaults('state', 'united-kingdom');

Route::get('/brockham/quran-academy-brockham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'brockham')
    ->defaults('state', 'united-kingdom');

Route::get('/capel/quran-academy-capel-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'capel')
    ->defaults('state', 'united-kingdom');

Route::get('/horley/quran-academy-horley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'horley')
    ->defaults('state', 'united-kingdom');

Route::get('/lingfield/quran-academy-lingfield-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lingfield')
    ->defaults('state', 'united-kingdom');

Route::get('/limpsfield/quran-academy-limpsfield-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'limpsfield')
    ->defaults('state', 'united-kingdom');

Route::get('/godstone/quran-academy-godstone-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'godstone')
    ->defaults('state', 'united-kingdom');

Route::get('/romford/quran-academy-romford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'romford')
    ->defaults('state', 'united-kingdom');

Route::get('/stapleford-abbotts/quran-academy-stapleford-abbotts-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stapleford-abbotts')
    ->defaults('state', 'united-kingdom');

Route::get('/norton/quran-academy-norton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'norton')
    ->defaults('state', 'united-kingdom');

Route::get('/dronfield/quran-academy-dronfield-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dronfield')
    ->defaults('state', 'united-kingdom');

Route::get('/eckington/quran-academy-eckington-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'eckington')
    ->defaults('state', 'united-kingdom');

Route::get('/dinnington/quran-academy-dinnington-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dinnington')
    ->defaults('state', 'united-kingdom');

Route::get('/todwick/quran-academy-todwick-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'todwick')
    ->defaults('state', 'united-kingdom');

Route::get('/grindleford/quran-academy-grindleford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'grindleford')
    ->defaults('state', 'united-kingdom');

Route::get('/aston/quran-academy-aston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aston')
    ->defaults('state', 'united-kingdom');

Route::get('/ecclesfield/quran-academy-ecclesfield-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ecclesfield')
    ->defaults('state', 'united-kingdom');

Route::get('/hunshelf/quran-academy-hunshelf-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hunshelf')
    ->defaults('state', 'united-kingdom');

Route::get('/chesterfield/quran-academy-chesterfield-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chesterfield')
    ->defaults('state', 'united-kingdom');

Route::get('/wingerworth/quran-academy-wingerworth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wingerworth')
    ->defaults('state', 'united-kingdom');

Route::get('/staveley/quran-academy-staveley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'staveley')
    ->defaults('state', 'united-kingdom');

Route::get('/bolsover/quran-academy-bolsover-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bolsover')
    ->defaults('state', 'united-kingdom');

Route::get('/clay-cross/quran-academy-clay-cross-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'clay-cross')
    ->defaults('state', 'united-kingdom');

Route::get('/rawmarsh/quran-academy-rawmarsh-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rawmarsh')
    ->defaults('state', 'united-kingdom');

Route::get('/bramley/quran-academy-bramley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bramley')
    ->defaults('state', 'united-kingdom');

Route::get('/brierley/quran-academy-brierley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'brierley')
    ->defaults('state', 'united-kingdom');

Route::get('/darfield/quran-academy-darfield-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'darfield')
    ->defaults('state', 'united-kingdom');

Route::get('/hoyland/quran-academy-hoyland-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hoyland')
    ->defaults('state', 'united-kingdom');

Route::get('/carlton-in-lindrick/quran-academy-carlton-in-lindrick-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'carlton-in-lindrick')
    ->defaults('state', 'united-kingdom');

Route::get('/landore/quran-academy-landore-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'landore')
    ->defaults('state', 'united-kingdom');

Route::get('/blaenhonddan/quran-academy-blaenhonddan-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'blaenhonddan')
    ->defaults('state', 'united-kingdom');

Route::get('/tonna/quran-academy-tonna-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tonna')
    ->defaults('state', 'united-kingdom');

Route::get('/baglan/quran-academy-baglan-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'baglan')
    ->defaults('state', 'united-kingdom');

Route::get('/bryn/quran-academy-bryn-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bryn')
    ->defaults('state', 'united-kingdom');

Route::get('/llannon/quran-academy-llannon-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llannon')
    ->defaults('state', 'united-kingdom');

Route::get('/llanelli-rural/quran-academy-llanelli-rural-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llanelli-rural')
    ->defaults('state', 'united-kingdom');

Route::get('/cefn-sidan/quran-academy-cefn-sidan-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'cefn-sidan')
    ->defaults('state', 'united-kingdom');

Route::get('/kidwelly/quran-academy-kidwelly-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kidwelly')
    ->defaults('state', 'united-kingdom');

Route::get('/betws/quran-academy-betws-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'betws')
    ->defaults('state', 'united-kingdom');

Route::get('/talley/quran-academy-talley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'talley')
    ->defaults('state', 'united-kingdom');

Route::get('/sketty/quran-academy-sketty-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sketty')
    ->defaults('state', 'united-kingdom');

Route::get('/llandovery/quran-academy-llandovery-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llandovery')
    ->defaults('state', 'united-kingdom');

Route::get('/bishopston/quran-academy-bishopston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bishopston')
    ->defaults('state', 'united-kingdom');

Route::get('/carmarthen/quran-academy-carmarthen-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'carmarthen')
    ->defaults('state', 'united-kingdom');

Route::get('/llanegwad/quran-academy-llanegwad-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llanegwad')
    ->defaults('state', 'united-kingdom');

Route::get('/meidrim/quran-academy-meidrim-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'meidrim')
    ->defaults('state', 'united-kingdom');

Route::get('/llanfallteg/quran-academy-llanfallteg-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llanfallteg')
    ->defaults('state', 'united-kingdom');

Route::get('/clydau/quran-academy-clydau-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'clydau')
    ->defaults('state', 'united-kingdom');

Route::get('/crymych/quran-academy-crymych-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'crymych')
    ->defaults('state', 'united-kingdom');

Route::get('/boncath/quran-academy-boncath-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'boncath')
    ->defaults('state', 'united-kingdom');

Route::get('/newcastle-emlyn/quran-academy-newcastle-emlyn-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'newcastle-emlyn')
    ->defaults('state', 'united-kingdom');

Route::get('/llanfihangel-ar-arth/quran-academy-llanfihangel-ar-arth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llanfihangel-ar-arth')
    ->defaults('state', 'united-kingdom');

Route::get('/gorseinon/quran-academy-gorseinon-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gorseinon')
    ->defaults('state', 'united-kingdom');

Route::get('/llanwenog/quran-academy-llanwenog-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llanwenog')
    ->defaults('state', 'united-kingdom');

Route::get('/eglwyswrw/quran-academy-eglwyswrw-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'eglwyswrw')
    ->defaults('state', 'united-kingdom');

Route::get('/llangoedmor/quran-academy-llangoedmor-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llangoedmor')
    ->defaults('state', 'united-kingdom');

Route::get('/troedyraur/quran-academy-troedyraur-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'troedyraur')
    ->defaults('state', 'united-kingdom');

Route::get('/new-quay/quran-academy-new-quay-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'new-quay')
    ->defaults('state', 'united-kingdom');

Route::get('/aberaeron/quran-academy-aberaeron-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aberaeron')
    ->defaults('state', 'united-kingdom');

Route::get('/llanarth/quran-academy-llanarth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llanarth')
    ->defaults('state', 'united-kingdom');

Route::get('/llangybi/quran-academy-llangybi-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llangybi')
    ->defaults('state', 'united-kingdom');

Route::get('/penderry/quran-academy-penderry-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'penderry')
    ->defaults('state', 'united-kingdom');

Route::get('/morriston/quran-academy-morriston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'morriston')
    ->defaults('state', 'united-kingdom');

Route::get('/haverfordwest/quran-academy-haverfordwest-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'haverfordwest')
    ->defaults('state', 'united-kingdom');

Route::get('/nolton/quran-academy-nolton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nolton')
    ->defaults('state', 'united-kingdom');

Route::get('/wiston/quran-academy-wiston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wiston')
    ->defaults('state', 'united-kingdom');

Route::get('/pencaer/quran-academy-pencaer-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pencaer')
    ->defaults('state', 'united-kingdom');

Route::get('/fishguard/quran-academy-fishguard-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'fishguard')
    ->defaults('state', 'united-kingdom');

Route::get('/maenclochog/quran-academy-maenclochog-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'maenclochog')
    ->defaults('state', 'united-kingdom');

Route::get('/narberth/quran-academy-narberth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'narberth')
    ->defaults('state', 'united-kingdom');

Route::get('/jeffreyston/quran-academy-jeffreyston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'jeffreyston')
    ->defaults('state', 'united-kingdom');

Route::get('/saundersfoot/quran-academy-saundersfoot-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'saundersfoot')
    ->defaults('state', 'united-kingdom');

Route::get('/llansamlet/quran-academy-llansamlet-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llansamlet')
    ->defaults('state', 'united-kingdom');

Route::get('/penally/quran-academy-penally-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'penally')
    ->defaults('state', 'united-kingdom');

Route::get('/pembroke/quran-academy-pembroke-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pembroke')
    ->defaults('state', 'united-kingdom');

Route::get('/pembroke-dock/quran-academy-pembroke-dock-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pembroke-dock')
    ->defaults('state', 'united-kingdom');

Route::get('/milford-haven/quran-academy-milford-haven-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'milford-haven')
    ->defaults('state', 'united-kingdom');

Route::get('/pontardawe/quran-academy-pontardawe-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pontardawe')
    ->defaults('state', 'united-kingdom');

Route::get('/ystradgynlais/quran-academy-ystradgynlais-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ystradgynlais')
    ->defaults('state', 'united-kingdom');

Route::get('/camberwell/quran-academy-camberwell-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'camberwell')
    ->defaults('state', 'united-kingdom');

Route::get('/greenwich/quran-academy-greenwich-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'greenwich')
    ->defaults('state', 'united-kingdom');

Route::get('/lambeth/quran-academy-lambeth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lambeth')
    ->defaults('state', 'united-kingdom');

Route::get('/lewisham/quran-academy-lewisham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lewisham')
    ->defaults('state', 'united-kingdom');

Route::get('/eltham/quran-academy-eltham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'eltham')
    ->defaults('state', 'united-kingdom');

Route::get('/stevenage/quran-academy-stevenage-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stevenage')
    ->defaults('state', 'united-kingdom');

Route::get('/much-hadham/quran-academy-much-hadham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'much-hadham')
    ->defaults('state', 'united-kingdom');

Route::get('/standon/quran-academy-standon-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'standon')
    ->defaults('state', 'united-kingdom');

Route::get('/ware/quran-academy-ware-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ware')
    ->defaults('state', 'united-kingdom');

Route::get('/hertford/quran-academy-hertford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hertford')
    ->defaults('state', 'united-kingdom');

Route::get('/arlesey/quran-academy-arlesey-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'arlesey')
    ->defaults('state', 'united-kingdom');

Route::get('/henlow/quran-academy-henlow-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'henlow')
    ->defaults('state', 'united-kingdom');

Route::get('/shefford/quran-academy-shefford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'shefford')
    ->defaults('state', 'united-kingdom');

Route::get('/biggleswade/quran-academy-biggleswade-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'biggleswade')
    ->defaults('state', 'united-kingdom');

Route::get('/knebworth/quran-academy-knebworth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'knebworth')
    ->defaults('state', 'united-kingdom');

Route::get('/ippollitts/quran-academy-ippollitts-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ippollitts')
    ->defaults('state', 'united-kingdom');

Route::get('/ickleford/quran-academy-ickleford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ickleford')
    ->defaults('state', 'united-kingdom');

Route::get('/hitchin/quran-academy-hitchin-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hitchin')
    ->defaults('state', 'united-kingdom');

Route::get('/bygrave/quran-academy-bygrave-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bygrave')
    ->defaults('state', 'united-kingdom');

Route::get('/melbourn/quran-academy-melbourn-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'melbourn')
    ->defaults('state', 'united-kingdom');

Route::get('/buntingford/quran-academy-buntingford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'buntingford')
    ->defaults('state', 'united-kingdom');

Route::get('/macclesfield/quran-academy-macclesfield-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'macclesfield')
    ->defaults('state', 'united-kingdom');

Route::get('/poynton/quran-academy-poynton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'poynton')
    ->defaults('state', 'united-kingdom');

Route::get('/glossop/quran-academy-glossop-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'glossop')
    ->defaults('state', 'united-kingdom');

Route::get('/king-sterndale/quran-academy-king-sterndale-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'king-sterndale')
    ->defaults('state', 'united-kingdom');

Route::get('/new-mills/quran-academy-new-mills-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'new-mills')
    ->defaults('state', 'united-kingdom');

Route::get('/chapel-en-le-frith/quran-academy-chapel-en-le-frith-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chapel-en-le-frith')
    ->defaults('state', 'united-kingdom');

Route::get('/cheadle/quran-academy-cheadle-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'cheadle')
    ->defaults('state', 'united-kingdom');

Route::get('/iver/quran-academy-iver-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'iver')
    ->defaults('state', 'united-kingdom');

Route::get('/colnbrook-with-poyle/quran-academy-colnbrook-with-poyle-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'colnbrook-with-poyle')
    ->defaults('state', 'united-kingdom');

Route::get('/windsor/quran-academy-windsor-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'windsor')
    ->defaults('state', 'united-kingdom');

Route::get('/sunninghill/quran-academy-sunninghill-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sunninghill')
    ->defaults('state', 'united-kingdom');

Route::get('/maidenhead/quran-academy-maidenhead-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'maidenhead')
    ->defaults('state', 'united-kingdom');

Route::get('/marlow/quran-academy-marlow-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'marlow')
    ->defaults('state', 'united-kingdom');

Route::get('/wooburn/quran-academy-wooburn-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wooburn')
    ->defaults('state', 'united-kingdom');

Route::get('/chalfont-st-peter/quran-academy-chalfont-st-peter-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chalfont-st-peter')
    ->defaults('state', 'united-kingdom');

Route::get('/roundway/quran-academy-roundway-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'roundway')
    ->defaults('state', 'united-kingdom');

Route::get('/calne/quran-academy-calne-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'calne')
    ->defaults('state', 'united-kingdom');

Route::get('/melksham/quran-academy-melksham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'melksham')
    ->defaults('state', 'united-kingdom');

Route::get('/corsham/quran-academy-corsham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'corsham')
    ->defaults('state', 'united-kingdom');

Route::get('/yatton-keynell/quran-academy-yatton-keynell-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'yatton-keynell')
    ->defaults('state', 'united-kingdom');

Route::get('/bremhill/quran-academy-bremhill-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bremhill')
    ->defaults('state', 'united-kingdom');

Route::get('/malmesbury/quran-academy-malmesbury-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'malmesbury')
    ->defaults('state', 'united-kingdom');

Route::get('/haydon-wick/quran-academy-haydon-wick-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'haydon-wick')
    ->defaults('state', 'united-kingdom');

Route::get('/blunsdon-st-andrew/quran-academy-blunsdon-st-andrew-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'blunsdon-st-andrew')
    ->defaults('state', 'united-kingdom');

Route::get('/wroughton/quran-academy-wroughton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wroughton')
    ->defaults('state', 'united-kingdom');

Route::get('/stanton-fitzwarren/quran-academy-stanton-fitzwarren-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stanton-fitzwarren')
    ->defaults('state', 'united-kingdom');

Route::get('/shellingford/quran-academy-shellingford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'shellingford')
    ->defaults('state', 'united-kingdom');

Route::get('/savernake/quran-academy-savernake-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'savernake')
    ->defaults('state', 'united-kingdom');

Route::get('/manningford/quran-academy-manningford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'manningford')
    ->defaults('state', 'united-kingdom');

Route::get('/longstock/quran-academy-longstock-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'longstock')
    ->defaults('state', 'united-kingdom');

Route::get('/winchester/quran-academy-winchester-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'winchester')
    ->defaults('state', 'united-kingdom');

Route::get('/bishops-sutton/quran-academy-bishops-sutton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bishops-sutton')
    ->defaults('state', 'united-kingdom');

Route::get('/hedge-end/quran-academy-hedge-end-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hedge-end')
    ->defaults('state', 'united-kingdom');

Route::get('/locks-heath/quran-academy-locks-heath-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'locks-heath')
    ->defaults('state', 'united-kingdom');

Route::get('/bishops-waltham/quran-academy-bishops-waltham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bishops-waltham')
    ->defaults('state', 'united-kingdom');

Route::get('/totton/quran-academy-totton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'totton')
    ->defaults('state', 'united-kingdom');

Route::get('/lymington/quran-academy-lymington-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lymington')
    ->defaults('state', 'united-kingdom');

Route::get('/denny-lodge/quran-academy-denny-lodge-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'denny-lodge')
    ->defaults('state', 'united-kingdom');

Route::get('/lyndhurst/quran-academy-lyndhurst-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lyndhurst')
    ->defaults('state', 'united-kingdom');

Route::get('/eastleigh/quran-academy-eastleigh-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'eastleigh')
    ->defaults('state', 'united-kingdom');

Route::get('/romsey/quran-academy-romsey-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'romsey')
    ->defaults('state', 'united-kingdom');

Route::get('/north-baddesley/quran-academy-north-baddesley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'north-baddesley')
    ->defaults('state', 'united-kingdom');

Route::get('/salisbury/quran-academy-salisbury-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'salisbury')
    ->defaults('state', 'united-kingdom');

Route::get('/andover/quran-academy-andover-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'andover')
    ->defaults('state', 'united-kingdom');

Route::get('/charlton/quran-academy-charlton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'charlton')
    ->defaults('state', 'united-kingdom');

Route::get('/amesbury/quran-academy-amesbury-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'amesbury')
    ->defaults('state', 'united-kingdom');

Route::get('/downton/quran-academy-downton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'downton')
    ->defaults('state', 'united-kingdom');

Route::get('/fordingbridge/quran-academy-fordingbridge-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'fordingbridge')
    ->defaults('state', 'united-kingdom');

Route::get('/shaftesbury/quran-academy-shaftesbury-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'shaftesbury')
    ->defaults('state', 'united-kingdom');

Route::get('/south-tidworth/quran-academy-south-tidworth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'south-tidworth')
    ->defaults('state', 'united-kingdom');

Route::get('/castletown/quran-academy-castletown-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'castletown')
    ->defaults('state', 'united-kingdom');

Route::get('/dalton-le-dale/quran-academy-dalton-le-dale-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dalton-le-dale')
    ->defaults('state', 'united-kingdom');

Route::get('/peterlee/quran-academy-peterlee-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'peterlee')
    ->defaults('state', 'united-kingdom');

Route::get('/wickford/quran-academy-wickford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wickford')
    ->defaults('state', 'united-kingdom');

Route::get('/basildon/quran-academy-basildon-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'basildon')
    ->defaults('state', 'united-kingdom');

Route::get('/rochford/quran-academy-rochford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rochford')
    ->defaults('state', 'united-kingdom');

Route::get('/hockley/quran-academy-hockley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hockley')
    ->defaults('state', 'united-kingdom');

Route::get('/rayleigh/quran-academy-rayleigh-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rayleigh')
    ->defaults('state', 'united-kingdom');

Route::get('/canvey-island/quran-academy-canvey-island-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'canvey-island')
    ->defaults('state', 'united-kingdom');

Route::get('/forsbrook/quran-academy-forsbrook-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'forsbrook')
    ->defaults('state', 'united-kingdom');

Route::get('/barlaston/quran-academy-barlaston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'barlaston')
    ->defaults('state', 'united-kingdom');

Route::get('/leek/quran-academy-leek-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'leek')
    ->defaults('state', 'united-kingdom');

Route::get('/uttoxeter/quran-academy-uttoxeter-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'uttoxeter')
    ->defaults('state', 'united-kingdom');

Route::get('/stafford/quran-academy-stafford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stafford')
    ->defaults('state', 'united-kingdom');

Route::get('/hopton/quran-academy-hopton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hopton')
    ->defaults('state', 'united-kingdom');

Route::get('/penkridge/quran-academy-penkridge-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'penkridge')
    ->defaults('state', 'united-kingdom');

Route::get('/gnosall/quran-academy-gnosall-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'gnosall')
    ->defaults('state', 'united-kingdom');

Route::get('/eccleshall/quran-academy-eccleshall-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'eccleshall')
    ->defaults('state', 'united-kingdom');

Route::get('/newcastle-under-lyme/quran-academy-newcastle-under-lyme-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'newcastle-under-lyme')
    ->defaults('state', 'united-kingdom');

Route::get('/kidsgrove/quran-academy-kidsgrove-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kidsgrove')
    ->defaults('state', 'united-kingdom');

Route::get('/biddulph/quran-academy-biddulph-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'biddulph')
    ->defaults('state', 'united-kingdom');

Route::get('/bagnall/quran-academy-bagnall-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bagnall')
    ->defaults('state', 'united-kingdom');

Route::get('/kensington/quran-academy-kensington-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kensington')
    ->defaults('state', 'united-kingdom');

Route::get('/wandsworth/quran-academy-wandsworth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wandsworth')
    ->defaults('state', 'united-kingdom');

Route::get('/hammersmith/quran-academy-hammersmith-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hammersmith')
    ->defaults('state', 'united-kingdom');

Route::get('/shrewsbury/quran-academy-shrewsbury-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'shrewsbury')
    ->defaults('state', 'united-kingdom');

Route::get('/oswestry-rural/quran-academy-oswestry-rural-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'oswestry-rural')
    ->defaults('state', 'united-kingdom');

Route::get('/oswestry/quran-academy-oswestry-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'oswestry')
    ->defaults('state', 'united-kingdom');

Route::get('/ellesmere/quran-academy-ellesmere-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ellesmere')
    ->defaults('state', 'united-kingdom');

Route::get('/whitchurch-rural/quran-academy-whitchurch-rural-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'whitchurch-rural')
    ->defaults('state', 'united-kingdom');

Route::get('/malpas/quran-academy-malpas-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'malpas')
    ->defaults('state', 'united-kingdom');

Route::get('/montgomery/quran-academy-montgomery-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'montgomery')
    ->defaults('state', 'united-kingdom');

Route::get('/llanllwchaiarn/quran-academy-llanllwchaiarn-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llanllwchaiarn')
    ->defaults('state', 'united-kingdom');

Route::get('/caersws/quran-academy-caersws-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'caersws')
    ->defaults('state', 'united-kingdom');

Route::get('/llanidloes/quran-academy-llanidloes-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llanidloes')
    ->defaults('state', 'united-kingdom');

Route::get('/llanbrynmair/quran-academy-llanbrynmair-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llanbrynmair')
    ->defaults('state', 'united-kingdom');

Route::get('/glantwymyn/quran-academy-glantwymyn-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'glantwymyn')
    ->defaults('state', 'united-kingdom');

Route::get('/castle-caereinion/quran-academy-castle-caereinion-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'castle-caereinion')
    ->defaults('state', 'united-kingdom');

Route::get('/llansantffraid/quran-academy-llansantffraid-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llansantffraid')
    ->defaults('state', 'united-kingdom');

Route::get('/llanfarian/quran-academy-llanfarian-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'llanfarian')
    ->defaults('state', 'united-kingdom');

Route::get('/geneur-glyn/quran-academy-geneur-glyn-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'geneur-glyn')
    ->defaults('state', 'united-kingdom');

Route::get('/tregaron/quran-academy-tregaron-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tregaron')
    ->defaults('state', 'united-kingdom');

Route::get('/myddle/quran-academy-myddle-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'myddle')
    ->defaults('state', 'united-kingdom');

Route::get('/longden/quran-academy-longden-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'longden')
    ->defaults('state', 'united-kingdom');

Route::get('/church-stretton/quran-academy-church-stretton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'church-stretton')
    ->defaults('state', 'united-kingdom');

Route::get('/hopesay/quran-academy-hopesay-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hopesay')
    ->defaults('state', 'united-kingdom');

Route::get('/ludlow/quran-academy-ludlow-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ludlow')
    ->defaults('state', 'united-kingdom');

Route::get('/lydham/quran-academy-lydham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lydham')
    ->defaults('state', 'united-kingdom');

Route::get('/taunton/quran-academy-taunton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'taunton')
    ->defaults('state', 'united-kingdom');

Route::get('/langport/quran-academy-langport-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'langport')
    ->defaults('state', 'united-kingdom');

Route::get('/somerton/quran-academy-somerton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'somerton')
    ->defaults('state', 'united-kingdom');

Route::get('/martock/quran-academy-martock-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'martock')
    ->defaults('state', 'united-kingdom');

Route::get('/south-petherton/quran-academy-south-petherton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'south-petherton')
    ->defaults('state', 'united-kingdom');

Route::get('/norton-sub-hamdon/quran-academy-norton-sub-hamdon-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'norton-sub-hamdon')
    ->defaults('state', 'united-kingdom');

Route::get('/montacute/quran-academy-montacute-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'montacute')
    ->defaults('state', 'united-kingdom');

Route::get('/merriott/quran-academy-merriott-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'merriott')
    ->defaults('state', 'united-kingdom');

Route::get('/hinton-st-george/quran-academy-hinton-st-george-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hinton-st-george')
    ->defaults('state', 'united-kingdom');

Route::get('/crewkerne/quran-academy-crewkerne-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'crewkerne')
    ->defaults('state', 'united-kingdom');

Route::get('/ilminster/quran-academy-ilminster-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ilminster')
    ->defaults('state', 'united-kingdom');

Route::get('/staplegrove/quran-academy-staplegrove-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'staplegrove')
    ->defaults('state', 'united-kingdom');

Route::get('/chard/quran-academy-chard-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chard')
    ->defaults('state', 'united-kingdom');

Route::get('/wellington/quran-academy-wellington-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wellington')
    ->defaults('state', 'united-kingdom');

Route::get('/dulverton/quran-academy-dulverton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dulverton')
    ->defaults('state', 'united-kingdom');

Route::get('/williton/quran-academy-williton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'williton')
    ->defaults('state', 'united-kingdom');

Route::get('/wootton-courtenay/quran-academy-wootton-courtenay-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wootton-courtenay')
    ->defaults('state', 'united-kingdom');

Route::get('/stoke-st-mary/quran-academy-stoke-st-mary-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stoke-st-mary')
    ->defaults('state', 'united-kingdom');

Route::get('/lydeard-st-lawrence/quran-academy-lydeard-st-lawrence-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lydeard-st-lawrence')
    ->defaults('state', 'united-kingdom');

Route::get('/spaxton/quran-academy-spaxton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'spaxton')
    ->defaults('state', 'united-kingdom');

Route::get('/bridgwater/quran-academy-bridgwater-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bridgwater')
    ->defaults('state', 'united-kingdom');

Route::get('/stawell/quran-academy-stawell-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stawell')
    ->defaults('state', 'united-kingdom');

Route::get('/burnham-on-sea/quran-academy-burnham-on-sea-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'burnham-on-sea')
    ->defaults('state', 'united-kingdom');

Route::get('/burnham-without/quran-academy-burnham-without-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'burnham-without')
    ->defaults('state', 'united-kingdom');

Route::get('/galashiels/quran-academy-galashiels-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'galashiels')
    ->defaults('state', 'united-kingdom');

Route::get('/greenlaw/quran-academy-greenlaw-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'greenlaw')
    ->defaults('state', 'united-kingdom');

Route::get('/cornhill-on-tweed/quran-academy-cornhill-on-tweed-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'cornhill-on-tweed')
    ->defaults('state', 'united-kingdom');

Route::get('/cockburnspath/quran-academy-cockburnspath-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'cockburnspath')
    ->defaults('state', 'united-kingdom');

Route::get('/berwick-upon-tweed/quran-academy-berwick-upon-tweed-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'berwick-upon-tweed')
    ->defaults('state', 'united-kingdom');

Route::get('/earlston/quran-academy-earlston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'earlston')
    ->defaults('state', 'united-kingdom');

Route::get('/newtown-st-boswells/quran-academy-newtown-st-boswells-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'newtown-st-boswells')
    ->defaults('state', 'united-kingdom');

Route::get('/jedburgh/quran-academy-jedburgh-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'jedburgh')
    ->defaults('state', 'united-kingdom');

Route::get('/shifnal/quran-academy-shifnal-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'shifnal')
    ->defaults('state', 'united-kingdom');

Route::get('/broseley/quran-academy-broseley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'broseley')
    ->defaults('state', 'united-kingdom');

Route::get('/much-wenlock/quran-academy-much-wenlock-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'much-wenlock')
    ->defaults('state', 'united-kingdom');

Route::get('/st-georges-and-priorslee/quran-academy-st-georges-and-priorslee-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'st-georges-and-priorslee')
    ->defaults('state', 'united-kingdom');

Route::get('/hollinswood/quran-academy-hollinswood-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hollinswood')
    ->defaults('state', 'united-kingdom');

Route::get('/telford/quran-academy-telford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'telford')
    ->defaults('state', 'united-kingdom');

Route::get('/rodington/quran-academy-rodington-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rodington')
    ->defaults('state', 'united-kingdom');

Route::get('/madeley/quran-academy-madeley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'madeley')
    ->defaults('state', 'united-kingdom');

Route::get('/the-gorge/quran-academy-the-gorge-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'the-gorge')
    ->defaults('state', 'united-kingdom');

Route::get('/sutton-upon-tern/quran-academy-sutton-upon-tern-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sutton-upon-tern')
    ->defaults('state', 'united-kingdom');

Route::get('/royal-tunbridge-wells/quran-academy-royal-tunbridge-wells-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'royal-tunbridge-wells')
    ->defaults('state', 'united-kingdom');

Route::get('/tonbridge/quran-academy-tonbridge-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tonbridge')
    ->defaults('state', 'united-kingdom');

Route::get('/yalding/quran-academy-yalding-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'yalding')
    ->defaults('state', 'united-kingdom');

Route::get('/sevenoaks/quran-academy-sevenoaks-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sevenoaks')
    ->defaults('state', 'united-kingdom');

Route::get('/dunton-green/quran-academy-dunton-green-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dunton-green')
    ->defaults('state', 'united-kingdom');

Route::get('/wrotham/quran-academy-wrotham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wrotham')
    ->defaults('state', 'united-kingdom');

Route::get('/cranbrook/quran-academy-cranbrook-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'cranbrook')
    ->defaults('state', 'united-kingdom');

Route::get('/four-throws/quran-academy-four-throws-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'four-throws')
    ->defaults('state', 'united-kingdom');

Route::get('/burwash/quran-academy-burwash-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'burwash')
    ->defaults('state', 'united-kingdom');

Route::get('/mayfield/quran-academy-mayfield-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mayfield')
    ->defaults('state', 'united-kingdom');

Route::get('/heathfield/quran-academy-heathfield-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'heathfield')
    ->defaults('state', 'united-kingdom');

Route::get('/uckfield/quran-academy-uckfield-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'uckfield')
    ->defaults('state', 'united-kingdom');

Route::get('/ashford/quran-academy-ashford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ashford')
    ->defaults('state', 'united-kingdom');

Route::get('/wye/quran-academy-wye-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wye')
    ->defaults('state', 'united-kingdom');

Route::get('/shadoxhurst/quran-academy-shadoxhurst-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'shadoxhurst')
    ->defaults('state', 'united-kingdom');

Route::get('/smarden/quran-academy-smarden-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'smarden')
    ->defaults('state', 'united-kingdom');

Route::get('/new-romney/quran-academy-new-romney-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'new-romney')
    ->defaults('state', 'united-kingdom');

Route::get('/st-mary-in-the-marsh/quran-academy-st-mary-in-the-marsh-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'st-mary-in-the-marsh')
    ->defaults('state', 'united-kingdom');

Route::get('/tenterden/quran-academy-tenterden-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tenterden')
    ->defaults('state', 'united-kingdom');

Route::get('/peasmarsh/quran-academy-peasmarsh-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'peasmarsh')
    ->defaults('state', 'united-kingdom');

Route::get('/salehurst/quran-academy-salehurst-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'salehurst')
    ->defaults('state', 'united-kingdom');

Route::get('/battle/quran-academy-battle-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'battle')
    ->defaults('state', 'united-kingdom');

Route::get('/hastings/quran-academy-hastings-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hastings')
    ->defaults('state', 'united-kingdom');

Route::get('/icklesham/quran-academy-icklesham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'icklesham')
    ->defaults('state', 'united-kingdom');

Route::get('/bexhill/quran-academy-bexhill-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bexhill')
    ->defaults('state', 'united-kingdom');

Route::get('/wadhurst/quran-academy-wadhurst-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wadhurst')
    ->defaults('state', 'united-kingdom');

Route::get('/crowborough/quran-academy-crowborough-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'crowborough')
    ->defaults('state', 'united-kingdom');

Route::get('/hartfield/quran-academy-hartfield-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hartfield')
    ->defaults('state', 'united-kingdom');

Route::get('/edenbridge/quran-academy-edenbridge-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'edenbridge')
    ->defaults('state', 'united-kingdom');

Route::get('/torquay/quran-academy-torquay-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'torquay')
    ->defaults('state', 'united-kingdom');

Route::get('/south-brent/quran-academy-south-brent-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'south-brent')
    ->defaults('state', 'united-kingdom');

Route::get('/buckfast/quran-academy-buckfast-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'buckfast')
    ->defaults('state', 'united-kingdom');

Route::get('/newton-abbot/quran-academy-newton-abbot-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'newton-abbot')
    ->defaults('state', 'united-kingdom');

Route::get('/bovey-tracey/quran-academy-bovey-tracey-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bovey-tracey')
    ->defaults('state', 'united-kingdom');

Route::get('/teignmouth/quran-academy-teignmouth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'teignmouth')
    ->defaults('state', 'united-kingdom');

Route::get('/dartmouth/quran-academy-dartmouth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'dartmouth')
    ->defaults('state', 'united-kingdom');

Route::get('/kingsbridge/quran-academy-kingsbridge-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kingsbridge')
    ->defaults('state', 'united-kingdom');

Route::get('/salcombe/quran-academy-salcombe-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'salcombe')
    ->defaults('state', 'united-kingdom');

Route::get('/totnes/quran-academy-totnes-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'totnes')
    ->defaults('state', 'united-kingdom');

Route::get('/truro/quran-academy-truro-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'truro')
    ->defaults('state', 'united-kingdom');

Route::get('/penryn/quran-academy-penryn-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'penryn')
    ->defaults('state', 'united-kingdom');

Route::get('/falmouth/quran-academy-falmouth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'falmouth')
    ->defaults('state', 'united-kingdom');

Route::get('/st-keverne/quran-academy-st-keverne-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'st-keverne')
    ->defaults('state', 'united-kingdom');

Route::get('/helston/quran-academy-helston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'helston')
    ->defaults('state', 'united-kingdom');

Route::get('/camborne/quran-academy-camborne-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'camborne')
    ->defaults('state', 'united-kingdom');

Route::get('/redruth/quran-academy-redruth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'redruth')
    ->defaults('state', 'united-kingdom');

Route::get('/marazion/quran-academy-marazion-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'marazion')
    ->defaults('state', 'united-kingdom');

Route::get('/penzance/quran-academy-penzance-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'penzance')
    ->defaults('state', 'united-kingdom');

Route::get('/sancreed/quran-academy-sancreed-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sancreed')
    ->defaults('state', 'united-kingdom');

Route::get('/tregoney/quran-academy-tregoney-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tregoney')
    ->defaults('state', 'united-kingdom');

Route::get('/ludgvan/quran-academy-ludgvan-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ludgvan')
    ->defaults('state', 'united-kingdom');

Route::get('/isles-of-scilly/quran-academy-isles-of-scilly-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'isles-of-scilly')
    ->defaults('state', 'united-kingdom');

Route::get('/hayle/quran-academy-hayle-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hayle')
    ->defaults('state', 'united-kingdom');

Route::get('/perranarworthal/quran-academy-perranarworthal-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'perranarworthal')
    ->defaults('state', 'united-kingdom');

Route::get('/kenwyn/quran-academy-kenwyn-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kenwyn')
    ->defaults('state', 'united-kingdom');

Route::get('/st-agnes/quran-academy-st-agnes-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'st-agnes')
    ->defaults('state', 'united-kingdom');

Route::get('/perranporth/quran-academy-perranporth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'perranporth')
    ->defaults('state', 'united-kingdom');

Route::get('/newquay/quran-academy-newquay-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'newquay')
    ->defaults('state', 'united-kingdom');

Route::get('/colan/quran-academy-colan-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'colan')
    ->defaults('state', 'united-kingdom');

Route::get('/st-columb-major/quran-academy-st-columb-major-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'st-columb-major')
    ->defaults('state', 'united-kingdom');

Route::get('/redcar/quran-academy-redcar-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'redcar')
    ->defaults('state', 'united-kingdom');

Route::get('/saltburn-marske-and-new-marske/quran-academy-saltburn-marske-and-new-marske-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'saltburn-marske-and-new-marske')
    ->defaults('state', 'united-kingdom');

Route::get('/skelton/quran-academy-skelton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'skelton')
    ->defaults('state', 'united-kingdom');

Route::get('/loftus/quran-academy-loftus-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'loftus')
    ->defaults('state', 'united-kingdom');

Route::get('/guisborough/quran-academy-guisborough-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'guisborough')
    ->defaults('state', 'united-kingdom');

Route::get('/kirklevington/quran-academy-kirklevington-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kirklevington')
    ->defaults('state', 'united-kingdom');

Route::get('/egglescliffe/quran-academy-egglescliffe-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'egglescliffe')
    ->defaults('state', 'united-kingdom');

Route::get('/thornaby/quran-academy-thornaby-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'thornaby')
    ->defaults('state', 'united-kingdom');

Route::get('/sedgefield/quran-academy-sedgefield-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sedgefield')
    ->defaults('state', 'united-kingdom');

Route::get('/trindon/quran-academy-trindon-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'trindon')
    ->defaults('state', 'united-kingdom');

Route::get('/billingham/quran-academy-billingham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'billingham')
    ->defaults('state', 'united-kingdom');

Route::get('/monk-hesleden/quran-academy-monk-hesleden-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'monk-hesleden')
    ->defaults('state', 'united-kingdom');

Route::get('/hutton-henry/quran-academy-hutton-henry-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hutton-henry')
    ->defaults('state', 'united-kingdom');

Route::get('/trimdon/quran-academy-trimdon-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'trimdon')
    ->defaults('state', 'united-kingdom');

Route::get('/stainton/quran-academy-stainton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stainton')
    ->defaults('state', 'united-kingdom');

Route::get('/great-and-little-broughton/quran-academy-great-and-little-broughton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'great-and-little-broughton')
    ->defaults('state', 'united-kingdom');

Route::get('/hounslow/quran-academy-hounslow-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hounslow')
    ->defaults('state', 'united-kingdom');

Route::get('/staines/quran-academy-staines-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'staines')
    ->defaults('state', 'united-kingdom');

Route::get('/egham/quran-academy-egham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'egham')
    ->defaults('state', 'united-kingdom');

Route::get('/southall/quran-academy-southall-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'southall')
    ->defaults('state', 'united-kingdom');

Route::get('/denham-green/quran-academy-denham-green-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'denham-green')
    ->defaults('state', 'united-kingdom');

Route::get('/ealing/quran-academy-ealing-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'ealing')
    ->defaults('state', 'united-kingdom');

Route::get('/birchwood/quran-academy-birchwood-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'birchwood')
    ->defaults('state', 'united-kingdom');

Route::get('/lymm/quran-academy-lymm-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lymm')
    ->defaults('state', 'united-kingdom');

Route::get('/knutsford/quran-academy-knutsford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'knutsford')
    ->defaults('state', 'united-kingdom');

Route::get('/croft/quran-academy-croft-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'croft')
    ->defaults('state', 'united-kingdom');

Route::get('/appleton/quran-academy-appleton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'appleton')
    ->defaults('state', 'united-kingdom');

Route::get('/great-sankey/quran-academy-great-sankey-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'great-sankey')
    ->defaults('state', 'united-kingdom');

Route::get('/frodsham/quran-academy-frodsham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'frodsham')
    ->defaults('state', 'united-kingdom');

Route::get('/runcorn/quran-academy-runcorn-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'runcorn')
    ->defaults('state', 'united-kingdom');

Route::get('/watford/quran-academy-watford-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'watford')
    ->defaults('state', 'united-kingdom');

Route::get('/watford-rural/quran-academy-watford-rural-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'watford-rural')
    ->defaults('state', 'united-kingdom');

Route::get('/chorleywood/quran-academy-chorleywood-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chorleywood')
    ->defaults('state', 'united-kingdom');

Route::get('/kings-langley/quran-academy-kings-langley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'kings-langley')
    ->defaults('state', 'united-kingdom');

Route::get('/abbots-langley/quran-academy-abbots-langley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'abbots-langley')
    ->defaults('state', 'united-kingdom');

Route::get('/borehamwood/quran-academy-borehamwood-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'borehamwood')
    ->defaults('state', 'united-kingdom');

Route::get('/radlett/quran-academy-radlett-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'radlett')
    ->defaults('state', 'united-kingdom');

Route::get('/mirfield/quran-academy-mirfield-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'mirfield')
    ->defaults('state', 'united-kingdom');

Route::get('/crigglestone/quran-academy-crigglestone-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'crigglestone')
    ->defaults('state', 'united-kingdom');

Route::get('/normanton/quran-academy-normanton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'normanton')
    ->defaults('state', 'united-kingdom');

Route::get('/featherstone/quran-academy-featherstone-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'featherstone')
    ->defaults('state', 'united-kingdom');

Route::get('/north-elmsall/quran-academy-north-elmsall-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'north-elmsall')
    ->defaults('state', 'united-kingdom');

Route::get('/leigh/quran-academy-leigh-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'leigh')
    ->defaults('state', 'united-kingdom');

Route::get('/worcester/quran-academy-worcester-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'worcester')
    ->defaults('state', 'united-kingdom');

Route::get('/wick/quran-academy-wick-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wick')
    ->defaults('state', 'united-kingdom');

Route::get('/evesham/quran-academy-evesham-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'evesham')
    ->defaults('state', 'united-kingdom');

Route::get('/broadway/quran-academy-broadway-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'broadway')
    ->defaults('state', 'united-kingdom');

Route::get('/colwall/quran-academy-colwall-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'colwall')
    ->defaults('state', 'united-kingdom');

Route::get('/great-malvern/quran-academy-great-malvern-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'great-malvern')
    ->defaults('state', 'united-kingdom');

Route::get('/tenbury/quran-academy-tenbury-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'tenbury')
    ->defaults('state', 'united-kingdom');

Route::get('/martley/quran-academy-martley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'martley')
    ->defaults('state', 'united-kingdom');

Route::get('/north-piddle/quran-academy-north-piddle-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'north-piddle')
    ->defaults('state', 'united-kingdom');

Route::get('/droitwich/quran-academy-droitwich-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'droitwich')
    ->defaults('state', 'united-kingdom');

Route::get('/cannock/quran-academy-cannock-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'cannock')
    ->defaults('state', 'united-kingdom');

Route::get('/lichfield/quran-academy-lichfield-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'lichfield')
    ->defaults('state', 'united-kingdom');

Route::get('/swinfen-and-packington/quran-academy-swinfen-and-packington-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'swinfen-and-packington')
    ->defaults('state', 'united-kingdom');

Route::get('/brereton/quran-academy-brereton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'brereton')
    ->defaults('state', 'united-kingdom');

Route::get('/willenhall/quran-academy-willenhall-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'willenhall')
    ->defaults('state', 'united-kingdom');

Route::get('/great-wyrley/quran-academy-great-wyrley-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'great-wyrley')
    ->defaults('state', 'united-kingdom');

Route::get('/burntwood/quran-academy-burntwood-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'burntwood')
    ->defaults('state', 'united-kingdom');

Route::get('/brownhills/quran-academy-brownhills-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'brownhills')
    ->defaults('state', 'united-kingdom');

Route::get('/aldridge/quran-academy-aldridge-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'aldridge')
    ->defaults('state', 'united-kingdom');

Route::get('/wednesfield/quran-academy-wednesfield-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wednesfield')
    ->defaults('state', 'united-kingdom');

Route::get('/bridgnorth/quran-academy-bridgnorth-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bridgnorth')
    ->defaults('state', 'united-kingdom');

Route::get('/chetton/quran-academy-chetton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'chetton')
    ->defaults('state', 'united-kingdom');

Route::get('/wombourne/quran-academy-wombourne-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wombourne')
    ->defaults('state', 'united-kingdom');

Route::get('/albrighton/quran-academy-albrighton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'albrighton')
    ->defaults('state', 'united-kingdom');

Route::get('/bilbrook/quran-academy-bilbrook-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bilbrook')
    ->defaults('state', 'united-kingdom');

Route::get('/heslington/quran-academy-heslington-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'heslington')
    ->defaults('state', 'united-kingdom');

Route::get('/scarborough/quran-academy-scarborough-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'scarborough')
    ->defaults('state', 'united-kingdom');

Route::get('/stainton-dale/quran-academy-stainton-dale-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'stainton-dale')
    ->defaults('state', 'united-kingdom');

Route::get('/muston/quran-academy-muston-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'muston')
    ->defaults('state', 'united-kingdom');

Route::get('/bridlington/quran-academy-bridlington-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'bridlington')
    ->defaults('state', 'united-kingdom');

Route::get('/settrington/quran-academy-settrington-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'settrington')
    ->defaults('state', 'united-kingdom');

Route::get('/pickering/quran-academy-pickering-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'pickering')
    ->defaults('state', 'united-kingdom');

Route::get('/wheldrake/quran-academy-wheldrake-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'wheldrake')
    ->defaults('state', 'united-kingdom');

Route::get('/hutton-mulgrave/quran-academy-hutton-mulgrave-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'hutton-mulgrave')
    ->defaults('state', 'united-kingdom');

Route::get('/snainton/quran-academy-snainton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'snainton')
    ->defaults('state', 'united-kingdom');

Route::get('/copmanthorpe/quran-academy-copmanthorpe-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'copmanthorpe')
    ->defaults('state', 'united-kingdom');

Route::get('/driffield/quran-academy-driffield-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'driffield')
    ->defaults('state', 'united-kingdom');

Route::get('/upper-poppleton/quran-academy-upper-poppleton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'upper-poppleton')
    ->defaults('state', 'united-kingdom');

Route::get('/rawcliffe/quran-academy-rawcliffe-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'rawcliffe')
    ->defaults('state', 'united-kingdom');

Route::get('/earswick/quran-academy-earswick-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'earswick')
    ->defaults('state', 'united-kingdom');

Route::get('/catton/quran-academy-catton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'catton')
    ->defaults('state', 'united-kingdom');

Route::get('/barmby-moor/quran-academy-barmby-moor-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'barmby-moor')
    ->defaults('state', 'united-kingdom');

Route::get('/market-weighton/quran-academy-market-weighton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'market-weighton')
    ->defaults('state', 'united-kingdom');

Route::get('/boroughbridge/quran-academy-boroughbridge-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'boroughbridge')
    ->defaults('state', 'united-kingdom');

Route::get('/thornton-le-clay/quran-academy-thornton-le-clay-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'thornton-le-clay')
    ->defaults('state', 'united-kingdom');

Route::get('/easingwold/quran-academy-easingwold-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'easingwold')
    ->defaults('state', 'united-kingdom');

Route::get('/nawton/quran-academy-nawton-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'nawton')
    ->defaults('state', 'united-kingdom');

Route::get('/sowerby/quran-academy-sowerby-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sowerby')
    ->defaults('state', 'united-kingdom');

Route::get('/selby/quran-academy-selby-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'selby')
    ->defaults('state', 'united-kingdom');

Route::get('/sound/quran-academy-sound-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sound')
    ->defaults('state', 'united-kingdom');

Route::get('/toab/quran-academy-toab-united-kingdom', [HomeController::class, 'cityPage'])
    ->defaults('city', 'toab')
    ->defaults('state', 'united-kingdom');

