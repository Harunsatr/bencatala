<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConfusionKmeansController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function confusionKmeans()
    {
        // mengambil data 
        $data = DB::table('dataset')->get();
        $kmeans = DB::table('data')->get();
        $data_pilihan = DB::table('data_pilihan_kmean')->get();

        // insert data pilihan, mengubah output_prediction 1 menjadi 0, 2 menjadi 1
        foreach ($kmeans as $k) {
            $id = $k->id;
            $trestbps = $k->kolom1;
            $chol = $k->kolom2;
            $thalch = $k->kolom3;
            $class = $k->Class;

            if ($class == 1) {
                $output_kmeans = 0;
            } else {
                $output_kmeans = 1;
            }

            // DB::table('data_pilihan_kmean')->insert(['id' => $id, 'trestbps' => $trestbps, 'chol' => $chol, 'thalch' => $thalch, 'output_prediction' => $output_kmeans]);
        }

        // insert data pilihan output_asli
        foreach ($data as $d) {
            $trestbps = $d->trestbps;
            $chol = $d->chol;
            $thalch = $d->thalch;
            $num = $d->num;

            if ($num >= 1) {
                $output_asli = 1;
            } else {
                $output_asli = 0;
            }

            DB::table('data_pilihan_kmean')->where('trestbps', $trestbps)->where('chol', $chol)->where('thalch', $thalch)->update(['output_asli' => $output_asli]);
        }

        // menghitung hasil confusion matriks
        foreach ($data_pilihan as $dp) {
            $trestbps = $dp->trestbps;
            $chol = $dp->chol;
            $thalch = $dp->thalch;
            $aktual = $dp->output_asli;
            $prediksi = $dp->output_prediction;

            if ($aktual == $prediksi) {
                if ($aktual == 1) {
                    $hasil = "TP";
                } else {
                    $hasil = "TN";
                }
            } else {
                if ($aktual == 1) {
                    $hasil = "FN";
                } else {
                    $hasil = "FP";
                }
            }

            DB::table('data_pilihan_kmean')->where('trestbps', $trestbps)->where('chol', $chol)->where('thalch', $thalch)->update(['hasil' => $hasil]);
        }

        // count TP, TN, FP, FN
        $TP = DB::table('data_pilihan_kmean')->where('hasil', 'TP')->count();
        $TN = DB::table('data_pilihan_kmean')->where('hasil', 'TN')->count();
        $FP = DB::table('data_pilihan_kmean')->where('hasil', 'FP')->count();
        $FN = DB::table('data_pilihan_kmean')->where('hasil', 'FN')->count();

        // DB::table('confusion_kmean')->insert(['id' => 1, 'teks' => 'P']);
        // DB::table('confusion_kmean')->insert(['id' => 2, 'teks' => 'N']);

        // update data confusion matriks
        DB::table('confusion_kmean')->where('teks', 'P')->update(['p_beresiko' => $TP]);
        DB::table('confusion_kmean')->where('teks', 'P')->update(['p_tidak_beresiko' => $FN]);
        DB::table('confusion_kmean')->where('teks', 'N')->update(['p_beresiko' => $FP]);
        DB::table('confusion_kmean')->where('teks', 'N')->update(['p_tidak_beresiko' => $TN]);

        // menghitung TPR(Recall), FPR, TNR, FNR, akurasi, presisi
        $TPR = $TP / ($TP + $FN);                               // True Positive Rate = Recall
        $FPR = $FP / ($FP + $TN);                               // False Positive Rate
        $TNR = $TN / ($TN + $FP);                               // True Negative Rate
        $FNR = $FN / ($FN + $TP);                               // False Negative Rate
        $akurasi = ($TP + $TN) / ($TP + $TN + $FP + $FN);       // ACC
        $presisi = $TP / ($TP + $FP);                           // PPV

        // update data hasil confusion matriks
        DB::table('hasil_confusion_kmean')->where('id', 1)->update([
            'TPR' => $TPR,
            'FPR' => $FPR,
            'TNR' => $TNR,
            'FNR' => $FNR,
            'akurasi' => $akurasi,
            'presisi' => $presisi
        ]);

        // mengambil data hasil confusion matriks
        $outputRecall = DB::table('hasil_confusion_kmean')->where('id', 1)->value('TPR') * 100 . "%";
        $outputAkurasi = DB::table('hasil_confusion_kmean')->where('id', 1)->value('akurasi') * 100 . "%";
        $outputPresisi = DB::table('hasil_confusion_kmean')->where('id', 1)->value('presisi') * 100 . "%";

        // tampilkan data
        return view('user.confusionKmeans', compact('TP', 'FN', 'FP', 'TN', 'outputRecall', 'outputAkurasi', 'outputPresisi'));
    }
}
