<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function meusView(){
        return view('livros/meus-livros');
       }
    
        public function infoView(){
        return view('livros/info-livro');
       }
       
        public function pesquisaView(){
        return view('livros/pesquisa-livro');
       }
    
}
