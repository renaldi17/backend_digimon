<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class InfoTampilan extends Model
{
    use HasFactory;
    public static function GetInfo($jenis)
    {
        return DB::table($jenis)->get();
    }
    public static function GetInfoById($jenis, $id)
    {
        return DB::table($jenis)->where('id', $id)->get();
    }
    public static function GetPotensi($jenis)
    {
        return DB::table('potensi_desas')->where('jenis', $jenis)->get();
    }
    public static function GetPotensiById($id)
    {
        return DB::table('potensi_desas')->where('id', $id)->get();
    }
}
