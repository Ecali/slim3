<?php
namespace App\Util;

class Variables
{
    /**
     * @var array
     */
    protected $injections;

    public function __construct()
    {
        $this->injections = [
            'PageTitle' => 'Ex Page Title', //Automatically takes the root of the page
            //They do not change
            'login'     => 'login',
            'singin'    => 'singin',
            'quit'      => 'https://www.google.it/',
            'about'     => 'about',
            //--------------------
            'Userlog'   => 'User',
            'ErrorMsg'  => false,
        ];
    }

    /**
     * @return array
     */
    public function getInjections()
    {
        return $this->injections;
    }

    /**
     * @param string $key
     * @param string $value
     *
     * @throws \Exception
     */
    public function addInjection($key, $value)
    {
        if ($value === '') {
            throw new \Exception($key.' can\'t be empty');
        }

        if (!is_array($value)) {
            $value = trim($value);
        }

        $this->injections[$key] = $value;
    }
}