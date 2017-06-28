<?php



    $tipo = $_POST["tipo"];
    $nombre = $_POST["nombre"];
    $caracteristicas = $_POST["caracteristicas"];
    $precio = $_POST["precio"];




      $query = "INSERT INTO `productos`(`tipo`, `nombre`, `caracteristicas`, `precio`) VALUES ('$tipo', '$nombre', '$caracteristicas', $precio)";

DB::insert('INSERT INTO `productos`(`tipo`, `nombre`, `caracteristicas`, `precio`) VALUES (?, ?, ?, ?)', [$tipo, $nombre, $caracteristicas, $precio]);

  /*    DB::table('productos')->insert(
          ['tipo' => $tipo, 'nombre' => $nombre, 'caracteristicas' => $caracteristicas, 'precio' => $precio, ]

          return redirect(route('productos.index'));

          */
);


?>


