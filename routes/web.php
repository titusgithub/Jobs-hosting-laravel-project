<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

//Common Resource Routes:
//index - show all listings
//show - show single listing
//create - show form to create new listing
//store - store new listinng
//edit - show foem to edit listing
//update - Update listing
//Destroy - Delete listing

//All Listings
Route::get('/', [ListingController::class, 'index']);

// show Create form
Route::get('/listings/create', 
[ListingController::class, 'create'])->middleware("auth");

//Store listing Data
Route::post("/listings",
[ListingController::class,'store'])->middleware("auth");

 //Show Edit Form
Route::get("/listings/{listing}/edit",
[ListingController::class, "edit"])->middleware("auth");

// Update listing
Route::put("/listings/{listing}",
[ListingController::class, "update"])->middleware("auth");

// delete listing
Route::delete("/listings/{listing}",
[ListingController::class, "destroy"])->middleware("auth");

 //Manage Listings
 Route::get("/listings/manage", 
 [ListingController::class, "manage"])->middleware("auth");

//single listing
Route::get("/listings/{listing}",
[ListingController::class,'show']);

//Show Register/Create Form
Route::get("/register",
 [UserController::class, "create"])->middleware("guest");

 //Create New User
 Route::post("/users", 
[UserController::class, "store"]);

//log user out
Route::post("/logout", [UserController::class, "logout"])->middleware("auth");

//show login form
Route::get("/login", [UserController::class, "login"])->name("login")
->middleware("guest");

//log in user
Route::post("/users/authenticate",
 [UserController::class, "authenticate"]);

