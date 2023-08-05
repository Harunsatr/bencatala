<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BayesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('user.bayes');
    }
    
    public function bayes()
    {
        $data = DB::table('dataset')->get();

        // Melakukan perulangan untuk setiap data dalam tabel dataset
        foreach ($data as $d) {
            $trestbps = $d->trestbps;
            $chol = $d->chol;
            $thalch = $d->thalch;
            $num = $d->num;

            // melakukan perkondisian
            if ($trestbps >= 140) {
                $new1 = 1;
            } else {
                $new1 = 0;
            }

            if ($chol >= 134) {
                $new2 = 1;
            } else {
                $new2 = 0;
            }

            if ($thalch >= 119) {
                $new3 = 1;
            } else {
                $new3 = 0;
            }

            if ($num >= 1) {
                $new4 = 1;
            } else {
                $new4 = 0;
            }


            // Menyimpan hasil perubahan pada tabel naivebayes
            DB::table('naive_bayes')->where('id', $d->id)->update(['trestbps' => $new1, 'chol' => $new2, 'thalch' => $new3, 'num' => $new4]);
        }
        dd($trestbps);
        //menghitung count dari output
        $countOutput1 = DB::table('naive_bayes')->where('num', 1)->count('num') / DB::table('naive_bayes')->count('num');
        $countOutput0 = DB::table('naive_bayes')->where('num', 0)->count('num') / DB::table('naive_bayes')->count('num');

        // menyimpan count output dalam tabel naives
        DB::table('naives')->where('id', 1)->update(['output_1' => $countOutput1, 'output_0' => $countOutput0]);

        //menghitung count setiap tekanan daah, kolestrol, dan detak jantung terhadap output yang sesuai
        $countTekdar1 = DB::table('naive_bayes')->where('trestbps', 1)->where('num', 1)->count('num') / DB::table('naive_bayes')->where('num', 1)->count('num');
        $countTekdar0 = DB::table('naive_bayes')->where('trestbps', 1)->where('num', 0)->count('num') / DB::table('naive_bayes')->where('num', 0)->count('num');
        $countTekdar1_ = DB::table('naive_bayes')->where('trestbps', 0)->where('num', 1)->count('num') / DB::table('naive_bayes')->where('num', 1)->count('num');
        $countTekdar0_ = DB::table('naive_bayes')->where('trestbps', 0)->where('num', 0)->count('num') / DB::table('naive_bayes')->where('num', 0)->count('num');
        $countKol1 = DB::table('naive_bayes')->where('chol', 1)->where('num', 1)->count('num') / DB::table('naive_bayes')->where('num', 1)->count('num');
        $countKol0 = DB::table('naive_bayes')->where('chol', 1)->where('num', 0)->count('num') / DB::table('naive_bayes')->where('num', 0)->count('num');
        $countKol1_ = DB::table('naive_bayes')->where('chol', 0)->where('num', 1)->count('num') / DB::table('naive_bayes')->where('num', 1)->count('num');
        $countKol0_ = DB::table('naive_bayes')->where('chol', 0)->where('num', 0)->count('num') / DB::table('naive_bayes')->where('num', 0)->count('num');
        $countDemax1 = DB::table('naive_bayes')->where('thalch', 1)->where('num', 1)->count('num') / DB::table('naive_bayes')->where('num', 1)->count('num');
        $countDemax0 = DB::table('naive_bayes')->where('thalch', 1)->where('num', 0)->count('num') / DB::table('naive_bayes')->where('num', 0)->count('num');
        $countDemax1_ = DB::table('naive_bayes')->where('thalch', 0)->where('num', 1)->count('num') / DB::table('naive_bayes')->where('num', 1)->count('num');
        $countDemax0_ = DB::table('naive_bayes')->where('thalch', 0)->where('num', 0)->count('num') / DB::table('naive_bayes')->where('num', 0)->count('num');

        //menyimpan hasil tadi dalam tabel naives
        DB::table('naives')->where('id', 2)->update(['output_1' => $countTekdar1, 'output_0' => $countTekdar0]);
        DB::table('naives')->where('id', 3)->update(['output_1' => $countTekdar1_, 'output_0' => $countTekdar0_]);
        DB::table('naives')->where('id', 4)->update(['output_1' => $countKol1, 'output_0' => $countKol0]);
        DB::table('naives')->where('id', 5)->update(['output_1' => $countKol1_, 'output_0' => $countKol0_]);
        DB::table('naives')->where('id', 6)->update(['output_1' => $countDemax1, 'output_0' => $countDemax0]);
        DB::table('naives')->where('id', 7)->update(['output_1' => $countDemax1_, 'output_0' => $countDemax0_]);
    }

    public function output(Request $request)
    {
        //menerima request user
        $tekananDarah = intval($request->input('tekdar'));
        $kolestrol = intval($request->input('kol'));
        $detakjantung = intval($request->input('demak'));
        $output = $request->input('output');

        // memberikan kondisi requaest user sesuai kondisi
        if ($tekananDarah >= 140) {
            $new1 = 1;
        } else {
            $new1 = 0;
        }

        if ($kolestrol >= 134) {
            $new2 = 1;
        } else {
            $new2 = 0;
        }

        if ($detakjantung >= 119) {
            $new3 = 1;
        } else {
            $new3 = 0;
        }

        if ($output == "ya") {
            $new5 = 1;
        } else {
            $new5 = 0;
        }
        if ($output == "ya") {
            $new4 = "output_1";
        } else {
            $new4 = "output_0";
        }

        // output
        $p1 = DB::table('naives')->where('id', 1)->value('output_1');
        $p2 = DB::table('naives')->where('id', 1)->value('output_0');
        // tekanan darah
        $p3 = DB::table('naives')->where('id', 2)->value('output_1');
        $p4 = DB::table('naives')->where('id', 2)->value('output_0');
        $p5 = DB::table('naives')->where('id', 3)->value('output_1');
        $p6 = DB::table('naives')->where('id', 3)->value('output_0');
        // kolesterol
        $p7 = DB::table('naives')->where('id', 4)->value('output_1');
        $p8 = DB::table('naives')->where('id', 4)->value('output_0');
        $p9 = DB::table('naives')->where('id', 5)->value('output_1');
        $p10 = DB::table('naives')->where('id', 5)->value('output_0');
        // detak jantung maksimum
        $p11 = DB::table('naives')->where('id', 6)->value('output_1');
        $p12 = DB::table('naives')->where('id', 6)->value('output_0');
        $p13 = DB::table('naives')->where('id', 7)->value('output_1');
        $p14 = DB::table('naives')->where('id', 7)->value('output_0');

        //menghitung hasil akhir dengan 16 kemungkinan dan disimpan dalam database
        DB::table('bayes_output')->where('trestbps', 1)->where('chol', 1)->where('thalch', 1)
            ->update(['output_1' => ($p1 * $p3 * $p7 * $p11) / (($p1 * $p3 * $p7 * $p11) + ($p2 * $p4 * $p8 * $p12))]); //1 1 1 1
        DB::table('bayes_output')->where('trestbps', 1)->where('chol', 0)->where('thalch', 0)
            ->update(['output_1' => ($p1 * $p3 * $p9 * $p13) / (($p1 * $p3 * $p9 * $p13) + ($p2 * $p4 * $p10 * $p14))]); //1 0 0 1
        DB::table('bayes_output')->where('trestbps', 1)->where('chol', 0)->where('thalch', 1)
            ->update(['output_1' => ($p1 * $p3 * $p9 * $p11) / (($p1 * $p3 * $p9 * $p11) + ($p2 * $p4 * $p10 * $p12))]); //1 0 1 1
        DB::table('bayes_output')->where('trestbps', 1)->where('chol', 1)->where('thalch', 0)
            ->update(['output_1' => ($p1 * $p3 * $p7 * $p13) / (($p1 * $p3 * $p7 * $p13) + ($p2 * $p4 * $p8 * $p14))]); //1 1 0 1
        DB::table('bayes_output')->where('trestbps', 0)->where('chol', 0)->where('thalch', 1)
            ->update(['output_1' => ($p1 * $p5 * $p9 * $p11) / (($p1 * $p5 * $p9 * $p11) + ($p2 * $p6 * $p10 * $p12))]); //0 0 1 1
        DB::table('bayes_output')->where('trestbps', 0)->where('chol', 1)->where('thalch', 0)
            ->update(['output_1' => ($p1 * $p5 * $p7 * $p13) / (($p1 * $p5 * $p7 * $p13) + ($p2 * $p6 * $p8 * $p14))]); //0 1 0 1
        DB::table('bayes_output')->where('trestbps', 0)->where('chol', 1)->where('thalch', 1)
            ->update(['output_1' => ($p1 * $p5 * $p7 * $p11) / (($p1 * $p5 * $p7 * $p11) + ($p2 * $p6 * $p8 * $p12))]); //0 1 1 1
        DB::table('bayes_output')->where('trestbps', 0)->where('chol', 0)->where('thalch', 0)
            ->update(['output_1' => ($p1 * $p5 * $p9 * $p13) / (($p1 * $p5 * $p9 * $p13) + ($p2 * $p6 * $p10 * $p14))]); //0 0 0 1
        DB::table('bayes_output')->where('trestbps', 1)->where('chol', 1)->where('thalch', 1)
            ->update(['output_0' => ($p2 * $p4 * $p8 * $p12) / (($p1 * $p3 * $p7 * $p11) + ($p2 * $p4 * $p8 * $p12))]); //1 1 1 0
        DB::table('bayes_output')->where('trestbps', 1)->where('chol', 0)->where('thalch', 0)
            ->update(['output_0' => ($p2 * $p4 * $p10 * $p14) / (($p1 * $p3 * $p9 * $p13) + ($p2 * $p4 * $p10 * $p14))]); //1 0 0 0
        DB::table('bayes_output')->where('trestbps', 1)->where('chol', 0)->where('thalch', 1)
            ->update(['output_0' => ($p2 * $p4 * $p10 * $p12) / (($p1 * $p3 * $p9 * $p11) + ($p2 * $p4 * $p10 * $p12))]); //1 0 1 0
        DB::table('bayes_output')->where('trestbps', 1)->where('chol', 1)->where('thalch', 0)
            ->update(['output_0' => ($p2 * $p4 * $p8 * $p14) / (($p1 * $p3 * $p7 * $p13) + ($p2 * $p4 * $p8 * $p14))]); //1 1 0 0
        DB::table('bayes_output')->where('trestbps', 0)->where('chol', 0)->where('thalch', 1)
            ->update(['output_0' => ($p2 * $p6 * $p10 * $p12) / (($p1 * $p5 * $p9 * $p11) + ($p2 * $p6 * $p10 * $p12))]); //0 0 1 0
        DB::table('bayes_output')->where('trestbps', 0)->where('chol', 1)->where('thalch', 0)
            ->update(['output_0' => ($p2 * $p6 * $p8 * $p14) / (($p1 * $p5 * $p7 * $p13) + ($p2 * $p6 * $p8 * $p14))]); //0 1 0 0
        DB::table('bayes_output')->where('trestbps', 0)->where('chol', 1)->where('thalch', 1)
            ->update(['output_0' => ($p2 * $p6 * $p8 * $p12) / (($p1 * $p5 * $p7 * $p11) + ($p2 * $p6 * $p8 * $p12))]); //0 1 1 0
        DB::table('bayes_output')->where('trestbps', 0)->where('chol', 0)->where('thalch', 0)
            ->update(['output_0' => ($p2 * $p6 * $p10 * $p14) / (($p1 * $p5 * $p9 * $p13) + ($p2 * $p6 * $p10 * $p14))]); //0 0 0 0

        //Debugging kemungkinan total yaitu 8
        // $debug = DB::table('bayes_output')->sum('output_1') + DB::table('bayes_output')->sum('output_0');
        // dump($debug);

        $data = DB::table('bayes_output')->get();
        foreach ($data as $d) {
            $id = $d->id;
            $output1 = $d->output_1;
            $output0 = $d->output_0;

            $treshold = 0.5;
            if ($output1 > $treshold) {
                $prediction = 1;
            } else {
                $prediction = 0;
            }
            DB::table('bayes_output')->where('id', $d->id)->update(['prediction' => $prediction]);
        }

        // membandingkan request user dengan hasil akhir yang ada di database
        $hasil = DB::table('bayes_output')->where('trestbps', $new1)->where('chol', $new2)->where('thalch', $new3)->value($new4);
        $outputAsli = $hasil * 100 . '%';
        // menambahkan inputan user ke dalam table pilihan bayes
        DB::table('data_pilihan_bayes')->insert(['trestbps' => $new1, 'chol' => $new2, 'thalch' => $new3, 'output_asli' => $new5, 'output_prediction' => 0, 'hasil' => 0]);

        $obatTrestbps = DB::table('obats')->pluck('trestbps');
        $obatChol = DB::table('obats')->pluck('chol');
        $obatThalch = DB::table('obats')->pluck('thalch');
        if ($new1 == 1 && $new2 == 0 && $new3 = 0) {
            $hasil1 = $obatTrestbps;
        } elseif ($new1 == 1 && $new2 == 1 && $new3 = 0) {
            $hasil1 = $obatTrestbps . $obatChol;
        } elseif ($new1 == 0 && $new2 == 1 && $new3 = 0) {
            $hasil1 = $obatThalch;
        } else {
            $hasil1 = ['hasil' => 'Anda Sudah Sehat'];
        }

        return view('user.bayesOutput', compact('outputAsli', 'tekananDarah', 'kolestrol', 'detakjantung', 'output', 'hasil1'));
    }
}
