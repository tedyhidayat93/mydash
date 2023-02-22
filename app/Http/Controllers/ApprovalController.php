<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ApprovalController extends Controller
{
    public function pengadaan() 
    {
        return view('pages.approval.pengadaan');
    }
    public function validasi_pengadaan() 
    {
        return view('pages.approval.validasi-pengadaan');
    }
    public function permintaan() 
    {
        return view('pages.approval.permintaan');
    }
    public function validasi_permintaan() 
    {
        return view('pages.approval.validasi-permintaan-per-item');
    }
    public function detail_validasi_permintaan() 
    {
        return view('pages.approval.detail-validasi-permintaan');
    }


}