<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateModelosRequest;
use Illuminate\Http\Request;
use App\Libraries\Repositories\MaterialRepository;
use App\Libraries\Repositories\ModelosRepository;
use Mitul\Controller\AppBaseController;
use App\Libraries\Repositories\MensajeRepository;
use App\Libraries\Repositories\FotosModeloRepository;
use App\Libraries\Repositories\MaterialesModeloRepository;
use Response;
use Flash;
use storage;
use DB;
use App\Quotation;

class ModelosController extends AppBaseController
{

	/** @var  ModelosRepository */
	private $modelosRepository;
	private $mensajeRepository;
	private $materialRepository;
	private $fotosModeloRepository;
	private $materialModelosRepository;

	function __construct(ModelosRepository $modelosRepo,MensajeRepository $mensajeRepo,MaterialRepository $materialRepo,FotosModeloRepository $fotosModeloRepo, MaterialesModeloRepository $materialModeloRepo)
	{
		$this->modelosRepository = $modelosRepo;
		$this->mensajeRepository = $mensajeRepo;
		$this->materialRepository = $materialRepo;
		$this->fotosModeloRepository = $fotosModeloRepo;
		$this->materialModelosRepository = $materialModeloRepo;
	}

	/**
	 * Display a listing of the Modelos.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	    $input = $request->all();
		$result = $this->modelosRepository->search($input);
		$modelos = $result[0];
		$attributes = $result[1];

		$input2 = $request->all();
		$result2 = $this->mensajeRepository->search($input2);
		$mensajes = $result2[0];

		$input3 = $request->all();
		$result3 = $this->materialRepository->search($input3);
		$materials = $result3[0];

		$input4 = $request->all();
		$result4 = $this->materialModelosRepository->search($input4);
		$materialModelos = $result4[0];



		return view('modelos.index')
		    ->with('modelos', $modelos)
		    ->with('attributes', $attributes)
		    ->with('materials', $materials)
		    ->with('attributes', $attributes)
		    ->with('mensajes', $mensajes)
		    ->with('materialModelos', $materialModelos);
	}

	/**
	 * Show the form for creating a new Modelos.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{
		$mensajes = $this->metodoMensajes($request);
		return view('modelos.create')->with('mensajes', $mensajes);
	}

	/**
	 * Store a newly created Modelos in storage.
	 *
	 * @param CreateModelosRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateModelosRequest $request)
	{


		$nombre = $_POST["nombre"];
		$descripcion = $_POST["descripcion"];
		$precioBase = $_POST["precioBase"];
		$tamaño = $_POST["tamaño"];
		$video = $_POST["video"];
		DB::insert('INSERT INTO `modelos`(`nombre`, `descripcion`, `precioBase`, `tamaño`, `video`) VALUES (?, ?, ?, ?, ?)', [$nombre, $descripcion, $precioBase, $tamaño, $video]);

		$users = DB::table('modelos')->get();

   //     $valorID="";
        foreach ($users as $user) {
            $valorID = $user->id;
        }




		$materialesCieloRaso = $_REQUEST['materialesCieloRaso'];
		foreach($materialesCieloRaso as $i)
		{
			$modeloM = $valorID;
			$categoriaM = "Cielo raso";
			$materialM = $i;
			$precioM = $_POST["precioC-".$i];

			DB::insert('INSERT INTO `materiales_modelos`(`modelo`, `categoria`, `material`, `precio`) VALUES (?, ?, ?, ?)', [$modeloM, $categoriaM, $materialM, $precioM]);

		}



		$materialesTecho = $_REQUEST['materialesTecho'];

		foreach($materialesTecho as $i)
		{

			$modeloMq = $valorID;
			$categoriaMq = "Techo";
			$materialMq = $i;
			$precioMq = $_REQUEST["precioT-".$i];

			 DB::insert('INSERT INTO `materiales_modelos`(`modelo`, `categoria`, `material`, `precio`) VALUES (?, ?, ?, ?)', [$modeloMq, $categoriaMq, $materialMq, $precioMq]);

		}



		$materialesPiso = $_REQUEST['materialesPiso'];
		foreach($materialesPiso as $i)
		{
			$modeloM = $valorID;
			$categoriaM = "Piso";
			$materialM = $i;
			$precioM = $_POST["precioP-".$i];

			DB::insert('INSERT INTO `materiales_modelos`(`modelo`, `categoria`, `material`, `precio`) VALUES (?, ?, ?, ?)', [$modeloM, $categoriaM, $materialM, $precioM]);
		}



		$materialesVidrio = $_REQUEST['materialesVidrio'];
		foreach($materialesVidrio as $i)
		{
			$modeloM = $valorID;
			$categoriaM = "Vidrio";
			$materialM = $i;
			$precioM = $_POST["precioV-".$i];

			DB::insert('INSERT INTO `materiales_modelos`(`modelo`, `categoria`, `material`, `precio`) VALUES (?, ?, ?, ?)', [$modeloM, $categoriaM, $materialM, $precioM]);

		}
		Flash::message('El modelo: '.$nombre.' ha sido agregado correctamente ');


        $this->metodo($valorID);




    //    return redirect(route('productos.index'));
/*
		$modelo = $_POST["nombre"];
		$foto = $_POST["foto1"];
		if($foto<>null){
		DB::insert('INSERT INTO `fotos_modelos`(`modelo`, `direccion`) VALUES (?, ?)', [$modelo, $foto]);
		}
		$foto = $_POST["foto2"];
			if($foto<>null){
		DB::insert('INSERT INTO `fotos_modelos`(`modelo`, `direccion`) VALUES (?, ?)', [$modelo, $foto]);
		}
			$foto = $_POST["foto3"];
			if($foto<>null){
		DB::insert('INSERT INTO `fotos_modelos`(`modelo`, `direccion`) VALUES (?, ?)', [$modelo, $foto]);
		}
			$foto = $_POST["foto4"];
			if($foto<>null){
		DB::insert('INSERT INTO `fotos_modelos`(`modelo`, `direccion`) VALUES (?, ?)', [$modelo, $foto]);
		}
			$foto = $_POST["foto5"];
			if($foto<>null){
		DB::insert('INSERT INTO `fotos_modelos`(`modelo`, `direccion`) VALUES (?, ?)', [$modelo, $foto]);
		}

        $input = $request->all();


*/
		//Flash::message('El modelo ha sido agregado correctamente');

		return redirect(route('modelos.index'));
	}

	/**
	 * Display the specified Modelos.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id, Request $request)
	{
		$modelo = $this->modelosRepository->findModelosById($id);
		$mensajes = $this->metodoMensajes($request);
		$materialModelos = $this->materialModelosRepository->all();
		$material = $this->materialRepository->all();

		if(empty($modelo))
		{
			Flash::error('Modelos no encontrado');
			return redirect(route('modelos.index'));
		}

		return view('modelos.show')->with('modelo', $modelo)->with('mensajes', $mensajes)->with('materialModelos',$materialModelos)->with('materials',$material);
	}

	/**
	 * Show the form for editing the specified Modelos.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id, Request $request)
	{
		$modelos = $this->modelosRepository->findModelosById($id);
		$mensajes = $this->metodoMensajes($request);

		if(empty($modelos))
		{
			Flash::error('Modelos no encontrado');
			return redirect(route('modelos.index'));
		}

		return view('modelos.edit')->with('modelos', $modelos)->with('mensajes', $mensajes);
	}

	/**
	 * Update the specified Modelos in storage.
	 *
	 * @param  int    $id
	 * @param CreateModelosRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateModelosRequest $request)
	{
		$modelos = $this->modelosRepository->findModelosById($id);

		if(empty($modelos))
		{
			Flash::error('Modelos no encontrado');
			return redirect(route('modelos.index'));
		}

		$modelos = $this->modelosRepository->update($modelos, $request->all());

		Flash::message('Modelos actualizado correctamente.');

		return redirect(route('modelos.index'));
	}

	/**
	 * Remove the specified Modelos from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$modelos = $this->modelosRepository->findModelosById($id);

		if(empty($modelos))
		{
			Flash::error('Modelos no encontrados');
			return redirect(route('modelos.index'));
		}

		$modelos->delete();

		Flash::message('Modelos Eliminado correctamente.');

		return redirect(route('modelos.index'));
	}

	function metodo($ID_Modelo) {
        // if ($_POST["SeleccionGuarda"] <> '') {
        $Directorio = public_path() . '/images/IMG_Modelos/Imagen';
        //    $Directorio = '/ecovida/public/images/IMG_Productos';
        //$Directorio = "../IMG_FOTOS/fotos_publicas/";
        //Preguntamos si nuetro arreglo 'archivos' fue definido
        if (isset($_FILES["archivos"])) {
            //de se asi, para procesar los archivos subidos al servidor solo debemos recorrerlo
            //obtenemos la cantidad de elementos que tiene el arreglo archivos
            $tot = count($_FILES["archivos"]["name"]);
            //este for recorre el arreglo
            for ($i = 0; $i < $tot; $i++) {
                //con el indice $i, poemos obtener la propiedad que desemos de cada archivo
                //para trabajar con este
                $tmp_name = $_FILES["archivos"]["tmp_name"][$i];
                $name = time() . "_" . $_FILES["archivos"]["name"][$i];
                ///En este lugar podemos ver la extesion del archivo subido por el usuario
                $ext = strtolower(strrchr($name, "."));
                //Este if preunta se las extensiones corresponden a imagnes: jpg,png, jpeg
                if (($ext == ".jpg") or ( $ext == ".png") or ( $ext == ".jpeg")) {
                    //se guarda en elservidor la imagen en la direccion fotos
                    $newfile = $Directorio . $name;
                 //   $ruta = $newfile;
                    $ruta = '/images/IMG_Modelos/Imagen' . $name;
                    $modelo = $_POST["nombre"];
                    //pregunta si fue subido la imagen
                    if (is_uploaded_file($tmp_name)) {
                        //si no fue copiado correctamente mandamos un print advertiendo
                        if (!copy($tmp_name, "$newfile")) {
                            print "Error en transferencia de imagenes.";
                            exit();
                        } // if copy
                        /////****
                        //         $titulo_Imagen = $_POST['txtTitulo'];
                        //           $Descripcion_Imagen = $_POST['txtdescrip'];
                        $fecha = date("d-m-Y");
                     //   $modelo_id = 0000;
                        DB::insert('INSERT INTO `fotos_modelos`(`modelo`, `direccion`, `modelo_ID`) VALUES (?, ?, ?)', [$modelo, $ruta, $ID_Modelo]);
                    } // if is_up...
                } else {
                    echo("<b>El o los archivo(s) subidos al servidor No son validos</b> \n" . $ext . "sssssssss");
                    exit();
                }
            }
        }
    }

    function metodoMensajes(Request $request) {
         $input = $request->all();
    	$result2 = $this->mensajeRepository->search($input);
        $mensajes = $result2[0];

        return $mensajes;
    }

}
