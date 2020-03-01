<?php
auth()->loginUsingId(1);

Route::group(['prefix' => 'student/', 'as' => 'student', 'namespace' => 'Student\\'], function () {

    Route::get('', ['as' => '', 'middleware' => ['ability:super-admin,student-index'], 'uses' => 'StudentController@index']);
    Route::get('registration', ['as' => '.registration', 'middleware' => ['ability:super-admin,student-registration'], 'uses' => 'StudentController@registration']);
    Route::post('register', ['as' => '.register', 'middleware' => ['ability:super-admin,student-registration'], 'uses' => 'StudentController@register']);
    Route::get('{id}/view', ['as' => '.view', 'middleware' => ['ability:super-admin,student-view'], 'uses' => 'StudentController@view']);
    Route::get('{id}/edit', ['as' => '.edit', 'middleware' => ['ability:super-admin,student-edit'], 'uses' => 'StudentController@edit']);
    Route::post('{id}/update', ['as' => '.update', 'middleware' => ['ability:super-admin,student-edit'], 'uses' => 'StudentController@update']);
    Route::get('{id}/delete', ['as' => '.delete', 'middleware' => ['ability:super-admin,student-delete'], 'uses' => 'StudentController@delete']);
    Route::post('bulk-action', ['as' => '.bulk-action', 'middleware' => ['ability:super-admin,student-bulk-action'], 'uses' => 'StudentController@bulkAction']);
    Route::get('{id}/active', ['as' => '.active', 'middleware' => ['ability:super-admin,student-active'], 'uses' => 'StudentController@Active']);
    Route::get('{id}/in-active', ['as' => '.in-active', 'middleware' => ['ability:super-admin,student-in-active'], 'uses' => 'StudentController@inActive']);
    Route::post('find-semester', ['as' => '.find-semester', 'uses' => 'StudentController@findSemester']);
    Route::post('academicInfo-html', ['as' => '.academicInfo-html', 'uses' => 'StudentController@academicInfoHtml']);
    Route::get('{id}/delete-academicInfo', ['as' => '.delete-academicInfo', 'middleware' => ['ability:super-admin,student-delete-academic-info'], 'uses' => 'StudentController@deleteAcademicInfo']);
    Route::get('guardian-name-autocomplete', ['as' => '.guardian-name-autocomplete', 'uses' => 'StudentController@guardianNameAutocomplete']);
    Route::post('guardianInfo-html', ['as' => '.guardianInfo-html', 'uses' => 'StudentController@guardianInfo']);

    Route::get('student-name-autocomplete', ['as' => '.student-name-autocomplete', 'uses' => 'StudentController@studentNameAutocomplete']);

    Route::get('import', ['as' => '.import', 'middleware' => ['ability:super-admin,student-registration'], 'uses' => 'StudentController@importStudent']);
    Route::post('import', ['as' => '.bulk.import', 'middleware' => ['ability:super-admin,student-registration'], 'uses' => 'StudentController@handleImportStudent']);

    /*Student transfer */
    Route::get('transfer', ['as' => '.transfer', 'middleware' => ['ability:super-admin,student-transfer'], 'uses' => 'StudentController@transfer']);
    Route::post('transfering', ['as' => '.transfering', 'middleware' => ['ability:super-admin,student-transfer'], 'uses' => 'StudentController@transfering']);

    /*Student login access*/
    Route::post('user/create', ['as' => '.user.create', 'middleware' => ['ability:super-admin,user-add'], 'uses' => 'StudentController@createUser']);
    Route::post('{id}/user/update', ['as' => '.user.update', 'middleware' => ['ability:super-admin,user-edit'], 'uses' => 'StudentController@updateUser']);
    Route::get('{id}/user/active', ['as' => '.user.active', 'middleware' => ['ability:super-admin,user-active'], 'uses' => 'StudentController@activeUser']);
    Route::get('{id}/user/in-active', ['as' => '.user.in-active', 'middleware' => ['ability:super-admin,user-in-active'], 'uses' => 'StudentController@inActiveUser']);
    Route::get('{id}/user/delete', ['as' => '.user.delete', 'middleware' => ['ability:super-admin,user-delete'], 'uses' => 'StudentController@deleteUser']);

    /*Guardian login access*/
    Route::post('guardian/user/create', ['as' => '.guardian.user.create', 'middleware' => ['ability:super-admin,user-add'], 'uses' => 'StudentController@createUser']);
    Route::post('guardian/{id}/user/update', ['as' => '.guardian.user.update', 'middleware' => ['ability:super-admin,user-edit'], 'uses' => 'StudentController@updateUser']);
    Route::get('guardian/{id}/user/active', ['as' => '.guardian.user.active', 'middleware' => ['ability:super-admin,user-active'], 'uses' => 'StudentController@activeUser']);
    Route::get('guardian/{id}/user/in-active', ['as' => '.guardian.user.in-active', 'middleware' => ['ability:super-admin,user-in-active'], 'uses' => 'StudentController@inActiveUser']);
    Route::get('guardian/{id}/user/delete', ['as' => '.guardian.user.delete', 'middleware' => ['ability:super-admin,user-delete'], 'uses' => 'StudentController@deleteUser']);


    /*Student Document Upload*/
    Route::get('document', ['as' => '.document', 'middleware' => ['ability:super-admin,student-document-index'], 'uses' => 'DocumentController@index']);
    Route::post('document/store', ['as' => '.document.store', 'middleware' => ['ability:super-admin,student-document-add'], 'uses' => 'DocumentController@store']);
    Route::get('document/{id}/edit', ['as' => '.document.edit', 'middleware' => ['ability:super-admin,student-document-edit'], 'uses' => 'DocumentController@edit']);
    Route::post('document/{id}/update', ['as' => '.document.update', 'middleware' => ['ability:super-admin,student-document-edit'], 'uses' => 'DocumentController@update']);
    Route::get('document/{id}/delete', ['as' => '.document.delete', 'middleware' => ['ability:super-admin,student-document-delete'], 'uses' => 'DocumentController@delete']);
    Route::get('document/{id}/active', ['as' => '.document.active', 'middleware' => ['ability:super-admin,student-document-active'], 'uses' => 'DocumentController@Active']);
    Route::get('document/{id}/in-active', ['as' => '.document.in-active', 'middleware' => ['ability:super-admin,student-document-in-active'], 'uses' => 'DocumentController@inActive']);
    Route::post('document/bulk-action', ['as' => '.document.bulk-action', 'middleware' => ['ability:super-admin,student-document-bulk-action'], 'uses' => 'DocumentController@bulkAction']);

    /*Student Notes Creating*/
    Route::get('note', ['as' => '.note', 'middleware' => ['ability:super-admin,student-note-index'], 'uses' => 'NoteController@index']);
    Route::post('note/store', ['as' => '.note.store', 'middleware' => ['ability:super-admin,student-note-add'], 'uses' => 'NoteController@store']);
    Route::get('note/{id}/edit', ['as' => '.note.edit', 'middleware' => ['ability:super-admin,student-note-edit'], 'uses' => 'NoteController@edit']);
    Route::post('note/{id}/update', ['as' => '.note.update', 'middleware' => ['ability:super-admin,student-note-edit'], 'uses' => 'NoteController@update']);
    Route::get('note/{id}/delete', ['as' => '.note.delete', 'middleware' => ['ability:super-admin,student-note-delete'], 'uses' => 'NoteController@delete']);
    Route::get('note/{id}/active', ['as' => '.note.active', 'middleware' => ['ability:super-admin,student-note-active'], 'uses' => 'NoteController@Active']);
    Route::get('note/{id}/in-active', ['as' => '.note.in-active', 'middleware' => ['ability:super-admin,student-note-in-active'], 'uses' => 'NoteController@inActive']);
    Route::post('note/bulk-action', ['as' => '.note.bulk-action', 'middleware' => ['ability:super-admin,student-note-bulk-action'], 'uses' => 'NoteController@bulkAction']);

    Route::post('public-registration.register', ['as' => '.public-registration.register', 'uses' => 'StudentPublicController@register']);

});

