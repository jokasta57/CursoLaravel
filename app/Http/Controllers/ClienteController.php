<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente; //importando la clase Cliente, del Modelo

class ClienteController extends Controller
{
    public	function index(){
        $lista = Cliente::all();
        return 'Hola soy el controlador de Cliente \n Registros: '. $lista;
    }
    
    public function insertar(){
        //***instancia en Memoria
        $objetoCliente = new Cliente();
        $objetoCliente->id = 1;
        $objetoCliente->nombre = 'Gustavo';
        $objetoCliente->ciudad = 'Xalapa';
        $objetoCliente->direccion = 'Av. Siempre Viva S/N';
        $objetoCliente->edad = '41';
        $objetoCliente->telefono = '2281345345';
        $objetoCliente->save();
            return 'Insertando Controller Cliente'.$objetoCliente;
    }
    
    public function eliminar(){
        $objetoCliente=Cliente::find(1);
        $objetoCliente-> delete();
        return 'Cliente eliminado';
    }
    
    public function actualizar(){
        $objetoCliente=Cliente::find(1);
        //$objetoCliente->idcliente = 1;
        $objetoCliente->nombre = 'Guillermo';
        $objetoCliente->ciudad = 'Tantoyuca';
        $objetoCliente->direccion = 'Av. Siempre Viva S/N';
        $objetoCliente->edad = '11';
        $objetoCliente->telefono = '2281345345';
        $objetoCliente->save();
            
        return 'Cliente actualizado';
    }

    public function verFormulario(){
        return view("cliente");
    }


    //*****Métodos para Formularios de Clientes ******/
    public function crearRegistro(Request $request){

        $datos=request()->all();
        $this->insertarCliente($request);
        //return $datos;
        //return "Se inserto el registro con éxito!";
        return $this->verTabla();
    }   

    public function insertarCliente(Request $request){

        $objetoCliente = new Cliente();
        //$objetoCliente->id = 1;
        $objetoCliente->nombre = request()->nombre;
        $objetoCliente->ciudad = request()->ciudad;
        $objetoCliente->direccion = request()->direccion;
        $objetoCliente->edad = request()->edad;
        $objetoCliente->telefono = request()->telefono;
        $objetoCliente->save();
            return 'Insertando Controller Cliente'.$objetoCliente;
    }

    public function verTabla(){
        $listaClientes['todos']=Cliente::all();
        return view("tablaCliente", $listaClientes);
    }

    public function editarTabla($id){

        $objetoCliente=Cliente::find($id);

        return view('actualizarCliente', compact('objetoCliente'));

    }

    public function guardarEdicion(Request $request){
        
        $objetoCliente=Cliente::find(request()->id);
        //$objetoCliente->idcliente = 1;
        $objetoCliente->nombre = request()->nombre;
        $objetoCliente->ciudad = request()->ciudad;
        $objetoCliente->direccion = request()->direccion;
        $objetoCliente->edad = request()->edad;
        $objetoCliente->telefono = request()->telefono;
        $objetoCliente->save();
            
        return $this->verTabla();
    }

    public function eliminarCliente($id){
       
        Cliente::where('id', $id)->delete();

        return $this->verTabla();
    }
    


}
