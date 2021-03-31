<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{
    //
    public function os(Request $request) {
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)) {
            return redirect('https://a-trade.jp/redirect/anahiro1?media=G16531'); //アナザーヒロイン - Aトレード
            // return redirect('https://a-trade.jp/redirect/berry?media=G16531'); //ベリー - Aトレード
            // return redirect('https://a-trade.jp/redirect/moa?media=G16531'); //モア - Aトレード
        }
        return redirect('https://a-trade.jp/redirect/anahiro1?media=G16531'); //アナザーヒロイン - Aトレード
        // return redirect('https://trading-ad.net/lp/livede55/lady01/?pf=atrade&b=G16531'); //ライブでゴーゴー - Aトレード
        // return redirect('https://a-trade.jp/redirect/giftchat?media=G16531'); //ギフトチャット - Aトレード
    }
}
