
@include('header')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 sidebar-container">
            {{-- SideBar --}}
            @include('admin.parts.sidebar')
        </div>
        <div class="col-md-9 p-0">
            <div class="container-fluid p-4" style="min-height: 100vh;">
                <h1 class="text-center p-4">
                    Agregar Nuevo Equipo 
                </h1>
                {{-- Register Section --}}
    
                <div class="status">
                    {{-- Registeration Success Message --}}
                    @if ($errors->any)
                        <div class="row">
                            @foreach ($errors->all() as $error)
                            <div class="col-6">
                                <div class="alert alert-danger">
                                    {{$error}}
                                </div>
                            </div>
                        @endforeach</div>                        
                    @endif
                    @if (session("success"))
                        <div class="alert alert-success p-1 m-1">
                            {{session("success")}}
                        </div>
                        
                    @endif
                    <form action="{{route('equipments.update', $equipment->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        {{-- Personal Innformation --}}
                        <div class="row">
                            <div class="col-6">

                                <h2 class="text-center" >Registrar Nuevo Equipo</h2>
                                <div class="p-2 ">
                                    <label class="pb-2" for="name">Nombre del Equipo</label>
                                    <input type="text" id="name" name="name" value="{{$equipment->name}}" placeholder="Nombre del Equipo" class="d-block w-100 p-2" required>
                                </div>
                                <div class="p-2 ">
                                    <label class="pb-2" for="description">Descripción del Equipo</label>
                                    <input type="textarea" id="description" name="description" value="{{$equipment->description}}" placeholder="Descripción" autocomplete="off" class="d-block w-100 p-2" required>
                                </div>
                                
                                <div class="p-2">
                                    <label for="date">Fecha de Compra</label>
                                    <input type="date" name="date" id="date" value="{{$equipment->date}}" required>
                                </div>
                                <div class="p-2">
                                    <label for="quantity">Cantidad</label>
                                    <input type="number" name="quantity" id="quantity" value="{{$equipment->quantity}}" required>
                                </div>
                                
                            </div>
                            {{-- Contact and Service Details --}}
                            <div class="col-6">

                                {{-- Contact Information --}}
                                <h3 class="text-center" >Otros Detalles</h3>
                                <div class="p-2 ">
                                    <label class="pb-2" for="v_name">Nombre del Proveedor</label>
                                    <input type="text" id="v_name" name="v_name" value="{{$equipment->vendor}}" placeholder="Nombre del Proveedor" class="d-block w-100 p-2" required>
                                </div>
                                <div class="p-2 ">
                                    <label class="pb-2" for="address">Dirección</label>
                                    <input type="text"  name="address" value="{{$equipment->address}}" placeholder="Dirección" class="d-block w-100 p-2" required>
                                </div>
                                <div class="p-2 ">
                                    <label class="pb-2" for="contact">Número de Contacto</label>
                                    <input type="tel"  name="contact" value="{{$equipment->contact}}" placeholder="Número de Contacto" class="d-block w-100 p-2" required>
                                </div>

                                {{-- Contact Information --}}
                                <h3 class="text-center mt-3" >Detalles de Precios</h3>
                                <div class="p-2 ">
                                    <div class="cost">
                                        <label for="">Costo por Artículo</label>
                                        <input type="number" name="cost" value="{{$equipment->cost}}" placeholder="267$" required>
                                    </div>
                                </div>
                               

                            </div>
                        </div>
                        
                        <input type="submit" value="Submit" class="btn btn-success d-block w-100 p-2 mt-2">
                    </form>
                </div>
                  
            </div>
        </div>
    </div>
</div>
@include("footer")