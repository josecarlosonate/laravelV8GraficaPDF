{{-- llamar a plantilla  --}}
@extends('layout.layout')
{{-- agregar titulo a la pagina  --}}
@section('titulo','Grafica | Ver')
{{-- agregando contenido  --}}
@section('contenido')
    <div>
        <div class="container">            
            <div>   
                {{-- caja para mostrar grafica               --}}
                <canvas id="myChart" width="400" height="100"></canvas>                
            </div>
            <div>  
                <input id="btnPDF" class="btn btn-info" type="button" value="EXPORTAR A PDF">            
            </div>
        </div>
    </div>

@endsection

