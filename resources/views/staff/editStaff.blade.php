
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
                   Update Staff Data 
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
                    <form action="{{ route('staff.update', $user->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        {{-- Personal Innformation --}}
                        <div class="row">
                            <div class="col-6">

                                {{-- <h2 class="text-center" >Editar Usuario</h2> --}}
                                <input type="hidden" name="id" value="{{$user->id}}">
                                <div class="p-2 ">
                                    <label class="pb-2" for="name">Nombre</label>
                                    <input type="text" id="name" name="name" value="{{$user->full_name}}" placeholder="Nombre Completo" class="d-block w-100 p-2">
                                </div>
                                <div class="p-2 ">
                                    <label class="pb-2" for="username">Nombre de Usuario</label>
                                    <input type="text" id="username" name="username" value="{{$user->username}}" placeholder="Nombre de Usuario" autocomplete="off" class="d-block w-100 p-2">
                                </div>
                                <div class="p-2 ">
                                    <label class="pb-2" for="password">Contraseña</label>
                                    <input type="text" id="password" name="password" value="***********" disabled class="d-block w-100 p-2">
                                    Nota: Solo se permite a los miembros cambiar su contraseña hasta que sea una emergencia.
                                </div>
                                <div class="p-2">
                                    <label class="pb-2" for="gender">Género</label>
                                    <select name="gender" id="gender">
                                        <option value="Masculino" @if ($user->gender == "Masculino") {{"selected"}} @endif> Masculino </option>
                                        <option value="Femenino" @if ($user->gender == "Femenino") {{"selected"}} @endif> Femenino </option>
                                    </select>
                                </div>
                            </div>
                            {{-- Contact and Service Details --}}
                            <div class="col-6">

                                {{-- Contact Information --}}
                                {{-- <h3 class="text-center" >Detalles de Contacto</h3> --}}
                                <div class="p-2 ">
                                    <label class="pb-2" for="contact">Número de Teléfono</label>
                                    <input type="tel"  name="contact" value="{{$user->contact}}" placeholder="Número de Teléfono" class="d-block w-100 p-2">
                                </div>
                                <div class="p-2 ">
                                    <label class="pb-2" for="address">Dirección</label>
                                    <input type="text"  name="address" value="{{$user->address}}" placeholder="Dirección" class="d-block w-100 p-2">
                                </div>

                                {{-- Contact Information --}}
                                <div class="p-2">
                                    <label class="pb-2" for="role">Designación</label>
                                    <select name="role" id="role">
                                        <option value="cashier" @if ($user->role == "cajero") {{"selected"}} @endif> Cajero </option>
                                        <option value="front-desk" @if ($user->role == "recepcionista") {{"selected"}} @endif> Recepcionista </option>
                                        <option value="trainer" @if ($user->role == "entrenador") {{"selected"}} @endif> Entrenador </option>
                                        <option value="gym-assistant" @if ($user->role == "asistente de gimnasio") {{"selected"}} @endif> Asistente de Gimnasio </option>
                                        <option value="manager" @if ($user->role == "gerente") {{"selected"}} @endif> Gerente </option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        
                        <input type="submit" value="Update Staff Data" class="btn btn-success d-block w-100 p-2 mt-2">
                    </form>
                </div>
                  
            </div>
        </div>
    </div>
</div>
@include("footer")