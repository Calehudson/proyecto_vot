<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Cinicio extends BaseController
{
	/* Darshboard Controllers Start */
	
	public function index()
    {
		$action 	= __FUNCTION__;
		$page_title = 'Sistema de votación OT';
		return view('index', compact('action','page_title'));
    }

	public function participantes()
    {
		$action = __FUNCTION__;
		$page_title = 'Participantes';
		return view('participantes', compact('action','page_title'));
    } 

	public function votaciones()
    {
		$action 	= __FUNCTION__;
		$page_title = 'Elige a tu artista preferido';
		return view('votaciones', compact('action','page_title'));
    }

	public function logeo()
    {
		$action 	= __FUNCTION__;
		$page_title = 'Logeo';
		return view('login', compact('action','page_title'));
    }

	public function listavotaciones()
    {
		$action = __FUNCTION__;
		$page_title = 'Votaciones registradas';
		return view('listavotos', compact('action','page_title'));
    }
	
	/* Components Controllers END */
}