<?php

namespace App\Http\Controllers;

use App\DataTables\CostumerDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateCostumerRequest;
use App\Http\Requests\UpdateCostumerRequest;
use App\Repositories\CostumerRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class CostumerController extends AppBaseController
{
    /** @var  CostumerRepository */
    private $costumerRepository;

    public function __construct(CostumerRepository $costumerRepo)
    {
        $this->costumerRepository = $costumerRepo;
    }

    /**
     * Display a listing of the Costumer.
     *
     * @param CostumerDataTable $costumerDataTable
     * @return Response
     */
    public function index(CostumerDataTable $costumerDataTable)
    {
        return $costumerDataTable->render('costumers.index');
    }

    /**
     * Show the form for creating a new Costumer.
     *
     * @return Response
     */
    public function create()
    {
        return view('costumers.create');
    }

    /**
     * Store a newly created Costumer in storage.
     *
     * @param CreateCostumerRequest $request
     *
     * @return Response
     */
    public function store(CreateCostumerRequest $request)
    {
        $input = $request->all();

        $costumer = $this->costumerRepository->create($input);

        Flash::success('Costumer saved successfully.');

        return redirect(route('costumers.index'));
    }

    /**
     * Display the specified Costumer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $costumer = $this->costumerRepository->findWithoutFail($id);

        if (empty($costumer)) {
            Flash::error('Costumer not found');

            return redirect(route('costumers.index'));
        }

        return view('costumers.show')->with('costumer', $costumer);
    }

    /**
     * Show the form for editing the specified Costumer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $costumer = $this->costumerRepository->findWithoutFail($id);

        if (empty($costumer)) {
            Flash::error('Costumer not found');

            return redirect(route('costumers.index'));
        }

        return view('costumers.edit')->with('costumer', $costumer);
    }

    /**
     * Update the specified Costumer in storage.
     *
     * @param  int              $id
     * @param UpdateCostumerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCostumerRequest $request)
    {
        $costumer = $this->costumerRepository->findWithoutFail($id);

        if (empty($costumer)) {
            Flash::error('Costumer not found');

            return redirect(route('costumers.index'));
        }

        $costumer = $this->costumerRepository->update($request->all(), $id);

        Flash::success('Costumer updated successfully.');

        return redirect(route('costumers.index'));
    }

    /**
     * Remove the specified Costumer from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $costumer = $this->costumerRepository->findWithoutFail($id);

        if (empty($costumer)) {
            Flash::error('Costumer not found');

            return redirect(route('costumers.index'));
        }

        $this->costumerRepository->delete($id);

        Flash::success('Costumer deleted successfully.');

        return redirect(route('costumers.index'));
    }
}
