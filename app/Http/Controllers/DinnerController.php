<?php

namespace App\Http\Controllers;

use App\DataTables\DinnerDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateDinnerRequest;
use App\Http\Requests\UpdateDinnerRequest;
use App\Repositories\DinnerRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Models\Dinner;

class DinnerController extends AppBaseController
{
    /** @var  DinnerRepository */
    private $dinnerRepository;

    public function __construct(DinnerRepository $dinnerRepo)
    {
        $this->dinnerRepository = $dinnerRepo;
    }

    /**
     * Display a listing of the Dinner.
     *
     * @param DinnerDataTable $dinnerDataTable
     * @return Response
     */
    public function index(DinnerDataTable $dinnerDataTable)
    {
        $dinners = Dinner::all();
        return $dinnerDataTable->render('dinners.index', compact('dinners'));
    }

    /**
     * Show the form for creating a new Dinner.
     *
     * @return Response
     */
    public function create()
    {
        return view('dinners.create');
    }

    /**
     * Store a newly created Dinner in storage.
     *
     * @param CreateDinnerRequest $request
     *
     * @return Response
     */
    public function store(CreateDinnerRequest $request)
    {
        $input = $request->all();

        $dinner = $this->dinnerRepository->create($input);

        Flash::success('Dinner saved successfully.');

        return redirect(route('dinners.index'));
    }

    /**
     * Display the specified Dinner.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dinner = $this->dinnerRepository->findWithoutFail($id);

        if (empty($dinner)) {
            Flash::error('Dinner not found');

            return redirect(route('dinners.index'));
        }

        return view('dinners.show')->with('dinner', $dinner);
    }

    /**
     * Show the form for editing the specified Dinner.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dinner = $this->dinnerRepository->findWithoutFail($id);

        if (empty($dinner)) {
            Flash::error('Dinner not found');

            return redirect(route('dinners.index'));
        }

        return view('dinners.edit')->with('dinner', $dinner);
    }

    /**
     * Update the specified Dinner in storage.
     *
     * @param  int              $id
     * @param UpdateDinnerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDinnerRequest $request)
    {
        $dinner = $this->dinnerRepository->findWithoutFail($id);

        if (empty($dinner)) {
            Flash::error('Dinner not found');

            return redirect(route('dinners.index'));
        }

        $dinner = $this->dinnerRepository->update($request->all(), $id);

        Flash::success('Dinner updated successfully.');

        return redirect(route('dinners.index'));
    }

    /**
     * Remove the specified Dinner from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dinner = $this->dinnerRepository->findWithoutFail($id);

        if (empty($dinner)) {
            Flash::error('Dinner not found');

            return redirect(route('dinners.index'));
        }

        $this->dinnerRepository->delete($id);

        Flash::success('Dinner deleted successfully.');

        return redirect(route('dinners.index'));
    }
}
