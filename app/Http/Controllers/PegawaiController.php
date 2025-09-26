<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Data pegawai
        $name              = "Nailah Houra";
        $tanggal_lahir     = Carbon::create(2006, 6, 1); // contoh tanggal lahir
        $tgl_harus_wisuda  = Carbon::create(2027, 8, 1);  // target wisuda
        $current_semester  = 3;
        $future_goal       = "Menjadi Pengusaha";

        // Hitung umur (tahun)
        $my_age = $tanggal_lahir->diffInYears(Carbon::now());

        // Hitung jarak hari ke wisuda
        $time_to_study_left = Carbon::now()->diffInDays($tgl_harus_wisuda, false);

        // Hobi minimal 5 item
        $hobbies = ['Membaca', 'Menulis', 'Coding', 'Traveling', 'Gaming'];

        // Info tambahan sesuai semester
        $semester_info = $current_semester < 3
            ? "Masih Awal, Kejar TAK"
            : "Jangan main-main, kurang-kurangi main game!";

        // Masukkan ke array data
        $data['name']               = $name;
        $data['my_age']             = $my_age;
        $data['hobbies']            = $hobbies;
        $data['tgl_harus_wisuda']   = $tgl_harus_wisuda->toDateString();
        $data['time_to_study_left'] = $time_to_study_left;
        $data['current_semester']   = $current_semester;
        $data['semester_info']      = $semester_info;
        $data['future_goal']        = $future_goal;

        // Kirim ke view (misalnya 'pegawai')
        return view('pegawai', $data);
    }

    // function lain (create, store, dst.) bisa ditambahkan sesuai kebutuhan
}
