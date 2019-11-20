 <div class="container-fluid">
     <div class="d-sm-flex justify-content-between align-items-center mb-4 margin_topo">
         <h3 class="text-dark">Gerenciar Admin</h3>
         <a class="btn bg_color_secundary btn-lg fas fa-user-plus" role="button" href="/cadastrarAdmin"> Cadastrar </a>
     </div>

     <div class="row">
         <div class="col-md-6 col-xl-4 mb-4">
             <div class="card shadow border-left-success py-2">
                 <div class="card-body">
                     <div class="row align-items-center no-gutters">
                         <div class="col mr-2">
                             <div class="text-uppercase text-success font-weight-bold text-xs mb-1"><span>Administradores ativos</span></div>
                             <div class="text-dark font-weight-bold h5 mb-0"><span>100</span></div>
                         </div>
                         <div class="col-auto"><i class="fas fa-user-check fa-2x text-gray-300"></i></div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="col-md-6 col-xl-4 mb-4">
             <div class="card shadow border-left-danger py-2">
                 <div class="card-body">
                     <div class="row align-items-center no-gutters">
                         <div class="col mr-2">
                             <div class="text-uppercase text-danger font-weight-bold text-xs mb-1"><span>Administradores inativos</span></div>
                             <div class="text-dark font-weight-bold h5 mb-0"><span>100</span></div>
                         </div>
                         <div class="col-auto"><i class="fas fa-user-times fa-2x text-gray-300"></i></div>
                     </div>
                 </div>
             </div>
         </div> <div class="col-md-6 col-xl-4 mb-4">
             <div class="card shadow border-left-primary py-2">
                 <div class="card-body">
                     <div class="row align-items-center no-gutters">
                         <div class="col mr-2">
                             <div class="text-uppercase text-primary font-weight-bold text-xs mb-1"><span>Total de Administradores</span></div>
                             <div class="text-dark font-weight-bold h5 mb-0"><span>200</span></div>
                         </div>
                         <div class="col-auto"><i class="fas fa-users fa-2x text-gray-300"></i></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
    <div class="table-responsive table-overflow" style="max-height: 50vh">
         <table class="table">
             <thead>
             <tr>
                 <th scope="col">id</th>
                 <th scope="col">Nome</th>
                 <th scope="col">CPF</th>
                 <th scope="col">Data de Nascimento</th>
                 <th scope="col">Email</th>
                 <th scope="col">Ação</th>
             </tr>
             </thead>
             <tbody>
             <tr>
                 <th scope="row">1</th>
                 <td>Thiago</td>
                 <td>0000</td>
                 <td>00/00/0000</td>
                 <td>admin@tads.com</td>
                 <td>
                     <div class="btn btn-circle bg_color_secundary">
                         <a class="btn fas fa-user-edit fa-1x"></a>
                     </div>
                     <div class="btn btn-circle bg_color_secundary">
                         <a class="btn fas fa-user-times fa-1x"></a>
                     </div>
                 </td>
             </tr>
             <tr>
                 <th scope="row">1</th>
                 <td>Thiago</td>
                 <td>0000</td>
                 <td>00/00/0000</td>
                 <td>admin@tads.com</td>
                 <td>
                     <div class="btn btn-circle bg_color_secundary">
                         <a class="btn fas fa-user-edit fa-1x"></a>
                     </div>
                     <div class="btn btn-circle bg_color_secundary">
                         <a class="btn fas fa-user-times fa-1x"></a>
                     </div>
                 </td>
             </tr>
             </tbody>
         </table>
    </div>
 </div>
