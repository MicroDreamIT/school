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
/*Exam group */
Route::group(['prefix' => 'exam/', 'as' => 'exam', 'namespace' => 'Examination\\'], function () {

    /*Exam Types Routes*/
    Route::get('', ['as' => '', 'middleware' => ['ability:super-admin,exam-index'], 'uses' => 'ExamController@index']);
    Route::post('store', ['as' => '.store', 'middleware' => ['ability:super-admin,exam-add'], 'uses' => 'ExamController@store']);
    Route::get('{id}/edit', ['as' => '.edit', 'middleware' => ['ability:super-admin,exam-edit'], 'uses' => 'ExamController@edit']);
    Route::post('{id}/update', ['as' => '.update', 'middleware' => ['ability:super-admin,exam-edit'], 'uses' => 'ExamController@update']);
    Route::get('{id}/delete', ['as' => '.delete', 'middleware' => ['ability:super-admin,exam-delete'], 'uses' => 'ExamController@delete']);
    Route::get('{id}/active', ['as' => '.active', 'middleware' => ['ability:super-admin,exam-active'], 'uses' => 'ExamController@Active']);
    Route::get('{id}/in-active', ['as' => '.in-active', 'middleware' => ['ability:super-admin,exam-in-active'], 'uses' => 'ExamController@inActive']);
    Route::post('bulk-action', ['as' => '.bulk-action', 'middleware' => ['ability:super-admin,exam-bulk-action'], 'uses' => 'ExamController@bulkAction']);

    /*Exam Print Routes*/
    Route::get('admit-card', ['as' => '.admit-card', 'middleware' => ['ability:super-admin,exam-admit-card'], 'uses' => 'ExamController@admitCard']);
    Route::get('routine', ['as' => '.routine', 'middleware' => ['ability:super-admin,exam-exam-routine'], 'uses' => 'ExamController@examRoutine']);
    Route::get('mark-sheet', ['as' => '.mark-sheet', 'middleware' => ['ability:super-admin,exam-mark-ledger'], 'uses' => 'ExamController@markSheet']);


    //result publish status
    Route::get('schedule/{year}/{month}/{exam}/{faculty}/{semester}/result-publish', ['as' => '.schedule.result-publish', 'middleware' => ['ability:super-admin,exam-result-publish'], 'uses' => 'ExamScheduleController@publish']);
    Route::get('schedule/{year}/{month}/{exam}/{faculty}/{semester}/result-un-publish', ['as' => '.schedule.result-un-publish', 'middleware' => ['ability:super-admin,exam-result-un-publish'], 'uses' => 'ExamScheduleController@unPublish']);

    /*Exam Schedule Routes*/
    Route::get('schedule', ['as' => '.schedule', 'middleware' => ['ability:super-admin,exam-schedule-index'], 'uses' => 'ExamScheduleController@index']);
    Route::get('schedule/add', ['as' => '.schedule.add', 'middleware' => ['ability:super-admin,exam-schedule-add'], 'uses' => 'ExamScheduleController@add']);
    Route::post('schedule/store', ['as' => '.schedule.store', 'middleware' => ['ability:super-admin,exam-schedule-add'], 'uses' => 'ExamScheduleController@store']);
    Route::get('schedule/{id}/edit', ['as' => '.schedule.edit', 'middleware' => ['ability:super-admin,exam-schedule-edit'], 'uses' => 'ExamScheduleController@edit']);
    Route::post('schedule/{id}/update', ['as' => '.schedule.update', 'middleware' => ['ability:super-admin,exam-schedule-edit'], 'uses' => 'ExamScheduleController@update']);
    Route::get('schedule/{year}/{month}/{exam}/{faculty}/{semester}/delete', ['as' => '.schedule.delete', 'middleware' => ['ability:super-admin,exam-schedule-delete'], 'uses' => 'ExamScheduleController@delete']);
    Route::get('schedule/{year}/{month}/{exam}/{faculty}/{semester}/active', ['as' => '.schedule.active', 'middleware' => ['ability:super-admin,exam-schedule-active'], 'uses' => 'ExamScheduleController@active']);
    Route::get('schedule/{year}/{month}/{exam}/{faculty}/{semester}/in-active', ['as' => '.schedule.in-active', 'middleware' => ['ability:super-admin,exam-schedule-in-active'], 'uses' => 'ExamScheduleController@inActive']);
    Route::post('schedule/subject-html', ['as' => '.schedule.subject-html', 'uses' => 'ExamScheduleController@subjectHtmlRow']);

    /*Exam Schedule Routes*/
    Route::get('mark-ledger', ['as' => '.mark-ledger', 'middleware' => ['ability:super-admin,exam-mark-ledger-index'], 'uses' => 'ExamMarkLedgerController@index']);
    Route::get('mark-ledger/add', ['as' => '.mark-ledger.add', 'middleware' => ['ability:super-admin,exam-mark-ledger-add'], 'uses' => 'ExamMarkLedgerController@add']);
    Route::post('mark-ledger/store', ['as' => '.mark-ledger.store', 'middleware' => ['ability:super-admin,exam-mark-ledger-add'], 'uses' => 'ExamMarkLedgerController@store']);
    Route::get('mark-ledger/{id}/edit', ['as' => '.mark-ledger.edit', 'middleware' => ['ability:super-admin,exam-mark-ledger-edit'], 'uses' => 'ExamMarkLedgerController@edit']);
    Route::post('mark-ledger/{id}/update', ['as' => '.mark-ledger.update', 'middleware' => ['ability:super-admin,exam-mark-ledger-edit'], 'uses' => 'ExamMarkLedgerController@update']);
    Route::get('mark-ledger/{exam}/{student}/delete', ['as' => '.mark-ledger.delete', 'middleware' => ['ability:super-admin,exam-mark-ledger-delete'], 'uses' => 'ExamMarkLedgerController@delete']);
    Route::get('mark-ledger/{exam}/{student}/active', ['as' => '.mark-ledger.active', 'middleware' => ['ability:super-admin,exam-mark-ledger-active'], 'uses' => 'ExamMarkLedgerController@active']);
    Route::get('mark-ledger/{exam}/{student}/in-active', ['as' => '.mark-ledger.in-active', 'middleware' => ['ability:super-admin,exam-mark-ledger-in-acctive'], 'uses' => 'ExamMarkLedgerController@inActive']);
    Route::post('mark-ledger/find-subject', ['as' => '.mark-ledger.find-subject', 'uses' => 'ExamMarkLedgerController@findSubject']);
    Route::post('mark-ledger/student-html', ['as' => '.mark-ledger.student-html', 'uses' => 'ExamMarkLedgerController@studentHtmlRow']);

});

/*Extra Features Grouping */
/*Assignment Grouping */
Route::group(['prefix' => 'assignment/', 'as' => 'assignment', 'namespace' => 'Assignment\\'], function () {

    /*Assignment Routes*/
    Route::get('', ['as' => '', 'middleware' => ['ability:super-admin,assignment-index'], 'uses' => 'AssignmentController@index']);
    Route::get('add', ['as' => '.add', 'middleware' => ['ability:super-admin,assignment-add'], 'uses' => 'AssignmentController@add']);
    Route::post('store', ['as' => '.store', 'middleware' => ['ability:super-admin,assignment-add'], 'uses' => 'AssignmentController@store']);
    Route::get('{id}/edit', ['as' => '.edit', 'middleware' => ['ability:super-admin,assignment-edit'], 'uses' => 'AssignmentController@edit']);
    Route::post('{id}/update', ['as' => '.update', 'middleware' => ['ability:super-admin,assignment-edit'], 'uses' => 'AssignmentController@update']);
    Route::get('{id}/view', ['as' => '.view', 'middleware' => ['ability:super-admin,assignment-view'], 'uses' => 'AssignmentController@view']);
    Route::get('{id}/delete', ['as' => '.delete', 'middleware' => ['ability:super-admin,assignment-delete'], 'uses' => 'AssignmentController@delete']);
    Route::get('{id}/active', ['as' => '.active', 'middleware' => ['ability:super-admin,assignment-active'], 'uses' => 'AssignmentController@Active']);
    Route::get('{id}/in-active', ['as' => '.in-active', 'middleware' => ['ability:super-admin,assignment-in-active'], 'uses' => 'AssignmentController@inActive']);
    Route::post('bulk-action', ['as' => '.bulk-action', 'middleware' => ['ability:super-admin,assignment-bulk-action'], 'uses' => 'AssignmentController@bulkAction']);

    Route::post('find-semester', ['as' => '.find-semester', 'uses' => 'AssignmentController@findSemester']);
    Route::post('mark-ledger/find-subject', ['as' => '.find-subject', 'uses' => 'AssignmentController@findSubject']);

    /*Answer Routes*/
    Route::get('answer/{id}/{answer}/view', ['as' => '.answer.view', 'middleware' => ['ability:super-admin,assignment-answer-view'], 'uses' => 'AssignmentController@viewAnswer']);
    Route::get('answer/{id}/approve', ['as' => '.answer.approve', 'middleware' => ['ability:super-admin,assignment-answer-approve'], 'uses' => 'AssignmentController@approveAnswer']);
    Route::get('answer/{id}/reject', ['as' => '.answer.reject', 'middleware' => ['ability:super-admin,assignment-answer-reject'], 'uses' => 'AssignmentController@rejectAnswer']);
    Route::get('answer/{id}/delete', ['as' => '.answer.delete', 'middleware' => ['ability:super-admin,assignment-answer-delete'], 'uses' => 'AssignmentController@deleteAnswer']);

    Route::post('answer/bulk-action', ['as' => '.answer.bulk-action', 'middleware' => ['ability:super-admin,assignment-answer-bulk-action'], 'uses' => 'AssignmentController@bulkActionAnswer']);
});

/*Download Grouping */
Route::group(['prefix' => 'download/', 'as' => 'download', 'namespace' => 'Download\\'], function () {
    /*Download Routes*/
    Route::get('', ['as' => '', 'middleware' => ['ability:super-admin,download-index'], 'uses' => 'DownloadController@index']);
    Route::post('store', ['as' => '.store', 'middleware' => ['ability:super-admin,download-add'], 'uses' => 'DownloadController@store']);
    Route::get('{id}/edit', ['as' => '.edit', 'middleware' => ['ability:super-admin,download-edit'], 'uses' => 'DownloadController@edit']);
    Route::post('{id}/update', ['as' => '.update', 'middleware' => ['ability:super-admin,download-edit'], 'uses' => 'DownloadController@update']);
    Route::get('{id}/delete', ['as' => '.delete', 'middleware' => ['ability:super-admin,download-delete'], 'uses' => 'DownloadController@delete']);
    Route::get('{id}/active', ['as' => '.active', 'middleware' => ['ability:super-admin,download-active'], 'uses' => 'DownloadController@Active']);
    Route::get('{id}/in-active', ['as' => '.in-active', 'middleware' => ['ability:super-admin,download-in-active'], 'uses' => 'DownloadController@inActive']);
    Route::post('bulk-action', ['as' => '.bulk-action', 'middleware' => ['ability:super-admin,download-bulk-action'], 'uses' => 'DownloadController@bulkAction']);
});

/*Report Grouping*/
Route::group(['prefix' => 'report/', 'as' => 'report', 'namespace' => 'Report\\'], function () {

    Route::get('student', ['as' => '.student', 'middleware' => ['ability:super-admin,student-report'], 'uses' => 'StudentReportController@index']);
    Route::get('staff', ['as' => '.staff', 'middleware' => ['ability:super-admin,staff-report'], 'uses' => 'StaffReportController@index']);
});

/*Info Center Grouping*/
Route::group(['prefix' => 'info/', 'as' => 'info.', 'namespace' => 'Info\\'], function () {

    /*Notice Board Routes*/
    Route::get('notice', ['as' => 'notice', 'middleware' => ['ability:super-admin,notice-index'], 'uses' => 'NoticeBoardController@index']);
    Route::get('notice/add', ['as' => 'notice.add', 'middleware' => ['ability:super-admin,notice-add'], 'uses' => 'NoticeBoardController@add']);
    Route::post('notice/store', ['as' => 'notice.store', 'middleware' => ['ability:super-admin,notice-add'], 'uses' => 'NoticeBoardController@store']);
    Route::get('notice/{id}/edit', ['as' => 'notice.edit', 'middleware' => ['ability:super-admin,notice-edit'], 'uses' => 'NoticeBoardController@edit']);
    Route::post('notice/{id}/update', ['as' => 'notice.update', 'middleware' => ['ability:super-admin,notice-edit'], 'uses' => 'NoticeBoardController@update']);
    Route::get('notice/{id}/delete', ['as' => 'notice.delete', 'middleware' => ['ability:super-admin,notice-delete'], 'uses' => 'NoticeBoardController@delete']);

    /*SMS Email Routes*/
    Route::get('smsemail/birthday-wish', ['as' => 'smsemail.send',                           /*'middleware' => ['ability:super-admin,sms-email-send'], */ 'uses' => 'SmsEmailController@birthdayWish']);

    Route::get('smsemail', ['as' => 'smsemail', 'middleware' => ['ability:super-admin,sms-email-index'], 'uses' => 'SmsEmailController@index']);
    Route::get('smsemail/{id}/delete', ['as' => 'smsemail.delete', 'middleware' => ['ability:super-admin,sms-email-delete'], 'uses' => 'SmsEmailController@delete']);
    Route::post('smsemail/bulk-action', ['as' => 'smsemail.bulk-action', 'middleware' => ['ability:super-admin,sms-email-bulk-action'], 'uses' => 'SmsEmailController@bulkAction']);

    /*Group*/
    Route::get('smsemail/create', ['as' => 'smsemail.create', 'middleware' => ['ability:super-admin,sms-email-create'], 'uses' => 'SmsEmailController@create']);
    Route::post('smsemail/send', ['as' => 'smsemail.send', 'middleware' => ['ability:super-admin,sms-email-send'], 'uses' => 'SmsEmailController@send']);

    /*StudentGuardian*/
    Route::get('smsemail/student-guardian', ['as' => 'smsemail.student-guardian', 'middleware' => ['ability:super-admin,sms-email-create'], 'uses' => 'SmsEmailController@studentGuardian']);
    Route::post('smsemail/student-guardian/send', ['as' => 'smsemail.student-guardian.send', 'middleware' => ['ability:super-admin,sms-email-student-guardian-send'], 'uses' => 'SmsEmailController@studentGuardianSend']);

    /*StudentGuardian*/
    Route::get('smsemail/staff', ['as' => 'smsemail.staff', 'middleware' => ['ability:super-admin,sms-email-create'], 'uses' => 'SmsEmailController@staff']);
    Route::post('smsemail/staff/send', ['as' => 'smsemail.staff.send', 'middleware' => ['ability:super-admin,sms-email-staff-send'], 'uses' => 'SmsEmailController@staffSend']);

    /*Individual*/
    Route::get('smsemail/individual', ['as' => 'smsemail.individual', 'middleware' => ['ability:super-admin,sms-email-create'], 'uses' => 'SmsEmailController@individual']);
    Route::post('smsemail/individual/send', ['as' => 'smsemail.individual.send', 'middleware' => ['ability:super-admin,sms-email-individual-send'], 'uses' => 'SmsEmailController@individualSend']);

    /*Reminder Alert*/
    Route::get('smsemail/{id}/fees-receipt', ['as' => 'smsemail.fees-receipt', 'middleware' => ['ability:super-admin,sms-email-fee-receipt'], 'uses' => 'SmsEmailController@feeReceipt']);
    Route::post('smsemail/dueReminder', ['as' => 'smsemail.dueReminder', 'middleware' => ['ability:super-admin,sms-email-due-reminder'], 'uses' => 'SmsEmailController@dueReminder']);
    Route::post('smsemail/bookReturnReminder', ['as' => 'smsemail.bookReturnReminder', 'middleware' => ['ability:super-admin,sms-email-book-return-reminder'], 'uses' => 'SmsEmailController@bookReturnReminder']);

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
    Route::get('semester/get-subject', ['as' => 'semester.get-subject', 'middleware' => ['ability:super-admin,semester-index'], 'uses' => 'SemesterController@getSubject']);
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


Route::group(['prefix' => 'staff/', 'as' => 'staff', 'namespace' => 'Staff\\'], function () {
    /*Staff Routes*/
    Route::get('', ['as' => '', 'middleware' => ['ability:super-admin,staff-index'], 'uses' => 'StaffController@index']);
    Route::get('add', ['as' => '.add', 'middleware' => ['ability:super-admin,staff-add'], 'uses' => 'StaffController@add']);
    Route::post('store', ['as' => '.store', 'middleware' => ['ability:super-admin,staff-add'], 'uses' => 'StaffController@store']);
    Route::get('{id}/edit', ['as' => '.edit', 'middleware' => ['ability:super-admin,staff-edit'], 'uses' => 'StaffController@edit']);
    Route::post('{id}/update', ['as' => '.update', 'middleware' => ['ability:super-admin,staff-edit'], 'uses' => 'StaffController@update']);
    Route::get('{id}/view', ['as' => '.view', 'middleware' => ['ability:super-admin,staff-view'], 'uses' => 'StaffController@view']);
    Route::get('{id}/delete', ['as' => '.delete', 'middleware' => ['ability:super-admin,staff-delete'], 'uses' => 'StaffController@delete']);
    Route::get('{id}/active', ['as' => '.active', 'middleware' => ['ability:super-admin,staff-active'], 'uses' => 'StaffController@Active']);
    Route::get('{id}/in-active', ['as' => '.in-active', 'middleware' => ['ability:super-admin,staff-in-active'], 'uses' => 'StaffController@inActive']);
    Route::post('bulk-action', ['as' => '.bulk-action', 'middleware' => ['ability:super-admin,staff-bulk-action'], 'uses' => 'StaffController@bulkAction']);

    Route::get('import', ['as' => '.import', 'middleware' => ['ability:super-admin,staff-add'], 'uses' => 'StaffController@importStaff']);
    Route::post('import', ['as' => '.bulk.import', 'middleware' => ['ability:super-admin,staff-add'], 'uses' => 'StaffController@handleImportStaff']);


    /*Staff login access*/
    Route::post('user/create', ['as' => '.user.create', 'middleware' => ['ability:super-admin,user-add'], 'uses' => 'StaffController@createUser']);
    Route::post('{id}/user/update', ['as' => '.user.update', 'middleware' => ['ability:super-admin,user-edit'], 'uses' => 'StaffController@updateUser']);
    Route::get('{id}/user/active', ['as' => '.user.active', 'middleware' => ['ability:super-admin,user-active'], 'uses' => 'StaffController@activeUser']);
    Route::get('{id}/user/in-active', ['as' => '.user.in-active', 'middleware' => ['ability:super-admin,user-in-active'], 'uses' => 'StaffController@inActiveUser']);
    Route::get('{id}/user/delete', ['as' => '.user.delete', 'middleware' => ['ability:super-admin,user-delete'], 'uses' => 'StaffController@deleteUser']);

    /*Staff Document Upload*/
    Route::get('document', ['as' => '.document', 'middleware' => ['ability:super-admin,staff-document-index'], 'uses' => 'DocumentController@index']);
    Route::post('document/store', ['as' => '.document.store', 'middleware' => ['ability:super-admin,staff-document-add'], 'uses' => 'DocumentController@store']);
    Route::get('document/{id}/edit', ['as' => '.document.edit', 'middleware' => ['ability:super-admin,staff-document-edit'], 'uses' => 'DocumentController@edit']);
    Route::post('document/{id}/update', ['as' => '.document.update', 'middleware' => ['ability:super-admin,staff-document-edit'], 'uses' => 'DocumentController@update']);
    Route::get('document/{id}/delete', ['as' => '.document.delete', 'middleware' => ['ability:super-admin,staff-document-delete'], 'uses' => 'DocumentController@delete']);
    Route::get('document/{id}/active', ['as' => '.document.active', 'middleware' => ['ability:super-admin,staff-document-active'], 'uses' => 'DocumentController@Active']);
    Route::get('document/{id}/in-active', ['as' => '.document.in-active', 'middleware' => ['ability:super-admin,staff-document-in-active'], 'uses' => 'DocumentController@inActive']);
    Route::post('document/bulk-action', ['as' => '.document.bulk-action', 'middleware' => ['ability:super-admin,staff-document-bulk-action'], 'uses' => 'DocumentController@bulkAction']);

    /*Staff Notes Creating*/
    Route::get('note', ['as' => '.note', 'middleware' => ['ability:super-admin,staff-note-index'], 'uses' => 'NoteController@index']);
    Route::post('note/store', ['as' => '.note.store', 'middleware' => ['ability:super-admin,staff-note-add'], 'uses' => 'NoteController@store']);
    Route::get('note/{id}/edit', ['as' => '.note.edit', 'middleware' => ['ability:super-admin,staff-note-edit'], 'uses' => 'NoteController@edit']);
    Route::post('note/{id}/update', ['as' => '.note.update', 'middleware' => ['ability:super-admin,staff-note-edit'], 'uses' => 'NoteController@update']);
    Route::get('note/{id}/delete', ['as' => '.note.delete', 'middleware' => ['ability:super-admin,staff-note-delete'], 'uses' => 'NoteController@delete']);
    Route::get('note/{id}/active', ['as' => '.note.active', 'middleware' => ['ability:super-admin,staff-note-acctive'], 'uses' => 'NoteController@Active']);
    Route::get('note/{id}/in-active', ['as' => '.note.in-active', 'middleware' => ['ability:super-admin,staff-note-in-active'], 'uses' => 'NoteController@inActive']);
    Route::post('note/bulk-action', ['as' => '.note.bulk-action', 'middleware' => ['ability:super-admin,staff-note-bulk-action'], 'uses' => 'NoteController@bulkAction']);

    /*Staff Designation*/
    Route::get('designation', ['as' => '.designation', 'middleware' => ['ability:super-admin,staff-designation-index'], 'uses' => 'DesignationController@index']);
    Route::post('designation/store', ['as' => '.designation.store', 'middleware' => ['ability:super-admin,staff-designation-add'], 'uses' => 'DesignationController@store']);
    Route::get('designation/{id}/edit', ['as' => '.designation.edit', 'middleware' => ['ability:super-admin,staff-designation-edit'], 'uses' => 'DesignationController@edit']);
    Route::post('designation/{id}/update', ['as' => '.designation.update', 'middleware' => ['ability:super-admin,staff-designation-edit'], 'uses' => 'DesignationController@update']);
    Route::get('designation/{id}/delete', ['as' => '.designation.delete', 'middleware' => ['ability:super-admin,staff-designation-delete'], 'uses' => 'DesignationController@delete']);
    Route::get('designation/{id}/active', ['as' => '.designation.active', 'middleware' => ['ability:super-admin,staff-designation-active'], 'uses' => 'DesignationController@Active']);
    Route::get('designation/{id}/in-active', ['as' => '.designation.in-active', 'middleware' => ['ability:super-admin,staff-designation-in-active'], 'uses' => 'DesignationController@inActive']);
    Route::post('designation/bulk-action', ['as' => '.designation.bulk-action', 'middleware' => ['ability:super-admin,staff-designation-bulk-action'], 'uses' => 'DesignationController@bulkAction']);
});

Route::group(['prefix' => 'hostel/', 'as' => 'hostel', 'namespace' => 'Hostel\\'], function () {

    /*Hostel Routes*/
    Route::get('', ['as' => '', 'middleware' => ['ability:super-admin,hostel-index'], 'uses' => 'HostelController@index']);
    Route::get('add', ['as' => '.add', 'middleware' => ['ability:super-admin,hostel-add'], 'uses' => 'HostelController@add']);
    Route::post('store', ['as' => '.store', 'middleware' => ['ability:super-admin,hostel-add'], 'uses' => 'HostelController@store']);
    Route::get('{id}/edit', ['as' => '.edit', 'middleware' => ['ability:super-admin,hostel-edit'], 'uses' => 'HostelController@edit']);
    Route::post('{id}/update', ['as' => '.update', 'middleware' => ['ability:super-admin,hostel-edit'], 'uses' => 'HostelController@update']);
    Route::get('{id}/view', ['as' => '.view', 'middleware' => ['ability:super-admin,hostel-view'], 'uses' => 'HostelController@view']);
    Route::get('{id}/delete', ['as' => '.delete', 'middleware' => ['ability:super-admin,hostel-delete'], 'uses' => 'HostelController@delete']);
    Route::get('{id}/active', ['as' => '.active', 'middleware' => ['ability:super-admin,hostel-active'], 'uses' => 'HostelController@Active']);
    Route::get('{id}/in-active', ['as' => '.in-active', 'middleware' => ['ability:super-admin,hostel-in-active'], 'uses' => 'HostelController@inActive']);
    Route::post('bulk-action', ['as' => '.bulk-action', 'middleware' => ['ability:super-admin,hostel-bulk-action'], 'uses' => 'HostelController@bulkAction']);
    Route::post('find-rooms', ['as' => '.find-rooms', 'uses' => 'HostelController@findRooms']);
    Route::post('find-beds', ['as' => '.find-beds', 'uses' => 'HostelController@findBeds']);

    /*Rooms Level*/
    Route::post('room/add', ['as' => '.room.add', 'middleware' => ['ability:super-admin,room-add'], 'uses' => 'RoomController@add']);
    Route::get('room/{id}/view', ['as' => '.room.view', 'middleware' => ['ability:super-admin,room-view'], 'uses' => 'RoomController@view']);
    Route::post('room/{id}/update', ['as' => '.room.update', 'middleware' => ['ability:super-admin,room-edit'], 'uses' => 'RoomController@update']);
    Route::get('room/{id}/delete', ['as' => '.room.delete', 'middleware' => ['ability:super-admin,room-delete'], 'uses' => 'RoomController@delete']);
    Route::get('room/{id}/active', ['as' => '.room.active', 'middleware' => ['ability:super-admin,room-active'], 'uses' => 'RoomController@Active']);
    Route::get('room/{id}/in-active', ['as' => '.room.in-active', 'middleware' => ['ability:super-admin,room-in-active'], 'uses' => 'RoomController@InActive']);
    Route::post('room/bulk-rooms', ['as' => '.room.bulk-rooms', 'middleware' => ['ability:super-admin,room-bulk-action'], 'uses' => 'RoomController@bulkAction']);

    /*Bed*/
    Route::post('bed/add', ['as' => '.bed.add', 'middleware' => ['ability:super-admin,bed-add'], 'uses' => 'BedController@addBeds']);
    Route::get('bed/{id}/bed-status/{status}', ['as' => '.bed.bed-status', 'middleware' => ['ability:super-admin,bed-status'], 'uses' => 'BedController@bedStatus']);
    Route::get('bed/{id}/delete', ['as' => '.bed.delete', 'middleware' => ['ability:super-admin,bed-delete'], 'uses' => 'BedController@delete']);
    Route::get('bed/{id}/active', ['as' => '.bed.active', 'middleware' => ['ability:super-admin,bed-active'], 'uses' => 'BedController@Active']);
    Route::get('bed/{id}/in-active', ['as' => '.bed.in-active', 'middleware' => ['ability:super-admin,bed-in-active'], 'uses' => 'BedController@InActive']);
    Route::post('bed/bulk-beds', ['as' => '.bed.bulk-beds', 'middleware' => ['ability:super-admin,bed-bulk-action'], 'uses' => 'BedController@bulkAction']);

    /*Room Types Routes*/
    Route::get('room-type', ['as' => '.room-type', 'middleware' => ['ability:super-admin,room-type-index'], 'uses' => 'RoomTypeController@index']);
    Route::post('room-type/store', ['as' => '.room-type.store', 'middleware' => ['ability:super-admin,room-type-add'], 'uses' => 'RoomTypeController@store']);
    Route::get('room-type/{id}/edit', ['as' => '.room-type.edit', 'middleware' => ['ability:super-admin,room-type-edit'], 'uses' => 'RoomTypeController@edit']);
    Route::post('room-type/{id}/update', ['as' => '.room-type.update', 'middleware' => ['ability:super-admin,room-type-edit'], 'uses' => 'RoomTypeController@update']);
    Route::get('room-type/{id}/delete', ['as' => '.room-type.delete', 'middleware' => ['ability:super-admin,room-type-delete'], 'uses' => 'RoomTypeController@delete']);
    Route::get('room-type/{id}/active', ['as' => '.room-type.active', 'middleware' => ['ability:super-admin,room-type-active'], 'uses' => 'RoomTypeController@Active']);
    Route::get('room-type/{id}/in-active', ['as' => '.room-type.in-active', 'middleware' => ['ability:super-admin,room-type-in-active'], 'uses' => 'RoomTypeController@inActive']);
    Route::post('room-type/bulk-action', ['as' => '.room-type.bulk-action', 'middleware' => ['ability:super-admin,room-type-bulk-action'], 'uses' => 'RoomTypeController@bulkAction']);

    /*Hostel Resident Routes*/
    Route::get('resident', ['as' => '.resident', 'middleware' => ['ability:super-admin,resident-index'], 'uses' => 'ResidentController@index']);
    Route::get('resident/add', ['as' => '.resident.add', 'middleware' => ['ability:super-admin,resident-add'], 'uses' => 'ResidentController@add']);
    Route::post('resident/store', ['as' => '.resident.store', 'middleware' => ['ability:super-admin,resident-add'], 'uses' => 'ResidentController@store']);
    Route::get('resident/quick-resident', ['as' => '.resident.quick-resident', 'middleware' => ['ability:super-admin,resident-add'], 'uses' => 'ResidentController@quickResident']);
    Route::get('resident/{id}/edit', ['as' => '.resident.edit', 'middleware' => ['ability:super-admin,resident-edit'], 'uses' => 'ResidentController@edit']);
    Route::post('resident/{id}/update', ['as' => '.resident.update', 'middleware' => ['ability:super-admin,resident-edit'], 'uses' => 'ResidentController@update']);
    Route::get('resident/{id}/delete', ['as' => '.resident.delete', 'middleware' => ['ability:super-admin,resident-delete'], 'uses' => 'ResidentController@delete']);
    Route::post('resident/bulk-action', ['as' => '.resident.bulk-action', 'middleware' => ['ability:super-admin,resident-bulk-action'], 'uses' => 'ResidentController@bulkAction']);
    Route::post('resident/renew', ['as' => '.resident.renew', 'middleware' => ['ability:super-admin,resident-renew'], 'uses' => 'ResidentController@renew']);
    Route::get('resident/{id}/leave', ['as' => '.resident.leave', 'middleware' => ['ability:super-admin,resident-leave'], 'uses' => 'ResidentController@leave']);
    Route::post('resident/shift', ['as' => '.resident.shift', 'middleware' => ['ability:super-admin,resident-shift'], 'uses' => 'ResidentController@shift']);
    Route::get('resident/history', ['as' => '.resident.history', 'middleware' => ['ability:super-admin,resident-history'], 'uses' => 'ResidentController@history']);
    /*For Search and Listing Room & Bed*/
    Route::post('resident/find-rooms', ['as' => '.resident.find-rooms', 'middleware' => ['ability:super-admin,resident'], 'uses' => 'ResidentController@findRooms']);
    Route::post('resident/find-beds', ['as' => '.resident.find-beds', 'middleware' => ['ability:super-admin,resident'], 'uses' => 'ResidentController@findBeds']);

    /*Food & Meal*/
    /*Food Schedule Routes*/
    Route::get('food', ['as' => '.food', 'middleware' => ['ability:super-admin,food-index'], 'uses' => 'FoodController@index']);
    Route::post('food/store', ['as' => '.food.store', 'middleware' => ['ability:super-admin,food-add'], 'uses' => 'FoodController@store']);
    Route::get('food/{id}/edit', ['as' => '.food.edit', 'middleware' => ['ability:super-admin,food-edit'], 'uses' => 'FoodController@edit']);
    Route::post('food/{id}/update', ['as' => '.food.update', 'middleware' => ['ability:super-admin,food-edit'], 'uses' => 'FoodController@update']);
    Route::get('food/{id}/delete', ['as' => '.food.delete', 'middleware' => ['ability:super-admin,food-delete'], 'uses' => 'FoodController@delete']);
    Route::get('food/{id}/active', ['as' => '.food.active', 'middleware' => ['ability:super-admin,food-active'], 'uses' => 'FoodController@Active']);
    Route::get('food/{id}/in-active', ['as' => '.food.in-active', 'middleware' => ['ability:super-admin,food-in-active'], 'uses' => 'FoodController@inActive']);
    Route::post('food/bulk-action', ['as' => '.food.bulk-action', 'middleware' => ['ability:super-admin,food-bulk-action'], 'uses' => 'FoodController@bulkAction']);
    Route::post('food/food-html', ['as' => '.food.food-html', 'uses' => 'FoodController@foodHtmlRow']);
    Route::get('food-name-autocomplete', ['as' => '.food-name-autocomplete', 'uses' => 'FoodController@foodNameAutocomplete']);

    /*Food Category Routes*/
    Route::get('food/category', ['as' => '.food.category', 'middleware' => ['ability:super-admin,food-category-index'], 'uses' => 'FoodCategoryController@index']);
    Route::post('food/category/store', ['as' => '.food.category.store', 'middleware' => ['ability:super-admin,food-category-add'], 'uses' => 'FoodCategoryController@store']);
    Route::get('food/category/{id}/edit', ['as' => '.food.category.edit', 'middleware' => ['ability:super-admin,food-category-edit'], 'uses' => 'FoodCategoryController@edit']);
    Route::post('food/category/{id}/update', ['as' => '.food.category.update', 'middleware' => ['ability:super-admin,food-category-edit'], 'uses' => 'FoodCategoryController@update']);
    Route::get('food/category/{id}/delete', ['as' => '.food.category.delete', 'middleware' => ['ability:super-admin,food-category-delete'], 'uses' => 'FoodCategoryController@delete']);
    Route::get('food/category/{id}/active', ['as' => '.food.category.active', 'middleware' => ['ability:super-admin,food-category-active'], 'uses' => 'FoodCategoryController@Active']);
    Route::get('food/category/{id}/in-active', ['as' => '.food.category.in-active', 'middleware' => ['ability:super-admin,food-category-in-active'], 'uses' => 'FoodCategoryController@inActive']);
    Route::post('food/category/bulk-action', ['as' => '.food.category.bulk-action', 'middleware' => ['ability:super-admin,food-category-bulk-action'], 'uses' => 'FoodCategoryController@bulkAction']);

    /*Food Item Routes*/
    Route::get('food/item', ['as' => '.food.item', 'middleware' => ['ability:super-admin,food-item-index'], 'uses' => 'FoodItemController@index']);
    Route::post('food/item/store', ['as' => '.food.item.store', 'middleware' => ['ability:super-admin,food-item-add'], 'uses' => 'FoodItemController@store']);
    Route::get('food/item/{id}/edit', ['as' => '.food.item.edit', 'middleware' => ['ability:super-admin,food-item-edit'], 'uses' => 'FoodItemController@edit']);
    Route::post('food/item/{id}/update', ['as' => '.food.item.update', 'middleware' => ['ability:super-admin,food-item-edit'], 'uses' => 'FoodItemController@update']);
    Route::get('food/item/{id}/delete', ['as' => '.food.item.delete', 'middleware' => ['ability:super-admin,food-item-delete'], 'uses' => 'FoodItemController@delete']);
    Route::get('food/item/{id}/active', ['as' => '.food.item.active', 'middleware' => ['ability:super-admin,food-item-active'], 'uses' => 'FoodItemController@Active']);
    Route::get('food/item/{id}/in-active', ['as' => '.food.item.in-active', 'middleware' => ['ability:super-admin,food-item-in-active'], 'uses' => 'FoodItemController@inActive']);
    Route::post('food/item/bulk-action', ['as' => '.food.item.bulk-action', 'middleware' => ['ability:super-admin,food-item-bulk-action'], 'uses' => 'FoodItemController@bulkAction']);

    /*Food Eating Time Routes*/
    Route::get('food/eating-time', ['as' => '.food.eating-time', 'middleware' => ['ability:super-admin,eating-time-index'], 'uses' => 'EatingTimeController@index']);
    Route::post('food/eating-time/store', ['as' => '.food.eating-time.store', 'middleware' => ['ability:super-admin,eating-time-add'], 'uses' => 'EatingTimeController@store']);
    Route::get('food/eating-time/{id}/edit', ['as' => '.food.eating-time.edit', 'middleware' => ['ability:super-admin,eating-time-edit'], 'uses' => 'EatingTimeController@edit']);
    Route::post('food/eating-time/{id}/update', ['as' => '.food.eating-time.update', 'middleware' => ['ability:super-admin,eating-time-edit'], 'uses' => 'EatingTimeController@update']);
    Route::get('food/eating-time/{id}/delete', ['as' => '.food.eating-time.delete', 'middleware' => ['ability:super-admin,eating-time-delete'], 'uses' => 'EatingTimeController@delete']);
    Route::get('food/eating-time/{id}/active', ['as' => '.food.eating-time.active', 'middleware' => ['ability:super-admin,eating-time-active'], 'uses' => 'EatingTimeController@Active']);
    Route::get('food/eating-time/{id}/in-active', ['as' => '.food.eating-time.in-active', 'middleware' => ['ability:super-admin,eating-time-in-acctive'], 'uses' => 'EatingTimeController@inActive']);
    Route::post('food/eating-time/bulk-action', ['as' => '.food.eating-time.bulk-action', 'middleware' => ['ability:super-admin,eating-time-bulk-action'], 'uses' => 'EatingTimeController@bulkAction']);
});

Route::group(['prefix' => 'transport/', 'as' => 'transport', 'namespace' => 'Transport\\'], function () {

    /*Room Types Routes*/
    Route::get('route', ['as' => '.route', 'middleware' => ['ability:super-admin,transport-route-index'], 'uses' => 'RouteController@index']);
    Route::post('route/store', ['as' => '.route.store', 'middleware' => ['ability:super-admin,transport-route-add'], 'uses' => 'RouteController@store']);
    Route::get('route/{id}/edit', ['as' => '.route.edit', 'middleware' => ['ability:super-admin,transport-route-edit'], 'uses' => 'RouteController@edit']);
    Route::post('route/{id}/update', ['as' => '.route.update', 'middleware' => ['ability:super-admin,transport-route-edit'], 'uses' => 'RouteController@update']);
    Route::get('route/{id}/delete', ['as' => '.route.delete', 'middleware' => ['ability:super-admin,transport-route-delete'], 'uses' => 'RouteController@delete']);
    Route::get('route/{id}/active', ['as' => '.route.active', 'middleware' => ['ability:super-admin,transport-route-active'], 'uses' => 'RouteController@Active']);
    Route::get('route/{id}/in-active', ['as' => '.route.in-active', 'middleware' => ['ability:super-admin,transport-route-in-active'], 'uses' => 'RouteController@inActive']);
    Route::post('route/bulk-action', ['as' => '.route.bulk-action', 'middleware' => ['ability:super-admin,transport-route-bulk-action'], 'uses' => 'RouteController@bulkAction']);
    Route::post('route/vehicle-html', ['as' => '.route.vehicle-html', 'uses' => 'RouteController@vehicleHtmlRow']);
    Route::get('vehicle-autocomplete', ['as' => '.vehicle-autocomplete', 'uses' => 'RouteController@vehicleAutocomplete']);

    /*Room Types Routes*/
    Route::get('vehicle', ['as' => '.vehicle', 'middleware' => ['ability:super-admin,vehicle-index'], 'uses' => 'VehicleController@index']);
    Route::post('vehicle/store', ['as' => '.vehicle.store', 'middleware' => ['ability:super-admin,vehicle-add'], 'uses' => 'VehicleController@store']);
    Route::get('vehicle/{id}/edit', ['as' => '.vehicle.edit', 'middleware' => ['ability:super-admin,vehicle-edit'], 'uses' => 'VehicleController@edit']);
    Route::post('vehicle/{id}/update', ['as' => '.vehicle.update', 'middleware' => ['ability:super-admin,vehicle-edit'], 'uses' => 'VehicleController@update']);
    Route::get('vehicle/{id}/delete', ['as' => '.vehicle.delete', 'middleware' => ['ability:super-admin,vehicle-delete'], 'uses' => 'VehicleController@delete']);
    Route::get('vehicle/{id}/active', ['as' => '.vehicle.active', 'middleware' => ['ability:super-admin,vehicle-active'], 'uses' => 'VehicleController@Active']);
    Route::get('vehicle/{id}/in-active', ['as' => '.vehicle.in-active', 'middleware' => ['ability:super-admin,vehicle-in-active'], 'uses' => 'VehicleController@inActive']);
    Route::post('vehicle/bulk-action', ['as' => '.vehicle.bulk-action', 'middleware' => ['ability:super-admin,vehicle-bulk-action'], 'uses' => 'VehicleController@bulkAction']);
    Route::post('vehicle/staff-html', ['as' => '.vehicle.staff-html', 'uses' => 'VehicleController@staffHtmlRow']);
    Route::get('staff-autocomplete', ['as' => '.staff-autocomplete', 'uses' => 'VehicleController@staffAutocomplete']);

    /*Travellers Routes*/
    Route::get('user', ['as' => '.user', 'middleware' => ['ability:super-admin,transport-user-index'], 'uses' => 'TransportUserController@index']);
    Route::get('user/add', ['as' => '.user.add', 'middleware' => ['ability:super-admin,transport-user-add'], 'uses' => 'TransportUserController@add']);
    Route::post('user/store', ['as' => '.user.store', 'middleware' => ['ability:super-admin,transport-user-add'], 'uses' => 'TransportUserController@store']);
    Route::get('user/quick-register', ['as' => '.user.quick-register', 'middleware' => ['ability:super-admin,transport-user-add'], 'uses' => 'TransportUserController@quickRegister']);
    Route::get('user/{id}/edit', ['as' => '.user.edit', 'middleware' => ['ability:super-admin,transport-user-edit'], 'uses' => 'TransportUserController@edit']);
    Route::post('user/{id}/update', ['as' => '.user.update', 'middleware' => ['ability:super-admin,transport-user-edit'], 'uses' => 'TransportUserController@update']);
    Route::get('user/{id}/delete', ['as' => '.user.delete', 'middleware' => ['ability:super-admin,transport-user-delete'], 'uses' => 'TransportUserController@delete']);
    Route::post('user/bulk-action', ['as' => '.user.bulk-action', 'middleware' => ['ability:super-admin,transport-user-bulk-action'], 'uses' => 'TransportUserController@bulkAction']);
    Route::post('user/renew', ['as' => '.user.renew', 'middleware' => ['ability:super-admin,transport-user-renew'], 'uses' => 'TransportUserController@renew']);
    Route::get('user/{id}/leave', ['as' => '.user.leave', 'middleware' => ['ability:super-admin,transport-user-leave'], 'uses' => 'TransportUserController@leave']);
    Route::post('user/shift', ['as' => '.user.shift', 'middleware' => ['ability:super-admin,transport-user-shift'], 'uses' => 'TransportUserController@shift']);
    Route::get('user/history', ['as' => '.user.history', 'middleware' => ['ability:super-admin,transport-user-history'], 'uses' => 'TransportUserController@history']);
    Route::post('find-vehicles', ['as' => '.find-vehicles', 'uses' => 'TransportUserController@findVehicles']);

});
