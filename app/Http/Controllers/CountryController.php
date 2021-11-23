<?php

namespace App\Http\Controllers;
// Imports
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

// Required models
use App\Models\Country;


class CountryController extends Controller
{
    /**
     * Display a listing of the country.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $country = Country::get();

        return response(['success' => true, 'message'=>'All user countries available', 'Country' => $country])->setStatusCode(200);

    }

    /**
     * Display a listing of the resource for a particular country.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $country = Country::where('id', $id)->get();
        return response(['success' => true, 'message'=>'Country details', 'Country' => $country])->setStatusCode(200);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $country = Validator::make($request->all(), [
            'country' => 'required',
        ]);


        // return dd($request->all());
        if ($country->fails()) {
            return response(['success' => false, 'message'=>$country->messages()])->setStatusCode(400);
        }else{
            $store_country = ([
                'country' => $request->country,
            ]);
            // return dd($idcard);
            Country::create($store_country);
            return response(['success' => true, 'message'=>'Country created'])->setStatusCode(200);
        }
    }

    /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      //
      

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      //
      $country = Country::find($id)->delete();

      return response(['success' => true, 'message'=>'Country deleted'])->setStatusCode(200);
  }

}
