<?php
class MRHistory extends MY_Model {

    public function __construct()
    {
        parent::__construct('r_history', 'h_id');
    }

}
