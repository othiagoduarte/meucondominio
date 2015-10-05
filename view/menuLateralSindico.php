<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#perfil"><i class="fa fa-user"></i> Perfil <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="perfil" class="collapse">
                <li>
                    <a  href="javascript:;" data-toggle="modal" data-target="#myModal-1"><i class="fa fa-fw fa-edit"></i> Editar dados</a>
                </li>
             </ul>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#chamados"><i class="fa fa-list"></i> Chamados <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="chamados" class="collapse">
                <li>
                    <a  href="javascript:;" data-toggle="modal" data-target="#myModal-2"><i class="fa fa-clipboard"></i> Visualizar</a>
                </li>
                <li>
                    <a  href="javascript:;" data-toggle="modal" data-target="#myModal-3"><i class=" fa fa-plus"></i> Criar novo</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#relatorio"><i class=" fa fa-print"></i> Relatórios <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="relatorio" class="collapse">
                <li>
                    <a  href="javascript:;" data-toggle="modal" data-target="#myModal-4"><i class="fa fa-print"></i> chamados do mês</a>
                </li>
                <li>
                    <a  href="javascript:;" data-toggle="modal" data-target="#myModal-5"><i class="fa fa-print"></i> chamados abertos</a>
                </li>
            </ul>
        </li>    
    </ul>
</div>
</nav> <!-- Fim nav do menu laterar --> 
<div id="page-wrapper" style="width: 100%; height: 100%;">
    <div class="container-fluid"  >
        <div class="logo" align="center">
            <br><br><br><br>
            <img src="img/predio.png" style="width: 50%; height: 50%;" />
        </div>
    </div>
</div>
<!-- Modal - Iem 1 -->
<div class="modal fade" id="myModal-1" role="dialog">
    <div class="modal-dialog modal-lg" style="width: 90%; height: 100%;" >
        <div class="modal-content" >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Dados Cadastrais</h4>
            </div>
            <div class="modal-body" style="height: 70%;">
            <?php include "dadosCadastrais.php"?>
            </div>               
            <div class="modal-footer">
                <button type="button" class="btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>    
<!-- Modal - Iem 1 - Fim -->
<!-- Modal - Iem 2 -->
<div class="modal fade" id="myModal-2" role="dialog">
    <div class="modal-dialog modal-lg" style="width: 90%; height: 100%;" >
        <div class="modal-content" >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Lista de chamados</h4>
            </div>
            <div class="modal-body" style="height: 70%;">
                 <?php include "listaDeChamados.php"?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
            </div>
        </div>
    </div>
</div>    
<!-- Modal - Iem 1 - Fim -->
<!-- Modal - Iem 1 -->
<div class="modal fade" id="myModal-3" role="dialog">
    <div class="modal-dialog modal-lg" style="width: 90%; height: 100%;" >
        <div class="modal-content" >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Novo chamado</h4>
            </div>
            <div class="modal-body" style="height: 70%;">
                <p>Novo Chamado</p>
                <?php include "novoChamado.php"?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
            </div>
        </div>
    </div>
</div>    
<!-- Modal - Iem 1 - Fim -->
<!-- Modal - Iem 1 -->
<div class="modal fade" id="myModal-4" role="dialog">
    <div class="modal-dialog modal-lg" style="width: 90%; height: 100%;" >
        <div class="modal-content" >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body" style="height: 70%;">
                <p>Modal - Iem 1</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
            </div>
        </div>
    </div>
</div>    
<!-- Modal - Iem 1 - Fim -->
<!-- Modal - Iem 1 -->
<div class="modal fade" id="myModal-5" role="dialog">
    <div class="modal-dialog modal-lg" style="width: 90%; height: 100%;" >
        <div class="modal-content" >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body" style="height: 70%;">
                <p>Modal - Iem 1</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Sair</button>
            </div>
        </div>
    </div>
</div>    
<!-- Modal - Iem 1 - Fim -->

<!-- Modal - Iem 1 -->
<div class="modal fade" id="myModal-6" role="dialog">
    <div class="modal-dialog modal-lg" style="width: 90%; height: 100%;" >
        <div class="modal-content" >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body" style="height: 70%;">
                <p>Modal - Iem 1</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
            </div>
        </div>
    </div>
</div>    
<!-- Modal - Iem 1 - Fim -->
