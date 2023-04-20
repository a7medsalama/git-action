<?php

use Illuminate\Support\Facades\Route;




Route::get(
    '/students' ,
    function() {
        $arr = [
            'students' => [
                [
                    'name' => 'Ahmed',
                    'id' => 1 ,
                    'city' => 'Helwan' ,
                    'Department' => 'CS'
                ],
                [
                    'name' => 'Yasser',
                    'id' => 2 ,
                    'city' => 'Shibeen' ,
                    'Department' => 'IT'
                ]
            ]
        ];
        return view('task',$arr);
    }
);

