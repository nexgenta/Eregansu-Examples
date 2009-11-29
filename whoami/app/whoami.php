<?php

class WhoAmI extends Routable
{
	public function process($request)
	{
		@header('Content-type: text/plain');
		if(!$request->session->user)
		{
			echo "You are nobody.\n";
			return;
		}
		echo "You are:\n";
		print_r($request->session->user);
	}
}
