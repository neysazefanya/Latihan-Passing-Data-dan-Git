<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class PegawaiController extends Controller
{
    public function index(){
        $data['employee_name']    = 'Neysa Zefanya';
        $data['age']              = 19;
        $data['position']         = 'Manager';
        $data['skills']           = [
            'Leadership',
            'Komunikasi Efektif',
            'Manajemen Proyek',
            'Analisis Bisnis',
            'Coaching & Mentoring'
        ];

        $data['join_date'] = '2023-01-01 09:00:00';

        $join = Carbon::parse($data['join_date']);
        $now  = Carbon::now();
        $diff = $join->diff($now);

        $data['working_duration'] = $diff->y . ' tahun ' . $diff->m . ' bulan ' . $diff->d . ' hari';

        $data['salary']           = 'Rp. 100.000.000';
        $data['career_goal']      = 'Menjadi General Manager yang inspiratif dan membawa tim mencapai target perusahaan.';

        $data['photo'] = 'https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?w=400&q=80';

        return view('pegawai', $data);
    }
}
