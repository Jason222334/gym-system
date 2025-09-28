
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
                Lista de Miembros Registrados
            </h1>
            <div class="members-table">
                <table class="table table-hover table-bordered text-center" style="font-size: 12px;font-weight: bold;">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Nombre de Usuario</th>
                        <th scope="col">Género</th>
                        <th scope="col">Número de Contacto</th>
                        <th scope="col">D.O.R</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Servicio Elegido</th>
                        <th scope="col">Plan</th>
                        <th scope="col">Acción</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0?>
                        @foreach ($members as $member)
                        <tr>
                            <th scope="row">{{++$i}}</th>
                            <td>{{$member->full_name}}</td>
                            <td>{{$member->username}}</td>
                            <td>{{$member->gender}}</td>
                            <td>{{$member->contact}}</td>
                            <td>{{$member->reg_date}}</td>
                            <td>{{$member->address}}</td>
                            <td>{{$member->amount}}</td>
                            <td>{{$member->services}}</td>
                            <td>{{$member->plan}} mes/s</td>
                            <td>
                                <form action="{{route('members.destroy', $member->id)}}" method="POST" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger">
                                        Eliminar
                                    </button>
                                </form>
                                {{-- <a  href="/admin/members/{{$member->id}}/delete"></a> --}}
                                <a class="btn btn-outline-success" href="{{route('members.edit', $member->id)}}">Editar</a>
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