<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

class ApiController extends Controller
{
    public function __construct()
    {
        $this->file = File::get(storage_path('formatData.json'));
        $this->file_decoded = json_decode($this->file);
    }

    public function comuni()
    {
        $comuni = [];
        foreach($this->file_decoded as $row) {
            array_push($comuni, $row->denominazione_in_italiano);
        }
        sort($comuni);
        return response()->json($comuni);
    }

    public function comuniCodici()
    {
        $codici = [];
        foreach($this->file_decoded as $row) {
            $codici[$row->denominazione_in_italiano] = $row->codice_comune_formato_numerico;
        }
        ksort($codici);
        return response()->json($codici);
    }

    public function comuneCompleto($codicecomune)
    {
        foreach($this->file_decoded as $row) {
            if($row->codice_comune_formato_numerico == $codicecomune) {
                return response()->json($row);
            }
        }
    }

    public function comuniProvincia($provincia)
    {
        $comuni = [];
        foreach($this->file_decoded as $row) {
            if($row->sigla_automobilistica == $provincia) {
                array_push($comuni, $row->denominazione_in_italiano);
            }
        }
        sort($comuni);
        return response()->json($comuni);
    }

    public function comuniRegione($regione)
    {
        $comuni = [];
        foreach($this->file_decoded as $row) {
            if($row->denominazione_regione == $regione) {
                array_push($comuni, $row->denominazione_in_italiano);
            }
        }
        sort($comuni);
        return response()->json($comuni);
    }

    public function province()
    {
        $province = [];
        foreach($this->file_decoded as $row) {
            if($row->flag_comune_capoluogo_di_provinciacitta_metropolitanalibero_consorzio === 1) {
                array_push($province, $row->denominazione_in_italiano);
            }
        }
        sort($province);
        return response()->json($province);
    }

    public function provinceRegione($regione)
    {
        $province = [];
        foreach($this->file_decoded as $row) {
            if($row->flag_comune_capoluogo_di_provinciacitta_metropolitanalibero_consorzio === 1 && $row->denominazione_regione == $regione) {
                array_push($province, $row->denominazione_in_italiano);
            }
        }
        sort($province);
        return response()->json($province);
    }

    public function regioni()
    {
        $regioni = [];
        foreach($this->file_decoded as $row) {
            if(!in_array($row->denominazione_regione, $regioni)) {
                array_push($regioni, $row->denominazione_regione);
            }
        }
        sort($regioni);
        return response()->json($regioni);
    }

    public function sigleAuto()
    {
        $sigle = [];
        foreach($this->file_decoded as $row) {
            if(!in_array($row->sigla_automobilistica, $sigle)) {
                array_push($sigle, $row->sigla_automobilistica);
            }
        }
        sort($sigle);
        return response()->json($sigle);
    }
}
