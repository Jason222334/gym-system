
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
                    Agregar Nuevo Miembro
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
                    {{-- Registeration Errors --}}
                    {{-- @if (session('errors'))
                        @foreach (session('errors') as $error)
                        <div class="alert alert-danger p-1 m-1">
                            {{$error}}
                        </div>
                        @endforeach
                    @endif --}}

                    <form action="{{ route('members.store') }}" method="post">
                        @csrf
                        {{-- Personal Innformation --}}
                        <div class="row">
                            <div class="col-6">

                                <h2 class="text-center" >Registrar Nuevo Usuario</h2>
                                <div class="p-2 ">
                                    <label class="pb-2" for="name">Nombre</label>
                                    <input type="text" id="name" name="name" placeholder="Nombre Completo" class="d-block w-100 p-2">
                                </div>
                                <div class="p-2 ">
                                    <label class="pb-2" for="username">Nombre de Usuario</label>
                                    <input type="text" id="username" name="username" placeholder="Nombre de Usuario" autocomplete="off" class="d-block w-100 p-2">
                                </div>
                                {{-- <div class="p-2">
                                    <label class="pb-2" for="password">Contraseña</label>
                                    <input type="password" id="password" name="password"placeholder="Contraseña" autocomplete="off" class="d-block w-100 p-2">
                                </div> --}}
                                {{-- <div class="p-2">
                                    <label class="pb-2" for="role">Rol de Usuario</label>
                                    <select name="role" id="role">
                                        <option value="null" selected disabled hidden >Selecciona Rol de Usuario</option>
                                        <option value="admin" >Admin</option>
                                        <option value="staff" >Staff</option>
                                        <option value="member" >Miembro</option>
                                    </select>
                                </div> --}}
                                <div class="p-2">
                                    <label class="pb-2" for="gender">Género</label>
                                    <select name="gender" id="gender">
                                        <option value="null" selected disabled hidden >Selecciona Género</option>
                                        <option value="masculino" >Masculino</option>
                                        <option value="femenino" >Femenino</option>
                                    </select>
                                </div>
                                <div class="p-2">
                                    <label class="pb-2" for="plan">Plan</label>
                                    <select name="plan" id="plan">
                                        <option value="null" selected disabled hidden >Selecciona Plan</option>
                                        <option value="1" >Un Mes</option>
                                        <option value="3" >Tres Meses</option>
                                        <option value="6" >Seis Meses</option>
                                        <option value="12" >Un Año</option>

                                    </select>
                                </div>
                                <div class="p-2">
                                    <label for="date">Fecha de Registro</label>
                                    <input type="date" name="date" id="date" >
                                </div>
                            </div>
                            {{-- Contact and Service Details --}}
                            <div class="col-6">

                                {{-- Contact Information --}}
                                <h3 class="text-center" >Detalles de Contacto</h3>
                                <div class="p-2 ">
                                    <label class="pb-2" for="phone">Número de Teléfono</label>
                                    <input type="tel"  name="phone" placeholder="Número de Teléfono" class="d-block w-100 p-2">
                                </div>
                                <div class="p-2 ">
                                    <label class="pb-2" for="address">Dirección</label>
                                    <input type="text"  name="address" placeholder="Dirección" class="d-block w-100 p-2">
                                </div>

                                {{-- Contact Information --}}
                                <h3 class="text-center" >Detalles del Servicio</h3>
                                <div class="p-2 ">
                                    <label class="pb-2" for="service">Servicios</label>
                                    <div class="services">
                                        <div class="Sauna">
                                            <label for="">Fitness - 65$/mes</label>
                                            <input type="radio" name="services" value="Fitness">
                                        </div>
                                        <div class="Sauna">
                                            <label for="">Sauna - 55$/mes</label>
                                            <input type="radio" name="services" value="Sauna">
                                        </div>
                                        <div class="Sauna">
                                            <label for="">Cardio - 45$/mes</label>
                                            <input type="radio" name="services" value="Cardio">
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2">
                                    <label for="amount">Total a Pagar</label>
                                    <input type="number" name="amount" id="amount">
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