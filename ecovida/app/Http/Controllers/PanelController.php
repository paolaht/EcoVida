<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateProductoRequest;
use Illuminate\Http\Request;
use App\Libraries\Repositories\ProductoRepository;
use App\Libraries\Repositories\MensajeRepository;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use storage;
use DB;
use App\Quotation;

class PanelController extends AppBaseController {

    /** @var  ProductoRepository */
    private $productoRepository;
    private $mensajeRepository;

    function __construct(ProductoRepository $productoRepo, MensajeRepository $mensajeRepo) {
        $this->productoRepository = $productoRepo;
        $this->mensajeRepository = $mensajeRepo;
    }

    /**
     * Display a listing of the Producto.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request) {
        $input = $request->all();
        $mensajes = $this->metodoMensajes($request);
        $result = $this->productoRepository->search($input);

        $productos = $result[0];

        $attributes = $result[1];

        return view('productos.vistaPaneles')
                        ->with('productos', $productos)
                        ->with('attributes', $attributes)
                        ->with('mensajes', $mensajes);
        ;
    }

    /**
     * Show the form for creating a new Producto.
     *
     * @return Response
     */
    public function create(Request $request) {
         $mensajes = $this->metodoMensajes($request);
        return view('productos.create')
        ->with('mensajes', $mensajes);
    }

    /**
     * Store a newly created Producto in storage.
     *
     * @param CreateProductoRequest $request
     *
     * @return Response
     */
    public function store(CreateProductoRequest $request) {
        /*     CODIGO ORIGINAL
          $input = $request->all();

          $producto = $this->productoRepository->store($input);

          Flash::message('Producto saved successfully.');

         */
        /*
          $Imagen = new Imagen();


          $img = $request->file('archivos[]');

          $file_route = time().'_'.$img->getClientOriginalName();

          Storage::disk('imgProductos')->put($file_route, $file_get_contents($img->getRealPath()));

          $Imagen->imagens = $file_route;
          $Imagen->save();

         */
        $tipo = $_POST["tipo"];
        $nombre = $_POST["nombre"];
        $caracteristicas = $_POST["caracteristicas"];
        $precio = $_POST["precio"];





        DB::insert('INSERT INTO `productos`(`tipo`, `nombre`, `caracteristicas`, `precio`) VALUES (?, ?, ?, ?)', [$tipo, $nombre, $caracteristicas, $precio]);


//$row = DB::table('productos')->select('*')->get();
//$row = DB::select("SELECT AUTO_INCREMENT AS LastId FROM information_schema.tables WHERE TABLE_SCHEMA = 'ecovida_bd' AND TABLE_NAME = 'productos'");
//$row = DB::table('information_schema.tables')->select('AUTO_INCREMENT')->where('TABLE_SCHEMA', 'ecovida_bd')->where('TABLE_NAME', 'productos')->first();
//$UltimoID = $row["LastId"] - 1;  //aca asigno el ultimo producto recuperado a la variable
//$row = DB::select('select 5');
        $users = DB::table('productos')->get();
//$coso = DB::table('productos')->select('tipo')->where('id', 1)->first();
        foreach ($users as $user) {
            $valorID = $user->id;
        }

        $this->metodo($valorID);

        return redirect(route('paneles.index'));
    }

    /**
     * Display the specified Producto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id, Request $request) {
        $producto = $this->productoRepository->findProductoById($id);
        $mensajes = $this->metodoMensajes($request);

        if (empty($producto)) {
            Flash::error('Panel no encontrado');
            return redirect(route('productos.index'));
        }
        return view('paneles.show')->with('producto', $producto)->with('mensajes', $mensajes);
    }

    /**
     * Show the form for editing the specified Producto.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id, Request $request) {
        $producto = $this->productoRepository->findProductoById($id);

        $mensajes = $this->metodoMensajes($request);

        if (empty($producto)) {
            Flash::error('Panel no encontrado');
            return redirect(route('productos.index'));
        }

        return view('paneles.edit')->with('producto', $producto)->with('mensajes', $mensajes);
    }

    /**
     * Update the specified Producto in storage.
     *
     * @param  int    $id
     * @param CreateProductoRequest $request
     *
     * @return Response
     */
    public function update($id, CreateProductoRequest $request) {
        $producto = $this->productoRepository->findProductoById($id);

        if (empty($producto)) {
            Flash::error('Panel no encontrado');
            return redirect(route('productos.index'));
        }

        $producto = $this->productoRepository->update($producto, $request->all());

        Flash::message('Panel actualizado correctamente.');

        return redirect(route('paneles.index'));
    }

    /**
     * Remove the specified Producto from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id) {
        $producto = $this->productoRepository->findProductoById($id);

        if (empty($producto)) {
            Flash::error('Panel no encontrado');
            return redirect(route('productos.index'));
        }

        $producto->delete();

        DB::table('imagens')->where("producto_ID", $id) ->delete();


        Flash::message('Panel eliminado correctamente.');

        return redirect(route('paneles.index'));
    }

    function metodo($ID_Producto) {
        // if ($_POST["SeleccionGuarda"] <> '') {
        $Directorio = public_path() . '/images/IMG_Productos/Imagen';
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
                    //      $ruta = $newfile;
                    $ruta = '/images/IMG_Productos/Imagen' . $name;
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
                        $modelo_id = 0000;

                        //      DB::insert('INSERT INTO `Imagenes`(`tipo`, `nombre`, `caracteristicas`, `precio`) VALUES (?, ?, ?, ?)', [$tipo, $nombre, $caracteristicas, $precio]);
                        DB::insert('INSERT INTO `imagens`(`imagen`, `producto_ID`, `modelo_ID`) VALUES (?, ?, ?)', [$ruta, $ID_Producto, $modelo_id]);

                        //     $query = "INSERT INTO cms_imagenes (`ID_Incidente`, `ruta_img`, `titulo_Imagen`, `descripcion_Imagen`, `fecha_Img`) VALUES ('$ID_Producto', '$ruta', '$titulo_Imagen', '$Descripcion_Imagen','$fecha');";
                        //     $resultado = mysqli_query($connection, $query) or die("Fallo inesperado: " . mysqli_error());
                        //$conexion = mysql_close();
                        //////****
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
