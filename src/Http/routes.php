<?php

Route::group(
    [
        'namespace' => 'takielias\SSE\Http\Controllers',
        'prefix' => 'sse'
    ],
    static function () {

        Route::get('sse_stream', 'SSEController@stream')->name('__sse_stream__');
    }
);
