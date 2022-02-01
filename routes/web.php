<?php

use App\Http\Controllers\HomeController;
use App\Http\Livewire\Backend\MainDashboardSettings;
use App\Http\Livewire\Backend\AboutUs\AboutUsMainSettings;
use App\Http\Livewire\Backend\AccountSettings\AccountMainSettings;
use App\Http\Livewire\Backend\Downloads\DownloadsMainSettings;
use App\Http\Livewire\Backend\Events\EventsMainSettings;
use App\Http\Livewire\Backend\GeneralSettings\Donate\DonateSettings;
use App\Http\Livewire\Backend\GeneralSettings\Engage\EngageSettings;
use App\Http\Livewire\Backend\GeneralSettings\Regions\Constituency\ConstituencySettings;
use App\Http\Livewire\Backend\GeneralSettings\Regions\County\CountySettings;
use App\Http\Livewire\Backend\GeneralSettings\Regions\RegionSettings;
use App\Http\Livewire\Backend\GeneralSettings\Subscription\SubscriptionSettings;
use App\Http\Livewire\Backend\GeneralSettings\Volunteer\Category\VolunteerCategory;
use App\Http\Livewire\Backend\GeneralSettings\Volunteer\VolunteerSettings;
use App\Http\Livewire\Backend\HomePage\JonaStory\StorySettings;
use App\Http\Livewire\Backend\HomePage\OurAgenda\AgendaSettings;
use App\Http\Livewire\Backend\HomePage\Slider\SliderSettings;
use App\Http\Livewire\Backend\News\NewsMainSettings;
use App\Http\Livewire\Backend\PressStatement\PressMainSettings;
use App\Http\Livewire\Backend\SocialMedia\SocialMediaMainSettings;
use App\Http\Livewire\Backend\Trash\Subscribers\TrashedSubscribers;
use App\Http\Livewire\Backend\Videos\VideoSettings;
//use App\Http\Livewire\Backend\Gallery\GallerySettings;
use App\Http\Livewire\Frontend\Homepage\Agendas\More\MoreOnAgendas;
use App\Http\Livewire\Frontend\Homepage\Events\MoreOnEvents;
use App\Http\Livewire\Frontend\Homepage\HomePageSetting;
use App\Http\Livewire\Frontend\Homepage\Slides\MoreOnSliders;
use App\Http\Livewire\Frontend\JonaProfile\GrowthOfACity\MoreGrowthOfACity;
use App\Http\Livewire\Frontend\JonaProfile\PersonalJourney\MorePersonalJourney;
use App\Http\Livewire\Frontend\JonaProfile\PoliticalJourney;
use App\Http\Livewire\Frontend\JonaProfile\MuekeStory\MuekesStory;
use App\Http\Livewire\Frontend\JonaProfile\ServingThePeople\MoreServingThePeople;
use App\Http\Livewire\Frontend\JonaProfile\SuccessInTheOffice\MoreSuccessInTheOffice;
use App\Http\Livewire\Frontend\Media\Video;
use App\Http\Livewire\Frontend\Media\Gallery;
use App\Http\Livewire\Frontend\ModalForms\Donate\Donations;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');
Auth::routes(['verify' =>true]);

//=============================Frontend Routes====================================================+
	Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
   // Route::get('/', function () { return view('welcome');});
    Route::get('/profile', function () { return view('profile');});
	Route::get('/biography', function () { return view('biography');});
    //Route::get('/contactus', function () { return view('contactus');});
	//Route::get('/gallery', function () { return view('gallery');});
	//Route::get('/', HomePageSetting::class);                                                    //|
    Route::get('/jonathan-mueke-profile/', PoliticalJourney::class);                             //|
    Route::get('/personal-journey', MorePersonalJourney::class);  								//|
	Route::get('/muekes-story', MuekesStory::class); 																							//|
    Route::get('/serving-the-people', MoreServingThePeople::class);                             //|
    Route::get('/jonathans-success-in-the-office', MoreSuccessInTheOffice::class);              //|
    Route::get('/growth-of-a-city', MoreGrowthOfACity::class);                                  //|
    Route::get('/media', Video::class);
	Route::get('/media/gallery', Gallery::class); 																							//|
    Route::get('/more-about-agenda/{agenda}', MoreOnAgendas::class)->name('more-agenda');       //|
    Route::get('/more-info/{slider}', MoreOnSliders::class)->name('more-slide');                //|
    Route::get('/event-series/{event}', MoreOnEvents::class)->name('more-events');              //|
//================================================================================================+

//=============================Backend Routes=================================================================+
Route::group(['middleware'=>['web','auth','verified']],function()                                           //|
{                                                                                                           //|
    Route::get('account-setting', AccountMainSettings::class)->name('account')->middleware('can:isAdmin');  //|                                                                                                    //|
    Route::get('admin-why-mueke', AboutUsMainSettings::class);                                               //|
    Route::get('admin-who-is-mueke', SocialMediaMainSettings::class);                                       //|
    Route::get('admin-downloads', DownloadsMainSettings::class);                                            //|
    Route::get('admin-news', NewsMainSettings::class);                                                      //|
    Route::get('admin-events', EventsMainSettings::class);                                                  //|
    Route::get('admin-press-statement', PressMainSettings::class);                                          //|
    Route::get('admin-donate-settings',DonateSettings::class)->name('donate');                              //|
    Route::get('admin-engage-settings', EngageSettings::class)->name('engage');                             //|
    Route::get('admin-volunteer-settings', VolunteerSettings::class)->name('volunteer');                    //|
    Route::get('admin-volunteer-category', VolunteerCategory::class)->name('volunteerCategory');            //|
    Route::get('admin-subscription-settings', SubscriptionSettings::class)->name('subscribe');              //|
    Route::get('admin-region-settings', RegionSettings::class)->name('regions');                            //|
    Route::get('admin-home-slider-settings', SliderSettings::class)->name('home-slider');                   //|
    Route::get('admin-jonah-story-settings', StorySettings::class)->name('story');                          //|
    Route::get('admin-our-agenda-settings', AgendaSettings::class)->name('admin-our-agenda-settings');                         //|
    Route::get('main-dashboard', MainDashboardSettings::class)->name('dashboard');                          //|
    Route::get('video-setting', VideoSettings::class);
	//Route::get('gallery-setting', GallerySettings::class);	//|
                                                                                                            //|
    //import and export routes  //currently disabled using Livewire                                         //|___________________
	Route::get('county-import',[CountySettings::class, 'countyImport'])->name('countyImport');                              //|
	Route::get('county-export',[CountySettings::class, 'countyExport'])->name('countyExport');                              //|
	Route::get('donation-export',[DonateSettings::class, 'donationExport'])->name('donationExport');                        //|
	Route::get('constituency-export',[ConstituencySettings::class, 'constituencyExport'])->name('constituencyExport');      //|
	Route::get('subscription-export',[SubscriptionSettings::class, 'subscriptionExport'])->name('subscriptionExport');      //|

    //trashed routes

    Route::group(['middleware' => ['password.confirm']], function(){
	Route::get('trashed-subscriptions', TrashedSubscribers::class)->name('trashedSubscribers');
    });

});                                                                                                                             //|
//================================================================================================================================+

//Gallery
Route::get('/gallery', [App\Http\Controllers\Gallerycontroller::class, 'index'])->name('gallery');
//Route::get('/customerinfo', 'App\Http\Controllers\CustomerinfoController@index')->name('customerinfo');

//FrontEnd Donations Settings
Route::any('/donations.store', 'App\Http\Controllers\DonationsController@store')->name('donations');
Route::resource('/donations','App\Http\Controllers\DonationsController');


//FrontEnd AgendaSettings
Route::get('/agenda', 'App\Http\Controllers\AgendaController@index')->name('agenda');


//FrontEnd Success-in-the-office
Route::get('/success-in-the-office', 'App\Http\Controllers\SuccessController@index');

//FrontEnd ContactUs
Route::get('/contactus', 'App\Http\Controllers\ContactController@index')->name('contactus');
Route::post('/contactus', function(){$data = request(['firstname','lastname','phone','email','message']);
\Illuminate\Support\Facades\Mail::to('benjaminomitto@gmail.com')->send(new \App\Mail\ContactUs($data));
return redirect('/contactus')->with('flash','Message Sent Successfully');});

//Water
Route::get('agendas.show', 'App\Http\Controllers\AgendaController@show')->name('agendas.show');
Route::get('/agenda/lack-of-water', 'App\Http\Controllers\AgendazController@water')->name('lack-of-water');
Route::get('/agenda/healthcare', 'App\Http\Controllers\AgendazController@healthcare')->name('healthcare');
Route::get('/agenda/infrastructure', 'App\Http\Controllers\AgendazController@infrastructure')->name('infrastructure');
Route::get('/agenda/unemployment', 'App\Http\Controllers\AgendazController@unemployment')->name('unemployment');
Route::get('/agenda/hunger', 'App\Http\Controllers\AgendazController@hunger')->name('hunger');
Route::get('/agenda/statistical-data', 'App\Http\Controllers\AgendazController@stats')->name('statistical-data');

//Admin-Gallery
//Route::get('/about.show/{id:title}','App\Http\Controllers\WelcomeController@show')->name('about.show');
Route::get("/about/show/{id}", [App\Http\Controllers\WelcomeController::class, 'show'])->name('about.show');
//Route::get('about.show/{id}',function($id){return view('data',['data'=>AboutUs::findorFail($id)]);});
























Route::get('admin/gallery', App\Http\Livewire\Backend\Gallery\Gallery::class)->name('admin.gallery');
Route::post('gallery.store', 'App\Http\Controllers\GalleryController@store')->name('gallery.store');
Route::get('/gallery-setting', 'App\Http\Controllers\GalleryController@getGallery');
