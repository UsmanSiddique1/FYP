	<?php

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

 // Route::get('/', function () {
 //    return view('frontend/pages/index');


//Pages.................................................................................................................
Route::get('index','PagesController@Index');
Route::get('about','PagesController@About');
Route::get('privacy','PagesController@Privacy');
Route::get('t_n_c','PagesController@TermsAndConditions');
Route::get('documentation','PagesController@Documentation');
Route::get('support_center','PagesController@SupportCenter');

//Laptops.................................................................................................................
Route::get('show_laptop','LaptopController@show');
Route::post('upload_laptop_barcode','LaptopController@store');
Route::get('delete_laptop/{id}','LaptopController@destroy');
Route::get('download_laptop_list/{type}','LaptopController@Download_Laptop_List');

//Bags.................................................................................................................
Route::get('show_bag','BagController@show');
Route::post('upload_bag_barcode','BagController@store');
Route::get('delete_bag/{id}','BagController@destroy');
Route::get('download_bag_list/{type}','BagController@Download_Bag_List');

//EVO.................................................................................................................
Route::get('show_evo','EvoController@show');
Route::post('upload_evo_barcode','EvoController@store');
Route::get('delete_evo/{id}','EvoController@destroy');
Route::get('download_evo_list/{type}','EvoController@Download_Evo_List');

//User.................................................................................................................
Route::get('/', function(){
	return view('landingpage');
});

Auth::routes();
Route::group(['middleware' => 'auth'], function () {

Route::get('/dashboard', 'PagesController@dashboard');

Route::get('register_page', 'UserController@register_page');
Route::get('login_page', 'UserController@login_page');
Route::get('/front','UserController@both_register_login');

Route::post('register','UserController@store');
Route::post('login','UserController@loginUserAction');
Route::get('show_user','UserController@show');
Route::get('delete_user/{id}','UserController@destroy');
Route::get('edit_user/{id}','UserController@edit');
Route::post('update_user/{id}','UserController@update');
Route::get('logout','UserController@LogOut');
Route::post('asign_role/{id}','UserController@AsignRole');
Route::get('download_user_list/{type}','UserController@Download_User_List');



//Examination Lists......................................................................................................

//UPLOAD Exam List
Route::post('upload_examlist','ExaminationList\ExaminationListController@store');
//Download Examlist
Route::get('download_examlist/{type}','ExaminationList\ExaminationListController@Download_Examlist');


//BS(HONS)IT Examination
Route::get('exam_show_bsit','ExaminationList\ExaminationListController@ExamShowBsit');

//BS(HONS)Chemistry Examination
Route::get('exam_show_bschemistry','ExaminationList\ExaminationListController@ExamShowBschemistry');

//BS(HONS)Mathematics Examination
Route::get('exam_show_bsmath','ExaminationList\ExaminationListController@ExamShowBsmath');

//BS(HONS)Physics Examination
Route::get('exam_show_bsphysics','ExaminationList\ExaminationListController@ExamShowBsphysics');

//BS(HONS)Botany Examination
Route::get('exam_show_bsbotany','ExaminationList\ExaminationListController@ExamShowBsbotany');

//BS(HONS)Zoology Examination
Route::get('exam_show_bszoology','ExaminationList\ExaminationListController@ExamShowBszoology');

//MSC IT Examination
Route::get('exam_show_mscit','ExaminationList\ExaminationListController@ExamShowMscit');

//MSC Chemistry Examination
Route::get('exam_show_mscchemistry','ExaminationList\ExaminationListController@ExamShowMscchemistry');

//MSC Mathematics Examination
Route::get('exam_show_mscmath','ExaminationList\ExaminationListController@ExamShowMscmath');

//MSC Physics Examination
Route::get('exam_show_mscphysics','ExaminationList\ExaminationListController@ExamShowMscphysics');


//HEC Lists..........................................................................................

Route::get('show_heclist','HEC_List_Controller\HecListController@show');
Route::post('upload_heclist','HEC_List_Controller\HecListController@store');
Route::get('download_heclist/{type}','HEC_List_Controller\HecListController@Download_Heclist');


//Eligible student Lists...................................................................................................
Route::get('show_eligiblelist','eligiblecontroller\EligibleController@show');
Route::get('download_eligible_list/{type}','eligiblecontroller\EligibleController@Download_Eligible_List');

//Issued CNIC Lists.......................................................................................................
Route::get('show_issued_cniclist','IssuedCNICListController@show');
Route::post('upload_issued_cniclist','IssuedCNICListController@store');
Route::get('download_issued_cnic/{type}','IssuedCNICListController@Download_Issued_CNIC');

//Aproved Lists...........................................................................................................
Route::get('show_aprovedlist','AprovedListsController\AprovedListController@show');
Route::get('download_aproved_list/{type}','AprovedListsController\AprovedListController@Download_Aproved_List');

//Awarded Lists...........................................................................................................
Route::get('show_awardedlist','AwardedController@show');
Route::get('download_awarded_list/{type}','AwardedController@Download_Awarded_Student_List');

//Assigning Scholarship...................................................................................................
Route::get('assign/{hec_id}','AssigningController@Show_Assigning_Page');
Route::post('submit_assigning_page/{hec_id}','AssigningController@Submit_Assigning_Page');
Route::get('show_assigned_page','AssigningController@Show_Assigned_Page');
Route::get('download_assigned_list/{type}','AssigningController@Download_Assigned_List');


});