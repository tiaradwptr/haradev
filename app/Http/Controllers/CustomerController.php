<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CustomerController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$customers = \App\Customer::all();
		return response()->json($customers, 200, array('Content-Type' => 'application/json'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//validate
		// read more on validation
		$rules = array (
			'name'				=> 'required',
			'gender'					=> 'required',
			'location_id'			=> 'required',
			'idcard'			=> 'required',
			);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()){
			return response()->json($validator, 200, array('Content-Type' => 'application/javascript'));
		} else {
			// store
			//$user = new User;
			$customer = new \App\Customer();
			$customer->cif 						= Input::get('cif');
			$customer->name 						= Input::get('name');
			$customer->alias 						= Input::get('alias');
			$customer->gender 						= Input::get('gender');
			$customer->location_id 					= Input::get('location_id');
			$customer->idcard 				= Input::get('idcard');
			$customer->idcard_valid_date 					= Input::get('idcard_valid_date');
			$customer->poktan					= Input::get('poktan');
			$customer->has_rddk 						= Input::get('has_rddk');
			$customer->spuse_name 					= Input::get('spouse_name');
			$customer->mother_name 					= Input::get('mother_name');
			$customer->address					= Input::get('address');
			$customer->dependent_family 						= Input::get('dependent_family');
			$customer->residence_span 						= Input::get('residence_span');
			$customer->experience_span 						= Input::get('experience_span');
			$customer->npwp 					= Input::get('npwp');
			$customer->contacts 				= Input::get('contacts');
			$customer->status_id 					= Input::get('status_id');
			$customer->marital_id					= Input::get('marital_id');
			$customer->education_id 						= Input::get('education_id');
			$customer->propertystatus_id 					= Input::get('propertystatus_id');
			$customer->disbursementmethod_id 					= Input::get('disbursementmethod_id');
			$customer->bankaccount_id					= Input::get('bankaccount_id');
			$customer->save();


			$respon = array (
				'status'	=> '1',
				'message'	=> 'Petani berhasil terdaftar!'
				);
			return response()->json($respon, 200, array('Content-Type' => 'application/json'));
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
