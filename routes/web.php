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

// Route::get('ship-test', 'OrderController@calculateShipping');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('load-attribute', function() {
    $options = App\Attribute::where('status','ACTIVE')->get();
    return view('admin.component.attribute',compact('options'));
});

Route::get('load-attrbute-value/{atname}', function($atname) {
    $att = App\Attribute::find($atname);
    $attVall = App\AttributeValue::where('attribute_id',$atname)->get();
    return view('admin.component.attribute-value',[
        'atname' => $att->name,
        'atoption' => $attVall,
    ]);
});

Route::get('get-search-field-components/{data_type}', function($dataType) {
    return view('components.direct-mail-search-field',compact('dataType'));
});

Route::get('get-select-option/{size}', function($size) {
    // return $size;
    return view('components.select-option',compact('size'));
});

// Direct mail route begain here

Route::post('direct-mail-process', 'AccuZipController@getDirectMailData')->name('web.direct-mail.process');

Route::get('direct-mail-select', 'AccuZipController@getSelectOption')->name('web.direct-mail.select.get');

Route::post('direct-mail-select', 'AccuZipController@saveSelectOption')->name('web.direct-mail.select.post');

Route::get('direct-mail-address', 'AccuZipController@getAddress')->name('web.direct-mail.address.get')->middleware('auth');

Route::post('direct-mail-address', 'AccuZipController@saveAddress')->name('web.direct-mail.address.post')->middleware('auth');

Route::get('direct-mail-payment', 'AccuZipController@getPayment')->name('web.direct-mail.payment.get')->middleware('auth');

Route::post('direct-mail-payment', 'AccuZipController@processPayment')->name('web.direct-mail.payment.post')->middleware('auth');

Route::post('direct-mail-get-count', 'AccuZipController@getTotalCount')->name('web.direct-mail.get.count');
// Direct mail route end here

Route::get('thank-you', function() {
    return view('success-message');
})->name('success.message');

Route::get('search-result', 'SearchController@index')->name('web.search.main');

// more page
Route::get('overview', function() {
    return view('overview');
})->name('web.ravi.overview');

Route::get('targeted-direct-mail', function() {
    return view('target');
})->name('web.ravi.targer');

Route::get('design-choices', function() {
    return view('chose-design');
})->name('web.ravi.design.chose');

Route::get('eddm', function() {
    return view('eddm');
})->name('web.ravi.eddm');

Route::get('pricing-and-sizes', function() {
    return view('prices-and-sizes');
})->name('web.ravi.prices.and.sizes');
// more page

Route::get('get-product-price', 'CommonController@getPrice');

// Payments Url Begain
Route::get('paypal-payment', 'PaymentController@pay')->name('payment');
Route::get('cancel', 'PaymentController@cancel')->name('payment.cancel');
Route::get('payment/success', 'PaymentController@success')->name('payment.success');

Route::get('/authorize','AuthorizeController@index');
Route::post('/authorize','AuthorizeController@chargeCreditCard');

// payment Url End

Route::get('gallery', function () {
    return view('gallery');
})->name('web.gallery');

Route::get('sendmail', 'AccuZipController@index')->name('how.we.work');
Route::get('sendmail/request', 'AccuZipController@requestAccuzip')->name('web.request.how.we.work');
Route::get('sendmail/request-quote','AccuZipController@RequestQuote')->name('web.request-quote.how.we.work');
Route::post('sendmail/update-quote', 'AccuZipController@updateQuote')->name('web.update-quote.how.we.work');
Route::get('sendmail/request-data', 'AccuZipController@requestEDDMData')->name('web.request-eddm.how.we.work');
Route::get('sendmail/product-detail/{slug}', 'AccuZipController@ProductDetail')->name('web.product-detail.how.we.work');
Route::get('sendmail/payment', 'AccuZipController@paymentGet')->name('web.how-we-worl-payment-get')->middleware('auth');
Route::post('sendmail/payment', 'AccuZipController@addInCartPayment')->name('web.update-quote.how.we.payment')->middleware('auth');
Route::post('sendmail/complete-order', 'AccuZipController@CompleteOrder')->name('web.how-we-work.complete.order')->middleware('auth');

Route::post('sendmail/upload-owl-list', 'AccuZipController@UploadOwnList')->name('web.request.how.we.own.list.upload');
Route::post('sendmail/own-list-payment', 'AccuZipController@OwnListPayment')->name('web.own-list-payment.how.we.work');

Route::get('how-we-work-payment-own-list', 'AccuZipController@ownListLoadPaymentPage')->name('how-we-work-own-list-load-payment');

Route::get('how-we-work-eddm-address', function() {
    return view('how-we-work-eddm-address');
})->name('web.address-get-quote.how.we.work-form')->middleware('auth');

Route::post('how-we-work-eddm-address-eddm', 'AccuZipController@eddmAddress')->name('web.address-get-quote.how.we.work-save')->middleware('auth');

Route::get('how-we-work-eddm-address-own-list', function() {
    return view('how-we-work-ownlist-address');
})->name('web.address-get-quote.how.we.work-form-own-list')->middleware('auth');

Route::post('how-we-work-eddm-address-save', 'AccuZipController@ownListAddress')->name('web.address-get-quote.how.we.work-save.ownlist')->middleware('auth');


Route::get('how-we-work-own-list-address', function() {
    return view('how-we-work-ownlist-address');
})->name('web.how.we-work-own-list-address');

Route::get('marketing-meterial', function () {
    return view('marketing-meterial');
})->name('web.marketing.meterial');

Route::get('office-stationery', function () {
    return view('office-stationery');
})->name('web.office.stationary');

Route::get('special-offers', function () {
    return view('special-offers');
})->name('web.special.offers');

Route::get('/{slug}/upload-design', 'ProductController@index')->name('web.upload.design');

Route::get('artwork-guideline', function () {
    return view('artwork-guideline');
})->name('web.artwork.guideline');

Route::get('contact-us', function() {
    return view('contact-us');
})->name('web.contact');

Route::get('about', function() {
    return view('about');
})->name('web.about');

Route::get('direct-mail', function() {
    return view('direct-mail');
})->name('web.direct.mail');

Route::get('blog', 'PostController@index')->name('web.blog');
Route::get('blog/{slug}', 'PostController@show')->name('web.blog.show');

Route::get('faq', function() {
    return view('faq');
})->name('web.faq');

Route::get('privacy-policy', function() {
    return view('privacy-policy');
})->name('web.privacy');

Route::get('tearms-condition', function() {
    return view('tearms-condition');
})->name('web.tearms.condition');

Route::get('list-locater', function() {
    return view('list-locater');
})->name('web.list.locater');



Route::get('checkout', function() {
    return view('checkout');
})->name('web.checkout');

Route::get('turnaround', function() {
    return view('turnaround');
})->name('web.turnaround');

Route::get('reseller', function() {
    return view('reseller');
})->name('web.reseller');

Route::post('custom-request-save', 'CustomRequestController@store')->name('web.customrequest.save');

Route::post('subscribe', 'NewsletterController@store')->name('web.subscribe.newsletter');



Route::get('order', 'OrderController@order')->name('web.order.checkout');

Route::post('upload-design-file/{id}','CartController@uploDesign')->name('upload-designfile-upload');


// image upload routes begain
// Route::get('image/upload','ImageUploadController@fileCreate');
Route::post('image/upload/store','ImageUploadController@fileStore');
Route::post('image/delete','ImageUploadController@fileDestroy');

Route::post('reseller-save', 'ResellerController@store')->name('web.reseller.save');

// image upload route end

Route::post('contact-us', 'Web\ContactController@store')->name('contact.save');

Route::get('admin','Admin\Auth\LoginController@login')->name('admin-login')->middleware('guest:admin');
// Route::get('admin-login','Admin\Auth\LoginController@login')->name('admin-login');
Route::post('admin', 'Admin\Auth\LoginController@adminlogin')->name('admin.login');
Route::get('admin-logout', 'Admin\Auth\LoginController@logout')->name('admin-logout');

Auth::routes(['verify' => true]);

Route::post('login~', 'Auth\CustomloginController@Login')->name('custom.login');
Route::get('logout', 'Auth\CustomloginController@Logout')->name('logout');

Route::group(['middleware' => ['verified','auth'],'prefix'=>'user'], function() {

    Route::get('/account', 'HomeController@index')->name('home');
    Route::get('/order', 'HomeController@order')->name('web.order');
    Route::get('order/{id}', 'HomeController@orderView')->name('web.order.view');
    Route::get('address-book', 'HomeController@addressBook')->name('web.address.book');

    Route::post('user-info/update', 'User\UserController@UpdateUserInfo')->name('web.user.update');
    Route::post('user-info/update-password', 'User\UserController@UpdatePassword')->name('web.user.password.update');
    Route::post('user-info/add-address', 'User\UserController@AddAddress')->name('web.user.address.add');

});

Route::get('cart', 'CartController@index')->name('web.cart.index');
Route::get('add-cart/{id}', 'CartController@addCart')->name('web.cart.add');
Route::get('update-cart', 'CartController@updateCart')->name('web.cart.update');
Route::get('destroy-cart', 'CartController@destroyCart')->name('web.cart.destroy');
Route::get('remove-cart/{id}', 'CartController@removeCart')->name('web.cart.remove');

Route::post('add-shipping-addresss', 'OrderController@addShipping')->name('web.shipping.address');
Route::post('add-billing-addresss', 'OrderController@addBilling')->name('web.billing.address');
Route::post('set-shipping-methods','OrderController@setShippingMethods')->name('web.setshipping.method');
Route::post('add-card', 'OrderController@addCard')->name('web.payment.option');