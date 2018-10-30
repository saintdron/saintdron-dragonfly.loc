<?php
/**
 * Created by PhpStorm.
 * User: Dron
 * Date: 25.10.2018
 * Time: 14:10
 */

namespace App\Http\Repositories;

abstract class Repository
{
    protected $model = null;

    public function get($select = '*', $where = false)
    {
        $builder = $this->model->select($select)->orderBy('created_at', 'desc');

        if ($where) {
            $builder->where($where[0], $where[1]);
        }

        return $builder->get();
    }

    public function one($alias, $select = '*')
    {
        $result = $this->model->select($select)->where('alias', $alias)->first();

        return $result;
    }



/*    protected function unpack($result)
    {
        if ($result->isEmpty()) {
            return false;
        }

        $result->transform(function ($item) {
            return $this->imgTransform($item);
        });


        return $result;
    }

    protected function imgTransform($item)
    {
        if (isset($item->img) && is_object(json_decode($item->img)) && json_last_error() === JSON_ERROR_NONE) {
            $item->img = json_decode($item->img);
        }
        return $item;
    }*/

/*    protected function createAtTransform($item)
    {
//        dd($item);
//        $item->title = '300';
/*        $date = $this->formatCreatedAtDate("%B %Y", $item->created_at->format('U') / 1000);
//        $item->created_at = $date;
        dump($date);
        dd($item->created_at);
        if (isset($item->created_at)) {
            $item->created_at = $this->formatCreatedAtDate('%B %Y', $item->created_at->format('U') / 1000);
        }*/
//dd($item->created_at);
//        $item->created_at = '300';
//        return $item;
//    }*/

/*    public function transliterate($string)
    {
        $str = mb_strtolower($string, 'UTF-8');

        $trans_array = [
            'a' => 'а',
            'b' => 'б',
            'v' => 'в',
            'g' => ['г', 'ґ'],
            'd' => 'д',
            'e' => ['е', 'є', 'э'],
            'jo' => 'ё',
            'zh' => 'ж',
            'z' => 'з',
            'i' => ['и', 'і'],
            'ji' => 'ї',
            'j' => 'й',
            'k' => 'к',
            'l' => 'л',
            'm' => 'м',
            'n' => 'н',
            'o' => 'о',
            'p' => 'п',
            'r' => 'р',
            's' => 'с',
            't' => 'т',
            'u' => 'у',
            'f' => 'ф',
            'kh' => 'х',
            'ts' => 'ц',
            'ch' => 'ч',
            'sh' => 'ш',
            'shch' => 'щ',
            '' => ['ъ', 'ь'],
            'y' => 'ы',
            'yu' => 'ю',
            'ya' => 'я'
        ];

        foreach ($trans_array as $latin => $cyr) {
            $str = str_replace($cyr, $latin, $str);
        }
        $str = preg_replace('/(\s|[^\w])+/', '-', $str);
        return trim($str, '-');
    }*/
}