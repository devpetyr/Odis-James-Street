<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\CMSController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ServicesController;
use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\TestimonialsController;
use App\Http\Controllers\admin\MembershipController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\crm\CRMController;
use App\Http\Controllers\crm_client\ClientCRMController;
use App\Http\Controllers\admin\ConfigController;
use App\Http\Controllers\admin\EventsController;
use App\Http\Controllers\admin\EmailTemplateController;
use App\Http\Controllers\admin\SharingController;
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

//*admin routes starts*//
Route::get('/admin', [AuthController::class, 'login'])->name('login_page');
Route::post('/admin/login-data', [AuthController::class, 'login_data'])->name('login_data_page');
Route::get('/admin/logout', [AuthController::class, 'logout'])->name('logout');

/* middleware for admin starts*/
Route::group(['middleware'=>['protectedPage']], function(){
    /*dashboard route*/
    Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard_page');
    /*cms routes*/
    Route::get('/admin/cms-list', [CMSController::class, 'cms_list'])->name('cms_list_page');
    Route::get('/admin/add-cms', [CMSController::class, 'add_cms'])->name('add_cms_page');
    Route::post('/admin/add-cms-data/{cms?}', [CMSController::class, 'add_edit_cms'])->name('add_edit_cms_page');
    Route::get('/admin/edit-cms/{cms}', [CMSController::class, 'edit_cms'])->name('edit_cms_page');
    Route::get('/admin/delete-cms/{cms}', [CMSController::class, 'delete_cms'])->name('delete_cms_page');
    /*events routes*/
    Route::get('/admin/events-list', [EventsController::class, 'event_list'])->name('events_list_page');
    Route::get('/admin/events-details', [EventsController::class, 'event_details'])->name('events_details_page');
    Route::get('/admin/add-events', [EventsController::class, 'add_event'])->name('add_events_page');
    Route::post('/admin/add-edit-events/{events?}', [EventsController::class, 'add_edit_event'])->name('add_edit_events_page');
    Route::get('/admin/edit-events/{events}', [EventsController::class, 'edit_event'])->name('edit_events_page');
    Route::get('/admin/delete-events/{events}', [EventsController::class, 'delete'])->name('delete_page');
    /*services routes*/
    Route::get('/admin/expertise-list', [ServicesController::class, 'service_list'])->name('service_list_page');
    Route::get('/admin/add-expertise', [ServicesController::class, 'add_service'])->name('add_service_page');
    Route::post('/admin/add-edit-expertise/{service?}', [ServicesController::class, 'add_edit_service'])->name('add_edit_service_page');
    Route::get('/admin/edit-expertise/{service}', [ServicesController::class, 'edit_service'])->name('edit_service_page');
    Route::get('/admin/delete-expertise/{service}', [ServicesController::class, 'delete'])->name('delete_page');
    /*banner routes*/
    Route::get('/admin/banner-list', [BannerController::class, 'banner_list'])->name('banner_list_page');
    Route::get('/admin/add-banner', [BannerController::class, 'add_banner'])->name('add_banner_page');
    Route::post('/admin/add-banner-data/{banner?}', [BannerController::class, 'add_edit_banner'])->name('add_edit_banner_page');
    Route::get('/admin/edit-banner/{banner?}', [BannerController::class, 'edit_banner'])->name('edit_banner_page');
    Route::get('/admin/delete/{banner}', [BannerController::class, 'delete'])->name('delete_page');
    /*testimonials routes*/
    Route::get('/admin/success-stories-list', [TestimonialsController::class, 'testimonials_list'])->name('testimonials_list_page');
    Route::get('/admin/add-success-stories', [TestimonialsController::class, 'add_testimonials'])->name('add_testimonials_page');
    Route::post('/admin/add-success-stories-data/{testimonials?}', [TestimonialsController::class, 'add_edit_testimonials'])->name('add_edit_testimonials_page');
    Route::get('/admin/edit-success-stories/{testimonials}', [TestimonialsController::class, 'edit_testimonials'])->name('edit_testimonials_page');
    Route::get('/admin/delete-success-stories/{testimonials}', [TestimonialsController::class, 'delete'])->name('delete_page');
    /*membership routes*/
    Route::get('/admin/mentorship-list', [MembershipController::class, 'membership_list'])->name('membership_list_page');
    Route::get('/admin/add-mentorship', [MembershipController::class, 'add_membership'])->name('add_membership_page');
    Route::post('/admin/add-mentorship-data/{membership?}', [MembershipController::class, 'add_edit_membership'])->name('add_edit_membership_page');
    Route::get('/admin/edit-mentorship/{membership}', [MembershipController::class, 'edit_membership'])->name('edit_membership_page');
    Route::get('/admin/delete-mentorship/{membership}', [MembershipController::class, 'delete'])->name('delete_page');
    Route::get('/admin/file-membership/{membership}', [MembershipController::class, 'files_membership'])->name('files_membership');
    Route::get('/admin/file-storage', [MembershipController::class, 'file_storage'])->name('file_storage');
    Route::post('/admin/file-storage', [MembershipController::class, 'file_storage_post'])->name('file_storage_post');
    Route::get('/admin/delete-mentorship-files/{membership}', [MembershipController::class, 'deleteFile'])->name('deleteFile');
    /*config routes*/
    Route::get('/admin/config', [ConfigController::class, 'config'])->name('config_page');
    Route::post('/admin/config-data', [ConfigController::class, 'config_data'])->name('config_data_page');
    /*email_templates routes*/
    Route::get('/admin/email-template-list', [EmailTemplateController::class, 'email_list'])->name('email_list');
    Route::get('/admin/add-email-template', [EmailTemplateController::class, 'add_email'])->name('add_email');
    Route::get('/admin/edit-email-template/{email_template?}', [EmailTemplateController::class, 'edit_email'])->name('edit_email');
    Route::post('/admin/add-email-template-data/{email_template?}', [EmailTemplateController::class, 'email_addedit'])->name('email_addedit');
    Route::get('/admin/delete-email-template/{email_template}', [EmailTemplateController::class, 'email_delete'])->name('email_delete');
    /*sharing routes*/
    Route::get('/admin/add-sharing', [SharingController::class, 'add_sharing'])->name('add_sharing_page');
    Route::post('/admin/add-sharing-data/{sharing?}', [SharingController::class, 'add_edit_sharing'])->name('add_edit_sharing_page');
    Route::get('/admin/sharing-list', [SharingController::class, 'sharing_list'])->name('sharing_list_page');
    Route::get('/admin/edit-sharing/{sharing}', [SharingController::class, 'edit_sharing'])->name('edit_sharing_page');
    Route::get('/admin/delete-sharing/{sharing}', [SharingController::class, 'delete_sharing'])->name('delete_sharing_page');


//* routes for CRM-admin starts*//
Route::get('/crm/dashboard/',[CRMController::class,'index'])->name('crm_dashboard_page');
Route::get('/crm/events/',[CRMController::class,'events'])->name('crm_events_page');

Route::get('/crm/meetings/',[CRMController::class,'meetings'])->name('crm_meeting_page');
Route::get('/crm/appointment-detail/{schedule}',[CRMController::class,'appointment_details'])->name('crm_appointment_details');
Route::post('/crm/meeting-adjustment/',[CRMController::class,'meeting_adjustment'])->name('crm.meeting.adjustment');

Route::get('/crm/event-detail/{id}',[CRMController::class,'events_detail'])->name('crm_events_detail_page');
Route::get('/crm/orders/',[CRMController::class,'orders'])->name('crm_order_page');
Route::get('/crm/messages/',[CRMController::class,'messages'])->name('crm_messages_page');
Route::get('/crm/users/',[CRMController::class,'users'])->name('crm_users_page');
Route::get('/crm/reports/',[CRMController::class,'reports'])->name('crm_reports_page');
Route::get('/crm/user-detail/{id?}',[CRMController::class,'user_detail'])->name('crm_user_detail');
Route::get('/crm/user-add',[CRMController::class,'user_add'])->name('crm_user_add');
Route::get('/crm/order-detail/{id?}',[CRMController::class,'order_detail'])->name('crm_order_detail');
Route::post('/crm/reports-filter/',[CRMController::class,'reports_filter'])->name('crm_reports_data_page');
Route::get('/crm/emails/',[CRMController::class,'email_details'])->name('crm_email_details');
Route::get('/crm/email-format/{name?}',[CRMController::class,'email_format'])->name('crm_email_format');
Route::get('/crm/user-delete/{user?}',[CRMController::class,'user_delete'])->name('crm_user_delete');
Route::get('/crm/real-estate-investors/',[CRMController::class,'real_state_investors'])->name('real_state_investors');
//* routes for admin-CRM ends*//

//* CRM POST ROUTES*//
Route::post('/crm/event-detail-data/{id?}',[CRMController::class,'events_add_customer'])->name('crm_events_add_customer');
Route::post('/crm/getnotes/',[CRMController::class,'get_notes'])->name('crm_dashboard_get_note');
Route::post('/crm/add_update_notes/',[CRMController::class,'add_update_notes'])->name('crm_dashboard_addup_note');
Route::post('/crm/getmsgs/',[CRMController::class,'getmsg'])->name('crm_dashboard_getmsg');
Route::post('/crm/sendmsg/',[CRMController::class,'sendmsg'])->name('crm_dashboard_sendmsg');
Route::post('/crm/user-detail-data',[CRMController::class,'register_referal'])->name('crm_add_referal');
Route::post('/crm/user-add-data',[CRMController::class,'user_add_data'])->name('crm_add_user_data');
Route::post('/crm/user-selection-delete',[CRMController::class,'deleteUserSelection'])->name('crm_deleteUserSelection');
Route::post('/crm/send-email',[CRMController::class,'email_send'])->name('crm_email_send');
Route::post('/crm/update-user/{user?}',[CRMController::class,'update_user'])->name('crm_update_user');

});
/* middleware for admin ends*/
//*admin routes ends*//

//*routes for UI starts*//
Route::get('/',[HomeController::class,'index'])->name('home_page');
Route::get('/expertise',[HomeController::class,'services'])->name('services_page');
Route::get('/mentorship-plans-and-pricing',[HomeController::class,'membership_plans_and_pricing'])->name('membership_plans_and_pricing_page');
Route::get('/30-min-consult',[HomeController::class,'min_consult'])->name('30_min_consult_page');
Route::post('/time-session',[HomeController::class,'time_session'])->name('time.session');
Route::get('/text-me',[HomeController::class,'text_me'])->name('text_me_page');
Route::get('/contact',[HomeController::class,'contact'])->name('contact_page');
Route::post('/contact-data',[HomeController::class,'contact_data'])->name('contact_data_page');
Route::get('/real-state-investors',[HomeController::class,'realStateInvestorsView'])->name('realStateInvestorsView_page');
Route::post('/real-state-investors-post',[HomeController::class,'realStateInvestorsPost'])->name('realStateInvestorsPost_page');
Route::get('/book-odis-james',[HomeController::class,'book_odis_james'])->name('book_odis_james_page');
Route::get('/checkout/{id}',[HomeController::class,'checkout'])->name('checkout_page');
Route::post('/appointments-data',[HomeController::class,'appointments'])->name('appointments_page');
Route::get('/email',[HomeController::class,'email'])->name('email_page');
Route::get('/event-detail/{events?}',[HomeController::class,'event_detail'])->name('event_detail');
Route::get('/events',[HomeController::class,'events'])->name('events');
Route::get('/event-checkout',[HomeController::class,'event_checkout_view'])->name('event_checkout_view');
Route::get('/event-payment/{id}',[HomeController::class,'event_payment_view'])->name('event_payment_view');
Route::post('/event-checkout-data',[HomeController::class,'event_checkout_data'])->name('event_checkout_data');
Route::post('/event-buy-now-data',[HomeController::class,'event_buy_now'])->name('event_buy_now');
Route::post('/event-stripe-data',[HomeController::class,'stripe_events'])->name('stripe_events');
Route::get('/reset-password/{id}',[HomeController::class,'reset_password_view'])->name('reset_password_view');
Route::post('/reset-password-data/{id?}',[HomeController::class,'reset_password'])->name('reset_password');
Route::get('/terms-and-conditions',[HomeController::class,'term_condition'])->name('term_condition');
Route::get('/privacy-policy',[HomeController::class,'privacy_policy'])->name('privacy_policy');
    /*auth routes for users*/
    Route::post('/signup-data',[HomeController::class,'signup'])->name('signup_page');
    Route::post('/login-data',[HomeController::class,'login'])->name('login_page');
    /* for google*/
    Route::get('login/google',[SocialController::class,'redirectToGoogle'])->name('login_google');
    Route::get('login/google/callback/',[SocialController::class,'handleGoogleCallback']);
    /* for google*/
    Route::get('login/facebook',[SocialController::class,'redirectToFacebook'])->name('login_facebook');
    Route::get('login/facebook/callback',[SocialController::class,'handleFacebookCallback']);
    /*for logout*/
    Route::get('/logout',[HomeController::class,'logout'])->name('logout_google');
    /*for stripe*/
    Route::post('stripe', [HomeController::class,'stripePost'])->name('stripe.post');
    Route::post('stripe-schedule', [HomeController::class,'stripeSchedulePost'])->name('stripe.schedule.post');
    /*Forgot password*/
    Route::post('forgot-password', [HomeController::class,'forgotPassword'])->name('forgot.password');
    /* */

//*routes for UI ends*//

/* middleware for client crm starts*/
Route::group(['middleware'=>['protectedPageClients']], function() {
//* routes for CRM-client starts*//
    Route::get('/crm-client/dashboard/', [ClientCRMController::class, 'index'])->name('crm_client_dashboard_page');
    Route::get('/crm-client/messages/', [ClientCRMController::class, 'messages'])->name('crm_client_messages_page');
    Route::get('/crm-client/profile/', [ClientCRMController::class, 'profile'])->name('crm_client_profile_page');
    Route::post('/crm-client/profile-update/{user?}', [ClientCRMController::class, 'profile_update'])->name('crm_client_profile_update');
    Route::post('/crm-client/profile-password-update/{user?}', [ClientCRMController::class, 'profile_password_rest'])->name('crm_client_pass_reset');
    Route::get('/crm-client/reports/', [ClientCRMController::class, 'reports'])->name('crm_client_reports_page');
    Route::get('/crm-client/sharing/', [ClientCRMController::class, 'sharing'])->name('crm_client_sharing_page');
    Route::get('/crm-client/sharing-details/{category?}', [ClientCRMController::class, 'sharing_details'])->name('crm_client_sharing_details_page');
    //Route::get('/crm-client/messages/',[ClientCRMController::class,'messages'])->name('crm_messages_page');
    Route::get('/crm-client/1-on-1-consultation/', [ClientCRMController::class, 'consultation'])->name('crm_client_consultation');
    Route::post('/crm-client/1-on-1-consultation-data/', [ClientCRMController::class, 'addschedule'])->name('crm_client_addschedule');

    /***for file storage starts*/
        Route::get('/crm-client/file-storage/', [ClientCRMController::class, 'file_storage'])->name('crm_client_file_storage');
        Route::post('/crm-client/file-storage-upload/', [ClientCRMController::class, 'user_upload_file'])->name('crm_client_upload_file');
    /***for file storage starts*/

    /***for mentorship files starts*/
    Route::get('/crm-client/mentorship-files/', [ClientCRMController::class, 'mentorship_files'])->name('crm_client_mentorship_files');
    /***for  mentorship files starts*/
    
    Route::post('/crm-client/getmsgs/',[ClientCRMController::class,'getmsg'])->name('crm_dashboard_getmsg');
    Route::post('/crm-client/sendmsg/',[ClientCRMController::class,'sendmsg'])->name('crm_dashboard_sendmsg');
//* routes for client-CRM ends*//
});

Route::get('/data-upload', [HomeController::class, 'dataupload'])->name('data');
/* middleware for client crm ends*/
