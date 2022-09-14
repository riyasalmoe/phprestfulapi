<?php

/*
 * A domain Class to demonstrate RESTful web services
 */
class Mobile
{

    private $mobiles = array(
        1 => 'Apple iPhone 6S',
        2 => 'Samsung Galaxy S6',
        3 => 'Apple iPhone 6S Plus',
        4 => 'LG G4',
        5 => 'Samsung Galaxy S6 edge',
        6 => 'OnePlus 2'
    );

    /*
     * you should hookup the DAO here
     */
    public function getAllMobile()
    {
        return $this->mobiles;
    }

    public function getMobile($id)
    {
        $mobile = array(
            $id => ($this->mobiles[$id]) ? $this->mobiles[$id] : $this->mobiles[1]
        );
        return $mobile;
    }

    public function getByName(string $mobileName)
    {
        $mobile = array();
        $i = 0;
        foreach ($this->mobiles as $key => $value) {

            if ($value == $mobileName) {
                $mobile = $mobile[$i];
            }
            $i++;
        }
        return $mobile;
    }
}
?>