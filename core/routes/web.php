<?php
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\contactusController;
use App\Http\Controllers\faqs_viwe;
use App\Http\Controllers\UpdatesController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\OnboardingController;
use App\Http\Controllers\FilesController;
use App\Http\Controllers\Contact_us;
use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainHomeController;
use App\Http\Controllers\MainAboutController;
use App\Http\Controllers\GoalsController;
use App\Http\Controllers\DataTablesController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\SiteMapController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\ChangesController;

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






Route::resource('products', ProductController::class);






// Language Route
Route::post('/lang', [LanguageController::class, 'index'])->middleware('LanguageSwitcher')->name('lang');
// For Language direct URL link
Route::get('/lang/{lang}', [LanguageController::class, 'change'])->middleware('LanguageSwitcher')->name('langChange');
Route::get('/locale/{lang}', [LanguageController::class, 'locale'])->middleware('LanguageSwitcher')->name('localeChange');
// .. End of Language Route

// Backend Routes
Route::get('/login', function () {
    return redirect('/');
});
Route::get('/register', function () {
    return redirect('/');
});

// RSS Feed Routes
if (env("RSS_STATUS", 0)) {
    Route::feeds();
}


//= = = = = = = = = = = = = = = = = = //
// C O N N E C T I O N S  & P O S T S //
//= = = = = = = = = = = = = = = = = = //

//conttact us page post
Route::post('tcon', [contact_us::class, 'store_en']);
Route::post('ar/tcon', [contact_us::class, 'store_ar']);






// datatables
Route::get('datatables', [FilesController::class, 'index'])->name('projects');
Route::post('add-update-files', [FilesController::class, 'store']);
Route::post('edit-files', [FilesController::class, 'edit']);
Route::post('delete-files', [FilesController::class, 'destroy']);









//= = = = = = = = = = //
// P A G E S & L N G  //
//= = = = = = = = = = //


//form Faqs
Route::post('contactus', [contactusController::class, 'store_en']);
Route::post('ar/contactus', [contactusController::class, 'store_ar']);

// updates page
Route::get('updates', [UpdatesController::class, 'index_en']);
Route::get('ar/updates', [UpdatesController::class, 'index_ar']);


// Documents
Route::get('documents', [DocumentsController::class, 'index_en']);
Route::get('ar/documents', [DocumentsController::class, 'index_ar']);


//Onboarding
Route::get('onboarding', [OnboardingController::class, 'index_en']);
Route::get('ar/onboarding', [OnboardingController::class, 'index_ar']);


//sitemap
Route::get('sitemap', function () {
    $lang = 'en';
    return view('sitemap', compact('lang'));
});
Route::get('/ar/sitemap', function () {
    $lang = 'ar';
    return view('sitemap', compact('lang'));
});


//terms-and-conditions
Route::get('terms-and-conditions', function () {
    $lang = 'en';
    return view('terms-and-conditions', compact('lang'));
});
Route::get('/ar/terms-and-conditions', function () {
    $lang = 'ar';
    return view('terms-and-conditions', compact('lang'));
});

//privacy-policy
Route::get('privacy-policy', function () {
    $lang = 'en';
    return view('privacy-policy', compact('lang'));
});
Route::get('/ar/privacy-policy', function () {
    $lang = 'ar';
    return view('privacy-policy', compact('lang'));
});
//

//disclaimer
Route::get('disclaimer', function () {
    $lang = 'en';
    return view('disclaimer', compact('lang'));
});
Route::get('/ar/disclaimer', function () {
    $lang = 'ar';
    return view('disclaimer', compact('lang'));
});
//

//accessibility-policy
Route::get('accessibility-policy', function () {
    $lang = 'en';
    return view('accessibility-policy', compact('lang'));
});
Route::get('/ar/accessibility-policy', function () {
    $lang = 'ar';
    return view('accessibility-policy', compact('lang'));
});
//
// Social Auth
Route::get('/oauth/{driver}', [SocialAuthController::class, 'redirectToProvider'])->name('social.oauth');
Route::get('/oauth/{driver}/callback', [SocialAuthController::class, 'handleProviderCallback'])->name('social.callback');

Route::Group(['prefix' => env('BACKEND_PATH')], function () {
    Auth::routes();
});
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

// Start of Frontend Routes
// ../site map
Route::get('/faqs', [faqs_viwe::class, 'index_en'])->name('faqs_en');
Route::get('ar/faqs', [faqs_viwe::class, 'index_ar'])->name('faqs_ar');


Route::get('/contact-us', [Contact_us::class, 'index_en'])->name('contact_m_en');
Route::get('ar/contact-us', [Contact_us::class, 'index_ar'])->name('contact_m_ar');

Route::get('/sitemap.xml', [SiteMapController::class, 'siteMap'])->name('siteMap');
Route::get('/{lang}/sitemap', [SiteMapController::class, 'siteMap'])->name('siteMapByLang');

Route::get('/', [MainHomeController::class, 'home_en'])->name('Home');
Route::get('/about', [MainAboutController::class, 'About_en']);
Route::get('ar/about', [MainAboutController::class, 'About_ar']);


Route::get('/benefits-and-goals', [GoalsController::class, 'goals_en']);
Route::get('ar/benefits-and-goals', [GoalsController::class, 'goals_ar']);





Route::get('/ar', [MainHomeController::class, 'home_ar'])->name('Home');

Route::post('/form-submit', [HomeController::class, 'formSubmit'])->name('formSubmit');

// ../home url
Route::get('/home', [MainHomeController::class, 'home_en'])->name('HomePage');
Route::get('/{lang?}/home', [MainHomeController::class, 'home_ar'])->name('HomePageByLang');
// ../subscribe to newsletter submit  (ajax url)
Route::post('/subscribe', [HomeController::class, 'subscribeSubmit'])->name('subscribeSubmit');
// ../Comment submit  (ajax url)
Route::post('/comment', [HomeController::class, 'commentSubmit'])->name('commentSubmit');
// ../Order submit  (ajax url)
Route::post('/order', [HomeController::class, 'orderSubmit'])->name('orderSubmit');
// ..Custom URL for contact us page ( www.site.com/contact )
Route::get('/contact', [HomeController::class, 'ContactPage'])->name('contactPage');
Route::get('/{lang?}/contact', [HomeController::class, 'ContactPageByLang'])->name('contactPageByLang');
// ../contact message submit  (ajax url)
Route::post('/contact/submit', [HomeController::class, 'ContactPageSubmit'])->name('contactPageSubmit');
// ..if page by name ( ex: www.site.com/about )
//Route::get('/topic/{id}', [HomeController::class, 'topic'])->name('FrontendPage');
// ..if page by user id ( ex: www.site.com/user )
Route::get('/user/{id}', [HomeController::class, 'userTopics'])->name('FrontendUserTopics');
Route::get('/{lang?}/user/{id}', [HomeController::class, 'userTopicsByLang'])->name('FrontendUserTopicsByLang');
// ../search
Route::get('/search', [HomeController::class, 'searchTopics'])->name('searchTopics');

// ..Topics url  ( ex: www.site.com/news/topic/32 )
Route::get('/{section}/topic/{id}', [HomeController::class, 'topic'])->name('FrontendTopic');
Route::get('/{lang?}/{section}/topic/{id}', [HomeController::class, 'topicByLang'])->name('FrontendTopicByLang');

// ..Sub category url for Section  ( ex: www.site.com/products/2 )
Route::get('/{section}/{cat}', [HomeController::class, 'topics'])->name('FrontendTopicsByCat');
Route::get('/{lang?}/{section}/{cat}', [HomeController::class, 'topicsByLang'])->name('FrontendTopicsByCatWithLang');

// ..Section url by name  ( ex: www.site.com/news )
Route::get('/{section}', [HomeController::class, 'topics'])->name('FrontendTopics');
Route::get('/{lang?}/{section}', [HomeController::class, 'topicsByLang'])->name('FrontendTopicsByLang');

// ..SEO url  ( ex: www.site.com/title-here )
Route::get('/{seo_url_slug}', [HomeController::class, 'SEO'])->name('FrontendSEO');
Route::get('/{lang?}/{seo_url_slug}', [HomeController::class, 'SEOByLang'])->name('FrontendSEOByLang');

// ..if page by name and language( ex: www.site.com/ar/about )
//Route::get('/{lang?}/topic/{id}', [HomeController::class, 'topicByLang'])->name('FrontendPageByLang');
// .. End of Frontend Route

