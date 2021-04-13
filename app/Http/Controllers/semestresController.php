<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatesemestresRequest;
use App\Http\Requests\UpdatesemestresRequest;
use App\Repositories\semestresRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;

class semestresController extends AppBaseController
{
    /** @var  semestresRepository */
    private $semestresRepository;

    public function __construct(semestresRepository $semestresRepo)
    {
        $this->semestresRepository = $semestresRepo;
    }

    /**
     * Display a listing of the semestres.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $semestres = $this->semestresRepository->all();

        return view('semestres.index')
            ->with('semestres', $semestres);
    }

    /**
     * Show the form for creating a new semestres.
     *
     * @return Response
     */
    public function create()
    {
        return view('semestres.create');
    }

    /**
     * Store a newly created semestres in storage.
     *
     * @param CreatesemestresRequest $request
     *
     * @return Response
     */
    public function store(CreatesemestresRequest $request)
    {
        $input = $request->all();

        $semestres = $this->semestresRepository->create($input);

        Flash::success('Nouveau semestre enregistré avec succès.');

        return redirect(route('semestres.index'));
    }

    /**
     * Display the specified semestres.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $semestres = $this->semestresRepository->find($id);

        if (empty($semestres)) {
            Flash::error('Semestre introuvable');

            return redirect(route('semestres.index'));
        }

        return view('semestres.show')->with('semestres', $semestres);
    }

    /**
     * Show the form for editing the specified semestres.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $semestres = $this->semestresRepository->find($id);

        if (empty($semestres)) {
            Flash::error('Semestre introuvable');

            return redirect(route('semestres.index'));
        }

        return view('semestres.edit')->with('semestres', $semestres);
    }

    /**
     * Update the specified semestres in storage.
     *
     * @param int $id
     * @param UpdatesemestresRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesemestresRequest $request)
    {
        $semestres = $this->semestresRepository->find($id);

        if (empty($semestres)) {
            Flash::error('Semestre introuvable');

            return redirect(route('semestres.index'));
        }

        $semestres = $this->semestresRepository->update($request->all(), $id);

        Flash::success('Semestre actualisé avec succès.');

        return redirect(route('semestres.index'));
    }

    /**
     * Remove the specified semestres from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $semestres = $this->semestresRepository->find($id);

        if (empty($semestres)) {
            Flash::error('Semestre introuvable');

            return redirect(route('semestres.index'));
        }

        $this->semestresRepository->delete($id);

        Flash::success('Semestre supprimé avec succès.');

        return redirect(route('semestres.index'));
    }
}
