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
Route::get('login/google', 'Auth\LoginController@redirectToProvider')->name('login_with_google');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('login/facebook', 'Auth\LoginController@facebookLogin')->name('login_with_facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@facebookCallback');


Route::get('/', 'frontController@getFrontIndex')->name('getFrontIndex');
Route::get('/index2', 'frontController@getFrontIndex2')->name('getFrontIndex2');
Route::get('/index3', 'frontController@getFrontIndex3')->name('getFrontIndex3');
Route::get('/index4', 'frontController@getFrontIndex4')->name('getFrontIndex4');
Route::get('/index5', 'frontController@getFrontIndex5')->name('getFrontIndex5');
Route::get('/index6', 'frontController@getFrontIndex6')->name('getFrontIndex6');
Route::get('/search', 'frontController@getItemSearch')->name('getItemSearch');
Route::get('/category/{id}', 'frontController@getCategoryPage')->name('getCategoryPage');
Route::get('/contact_us', 'frontController@getContactUsPage')->name('getContactUsPage');
Route::get('/edit_info', 'frontController@getEditInfo')->name('getEditInfo');
Route::get('/edit_address', 'frontController@getEditAddress')->name('getEditAddress');
Route::get('/order_tracking', 'frontController@getOrderTracking')->name('getOrderTracking');
Route::get('/order_tracking_detail', 'frontController@getOrderTrackingDetail')->name('getOrderTrackingDetail');
Route::get('/receipt', 'frontController@getOrderReceipt')->name('getOrderReceipt');
Route::get('/FAQ', 'frontController@getFAQ')->name('getFAQ');
Route::get('/forgot_password', 'frontController@getForgotPassword')->name('getForgotPassword');
Route::get('/order_history', 'frontController@getOrderHistory')->name('getOrderHistory');
Route::get('/wishlist', 'frontController@getWishList')->name('getWishList');
Route::post('/getpostcode','frontController@getPostcodeResult')->name('getPostcodeResult');
Route::get('/brand/{id}', 'frontController@getBrandList')->name('getFrontBrandList');

Route::get('/newpage', 'frontController@getNewPage')->name('getNew');

Route::get('/registernow', 'frontController@getRegisterPage')->name('getRegisterPage');

Route::group(['middleware' => ['auth']], function () {
  Route::get('/profile', 'frontController@getUserProfile')->name('getUserProfile');

  Route::prefix('client')->group(function(){
    Route::post('addressBook', 'clientController@addressBook')->name('addressBook');
    Route::get('verify_now', 'clientController@verify_now')->name('verify_now');
  });

  Route::prefix('item')->group(function () {
    Route::post('/add_wishlist', 'itemController@addItemToWishlist')->name('addItemToWishlist');
    Route::post('/add_cart', 'itemController@addItemToCart')->name('addItemToCart');
    Route::post('/removeCartDetail', 'itemController@removeCartDetail')->name('removeCartDetail');
    Route::post('/updateCart', 'itemController@updateCart')->name('updateCart');
    Route::post('/removeWishlistDetail', 'itemController@removeWishlistDetail')->name('removeWishlistDetail');
    Route::post('/updateWishlist', 'itemController@updateWishlist')->name('updateWishlist');
    Route::post('/updateWishlistToCart', 'itemController@updateWishlistToCart')->name('updateWishlistToCart');
    Route::post('/selectedItemCheckout', 'itemController@selectedItemCheckout')->name('selectedItemCheckout');
  });

  Route::prefix('checkout')->group(function(){
    Route::post('submitPayment', 'itemController@submitPayment')->name('submitPayment');
    Route::post('submitCouponcode', 'itemController@submitCouponcode')->name('submitCouponcode');
  });

  Route::post('/saveMemo', 'frontController@saveMemo')->name('saveMemo');
  Route::post('/removeMemo', 'frontController@removeMemo')->name('removeMemo');
  Route::post('/updateMemo', 'frontController@updateMemo')->name('updateMemo');

});

Route::prefix('item')->group(function () {
  Route::get('{id}', 'itemController@getItemDetail')->name('getItemDetail');
});

Route::prefix('cart')->group(function () {
  Route::get('/', 'itemController@getCartIndex')->name('getCartIndex');
});

Route::prefix('checkout')->group(function () {
  Route::get('/', 'itemController@getCheckoutIndex')->name('getCheckoutIndex');
  Route::get('/success/{id}', 'itemController@getCheckoutSuccessIndex')->name('getCheckoutSuccessIndex');
});


Route::group(['middleware' => ['auth:admin']], function () {
  Route::prefix('/admin')->group(function(){
    Route::get('/', 'adminController@getIndex')->name('getIndex');
    Route::post('/createStaff', 'adminController@createStaff')->name('createStaff');
    // Route::get('/', 'adminController@getIndex')->name('getIndex');
    Route::get('/category', 'adminController@getCategory')->name('getCategory');
    Route::get('/subcategory', 'adminController@getSubCategory')->name('getSubCategory');
    Route::get('/productlist','adminController@getProductList')->name('getProductList');
    Route::get('/productdetail','adminController@getProductDetail')->name('getProductDetail');
    Route::get('/addproduct','adminController@getAddProduct')->name('getAddProduct');
    Route::get('/orders','adminController@getOrders')->name('getOrders');
    Route::get('/transaction','adminController@getTransaction')->name('getTransaction');
    Route::get('/couponlist','adminController@getCouponList')->name('getCouponList');
    Route::get('/couponcreate','adminController@getCouponCreate')->name('getCouponCreate');
    Route::get('/userlist','adminController@getUserList')->name('getUserList');
    Route::get('/createuser','adminController@getCreateUser')->name('getCreateUser');
    Route::get('/Sreport','adminController@getSpecifyDateReport')->name('getSpecifyDateReport');
    Route::get('/Preport','adminController@getProductReport')->name('getProductReport');
    Route::get('/profile','adminController@getProfile')->name('getProfile');
    Route::get('/invoice','adminController@getInvoice')->name('getInvoice');
    Route::get('/getEmailMarketing','adminController@getEmailMarketing')->name('getEmailMarketing');
    Route::get('../','adminController@getHome')->name('getHome');
    Route::get('/mainCategory','adminController@getMainCategory')->name('getMainCategory');
    Route::get('/tag','adminController@getTag')->name('getTag');
    Route::get('/coupontransaction','adminController@getCouponTransaction')->name('getCouponTransaction');
    Route::get('/brand','adminController@getBrand')->name('getBrand');
    Route::get('/brandlist','adminController@getBrandList')->name('getBrandList');

    //add brand
    Route::post('/addbrand','adminController@addBrand')->name('addBrand');

    //get brand id
    Route::get('/brandedit','adminController@getBrandEdit')->name('getBrandEdit');

    //post Edit Brand
    Route::post('/postBrandEdit','adminController@postBrandEdit')->name('postBrandEdit');

    //ajax update brand
    Route::post('/updateBrand','adminController@updateBrand')->name('updateBrand');

    //ajax delete brand
    Route::post('/deleteBrand','adminController@deleteBrand')->name('deleteBrand');

    // add product route
    Route::post('/postAddProduct', 'adminController@postAddProduct')->name('postAddProduct');

    // add category
    Route::post('/addCategory','adminController@addCategory')->name('addCategory');

    //ajax update category name
    Route::post('/updateCategory','adminController@updateCategory')->name('updateCategory');

    //ajax delete category
    Route::post('/deleteCategory','adminController@deleteCategory')->name('deleteCategory');

    //ajax bulk delete product
    Route::post('/bulkDeleteProduct','adminController@bulkDelete')->name('bulkDelete');

    //search product
    Route::post('/productlist','adminController@searchProduct')->name('searchProduct');

    //delete single product
    Route::post('/deleteProduct','adminController@deleteSingleProduct')->name('deleteSingleProduct');

    //get product id
    Route::get('/editProduct','adminController@editProduct')->name('editProduct');

    //post product information
    Route::post('/editProduct','adminController@editPostProduct')->name('editPostProduct');

    //post coupon information for creation
    Route::post('/createCoupon','adminController@createCoupon')->name('createCoupon');

    //ajax change coupon status
    Route::post('/changeStatus','adminController@changeStatus')->name('changeStatus');

    //ajax delete coupon
    Route::post('/deleteCoupon','adminController@deleteCoupon')->name('deleteCoupon');

    //search coupon
    Route::post('/searchCoupon','adminController@searchCoupon')->name('searchCoupon');

    //get coupon id
    Route::get('/editCoupon','adminController@editCoupon')->name('editCoupon');

    //edit coupon
    Route::post('/alterCoupon','adminController@alterCoupon')->name('alterCoupon');

    //change order status
    Route::post('/changeOrderStatus','adminController@changeOrderStatus')->name('changeOrderStatus');

    //change order status
    Route::post('/searchOrder','adminController@searchOrder')->name('searchOrder');

    //ajax bulk change order status
    Route::post('/bulkChangeStatus','adminController@bulkChangeStatus')->name('bulkChangeStatus');

    //get order detail based on transaction id
    Route::get('/orderdetail','adminController@orderDetail')->name('orderDetail');

    //ajax change order status
    Route::post('/changeorderstatus','adminController@alterOrderStatus')->name('alterOrderStatus');

    //ajax change order status
    Route::post('/addSubCategory','adminController@addSubCategory')->name('addSubCategory');

    //ajax update subcategory name
    Route::post('/updateSubCategory','adminController@updateSubCategory')->name('updateSubCategory');

    //ajax delete subcategory
    Route::post('/deleteSubCategory','adminController@deleteSubCategory')->name('deleteSubCategory');

    //post main category
    Route::post('/postMainCategory','adminController@postMainCategory')->name('postMainCategory');

    //update main category
    Route::post('/updateMainCategory','adminController@updateMainCategory')->name('updateMainCategory');

    //delete main category
    Route::post('/deleteMainCategory','adminController@deleteMainCategory')->name('deleteMainCategory');

    //delete main category
    Route::post('/postTag','adminController@postTag')->name('postTag');

    //update tag
    Route::post('/updateTag','adminController@updateTag')->name('updateTag');

    //delete tag
    Route::post('/deleteTag','adminController@deleteTag')->name('deleteTag');

    //Print AWB
    Route::get('/awb','adminController@awb')->name('awb');

    //search coupon transaction record
    Route::post('/vtransaction','adminController@searchVoucherTransaction')->name('searchVoucherTransaction');

    //search Transction
    Route::post('/searchTransaction','adminController@searchTransaction')->name('searchTransaction');

    // Checklist - WW
    Route::get('/checklist', 'adminController@getChecklist')->name('getChecklist');
    Route::get('/checklist_detail', 'adminController@getChecklistItem')->name('getChecklistItem');
    Route::post('/updateChecklistStatus', 'adminController@updateChecklistStatus')->name('updateChecklistStatus');
    // not used 
    Route::get('/checklist/{id}', 'adminController@getChecklistDetail')->name('getChecklistDetail');
    Route::post('/updateChecklist', 'adminController@updateChecklist')->name('updateChecklist');
    Route::post('/updateTransaction', 'adminController@updateTransaction')->name('updateTransaction');

    Route::get('/subscriptionlist','adminController@getSubscriptionList')->name('getSubscriptionList');
    Route::get('/templateupload','adminController@getTemplateUpload')->name('getTemplateUpload');
    Route::get('/listTemplate','adminController@listTemplate')->name('listTemplate');

    //upload template (migrate to front)
    Route::post('/gettemplateupload','adminController@templateUpload')->name('templateUpload');
    //delete template
    Route::post('/deleteTemplate','adminController@deleteTemplate')->name('deleteTemplate');
    //get template url
    Route::get('/viewTemplate','adminController@viewTemplate')->name('viewTemplate');

    //Send mail function ""Cron job this""
    Route::get('/mail','adminController@mail')->name('mail');

    //Active the email template
    Route::post('/activateTemplate','adminController@activateTemplate')->name('activateTemplate');

    //email stop ajax
    Route::post('/stopEmail','adminController@stopEmail')->name('stopEmail');

    //Post Report Date
    Route::post('/dateReport','adminController@postReportDate')->name('postReportDate');

    //Post Product Report
    Route::post('/productReport','adminController@postProductReport')->name('postProductReport');
    //Ajax get product list
    Route::post('/ajax_product_list','adminController@getAjaxProductList')->name('getAjaxProductList');

    // promotion
    Route::get('/promotion/on_sales', 'adminController@getOnSales')->name('getOnSales');
    Route::get('/promotion/today_deal', 'adminController@getTodayDeal')->name('getTodayDeal');
    Route::post('/updateOnsales', 'adminController@updateOnsales')->name('updateOnsales');
    Route::post('/updateTodayDeal', 'adminController@updateTodayDeal')->name('updateTodayDeal');
    // 

  });
});


Route::prefix('/admin')->group(function(){
  Route::get('/login','adminController@getLogin')->name('getAdminLogin');
  Route::post('/login', 'Auth\LoginController@adminLogin')->name('adminLogin');
  Route::get('/register','adminController@getAdminRegister')->name('getAdminRegister');
  Route::get('/logout', 'Auth\LoginController@adminLogout')->name('adminLogout');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/readexcel', 'adminController@readExcel')->name('readExcel');
Route::get('/front_testing', 'frontController@testing')->name('front_testing');
Route::get('/verify_email', 'frontController@verify_email')->name('verify_email');
