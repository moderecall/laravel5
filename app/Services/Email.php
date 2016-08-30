<?php
/**
 * Created by PhpStorm.
 * User: laura.brizuela
 * Date: 16/08/2016
 * Time: 11:29
 */

namespace App\Services;


use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use Symfony\Component\Yaml\Dumper;
use Symfony\Component\Yaml\Inline;
use Symfony\Component\Yaml\Yaml;

class Email
{
    public function readFichero()
    {
        $fichero = parse_ini_file(base_path().'\.env', true);

        return $fichero;
    }

    /**
    * usado en el metodo ConvertFile
    * @var int
    */
    protected $indentation = 4;

    /**
     * metodo usado para procesar el array de los datos del fichero .env modificado
     * o sea, paso en array datos['local_variable' => 'p']
     * y este devuelve un string local_variable = 'p'
     * @param $input
     * @param int $inline
     * @param int $indent
     * @param bool|false $exceptionOnInvalidType
     * @param bool|false $objectSupport
     * @return string
     */
    public function ConvertFile($input, $inline = 0, $indent = 0, $exceptionOnInvalidType = false, $objectSupport = false)
    {
        $output = '';
        $prefix = $indent ? str_repeat(' ', $indent) : '';

        if ($inline <= 0 || !is_array($input) || empty($input)) {
            $output .= $prefix.Inline::dump($input, $exceptionOnInvalidType, $objectSupport);
        } else {
            $isAHash = array_keys($input) !== range(0, count($input) - 1);

            foreach ($input as $key => $value) {
                $willBeInlined = $inline - 1 <= 0 || !is_array($value) || empty($value);

                $output .= sprintf('%s%s%s%s',
                        $prefix,
                        $isAHash ? Inline::dump($key, $exceptionOnInvalidType, $objectSupport).'=' : '-',
                        $willBeInlined ? ' ' : "\n",
                        $this->ConvertFile($value, $inline - 1, $willBeInlined ? 0 : $indent + $this->indentation, $exceptionOnInvalidType, $objectSupport)
                    ).($willBeInlined ? "\n" : '');
            }
        }

        return $output;
    }
}


//$fichero = parse_ini_file('C:\xampp\htdocs\proyChile\.env', true);
//
//        $fichero['MAIL_PASSWORD']='ll';
//
//        $dumper = new Dumper();
//
//        $yaml = $dumper->dump($fichero, 2, 0);
//
//        file_put_contents('C:\xampp\htdocs\proyChile\.env', $yaml);
//        dd($fichero['MAIL_PASSWORD']);