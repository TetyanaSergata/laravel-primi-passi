<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class CdsController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {

      $cds = [
        [
          'src' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
          'title' => 'New Jersey',
          'author' => 'Bon Jovi',
          'year' => '1988'
        ],
        [
          'src' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg',
          'title' => 'Live at Wembley 86',
          'author' => 'Queen',
          'year' => '1992'
        ],
        [
        'src' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg',
        'title' => 'Ten\'s Summoner\'s Tales',
        'author' => 'Sting',
        'year' => '1993'
        ],
        [
        'src' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg',
        'title' => 'Steve Gadd band',
        'author' => 'Steve Gadd Band',
        'year' => '2018'
        ],
        [
        'src' => 'https://i.ebayimg.com/images/g/1GwAAOSwFytaKr7l/s-l300.jpg',
        'title' => 'Brave new World',
        'author' => 'Iron Maiden',
        'year' => '2000'
        ],
        [
        'src' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg',
        'title' => 'One more car, one more rider',
        'author' => 'Eric Clapton',
        'year' => '2002'
        ]
      ];

      return view('cds', compact('cds'));
    }
}
