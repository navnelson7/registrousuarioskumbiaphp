<?php

    class AlumnosController extends AppController {
        public function index($nombres){
            $this->fecha = date("Y-m-d");
            $this->nombres = $nombres;
        }
    }