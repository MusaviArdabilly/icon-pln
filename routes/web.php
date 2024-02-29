<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\InternalController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CMSController;
use App\Http\Controllers\NotificationController;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PublicController::class, 'index_v4']);
Route::get('/lp-v4', [PublicController::class, 'index_v3']);
Route::get('/lp-v3', [PublicController::class, 'index_v2']);
Route::get('/lp-v2', [PublicController::class, 'index_v1']);

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login/post', [AuthController::class, 'login_post']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/register', [AuthController::class, 'register']);

Route::middleware('auth')->group(function () {
    Route::get('/idea', [InternalController::class, 'idea_v4']);
    Route::get('/idea/{id}', [InternalController::class, 'detail_idea']);
    Route::get('/innovation', [InternalController::class, 'innovation']);
    Route::get('/innovation/{id}', [InternalController::class, 'detail_innovation']);
    Route::get('/repository', [InternalController::class, 'repository_v2']);
    Route::get('/repository-v2', [InternalController::class, 'repository']);
    
    Route::post('/idea-submit', [InternalController::class, 'idea_submit']);
    Route::post('/idea-edit/{id}', [InternalController::class, 'idea_edit']);
    
    Route::get('/get-idea', [InternalController::class, 'get_idea']);
    Route::get('/get-popular-idea', [InternalController::class, 'get_popular_idea']);

    Route::get('/get-innovation', [InternalController::class, 'get_innovation']);
    Route::get('/get-popular-innovation', [InternalController::class, 'get_popular_innovation']);

    Route::get('/get-detail-repository/{year}/{month}', [InternalController::class, 'get_detail_repository']);
    
    Route::post('/idea/{id}/comment/post', [InternalController::class, 'comment_post']);

    Route::get('/searchIdea', [InternalController::class, 'search_idea']);
    Route::get('/searchInnovation', [InternalController::class, 'search_innovation']);
    Route::get('/searchRepository', [InternalController::class, 'search_repository']);
    
    Route::middleware('role:user')->prefix('/user')->group(function () {
        Route::get('/idea', [InternalController::class, 'idea_user']);
        Route::get('/innovation', [InternalController::class, 'innovation_user']);
        Route::middleware('ownership')->group(function () {
            Route::get('/idea/{id}', [InternalController::class, 'detail_idea_user']);
            Route::get('/innovation/{id}', [InternalController::class, 'detail_innovation_user']);
            Route::post('/upload-attachment/{id}', [InternalController::class, 'upload_attachment']);
        });
    });

    Route::middleware('role:admin,super_admin')->prefix('/admin')->group(function () {
        Route::get('/idea', [AdminController::class, 'idea']);
        Route::get('/idea/{id}', [AdminController::class, 'detail_idea']);
        Route::get('/idea/{id}/transfer-to-innovation', [AdminController::class, 'idea_to_innovation']);
        Route::get('/idea/{id}/delete', [AdminController::class, 'delete_idea']);
        Route::get('/innovation', [AdminController::class, 'innovation']);
        Route::get('/innovation/{id}', [AdminController::class, 'detail_innovation']);
        Route::get('/innovation/{id}/transfer-to-idea', [AdminController::class, 'innovation_to_idea']);
        Route::get('/innovation/{id}/delete', [AdminController::class, 'delete_innovation']);
        Route::get('/innovation/{id}/approve-step-2', [AdminController::class, 'approve_step_2']);
        Route::get('/innovation/{id}/approve-step-3', [AdminController::class, 'approve_step_3']);
        Route::get('/innovation/{id}/approve-step-4', [AdminController::class, 'approve_step_4']);
        Route::get('/repository', [AdminController::class, 'repository']);

        Route::get('/repository/get-data', [AdminController::class, 'get_data_repository']);
        Route::post('/repository/add-data', [AdminController::class, 'add_data_repository']);
        Route::get('/repository/delete-data/{id}', [AdminController::class, 'delete_data_repository']);

        Route::get('/idea/{ideaId}/comment/{commentId}/delete', [AdminController::class, 'comment_delete']);
        
        Route::middleware('role:super_admin')->group(function () {
            Route::prefix('/cms')->group(function() {
                Route::get('/landing-page', [CMSController::class, 'cms_landing_page']);
                Route::post('/landing-page/edit/post', [CMSController::class, 'cms_landing_page_edit']);
            });
            Route::get('/user-management', [AdminController::class, 'user_management']);
            Route::get('/user-management/get-data', [AdminController::class, 'get_data_user_management']);
            Route::get('/user-management/make-admin/{id}', [AdminController::class, 'make_admin']);
            Route::get('/user-management/make-user/{id}', [AdminController::class, 'make_user']);
        });
    });
});

Route::get('/download/attachments/{param}', [InternalController::class, 'download_attachment']);
Route::get('/download/archive/{id}', [InternalController::class, 'download_archive']);
Route::get('/reload-captcha-url', [AuthController::class, 'reload_captcha']);
Route::get('/get-unread-notifications', [NotificationController::class, 'getUnreadNotifications']);


Route::get('/create-symlink', function () {
    try {
        Artisan::call('storage:link');

        return 'Symlink created successfully.';
    } catch (\Exception $e) {

        return 'Error creating symlink: ' . $e->getMessage();
    }
});

Route::get('/clear-cache', function () {
    try {
        Artisan::call('cache:clear');

        return 'Cache cleared successfully.';
    } catch (\Exception $e) {
        return 'Error clearing cache: ' . $e->getMessage();
    }
});
