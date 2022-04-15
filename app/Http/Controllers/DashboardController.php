<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use App\Models\User;
use App\Models\client;
use App\Models\message;
use App\Models\photo;
use GuzzleHttp\Middleware;
use Carbon\Carbon;


class DashboardController extends Controller
{

    // public  function __construct()

    // {
    //     $this->Middleware('auth');       
    // }
 
 
    public function dashboard()
    {
        if(Auth::check()){
            
            return view('home.dashboard');
        }
  
        return redirect("login")->withSuccess('Opps! You have to login to get here');
    }


    public function editProfilePage()
    {

        // $profile = User::
        return view('home.edit-profile');
    }



    public function ShowMyProfile()
    {

         $clientCount = client::where('user_id', auth()->user()->id)->count();

         $MessageCount = message::where('user_id', auth()->user()->id)->count();

         $PhotoCount = photo::where('user_id', auth()->user()->id)->count();
        return view('home.my-profile', [ 'clientCount' => $clientCount, 'MessageCount' => $MessageCount, 'PhotoCount' => $PhotoCount ]);
    }


    public function UpdateMyProfile( Request $request, $id)
    {

        
        $request->validate([ 
            'name' =>'required',
            'email' =>'required',
            'phone' =>'required',
            'logo' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'banner' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);

        if ($request->hasFile('logo') ||  $request->hasFile('banner')) {

            $SaveLogo =  $request->file('logo')->getClientOriginalName();
            $logopath = $request->file('logo')->store('public/logo');


            $SaveBanner =  $request->file('banner')->getClientOriginalName();
            $bannerpath = $request->file('banner')->store('public/banners');
    
        }else{
            $SaveLogo = NULL;
            $logopath = NULL;
            $SaveBanner = NULL;
            $bannerpath  = NULL;
        }

            //   dd( $request->all());

            $user = User::find($id);
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->phone = $request['phone'];
        $user->logo = $SaveLogo;
        $user->logoPath = $logopath;
        $user->banner = $SaveBanner;
        $user->bannerpath = $bannerpath;
        $user->update();

        return back()->with('message','Profile Updated');

    }
    

    public function showAllClients()
    {

        $clients  = client::where('user_id', auth()->user()->id)->get();

        return view('home.all-clients', ['clients'=>$clients])->with('no', 1);
    }


    public function addNewClient( Request $request)
    {
        // dd($request->all());

        // $request->validate([
        //     'name' =>'required',
        //     'email' =>'required|unique:clients,email',
        //     'phone' =>'required|unique:clients,phone',
        //     'gender'=> 'required',
        // ]);

       
        // dd($request->all());
        $AddClient = client::create([
            'name' =>  request('name'),
            'phone' => request('phone'),
            'gender' => request('gender'),
            'DOB' => request('DOB'),
            'address' => request('address'),
            'email' => request('email'),
            'job' => request('prof'),
            'm1' => request('m1'),
            'm2' => request('m2'),
            'm3' => request('m3'),
            'm4' => request('m4'),
            'm5' => request('m5'),
            'm6' => request('m6'),
            'user_id' => auth()->user()->id,
        ]);

        if ( $AddClient)
        {
            return back()->with('Message', 'Successfully Added');
        }else{
            return back()->with('Message', 'Error Added');

        }
}


public function showCLientDetails( $id)
{

    $clientDetails  = client::where('id', $id)->get();

    return view('home.clients-details', ['clientDetails'=> $clientDetails ]);
}



public function showCLientProfile( $id)
{

     $clientProfile  = client::where('id', $id)->get();

     return view('home.clients-profile', ['clientProfile'=> $clientProfile ]);
    }


 public function showProfilePage( $id)
{

    $clientDetails  = client::where('id', $id)->get();

    return view('home.edit-client-profile', ['clientDetails'=> $clientDetails ]);
}


public function UpdateClientProfile( Request $request)
{



    return ('You will update client profile here');
}


public function ClientGallery( $id)
  {


$userGallery = photo::where('client_id',$id )->where('user_id', auth()->user()->id )->get();

$userId = $id;
// dd($userGallery);

    return view('home.client-gallery', compact('userGallery', 'userId'));
  }

  public function AddClientGallery( $id)
  {

    $userId = client::where('id',$id )->get();

    // dd($userId);

    return view('home.add-clients-photo',['userId' => $userId]);
  }

  public function storeClientGallery(Request $request)
  {
      $request->validate([
        'images' => 'required',
      ]);

      if ($request->hasfile('images')) {
          $images = $request->file('images');

          foreach($images as $image) {
              $name = $image->getClientOriginalName();
              $path = $image->storeAs('uploads', $name, 'public');

              photo::create([
                  'media' => $name,
                  'path' => '/storage/'.$path,
                  'user_id' =>auth()->user()->id,
                  'client_id' =>$request->user_id,

                ]);
          }
       }

      return back()->with('success', 'Images uploaded successfully');
  }

  public function reachClient( $id)

  {
    $reachClient = client::where('id', $id)->get();


      return view('home.reach-client',['reachClient'=>$reachClient]);
  }


  public function reviews()
  {

    $reviews = message::where('user_id', auth()->user()->id)->get();

    // dd($reviews);

      return view('home.reviews', ['reviews' => $reviews ]);
  }


  public function reviewStatus( Request $request, $id)
  {

     $update = message::find($id);

     $update->status = 1;
     $update->update();

    // dd($reviews);

      return back();
  }


  
  public function portfolio()
  {

    $portfolio = photo::where('user_id',auth()->user()->id)->get();

      return view('home.portfolio', ['portfolio' =>$portfolio]);
  }

  public function sharePortfolio( $id)
  {

    $shareComponent = \Share::page(
        URL::current(),
          'Follow this link to see my awesome portfolio',
      )
      ->facebook()
      ->twitter()
      ->linkedin()
      ->telegram()
      ->whatsapp()        
      ->reddit();


    $portfolio = photo::where('user_id',$id)->get();

      return view('home.myportfolio', ['portfolio' =>$portfolio, 'shareComponent' => $shareComponent ]);
  }

  public function clientBirthday()
  {

    $month = Carbon::now()->format('m');
    $day = Carbon::now()->format('d');
    
    // $bday = Carbon\Carbon::parse($date->created_at)->day;

    $AllBirthdays = client::whereMonth('DOB', $month)
                            ->whereDay('DOB', $day)
                            ->where('user_id', auth()->user()->id)->get();
                            

//    dd($AllBirthdays);

      return view('home.client-birthday', ['AllBirthdays' => $AllBirthdays]); 
  }
 
 

  public function Sharefeedback( $id,$name)
  {

    $shareComponent = \Share::page(
        URL::current(),
          'Hey dear, kindly help me with this survey',
      )
      ->facebook()
      ->twitter()
      ->linkedin()
      ->telegram()
      ->whatsapp()        
      ->reddit();


    $formData = User::where('id',$id)->get();

      return view('home.feedback', ['formData' => $formData, 'shareComponent' => $shareComponent ]);
  }

  public function Processfeedback( Request $request )
  {
     $request->validate([

       
        'message' => 'required',
     ]);
        $id = auth::id();

     $inbox = message::create([
         'user_id' => $request->user_id,
         'body' => $request->message,
         'name' => $request->name,
         'phone' => $request->phone,
             ]);
             return back();
  }


//   public function ShareWidget()
//   {
//       $shareComponent = \Share::page(
//         URL::current(),
//           'Hey dear, kindly give your feedback to help us serve you better!',
//       )
//       ->facebook()
//       ->twitter()
//       ->linkedin()
//       ->telegram()
//       ->whatsapp()        
//       ->reddit();

//     //   dd($shareComponent);
      
//       return view('home.share',['shareComponent' => $shareComponent]);
//   }


}