<?php
namespace App\Http\Controllers;

use App\Models\Jogos;
use Carbon\Carbon;
use Illuminate\Container\Attributes\Storage as AttributesStorage;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\If_;

use function Symfony\Component\Clock\now;

class JogosController extends Controller
{
    public function index()
    {
        $jogos = Jogos::all();

        $jogos->map(function ($jogo) {
            if ($jogo->image_path) {
                $jogo->imagem = Storage::disk('s3')->temporaryUrl($jogo->image_path, Carbon::now()->add(5, 'minutes'));
            } else {
                $jogo->imagem = asset('assets/images/defaultGame.jpg');
            }
            return $jogo;
        });

        return view('homePage', ['jogos' => $jogos]);

    }
}

