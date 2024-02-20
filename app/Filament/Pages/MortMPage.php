<?php

namespace App\Filament\Pages;

use App\Models\MortM;
use Filament\Pages\Page;

class MortMPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.mort-m-page';

    protected static ?string $navigationLabel = 'Masculino';

    protected static ?string $slug = 'masculino';

    protected static ?string $modelLabel = 'Masculino';

    public $diferencia = 5;

    public $numero = 0.048;

    public $inflacion = 0.02991666667;

    public $mort_m_s;

    public $registro_dy;

    public $registroely;

    public $registromy;

    public $registrony;

    public $registromy_2;

    public $registro_vx;

    public $registro_vaxn;

    public $registro_vaxn2;

    public $registro_dxy;

    public $registronxy;

    public $registro_10;

    public $registro_11;

    public $total;

    public $total_2;

    public $total_3;

    public $total_4;

    public $total_5;

    public $total_6;

    public $total_7;

    public $total_8;

    public $total_11;

    public $total_15;

    public $total_16;

    public $total_17;

    public $total_18;


    public function mount(){
        $this->mort_m_s = MortM::get();
    }

    public function calcular($id, $column){
        if($column == 'dx'){
            $this->registro_dy = MortM::find($id+1);
            if($this->registro_dy){
                return $this->registro_dy->lx;
            }else{
                return 0;
            }
        }

        if($column == 'ny'){
            $this->registroely = MortM::where('id', '>', $id - 1)->sum('lx');
            if($this->registroely){
                return $this->registroely;
            }else{
                return "no found";
            }
        }

        if($column == 'ey'){
            $this->registro_dy = MortM::find($id+1);
            if($this->registro_dy){
                return $this->registro_dy->elx;
            }else{
                return 0;
            }
        }

        if($column == 'my'){
            $this->registromy = MortM::find($id-1);
            if($this->registromy){
                return $this->registromy->lx;
            }
        }

        if($column == 'my-2'){
            $this->registro_dy = MortM::find($id+1);
            if($this->registro_dy){
                return $this->registro_dy->lx;
            }else{
                return 0;
            }
        }

        if($column == 'dx_2'){
            $this->registrony = MortM::where('id', '>', $id - 1)->sum('dx_2');
            if($this->registrony){
                return $this->registrony;
            }else{
                return 0;
            }
        }


        if($column == 'r_2'){
            $this->registromy_2 = MortM::where('id', '>', $id - 1)->sum('cx');
            if($this->registromy_2){
                return $this->registromy_2;
            }else{
                return 0;
            }
        }

        if($column == 'nx'){
            $this->registro_dy = MortM::find($id+1);
            if($this->registro_dy){
                return $this->registro_dy->nx;
            }else{
                return 0;
            }
        }

        if($column == 'vaxn2'){
            $this->registro_vaxn2 = MortM::find(15);
            if($this->registro_vaxn2){
                return $this->registro_vaxn2->x_m;
            }else{
                return 0;
            }
        }

        if($column == 'vaxn2_2'){
            $this->registro_vaxn2 = MortM::where('id', $id - $this->diferencia)->get()->first();
            if($this->registro_vaxn2){
                return $this->registro_vaxn2->x_m;
            }else{
                return 0;
            }
        }

        if($column == 'z_m'){
            $this->registronxy = MortM::where('id', '>', $id - 1)->sum('z_m');
            if($this->registronxy){
                return $this->registronxy;
            }else{
                return 0;
            }
        }

        if($column == 'aa_m'){
            $this->registro_dy = MortM::find($id+1);
            if($this->registro_dy){
                return $this->registro_dy->aa_m;
            }else{
                return 0;
            }
        }







        $this->registro_vaxn = MortM::where('id', '==', $id - $this->diferencia)->get()->first();





        $this->registro_10 = MortM::find(109);

    }

}
