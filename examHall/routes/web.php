<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('pass', function (){
   dd(Hash::make('samia'));
});

Route::get('/setting','DepartmentController@index')->name('settings')->middleware(['auth']);
Route::post('/department/add','DepartmentController@departmentAdd')->name('department-add');
//Route::get('/semester','SemesterController@index')->name('semester');
Route::post('/semester','DepartmentController@semesterAdd')->name('semester-add');
Route::post('/session','DepartmentController@sessionAdd')->name('session-add');

Route::get('/teacher','TeacherController@index')->name('teacher-view')->middleware(['auth']);
Route::post('/teacher/add','TeacherController@teacherAdd')->name('teacher-add');

Route::get('/course','CourseController@index')->name('course-view')->middleware(['auth']);
Route::post('/course/add','CourseController@courseAdd')->name('course-add');

Route::get('/courseupdate','CourseupdateController@index')->name('view-course')->middleware(['auth']);
Route::get('/courseupdate/edit/{id}','CourseupdateController@courseEdit')->name('edit-course');
Route::post('/courseupdate/update','CourseupdateController@courseUpdate')->name('update-course');
Route::post('/courseupdate/view','CourseupdateController@courseShow')->name('show-course');

Route::get('/student','StudentController@index')->name('student-view')->middleware(['auth']);
Route::post('/student/add','StudentController@studentAdd')->name('student-add');

Route::get('/hall','HallController@index')->name('hall-view')->middleware(['auth']);
Route::post('/hall/add','HallController@hallAdd')->name('hall-add');

Route::get('/exam','ExamController@index')->name('exam-view')->middleware(['auth']);
Route::get('/exam-search','ExamController@examSearch')->name('exam-search')->middleware(['auth']);
Route::post('/exam/add','ExamController@examAdd')->name('exam-add');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/verify','VerifyController@index')->name('user-view')->middleware(['auth']);
Route::get('/verify/users/{id}','VerifyController@userVerification')->name('user-verfication');
Route::post('/verify/users','VerifyController@verifyUser')->name('verify-user');


Route::get('/studentprofile','StudentprofileController@index')->name('viewst-profile')->middleware(['auth']);
Route::get('/studentprofile/edit/{id}','StudentprofileController@editstProfile')->name('editst-profile');
Route::post('/studentprofile/update','StudentprofileController@updatestProfile')->name('updates-profile');
Route::post('/studentprofile/view','StudentprofileController@studentProfile')->name('student-profile');
//Route::get('/studentprofile/view/{id}','StudentprofileController@viewProfile')->name('view-profile');

Route::get('/teacherprofile','TeacherprofileController@index')->name('viewte-profile');
Route::get('/teacherprofile/edit/{id}','TeacherprofileController@editteProfile')->name('editte-profile');
Route::post('/teacherprofile/update','TeacherprofileController@updateteProfile')->name('update-profile');
Route::post('/teacherprofile/view','TeacherprofileController@teacherProfile')->name('teacher-profile');

Route::get('/teacherdetails','TeacherdetailsController@index')->name('viewte-details')->middleware(['auth']);
Route::get('/teacherdetails/edit/{id}','TeacherdetailsController@editTeacher')->name('teacher-edit')->middleware(['auth']);
Route::post('/teacherdetails/update','TeacherdetailsController@updateTeacher')->name('teacher-update');
Route::get('/teacherdetails/delete/{id}','TeacherdetailsController@deleteTeacher')->name('teacher-delete');
Route::post('/teacherdetails/view','TeacherdetailsController@teacherDetails')->name('teacher-details');


Route::get('/studentdetails','StudentdetailsController@index')->name('viewst-details')->middleware(['auth']);
Route::get('/studentdetails/edit/{id}','StudentdetailsController@editStudent')->name('student-edit')->middleware(['auth']);
Route::post('/studentdetails/update','StudentdetailsController@updateStudent')->name('student-update');
Route::get('/studentdetails/delete/{id}','StudentdetailsController@deleteStudent')->name('student-delete');
Route::post('/studentdetails/view','StudentdetailsController@studentDetails')->name('student-details');

Route::get('/admin','AdminController@index')->name('admin-show')->middleware(['auth']);
Route::post('/admin/view','AdminController@adminShow')->name('viewad-show');

Route::get('/courseoffer/cse','CourseoffcseController@gen')->name('course-cse')->middleware(['auth']);
Route::get('/courseoffer/bba','CourseoffcseController@gen1')->name('course-bba')->middleware(['auth']);
Route::get('/courseoffer/law','CourseoffcseController@gen2')->name('course-law')->middleware(['auth']);
Route::get('/courseoffer/english','CourseoffcseController@gen3')->name('course-english')->middleware(['auth']);

Route::get('/crform','CrFormController@index')->name('crforms-view')->middleware(['auth']);
Route::post('/crform/add','CrFormController@crformAdd')->name('crforms-add');

Route::get('/updatecrform','UpdatecrformController@index')->name('view-crform')->middleware(['auth']);
Route::get('/updatecrform/edit/{id}','UpdatecrformController@editCrform')->name('edit-crform');
Route::post('/updatecrform/update','UpdatecrformController@updateCrform')->name('update-crform');
Route::post('/updatecrform/view','UpdatecrformController@viewCrform')->name('view1-crform');

Route::get('/studentregform','ApproveStFormController@index')->name('regform-view')->middleware(['auth']);
Route::post('/studentregform/approve','ApproveStFormController@approveStudent')->name('approve-regform');
Route::post('/post/{id}/approve', 'ApproveStFormController@approve')->name('approve-post');
Route::post('/post/{id}/noapprove', 'ApproveStFormController@approveNo')->name('not-approve');

Route::get('/email','ApproveStFormController@basic_email')->name('send-email');

Route::get('/approvedlist/cse','ApprovedListController@index')->name('list-cse')->middleware(['auth']);
Route::post('/approvedlist/approvelist','ApprovedListController@approveCse')->name('approve-cse');
Route::get('/approvedlist/bba','ApprovedListController@index1')->name('list-bba')->middleware(['auth']);
Route::get('/approvedlist/law','ApprovedListController@index2')->name('list-law')->middleware(['auth']);


Route::get('/seat','SeatAllotmeantController@index')->name('seat-plan')->middleware(['auth']);
Route::post('/seating','SeatAllotmeantController@seatPlan')->name('seating-plan');

Route::get('/studentseat','StudenthallController@index')->name('student-seat')->middleware(['auth']);
Route::get('/studentseating','StudenthallController@studentHall')->name('student-seating');
Route::post('/studentseating2','StudenthallController@studentHall2')->name('student-seating2');

Route::get('/allteacherlist','TeacherhallController@index')->name('teacher-hall')->middleware(['auth']);
Route::post('/teacherhall/add','TeacherhallController@teacherHallAdd')->name('add-teacher');

Route::get('/teacherhalldetails','TeacherhalldetailsController@index')->name('viewte-halldetails')->middleware(['auth']);
Route::get('/teacherhalldetails/delete/{id}','TeacherhalldetailsController@deleteTeacherhall')->name('teacherhall-delete');

Route::get('/teacherhallshow','ShowteacherhallController@index')->name('showte-hall')->middleware(['auth']);