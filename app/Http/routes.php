<?php

Route::get('tasks/author', 'TasksController@author');

Route::resource('tasks', 'TasksController');

