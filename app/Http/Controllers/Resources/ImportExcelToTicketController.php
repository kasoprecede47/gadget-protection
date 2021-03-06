<?php namespace SupergeeksGadgetProtection\Http\Controllers\Resources;

use SupergeeksGadgetProtection\Commands\ImportTicketFromExcel;
use SupergeeksGadgetProtection\Http\Requests;
use SupergeeksGadgetProtection\Http\Controllers\Controller;

use Illuminate\Http\Request;
use SupergeeksGadgetProtection\Http\Requests\ImportExcelToTicket;

class ImportExcelToTicketController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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
	public function store(ImportExcelToTicket $excelToTicket)
	{
        $importTicket = new ImportTicketFromExcel($excelToTicket);
        return $this->dispatch($importTicket);
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
