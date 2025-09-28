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
                Reportes de Miembros    
            </h1>
            <div class="attendances-table">
                <table class="table table-hover table-bordered text-center" style="font-size: 16px;font-weight: bold;">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
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
                            <td>{{$member->services}}</td>
                            <td>{{$member->plan}} Mes/es</td>
                            <td>
                                <a class="btn btn-success" href="member-report/{{$member->id}}">
                                    <i class="fa fa-file"></i>
                                    Ver Reporte
                                </a>                                
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