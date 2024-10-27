<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Product; // Assuming this is the model for mobile products
use App\Models\Testimonial; // Assuming this is the model for testimonials

class HomeController extends Controller
{
   
    public function welcome()
    {
        // $products = Product::all();
        $mobileProducts = Product::all(); 
        $testimonials = Testimonial::all();
        
        return view('welcome', compact( 'testimonials','mobileProducts'));
    }


//     public function showMobileProducts()
// {
//     $mobileProducts = Product::all(); // Adjust query if you are filtering specific products
//     return view('welcome', compact('mobileProducts'));
// }

    public function createUser()
    {
        $user = new User;
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('admin12');
        $user->role_id = '1'; // Assuming 1 is the admin role ID
        $user->save();

        return 'User created successfully!';
    }
}
