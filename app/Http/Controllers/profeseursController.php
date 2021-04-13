<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateprofeseursRequest;
use App\Http\Requests\UpdateprofeseursRequest;
use App\Repositories\profeseursRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\profeseurs;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;

class profeseursController extends AppBaseController
{
    /** @var  profeseursRepository */
    private $profeseursRepository;

    public function __construct(profeseursRepository $profeseursRepo)
    {
        $this->profeseursRepository = $profeseursRepo;
    }

    /**
     * Display a listing of the profeseurs.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $profeseurs = $this->profeseursRepository->all();

        return view('profeseurs.index')
            ->with('profeseurs', $profeseurs);
    }

    /**
     * Show the form for creating a new profeseurs.
     *
     * @return Response
     */
    public function create()
    {
        return view('profeseurs.create');
    }

    /**
     * Store a newly created profeseurs in storage.
     *
     * @param CreateprofeseursRequest $request
     *
     * @return Response
     */
    public function store(CreateprofeseursRequest $request)
    {
        $input = $request->all();

        // $profeseurs = $this->profeseursRepository->create($input);

        $image = $request->file('image');
        $image_name = rand(1111,9999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('teacher_images'), $image_name);

        $profeseurs = new profeseurs(); 
        $profeseurs->first_name = $request->first_name;
        $profeseurs->last_name = $request->last_name;
        $profeseurs->email = $request->email;
        $profeseurs->gender = $request->gender;
        $profeseurs->dob = $request->dob;
        $profeseurs->phone = $request->phone;
        $profeseurs->nationality = $request->nationality;
        $profeseurs->no_CNIB = $request->no_CNIB;
        $profeseurs->statut = $request->statut;
        $profeseurs->image = $image_name;
                // dd($profeseurs);
        $profeseurs->save();

        Flash::success('Nouveau Professeur enregistré avec succès.');

        return redirect(route('profeseurs.index'));
    }

    /**
     * Display the specified profeseurs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $profeseurs = $this->profeseursRepository->find($id);

        if (empty($profeseurs)) {
            Flash::error('Profeseur introuvable');

            return redirect(route('profeseurs.index'));
        }

        return view('profeseurs.show')->with('profeseurs', $profeseurs);
    }

    /**
     * Show the form for editing the specified profeseurs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $profeseurs = $this->profeseursRepository->find($id);

        if (empty($profeseurs)) {
            Flash::error('Profeseur introuvable');

            return redirect(route('profeseurs.index'));
        }

        return view('profeseurs.edit')->with('profeseurs', $profeseurs);
    }

    /**
     * Update the specified profeseurs in storage.
     *
     * @param int $id
     * @param UpdateprofeseursRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateprofeseursRequest $request)
    {
        $profeseurs = $this->profeseursRepository->find($id);

        if (empty($profeseurs)) {
            Flash::error('Profeseur introuvable');

            return redirect(route('profeseurs.index'));
        }

        $profeseurs = $this->profeseursRepository->update($request->all(), $id);

        Flash::success('Détails du professeur actualisés avec succès.');

        return redirect(route('profeseurs.index'));
    }

    /**
     * Remove the specified profeseurs from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $profeseurs = $this->profeseursRepository->find($id);

        if (empty($profeseurs)) {
            Flash::error('Profeseur introuvable');

            return redirect(route('profeseurs.index'));
        }

        $this->profeseursRepository->delete($id);

        Flash::success('Données du professeur supprimé avec succès.');

        return redirect(route('profeseurs.index'));
    }
}
