<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MortM extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'edad',
        'lx',
        'dx',
        'qx',
        'px',
        'elx',
        'ex',
        'mx',
        'dx_2',
        'cx',
        'nx',
        'mx_2',
        'vax',
        'vax12',
        'vax2',
        'vax12_2',
        'vax2_2',
        'rj_14',
        'rj_13',
        'rj',
        'ax',
        'w_m',
        'x_m',
        'y_m',
        'z_m',
        'aa_m',
        'ab_m',
        'ac_m',
        'ad_m',
        'ae_m',
        'af_m',
        'ag_m',
        'ah_m',
    ];
}
