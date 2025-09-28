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
                Lista de Asistencia Registrada 
            </h1>
            <div class="p-2" id="report" style="border: 2px solid #ccc">
                <div class="row">
                    <div class="col-4">
                        <h2>Perfect GYM Club</h2>
                        <div>
                            <span>5021 Wetzel Lane, Williamsburg</span>
                        </div>
                        <div>
                            <span>Tel: 231-267-6011</span>
                        </div>
                        <div>
                            <span>Email: support@perfectgym.com</span>
                        </div>
                    </div>

                    <div class="col-8">
                        <div>
                            <table class="table table-hover table-bordered text-center" style="font-size: 14px">
                                <thead class="active">
                                    <tr>
                                        <th>Membresia ID</th>
                                        <th>Servicios Tomados</th>
                                        <th>Mis Planes (Hasta)</th>
                                        <th>Dirección</th>
                                        <th>Cargo</th>
                                        <th>Conteo de Asistencia</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="col">PGC-SS-{{$member->id}}</th>
                                        <th scope="col">{{$member->services}}</th>
                                        <th scope="col">{{$member->plan}} Mes/es</th>
                                        <th scope="col">{{$member->address}}</th>
                                        <th scope="col">{{$member->amount}}</th>
                                        <th scope="col">{{$member->attendance_count}}</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center p-3" style="border: 1px solid #ccc" >
                            <h4>Último Pago Realizado: </h4>
                            <span>Miembro Desde: {{$member->reg_date}}</span>
                        </div>
                    </div>
                </div>

                <div class="row pt-4">
                    <div class="col-4">
                        <h4 class="p-2">Miembro {{$member->name}},</h4>
                        <span>La membresía está actualmente {{$member->status}}</span>
                        <div>
                            Gracias por elegir nuestros servicios.
                        </div>
                        <div>
                            - en nombre de todo el equipo
                        </div>
                    </div>
                    <div class="col-6"></div>
                    <div class="col-2">
                        <div><h5>Aprobado Por:</h5></div>
                        <div><img src="/imgs/stamp-sample.png" alt="stamp" width="100" height="100"></div>
                        <div><span>Nota: Autogenerado</span></div>
                    </div>
                </div>
            </div>
            <div class="text-center p-3">
                <button class="btn btn-primary" id="btn-print" onclick="window.print()">Imprimir</button>
            </div>
        </div>
    </div>
</div>
@include("footer")