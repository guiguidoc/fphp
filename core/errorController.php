<?php

class errorController extends baseController{

	public function index(){}

	public function error($message = 'No information about the error'){
		echo '<pre>erreur -> '.print_r($message,1).'</pre>';	

	}
}