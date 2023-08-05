<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Empty_;

class KmeansController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('user.kmeans');
    }
    
    public function kmeans()
    {
        $maxIterasi = 10;
        $iterasi = 0;

        // Melakukan pengulangan untuk setiap iterasi
        while ($iterasi < $maxIterasi) {
            // Membandingkan jumlah anggota pada setiap cluster sebelumnya
            $temp1 = DB::table('cluster')->where('id', 1)->value('jumlahAnggota');
            $temp2 = DB::table('cluster')->where('id', 2)->value('jumlahAnggota');

            // Mengambil data pada tabel data
            $data = DB::table('data')->get();

            // Melakukan perulangan untuk setiap data
            foreach ($data as $d) {
                $kolom1 = $d->kolom1;
                $kolom2 = $d->kolom2;
                $kolom3 = $d->kolom3;

                // Menghitung jarak antara data dengan setiap cluster
                $center1id1 = DB::table('cluster')->where('id', 1)->value('center1');
                $center2id1 = DB::table('cluster')->where('id', 1)->value('center2');
                $center3id1 = DB::table('cluster')->where('id', 1)->value('center3');

                $jarak1 = sqrt(pow(($kolom1 - $center1id1), 2) + pow(($kolom2 - $center2id1), 2) + pow(($kolom3 - $center3id1), 2));

                $center1id2 = DB::table('cluster')->where('id', 2)->value('center1');
                $center2id2 = DB::table('cluster')->where('id', 2)->value('center2');
                $center3id2 = DB::table('cluster')->where('id', 2)->value('center3');

                $jarak2 = sqrt(pow(($kolom1 - $center1id2), 2) + pow(($kolom2 - $center2id2), 2) + pow(($kolom3 - $center3id2), 2));

                // Menentukan cluster yang terdekat dengan data
                if ($jarak1 <= $jarak2) {
                    $out = 1;
                } else {
                    $out = 2;
                }

                // Menyimpan hasil clustering pada tabel data
                DB::table('data')->where('id', $d->id)->update(['C1' => $jarak1, 'C2' => $jarak2, 'Class' => $out]);

                // Menambah jumlah anggota pada cluster yang terpilih
                DB::table('cluster')->where('id', $out)->increment('jumlahAnggota');
            }
            // Menghitung rata-rata untuk setiap kolom pada setiap cluster
            $mean1 = DB::table('data')->where('Class', 1)->avg('kolom1');
            $mean2 = DB::table('data')->where('Class', 1)->avg('kolom2');
            $mean3 = DB::table('data')->where('Class', 1)->avg('kolom3');

            DB::table('cluster')->where('id', 1)->update(['center1' => $mean1, 'center2' => $mean2, 'center3' => $mean3]);
            // Menghitung rata-rata untuk setiap kolom pada setiap cluster
            $mean4 = DB::table('data')->where('Class', 2)->avg('kolom1');
            $mean5 = DB::table('data')->where('Class', 2)->avg('kolom2');
            $mean6 = DB::table('data')->where('Class', 2)->avg('kolom3');
            // Mengupdate nilai tengah pada setiap cluster dengan rata-rata terbaru
            DB::table('cluster')->where('id', 2)->update(['center1' => $mean4, 'center2' => $mean5, 'center3' => $mean6]);

            // Memeriksa apakah jumlah anggota pada setiap cluster telah stabil
            if ($temp1 == DB::table('cluster')->where('id', 1)->value('jumlahAnggota') && $temp2 == DB::table('cluster')->where('id', 2)->value('jumlahAnggota')) {
                break;
            }

            // Menaikkan jumlah iterasi
            $iterasi++;
        }
    }

    public function output(Request $request)
    {
        $tekananDarah = intval($request->input('tekdar'));
        $kolestrol = intval($request->input('kol'));
        $detakjantung = intval($request->input('demax'));

        $getTekananDarah1 = DB::table('cluster')->where('id', 1)->value('center1');
        $getTekananDarah2 = DB::table('cluster')->where('id', 2)->value('center1');
        $getKolestrol1 = DB::table('cluster')->where('id', 1)->value('center2');
        $getKolestrol2 = DB::table('cluster')->where('id', 2)->value('center2');
        $getDetakJantung1 = DB::table('cluster')->where('id', 1)->value('center3');
        $getDetakJantung2 = DB::table('cluster')->where('id', 2)->value('center3');

        if (($tekananDarah <= $getTekananDarah1) && ($kolestrol <= $getKolestrol1) && ($detakjantung <= $getDetakJantung1)) {
            $resiko = "tidak beresiko";
            $resiko1 = 0;
        } else if (($tekananDarah >= $getTekananDarah2) && ($kolestrol >= $getKolestrol2) && ($detakjantung >= $getDetakJantung2)) {
            $resiko = "Beresiko";
            $resiko1 = 1;
        } else {
            $jarak1 = sqrt(pow(($tekananDarah - $getTekananDarah1), 2) + pow(($kolestrol - $getKolestrol1), 2) + pow(($detakjantung - $getDetakJantung1), 2));
            $jarak2 = sqrt(pow(($tekananDarah - $getTekananDarah2), 2) + pow(($kolestrol - $getKolestrol2), 2) + pow(($detakjantung - $getDetakJantung2), 2));
            if ($jarak1 < $jarak2) {
                $resiko = "Tidak Beresiko";
                $resiko1 = 0;
            } else if ($jarak1 == $jarak2) {
                $resiko = "Beresiko";
                $resiko1 = 1;
            } else {
                $resiko = "Beresiko";
                $resiko1 = 1;
            }
        }

        //insert inputan user ke dalam table pilihan kmeans
        DB::table('data_pilihan_kmean')->insert(['trestbps' => $tekananDarah, 'chol' => $kolestrol, 'thalch' => $detakjantung, 'output_asli' => $resiko1, 'output_prediction' => 0, 'hasil' => 0]);



        $obatTrestbps = DB::table('obats')->pluck('trestbps');
        $obatChol = DB::table('obats')->pluck('chol');
        $obatThalch = DB::table('obats')->pluck('thalch');

        if ($resiko == "Beresiko" && $tekananDarah >= 136) {
            $hasil = $obatTrestbps;
        } elseif ($resiko == "Beresiko" && $kolestrol >= 306) {
            $hasil = $obatChol;
        } elseif ($resiko == "Beresiko" && $detakjantung >= 140) {
            $hasil = $obatThalch;
        } else {
            $hasil = ['hasil' => "Anda sudah Sehat"];
        }
        return view('user.kmeansOutput', compact('resiko', 'tekananDarah', 'kolestrol', 'detakjantung', 'hasil'));
    }
}
