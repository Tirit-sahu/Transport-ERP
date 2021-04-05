<?php

use Illuminate\Support\Facades\Route;


Route::get('/cache', function() {
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});

Route::get('/', function () {
    return view('login');
});

Route::get('/admin/index', 'Admin\DashboardPinSetController@home')->middleware('auth');

Route::get('encrypt/{string}', 'Admin\EncryptionController@encrypt');

Route::get('decrypt/{string}', 'Admin\EncryptionController@decrypt');

Route::get('checkMenuPassword', 'Admin\DashboardPinSetController@checkMenuPassword');

Route::get('menu-password-setting', 'Admin\DashboardPinSetController@menuPasswordSetting');

Route::get('changeMenuPassword', 'Admin\DashboardPinSetController@changeMenuPassword');


// ==============loading process===============

Route::get('/admin/loading','Admin\IndexController@index')->name('admin.index');
Route::get('/admin/receiving','Admin\IndexController@receiving')->name('admin.receiving');
Route::get('/getLoadingEntryDetails','Admin\IndexController@getLoadingEntryDetails');
// Route::get('/save-receiving-entry','Admin\IndexController@saveReceivingEntry');
Route::get('/getTruckDoucmtIndex','Admin\IndexController@getTruckDoucmtIndex');

// == Hemali payment ==
Route::resource('/admin/hemaliPayment', 'Admin\hemaliPaymentController');


//Company Master
Route::resource('/admin/company/session','Admin\SessionController')->middleware('auth');
Route::resource('/admin/company/company','Admin\CompanyController');
Route::resource('/admin/company/consignor','Admin\ConsignorController');
Route::resource('/admin/company/consignee','Admin\ConsigneeController');
Route::resource('/admin/company/bank','Admin\BankController');
Route::resource('/admin/company/emp','Admin\EmployeeController');


//place Master
Route::resource('/admin/place/place','Admin\PlaceController');
Route::resource('/admin/place/state','Admin\StateController');

//Goods Master
Route::resource('/admin/goods/item','Admin\ItemController');
Route::resource('/admin/goods/cate','Admin\ItemCategoryController');
Route::resource('/admin/goods/unit','Admin\unitController');

//Truck Master
Route::resource('/admin/truck/type','Admin\TruckTypesController');
Route::resource('/admin/truck/owner','Admin\TruckownerController');
Route::resource('/admin/truck/truck','Admin\TruckController');

//inventory
Route::resource('/admin/petrol/petrol','Admin\PetrolpumpController');
Route::resource('/admin/inv/head','Admin\IncomeExpensesHeadController');


//Loading Entery
Route::resource('admin/dispatch/load','Admin\LoadingEntryController');

Route::get('loadEdit', 'Admin\LoadingEntryController@getEditData');

Route::get('getTruckTrip', 'Admin\LoadingEntryController@getTruckTrip');



// Route::get('admin/dispatch/load/vehicle/{truck_number}/{owner_name}/{tructype_id}','Admin\LoadingEntryController@vehicle')->name('load.vehicle');

Route::get('/vehicle-store', 'Admin\LoadingEntryController@vehicle');

Route::get('/get-vehicle', 'Admin\LoadingEntryController@getVehicle');

Route::get('/consignor-store', 'Admin\LoadingEntryController@consignor');

Route::get('/get-consignor', 'Admin\LoadingEntryController@getConsignor');

Route::get('/consignee-store', 'Admin\LoadingEntryController@consignee');

Route::get('/get-consignee', 'Admin\LoadingEntryController@getConsignee');

Route::get('/place-store', 'Admin\LoadingEntryController@place');

Route::get('/get-place', 'Admin\LoadingEntryController@getPlace');

Route::get('/petrol-store', 'Admin\LoadingEntryController@petrol');

Route::get('/get-petrol', 'Admin\LoadingEntryController@getPetrol');

Route::get('/items-store', 'Admin\LoadingEntryController@storeItems');

Route::get('/get-items', 'Admin\LoadingEntryController@getItems');

Route::get('/get-items-for-loading', 'Admin\LoadingEntryController@getItemsForLoading');


Route::get('/hemal-store', 'Admin\LoadingEntryController@storeHemal');

Route::get('/get-hemal', 'Admin\LoadingEntryController@getHemal');


//Loading Receive 

// Route::get('/truck_number_get', 'Admin\LoadingReceiveController@getTruckNumber');
// Route::get('/load-fetch','Admin\LoadingPaymentController@getAddLoad');

Route::resource('admin/dispatch/receive','Admin\LoadingReceiveController');

Route::resource('admin/dispatch/payment','Admin\LoadingPaymentController');

Route::get('receive-store', 'Admin\LoadingReceiveController@receive');

Route::resource('admin/maintain/truckdocs','Admin\TruckDocumentController');

Route::get('/truck-details', 'Admin\TruckDocumentController@getTruckDetails');

Route::get('/getLoadingNumber', 'Admin\LoadingEntryController@getLoadingNumber');

Route::get('/showReceivingEntry', 'Admin\LoadingReceiveController@showReceivingEntry');

Route::get('/editReceivingEntry', 'Admin\LoadingReceiveController@editReceivingEntry');

Route::get('admin/receiving/delete/{id}', 'Admin\LoadingReceiveController@destroy');

Route::get('/save-receiving-entry', 'Admin\LoadingReceiveController@store');

Route::get('/admin/receivingPayment', 'Admin\LoadingPaymentController@receivingPayment');

Route::post('/receiving/payment', 'Admin\LoadingPaymentController@submitReceivingPayment');

Route::get('/payment/invoice/{id}', 'Admin\LoadingPaymentController@payment_invoice');

Route::get('/paymentReport', 'Admin\LoadingPaymentController@paymentReport');



//user
Route::resource('/admin/regi','Admin\NewRegisterController');

Route::put('/admin/company/session/{id}/status','Admin\SessionController@status')->name('session.status');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// GET SINGLE RECORD USING AJAX

Route::get('/editDataGet', 'Admin\commonController@EditData');



Route::get('/pdf','Admin\TruckDocumentController@makePDF');

//Drivers route
Route::get('/driver/create', 'Admin\DriverController@create')->name('driver.create');

Route::post('/driverStore', 'Admin\DriverController@store');

Route::get('/driverShow', 'Admin\DriverController@show');

Route::get('/driverEdit/{id}', 'Admin\DriverController@edit');

Route::post('/driverStore/update/{id}', 'Admin\DriverController@update');

Route::get('/driverDestroy/{id}', 'Admin\DriverController@delete');

Route::get('/get-select-option', 'Admin\commonController@getSelectOption');

Route::get('/get-select-option2', 'Admin\commonController@getSelectOption2');



// DRIVER MAPPING
Route::get('/driverMapping', 'Admin\DriverMappingController@index')->name('driverMapping');

Route::post('/driverMappingStore', 'Admin\DriverMappingController@store');

Route::get('/driverMappingReport', 'Admin\DriverMappingController@show');

Route::get('/driverMappingEdit/{id}', 'Admin\DriverMappingController@edit');

Route::post('/driverMappingUpdate/{id}', 'Admin\DriverMappingController@update');

Route::get('/driverMappingDelete/{id}', 'Admin\DriverMappingController@delete');

Route::post('/driverMappingLeave', 'Admin\DriverMappingController@driverMappingLeave');


// Item Isuue
Route::get('/itemIssue', 'Admin\ItemIssueController@create');

Route::post('/itemIssueStore', 'Admin\ItemIssueController@store');

Route::get('/itemIssueReport', 'Admin\ItemIssueController@show');

Route::get('/ItemIssueDetails/{id}', 'Admin\ItemIssueController@showItemIssueDetails');

Route::get('/itemIssueDetailsDelete/{id}', 'Admin\ItemIssueController@itemIssueDetailsDelete');

Route::get('/itemIssueDelete/{id}', 'Admin\ItemIssueController@destroy');

Route::get('/ItemIssueEdit/{id}', 'Admin\ItemIssueController@edit');

Route::get('/getEditItemIssueDetails', 'Admin\ItemIssueController@getEditItemIssueDetails');

Route::post('/itemIssueUpdate/{id}', 'Admin\ItemIssueController@update');

Route::get('getGodownForItemIssue', 'Admin\ItemIssueController@getGodownForItemIssue');

Route::get('get-unit-for-item-issue', 'Admin\ItemIssueController@getUnitForItemIssue');





// Head Master 
Route::get('/headMaster', 'Admin\HeadMasterController@index');

Route::post('/HeadStore', 'Admin\HeadMasterController@store');

Route::get('/head/edit/{id}', 'Admin\HeadMasterController@edit');

Route::post('/HeadUpdate/{id}', 'Admin\HeadMasterController@update');

Route::get('/head/destroy/{id}', 'Admin\HeadMasterController@destroy');


//TRUCK SERVICE ROUTE

Route::get('/truckService', 'Admin\TruckServiceController@create');

Route::post('/truckServiceStore', 'Admin\TruckServiceController@store');

Route::get('/truckServiceShow', 'Admin\TruckServiceController@show');

Route::get('/truckServiceDetails/{id}', 'Admin\TruckServiceController@truckServiceDetails');

Route::get('/truckServiceEdit/{id}', 'Admin\TruckServiceController@edit');

Route::get('/getEditTruckServiceDetails', 'Admin\TruckServiceController@getEditTruckServiceDetails');

Route::post('/truckServiceUpdate/{id}', 'Admin\TruckServiceController@truckServiceUpdate');



// TRUCK OTHER EXPENSES

Route::get('/TruckOtherExpense', 'Admin\TruckOtherExpenseController@create');

Route::post('/TruckOtherExpenseStore', 'Admin\TruckOtherExpenseController@store');

Route::get('/TruckOtherExpenseShow', 'Admin\TruckOtherExpenseController@show');

Route::get('/TruckOtherExpenseEdit/{id}', 'Admin\TruckOtherExpenseController@edit');

Route::post('/TruckOtherExpenseUpdate/{id}', 'Admin\TruckOtherExpenseController@update');


// Account route

Route::get('/generateSalary', 'Admin\GenerateSalary@create');

Route::post('/generateSalaryStore', 'Admin\GenerateSalary@store');

Route::get('/generateSalaryShow', 'Admin\GenerateSalary@show');

Route::get('/generateSalaryEdit/{id}', 'Admin\GenerateSalary@edit');

Route::post('/generateSalaryStoreUpdate/{id}', 'Admin\GenerateSalary@update');

Route::get('/generateSalaryEdit/{id}', 'Admin\GenerateSalary@edit');

Route::get('/payEMI', 'Admin\PayEMIController@create');

Route::get('openingBal', 'Admin\AccountSettingController@openingBal');

Route::post('/openingBal/store', 'Admin\AccountSettingController@store');

Route::get('openingBal/destroy/{id}', 'Admin\AccountSettingController@destroy');

Route::get('truckIncExp', 'Admin\AccountSettingController@incomeExpensesReport');


//COMMON ROUTE 

Route::get('/commonDeleteRecord', 'Admin\commonController@commonDeleteRecord');

Route::get('/dbBackup', 'Admin\commonController@databaseBackup');

Route::get('/COMMOMdestroy', 'Admin\commonController@destroy');

Route::get('/rackHandling', 'Admin\RackHandlingController@index');

Route::post('/rackHandlingStore', 'Admin\RackHandlingController@store');

Route::get('/rackHandlingShow', 'Admin\RackHandlingController@show');

Route::get('/rackHandlingEdit/{id}', 'Admin\RackHandlingController@edit');

Route::post('/rackHandlingUpdate/{id}', 'Admin\RackHandlingController@update');

Route::get('fetchSelectOption', 'Admin\commonController@fetchSelectOption');


// Master ========

Route::get('/supplierDatatable', 'Admin\supplierController@show');

Route::get('/supplierAdd', 'Admin\supplierController@create');

Route::post('/supplier-store', 'Admin\supplierController@store');

Route::get('supplierEdit/{id}', 'Admin\supplierController@edit');

Route::post('supplier-update/{id}', 'Admin\supplierController@update');

Route::get('godownCreate', 'Admin\godownController@create');

Route::get('godownDatatable', 'Admin\godownController@show');

Route::post('godown-store', 'Admin\godownController@store');

ROute::get('godownEdit/{id}','Admin\godownController@edit');

Route::post('godown-update/{id}', 'Admin\godownController@update');

// Purchase Entry

Route::get('purchase-entry-create', 'Admin\purchaseEntryController@create');

Route::post('purchase-entry-store', 'Admin\purchaseEntryController@store');

Route::get('serial-number-store', 'Admin\purchaseEntryController@serialNumberStore');

Route::get('purchase-entry-report', 'Admin\purchaseEntryController@purchaseEntryReport');

Route::get('purchase-item-details/{id}', 'Admin\purchaseEntryController@purchaseItemDetails');

Route::get('getItemSerialNumber', 'Admin\purchaseEntryController@getItemSerialNumber');

Route::get('purchase-entry-pdf/{id}', 'Admin\purchaseEntryController@purchaseEntryPdf');



// ======== Tyre Mapping ========

Route::get('tyre-mapping-create', 'Admin\TyreMappingController@create');

Route::get('getTyreType', 'Admin\TyreMappingController@getTyreType');

Route::get('getTyreTypeName', 'Admin\TyreMappingController@getTyreTypeName');

Route::post('tyre-mapping-create', 'Admin\TyreMappingController@store');

Route::get('tyre-mapping-datatables', 'Admin\TyreMappingController@show');

Route::get('getSerialNumber', 'Admin\TyreMappingController@getSerialNumber');

Route::get('otp-for-tyre-mapping', 'Admin\TyreMappingController@OTPForTyreMapping');

Route::post('tyre-mapping-otp-validate', 'Admin\TyreMappingController@tyreMappingOtpValidate');


// ============ Opening ============

Route::get('tyre-opening-record', 'Admin\TyreOpeningBalance@create');

Route::post('tyre-opening-store', 'Admin\TyreOpeningBalance@store');

Route::get('tyre-opening-record-datatables', 'Admin\TyreOpeningBalance@show');

Route::get('show-all-tyre-opening-record-datatables', 'Admin\TyreOpeningBalance@showAllTyreFromTruck');

Route::get('tyre-opening-edit/{id}', 'Admin\TyreOpeningBalance@edit');

Route::post('tyre-opening-update/{id}', 'Admin\TyreOpeningBalance@update');


Route::get('battery-opening-balance-create', 'Admin\BatteryOpeningBalanceController@create');

Route::post('battery-opening-balance-store', 'Admin\BatteryOpeningBalanceController@store');

Route::get('battery-opening-balance-datatables', 'Admin\BatteryOpeningBalanceController@show');

Route::get('show-all-battery-opening-record-datatables', 'Admin\BatteryOpeningBalanceController@showAllBatteryFromTruck');

Route::get('battery-opening-balance-edit/{id}', 'Admin\BatteryOpeningBalanceController@edit');

Route::post('battery-opening-balance-update/{id}', 'Admin\BatteryOpeningBalanceController@update');


// ========== WHEEL GREASING ==========

Route::get('wheel-greasing-create', 'Admin\wheelGreasingController@create');

Route::get('getDriverFromTruck', 'Admin\commonController@getDriverFromTruck');

Route::post('wheel-greasing-store', 'Admin\wheelGreasingController@store');

Route::get('wheel-greasing-show', 'Admin\wheelGreasingController@show');

Route::get('wheel-greasing-edit/{id}', 'Admin\wheelGreasingController@edit');

Route::post('wheel-greasing-update/{id}', 'Admin\wheelGreasingController@update');

// ========== OIL REFILLING ==========

Route::get('oil-refilling-create', 'Admin\OilRefillingController@create');

Route::post('oil-refilling-store', 'Admin\OilRefillingController@store');

Route::get('oil-refilling-show', 'Admin\OilRefillingController@show');

Route::get('oil-refilling-edit/{id}', 'Admin\OilRefillingController@edit');

Route::post('oil-refilling-update/{id}', 'Admin\OilRefillingController@update');


// ======== GENERATE BILL ========

Route::get('generate-ltr-bill', 'Admin\generateLTRBILLController@generateLtrBill');

Route::post('store-ltr-bill', 'Admin\generateLTRBILLController@storeLtrBill');

Route::get('show-ltr-bill', 'Admin\generateLTRBILLController@show');

Route::get('invoice-ltr-bill/{id}', 'Admin\generateLTRBILLController@invoiceLTR');


Route::get('generate-bill', 'Admin\generateBILLController@generateBill');


// UREA REFILLING  

Route::get('urea-refilling-create', 'Admin\UreaRefillingController@create');

Route::post('urea-refilling-store', 'Admin\UreaRefillingController@store');

Route::get('urea-refilling-show', 'Admin\UreaRefillingController@show');

Route::get('urea-refilling-edit/{id}', 'Admin\UreaRefillingController@edit');

Route::post('urea-refilling-update/{id}', 'Admin\UreaRefillingController@update');


// Rack Handling Payment
Route::get('rackHandlingPayment', 'Admin\RackHandlingController@rackHandlingPayment');

Route::get('get-vehicle-with-gate-pass', 'Admin\RackHandlingController@getVehicleWithGatePass');

Route::post('rackHandlingPaymentStore', 'Admin\RackHandlingController@rackHandlingPaymentStore');

Route::get('rackHandlingPaymentShow', 'Admin\RackHandlingController@rackHandlingPaymentShow');


// Stock Report

Route::get('stock-report', 'Admin\SctockReportController@stockReport')->name('stock.report');



// Account Entry
Route::get('/accountEntry', function () {
    return view('admin.account_entry');
});

