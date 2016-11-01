<?php

class ListCombinationTest extends PHPUnit_Framework_TestCase
{
    function test_combine()
    {
        $t = new \hoge\ListCombination();
        $array1 = [];
        $array2 = [
            [
                [
                    'item' => '性別',
                    'category' => '男性',
                ],
                [
                    'item' => '性別',
                    'category' => '女性',
                ],
            ],
            [
                [
                    'item' => '地域',
                    'category' => '関東'
                ],
                [
                    'item' => '地域',
                    'category' => '北陸'
                ],
            ],
            [
                [
                    'item' => '年齢',
                    'category' => '10代'
                ],
                [
                    'item' => '年齢',
                    'category' => '20代'
                ],
                [
                    'item' => '年齢',
                    'category' => '30代'
                ],
            ],
        ];


        $this->assertEquals($t->combine($array1, $array2), [
            [
                [
                    'item' => '性別',
                    'category' => '男性',
                ],
                [
                    'item' => '地域',
                    'category' => '関東'
                ],
                [
                    'item' => '年齢',
                    'category' => '10代'
                ],
            ],
            [
                [
                    'item' => '性別',
                    'category' => '男性',
                ],
                [
                    'item' => '地域',
                    'category' => '関東'
                ],
                [
                    'item' => '年齢',
                    'category' => '20代'
                ],
            ],
            [
                [
                    'item' => '性別',
                    'category' => '男性',
                ],
                [
                    'item' => '地域',
                    'category' => '関東'
                ],
                [
                    'item' => '年齢',
                    'category' => '30代'
                ],
            ],
            [
                [
                    'item' => '性別',
                    'category' => '男性',
                ],
                [
                    'item' => '地域',
                    'category' => '北陸'
                ],
                [
                    'item' => '年齢',
                    'category' => '10代'
                ],
            ],
            [
                [
                    'item' => '性別',
                    'category' => '男性',
                ],
                [
                    'item' => '地域',
                    'category' => '北陸'
                ],
                [
                    'item' => '年齢',
                    'category' => '20代'
                ],
            ],
            [
                [
                    'item' => '性別',
                    'category' => '男性',
                ],
                [
                    'item' => '地域',
                    'category' => '北陸'
                ],
                [
                    'item' => '年齢',
                    'category' => '30代'
                ],
            ],
            [
                [
                    'item' => '性別',
                    'category' => '女性',
                ],
                [
                    'item' => '地域',
                    'category' => '関東'
                ],
                [
                    'item' => '年齢',
                    'category' => '10代'
                ],
            ],
            [
                [
                    'item' => '性別',
                    'category' => '女性',
                ],
                [
                    'item' => '地域',
                    'category' => '関東'
                ],
                [
                    'item' => '年齢',
                    'category' => '20代'
                ],
            ],
            [
                [
                    'item' => '性別',
                    'category' => '女性',
                ],
                [
                    'item' => '地域',
                    'category' => '関東'
                ],
                [
                    'item' => '年齢',
                    'category' => '30代'
                ],
            ],
            [
                [
                    'item' => '性別',
                    'category' => '女性',
                ],
                [
                    'item' => '地域',
                    'category' => '北陸'
                ],
                [
                    'item' => '年齢',
                    'category' => '10代'
                ],
            ],
            [
                [
                    'item' => '性別',
                    'category' => '女性',
                ],
                [
                    'item' => '地域',
                    'category' => '北陸'
                ],
                [
                    'item' => '年齢',
                    'category' => '20代'
                ],
            ],
            [
                [
                    'item' => '性別',
                    'category' => '女性',
                ],
                [
                    'item' => '地域',
                    'category' => '北陸'
                ],
                [
                    'item' => '年齢',
                    'category' => '30代'
                ],
            ],
        ]);
    }
}