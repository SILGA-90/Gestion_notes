<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatejoursRequest;
use App\Http\Requests\UpdatejoursRequest;
use App\Repositories\joursRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class joursController extends AppBaseController
{
    /** @var  joursRepository */
    private $joursRepository;

    public function __construct(joursRepository $joursRepo)
    {
        $this->joursRepository = $joursRepo;
    }

    /**
     * Display a listing of the jours.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $jours = $this->joursRepository->all();

        return view('jours.index')
            ->with('jours', $jours);
    }

    /**
     * Show the form for creating a new jours.
     *
     * @return Response
     */
    public function create()
    {
        return view('jours.create');
    }

    /**
     * Store a newly created jours in storage.
     *
     * @param CreatejoursRequest $request
     *
     * @return Response
     */
    public function store(CreatejoursRequest $request)
    {
        $input = $request->all();

        $jours = $this->joursRepository->create($input);

        Flash::success('Jours saved successfully.');

        return redirect(route('jours.index'));
    }

    /**
     * Display the specified jours.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jours = $this->joursRepository->find($id);

        if (empty($jours)) {
            Flash::error('Jours not found');

            return redirect(route('jours.index'));
        }

        return view('jours.show')->with('jours', $jours);
    }

    /**
     * Show the form for editing the specified jours.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jours = $this->joursRepository->find($id);

        if (empty($jours)) {
            Flash::error('Jours not found');

            return redirect(route('jours.index'));
        }

        return view('jours.edit')->with('jours', $jours);
    }

    /**
     * Update the specified jours in storage.
     *
     * @param int $id
     * @param UpdatejoursRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatejoursRequest $request)
    {
        $jours = $this->joursRepository->find($id);

        if (empty($jours)) {
            Flash::error('Jours not found');

            return redirect(route('jours.index'));
        }

        $jours = $this->joursRepository->update($request->all(), $id);

        Flash::success('Jours updated successfully.');

        return redirect(route('jours.index'));
    }

    /**
     * Remove the specified jours from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jours = $this->joursRepository->find($id);

        if (empty($jours)) {
            Flash::error('Jours not found');

            return redirect(route('jours.index'));
        }

        $this->joursRepository->delete($id);

        Flash::success('Jours deleted successfully.');

        return redirect(route('jours.index'));
    }
}
