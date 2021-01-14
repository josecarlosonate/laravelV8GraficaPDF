{{-- llamar a plantilla  --}}
@extends('layout.layout')
{{-- agregar titulo a la pagina  --}}
@section('titulo','Bienvenido')
{{-- agregando contenido  --}}
@section('contenido')
    <div class="container-fluid">
        <div class="container">
            <h2 class=" text-center">Bienvenido al sistema de grafica creado por las empresas KOR </h2>
            <div>
                <br>
                <p class="text-muted"><b> Descripcion del sistema:</b>
                Genera una grafica con opcion de exportar a un documento en PDF, esta grafica es dinamica ya que los datos son traidos desde nuestra base de datos para este ejemplo usaremos como modelo un sistema de ventas en el cual se dessea mostrar el numero de ventas obtenidas por año.                 
                </p>
                <p class=" text-info ">
                    NOTA: Usted esta en el modo Beta por lo tanto los datos no seran traidos desde una BD, sino que seran datos estaticos si dessea que el sistema se comporte de forma dinamica se requiere de la version premiun para adquiriar esta version dirijase a las oficinas de kor company S.A.S
                </p>
            </div>
        </div>
    </div>
@endsection
    

