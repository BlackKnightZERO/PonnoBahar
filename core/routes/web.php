<?php

Route::get('/', 'WelcomeController@index')->name('land');
Auth::routes();
//logout
Route::get('/logoutt', function(){
Auth::logout();
return Redirect::route('home');
})->name('logoutt');

//SuperAdmin group routes
Route::group(['prefix' => '/superadmin', 'as' => 'super.admin.', 'middleware' => ['auth', 'superadmin']], function(){
	//Dashboard
    Route::get('/dashboard', [
        'uses' => 'SuperAdmin\DashboardController@index',
        'as'   => 'dashboard'
        ]);
    //Profile_View
    Route::get('/profile', [
        'uses' => 'SuperAdmin\ProfileController@index',
        'as'   => 'profile'
        ]);
    //Profile_Update
    Route::post('/update-profile', [
        'uses' => 'SuperAdmin\ProfileController@updateProfile',
        'as'   => 'updateProfile'
        ]);
    //Password_Update
    Route::post('/update-password', [
        'uses' => 'SuperAdmin\ProfileController@updatePassword',
        'as'   => 'updatePassword'
        ]);
    ///
    // PRODUCT SETTINGS
    ///
    //Add_Category    
    Route::post('/add-category', [
        'uses' => 'SuperAdmin\CategoryController@add',
        'as'   => 'addCategory'
        ]);
    //Add-subcategory    
    Route::post('/add-subcategory', [
        'uses' => 'SuperAdmin\SubcategoryController@add',
        'as'   => 'addSubCategory'
        ]);
    //Add-Attribute    
    Route::post('/add-attribute', [
        'uses' => 'SuperAdmin\AttributeController@add',
        'as'   => 'addAttribute'
        ]);
    //get-subcat    
    Route::get('/getSubCat/{id}', [
        'uses' => 'SuperAdmin\AttributeController@getSubCategoryForParent',
        'as'   => 'getSubCat'
        ]);
    //get-atts    
    Route::get('/getAttr/{id}', [
        'uses' => 'SuperAdmin\AttributeController@getAttributesForParent',
        'as'   => 'getAttr'
        ]);
    //product    
    Route::get('/product', [
        'uses' => 'SuperAdmin\ProductController@index',
        'as'   => 'product'
        ]);
        //add-product    
    Route::post('/add-product', [
        'uses' => 'SuperAdmin\ProductController@add',
        'as'   => 'addProduct'
        ]);
    ///
    // GENERAL SETTINGS
    ///
    //logo-title    
    Route::get('/settings', [
        'uses' => 'SuperAdmin\GeneralSettingsController@showSettings',
        'as'   => 'showSettingsForm'
        ]);
    //update-logo-title    
    Route::post('/update-logo-title', [
        'uses' => 'SuperAdmin\GeneralSettingsController@updateLogoTitle',
        'as'   => 'updateLogoTitle'
        ]);
    //footer    
    Route::post('/update-contact-settings', [
        'uses' => 'SuperAdmin\GeneralSettingsController@updateContactSettings',
        'as'   => 'updateContactSettings'
        ]);
    ///
    // WEBSITE SETTINGS
    ///
    //landing-items-1  
    Route::get('/landing-items-1', [
        'uses' => 'SuperAdmin\WebsiteSettingsController@landingIteams1',
        'as'   => 'showlandingIteamsForm1'
        ]);
    //landing-items-2 
    Route::get('/landing-items-2', [
        'uses' => 'SuperAdmin\WebsiteSettingsController@landingIteams2',
        'as'   => 'showlandingIteamsForm2'
        ]);
    //landing-items-3 
    Route::get('/landing-items-3', [
        'uses' => 'SuperAdmin\WebsiteSettingsController@landingIteams3',
        'as'   => 'showlandingIteamsForm3'
        ]);
        //Footer-items 
    Route::get('/footer-items', [
        'uses' => 'SuperAdmin\WebsiteSettingsController@footerItems',
        'as'   => 'footerIteamsForm'
        ]);
        //Footer-Update 
    Route::post('/update-footer', [
        'uses' => 'SuperAdmin\WebsiteSettingsController@updateFooter',
        'as'   => 'updateFooter'
        ]);
    //About-Us
    Route::get('/about-us', [
        'uses' => 'SuperAdmin\WebsiteSettingsController@showAboutUs',
        'as'   => 'showAboutUs'
        ]);
        //Footer-Update 
    Route::post('/update-about-us', [
        'uses' => 'SuperAdmin\WebsiteSettingsController@updateAboutUs',
        'as'   => 'updateAboutUs'
        ]);
        //Slider-Update 
    Route::post('/update-slider', [
        'uses' => 'SuperAdmin\WebsiteSettingsController@updateSlider',
        'as'   => 'updateLandingSlider'
        ]);
    ///
    // BLOG SETTINGS
    ///
    //landing-items-1  
    Route::get('/blogs', [
        'uses' => 'SuperAdmin\BlogController@index',
        'as'   => 'showBlog'
        ]);
});


