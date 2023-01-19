<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRegController;
use App\Http\Controllers\AdminLogInController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductReviewController;
use App\Http\Controllers\TeamMemberController;
use App\Http\Controllers\SlidebarController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\LabAddController;
use App\Http\Controllers\LabPredictController;
use App\Http\Controllers\ChartController;

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

// UserPanel

Route::get('/', function () {
    // return view('userpanel.index');
    redirect('/index');
});

// Route::get('/index', function () {
//     return view('userpanel.index');
// });
Route::get('/index', [TeamMemberController::class, 'index']);
Route::get('/', [TeamMemberController::class, 'index']);



Route::get('/about', [TeamMemberController::class, 'about']);


// Route::get('/about', function () {
//     return view('userpanel.about');
// });

Route::get('/category', function () {
    return view('userpanel.category');
});

// Route::get('/product', function () {
//     return view('userpanel.product');
// });

Route::get('/product/{id}', [ProductController::class, 'product']);
Route::get('/product_detail/{id}', [ProductController::class, 'product_detail']);

// Route::get('/product_detail', function () {
//     return view('userpanel.product_detail');
// });

Route::get('/contact', function () {
    return view('userpanel.contact');
});

Route::get('/register', function () {
    return view('userpanel.register');
});

Route::get('/login', function () {
    return view('userpanel.login');
});


// UserLogin

Route::get('/register', [UserRegController::class, 'register']);
Route::post('/insertdata', [UserRegController::class, 'insertdata']);

// Admin login

Route::get('/login', [AdminLogInController::class, 'login']);
Route::post('/admin_check', [AdminLogInController::class, 'check']);

// MiddleWare Authantication

// AdminPanel
Route::middleware(['admin_login'])->group(function()
{

   
    // Route::get('/adminindex',function()
    // {
    //     return view('adminpanel.adminindex');
    // });

    Route::get('/adminindex', [ChartController::class, 'adminindex']);



   
    Route::get('/contacted', function () {
        return view('adminpanel.contact');
    });
    
    // Route::get('/edit_homepage', function () {
    //     return view('adminpanel.homepage');
    // });

    //Home page (Sidebar)
    Route::get('/edit_homepage', [SlidebarController::class, 'edit_homepage']);
    Route::post('/insertslide', [SlidebarController::class, 'insertslide']);
    Route::get('/deleteslide/{id}', [SlidebarController::class, 'deleteslide']);
    Route::get('/edithomepage/{id}', [SlidebarController::class, 'edithomepage']);
    Route::post('/updatehomepage/{id}', [SlidebarController::class, 'updatehomepage']);
    
    
    
    
    //webreview show and delete
    Route::get('/webreview', [ProductReviewController::class, 'webreview']);
    Route::get('/deletewebreview/{id}', [ProductReviewController::class, 'deletewebreview']);
    
    
    
    //product review 
    Route::get('/productreview', [ProductReviewController::class, 'productreview']);
    Route::get('/deleteproductreview/{id}', [ProductReviewController::class, 'deleteproductreview']);

    // Route::get('/deletemember/{id}', [TeamMemberController::class, 'deletemember']);
    // Route::get('/editmember/{id}', [TeamMemberController::class, 'editmember']);
    // Route::post('/edit_member/{id}', [TeamMemberController::class, 'edit_member']);

    

    //team memeber page
     Route::get('/teammember', [TeamMemberController::class, 'teammember']);
     Route::post('/insertmem', [TeamMemberController::class, 'insertmem']);
     Route::get('/deletemember/{id}', [TeamMemberController::class, 'deletemember']);
     Route::get('/editmember/{id}', [TeamMemberController::class, 'editmember']);
     Route::post('/edit_member/{id}', [TeamMemberController::class, 'edit_member']);

    //admin logout
    Route::get('/admin_logout', [AdminLogInController::class, 'AdminLogOut']);

    //contact page
    Route::get('/contacted', [ContactController::class, 'contacted']);

    //contact delete
    Route::get('/deletecontact/{id}', [ContactController::class, 'deletecontact']);

    //user page data show
    Route::get('/users', [UserRegController::class, 'users']);
    
    //insert category
    //category delete
    //edit category
    Route::get('/add_category', [CategoryController::class, 'add_category']);
    Route::post('/insertcat', [CategoryController::class, 'insertcat']);
    Route::get('/deleteproduct/{id}', [CategoryController::class, 'deleteproduct']);
    Route::get('/editproduct/{id}', [CategoryController::class, 'editproduct']);
    Route::post('/updatecat/{id}', [CategoryController::class, 'updatecat']);
    
    // Pincode
    Route::get('/add_pin', [CategoryController::class, 'add_pin']);
    Route::post('/insertpin', [CategoryController::class, 'insertpin']);
    Route::get('/deletepin/{id}', [CategoryController::class, 'deletepin']);
    Route::get('/editpin/{id}', [CategoryController::class, 'editpin']);
    Route::post('/updatepin/{id}', [CategoryController::class, 'updatepin']);
    
    
    
    //insert product
    //edit product
    //product delete
    Route::get('/add_product', [ProductController::class, 'add_product']);
    Route::post('/insertpro', [ProductController::class, 'insertpro']);
    Route::get('/edit_product/{id}', [ProductController::class, 'edit_product']);
    Route::post('/updatepro/{id}', [ProductController::class, 'updatepro']);
    Route::get('/delete_product/{id}', [ProductController::class, 'delete_product']);
    
    
    
    //user account delete
    Route::get('/deleteuser/{id}', [UserRegController::class, 'deleteuser']);
    
    // Lab assistant register
    
    Route::get('/lab_register', [LabController::class, 'lab_register']);
    Route::post('/insertlab', [LabController::class, 'insertlab']);
    Route::get('/lab_user', [LabController::class, 'lab_user']);
    Route::get('/deletelab/{id}', [LabController::class, 'deletelab']);

    

});


//---------------------------------------------------------- CustomerPanel-----------------------------

Route::middleware(['user_login'])->group(function()
{

    Route::get('/customerindex', [TeamMemberController::class, 'customerindex']);
    // Route::get('/customerindex',function()
    // {
    //     return view('customerpanel.index');
    // });

    // Route::get('/cart',function()
    // {
    //     return view('customerpanel.cart');
    // });
        
    // Route::get('/c_profile', function () {
    //     return view('customerpanel.profile');
    // });

    Route::get('/c_profile', [AdminLogInController::class, 'c_profile']);
    
    

    //edit profile
    Route::get('/edit_profile/{id}', [UserRegController::class, 'editprofile']);
    Route::post('/edit_profiledata/{id}', [UserRegController::class, 'edit_profiledata']);
    
    
    
    // Route::get('/c_about', function () {
        //     return view('customerpanel.about');
        // });
        
    Route::get('/c_about', [TeamMemberController::class, 'c_about']);
    
    
    Route::get('/c_cart', [ProductController::class, 'c_cart']);
    // Route::get('/c_cart', function () {
        //     return view('customerpanel.cart');
    // });

    Route::get('/c_category', function () {
        return view('customerpanel.category');
    });
    
    // Route::get('/view_appointment', function () {
    //         return view('customerpanel.view_appointment');
    // });
    
    
    Route::get('/c_product/{id}', [ProductController::class, 'c_product']);
    Route::get('/appointment', [LabAddController::class, 'appointment']);
    Route::post('/add_app', [LabAddController::class, 'add_app']);
    Route::get('/view_appointment', [LabAddController::class, 'view_appointment']);
    Route::post('/update_appo_cancel/{id}', [LabAddController::class, 'update_appo_cancel']);
    
    // Route::get('/c_product_detail', function () {
        //     return view('customerpanel.product_detail');
        // });
        
    // Route::get('/c_contact', function () {
    //     return view('customerpanel.contact');
    // });
    
    // Route::get('/updateqty', function () {
    //     return view('customerpanel.updateqty');
    // });
    Route::get('/updateqty/{id}', [ProductController::class, 'updateqty']);
    Route::get('/c_order', [ProductController::class, 'c_order']);
    Route::get('/order_detail/{id}', [ProductController::class, 'order_detail']);

    Route::get('/c_category', [CategoryController::class, 'c_category']);
    Route::get('/c_contact', [ContactController::class, 'c_contact']);
    Route::post('/contact_c', [ContactController::class, 'contact_c']);
    Route::get('/cust_logout', [AdminLogInController::class, 'CustLogOut']);
    Route::get('/c_product_detail/{id}', [ProductController::class, 'c_product_detail']);

    
    //product review insert
    Route::post('/insertpro_rev', [ProductReviewController::class, 'insertpro_rev']);
    
    
    
    //web review insert
    Route::post('/insertweb_rev', [ProductReviewController::class, 'insertweb_rev']);
    
    // Add to cart
    Route::post('/addtocart', [ProductController::class, 'addtocart']);
    Route::post('/updatecart/{id}', [ProductController::class, 'updatecart']);
    Route::get('/dlt_cart/{id}', [ProductController::class, 'dlt_cart']);
    
    // Checkout
    Route::post('/checkoutinsert', [ProductController::class, 'checkoutinsert']);

});



// Category master

Route::get('/category', [CategoryController::class, 'category']);

// Contact us

Route::get('/contact', [ContactController::class, 'contact']);
Route::post('/contact_u', [ContactController::class, 'contact_u']);


// --------------------------- Lab Panel ----------------------------------------- //


Route::middleware(['lab_login'])->group(function()
{

  Route::get('/labindex',function()
    {
        return view('labpanel.labindex');
    });

    Route::get('/lab_logout', [AdminLogInController::class, 'lab_logout']);
    
    Route::get('/result',function()
    {
        return view('labpanel.result');
    });
    
    Route::get('/add_address', [LabAddController::class, 'add_address']);
    Route::post('/insrtadd', [LabAddController::class, 'insrtadd']);
    Route::get('/editadd/{id}', [LabAddController::class, 'editadd']);
    Route::post('/updateadd/{id}', [LabAddController::class, 'updateadd']);
    Route::get('/deleteadd/{id}', [LabAddController::class, 'deleteadd']);

    // Appointments

    Route::get('/l_view_appointment', [LabAddController::class, 'l_view_appointment']);
    Route::post('/l_update_appo_status/{id}', [LabAddController::class, 'l_update_appo_status']);
    
    Route::get('/patients', [LabAddController::class, 'patients']);
    Route::get('/submit_result/{id}', [LabAddController::class, 'submit_result']);
    Route::get('/predict_breast_cancer', [LabPredictController::class, 'predict_breast_cancer']);
    
    // Result
    Route::get('/all_results', [LabPredictController::class, 'all_results']);
    Route::get('/v_pdf/{id}', [LabPredictController::class, 'v_pdf']);
    Route::get('/d_pdf/{id}', [LabPredictController::class, 'd_pdf']);
});