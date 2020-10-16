<?php
                        //extendemos CI_Controller
class Delete_C extends CI_Controller{
    public function __construct() {
        //llamamos al constructor de la clase padre
        parent::__construct();
         
        //llamo al helper url
        $this->load->helper("url"); 
         
        //llamo o incluyo el modelo
        $this->load->model("Delete_M");
         
        //cargo la libreria de sesiones
        $this->load->library("session");
    }
     
    //controlador por defecto
    public function index(){
         
        //array asociativo con la llamada al metodo
        //del modelo
        $usuarios["ver"]=$this->Delete_M->ver();
         
        //cargo la vista y le paso los datos
        $this->load->view("home",$usuarios);
    }
     
    //controlador para añadir
    // public function add(){
         
    //     //compruebo si se a enviado submit
    //     if($this->input->post("submit")){
         
    //     //llamo al metodo add
    //     $add=$this->usuarios_model->add(
    //             $this->input->post("email"),
    //             $this->input->post("password"),
    //             $this->input->post("nombre"),
    //             $this->input->post("apellido")
    //             );
    //     }
    //     if($add==true){
    //         //Sesion de una sola ejecución
    //         $this->session->set_flashdata('correcto', 'Usuario añadido correctamente');
    //     }else{
    //         $this->session->set_flashdata('incorrecto', 'Usuario añadido correctamente');
    //     }
         
    //     //redirecciono la pagina a la url por defecto
    //     redirect(base_url());
    // }
     
    //controlador para modificar al que
    //le paso por la url un parametro
    public function mod($id_usuario){
        if(is_numeric($id_usuario)){
          $datos["mod"]=$this->usuarios_model->mod($id_usuario);
          $this->load->view("modificar_view",$datos);
          if($this->input->post("submit")){
                $mod=$this->usuarios_model->mod(
                        $id_usuario,
                        $this->input->post("submit"),
                        $this->input->post("email"),
                        $this->input->post("password"),
                        $this->input->post("nombre"),
                        $this->input->post("apellido")
                        );
                if($mod==true){
                    //Sesion de una sola ejecución
                    $this->session->set_flashdata('correcto', 'Usuario modificado correctamente');
                }else{
                    $this->session->set_flashdata('incorrecto', 'Usuario modificado correctamente');
                }
                redirect(base_url());
            }
        }else{
            redirect(base_url());
        }
    }
     
    //Controlador para eliminar
    public function eliminar($identification){
        if(is_numeric($identification)){
          $eliminar=$this->Delete_M->eliminar($identification);
          if($eliminar==true){
              $this->session->set_flashdata('correcto', 'Usuario eliminado correctamente');
          }else{
              $this->session->set_flashdata('incorrecto', 'Usuario eliminado correctamente');
          }
          redirect(base_url());
        }else{
          redirect(base_url());
        }
    }
}
?>

	
	

