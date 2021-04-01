<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{
    //
    public function os(Request $request) {
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)) {
            return redirect('https://a-trade.jp/redirect/popo?media=G16531'); //PoPo - Aトレード
            // return redirect('https://a-trade.jp/redirect/moa?media=G16531'); //モア - Aトレード
            // return redirect('https://trading-ad.net/lp/livede55/lady01/?pf=atrade&b=G16531'); //ライブでゴーゴー - Aトレード
            // return redirect('https://a-trade.jp/redirect/berry?media=G16531'); //ベリー - Aトレード
            // return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=16355'); //ワクワクP活iOS - fam
        }
        return redirect('https://trading-ad.net/lp/livede55/lady01/?pf=atrade&b=G16531'); //ライブでゴーゴー - Aトレード
        // return redirect('https://a-trade.jp/redirect/giftchat?media=G16531'); //ギフトチャット - Aトレード
        // return redirect('https://fam-ad.com/ad/p/r?_site=64802&_article=16345'); //ワクワクP活web - fam
    }
}
