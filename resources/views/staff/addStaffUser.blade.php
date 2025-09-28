
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
                   Agregar Nuevo Usuario de Personal
                </h1>
                {{-- Register Section --}}
    
                <div class="status">
                    {{-- Registration Success Message --}}
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
                    @if (session("error"))
                        <div class="alert alert-danger">
                            {{session("error")}}
                        </div>
                    @endif
                    @if (session("success"))
                        <div class="alert alert-success p-1 m-1">
                            {{session("success")}}
                        </div>
                        
                    @endif
                    <form action="{{ route('staff.store') }}" method="post">
                        @csrf
                        {{-- Personal Innformation --}}
                        <div class="row">
                            <div class="col-6">

                                {{-- <h2 class="text-center" >Editar Usuario</h2> --}}
                                <div class="p-2 ">
                                    <label class="pb-2" for="name">Nombre</label>
                                    <input type="text" id="name" name="name" placeholder="Nombre Completo" class="d-block w-100 p-2">
                                </div>
                                <div class="p-2 ">
                                    <label class="pb-2" for="username">Nombre de Usuario</label>
                                    <input type="text" id="username" name="username" placeholder="Nombre de Usuario" autocomplete="off" class="d-block w-100 p-2">
                                </div>
                                <div class="p-2 ">
                                    <label class="pb-2" for="password">Contraseña</label>
                                    <input type="password" id="password" name="password" placeholder="Contraseña" class="d-block w-100 p-2">
                                </div>
                                <div class="p-2">
                                    <label class="pb-2" for="gender">Género</label>
                                    <select name="gender" id="gender">
                                        <option value="gender" disabled hidden selected> Seleccionar Género </option>
                                        <option value="Masculino"> Masculino </option>
                                        <option value="Femenino"> Femenino </option>    
                                    </select>
                                </div>
                            </div>
                            {{-- Contact and Service Details --}}
                            <div class="col-6">

                                {{-- Contact Information --}}
                                <div class="p-2 ">
                                    <label class="pb-2" for="contact">Número de Teléfono</label>
                                    <input type="tel"  name="contact" placeholder="Número de Teléfono" class="d-block w-100 p-2">
                                </div>
                                <div class="p-2 ">
                                    <label class="pb-2" for="address">Dirección</label>
                                    <input type="text"  name="address" placeholder="Dirección" class="d-block w-100 p-2">
                                </div>

                                {{-- Contact Information --}}
                                <div class="p-2">
                                    <label class="pb-2" for="role">Designación</label>
                                    <select name="role" id="role">
                                        <option value="" disabled selected hidden> Seleccionar Designación </option>
                                        <option value="cajero"> Cajero </option>
                                        <option value="recepcionista"> Recepcionista </option>
                                        <option value="entrenador" > Entrenador </option>
                                        <option value="asistente de gimnasio"> Asistente de Gimnasio </option>
                                        <option value="gerente"> Gerente </option>
                                    </select>
                                </div>

                            </div>
                        </div>

                        <input type="submit" value="Agregar Nuevo Personal" class="btn btn-success d-block w-100 p-2 mt-2">
                    </form>
                </div>
                  
            </div>
        </div>
    </div>
</div>
@include("footer")