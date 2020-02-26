<?php
///LANDING ROUTES
    //welcome
    Route::get('/', 'WelcomeController@index')->name('land');
    //get-product-AJAX
    Route::get('/getProduct/{id}', [
        'uses' => 'SuperAdmin\ProductController@getProduct',
        'as'   => 'getProduct'
        ]); 
    //cart-add
    Route::post('/add-to-cart', [
        'uses' => 'CartController@addToCart',
        'as'   => 'addToCart'
        ]); 
    //cart-all
    Route::get('/view-cart', [
        'uses' => 'CartController@viewCart',
        'as'   => 'viewCart'
        ]);
        //clear-cart 
    Route::get('/clear-cart', [
        'uses' => 'CartController@clearCart',
        'as'   => 'clearCart'
        ]); 
        //clear-cart 
    Route::get('/all-in-cart', [
        'uses' => 'CartController@allInCart',
        'as'   => 'allInCart'
        ]); 
        //update-cart 
    Route::post('/update-cart', [
        'uses' => 'CartController@updateCart',
        'as'   => 'updateCart'
        ]); 
    //get-distance-AJAX
    Route::get('/getDistance/{id}', [
        'uses' => 'WareHouseController@getDistance',
        'as'   => 'getProduct'
        ]); 
    //get-shipping-cost-AJAX
    Route::get('/getShippingCost/{id}', [
        'uses' => 'ShippingCostController@getShippingCost',
        'as'   => 'getShippingCost'
        ]); 
    
    
Auth::routes();
//logout
Route::get('/logoutt', function(){
Auth::logout();
return Redirect::route('land');
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
    //show-add-blog
    Route::get('/blog-form', [
        'uses' => 'SuperAdmin\BlogController@addBlogForm',
        'as'   => 'addBlogForm'
        ]);
        //add-blog
    Route::post('/add-blog', [
        'uses' => 'SuperAdmin\BlogController@add',
        'as'   => 'addBlog'
        ]);
    //show-add-blog
    Route::get('/all-blogs', [
        'uses' => 'SuperAdmin\BlogController@allTable',
        'as'   => 'editBlog'
        ]);
        //get-blog-ajax    
    Route::get('/getBlog/{id}', [
        'uses' => 'SuperAdmin\BlogController@getBlog',
        'as'   => 'getBlog'
        ]); 
        //update-blog    
    Route::post('/update-blog', [
        'uses' => 'SuperAdmin\BlogController@updateBlog',
        'as'   => 'updateBlog'
        ]);
        //update-blog    
    Route::get('/delete-blog/{id}', [
        'uses' => 'SuperAdmin\BlogController@deleteBlog',
        'as'   => 'deleteBlog'
        ]);
});

//User group routes
Route::group(['prefix' => '/user', 'as' => 'user.', 'middleware' => ['auth', 'user']], function(){

    //welcome
    Route::get('/', 'User\WelcomeController@index')->name('land');
    //get-product-AJAX
    Route::get('/getProduct/{id}', [
        'uses' => 'User\ProductController@getProduct',
        'as'   => 'getProduct'
        ]); 
    //cart-add
    Route::post('/add-to-cart', [
        'uses' => 'User\CartController@addToCart',
        'as'   => 'addToCart'
        ]); 
    //cart-all
    Route::get('/view-cart', [
        'uses' => 'User\CartController@viewCart',
        'as'   => 'viewCart'
        ]);
        //clear-cart 
    Route::get('/clear-cart', [
        'uses' => 'User\CartController@clearCart',
        'as'   => 'clearCart'
        ]); 
        //clear-cart 
    Route::get('/all-in-cart', [
        'uses' => 'User\CartController@allInCart',
        'as'   => 'allInCart'
        ]); 
        //update-cart 
    Route::post('/update-cart', [
        'uses' => 'User\CartController@updateCart',
        'as'   => 'updateCart'
        ]); 
        //update-cart 
    Route::post('/order-product', [
        'uses' => 'User\OrderController@order',
        'as'   => 'order'
        ]); 
    //get-shipping-cost-AJAX
    Route::get('/getShippingCost/{id}', [
        'uses' => 'User\ShippingCostController@getShippingCost',
        'as'   => 'getShippingCost'
        ]); 
        //invoice
    Route::get('/generate-invoice', [
        'uses' => 'User\InvoiceController@generateInvoice',
        'as'   => 'generateInvoice'
        ]); 
    });
