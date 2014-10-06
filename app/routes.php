<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', function()
{
    Return View::make('hello');
});

Route::post('getdata', function()
{
    $data = [
        'title' => 'Hello, World',
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget sapien imperdiet magna semper molestie et a magna. Curabitur magna dui, rhoncus a scelerisque nec, dapibus vitae risus. Phasellus maximus at ipsum tincidunt tempus. Fusce imperdiet tristique dui, consequat volutpat mauris semper faucibus. Vestibulum tincidunt, felis et gravida tristique, neque ligula scelerisque tellus, ac facilisis sapien urna vel massa. Cras sit amet faucibus eros. Aliquam tempus augue non luctus euismod. Integer pretium vitae massa nec condimentum. Aliquam scelerisque lobortis urna, sed sollicitudin odio scelerisque vitae. Nullam vel ornare quam. Phasellus posuere congue dignissim. ',
        'days_of_week' => [
            ['day' => 'Monday'],
            ['day' => 'Tuesday'],
            ['day' => 'Wednesday'],
            ['day' => 'Thursday'],
            ['day' => 'Friday'],
            ['day' => 'Saturday'],
            ['day' => 'Sunday']
        ]
    ];
    return Response::json($data);
});
