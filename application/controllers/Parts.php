<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Parts extends Application
{

	function __construct()
	{
		parent::__construct();
	}

    /**
     * Parts page for our app
     */
    public function index()
    {
        // this is the view we want shown
        $this->data['pagebody'] = 'parts';

        $inv_parts = $this->inventory->all_parts();
        /*
        usort($parts, function ($item1, $item2) {
            return $item2['id'] < $item1['id'];
        });
        */

        $print = '<table>';
        $print .= '<tr>';
        $print .= '<th>Model</th>';
        $print .= '<th>Line</th>';
        $print .= '<th>Image</th>';
        $print .= '</tr>';
        foreach ($inv_parts as $item) {
            $print .= '<tr>';
            $print .= '<td>' . 'ADD MODEL' .'</td>';
            $print .= '<td>' . 'ADD LINE' . '</td>';
            $print .= '</tr>';
            $print .= '<td>';
            $print .= '<a href="./part/';
            $print .= $item['id'];
            $print .= '">';
            $print .= '<img src="assets/images/parts/';
            $print .= $item['image'];
            $print .= '"></img>';
            $print .= '</br>details...';
            $print .= '</a>';
            $print .= '</td>';
            $print .= '</tr>';
        }

        $print .= "</table>";

        $this->data['parts_table'] = $print;

        $this->render();
    }
}