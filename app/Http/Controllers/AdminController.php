<?php
namespace App\Http\Controllers;

use DB;           //must use this or include this to use db query
					
use Session;       //must use this or include this to use sessions 
use Illuminate\Http\Request; //use this whenever using form, for sending accepting post, get     request	

use Illuminate\Support\Facades\Redirect;	//use this whenever you need to redirect to any page	

/*use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;*/

class AdminController extends Controller
{

/* ============================ Signup Function: Start ============================ */

    public function signup (Request $request) {       //Must add above Request file before receiving values
    	//echo "HIIIIIIIIIII";

      if($request->isMethod('post')) {                //equivalent to isset 
          /*print_r($request->name); echo "<br>";     //For echoing different values receiving by post method

          print_r($request->account); echo "<br>";

          print_r($request->email); echo "<br>";

          print_r($request->password); echo "<br>";

          print_r($request->gender); echo "<br>";*/

          $data['name'] = $request->name;             //whatever written after arrow is the name of i/p fields
          $data['email'] = $request->email;
          $data['password'] = $request->password;
          $data['gender'] = $request->gender;
          $data['account'] = $request->account;

          //print_r($data);                           //echoing the array of datas

          $result = DB::table('users')->insert($data);//Must add above DB file before receiving values

          //echo $result;                             //insert query fired (check db to find received value)
      }
    	return view('signup');                          // first view is loaded values are fetched above through form

      
    }

    /* ============================ Signup Function: End ============================ */

    /* ============================ Login Function: Start ============================ */

  public function login (Request $request) {

      if($request->isMethod('post')) {
          /*echo $request->email;  echo "<br/>";          //Echoing received password from form
          echo $request->password;*/

          $email = $request->email;                       //receiving i/p value in a variable
          $password = $request->password;

          $value = DB::table('users')->select('users.id')->where(['email' => $email, 'password' => $password])->first();                                      //selecting i/p value and one if present in db

          /*print_r($value);*/                           //prints the id of entered if present

      /*if((count($value)) > 0) {                      //checking values with hardcoded data, once succeeds we will apply sessions
        echo "Homepage";
      }
      else {
        return view("login");
      }*/


      if(count($value) > 0) {             //if true
        Session::set('Name', $email);   //setting session, storing value of $email in Name variable

        return Redirect :: to('home');  //must include Redirect file,similar to header('location')  
                                        //redirecting to home.blade.php page after successful login
      }
      else {
        return view('login');           //for false case returning back to login form
      }



      }




      return view('login');
   }

/* ============================ Login Function: End ============================ */

/* ============================ Home Function: End ============================ */


public function home (Request $request) {

  if(!empty(Session::get('Name'))) {
    $data = DB::table('users')->select('users.*')->get();       /*fetch complete rows data form db*/
    //print_r($data);         //printing complete data fetched by above line

    return view('home', compact('data'));       //set is for single variable assign, compact is for multiple variable assign
  }

  else {
    return Redirect :: to('login');             // if someone tries to open url without login goto login page.
  }

  //return view('home', );
}




/* ============================ Home Function: End ============================ */

/* ============================ Delete Function: Start ============================ */


public function delete ($id = null) {     //value received writing in parameter
  //echo $id;      //to check whether we are getting id value through parameter via routes

  $result = DB::table('users')->select('users.*')->delete($id);       //delete query fired

  //echo $result;

  if($result) {
    return Redirect :: to('home');          //after deletion redirect to same page i.e. home.blade.php
  }




}


/* ============================ Delete Function: End ============================ */


/* ============================ Edit Function: Start ============================ */

public function edit ($id = null) {
 //echo $id;      //to check whether we are getting id value through parameter via routes

  $value = DB :: table('users')->select('users.*')->where('id', '=', $id)->first();


  //print_r($result); //checking database value

  return view('edit', compact('value'));      //sending complete data selected above(line151) to edit.blade.php page
}

/* ============================ Edit Function: End ============================ */


/* ============================ Update Function: Start ============================ */

public function update (Request $request) {
//echo "HIIIIIII";

  if($request->isMethod('post')) {

    $data=$request->all();                    //brings all the data from the database of that particular id
        //echo '<pre>';print_r($request->all());die;

    $updateVal = array('name' => $data['name'], 'account' => $data['account'], 'email' => $data['email'], 'password' => $data['password']);         //saving array of data in a variable to be passed in line

    //echo "<pre>"; print_r($updateVal);die;

    $result = DB :: table('users')->where('id', '=', $data['id'])->update($updateVal);

    //echo "<pre>"; print_r($result);die;

    if($result) {
      return Redirect :: to('home');
    }


  }
}


/* ============================ Update Function: End ============================ */


/* ============================ Logout Function: Start ============================ */
  
public function logout () {
  Session :: flush();               // equivalent to unset session and destroy session
  return Redirect :: to('login');   //after destroying session return to home page
}

/* ============================ Logout Function: End ============================ */




}  /* AdminController Class End*/




