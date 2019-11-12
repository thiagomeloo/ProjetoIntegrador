 <div class="container-fluid">
        <div class="d-sm-flex justify-content-between align-items-center mb-4">
            <h3 class="text-dark mb-0">Pagina inicial</h3>
        </div>

     <?php if(isset($_SESSION["msg"]) && ($_SESSION["msg"]["status"] == 0)){

         ?>
         <div class="row- col- alert sticky-top <?= $_SESSION["msg"]['tipo']?> alert-dismissible fade show" role="alert">
             <?= $_SESSION["msg"]['msg']?>
             <button type="button" class="close m-auto" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div>

         <?php
         //$_SESSION["msg"]["status"] = 1;
     } ?>
 </div>
