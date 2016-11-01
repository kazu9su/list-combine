<?php
namespace hoge;

class ListCombination
{
    public function combine($base, $array, $n=0)
    {
        if (empty($base)) {
            $base = array_shift($array);
        }
        $array1 = array_shift($array);
        $result = [];
        foreach ($base as $item1) {
            foreach ($array1 as $item2) {
                if ($n == 0) {
                    $result[] = [$item1, $item2];
                } else {
                    $result[] = array_merge($item1, [$item2]);
                }
            }
        }

        if (count($array) > 0) {
            $result = $this->combine($result, $array, $n+1);
        }

        return $result;

    }
}
