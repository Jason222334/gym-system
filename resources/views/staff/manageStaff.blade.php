@include('header')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 sidebar-container">
            {{-- SideBar --}}
            @include('admin.parts.sidebar')
        </div>
        {{-- Page Content --}}
        <div class="col-md-9">
            <h1 class="text-center p-5">
                GESTION DE RECLUTAMIENTO DE PERSONAL
            </h1>
            <div class="offset-10 col-2 p-2">
                <a href="{{ route('staff.create') }}" class="btn btn-success">
                    Agregar Usuario de Personal
                    <i class="fa fa-plus"></i>
                </a>
            </div>
            <div class="attendances-table">
                <table class="table table-hover table-bordered text-center" style="font-size: 16px;font-weight: bold;">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre Completo</th>
                        <th scope="col">Nombre de Usuario</th>
                        <th scope="col">Género</th>
                        <th scope="col">Rol</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Contacto</th>
                        {{-- <th scope="col">Email</th> --}}
                        <th scope="col">Acción</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0?>
                        @foreach ($staff as $user)
                        <tr>
                            <th scope="row">{{++$i}}</th>
                            <td>{{$user->full_name}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->gender}} </td>
                            <td>{{$user->role}} </td>
                            <td>{{$user->address}}</td>
                            <td>{{$user->contact}}</td>
                            {{-- <td>{{$user->email}}</td> --}}
                            <td>
                                <a class="btn btn-success" href="{{route('staff.edit', $user->id)}}">Editar</a>   
                                <form action="{{ route('staff.destroy', $user->id) }}" method="POST" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger"> Eliminar</button>
                                </form>                             
                                {{-- <a  href="remove-staff/{{$user->id}}">Eliminar</a>                                 --}}
                            </td>
                        </tr>
                        @endforeach
                      
                      
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@include("footer")