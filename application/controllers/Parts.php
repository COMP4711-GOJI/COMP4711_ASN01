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
     *
     * Displays images of all parts in a 3 x N/3 table where N is the number
     * of parts. Also displays the model and line of each part, and links
     * the image to a page with more detailed info on that part.
     */
    public function index() {
        // this is the view we want shown
        $this->data['pagebody'] = 'parts';

        //$this->mproperties->registerme();
        //$this->mparts->buybox();
        
        $parts = $this->mparts->all();

        usort($parts, function ($item1, $item2) {
            if ($item1->piece < $item2->piece) {
                return 1;
            }
            else if ($item1->piece > $item2->piece) {
                return -1;
            }
            return 0;
        });

        $records = array();
        foreach ($parts as $record)
        {
			if ($record->available == false) {
				$image = $record->model . $record->piece . '.jpeg';
				$records[] = array('cacode' => $record->cacode, 'model' => $record->model, 'line' => $this->getLine($record->model), 'image' => $image);
			}
        }

        $this->data['parts'] = $records;

        $this->render();
    }

    /**
     * @param $id The id of the part you want to display info for.
     *
     * Displays details of part specified by id paramater. Displays
     * details in a single row table. Details include id, part code,
     * Certificate of authenticity code, build location, and
     * build time.
     */
    public function part($cacode) {
        $this->data['pagebody'] = 'part';

        $part = $this->mparts->get($cacode);

        $cacode = $part->cacode;
        $model = $part->model;
        $line = $this->getLine($model);
        $piece = $part->piece;
        $plant = $part->plant;
        $stamp = $part->stamp;

        $this->data['cacode'] = $cacode;
        $this->data['model'] = $model;
        $this->data['line'] = $line;
        $this->data['piece'] = $piece;
        $this->data['plant'] = $plant;
        $this->data['stamp'] = $stamp;

        $this->render();
    }

    public function getLine($model) {
        if($model >= 'a' && $model <= 'l'){
            return 'Household';
        }
        if($model >= 'm' && $model <= 'v'){
            return 'Butler';
        }
        if($model >= 'w' && $model <= 'z'){
            return 'Companion';
        }
    }
}