<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateContenidoRequest;
use Illuminate\Http\Request;
use App\Libraries\Repositories\ContenidoRepository;
use App\Libraries\Repositories\AlianzaRepository;
use App\Libraries\Repositories\ContactoRepository;
use App\Libraries\Repositories\MensajeRepository;
use Mitul\Controller\AppBaseController;
use App\Libraries\Repositories\ModelosRepository;
use Response;
use Flash;

class ContenidoController extends AppBaseController {

    /** @var  ContenidoRepository */
    private $contenidoRepository;
    private $contactoRepository;
    private $alianzaRepository;
    private $mensajeRepository;
    private $modelosRepository;

    function __construct(ContenidoRepository $contenidoRepo, ContactoRepository $contactoRepo, AlianzaRepository $alianzaRepo, MensajeRepository $mensajeRepo, modelosRepository $modelosRepo) {
        $this->contenidoRepository = $contenidoRepo;
        $this->contactoRepository = $contactoRepo;
        $this->alianzaRepository = $alianzaRepo;
        $this->mensajeRepository = $mensajeRepo;
        $this->modelosRepository = $modelosRepo;
    }

    /**
     * Display a listing of the Contenido.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request) {
        $input = $request->all();

        $result = $this->contenidoRepository->search($input);

        $contenidos = $result[0];

        $attributes = $result[1];

        $input2 = $request->all();

        $result2 = $this->mensajeRepository->search($input2);

        $mensajes = $result2[0];

        $attributes = $result2[1];


        return view('contenidos.index')
                        ->with('mensajes', $mensajes)
                        ->with('attributes', $attributes)
                        ->with('contenidos', $contenidos)
                        ->with('attributes', $attributes);
        ;
    }

    /**
     * Show the form for creating a new Contenido.
     *
     * @return Response
     */
    public function create() {
        return view('contenidos.create');
    }

    /**
     * Store a newly created Contenido in storage.
     *
     * @param CreateContenidoRequest $request
     *
     * @return Response
     */
    public function store(CreateContenidoRequest $request) {
        $input = $request->all();

        $contenido = $this->contenidoRepository->store($input);

        Flash::message('Contenido guardado con exito');

        return redirect(route('contenidos.index'));
    }

    /**
     * Display the specified Contenido.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id) {
        $contenido = $this->contenidoRepository->findContenidoById($id);

        if (empty($contenido)) {
            Flash::error('Contenido no encontrado');
            return redirect(route('contenidos.index'));
        }

        return view('contenidos.show')->with('contenido', $contenido);
    }

    /**
     * Show the form for editing the specified Contenido.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id, Request $request) {
        $contenido = $this->contenidoRepository->findContenidoById($id);

        if (empty($contenido)) {
            Flash::error('Contenido not found');
            return redirect(route('contenidos.index'));
        }

        $input2 = $request->all();

        $result2 = $this->mensajeRepository->search($input2);

        $mensajes = $result2[0];

        $attributes = $result2[1];




        return view('contenidos.edit')->with('mensajes', $mensajes)
                        ->with('attributes', $attributes)->with('contenido', $contenido);
    }

    /**
     * Update the specified Contenido in storage.
     *
     * @param  int    $id
     * @param CreateContenidoRequest $request
     *
     * @return Response
     */
    public function update($id, CreateContenidoRequest $request) {
        $contenido = $this->contenidoRepository->findContenidoById($id);

        if (empty($contenido)) {
            Flash::error('Contenido no encontrado');
            return redirect(route('contenidos.index'));
        }

        $contenido = $this->contenidoRepository->update($contenido, $request->all());

        Flash::message('En contenido se ha actualizado correctamente');

        return redirect(route('contenidos.index'));
    }

    /**
     * Remove the specified Contenido from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id) {
        $contenido = $this->contenidoRepository->findContenidoById($id);

        if (empty($contenido)) {
            Flash::error('Contenido not found');
            return redirect(route('contenidos.index'));
        }

        $contenido->delete();

        Flash::message('Contenido deleted successfully.');

        return redirect(route('contenidos.index'));
    }

    public function principal() {
        $view = view('welcome');
        $contenidos = $this->contenidoRepository->all();

        foreach ($contenidos as $contenido) {
            if ($contenido->pagina == 1) {
                $seccion = $contenido->seccion;
                $view->$seccion = $contenido->text;
            }
        }
        $contactos = $this->contactoRepository->all();

        foreach ($contactos as $contacto) {
            $view->encabezado = $contacto->encabezado;
            $view->dirección = $contacto->dirección;
            $view->sitio = $contacto->sitio;
            $view->teléfono = $contacto->teléfono;
            $view->correo = $contacto->correo;
        }

        $alianzas = $this->alianzaRepository->all();
        $view->alianzas = $alianzas;

        $modelos = $this->modelosRepository->all();
        $view->modelos = $modelos;

        return $view;
    }

    public function constructora() {
        $view = view('constructora');
        $contenidos = $this->contenidoRepository->all();

        foreach ($contenidos as $contenido) {
            if ($contenido->pagina == 2) {
                $seccion = $contenido->seccion;
                $view->$seccion = $contenido->text;
            }
        }
        $contactos = $this->contactoRepository->all();

        foreach ($contactos as $contacto) {
            $view->encabezado = $contacto->encabezado;
            $view->dirección = $contacto->dirección;
            $view->sitio = $contacto->sitio;
            $view->teléfono = $contacto->teléfono;
            $view->correo = $contacto->correo;
        }

        $alianzas = $this->alianzaRepository->all();
        $view->alianzas = $alianzas;

        $modelos = $this->modelosRepository->all();
        $view->modelos = $modelos;

        return $view;
    }

    public function paneles() {
        $view = view('paneles');
        $contenidos = $this->contenidoRepository->all();

        foreach ($contenidos as $contenido) {
            if ($contenido->pagina == 3) {
                $seccion = $contenido->seccion;
                $view->$seccion = $contenido->text;
            }
        }
        $contactos = $this->contactoRepository->all();

        foreach ($contactos as $contacto) {
            $view->encabezado = $contacto->encabezado;
            $view->dirección = $contacto->dirección;
            $view->sitio = $contacto->sitio;
            $view->teléfono = $contacto->teléfono;
            $view->correo = $contacto->correo;
        }

        return $view;
    }

    public function ahorradores() {
        $view = view('ahorradores');
        $contenidos = $this->contenidoRepository->all();

        foreach ($contenidos as $contenido) {
            if ($contenido->pagina == 4) {
                $seccion = $contenido->seccion;
                $view->$seccion = $contenido->text;
            }
        }
        $contactos = $this->contactoRepository->all();

        foreach ($contactos as $contacto) {
            $view->encabezado = $contacto->encabezado;
            $view->dirección = $contacto->dirección;
            $view->sitio = $contacto->sitio;
            $view->teléfono = $contacto->teléfono;
            $view->correo = $contacto->correo;
        }

        return $view;
    }

}
