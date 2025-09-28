
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
                Estado Actual del Miembro
            </h1>
            <div class="members-table">
                <table class="table table-hover table-bordered text-center" style=" font-weight:bold;">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre Completo</th>
                        <th scope="col">Número de Contacto</th>
                        <th scope="col">Servicio Elegido</th>
                        <th scope="col">Plan</th>
                        <th scope="col">Estado de Membresía</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0?>
                        @foreach ($members as $member)
                        <tr>
                            <th scope="row">{{++$i}}</th>
                            <td>{{$member->full_name}}</td>
                            <td>{{$member->contact}}</td>
                            <td>{{$member->services}}</td>
                            <td>{{$member->plan}} mes/es</td>
                            @if ($member->status == "pending")
                            <td style="color:rgb(231, 115, 19)">
                                {{$member->status}}
                                <a class="btn btn-outline-primary" href="/admin/activate-member/{{$member->id}}" >activar</a>
                            </td>
                            @elseif ($member->status == "active")
                            <td style="color:rgb(12, 112, 37)">
                                {{$member->status}}
                            </td>
                            @elseif ($member->status == "expired")
                            <td style="color:rgb(231, 26, 19)">
                                {{$member->status}}
                            </td>
                            @endif
                            
                        </tr>
                        @endforeach
                      
                      
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@include("footer")