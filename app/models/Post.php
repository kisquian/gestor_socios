<?php
include_once("Model.php");
/**
 * Usuario
 */
class Post extends Model
{
    const NOMBRE_EXACTO = 'exact';
    const EMPIEZA_CON = 'init';
    const TERMINA_CON = 'final';

    // Variable privada que almacena el objeto PDO
    private $_db;

    private $_lastInsertedId = 0;

    /**
     * [__construct description]
     */
    public function __construct() {
        // Creamos una nueva conexión
        $this->_db = Model::getInstance();
    }

    public function listarPosts() {
      $sql = null;

      try {
            $sql = $this->_db->query("SELECT * FROM posts");
            $sql->setFetchMode(PDO::FETCH_OBJ);
        } catch(PDOException $e) {
            $this->_error = $e->getMessage();
        }

        return $sql;
    }

    public function listarPostsPublicados($published) {
      $sql = null;

      try {
            $sql = $this->_db->prepare("SELECT * FROM posts WHERE status=:Status");
            $sql->execute(array(
              "Status" => $published
            ));
            $sql->setFetchMode(PDO::FETCH_OBJ);
        } catch(PDOException $e) {
            $this->_error = $e->getMessage();
        }

        return $sql;
    }

    public function filtrarPosts( $busqueda, $tipo_filtro = self::NOMBRE_EXACTO ) {
      $result = null;

      try {
            $filtrado = "='".$busqueda."'";

            switch( $tipo_filtro ) {
              case self::NOMBRE_EXACTO:
                $filtrado = $busqueda;
                break;
              case self::EMPIEZA_CON:
                $filtrado = $busqueda ."%";
                break;
              case self::TERMINA_CON:
                $filtrado = "%" . $busqueda;
                break;
            }

            $sql = $this->_db->prepare("SELECT * FROM posts WHERE title LIKE :Filtrado");
            $sql->execute(array(
              "Filtrado" => $filtrado
            ));
            $sql->setFetchMode(PDO::FETCH_OBJ);
            $result = $sql->fetchAll();
        } catch(PDOException $e) {
            $this->_error = $e->getMessage();
        }

        return $result;
    }

    public function obtenerPost( $id_post ) {
      $result = null;

      try {
          $sql = $this->_db->prepare("SELECT * FROM posts WHERE id=:IdPost");
          $sql->execute(array( "IdPost" => $id_post ));
          $sql->setFetchMode(PDO::FETCH_OBJ);
          $result = $sql->fetch();
        } catch(PDOException $e) {
            $this->_error = $e->getMessage();
        }

        return $result;
    }

    public function agregarPost( stdClass $data, $nuevoNombreImagen) {
        $sql = null;
        $this->_lastInsertedId = 0;

        try {
            $sql= $this->_db->prepare ("INSERT INTO posts(nombre, apellidos, cedula, fnac, direccion, dpto, telFijo, telMovil, email, titulo, generacion, formaDePago, empresa, ciudadDeEmpresa, puestoDeEmpresa, fechaAfiliacion, content, status) VALUES(:Nombre, :Apellidos, :Cedula, :Fnac, :Direccion, :Dpto, :TelFijo, :TelMovil, :Email, :Titulo, :Generacion, :FormaPago, :Empresa, :CiudadEmpresa, :PuestoEmpresa, :FechaAfiliacion, :Content, :Status)");
            $sql->execute(array(
              "Nombre"    => $data->nombre,
              "Apellidos"    => $data->apellidos,
              "Cedula"    => $data->cedula,
              "Fnac"    => $data->fnac,
              "Direccion"    => $data->direccion,
              "Dpto"    => $data->dpto,
              "TelFijo"    => $data->telfijo,
              "TelMovil"    => $data->telmovil,
              "Email"    => $data->email,
              "Titulo"    => $data->titulo,
              "Generacion"    => $data->generacion,
              "FormaPago"    => $data->formaDePago,
              "Empresa"    => $data->empresa,
              "CiudadEmpresa"    => $data->ciudadDeEmpresa,
              "PuestoEmpresa"    => $data->puestoDeEmpresa,
              "FechaAfiliacion"    => $data->fechaAdhesion,
              "Content" => $data->content,
              "Status" => $data->status
              //"Img" => $nuevoNombreImagen
            ));

            $this->_lastInsertedId = $this->_db->lastInsertId();
        } catch(PDOException $e) {
            $this->_error = $e->getMessage();
        }

        return ($sql->rowCount() > 0) ? true : false;
    }

    public function editarPost( $idPost, stdClass $data ) {
        $sql = null;

        try {
            $sql= $this->_db->prepare("UPDATE posts SET nombre=:Nombre, apellidos=:Apellidos, cedula=:Cedula, fnac=:Fnac, direccion=:Direccion, dpto=:Dpto, telFijo=:TelFijo, telMovil=:TelMovil, email=:Email, titulo=:Titulo, generacion=:Generacion, formaDePago=:FormaPago, empresa=:Empresa, ciudadDeEmpresa=:CiudadEmpresa, puestoDeEmpresa=:PuestoEmpresa, fechaAfiliacion=:FechaAfiliacion, content=:Content, status=:Status WHERE id=:idPost");
            $sql->execute(array(
              "idPost" => $idPost,
             "Nombre"    => $data->nombre,
              "Apellidos"    => $data->apellidos,
              "Cedula"    => $data->cedula,
              "Fnac"    => $data->fnac,
              "Direccion"    => $data->direccion,
              "Dpto"    => $data->dpto,
              "TelFijo"    => $data->telfijo,
              "TelMovil"    => $data->telmovil,
              "Email"    => $data->email,
              "Titulo"    => $data->titulo,
              "Generacion"    => $data->generacion,
              "FormaPago"    => $data->formaDePago,
              "Empresa"    => $data->empresa,
              "CiudadEmpresa"    => $data->ciudadDeEmpresa,
              "PuestoEmpresa"    => $data->puestoDeEmpresa,
              "FechaAfiliacion"    => $data->fechaAdhesion,
              "Content" => $data->content,
              "Status" => $data->status
            ));
        } catch(PDOException $e) {
            echo $e->getMessage();
        }

        return ($sql->rowCount() > 0) ? true : false;
    }

    public function eliminarPost( $id_usuario ) {
        try {
            $sql = $this->_db->prepare("DELETE FROM posts WHERE id=:IdPost");
            $sql->execute(array( "IdPost" => $id_usuario ));
            return ($sql->rowCount() > 0) ? true : false;
        } catch(PDOException $e) {
            $this->_error = $e->getMessage();
        }
    }

    /**
     * Retorna el ID del último registro insertado
     * @return int
     */
    public function obtenerIdUltimoRegistro() {
      return (int) $this->_lastInsertedId;
    }
}