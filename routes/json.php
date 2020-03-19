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

/*Academic Grouping */
Route::group(['prefix' => '/', 'as' => '', 'namespace' => 'Academic\\'], function () {

    /*Payment Method Routes*/
    Route::get('payment-method', ['as' => 'payment-method', 'middleware' => ['ability:super-admin,payment-method-index'], 'uses' => 'PaymentMethodController@index']);
    Route::post('payment-method/store', ['as' => 'payment-method.store', 'middleware' => ['ability:super-admin,payment-method-add'], 'uses' => 'PaymentMethodController@store']);
    Route::get('payment-method/{id}/edit', ['as' => 'payment-method.edit', 'middleware' => ['ability:super-admin,payment-method-edit'], 'uses' => 'PaymentMethodController@edit']);
    Route::post('payment-method/{id}/update', ['as' => 'payment-method.update', 'middleware' => ['ability:super-admin,payment-method-edit'], 'uses' => 'PaymentMethodController@update']);
    Route::get('payment-method/{id}/delete', ['as' => 'payment-method.delete', 'middleware' => ['ability:super-admin,payment-method-delete'], 'uses' => 'PaymentMethodController@delete']);
    Route::get('payment-method/{id}/active', ['as' => 'payment-method.active', 'middleware' => ['ability:super-admin,payment-method-active'], 'uses' => 'PaymentMethodController@Active']);
    Route::get('payment-method/{id}/in-active', ['as' => 'payment-method.in-active', 'middleware' => ['ability:super-admin,payment-method-in-active'], 'uses' => 'PaymentMethodController@inActive']);
    Route::post('payment-method/bulk-action', ['as' => 'payment-method.bulk-action', 'middleware' => ['ability:super-admin,payment-method-bulk-action'], 'uses' => 'PaymentMethodController@bulkAction']);

    /*faculty Routes*/
    Route::get('faculty', ['as' => 'faculty', 'middleware' => ['ability:super-admin,faculty-index'], 'uses' => 'FacultyController@index']);
    Route::post('faculty/store', ['as' => 'faculty.store', 'middleware' => ['ability:super-admin,faculty-add'], 'uses' => 'FacultyController@store']);
    Route::get('faculty/{id}/edit', ['as' => 'faculty.edit', 'middleware' => ['ability:super-admin,faculty-edit'], 'uses' => 'FacultyController@edit']);
    Route::post('faculty/{id}/update', ['as' => 'faculty.update', 'middleware' => ['ability:super-admin,faculty-edit'], 'uses' => 'FacultyController@update']);
    Route::get('faculty/{id}/delete', ['as' => 'faculty.delete', 'middleware' => ['ability:super-admin,faculty-delete'], 'uses' => 'FacultyController@delete']);
    Route::get('faculty/{id}/active', ['as' => 'faculty.active', 'middleware' => ['ability:super-admin,faculty-active'], 'uses' => 'FacultyController@Active']);
    Route::get('faculty/{id}/in-active', ['as' => 'faculty.in-active', 'middleware' => ['ability:super-admin,faculty-in-active'], 'uses' => 'FacultyController@inActive']);
    Route::post('faculty/bulk-action', ['as' => 'faculty.bulk-action', 'middleware' => ['ability:super-admin,faculty-bulk-action'], 'uses' => 'FacultyController@bulkAction']);

    /*semester Routes*/
    Route::get('semester', ['as' => 'semester', 'middleware' => ['ability:super-admin,semester-index'], 'uses' => 'SemesterController@index']);
    Route::post('semester/store', ['as' => 'semester.store', 'middleware' => ['ability:super-admin,semester-add'], 'uses' => 'SemesterController@store']);
    Route::get('semester/{id}/edit', ['as' => 'semester.edit', 'middleware' => ['ability:super-admin,semester-edit'], 'uses' => 'SemesterController@edit']);
    Route::post('semester/{id}/update', ['as' => 'semester.update', 'middleware' => ['ability:super-admin,semester-edit'], 'uses' => 'SemesterController@update']);
    Route::get('semester/{id}/delete', ['as' => 'semester.delete', 'middleware' => ['ability:super-admin,semester-delete'], 'uses' => 'SemesterController@delete']);
    Route::get('semester/{id}/active', ['as' => 'semester.active', 'middleware' => ['ability:super-admin,semester-active'], 'uses' => 'SemesterController@Active']);
    Route::get('semester/{id}/in-active', ['as' => 'semester.in-active', 'middleware' => ['ability:super-admin,semester-in-active'], 'uses' => 'SemesterController@inActive']);
    Route::post('semester/bulk-action', ['as' => 'semester.bulk-action', 'middleware' => ['ability:super-admin,semester-bulk-action'], 'uses' => 'SemesterController@bulkAction']);
    Route::post('semester/subject-html', ['as' => 'semester.subject-html', 'uses' => 'SemesterController@subjectHtmlRow']);

    /*Student Batch */
    Route::get('student-batch', ['as' => 'student-batch', 'middleware' => ['ability:super-admin,student-batch-index'], 'uses' => 'StudentBatchController@index']);
    Route::post('student-batch/store', ['as' => 'student-batch.store', 'middleware' => ['ability:super-admin,student-batch-add'], 'uses' => 'StudentBatchController@store']);
    Route::get('student-batch/{id}/edit', ['as' => 'student-batch.edit', 'middleware' => ['ability:super-admin,student-batch-edit'], 'uses' => 'StudentBatchController@edit']);
    Route::post('student-batch/{id}/update', ['as' => 'student-batch.update', 'middleware' => ['ability:super-admin,student-batch-edit'], 'uses' => 'StudentBatchController@update']);
    Route::get('student-batch/{id}/delete', ['as' => 'student-batch.delete', 'middleware' => ['ability:super-admin,student-batch-delete'], 'uses' => 'StudentBatchController@delete']);
    Route::get('student-batch/{id}/active', ['as' => 'student-batch.active', 'middleware' => ['ability:super-admin,student-batch-active'], 'uses' => 'StudentBatchController@Active']);
    Route::get('student-batch/{id}/in-active', ['as' => 'student-batch.in-active', 'middleware' => ['ability:super-admin,student-batch-in-active'], 'uses' => 'StudentBatchController@inActive']);
    Route::post('student-batch/bulk-action', ['as' => 'student-batch.bulk-action', 'middleware' => ['ability:super-admin,student-batch-bulk-action'], 'uses' => 'StudentBatchController@bulkAction']);

    /*Grading Type & Scale*/
    Route::get('grading', ['as' => 'grading', 'middleware' => ['ability:super-admin,grading-index'], 'uses' => 'GradingController@index']);
    Route::post('grading/store', ['as' => 'grading.store', 'middleware' => ['ability:super-admin,grading-add'], 'uses' => 'GradingController@store']);
    Route::get('grading/{id}/edit', ['as' => 'grading.edit', 'middleware' => ['ability:super-admin,grading-edit'], 'uses' => 'GradingController@edit']);
    Route::post('grading/{id}/update', ['as' => 'grading.update', 'middleware' => ['ability:super-admin,grading-edit'], 'uses' => 'GradingController@update']);
    Route::get('grading/{id}/delete', ['as' => 'grading.delete', 'middleware' => ['ability:super-admin,grading-delete'], 'uses' => 'GradingController@delete']);
    Route::get('grading/{id}/active', ['as' => 'grading.active', 'middleware' => ['ability:super-admin,grading-active'], 'uses' => 'GradingController@Active']);
    Route::get('grading/{id}/in-active', ['as' => 'grading.in-active', 'middleware' => ['ability:super-admin,grading-in-active'], 'uses' => 'GradingController@inActive']);
    Route::post('grading/bulk-action', ['as' => 'grading.bulk-action', 'middleware' => ['ability:super-admin,grading-bulk-action'], 'uses' => 'GradingController@bulkAction']);
    Route::post('grading/grade-html', ['as' => 'grading.grade-html', 'uses' => 'GradingController@gradeHtmlRow']);

    /*Subject*/
    Route::get('subject', ['as' => 'subject', 'middleware' => ['ability:super-admin,subject-index'], 'uses' => 'SubjectController@index']);
    Route::post('subject/store', ['as' => 'subject.store', 'middleware' => ['ability:super-admin,subject-add'], 'uses' => 'SubjectController@store']);
    Route::get('subject/{id}/edit', ['as' => 'subject.edit', 'middleware' => ['ability:super-admin,subject-edit'], 'uses' => 'SubjectController@edit']);
    Route::post('subject/{id}/update', ['as' => 'subject.update', 'middleware' => ['ability:super-admin,subject-edit'], 'uses' => 'SubjectController@update']);
    Route::get('subject/{id}/delete', ['as' => 'subject.delete', 'middleware' => ['ability:super-admin,subject-delete'], 'uses' => 'SubjectController@delete']);
    Route::get('subject/{id}/active', ['as' => 'subject.active', 'middleware' => ['ability:super-admin,subject-active'], 'uses' => 'SubjectController@Active']);
    Route::get('subject/{id}/in-active', ['as' => 'subject.in-active', 'middleware' => ['ability:super-admin,subject-in-active'], 'uses' => 'SubjectController@inActive']);
    Route::post('subject/bulk-action', ['as' => 'subject.bulk-action', 'middleware' => ['ability:super-admin,subject-bulk-action'], 'uses' => 'SubjectController@bulkAction']);
    Route::get('subject-name-autocomplete', ['as' => 'subject-name-autocomplete', 'uses' => 'SubjectController@subjectNameAutocomplete']);

    /*Student Status Routes*/
    Route::get('student-status', ['as' => 'student-status', 'middleware' => ['ability:super-admin,student-status-index'], 'uses' => 'StudentStatusController@index']);
    Route::post('student-status/store', ['as' => 'student-status.store', 'middleware' => ['ability:super-admin,student-status-add'], 'uses' => 'StudentStatusController@store']);
    Route::get('student-status/{id}/edit', ['as' => 'student-status.edit', 'middleware' => ['ability:super-admin,student-status-edit'], 'uses' => 'StudentStatusController@edit']);
    Route::post('student-status/{id}/update', ['as' => 'student-status.update', 'middleware' => ['ability:super-admin,student-status-edit'], 'uses' => 'StudentStatusController@update']);
    Route::get('student-status/{id}/delete', ['as' => 'student-status.delete', 'middleware' => ['ability:super-admin,student-status-delete'], 'uses' => 'StudentStatusController@delete']);
    Route::get('student-status/{id}/active', ['as' => 'student-status.active', 'middleware' => ['ability:super-admin,student-status-active'], 'uses' => 'StudentStatusController@Active']);
    Route::get('student-status/{id}/in-active', ['as' => 'student-status.in-active', 'middleware' => ['ability:super-admin,student-status-in-active'], 'uses' => 'StudentStatusController@inActive']);
    Route::post('student-status/bulk-action', ['as' => 'student-status.bulk-action', 'middleware' => ['ability:super-admin,student-status-bulk-action'], 'uses' => 'StudentStatusController@bulkAction']);

    /*attendance Status Routes*/
    Route::get('attendance-status', ['as' => 'attendance-status', 'middleware' => ['ability:super-admin,attendance-status-index'], 'uses' => 'AttendanceStatusController@index']);
    Route::post('attendance-status/store', ['as' => 'attendance-status.store', 'middleware' => ['ability:super-admin,attendance-status-add'], 'uses' => 'AttendanceStatusController@store']);
    Route::get('attendance-status/{id}/edit', ['as' => 'attendance-status.edit', 'middleware' => ['ability:super-admin,attendance-status-edit'], 'uses' => 'AttendanceStatusController@edit']);
    Route::post('attendance-status/{id}/update', ['as' => 'attendance-status.update', 'middleware' => ['ability:super-admin,attendance-status-edit'], 'uses' => 'AttendanceStatusController@update']);
    Route::get('attendance-status/{id}/delete', ['as' => 'attendance-status.delete', 'middleware' => ['ability:super-admin,attendance-status-delete'], 'uses' => 'AttendanceStatusController@delete']);
    Route::get('attendance-status/{id}/active', ['as' => 'attendance-status.active', 'middleware' => ['ability:super-admin,attendance-status-active'], 'uses' => 'AttendanceStatusController@Active']);
    Route::get('attendance-status/{id}/in-active', ['as' => 'attendance-status.in-active', 'middleware' => ['ability:super-admin,attendance-status-in-active'], 'uses' => 'AttendanceStatusController@inActive']);
    Route::post('attendance-status/bulk-action', ['as' => 'attendance-status.bulk-action', 'middleware' => ['ability:super-admin,attendance-status-bulk-action'], 'uses' => 'AttendanceStatusController@bulkAction']);

    /*Book Status Routes*/
    Route::get('book-status', ['as' => 'book-status', 'middleware' => ['ability:super-admin,book-status-index'], 'uses' => 'BookStatusController@index']);
    Route::post('book-status/store', ['as' => 'book-status.store', 'middleware' => ['ability:super-admin,book-status-add'], 'uses' => 'BookStatusController@store']);
    Route::get('book-status/{id}/edit', ['as' => 'book-status.edit', 'middleware' => ['ability:super-admin,book-status-edit'], 'uses' => 'BookStatusController@edit']);
    Route::post('book-status/{id}/update', ['as' => 'book-status.update', 'middleware' => ['ability:super-admin,book-status-edit'], 'uses' => 'BookStatusController@update']);
    Route::get('book-status/{id}/delete', ['as' => 'book-status.delete', 'middleware' => ['ability:super-admin,book-status-delete'], 'uses' => 'BookStatusController@delete']);
    Route::get('book-status/{id}/active', ['as' => 'book-status.active', 'middleware' => ['ability:super-admin,book-status-active'], 'uses' => 'BookStatusController@Active']);
    Route::get('book-status/{id}/in-active', ['as' => 'book-status.in-active', 'middleware' => ['ability:super-admin,book-status-in-active'], 'uses' => 'BookStatusController@inActive']);
    Route::post('book-status/bulk-action', ['as' => 'book-status.bulk-action', 'middleware' => ['ability:super-admin,book-status-bulk-action'], 'uses' => 'BookStatusController@bulkAction']);

    /*Hostel Room Beds Status Routes*/
    Route::get('bed-status', ['as' => 'bed-status', 'middleware' => ['ability:super-admin,bed-status-index'], 'uses' => 'BedStatusController@index']);
    Route::post('bed-status/store', ['as' => 'bed-status.store', 'middleware' => ['ability:super-admin,bed-status-add'], 'uses' => 'BedStatusController@store']);
    Route::get('bed-status/{id}/edit', ['as' => 'bed-status.edit', 'middleware' => ['ability:super-admin,bed-status-edit'], 'uses' => 'BedStatusController@edit']);
    Route::post('bed-status/{id}/update', ['as' => 'bed-status.update', 'middleware' => ['ability:super-admin,bed-status-edit'], 'uses' => 'BedStatusController@update']);
    Route::get('bed-status/{id}/delete', ['as' => 'bed-status.delete', 'middleware' => ['ability:super-admin,bed-status-delete'], 'uses' => 'BedStatusController@delete']);
    Route::get('bed-status/{id}/active', ['as' => 'bed-status.active', 'middleware' => ['ability:super-admin,bed-status-active'], 'uses' => 'BedStatusController@Active']);
    Route::get('bed-status/{id}/in-active', ['as' => 'bed-status.in-active', 'middleware' => ['ability:super-admin,bed-status-in-active'], 'uses' => 'BedStatusController@inActive']);
    Route::post('bed-status/bulk-action', ['as' => 'bed-status.bulk-action', 'middleware' => ['ability:super-admin,bed-status-bulk-action'], 'uses' => 'BedStatusController@bulkAction']);

    /*Year Routes*/
    Route::get('year', ['as' => 'year', 'middleware' => ['ability:super-admin,year-index'], 'uses' => 'YearsController@index']);
    Route::post('year/store', ['as' => 'year.store', 'middleware' => ['ability:super-admin,year-add'], 'uses' => 'YearsController@store']);
    Route::get('year/{id}/edit', ['as' => 'year.edit', 'middleware' => ['ability:super-admin,year-edit'], 'uses' => 'YearsController@edit']);
    Route::post('year/{id}/update', ['as' => 'year.update', 'middleware' => ['ability:super-admin,year-edit'], 'uses' => 'YearsController@update']);
    Route::get('year/{id}/delete', ['as' => 'year.delete', 'middleware' => ['ability:super-admin,year-delete'], 'uses' => 'YearsController@delete']);
    Route::get('year/{id}/active', ['as' => 'year.active', 'middleware' => ['ability:super-admin,year-active'], 'uses' => 'YearsController@Active']);
    Route::get('year/{id}/in-active', ['as' => 'year.in-active', 'middleware' => ['ability:super-admin,year-in-active'], 'uses' => 'YearsController@inActive']);
    Route::post('year/bulk-action', ['as' => 'year.bulk-action', 'middleware' => ['ability:super-admin,year-bulk-action'], 'uses' => 'YearsController@bulkAction']);
    Route::get('year/{id}/active-status', ['as' => 'year.active-status', 'middleware' => ['ability:super-admin,year-active-status'], 'uses' => 'YearsController@activeStatus']);

    /*Months Routes*/
    Route::get('month', ['as' => 'month', 'middleware' => ['ability:super-admin,month-index'], 'uses' => 'MonthsController@index']);
    Route::post('month/store', ['as' => 'month.store', 'middleware' => ['ability:super-admin,month-add'], 'uses' => 'MonthsController@store']);
    Route::get('month/{id}/edit', ['as' => 'month.edit', 'middleware' => ['ability:super-admin,month-edit'], 'uses' => 'MonthsController@edit']);
    Route::post('month/{id}/update', ['as' => 'month.update', 'middleware' => ['ability:super-admin,month-edit'], 'uses' => 'MonthsController@update']);
    Route::get('month/{id}/delete', ['as' => 'month.delete', 'middleware' => ['ability:super-admin,month-delete'], 'uses' => 'MonthsController@delete']);
    Route::get('month/{id}/active', ['as' => 'month.active', 'middleware' => ['ability:super-admin,month-active'], 'uses' => 'MonthsController@Active']);
    Route::get('month/{id}/in-active', ['as' => 'month.in-active', 'middleware' => ['ability:super-admin,month-in-active'], 'uses' => 'MonthsController@inActive']);
    Route::post('month/bulk-action', ['as' => 'month.bulk-action', 'middleware' => ['ability:super-admin,month-bulk-action'], 'uses' => 'MonthsController@bulkAction']);

    /*Day Routes*/
    Route::get('day', ['as' => 'day', 'middleware' => ['ability:super-admin,day-index'], 'uses' => 'DayController@index']);
    Route::post('day/store', ['as' => 'day.store', 'middleware' => ['ability:super-admin,day-add'], 'uses' => 'DayController@store']);
    Route::get('day/{id}/edit', ['as' => 'day.edit', 'middleware' => ['ability:super-admin,day-edit'], 'uses' => 'DayController@edit']);
    Route::post('day/{id}/update', ['as' => 'day.update', 'middleware' => ['ability:super-admin,day-edit'], 'uses' => 'DayController@update']);
    Route::get('day/{id}/delete', ['as' => 'day.delete', 'middleware' => ['ability:super-admin,day-delete'], 'uses' => 'DayController@delete']);
    Route::get('day/{id}/active', ['as' => 'day.active', 'middleware' => ['ability:super-admin,day-active'], 'uses' => 'DayController@Active']);
    Route::get('day/{id}/in-active', ['as' => 'day.in-active', 'middleware' => ['ability:super-admin,day-in-active'], 'uses' => 'DayController@inActive']);
    Route::post('day/bulk-action', ['as' => 'day.bulk-action', 'middleware' => ['ability:super-admin,day-bulk-action'], 'uses' => 'DayController@bulkAction']);

});


/*Students Guardian Grouping*/
Route::group(['prefix' => 'guardian/', 'as' => 'guardian', 'namespace' => 'Student\\'], function () {

    Route::get('', ['as' => '', 'middleware' => ['ability:super-admin,guardian-index'], 'uses' => 'GuardianController@index']);
    Route::get('registration', ['as' => '.registration', 'middleware' => ['ability:super-admin,guardian-registration'], 'uses' => 'GuardianController@registration']);
    Route::post('register', ['as' => '.register', 'middleware' => ['ability:super-admin,guardian-register'], 'uses' => 'GuardianController@register']);
    Route::get('{id}/view', ['as' => '.view', 'middleware' => ['ability:super-admin,guardian-view'], 'uses' => 'GuardianController@view']);
    Route::get('{id}/edit', ['as' => '.edit', 'middleware' => ['ability:super-admin,guardian-edit'], 'uses' => 'GuardianController@edit']);
    Route::post('{id}/update', ['as' => '.update', 'middleware' => ['ability:super-admin,guardian-edit'], 'uses' => 'GuardianController@update']);
    Route::get('{id}/delete', ['as' => '.delete', 'middleware' => ['ability:super-admin,guardian-delete'], 'uses' => 'GuardianController@delete']);

    Route::get('{id}/active', ['as' => '.active', 'middleware' => ['ability:super-admin,guardian-active'], 'uses' => 'GuardianController@Active']);
    Route::get('{id}/in-active', ['as' => '.in-active', 'middleware' => ['ability:super-admin,guardian-in-active'], 'uses' => 'GuardianController@inActive']);
    Route::post('bulk-action', ['as' => '.bulk-action', 'middleware' => ['ability:super-admin,student-bulk-action'], 'uses' => 'GuardianController@bulkAction']);

    Route::post('/link', ['as' => '.link', 'middleware' => ['ability:super-admin,guardian-link'], 'uses' => 'GuardianController@link']);
    Route::get('{student}/{guardian}/unlink', ['as' => '.unlink', 'middleware' => ['ability:super-admin,guardian-unlink'], 'uses' => 'GuardianController@unlink']);

});
