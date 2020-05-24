<?php
    class Centro extends Controller{
        function __construct(){
            parent::__construct();
            $this->view->mensaje="";
        }

        function render(){
            $solicitudes = $this->view->datos = $this->model->read();
            $this->view->solicitudes = $solicitudes;
            $this->view->render('admin/listasolicitud');
        }

        function leer($param = null){
            $id_solicitud = $param[0];
            $solicitud = $this->model->readById($id_solicitud);

            $this->view->solicitud = $solicitud;
            $this->view->render('admin/editarsolicitud');
        }

        function crear(){
            if(isset($_POST["id_solicitud"])){
                if($this->model->create($_POST)){
                    $this->view->mensaje = "Centro creado correctamente";
                    $solicitudes = $this->view->datos = $this->model->read();
                    $this->view->solicitudes = $solicitudes;
                    $this->view->render('admin/listasolicitud');
                }else{

                    $this->view->mensaje = "El centro ya existe 1";
                    $this->view->render('admin/listasolicitud');
                }
            }else{
                $this->view->render('admin/formsolicitud');
            }
        }
        function editar($param = null){
          
            if($this->model->update($_POST)){
                $solicitud = new SolicitudDAO();

                $solicitud->id_solicitud     = $id;
                $solicitud->id_solicitud     = $_POST['id_solicitud'];
                $solicitud->solicitud        = $_POST['solicitud'];
                $solicitud->descripcion         = $_POST['descripcion'];
                $solicitud->cantidad_kilos      = $_POST['cantidad_kilos'];

                $this->view->solicitud = $solicitud;
                $this->view->mensaje = "Solicitud actualizado correctamente";
            }else{
                $this->view->mensaje = "No se pudo actualizar lasolicitud";
            }
            $solicitudes = $this->view->datos = $this->model->read();
            $this->view->solicitudes = $solicitudes;
            $this->view->render('admin/listasolicitud');
        }
        function eliminar($param = null){
            $id = $param[0];
    
            if($this->model->delete($id)){
                $mensaje ="Solicitud eliminado correctamente";
                //$this->view->mensaje = "Alumno eliminado correctamente";
            }else{
                $mensaje = "No se pudo eliminar la solicitud";
                $this->view->mensaje = "No se pudo eliminar la solicitud";
            }
    
            //$this->render();
    
            echo $mensaje;
        }
    }